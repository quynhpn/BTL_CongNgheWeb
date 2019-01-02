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

  //private $data;

  private static $stt = 1;
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
      //$this->data['listService'] = $this->M_service->getList($start,$config['per_page']);
      //$this->load->view('admin/service_admin_view.php',$this->data);
      //$this->data['detail'] = array();
      $data['listService'] = $this->M_service->getList($start,$config['per_page']);
      $this->load->view('admin/service_admin_view.php',$data);
      Service::$stt = 2;
    }   
    public function delete($id){
      $this->load->model("M_service");
      $this->M_service->deleteByID($id);
      redirect(base_url()."index.php/service/index");
    } 

    public function detail($id){
       $this->load->model("M_service");
      //$this->data['detail'] = $this->M_service->detail($id);

      //print_r ($this->data);

      //$this->color = "Blue";
      echo Service::$stt;
      //$this->load->view('admin/service_admin_view.php',$data);
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
        //print_r ($s);
    }

}
