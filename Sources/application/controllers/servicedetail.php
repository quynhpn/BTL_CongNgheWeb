<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class ServiceDetail extends CI_Controller {
    public function __construct(){
      parent::__construct();
      if (!$this->session->userdata("CheckLogin")){
            redirect(base_url() . "index.php/login/view");
        }
    }
   
    public function getListServiceDetail($MaDV)
    {

      $this->load->model("M_service");
      $this->load->model("M_servicedetail");
        $config['total_rows'] = $this->M_servicedetail->countAll($MaDV);
        $config['base_url'] = base_url()."index.php/getListServiceDetail/$MaDV/";
        $config["per_page"]=20;
      $start = $this->uri->segment(4);
       $this->load->library('pagination',$config);
      $data['listServiceDetail'] = $this->M_servicedetail->getList($start,$config['per_page'],$MaDV);
      $data['DV'] = $this->M_service->getByID($MaDV);
      $this->load->view('admin/servicedetail_admin_view.php',$data);
    }  
    public function delete($id,$MaDV){
      $this->load->model("M_servicedetail");
      $this->M_servicedetail->deleteByID($id);
      redirect(base_url()."index.php/servicedetail/getListServiceDetail/$MaDV/");
    }


    public function add_servicedetail($MaDV){
        $this->load->model("M_service");
        $data['DV'] = $this->M_service->getByID($MaDV);
        $this->load->view('admin/add_servicedetail_view.php',$data);
    }
    public function pro_add_servicedetail($MaDV){
      //kiểm tra  bằng form validation
      $this->load->library('form_validation');
      $this->form_validation->set_rules('buoc', 'Bước', 'required');
      $this->form_validation->set_rules('ctb', 'Chi tiết bước', 'required');
      if($this->form_validation->run()==FALSE){
        echo "<script>alert('Lỗi nhập sai định dạng');</script>";
        $this->add_servicedetail($MaDV);
      } else {
            $this->load->model("M_servicedetail");
            $Buoc = isset($_POST['buoc']) ? $_POST['buoc'] : "";
            $ChiTietBuoc = isset($_POST['ctb']) ? $_POST['ctb'] : "";
            $this->M_servicedetail->addServiceDetail($MaDV,$Buoc,$ChiTietBuoc);
            echo "<script>alert('Thành công');</script>";
            $this->getListServiceDetail($MaDV);
        }      
      }
       public function edit_servicedetail($MaDV,$MACTDV){
        $this->load->model("M_service");
        $data['DV'] = $this->M_service->getByID($MaDV);
        $this->load->model("M_servicedetail");
        $data['CTDV'] = $this->M_servicedetail->getByID($MACTDV);
        $this->load->view('admin/edit_servicedetail_view.php',$data);
    }
    public function pro_edit_servicedetail($MaDV,$MACTDV){
      //kiểm tra  bằng form validation
      $this->load->library('form_validation');
      $this->form_validation->set_rules('buoc', 'Bước', 'required');
      $this->form_validation->set_rules('ctb', 'Chi tiết bước', 'required');
      if($this->form_validation->run()==FALSE){
        echo "<script>alert('Lỗi nhập sai định dạng');</script>";
        $this->edit_servicedetail($MaDV,$MACTDV);
      } else {
            $this->load->model("M_servicedetail");
            $Buoc = isset($_POST['buoc']) ? $_POST['buoc'] : "";
            $ChiTietBuoc = isset($_POST['ctb']) ? $_POST['ctb'] : "";
            $this->M_servicedetail->editServiceDetail($MACTDV, $Buoc,$ChiTietBuoc);
            echo "<script>alert('Thành công');</script>";
            $this->edit_servicedetail($MaDV,$MACTDV);
        }      
      }
    }
  

 