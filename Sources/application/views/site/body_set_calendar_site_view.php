<style>
    #background{
    background-image: url('<?php echo base_url(); ?>assets/img/background.jpg');    
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    overflow: hidden;
}
</style>
<div id="background">
<div class="container">
  <div class="row">
    <ol class="breadcrumb bg-white">
      <li class="breadcrumb-item"><a><span>Trang chủ</span></a></li>
      <li class="breadcrumb-item"><a><span>Đặt lịch</span></a></li>
    </ol>
  </div>
</div>  

<form action="<?php echo base_url();?>index.php/setcalendar/pro_add_Calendar" method="post" >
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-lg-3"></div>
        <div class="col-md-4 col-lg-6" style="background:gray">
          <div class="col-md-12 mt-3 mb-2">
            <h5><i class="fa fa-hand-o-right"></i>NHẬP SỐ ĐIỆN THOẠI CỦA BẠN</h5>
          </div> 
          <div class="col-md-12 mt-2 mb-3">
            <input type="text" class="form-control" placeholder="Nhập số điện thoại (Một số đặt cho 1 người)" name="sdtkh">
          </div> 
        </div>
      <div class="col-md-4 col-lg-3"></div>
    </div>
  </div>
    
  <div class="container">
    <div class="row mt-3">
      <div class="col-md-4 col-lg-3"></div>
      <div class="col-md-4 col-lg-6" style="background:gray;">
        <h3 class="mt-3">CHỌN NGÀY CẮT</h3>
      </div>
      <div class="col-md-4 col-lg-3"></div>
    </div>
    <div class="row mb-3">
      <div class="col-md-4 col-lg-3"></div>
      <div class="col-md-4 col-lg-6" style="background:gray;">
        <div>
          <select name="ngayhen" class="form-control mb-3">
            <option value = "<?php echo date("Y-m-d");?>" selected>
              Hôm nay,<?php echo date("d-m-Y");?>
            </option>
            <option value="<?php
              $d=strtotime("tomorrow");
              echo date("Y-m-d", $d) . "<br>";
              ?>">
              Ngày mai,
              <?php
              $d=strtotime("tomorrow");
              echo date("d-m-Y", $d) . "<br>";
              ?>
            </option>
            <option value="<?php
              $startdate = strtotime("tomorrow");
              $enddate = strtotime("+1 days", $startdate);
              echo date("Y-m-d", $enddate) . "<br>";
              ?>">
              Ngày kia,
              <?php
              $startdate = strtotime("tomorrow");
              $enddate = strtotime("+1 days", $startdate);
              echo date("d-m-Y", $enddate) . "<br>";
              ?>
            </option>
          </select>
        </div>
      </div>
      <div class="col-md-4 col-lg-3"></div>
    </div>
    <div class="row mt-3">
      <div class="col-md-4 col-lg-3"></div>
      <div class="col-md-4 col-lg-6" style="background:gray;">
        <h3 class="mt-3">CHỌN GIỜ CẮT</h3>
      </div>
      <div class="col-md-4 col-lg-3"></div>
    </div>
    <div class="row">
      <div class="col-md-4 col-lg-3"></div>
      <div class="col-md-4 col-lg-6" style="background:gray;">
      <div>
        <select name="giohen" class="form-control mb-3">
          <?php 
            for($h = 9; $h < 22; $h++){?>
              <option value = "<?php echo $h;?>:00">
                  <?php echo $h;?>:00
              </option>
              <option value = "<?php echo $h;?>:30">
                  <?php echo $h;?>:30
              </option>
            <?php } ?>
        </select>
      </div>
      <div class="col-md-4 col-lg-3"></div>
    </div>
  </div>
    
  <div>
    <div class="container text-center">
      <div class="row mt-3 mb-4">
        <div class="col-md-4 col-lg-3"></div>
        <div class="col-md-4 col-lg-6">
          <div>
           <input class="btn btn-dark btn_cal" type="submit" value="ĐẶT LỊCH GIỮ CHỖ"style="font-size: 40px;">
            <!-- <a type="submit" class="btn btn-dark btn_cal "  href="#"><i class="fa fa-calendar"></i>
              
            </a> -->
          </div>
        </div>
        <div class="col-md-4 col-lg-3"></div>
        </div>
      </div>
    </div>    
  </div>
  <p><?php echo validation_errors(); ?></p>
</form>
</div>

