<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class HairMohican extends CI_Controller {
    public function index()
    {
      $this->load->view('site/hair_MOHICAN_site_view');
    }    
}