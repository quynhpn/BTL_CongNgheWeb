<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class InvoiceDetail extends CI_Controller {
    public function index()
    {
      $this->load->view('admin/invoicedetail_admin_view');
    }    
}