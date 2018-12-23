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
      $this->load->model("M_pricelist");
      $data['PriceDetail'] = $this->M_pricelist->priceDetail();
      $data['Price'] = $this->M_pricelist->listPrice();
      $this->load->view('site/price_list_site_view', $data);
    } 
    
}