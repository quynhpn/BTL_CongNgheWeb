<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Customer extends CI_Controller {
    public function __construct(){
      parent::__construct();
      //Nếu chưa đăng nhập
        if (!$this->session->userdata("CheckLogin")){
            redirect(base_url() . "index.php/login/view");
        }
    }
    public function index()
    {
      $this->getListCustomer();
    }
    public function getListCustomer(){
     $this->load->model("M_customer");
        $config['total_rows'] = $this->M_customer->countAll();
        $config['base_url'] = base_url()."index.php/customer/index";
        $config["per_page"]=3;
      $start = $this->uri->segment(3);
       $this->load->library('pagination',$config);
      $data['listCustomer'] = $this->M_customer->getList($start,$config['per_page']);
      $this->load->view('admin/customer_admin_view.php',$data);
    }
    public function pro_add_Customer(){
      //kiểm tra  bằng form validation
      $this->load->library('form_validation');
      $this->form_validation->set_rules('sdtkh', 'Số điện thoại', 'numeric|required');
      $this->form_validation->set_rules('tenkh', 'Tên khách hàng', 'required');
      $this->form_validation->set_rules('diachikh', 'Địa chỉ', 'required');
      if($this->form_validation->run()==FALSE){
        echo "<script>alert('Lỗi nhập sai định dạng');</script>";
        $this->add_customer();
      } else {
        try {
            $this->load->model("M_customer");
            $SDTKH =isset($_POST['sdtkh']) ? $_POST['sdtkh'] : "";
            $TenKH = isset($_POST['tenkh']) ? $_POST['tenkh'] : "";
            $DiaChi = isset($_POST['diachikh']) ? $_POST['diachikh'] : "";
            $this->M_customer->addCustomer($SDTKH, $TenKH,$DiaChi);
            echo "<script>alert('Thành công');</script>";
            $this->getlistCustomer();
        }  catch (Exception $e) {
          echo "<script lang =\"js\">alert(\"Khách hàng đã tồn tại\");</script>";
          $this->add_customer();
        }
      
      }
    }
    public function add_customer(){
      $this->load->view("admin/add_customer_admin_view.php");

    }
    public function edit_customer($id){
      $this->load->model("M_customer");
      $data['Customer'] = $this->M_customer->getByIDKH($id);
      $this->load->view("admin/edit_customer_admin_view.php",$data);
      //print_r($data['Customer']);
    }
    public function pro_edit_Customer($id){
      //kiểm tra  bằng form validation
      $this->load->library('form_validation');
      $this->form_validation->set_rules('tenkh', 'Tên khách hàng', 'required');
      $this->form_validation->set_rules('diachikh', 'Địa chỉ', 'required');
      if($this->form_validation->run()==FALSE){
        echo "<script>alert('Lỗi nhập sai định dạng');</script>";
        $this->edit_customer($id);
      } else {
       $this->load->model("M_customer");
       $TenKH = isset($_POST['tenkh']) ? $_POST['tenkh'] : "";
       $DiaChi = isset($_POST['diachikh']) ? $_POST['diachikh'] : "";
       $this->M_customer->editCustomer($id,$TenKH,$DiaChi);
       echo "<script>alert('Thành công');</script>";
       redirect(base_url() . "index.php/customer/getListCustomer");
      }
    }
    public function getListCustomerS(){
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
      $this->load->model("M_customer");
        $config['total_rows'] = $this->M_customer->countAllS($s);
        $config['base_url'] = base_url()."index.php/customer/getListCustomerS";
        $config["per_page"]=5;
        $start = $this->uri->segment(3);
        $this->load->library('pagination',$config);
      $data['listCustomer'] = $this->M_customer->getListS($start,$config['per_page'],$s);
      $this->load->view('admin/customer_admin_view.php',$data);
      //print_r ($s);
    }

}
