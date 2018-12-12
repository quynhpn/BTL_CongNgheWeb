<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class SetCalendar extends CI_Controller {
    public function index()
    {
      $this->load->view('site/set_calendar_site_view');
    }    
}