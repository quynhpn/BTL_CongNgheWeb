<div class="container" >
  <div class="row mt-4">
    <div class="col-md-12 text-center">
      <h3>Thêm Chi Tiết Dịch Vụ: <?php echo $DV['TenDV']; ?> </h3>
    </div>
  </div>
  <div>
 <form action="<?php echo base_url() . 'index.php/servicedetail/pro_add_servicedetail/' . $DV['MaDV']; ?>" method="post">
    <div class="modal-body">
      <div class="row mt-3">
        <div class="col-md-5 text-center">
          <label>
            Bước
          </label>
        </div>
        <div class="col-md-7">
          <input type="text" class="form-control"  name="buoc"/>                                  
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-5 text-center">
          <label>
            Chi tiết bước
          </label>
        </div>
        <div class="col-md-7">
          <input type="text" class="form-control"  name="ctb"/>                                    
        </div>
      </div>
    </div>
    <div class="col-md-4 offset-md-4 modal-footer">
            <input class="btn btn-primary" type="submit" value="Lưu">
            <a type="button" class="btn btn-secondary" href="<?php echo base_url() . "index.php/thewords/index"; ?>">Thoát</a>
          </div>
    <p><?php echo validation_errors(); ?></p>
  </form>
  </div>
  </div>
  </div>
</div> 