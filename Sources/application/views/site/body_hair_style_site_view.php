<?php //print_r($listWords);?>

<div class="container">
  <div class="row">
    <ol class="breadcrumb bg-white">
      <li class="breadcrumb-item"><a><span>Trang chủ</span></a></li>
      <li class="breadcrumb-item"><a><span>Tóc đẹp</span></a></li>              
    </ol>
  </div>
</div>
<div class="container">
	<?php 
	//Vòng lặp các bản record của danh sách bài viết và lấy row ['tên cột bên database']
	foreach ($listWords as $row) { ?>
			<div class="row" style=" border-bottom: 2px solid orangered;">
			<div class="col-md-5 text-left" style="padding-top: 20px">
				<img alt="ha1" src="<?php echo base_url(); ?>assets/img/<?php echo $row['link'];?>" style="width:300px; height:auto;"class="mb-3" />
			</div>
			<div class="col-md-7 text-justify">
				<h3 class="mt-3">
					<?php echo $row['TenBV'];?>
				</h3>
				<p>
				<?php echo $row['GioiThieuBV'];?>
				</p>
					<a href="<?php echo base_url();?>index.php/hairstyle/word/<?php echo $row['MaBV'];?>">
						<button class="btn btn-dark mb-3" style="float:right;">
							Xem thêm
						</button>
					</a>
			</div>
		</div>
	<?php } ?>	
</div>