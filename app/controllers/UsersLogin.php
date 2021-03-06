<?php

class UsersLogin extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->login();
    }

    //daha önce login oldu ise
    function login() {
        //session güvenlik kontrolü
        $form = $this->load->otherClasses('Form');
        $sessionKey = $form->sessionKontrol();

        if (Session::get("BSShuttlelogin") == true && Session::get("sessionkey") == $sessionKey) {
            header("Location:" . SITE_URL_HOME . "/panel");
        } else {
            $this->runLogin($form);
        }
    }

    public function runLogin($form) {
        $form->post('usersloginkadi', true);
        $loginKadi = $form->values['usersloginkadi'];
        if (isset($loginKadi) && $loginKadi != '') {
            $usersselect_model = $this->load->model("adminselectdb_model");

            $form->post('usersloginkadi', true);
            $loginKadi = $form->values['usersloginkadi'];
            $form->post('usersloginsifre', true);

            $loginfirmaID = $form->substrEnd($loginKadi, 8);

            //return database results
            $UserSelectDb = $usersselect_model->kullaniciSelectDb($loginfirmaID);

            $SelectdbName = $UserSelectDb[0]['rootFirmaDbName'];
            $SelectdbIp = $UserSelectDb[0]['rootFirmaDbIp'];
            $SelectdbUser = $UserSelectDb[0]['rootFirmaDbUser'];
            $SelectdbPassword = $UserSelectDb[0]['rootFirmaDbSifre'];
            $SelectdbFirmaKod = $UserSelectDb[0]['rootfirmaKodu'];
            $SelectdbFirmaDurum = $UserSelectDb[0]['rootfirmaDurum'];

            if ($SelectdbFirmaDurum != 0) {
                $loginTip = 1;
                $loginSifre = $form->values['usersloginsifre'];
                $sifresonuc = $form->userSifreOlustur($loginKadi, $loginSifre, $loginTip);

                if ($loginTip == 1) {
                    $Kadi = 'BSAdminKadi';
                    $Sifre = 'BSAdminSifre';
                    $kullaniciID = 'BSAdminID';
                    $tableName = 'bsadmin';
                    $adminID = 'BSAdminID';
                } else {
                    //$this->load->view("Entry/loginForm");
                }

                if ($form->submit()) {
                    $data = array(
                        ':loginKadi' => $loginKadi,
                        ':loginSifre' => $sifresonuc
                    );
                }

                //yeni db create
                Session::set("selectDbName", $SelectdbName);
                Session::set("selectDbIp", $SelectdbIp);
                Session::set("selectDbUser", $SelectdbUser);
                Session::set("selectDbPassword", $SelectdbPassword);
                Session::set("selectFirmaDurum", $SelectdbFirmaDurum);
                Session::set("selectDbEncryption", 'ShutteBSDb');

                $admin_model = $this->load->model("admin_model");

                $result = $admin_model->userControl($data, $Kadi, $Sifre, $kullaniciID, $tableName);
                if ($result[0]['Status'] != 0) {
                    if ($result == false) {

                        unset($_SESSION['selectDbEncryption']);
                        unset($_SESSION['selectDbName']);
                        unset($_SESSION['selectDbIp']);
                        unset($_SESSION['selectDbUser']);
                        unset($_SESSION['selectDbPassword']);
                        unset($_SESSION['selectFirmaDurum']);

                        //yanlış bilgi
                        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
                        if (!Session::get("dil")) {
                            Session::set("dil", $lang);
                            $form = $this->load->multilanguage($lang);
                            $deger = $form->multilanguage();
                        } else {
                            $form = $this->load->multilanguage(Session::get("dil"));
                            $deger = $form->multilanguage();
                        }
                        $this->load->view("Entry/loginForm", $deger);
                    } else {
                        $sessionKey = $form->sessionKontrol();

                        //kullanıcı işlemleri başarılı
                        //login olarak session tanımlıyoruz admin panelini girerken login true ise diye
                        Session::set("BSShuttlelogin", "true");

                        //session güvenlik anahtarı
                        Session::set("sessionkey", $sessionKey);
                        Session::set("username", $result[0][$Kadi]);
                        Session::set("kullaniciad", $result[0]['BSAdminAd']);
                        Session::set("kullanicisoyad", $result[0]['BSAdminSoyad']);
                        Session::set("userId", $result[0][$adminID]);
                        Session::set("userTip", $loginTip);
                        Session::set("userRutbe", $result[0]["BSSuperAdmin"]);
                        Session::set("userFirmaKod", $SelectdbFirmaKod);
                        Session::set("FirmaId", $loginfirmaID);

                        header("Location:" . SITE_URL_HOME . "/panel");
                    }
                } else {
                    unset($_SESSION['selectDbEncryption']);
                    unset($_SESSION['selectDbName']);
                    unset($_SESSION['selectDbIp']);
                    unset($_SESSION['selectDbUser']);
                    unset($_SESSION['selectDbPassword']);
                    unset($_SESSION['selectFirmaDurum']);

                    //yanlış bilgi
                    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
                    if (!Session::get("dil")) {
                        Session::set("dil", $lang);
                        $form = $this->load->multilanguage($lang);
                        $deger = $form->multilanguage();
                    } else {
                        $form = $this->load->multilanguage(Session::get("dil"));
                        $deger = $form->multilanguage();
                    }
                    $this->load->view("Entry/loginForm", $deger);
                }
            } else {
                //yanlış bilgi
                $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
                if (!Session::get("dil")) {
                    Session::set("dil", $lang);
                    $form = $this->load->multilanguage($lang);
                    $deger = $form->multilanguage();
                } else {
                    $form = $this->load->multilanguage(Session::get("dil"));
                    $deger = $form->multilanguage();
                }
                $this->load->view("Entry/loginForm", $deger);
            }
        } else {
            $this->load->view("Entry/loginForm", $deger);
        }
    }

}
?>


