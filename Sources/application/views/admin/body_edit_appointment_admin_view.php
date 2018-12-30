<div class="container" >
  <div class="row mt-4">
    <div class="col-md-12 text-center">
      <h3>Sửa Lịch Hẹn</h3>
    </div>
  </div>
  <div>
    <form  ng-controller="ctrlAppointment" name="formAppointment" action="<?php echo base_url();?>index.php/appointment/pro_edit_Appointment/<?php echo $Appointment['SDTKH'];?>" method="post" >
          <div class="modal-body">
            <div class="row mt-3">
              <div class="col-md-5 text-center">
                <label>
                  Số điện thoại
                </label>
              </div>
              <div class="col-md-5">
                <input type="text" name="sdtkh" ng-model=""class="form-control" value="<?php echo $Appointment['SDTKH'];?>" readonly/>                                   
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-5 text-center">
                <label>
                  Giờ hẹn
                </label>
              </div>
              <div class="col-md-5">
                <input type="time" name="giohen" ng-model="" class="form-control" value="<?php echo $Appointment['GioHen'];?>"/>                                  
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-5 text-center">
                <label>
                  Ngày hẹn
                </label>
              </div>
              <div class="col-md-5">
                <input type="date" name="ngayhen" ng-model=""class="form-control"value="<?php echo $Appointment['NgayHen'];?>"/>                                 
              </div>
            </div>
          </div>
          <div class="col-md-4 offset-md-4 modal-footer">
            <input class="btn btn-primary" type="submit" value="Lưu">
            <a type="button" class="btn btn-secondary" href="<?php echo base_url() . "index.php/appointment/index"; ?>">Thoát</a>
          </div>
          <p><?php echo validation_errors(); ?></p>
    </form>
  </div>      
      
    
</div>