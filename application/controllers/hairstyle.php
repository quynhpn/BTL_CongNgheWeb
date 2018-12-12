<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class HairStyle extends CI_Controller {
    public function index()
    {
      $this->load->view('site/hair_style_site_view');
    }    
}