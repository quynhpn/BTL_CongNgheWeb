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
        $config['total_rows'] = $this->M_employee->countAll();
        $config['base_url'] = base_url()."index.php/employee/index";
        $config["per_page"]=3;
      $start = $this->uri->segment(3);
       $this->load->library('pagination',$config);
      $data['listEmployee'] = $this->M_employee->getList($start,$config['per_page']);
      $this->load->view('admin/employee_admin_view.php',$data);
    }  
    public function delete($id){
      $this->load->model("M_employee");
      $this->M_employee->deleteByID($id);
      redirect(base_url()."index.php/employee/index");
    }  
}
