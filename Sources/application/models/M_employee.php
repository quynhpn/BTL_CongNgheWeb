<?php
class M_employee extends CI_Model{
  public function __construct(){
  parent::__construct();
}
  public function listEmployee(){
    $query=$this->db->query("SELECT * FROM nhanvien JOIN taikhoan WHERE nhanvien.MaNV=taikhoan.MaNV AND nhanvien.HoatDong <> 0;");
    return $query->result_array();
  }
  public function countAll(){
        $query=$this->db->query("SELECT * FROM nhanvien JOIN taikhoan WHERE nhanvien.MaNV=taikhoan.MaNV AND nhanvien.HoatDong <> 0;");
        return $query->num_rows();
    }
    public function getList($start,$size){
        $start=isset($start) ? $start : 0;
        $query=$this->db->query("SELECT * FROM nhanvien JOIN taikhoan WHERE nhanvien.MaNV=taikhoan.MaNV AND nhanvien.HoatDong <> 0 limit $start , $size;");
        return $query->result_array(); 
    }
    public function deleteByID($id){
      $this->db->query("UPDATE `nhanvien` SET `HoatDong`=0 WHERE  MaNV='$id';");
      $this->db->query("UPDATE `taikhoan` SET `HoatDong`=0 WHERE  MaNV='$id';");
    }
    public function addEmployee($TenDN, $MK, $MaNV, $TenNV, $SDTNV, $Email, $ChucVu){
      $query=$this->db->query("INSERT INTO nhanvien(`MaNV`, `TenNV`, `SDTNV`, `Email`, `ChucVu`, `HoatDong`) VALUES ('$MaNV', '$TenNV', '$SDTNV', '$Email', '$ChucVu', 1);");
       $query=$this->db->query("INSERT INTO `taikhoan`(`TenDN`, `MatKhau`, `MaNV`) VALUES ('$TenDN','$MK','$MaNV');");
    }
}

?>