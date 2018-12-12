<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class HairSidePart extends CI_Controller {
    public function index()
    {
      $this->load->view('site/hair_SIDE_PART_site_view');
    }    
}