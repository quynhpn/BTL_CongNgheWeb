<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Employee extends CI_Controller {
    public function __construct(){
      parent::__construct();
      $this->load->library("session");
    }
    public function index()
    {
      $this->getListEmployee();
    }
    public function getListEmployee(){
      $this->load->model("M_employee");
        $config['total_rows'] = $this->M_employee->countAll();
        $config['base_url'] = base_url()."index.php/employee/index";
        $config["per_page"]=5;
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
     public function add_employee(){
      $this->load->model("M_employee");
      $data['NV'] = $this->M_employee->listPositionALl();
      $this->load->view("admin/add_employee_admin_view.php", $data);

    }
    public function edit_employee($id){
      $this->load->model("M_employee");
      $data['Employee'] = $this->M_employee->getByID($id);
      $data['NV'] = $this->M_employee->listPositionALl();
      $this->load->view("admin/edit_employee_admin_view.php",$data);
      //print_r($data['Employee']);

    }
    public function pro_add_Employee(){
      //kiểm tra  bằng form validation
      $this->load->library('form_validation');
      $this->form_validation->set_rules('tknv', 'Tài khoản', 'required');
      $this->form_validation->set_rules('mknv', 'Mật khẩu', 'required');
      $this->form_validation->set_rules('manv', 'Mã nhân viên', 'required');
      $this->form_validation->set_rules('tennv', 'Tên nhân viên', 'required');
      $this->form_validation->set_rules('sdtnv', 'Số điện thoại', 'numeric|required');
      $this->form_validation->set_rules('emailnv', 'Email', 'required|valid_email');
      if($this->form_validation->run()==FALSE){
        echo "<script>alert('Lỗi nhập sai định dạng');</script>";
        $this->add_employee();
      } else {
       $this->load->model("M_employee");
       $TenDN = isset($_POST['tknv']) ? $_POST['tknv'] : "";
       $MK =isset($_POST['mknv']) ? $_POST['mknv'] : "";
       $MaNV = isset($_POST['manv']) ? $_POST['manv'] : "";
       $TenNV = isset($_POST['tennv']) ? $_POST['tennv'] : "";
       $SDTNV = isset($_POST['sdtnv']) ? $_POST['sdtnv'] : "";
       $Email =isset($_POST['emailnv']) ? $_POST['emailnv'] : "";
       $ChucVu =isset($_POST['cvnv']) ? $_POST['cvnv'] : "";
       $this->M_employee->addEmployee($TenDN, $MK, $MaNV, $TenNV, $SDTNV, $Email, $ChucVu);
       echo "<script>alert('Thành công');</script>";
       $this->getListEmployee();
      }
    }
    public function pro_edit_Employee($id){
      //kiểm tra  bằng form validation
      $this->load->library('form_validation');
      $this->form_validation->set_rules('manv', 'Mã nhân viên', 'required');
      $this->form_validation->set_rules('tennv', 'Tên nhân viên', 'required');
      $this->form_validation->set_rules('sdtnv', 'Số điện thoại', 'numeric|required');
      $this->form_validation->set_rules('emailnv', 'Email', 'required|valid_email');
      if($this->form_validation->run()==FALSE){
        echo "<script>alert('Lỗi nhập sai định dạng');</script>";
        $this->edit_employee($id);
      } else {
       $this->load->model("M_employee");
       $MaNV = isset($_POST['manv']) ? $_POST['manv'] : "";
       $TenNV = isset($_POST['tennv']) ? $_POST['tennv'] : "";
       $SDTNV = isset($_POST['sdtnv']) ? $_POST['sdtnv'] : "";
       $Email =isset($_POST['emailnv']) ? $_POST['emailnv'] : "";
       $ChucVu =isset($_POST['cvnv']) ? $_POST['cvnv'] : "";
       $this->M_employee->editEmployee($MaNV, $TenNV, $SDTNV, $Email, $ChucVu);
       echo "<script>alert('Thành công');</script>";
       redirect(base_url() . "index.php/employee/getListEmployee");
      }
    }

    public function getListEmployeeS(){
      if(isset($_POST['search']))
      {
        $s = $_POST['search'];
        $this->session->set_userdata('search',$s);
      }
      else 
      {
        $s=$this->session->userdata('search');  
      }
      $s=trim(htmlspecialchars(addslashes($s)));
      $this->load->model("M_employee");
      $config['total_rows'] = $this->M_employee->countAllS($s);
      $config['base_url'] = base_url()."index.php/employee/getListEmployeeS";
      $config["per_page"]=5;
      $start = $this->uri->segment(3);
      $this->load->library('pagination',$config);
      $data['listEmployee'] = $this->M_employee->getListS($start,$config['per_page'],$s);
      $this->load->view('admin/employee_admin_view.php',$data);
      //print_r ($s);
    }
   
}
