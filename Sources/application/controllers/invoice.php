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
      $data['listInvoiceDetail']= $this->M_invoice->listInvoiceDetail();

        $config['total_rows'] = $this->M_invoice->countAll();
        $config['base_url'] = base_url()."index.php/invoice/index";
        $config["per_page"]=1;
      $start = $this->uri->segment(3);
       $this->load->library('pagination',$config);
      $data['listInvoice'] = $this->M_invoice->getList($start,$config['per_page']);
      //print_r($data);
      $this->load->view('admin/invoice_admin_view.php',$data);

       //echo $this->pagination->create_links();
    }    
   public function detail($id){
     $this->load->model("M_invoice");
     $data['dtiv']=$this->M_invoice->Detail($id);  
     $this->load->view("admin/s_detail_invoice.php",$data);

   }
}