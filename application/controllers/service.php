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
      $this->load->model("M_service");;
        $config['total_rows'] = $this->M_service->countAll();
        $config['base_url'] = base_url()."index.php/service/index";
        $config["per_page"]=5;
      $start = $this->uri->segment(3);
       $this->load->library('pagination',$config);
      $data['listService'] = $this->M_service->getList($start,$config['per_page']);
      $this->load->view('admin/service_admin_view.php',$data);
    }    
}