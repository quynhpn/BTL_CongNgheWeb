<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class SetPhoneNumber extends CI_Controller {
    public function index()
    {
      $this->load->view('site/set_phonenumber_site_view');
    }    
}