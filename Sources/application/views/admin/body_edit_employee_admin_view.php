<div class="container" >
    <div class="row mt-4">
        <div class="col-md-12 text-center">
            <h3>Sửa nhân viên</h3>
        </div>
    </div>
    <div>
        <form action="<?php echo base_url();?>index.php/employee/pro_edit_Employee/<?php echo $Employee['MaNV'];?>" method="post" >
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <label>
                            Tài khoản
                        </label>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="tknv" class="form-control"value="<?php echo $Employee['TenDN'];?>" readonly/>                                   
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-5 text-center">
                        <label>
                            Mật khẩu
                        </label>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="mknv"  class="form-control"value="<?php echo $Employee['MatKhau'];?>" readonly/>                                   
                    </div>                    
                </div>
                <div class="row mt-3">
                    <div class="col-md-5 text-center">
                        <label>
                            Mã nhân viên
                        </label>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="manv" class="form-control"value="<?php echo $Employee['MaNV'];?>" />                                   
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-5 text-center">
                        <label>
                            Tên nhân viên
                        </label>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="tennv" class="form-control"value="<?php echo $Employee['TenNV'];?>"/>                                   
                    </div>
                </div>            
                <div class="row mt-3">
                    <div class="col-md-5 text-center">
                        <label>
                            Số điện thoại
                         </label>
                    </div>
                    <div class="col-md-5">
                        <input type="text"  name="sdtnv" class="form-control"value="<?php echo $Employee['SDTNV'];?>" />                                   
                    </div>
                </div>
                 <div class="row mt-3">
                    <div class="col-md-5 text-center">
                        <label>
                            Email
                         </label>
                    </div>
                    <div class="col-md-5">
                        <input type="text"  name="emailnv"class="form-control" value="<?php echo $Employee['Email'];?>" />                                   
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-5 text-center">
                        <label for="exampleFormControlSelect1" name="cvnv">Chức vụ</label>
                    </div>
                    <div class="col-md-2">
                        <select name="cvnv" id=""class="form-control">
                        <?php 
                            foreach ($NV as $row) {?>
                            <option value="<?php echo $row['ChucVu'];?>" <?php if($row['ChucVu'] === $Employee['ChucVu']) echo "selected"; ?>>
                                <?php echo $row['ChucVu'];?>
                            </option >
                        <?php }?>
                        </select>
                    </div>                                                             
                </div>
            </div>
            <div class="col-md-4 offset-md-4 modal-footer">
                <input class="btn btn-primary" type="submit" value="Lưu">
                <a type="button" class="btn btn-secondary" href="<?php echo base_url() . "index.php/employee/index"; ?>">Thoát</a>
            </div>
            <p><?php echo validation_errors(); ?></p>
        </form>
    </div>
</div>
