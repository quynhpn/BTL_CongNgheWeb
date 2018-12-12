<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Employee extends CI_Controller {
    public function index()
    {
      $this->load->view('admin/employee_admin_view.php');
    }    
}