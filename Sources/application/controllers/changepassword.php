<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class ChangePassword extends CI_Controller {
    public function index()
    {
      $this->load->view('change_password/change_password_view');
    }    
}




