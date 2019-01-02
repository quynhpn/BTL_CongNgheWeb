<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Service extends CI_Controller {
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

    public function detail($id){
      $this->load->model("M_service");
      $data['dtsv']=$this->M_service->Detail($id);
      //print_r($data);

        $this->load->view("admin/s_detail_services.php",$data);
    }
    public function pro_add_Services(){
      //kiểm tra  bằng form validation
      $this->load->library('form_validation');
      $this->form_validation->set_rules('madv', 'Mã dịch vụ', 'required');
      $this->form_validation->set_rules('tdv', 'Tên dịch vụ', 'required');      
      $this->form_validation->set_rules('gia', 'Giá', 'numeric|required');
      if($this->form_validation->run()==FALSE){
        $this->add_services();
        echo "<script>alert('Lỗi nhập sai định dạng');</script>";
      } else {
       $this->load->model("M_service");
       $MaDV = isset($_POST['madv']) ? $_POST['madv'] : "";
       $TenDV = isset($_POST['tdv']) ? $_POST['tdv'] : "";
       $Gia = isset($_POST['gia']) ? $_POST['gia'] : "";
        //print_r($_POST);
       $this->M_services->addServices($MaDV,$TenDV,$Gia);
       $this->getListService();
       echo "<script>alert('Thành công');</script>";
      }
      
    }
    public function add_services(){
      $this->load->model("M_service");
      $this->load->view("admin/s_add_services.php");
    }
    public function edit_services(){
      $this->load->model("M_service");
      $this->load->view("admin/s_edit_services.php");
    }
}