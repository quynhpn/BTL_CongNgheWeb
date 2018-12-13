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
      $data['listCustomer']=$this->M_customer->listCustomer();
      $this->load->view('admin/customer_admin_view.php',$data);
    }    
}