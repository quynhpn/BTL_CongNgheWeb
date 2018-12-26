<div class="container" >
  <div class="row mt-4">
    <div class="col-md-12 text-center">
      <h3>Sửa Lịch Hẹn</h3>
    </div>
  </div>
  <div>
    <form  ng-controller="ctrlAppointment" name="formAppointment" method="post">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-5 text-center">
                <label>
                  Tên khách hàng
                </label>
              </div>
              <div class="col-md-5">
                <input type="text"name="tkh" ng-model="" class="form-control" />                                   
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-5 text-center">
                <label>
                  Số điện thoại
                </label>
              </div>
              <div class="col-md-5">
                <input type="text" name="sdtkh" ng-model=""class="form-control" />                                   
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-5 text-center">
                <label>
                  Giờ hẹn
                </label>
              </div>
              <div class="col-md-5">
                <input type="time" name="giohen" ng-model="" class="form-control" />                                   
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-5 text-center">
                <label>
                  Ngày hẹn
                </label>
              </div>
              <div class="col-md-5">
                <input type="date" name="ngayhen" ng-model=""class="form-control" />                                   
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-5 text-center">
                <label>
                  Nhân viên
                </label>
              </div>
              <div class="col-md-2">
                <select name="manv" id="" class="form-control">
                  <?php 
                    foreach ($NV as $row) {?>
                      <option value="<?php echo $row['MaNV'];?>">
                        <?php echo $row['MaNV'];?>
                      </option>
                  <?php }?>
                </select>                                  
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