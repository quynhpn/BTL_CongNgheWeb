<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Service extends CI_Controller {
    public function index()
    {
      $this->load->view('admin/service_admin_view.php');
    }    
}