<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Customer extends CI_Controller {
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
        $this->getListCustomer();
      } else {
       $this->load->model("M_customer");
       $SDTKH =isset($_POST['sdtkh']) ? $_POST['sdtkh'] : "";
       $TenKH = isset($_POST['tenkh']) ? $_POST['tenkh'] : "";
       $DiaChi = isset($_POST['diachikh']) ? $_POST['diachikh'] : "";
       $this->M_customer->addCustomer($SDTKH, $TenKH,$DiaChi);
       echo "<script>alert('Thành công');</script>";
       $this->getlistCustomer();
      }
    }
    public function add_customer(){
      $this->load->view("admin/add_customer_admin_view.php");

    }
    public function edit_customer(){
      $this->load->view("admin/edit_customer_admin_view.php");
    }
}