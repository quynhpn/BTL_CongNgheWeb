<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Appointment extends CI_Controller {
    public function __construct(){
      parent::__construct();
      //Nếu chưa đăng nhập
        if (!$this->session->userdata("CheckLogin")){
            redirect(base_url() . "index.php/login/view");
        }
    }
    public function index()
    {
      $this->getlistAppointment();
    }
    public function getlistAppointment(){
      $this->load->model("M_appointment");
        $config['total_rows'] = $this->M_appointment->countAll();
        $config['base_url'] = base_url()."index.php/appointment/index";
        $config["per_page"]=5;
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
      //print_r($data['NV']);
      $this->load->view("admin/add_appointment_admin_view.php");
    }
    public function edit_appointment($id){
      $this->load->model("M_appointment");
      $data['Appointment'] = $this->M_appointment->getByIDKH($id);
      //print_r($data['Appointment']);
      //print_r($data['NV']);
      $this->load->view("admin/edit_appointment_admin_view.php",$data);

    }
    public function pro_add_Appointment(){
      //kiểm tra  bằng form validation
      $this->load->library('form_validation');
     // $this->form_validation->set_rules('tkh', 'Tên khách hàng', 'required');
      $this->form_validation->set_rules('sdtkh', 'Số điện thoại khách hàng', 'numeric|required');
      $this->form_validation->set_rules('giohen', 'Giờ hẹn', 'required');
      $this->form_validation->set_rules('ngayhen', 'Ngày hẹn', 'required');
      if($this->form_validation->run()==FALSE){
        $this->add_appointment();
        echo "<script>alert('Lỗi nhập sai định dạng');</script>";
      } else {
       $this->load->model("M_appointment");
       
       $SDTKH =isset($_POST['sdtkh']) ? $_POST['sdtkh'] : "";
       $GioHen = isset($_POST['giohen']) ? $_POST['giohen'] : "";
       $NgayHen = isset($_POST['ngayhen']) ? $_POST['ngayhen'] : "";
          $MaNV = 'AD';
        $this->load->model("M_customer");
        $kt = $this->M_customer->checkByIDKH($SDTKH);
        if ($kt > 0) {
        }
        //Nếu SĐT ko có
        else{
          //Tạo khách hàng với dố điện thoại          
          $this->M_customer->addCustomer($SDTKH,"","");
        }
        $this->M_appointment->addAppointment($SDTKH,$GioHen, $NgayHen, $MaNV);
        $this->getListAppointment();
        echo "<script>alert('Thành công');</script>";
      }
    }
    public function pro_edit_Appointment(){
      //kiểm tra  bằng form validation
      $this->load->library('form_validation');
      //$this->form_validation->set_rules('tkh', 'Tên khách hàng', 'required');
      $this->form_validation->set_rules('sdtkh', 'Số điện thoại khách hàng', 'numeric|required');
      $this->form_validation->set_rules('giohen', 'Giờ hẹn', 'required');
      $this->form_validation->set_rules('ngayhen', 'Ngày hẹn', 'required');
      if($this->form_validation->run()==FALSE){
        $this->edit_appointment($SDTKH);
        echo "<script>alert('Lỗi nhập sai định dạng');</script>";
      } else {
       $this->load->model("M_appointment");
       $SDTKH =isset($_POST['sdtkh']) ? $_POST['sdtkh'] : "";
       $GioHen = isset($_POST['giohen']) ? $_POST['giohen'] : "";
       $NgayHen = isset($_POST['ngayhen']) ? $_POST['ngayhen'] : "";
       //print_r($_POST);
       $this->M_appointment->editAppointment($SDTKH,$GioHen, $NgayHen);
       $this->getListAppointment();
       echo "<script>alert('Thành công');</script>";
       redirect(base_url() . "index.php/appointment/getListAppointment");
      }
    }
    public function getlistAppointmentS(){
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
        $this->load->model("M_appointment");
        $config['total_rows'] = $this->M_appointment->countAllS($s);
        $config['base_url'] = base_url()."index.php/appointment/getlistAppointmentS";
        $config["per_page"]=5;
        $start = $this->uri->segment(3);
        $this->load->library('pagination',$config);
        $data['listAppointment'] = $this->M_appointment->getListS($start,$config['per_page'],$s);
        $this->load->view('admin/appointment_admin_view.php',$data);
        //print_r ($s);
    }
}