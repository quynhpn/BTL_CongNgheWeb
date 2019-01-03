<?php
class M_invoice extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function listInvoiceDetail(){
      $query=$this->db->query("SELECT * FROM dichvu;");
      return $query->result_array();
    }
    public function countAll(){
        $query=$this->db->query("SELECT * FROM donhang JOIN chitietdh ON donhang.MaDH = chitietdh.MaDH JOIN khachhang on donhang.SDTKH = khachhang.SDTKH");
        return $query->num_rows();
    }
    public function getList($start,$size){
        $start=isset($start) ? $start : 0;
        $query=$this->db->query("SELECT * FROM donhang JOIN chitietdh ON donhang.MaDH = chitietdh.MaDH JOIN khachhang on donhang.SDTKH = khachhang.SDTKH limit $start , $size;");
        return $query->result_array(); 
    }
   public function Detail($MaDH){
       $query=$this->db->query("SELECT * FROM chitietdh join dichvu on chitietdh.MaDV=dichvu.MaDV join donhang on donhang.MaDH=chitietdh.MaDH WHERE donhang.MaDH=$MaDH;");
       return $query->result_array();
   }
    public function countAllS($s){
        $query=$this->db->query("SELECT * FROM donhang JOIN chitietdh ON donhang.MaDH = chitietdh.MaDH JOIN khachhang on donhang.SDTKH = khachhang.SDTKH WHERE khachhang.TenKH like'%$s%';");
        return $query->num_rows();
    }

    public function getListS($start, $size, $s){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("SELECT * FROM donhang JOIN chitietdh ON donhang.MaDH = chitietdh.MaDH JOIN khachhang on donhang.SDTKH = khachhang.SDTKH WHERE khachhang.TenKH like'%$s%' limit $start , $size;");
        return $query->result_array();
    }
}
?>