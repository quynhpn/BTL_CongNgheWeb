<?php 
class M_account extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function checkLogin($TenDN, $MatKhau){
        $query=$this->db->query("SELECT * FROM `taikhoan` WHERE TenDN = '$TenDN' and MatKhau = '$MatKhau' AND HoatDong = 1;");
        $ck = $query->num_rows();
        if ($ck > 0)return true;
        return false;
    }

    public function infLogin($TenDN, $MatKhau){
        $query=$this->db->query("SELECT * FROM `taikhoan` tk join nhanvien nv on tk.MaNV = nv.MaNV WHERE TenDN = '$TenDN' and MatKhau = '$MatKhau' AND nv.HoatDong = 1 and tk.HoatDong = 1;");
        return $query->row_array();
    }
}
?>