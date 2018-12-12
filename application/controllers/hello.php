<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Hello extends CI_Controller {
  
    public function index() {
        echo 'Freetuts.net Hello Controller';
    }
  
    public function other(){
        echo 'Freetuts.net Other Controller';
    }
    public function index2($message = ''){
      echo 'Freetuts.net' . $message;
    }
    public function index3($id=0, $message=''){
      echo 'Freetuts.net ID='.$id. 'AND message =' .$message;
    }
    //hàm khởi tạo
    function _construct(){
      //gọi đến hàm khưởi tạo của cha
      parent::_construct();
    }
    public function index4()
    {
      echo 'Freetuts.net';
    }
}