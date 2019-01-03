<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class TheWords extends CI_Controller {
  public function __construct(){
      parent::__construct();
      if (!$this->session->userdata("CheckLogin")){
            redirect(base_url() . "index.php/login/view");
        }
    }
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
      if($this->form_validation->run()==FALSE){
        echo "<script>alert('Lỗi nhập sai định dạng');</script>";
        $this->add_theword();
      } else {
        $config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('link'))
        {
          echo "<script>alert('Lỗi Upload File !!!')</script>";
           $this->add_theword();
        }
        else{


       $this->load->model("M_thewords");
       $TenBV =isset($_POST['tenbv']) ? $_POST['tenbv'] : "";
       $GioiThieuBV = isset($_POST['gioithieubv']) ? $_POST['gioithieubv'] : "";
       $ChiTietBV = isset($_POST['chitietbv']) ? $_POST['chitietbv'] : "";
       $link = $this->upload->data('file_name');
       $MaNV =isset($_POST['manv']) ? $_POST['manv'] : "";
       $this->M_thewords->addTheWords($TenBV, $GioiThieuBV, $ChiTietBV, $link, $MaNV);
       echo "<script>alert('Thành công');</script>";
       $this->getListTheWord();
        }
      }
    }  
    public function delete($id){
      $this->load->model("M_thewords");
      $this->M_thewords->deleteByID($id);
      redirect(base_url()."index.php/thewords/index");
    }  
    public function add_theword(){
      $this->load->view("admin/add_thewords_admin_view.php");

    }
    public function edit_theword($id){
      $this->load->model("M_thewords");
      $data['Theword'] = $this->M_thewords->getByIDBV($id);
      $this->load->view("admin/edit_thewords_admin_view.php",$data);
    } 
     public function pro_edit_TheWords($id){
      //kiểm tra  bằng form validation
      $this->load->library('form_validation');
      $this->form_validation->set_rules('tenbv', 'Tên bài viết', 'required');
      $this->form_validation->set_rules('gioithieubv', 'Giới thiệu', 'required');
      $this->form_validation->set_rules('chitietbv', 'Chi tiết', 'required');
      if($this->form_validation->run()==FALSE){
        echo "<script>alert('Lỗi nhập sai định dạng');</script>";
        $this->edit_theword($id);
      }
      else 
      {
       $config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('link'))
        {
          echo "<script>alert('Lỗi Upload File !!!')</script>";
           $this->edit_theword($id);
        }
        else{ 
       $this->load->model("M_thewords");
       $TenBV =isset($_POST['tenbv']) ? $_POST['tenbv'] : "";
       $GioiThieuBV = isset($_POST['gioithieubv']) ? $_POST['gioithieubv'] : "";
       $ChiTietBV = isset($_POST['chitietbv']) ? $_POST['chitietbv'] : "";
        $link = $this->upload->data('file_name');
       $MaNV =isset($_POST['manv']) ? $_POST['manv'] : "";
       $this->M_thewords->editTheWords($id,$TenBV, $GioiThieuBV, $ChiTietBV, $link, $MaNV);
       echo "<script>alert('Thành công');</script>";
       redirect(base_url() . "index.php/thewords/getListTheWord");
        }
      }
    }  
    public function getListThewordS(){
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
        $this->load->model("M_thewords");
        $config['total_rows'] = $this->M_thewords->countAllS($s);
        $config['base_url'] = base_url()."index.php/thewords/getListThewordS";
        $config["per_page"]=5;
        $start = $this->uri->segment(3);
        $this->load->library('pagination',$config);
        $data['listWords'] = $this->M_thewords->getListS($start,$config['per_page'],$s);
        $this->load->view('admin/thewords_admin_view.php',$data);
    }

}