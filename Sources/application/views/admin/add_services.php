<div class="container" >
  <div class="row mt-4">
    <div class="col-md-12 text-center">
      <h3>Thêm Dịch Vụ</h3>
    </div>
  </div>
  <div>
    <form ng-controller="ctrlAppointment" action="<?php echo base_url();?>index.php/service/pro_add_Services"name="formAppointment" method="post">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-5 text-center">
                <label>
                  Mã dịch vụ
                </label>
              </div>
              <div class="col-md-5">
                <input type="text"name="madv" ng-model="" class="form-control" />                                   
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-5 text-center">
                <label>
                  Tên dịch vụ
                </label>
              </div>
              <div class="col-md-5">
                <input type="text" name="tendv" ng-model=""class="form-control" />                                   
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-5 text-center">
                <label>
                  Giá
                </label>
              </div>
              <div class="col-md-5">
                <input type="text" name="gia" ng-model=""class="form-control" />                                   
              </div>             
            </div>
          </div>
          <div class="col-md-4 offset-md-4 modal-footer">
            <input class="btn btn-primary" type="submit" value="Lưu">
            <a type="button" class="btn btn-secondary" href="<?php echo base_url() . "index.php/service/index"; ?>">Thoát</a>
          </div>
          <p><?php //echo validation_errors(); ?></p>
    </form>
  </div>      
      
    
</div>