<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Customer extends CI_Controller {
    public function index()
    {
      $this->load->view('admin/customer_admin_view.php');
    }    
}