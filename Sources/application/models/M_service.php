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
      $this->db->query("DELETE FROM `chitietdv` WHERE MaDV='$id';");
      $this->db->query("UPDATE `dichvu` SET `HoatDong`=0 WHERE  MaDV='$id';");
    }
    public function detail($MaDV){
      $query=$this->db->query("SELECT * FROM ChiTietDV where MaDV = '$MaDV';");
      return $query->result_array();
  }
  public function countAllS($s){
        $query=$this->db->query("SELECT * FROM dichvu WHERE HoatDong <> 0 AND dichvu.TenDV like'%$s%';");
        return $query->num_rows();
    }

    public function getListS($start, $size, $s){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("SELECT * FROM dichvu WHERE HoatDong <> 0 AND dichvu.TenDV like'%$s%' limit $start , $size;");
        return $query->result_array();
    }
    public function getByID($MaDV){
      $query = $this->db->query("SELECT * FROM dichvu WHERE HoatDong <> 0 AND MaDV='$MaDV';");
      return $query->row_array();
    }
    public function addService($MaDV,$TenDV,$Gia){
      $query = $this->db->query("INSERT INTO `dichvu`(`MaDV`, `TenDV`, `Gia`, `HoatDong`) VALUES ('$MaDV','$TenDV','$Gia',1);");
    }
    public function editService($id,$MaDV,$TenDV,$Gia){
      $query = $this->db->query("UPDATE `dichvu` SET `MaDV`='$MaDV',`TenDV`='$TenDV',`Gia`=$Gia WHERE MaDV='$id';");
    }
}

?>