<?php
class M_customer extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function listCustomer(){
      $query=$this->db->query("SELECT * FROM khachhang");
      return $query->result_array();
    }
    public function countAll(){
        $query=$this->db->query("SELECT * FROM khachhang WHERE IsActive <> 0;");
        return $query->num_rows();
    }
    public function getList($start,$size){
        $start=isset($start) ? $start : 0;
        $query=$this->db->query("SELECT * FROM khachhang WHERE IsActive <> 0 limit $start , $size;");
        return $query->result_array(); 
    }
    public function deleteByID($id){
        $this->db->query("UPDATE `khachhang` SET `IsActive`=0 WHERE  SĐT='$id';");
    }

}
?>