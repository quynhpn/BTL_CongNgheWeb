<div class="container" >
  <div class="row mt-4">
    <div class="col-md-12 text-center">
      <h3>Sửa khách hàng</h3>
    </div>
  </div>
  <div>
    <form action="<?php echo base_url();?>index.php/customer/pro_edit_Customer/<?php echo $Customer['SDTKH'];?>" method="post">
      <div class="modal-body">
        <div class="row">
          <div class="col-md-5 text-center">
            <label>
              Số điện thoại
            </label>
          </div>
          <div class="col-md-5">
            <input type="text" name="sdtkh"class="form-control"placeholder="<?php echo $Customer['SDTKH'];?>" readonly/>
          </div>                          
        </div>
        <div class="row  mt-3">
          <div class="col-md-5 text-center">
            <label>
              Tên khách hàng
            </label>
          </div>
          <div class="col-md-5">
            <input type="text" name="tenkh" class="form-control"value="<?php echo $Customer['TenKH'];?>"/>                                   
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-5 text-center">
            <label>
              Địa chỉ
            </label>
          </div>
          <div class="col-md-5">
            <input type="text" name="diachikh" class="form-control" value="<?php echo $Customer['DiaChi'];?>"/>                                   
          </div>
        </div>
      </div>
      <div class="col-md-4 offset-md-4 modal-footer">
        <input class="btn btn-primary" type="submit" value="Lưu">
        <a type="button" class="btn btn-secondary" href="<?php echo base_url() . "index.php/customer/index"; ?>">Thoát</a>
      </div>
      <p><?php echo validation_errors(); ?></p>
    </form>                  
    </div>
   </div>
  </div>
</div>