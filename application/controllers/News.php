<!--load model trong controller-->
<?php
class News extends CI_Controller 
{
  function news_list(){
    //load model
  $this ->load->model('news_model');
  //gọi function trong model
  $news_list = $this->news_model->getList();
  }
   
}
