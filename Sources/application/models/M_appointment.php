<?php 
class M_appointment extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function listAppointment(){
        $query=$this->db->query("SELECT * FROM lichhen JOIN khachhang ON khachhang.SDTKH=lichhen.SDTKH ");
        return $query->result_array();
    }

    public function countAll(){
        $query=$this->db->query("SELECT * FROM lichhen JOIN khachhang ON khachhang.SDTKH=lichhen.SDTKH;");
        return $query->num_rows();
    }
    public function getList($start,$size){
        $start=isset($start) ? $start : 0;
        $query=$this->db->query("SELECT * FROM lichhen JOIN khachhang ON khachhang.SDTKH=lichhen.SDTKH limit $start , $size;");
        return $query->result_array(); 
    }
    public function deleteByID($id){
        $this->db->query("DELETE FROM `lichhen` WHERE  lichhen.SDTKH='$id';");
    }
    public function addAppointment($TenKH,$SDTKH,$GioHen, $NgayHen,$MaNV){
       $query=$this->db->query("INSERT INTO `khachhang`(`SDTKH`, `TenKH`) VALUES ('$SDTKH','$TenKH');");
       $query=$this->db->query("INSERT INTO `lichhen`(`GioHen`, `NgayHen`, `SDTKH`,`MaNV`) VALUES ('$GioHen', '$NgayHen', '$SDTKH','$MaNV');");
    }
}
?>
