<?php
class M_customer extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function listCustomer(){
      $query=$this->db->query("SELECT * FROM khachhang");
      return $query->result_array();
    }
}
?>