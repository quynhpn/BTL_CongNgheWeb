<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class HairSport extends CI_Controller {
    public function index()
    {
      $this->load->view('site/hair_SPORT_site_view');
    }    
}