<?php

class Panel_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    //adminin bildirim ayarlarını çekiyorum
    public function adminBildirimAyar($adminID) {
        $sql = "SELECT BSAyarTip FROM bsadminbildirimayar Where BSAdminID=" . $adminID;
        return($this->db->select($sql));
    }

    //bildirimler okundu
    public function adminBildirimOkundu($data, $bildirimID) {
        return ($this->db->update("bsadminbildirim", $data, "BSAdminBildirimID=" . $bildirimID));
    }

}

?>
