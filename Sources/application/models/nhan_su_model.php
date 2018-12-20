<?php
class Nhan_su_model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function htds_nhansu(){
      $this->db->select("id, username, level");
        $query=$this->db->get("nhansu");
        return $query->result_array();
    }
}
?>