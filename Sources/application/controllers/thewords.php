<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class TheWords extends CI_Controller {
    public function index()
    {
      $this->getListTheWord();
    } 
    public function getListTheWord(){
      $this->load->model('M_thewords');
      $data['listWords']=$this->M_thewords->getList();
      $this->load->view('admin/thewords_admin_view',$data);
    }
    public function pro_add_TheWords(){
      //kiểm tra  bằng form validation
      $this->load->library('form_validation');
      $this->form_validation->set_rules('tenbv', 'Tên bài viết', 'required');
      $this->form_validation->set_rules('gioithieubv', 'Giới thiệu', 'required');
      $this->form_validation->set_rules('chitietbv', 'Chi tiết', 'required');
      $this->form_validation->set_rules('link', 'Link', 'required');
      if($this->form_validation->run()==FALSE){
        echo "<script>alert('Lỗi nhập sai định dạng');</script>";
        $this->getListTheWord();
      } else {
       $this->load->model("M_thewords");
       $TenBV =isset($_POST['tenbv']) ? $_POST['tenbv'] : "";
       $GioiThieuBV = isset($_POST['gioithieubv']) ? $_POST['gioithieubv'] : "";
       $ChiTietBV = isset($_POST['chitietbv']) ? $_POST['chitietbv'] : "";
       $link =isset($_POST['link']) ? $_POST['link'] : "";
       $MaNV =isset($_POST['manv']) ? $_POST['manv'] : "";
       $this->M_thewords->addTheWords($TenBV, $GioiThieuBV, $ChiTietBV, $link, $MaNV);
       echo "<script>alert('Thành công');</script>";
       $this->getListTheWord();
      }
    }  
    public function delete($id){
      $this->load->model("M_thewords");
      $this->M_thewords->deleteByID($id);
      redirect(base_url()."index.php/thewords/index");
    }   
}