<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Admin extends CI_Controller {
  
    function __construct(){
      //gọi đến hàm khưởi tạo của cha
      parent::__construct();
      //Nếu chưa đăng nhập
        if (!$this->session->userdata("CheckLogin")){
            redirect(base_url() . "index.php/login/view");
        }
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
     public function info($id){
        $this->load->model("M_employee");
        $data['Employee'] = $this->M_employee->getById($id);
        $this->load->view('admin/change_info_admin_view', $data);
    }
    public function changeinfo($id)
    {
        //Kiểm tra bằng form validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('matkhau', 'Mật Khẩu', 'required');
        $this->form_validation->set_rules('hovaten', 'Họ và tên', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('sdt', 'Số Điện Thoại', 'numeric');
        if($this->form_validation->run() == FALSE){
            $this->info($id);
        }
        else{
            $MK = isset($_POST['matkhau']) ? $_POST['matkhau'] : "";
            $TenNV = isset($_POST['hovaten']) ? $_POST['hovaten'] : "";
            $Email = isset($_POST['email']) ? $_POST['email'] : "";
            $SDTNV = isset($_POST['sdt']) ? $_POST['sdt'] : "";
            $this->load->model("M_employee");
            $this->M_employee->changeInfo($id,$TenNV,$SDTNV,$Email,$MK);
            echo "<script>alert('Cập nhật thành công !!!');</script>";
            $this->session->set_userdata('TenNV', $TenNV);
            $this->info($id);
        }
    }
       
        

}