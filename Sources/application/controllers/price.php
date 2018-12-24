<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Price extends CI_Controller {
    public function index()
    {
      $this->getList();
    }    
    public function getList()
    {
      $this->load->model("M_service");
      $data['Price'] = $this->M_service->listService();
      $this->load->view('site/price_list_site_view', $data);
    } 
    
}