<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class HairStyle extends CI_Controller {
    public function index()
    {
     $this->getList();
    }   
    
    public function getList()
    {
      $this->load->model("M_thewords");
      $data['listWords'] = $this->M_thewords->getList();
      $this->load->view('site/hair_style_site_view', $data);
    } 

    public function word($id)
    {
      //Lấy dữ liệu chi tiết
        $this->load->model("M_thewords");
        $data['Word'] = $this->M_thewords->Word($id);

        //Lấy 3 bài viết ngẫu nhiên
        $this->load->model("M_thewords");
      $data['word3rad'] = $this->M_thewords->getListRad();
      $this->load->view('site/hair_detail_site_view',$data);
    } 


}