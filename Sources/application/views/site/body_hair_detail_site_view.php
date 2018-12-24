<div class="container">
  <div class="row">
    <ol class="breadcrumb bg-white">
      <li class="breadcrumb-item"><a><span>Trang chủ</span></a></li>
      <li class="breadcrumb-item"><a><span>Tóc đẹp</span></a></li>
      <li class="breadcrumb-item"><a><span>Tóc nam SPORT</span></a></li>                
    </ol>
  </div>
</div>

<div class="article-clean">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                <div class="intro">
                    <h1 class="text-center"><?php echo $Word['TenBV']; ?></h1>
                    
                <div class="text">
                <figure>
                      <img src="<?php echo base_url(); ?>assets/img/<?php echo $Word['link']; ?>" class="figure-img" style="width:100%; height:auto;"/>
                    </figure>
                    <p>
                      <strong> <?php echo $Word['GioiThieuBV']; ?></strong><br>
                      <?php echo $Word['ChiTietBV']; ?>
                    </p>
                                       
                </div>
            </div>
        </div>
    </div>
</div>

<div class="article-list mt-5">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Mẫu tóc khác</h2>
        </div>
        <div class="row articles">
           <?php foreach ($word3rad as $row) { ?>
               <div class="col-sm-6 col-md-4 item">
               <img src="<?php echo base_url(); ?>assets/img/<?php echo $row['link'];?>" class="img-fluid" />
                  <h3 class="name"><?php echo $row['TenBV'];?></h3>
                  <p class="description"><?php echo substr($row['GioiThieuBV'], 0, 350) . "...";?></p>
                  <a href="<?php echo base_url();?>/index.php/hairstyle/word/<?php echo $row['MaBV'];?>" class="action">
                  <i class="fa fa-arrow-circle-right"></i>
                  </a>
              </div>
           <?php } ?>             
</div>
</div>