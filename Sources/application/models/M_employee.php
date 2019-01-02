<?php
class M_employee extends CI_Model{
  public function __construct(){
  parent::__construct();
  
}
public function listEmployeeALl(){
    $query=$this->db->query("SELECT * FROM nhanvien");
    return $query->result_array();
  }
  
public function listPositionALl(){
    $query=$this->db->query("SELECT ChucVu FROM `nhanvien` group by ChucVu");
    return $query->result_array();
  }
  public function listEmployee(){
    $query=$this->db->query("SELECT * FROM nhanvien JOIN taikhoan ON nhanvien.MaNV=taikhoan.MaNV WHERE nhanvien.HoatDong <> 0;");
    return $query->result_array();
  }
  public function countAll(){
        $query=$this->db->query("SELECT * FROM nhanvien JOIN taikhoan ON nhanvien.MaNV=taikhoan.MaNV WHERE nhanvien.HoatDong <> 0;");
        return $query->num_rows();
    }
    public function getList($start,$size){
        $start=isset($start) ? $start : 0;
        $query=$this->db->query("SELECT * FROM nhanvien JOIN taikhoan ON nhanvien.MaNV=taikhoan.MaNV WHERE nhanvien.HoatDong <> 0 limit $start , $size;");
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
    
    public function getByID($id){
        $query=$this->db->query("SELECT * FROM nhanvien JOIN taikhoan ON nhanvien.MaNV = taikhoan.MaNV WHERE nhanvien.MaNV = '$id';");
        return $query->row_array();
    }
    public function editEmployee($id,$TenNV,$SDTNV,$Email,$ChucVu){
      //$query=$this->query("UPDATE `taikhoan` SET`MatKhau`='$MatKhau' WHERE MaNV='$id';");
      $this->db->query("UPDATE `nhanvien` SET`TenNV`='$TenNV',`SDTNV`='$SDTNV',`Email`='$Email',`ChucVu`='$ChucVu' WHERE MaNV='$id';");
    }
    public function countAllS($s){
        $query=$this->db->query("SELECT * FROM nhanvien JOIN taikhoan ON nhanvien.MaNV=taikhoan.MaNV WHERE nhanvien.HoatDong <> 0 AND nhanvien.TenNV like'%$s%' OR nhanvien.SDTNV like '%$s%' OR nhanvien.ChucVu like '%$s%';");
        return $query->num_rows();
    }

    public function getListS($start, $size, $s){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("SELECT * FROM nhanvien JOIN taikhoan ON nhanvien.MaNV=taikhoan.MaNV WHERE nhanvien.HoatDong <> 0 AND nhanvien.TenNV like'%$s%' OR nhanvien.SDTNV like '%$s%' OR nhanvien.ChucVu like '%$s%' limit $start , $size;");
        return $query->result_array();
    }
}

?>