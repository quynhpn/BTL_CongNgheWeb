<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Appointment extends CI_Controller {
    public function index()
    {
      $this->load->view('admin/appointment_admin_view.php');
    }    
}