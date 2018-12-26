<?php
class M_customer extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function listCustomer(){
      $query=$this->db->query("SELECT * FROM khachhang;");
      return $query->result_array();
    }
    public function countAll(){
        $query=$this->db->query("SELECT * FROM khachhang;");
        return $query->num_rows();
    }
    public function getList($start,$size){
        $start=isset($start) ? $start : 0;
        $query=$this->db->query("SELECT * FROM khachhang limit $start , $size;");
        return $query->result_array(); 
    }
    public function addCustomer($SDTKH,$TenKH,$DiaChi){
        $query=$this->db->query("INSERT INTO `khachhang`(`SDTKH`, `TenKH`, `DiaChi`) VALUES ('$SDTKH','$TenKH','$DiaChi');");
    }
    public function getByID($MaNV){
        $query=$this->db->query("SELECT * FROM `chitietdv` WHERE MaDV='$MaNV';");
        return $query->result_array();
    }
    public function getByIDKH($id){
        $query=$this->db->query("SELECT * FROM `khachhang` WHERE `SDTKH`='$id';");
        return $query->row_array();
    }
    public function editCustomer($id,$TenKH,$DiaChi){
      $query=$this->query("UPDATE `khachhang` SET `TenKH`='$TenKH',`DiaChi`='$DiaChi' WHERE `SDTKH`='$id';");
    }


}
?>