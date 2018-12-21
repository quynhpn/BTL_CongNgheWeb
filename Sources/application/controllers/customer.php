<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Customer extends CI_Controller {
    public function index()
    {
      $this->getListCustomer();
    }
    public function getListCustomer(){
     $this->load->model("M_customer");
        $config['total_rows'] = $this->M_customer->countAll();
        $config['base_url'] = base_url()."index.php/customer/index";
        $config["per_page"]=3;
      $start = $this->uri->segment(3);
       $this->load->library('pagination',$config);
      $data['listCustomer'] = $this->M_customer->getList($start,$config['per_page']);
      $this->load->view('admin/customer_admin_view.php',$data);
    }
}