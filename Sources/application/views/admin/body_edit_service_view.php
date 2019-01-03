<div class="container" >
  <div class="row mt-4">
    <div class="col-md-12 text-center">
      <h3>Sửa Dịch Vụ</h3>
    </div>
  </div>
  <div>
<form action="<?php echo base_url().'index.php/service/pro_edit_service/'. $Service['MaDV'];?>" method="post">
    <div class="modal-body">
      <div class="row mt-3">
        <div class="col-md-5 text-center">
          <label>
            Mã dịch vụ
          </label>
        </div>
        <div class="col-md-7">
          <input type="text" class="form-control"  name="mdv" value="<?php echo $Service['MaDV'];?>"/>                                   
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-5 text-center">
          <label>
            Tên dịch vụ
          </label>
        </div>
        <div class="col-md-7">
          <input type="text" class="form-control"  name="tendv" value="<?php echo $Service['TenDV'];?>"/>                                  
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-5 text-center">
          <label>
            Giá
          </label>
        </div>
        <div class="col-md-7">
          <input type="text" class="form-control"  name="gia" value="<?php echo $Service['Gia'];?>"/>                                    
        </div>
      </div>
    </div>
    <div class="col-md-4 offset-md-4 modal-footer">
            <input class="btn btn-primary" type="submit" value="Lưu">
            <a type="button" class="btn btn-secondary" href="<?php echo base_url() . "index.php/service/index"; ?>">Thoát</a>
          </div>
    <p><?php echo validation_errors(); ?></p>
  </form>
  </div>
  </div>
  </div>
</div> 

