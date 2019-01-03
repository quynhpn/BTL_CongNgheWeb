<?php
class M_servicedetail extends CI_Model{
  public function __construct(){
  parent::__construct();
}
  public function countAll($MaDV){
        $query=$this->db->query("SELECT * FROM `chitietdv` WHERE MaDV='$MaDV';");
        return $query->num_rows();
    }
    public function getList($start,$size,$MaDV){
        $start=isset($start) ? $start : 0;
        $query=$this->db->query("SELECT * FROM `chitietdv` WHERE MaDV='$MaDV' limit $start , $size;");
        return $query->result_array(); 
    }
     public function deleteByID($id){
      $this->db->query("DELETE FROM `chitietdv` WHERE MACTDV='$id';");
    }
    public function addServiceDetail($MaDV,$Buoc,$ChiTietBuoc){
      $query = $this->db->query("INSERT INTO `chitietdv`(`MaDV`, `Buoc`, `Chitietbuoc`) VALUES ('$MaDV','$Buoc','$ChiTietBuoc');");
    }
    public function getByID($MACTDV){
      $query = $this->db->query("SELECT * FROM chitietdv WHERE MACTDV='$MACTDV';");
      return $query->row_array();
    }
    public function editServiceDetail($MACTDV, $Buoc,$ChiTietBuoc){
      $query = $this->db->query("UPDATE `chitietdv` SET `Buoc`= '$Buoc',`Chitietbuoc`= '$ChiTietBuoc' WHERE`MACTDV`= '$MACTDV';");
    }
}