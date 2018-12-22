<?php
class M_service extends CI_Model{
  public function __construct(){
  parent::__construct();
}
  public function listService(){
    $query=$this->db->query("SELECT * FROM dichvu");
    return $query->result_array();
  }
  public function countAll(){
        $query=$this->db->query("SELECT * FROM dichvu WHERE HoatDong <> 0");
        return $query->num_rows();
    }
    public function getList($start,$size){
        $start=isset($start) ? $start : 0;
        $query=$this->db->query("SELECT * FROM dichvu WHERE HoatDong <> 0 limit $start , $size;");
        return $query->result_array(); 
    }
    public function deleteByID($id){
      $this->db->query("UPDATE `dichvu` SET `HoatDong`=0 WHERE  MaDV='$id';");
    }
}

?>