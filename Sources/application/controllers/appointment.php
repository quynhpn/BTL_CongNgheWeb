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
      $this->load->view('admin/appointment_admin_view.php',$data);
    }    
    public function delete($id){
      $this->load->model("M_appointment");
      $this->M_appointment->deleteByID($id);
      redirect(base_url()."index.php/appointment/index");

    }
    public function pro_add_Appointment(){
      //kiểm tra  bằng form validation
      $this->load->library('form_validation');
      $this->form_validation->set_rules('tkh', 'Tên khách hàng', 'required');
      $this->form_validation->set_rules('sdtkh', 'Số điện thoại khách hàng', 'numeric|required');
      $this->form_validation->set_rules('giohen', 'Giờ hẹn', 'required');
      $this->form_validation->set_rules('ngayhen', 'Ngày hẹn', 'required');
      if($this->form_validation->run()==FALSE){
        echo "<script>alert('Lỗi nhập sai định dạng');</script>";
        $this->getListAppointment();
      } else {
       $this->load->model("M_appointment");
       $TenKH = isset($_POST['tknv']) ? $_POST['tknv'] : "";
       $SDTKH =isset($_POST['mknv']) ? $_POST['mknv'] : "";
       $GioHen = isset($_POST['manv']) ? $_POST['manv'] : "";
       $NgayHen = isset($_POST['tennv']) ? $_POST['tennv'] : "";
       $this->M_appointment->addAppointment($TenKH,$SDTKH,$GioHen, $NgayHen);
       echo "<script>alert('Thành công');</script>";
       $this->getListAppointment();
      }
      
    }
}