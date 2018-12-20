<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Price extends CI_Controller {
    public function index()
    {
      $this->load->view('site/price_list_site_view');
    }    
}