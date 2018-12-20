<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Test extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->load->model("M_appointment");;
        $config['total_rows'] = $this->M_appointment->countAll();
        $config['base_url'] = base_url()."index.php/test/index";
        $config["per_page"]=1;
      $start = $this->uri->segment(3);
       $this->load->library('pagination',$config);
      $data['listappointment'] = $this->M_appointment->getList($start,$config['per_page']);
      //print_r($data);
      $this->load->view("test_view",$data);
    }

}