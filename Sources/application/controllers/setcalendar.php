<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class SetCalendar extends CI_Controller {
    public function index()
    {
      $this->add_calendar();
    }
    public function add_calendar(){
      $this->load->view("site/set_calendar_site_view.php");
    }
    public function pro_add_Calendar(){
      //kiểm tra  bằng form validation
      $this->load->library('form_validation');
     $this->form_validation->set_rules('sdtkh', 'Số điện thoại khách hàng', 'numeric|required');
      $this->form_validation->set_rules('giohen', 'Giờ hẹn', 'required');
      $this->form_validation->set_rules('ngayhen', 'Ngày hẹn', 'required');
      
      if($this->form_validation->run()==FALSE){
        echo "<script>alert('Lỗi nhập sai định dạng');</script>";
        $this->add_calendar();
      } else {
            $this->load->model("M_calendar");
            $SDTKH =isset($_POST['sdtkh']) ? $_POST['sdtkh'] : "";
            $GioHen = isset($_POST['giohen']) ? $_POST['giohen'] : "";
            $NgayHen = isset($_POST['ngayhen']) ? $_POST['ngayhen'] : "";
            $MaNV = 'CK';
            $this->load->model("M_customer");
            $kt = $this->M_customer->checkByIDKH($SDTKH);
            if ($kt > 0) {
            }
            //Nếu SĐT ko có
            else{
             //Tạo khách hàng với dố điện thoại          
            $this->M_customer->addCustomer($SDTKH,"","");
            }
            $this->M_calendar->addCalendar($SDTKH,$GioHen, $NgayHen, $MaNV);
            $this->add_calendar();
            echo "<script>alert('Thành công');</script>";
            // $this->M_calendar->addCalendar($SDTKH,$GioHen, $NgayHen, $MaNV);
            // echo "<script>alert('Thành công');</script>";
            // $this->add_calendar();
            //echo $NgayHen;
        }  

     // print_r($_POST);
  }
}
