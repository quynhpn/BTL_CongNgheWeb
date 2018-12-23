<div class="container">
  <div class="row">
    <ol class="breadcrumb bg-white">
      <li class="breadcrumb-item"><a><span>Trang chủ</span></a></li>
      <li class="breadcrumb-item"><a><span>Bảng giá</span></a></li>              
    </ol>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h3>BẢNG GIÁ DỊCH VỤ BARBER SHOP</h3>
    </div>
    <div class="col-md-12 mt-3">
      <img src="<?php echo base_url(); ?>assets/img/Hair_car.gif" alt="hinhanh"style="width:100%;">
    </div>
  </div>
 
  
    <div class="row mt-4">
    <?php foreach ($Price as $row) {?>
          <div class="col-md-12" style="padding-left:100px;">
            <h4>
            <i class="fa fa-star"></i>            
             <?php echo $row['TenDV'];?> - <span style="color:red"><?php echo $row['Gia']; ?></span>
            </h4>
          </div>
          <div class="col-md-12 mt-2">
          <?php 
          foreach ($PriceDetail as $row2) {?>
            <strong><?php echo $row2['Buoc']; ?></strong><?php echo $row2['Chitietbuoc']; ?><br>
            
          <?php
          }
          ?>
            
          </div>
    <?php } ?>
  </div>
  <div class="row mt-4">
          <div class="col-md-12">
            <p><strong><i>CHÚC CÁC BẠN CÓ NHỮNG GIÂY PHÚT THƯ GIÃN VÀ ĐẸP TRAI SAU KHI CẮT TÓC TẠI BARBER SHOP !</i></strong></p>
          </div>
  </div>
</div>