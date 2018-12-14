<?php 
class M_appointment extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function listAppointment(){
        $query=$this->db->query("SELECT * FROM lichhen JOIN khachhang ON khachhang.SĐT=lichhen.SĐT");
        return $query->result_array();
    }
}
?>
