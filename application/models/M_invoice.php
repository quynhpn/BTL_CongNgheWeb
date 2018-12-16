<?php
class M_invoice extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function listInvoice(){
      $query=$this->db->query("SELECT * FROM donhang JOIN chitietdh ON donhang.MaDH = chitietdh.MaDH JOIN khachhang on donhang.SĐT = khachhang.SĐT");
      return $query->result_array();
    }
    public function listInvoiceDetail(){
      $queryInvoiceDetail=$this->db->query("SELECT * FROM dichvu");
      return $queryInvoiceDetail->result_array();
    }
}
?>