<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Service extends CI_Controller {
    public function __construct(){
      parent::__construct();
      if (!$this->session->userdata("CheckLogin")){
            redirect(base_url() . "index.php/login/view");
        }
    }
     public function index()
    {
      $this->getListService();
    }
    public function getListService()
    {
      $this->load->model("M_service");
        $config['total_rows'] = $this->M_service->countAll();
        $config['base_url'] = base_url()."index.php/service/index";
        $config["per_page"]=5;
      $start = $this->uri->segment(3);
       $this->load->library('pagination',$config);
      $data['listService'] = $this->M_service->getList($start,$config['per_page']);
      $this->load->view('admin/service_admin_view.php',$data);
    }   
    public function delete($id){
      $this->load->model("M_service");
      $this->M_service->deleteByID($id);
      redirect(base_url()."index.php/service/index");
    }   
    public function getListServiceS(){
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
        $this->load->model("M_service");
        $config['total_rows'] = $this->M_service->countAllS($s);
        $config['base_url'] = base_url()."index.php/service/getListServiceS";
        $config["per_page"]=5;
        $start = $this->uri->segment(3);
        $this->load->library('pagination',$config);
        $data['listService'] = $this->M_service->getListS($start,$config['per_page'],$s);
        $this->load->view('admin/service_admin_view.php',$data);
    }
    public function add_service(){
        $this->load->view('admin/add_services_admin_view.php');
    }
    public function pro_add_service(){
      //kiểm tra  bằng form validation
      $this->load->library('form_validation');
      $this->form_validation->set_rules('mdv', 'Mã dịch vụ', 'required');
      $this->form_validation->set_rules('tendv', 'Tên dịch vụ', 'required');
      $this->form_validation->set_rules('gia', 'Giá', 'required');
      if($this->form_validation->run()==FALSE){
        echo "<script>alert('Lỗi nhập sai định dạng');</script>";
        $this->add_service();
      } else {
        try {
            $this->load->model("M_service");
            $MaDV =isset($_POST['mdv']) ? $_POST['mdv'] : "";
            $TenDV = isset($_POST['tendv']) ? $_POST['tendv'] : "";
            $Gia = isset($_POST['gia']) ? $_POST['gia'] : "";
            $this->M_service->addService($MaDV,$TenDV,$Gia);
            echo "<script>alert('Thành công');</script>";
            $this->getListServiceS();
        }  catch (Exception $e) {
          echo "<script lang =\"js\">alert(\"Dịch vụ đã tồn tại\");</script>";
          $this->add_service();
        }      
      }
    }
    public function edit_services($id){
       $this->load->model("M_service");
      $data['Service'] = $this->M_service->getByID($id);
      $this->load->view("admin/edit_service_admin_view.php",$data);
    }
    public function pro_edit_service($id){
      //kiểm tra  bằng form validation
      $this->load->library('form_validation');
      $this->form_validation->set_rules('mdv', 'Mã dịch vụ', 'required');
      $this->form_validation->set_rules('tendv', 'Tên dịch vụ', 'required');
      $this->form_validation->set_rules('gia', 'Giá', 'required');
      if($this->form_validation->run()==FALSE){
        echo "<script>alert('Lỗi nhập sai định dạng');</script>";
        $this->edit_services($id);
      } else {
        
            $this->load->model("M_service");
            $MaDV =isset($_POST['mdv']) ? $_POST['mdv'] : "";
            $TenDV = isset($_POST['tendv']) ? $_POST['tendv'] : "";
            $Gia = isset($_POST['gia']) ? $_POST['gia'] : "";
            $this->M_service->editService($id,$MaDV,$TenDV,$Gia);
            echo "<script>alert('Thành công');</script>";
            $this->edit_services($id);
        } 
        }     
      }
    
