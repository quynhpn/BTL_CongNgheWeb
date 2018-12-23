<?php
class M_pricelist extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function priceDetail(){
        $query=$this->db->query("SELECT * FROM ChiTietDV;");
        return $query->result_array();
    }
    public function listPrice(){
        $query=$this->db->query("SELECT * FROM dichvu;");
        return $query->result_array();
    }
}
?>