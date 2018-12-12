<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Introduce extends CI_Controller {
    public function index()
    {
      $this->load->view('site/introduce_site_view');
    }    
}