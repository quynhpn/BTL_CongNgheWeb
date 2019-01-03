<?php
class M_calendar extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function addCalendar($SDTKH,$GioHen, $NgayHen, $MaNV){
       $query=$this->db->query("INSERT INTO `lichhen`(`GioHen`, `NgayHen`, `SDTKH`,MaNV) VALUES ('$GioHen', '$NgayHen', '$SDTKH', '$MaNV');");
    }
}