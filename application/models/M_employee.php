<?php
class M_employee extends CI_Model{
  public function __construct(){
  parent::__construct();
}
  public function listEmployee(){
    $query=$this->db->query("SELECT * FROM nhanvien");
    return $query->result_array();
  }
}

?>