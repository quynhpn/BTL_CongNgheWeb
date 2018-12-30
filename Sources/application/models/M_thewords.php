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
  public function getByIDBV($id){
    $query=$this->db->query("SELECT * FROM `baiviet` WHERE MaBV='$id';");
    return $query->row_array();
    }
  public function editTheWords($id,$TenBV, $GioiThieuBV, $ChiTietBV, $link, $MaNV){
    $query=$this->db->query("UPDATE `baiviet` SET `TenBV`='$TenBV',`GioiThieuBV`='$GioiThieuBV',`ChiTietBV`='$ChiTietBV',`link`='$link',`MaNV`='$MaNV' WHERE `MaBV`='$id';");
    }  
  public function countAllS($s){
    $query=$this->db->query("SELECT * FROM baiviet WHERE baiviet.TenBV like '%$s%';");
    return $query->num_rows();
    }

  public function getListS($start, $size, $s){
    $start = isset($start)? $start : 0;
    $query=$this->db->query("SELECT * FROM baiviet WHERE baiviet.TenBV like '%$s%' limit $start , $size;");
    return $query->result_array();
    }
}

?>