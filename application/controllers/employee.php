<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Employee extends CI_Controller {
    public function index()
    {
      $this->getListEmployee();
    }
    public function getListEmployee(){
      $this->load->model("M_employee");
      $data['listEmployee']=$this->M_employee->listEmployee();
      $this->load->view('admin/employee_admin_view.php',$data);
    }    
}
