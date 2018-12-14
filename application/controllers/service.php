<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Service extends CI_Controller {
     public function index()
    {
      $this->getListService();
    }
    public function getListService()
    {
      $this->load->model("M_service");
      $data['listService']=$this->M_service->listService();
      $this->load->view('admin/service_admin_view.php',$data);
    }    
}