<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Invoice extends CI_Controller {
    public function index()
    {
      $this->getListInvoice();
    }
    public function getListInvoice(){
      $this->load->model("M_invoice");
      $data['listInvoice']=$this->M_invoice->listInvoice();
      $data['listInvoiceDetail']= $this->M_invoice->listInvoiceDetail();
      //print_r($data);
      $this->load->view('admin/invoice_admin_view.php',$data);
    }    
}