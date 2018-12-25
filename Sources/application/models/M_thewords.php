<?php
class M_thewords extends CI_Model{
  public function __construct(){
  parent::__construct();
}
  public function countAll(){
    $query=$this->db->query("SELECT * FROM baiviet");
        return $query->num_rows();
    }

    public function getList(){
      $query=$this->db->query("SELECT * FROM baiviet");
      return $query->result_array();
  }

  public function Word($id){
    $query=$this->db->query("SELECT * FROM `baiviet` WHERE MaBV = $id");
    return $query->row_array();
  }
  public function getListRad(){
    $query=$this->db->query("SELECT * FROM `baiviet` ORDER BY RAND() limit 0, 3");
    return $query->result_array();
  }
  public function addTheWords($TenBV, $GioiThieuBV, $ChiTietBV, $link, $MaNV){
    $query= $this->db->query("INSERT INTO `baiviet`(`TenBV`, `GioiThieuBV`, `ChiTietBV`, `link`, `MaNV`) VALUES ('$TenBV', '$GioiThieuBV', '$ChiTietBV', '$link', '$MaNV');");
    }
  public function deleteByID($id){
      $this->db->query("DELETE FROM `baiviet` WHERE MaBV='$id';");
    }
}

?>