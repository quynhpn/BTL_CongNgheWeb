<?php
class M_employee extends CI_Model{
  public function __construct(){
  parent::__construct();
}
  public function listEmployee(){
    $query=$this->db->query("SELECT * FROM nhanvien JOIN chucvu ON nhanvien.MaCV=chucvu.MaCV;");
    return $query->result_array();
  }
  public function countAll(){
        $query=$this->db->query("SELECT * FROM nhanvien JOIN chucvu ON nhanvien.MaCV=chucvu.MaCV WHERE nhanvien.HoatDong <> 0;");
        return $query->num_rows();
    }
    public function getList($start,$size){
        $start=isset($start) ? $start : 0;
        $query=$this->db->query("SELECT * FROM nhanvien JOIN chucvu ON nhanvien.MaCV=chucvu.MaCV WHERE nhanvien.HoatDong <> 0 limit $start , $size;");
        return $query->result_array(); 
    }
    public function deleteByID($id){
      $this->db->query("UPDATE `nhanvien` SET `HoatDong`=0 WHERE  MaNV='$id';");
    }
    
}

?>