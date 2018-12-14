<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Appointment extends CI_Controller {
    public function index()
    {
      $this->getlistAppointment();
    }
    public function getlistAppointment(){
      $this ->load->model("M_appointment");
      $data['listAppointment']=$this->M_appointment->listAppointment();
      $this->load->view('admin/appointment_admin_view.php',$data);
    }    
}