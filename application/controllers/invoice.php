<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Invoice extends CI_Controller {
    public function index()
    {
      $this->load->view('admin/invoice_admin_view.php');
    }    
}