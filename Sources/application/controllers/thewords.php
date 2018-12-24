<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class TheWords extends CI_Controller {
    public function index()
    {
      $this->load->model('M_thewords');
      $data['listWords']=$this->M_thewords->getList();
      $this->load->view('admin/thewords_admin_view',$data);

    }    
}