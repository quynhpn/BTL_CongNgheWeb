<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Appointment extends CI_Controller {
    public function index()
    {
      $this->getlistAppointment();
    }
    public function getlistAppointment(){
      $this->load->model("M_appointment");;
        $config['total_rows'] = $this->M_appointment->countAll();
        $config['base_url'] = base_url()."index.php/appointment/index";
        $config["per_page"]=1;
      $start = $this->uri->segment(3);
       $this->load->library('pagination',$config);
      $data['listAppointment'] = $this->M_appointment->getList($start,$config['per_page']);
      $this->load->view('admin/appointment_admin_view.php',$data);
    }    
}