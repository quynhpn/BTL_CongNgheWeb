<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class HairUndercut extends CI_Controller {
    public function index()
    {
      $this->load->view('site/hair_UNDERCUT_site_view');
    }    
}