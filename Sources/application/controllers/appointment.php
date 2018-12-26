<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Appointment extends CI_Controller {
    public function index()
    {
      $this->getlistAppointment();
    }
    public function getlistAppointment(){
      $this->load->model("M_appointment");
        $config['total_rows'] = $this->M_appointment->countAll();
        $config['base_url'] = base_url()."index.php/appointment/index";
        $config["per_page"]=1;
      $start = $this->uri->segment(3);
       $this->load->library('pagination',$config);
      $data['listAppointment'] = $this->M_appointment->getList($start,$config['per_page']);
      $data['listAllCustomer'] = $this->M_appointment->getList(0,$config['total_rows']);
      $this->load->view('admin/appointment_admin_view.php',$data);
    }    
    public function delete($id){
      $this->load->model("M_appointment");
      $this->M_appointment->deleteByID($id);
      redirect(base_url()."index.php/appointment/index");

    }
    public function add_appointment(){
      $this->load->model("M_employee");
      $data['NV'] = $this->M_employee->listEmployeeALL();
      //print_r($data['NV']);
      $this->load->view("admin/add_appointment_admin_view.php",$data);

    }
    public function edit_appointment(){
      $this->load->model("M_employee");
      $data['NV'] = $this->M_employee->listEmployeeALL();
      $this->load->view("admin/edit_appointment_admin_view.php",$data);

    }
    public function pro_add_Appointment(){
      //kiểm tra  bằng form validation
      $this->load->library('form_validation');
      $this->form_validation->set_rules('tkh', 'Tên khách hàng', 'required');
      $this->form_validation->set_rules('sdtkh', 'Số điện thoại khách hàng', 'numeric|required');
      $this->form_validation->set_rules('giohen', 'Giờ hẹn', 'required');
      $this->form_validation->set_rules('ngayhen', 'Ngày hẹn', 'required');
      if($this->form_validation->run()==FALSE){
        $this->add_appointment();
        echo "<script>alert('Lỗi nhập sai định dạng');</script>";
      } else {
       $this->load->model("M_appointment");
       $TenKH = isset($_POST['tkh']) ? $_POST['tkh'] : "";
       $SDTKH =isset($_POST['sdtkh']) ? $_POST['sdtkh'] : "";
       $GioHen = isset($_POST['giohen']) ? $_POST['giohen'] : "";
       $NgayHen = isset($_POST['ngayhen']) ? $_POST['ngayhen'] : "";
       $MaNV = isset($_POST['manv']) ? $_POST['manv'] : "";
        //print_r($_POST);
       $this->M_appointment->addAppointment($TenKH,$SDTKH,$GioHen, $NgayHen,$MaNV);
       $this->getListAppointment();
       echo "<script>alert('Thành công');</script>";
      }
      
    }
}