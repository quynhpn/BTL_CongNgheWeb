<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Admin extends CI_Controller {
  
    function __construct(){
      //gọi đến hàm khưởi tạo của cha
      parent::__construct();

    }

    public function index()
    {
      echo 'Đây là trang Admin';
    }
    public function ds_nhan_su()
    {
      $this->load->model('nhan_su_model');
      $nhansu = $this->nhan_su_model->htds_nhansu();
      foreach ($nhansu as $row) {
          $this->load->view('admin/ds_nhan_su_view',$row);
      }
      
    }
  
    
}