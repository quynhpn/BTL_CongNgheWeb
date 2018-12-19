<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class HomeAdmin extends CI_Controller {
    public function index()
    {
      $this->load->view('admin/home_admin_view');
    }    
}