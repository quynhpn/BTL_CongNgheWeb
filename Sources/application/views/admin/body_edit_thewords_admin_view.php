<div class="container" >
  <div class="row mt-4">
    <div class="col-md-12 text-center">
      <h3>Sửa Bài Viết</h3>
    </div>
  </div>
  <div>
  <form  ng-controller="ctrlThewords" name="formThewords" method="post">
    <div class="modal-body">
      <div class="row mt-3">
        <div class="col-md-5 text-center">
          <label>
            Tên bài viết
          </label>
        </div>
        <div class="col-md-7">
          <input type="text" class="form-control"  name="tenbv"/>                                   
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-5 text-center">
          <label>
            Giới thiệu
          </label>
        </div>
        <div class="col-md-7">
          <textarea rows="4" cols="23" class=" form-control" name="gioithieubv">
          </textarea>                                   
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-5 text-center">
          <label>
            Chi tiết
          </label>
        </div>
        <div class="col-md-7">
          <textarea rows="10" cols="23"class=" form-control" name="chitietbv">
          </textarea>                                    
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-5 text-center">
          <label>
            Link
          </label>
        </div>
        <div class="col-md-7">
          <input type="text" name="link"class="form-control"/>                                   
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-5 text-center">
          <label>
            Mã nhân viên
          </label>
        </div>
        <div class="col-md-7">
          <input type="text" name="manv"class="form-control"/>                                   
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