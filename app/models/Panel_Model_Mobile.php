<?php

class Panel_Model_Mobile extends ModelMobile {

    public function __construct() {
        parent::__construct();
    }

    //admin cihaz ıd select
    public function shuttleAdminCihaz($cihazID) {
        $sql = "SELECT bsadmincihazRecID FROM bsadmincihaz WHERE bsadmincihazRecID=" . "'$cihazID'";
        return ($count = $this->db->select($sql));
    }

    public function shuttleKullaniciLogin($array = array(), $Kadi, $Sifre, $KullaniciID, $tableName) {
        $sql = "SELECT " . $Kadi . "," . $KullaniciID . " FROM " . $tableName . " WHERE " . $Kadi . " = :loginKadi && " . $Sifre . " = :loginSifre";
        return ($count = $this->db->select($sql, $array));
    }

    //admin süper admini çeksin diye 
    public function shuttleKullaniciLoginA($array = array(), $Kadi, $Sifre, $KullaniciID, $tableName) {
        $sql = "SELECT " . $Kadi . "," . $KullaniciID . ", BSSuperAdmin FROM " . $tableName . " WHERE " . $Kadi . " = :loginKadi && " . $Sifre . " = :loginSifre";
        return ($count = $this->db->select($sql, $array));
    }

    //admin cihaz kayıt
    public function shuttleAdminCihazInsert($data) {
        return ($this->db->insert("bsadmincihaz", $data));
    }
}

?>
