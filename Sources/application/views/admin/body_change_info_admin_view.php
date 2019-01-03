   <div class="container" >
  <div class="row mt-4">
    <div class="col-md-12 text-center">
      <h3>Sửa thông tin cá nhân</h3>
    </div>
  </div>
  <div>
    <form method="post" action="<?php echo base_url() . 'index.php/admin/changeinfo/' .$Employee['MaNV']; ?>">
      <div class="modal-body">
        <div class="row">
          <div class="col-md-5 text-center">
            <label>
              Tên đăng nhập:
            </label>
          </div>
          <div class="col-md-5">
            <input type="text" name="tendn" class="form-control"value="<?php echo $Employee['TenDN'];?>" readonly />
          </div>                          
        </div>
        <div class="row  mt-3">
          <div class="col-md-5 text-center">
            <label>
              Mật khẩu:
            </label>
          </div>
          <div class="col-md-5">
            <input type="text" name="matkhau" class="form-control" value="<?php echo $Employee['MatKhau'];?>"/>                                   
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-5 text-center">
            <label>
              Mã nhân viên:
            </label>
          </div>
          <div class="col-md-5">
            <input type="text" name="manv" class="form-control" value="<?php echo $Employee['MaNV'];?>" readonly/>
          </div>                          
        </div>
        <div class="row mt-3">
          <div class="col-md-5 text-center">
            <label>
              Họ và tên:
            </label>
          </div>
          <div class="col-md-5">
            <input type="text" name="hovaten"class="form-control" value="<?php echo $Employee['TenNV'];?>"/>                                   
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-5 text-center">
            <label>
              Số điện thoại:
            </label>
          </div>
          <div class="col-md-5">
            <input type="text" name="sdt" class="form-control" value="<?php echo $Employee['SDTNV'];?>"/>                                   
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-5 text-center">
            <label>
              Email:
            </label>
          </div>
          <div class="col-md-5">
            <input type="text" name="email" class="form-control" value="<?php echo $Employee['Email'];?>"/>                                   
          </div>
        </div>
      </div>
      <div class="col-md-4 offset-md-4 modal-footer">
        <input class="btn btn-primary" type="submit" value="Lưu">
        <a type="button" class="btn btn-secondary" href="<?php echo base_url() . "index.php/admin/home"; ?>">Thoát</a>
      </div>
      <p><?php echo validation_errors(); ?></p>
    </form>                  
    </div>
   </div>
  </div>
</div>