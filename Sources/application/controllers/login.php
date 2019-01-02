<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Login extends CI_Controller {
  public function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->checkLogin();
    }

    public function view()
    {
      $this->load->view('login/login_view');
    }   

    public function checkLogin()
    {
      //print_r($_POST);
        $TenDN = isset($_POST['TenDN']) ? $_POST['TenDN'] : "";
        $MatKhau = isset($_POST['MatKhau']) ? $_POST['MatKhau'] : "";
        $this->load->model("M_account");
        if ($this->M_account->checkLogin($TenDN, $MatKhau) && $TenDN != "" && $MatKhau != ""){
          //Nếu đăng nhập thành công
          $this->session->set_userdata("CheckLogin", true);
          echo "<script>alert('Đăng nhập thành công !!!');</script>";
          //Chuyển sang trang Admin
          $data['infLogin'] = $this->M_account->infLogin($TenDN, $MatKhau);
          print_r($data['infLogin']);
          $this->session->set_userdata($data['infLogin']);
          // echo "<br>Xin chào: ";
          // print_r($this->session->userdata('TenNV'));
          // echo "<br>Bạn ĐN với quyền: ";
          // print_r($this->session->userdata('ChucVu'));
          redirect(base_url() . "index.php/admin");          
        }
        else{
          //Nếu đăng nhập thất bại
          echo "<script>alert('Tài khoản hoặc mật khẩu không đúng !!!');</script>";
          //load lại trang login
          redirect(base_url() . "index.php/login/view");
        }
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

}




