<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Admin extends CI_Controller {
  
    function __construct(){
      //gọi đến hàm khưởi tạo của cha
      parent::__construct();

    }

    public function index()
    {
      $this->load->model("M_employee");
      $data['countEmployee'] = $this->M_employee->countAll();

      $this->load->model("M_customer");
      $data['countCustomer'] = $this->M_customer->countAll();

      $this->load->model("M_appointment");
      $data['countAppointment'] = $this->M_appointment->countAll();

      $this->load->model("M_invoice");
      $data['countInvoice'] = $this->M_invoice->countAll();

      $this->load->model("M_service");
      $data['countService'] = $this->M_service->countAll();

      $this->load->model("M_thewords");
      $data['countTheWords'] = $this->M_thewords->countAll();
      $this->load->view('admin/home_admin_view.php',$data);

    }
  
    
}