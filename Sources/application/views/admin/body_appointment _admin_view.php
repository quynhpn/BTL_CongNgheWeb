
 <div class="col-md-6 col-lg-10">
                      <div class="container-fluid">
        <div class="row mt-3">
                    <h3 class="col-md-12 text-center">QUẢN LÝ LỊCH HẸN</h3>
        </div>
        <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <label class="col-md-4">
                                Tên khách hàng
                            </label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" placeholder="Nhập tên người dùng" id="txtUserName" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <label class="col-md-4">
                                SĐT
                            </label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" placeholder="Nhập số điện thoại khách hàng" id="txtPhoneName" />
                            </div>
                        </div>
                    </div>
        </div>
    
        <div class="row mt-3">
            <button class="btn btn-success col-md-2 offset-md-5">
                <i class="fa fa-search"></i>
                Tìm kiếm
            </button>
        </div>
        <div class="row">
            <button class="btn btn-info col-md-2 offset-md-9"data-toggle="modal" data-target="#add-modal">
                <i class="fa fa-user-plus"></i>
                Thêm mới
            </button>
        </div>
        <table class="table table-bordered table-hover mt-3">
            <thead>
                <tr class="table-active">
                    <th>
                        STT
                    </th>
                    <th>
                        Tên khách hàng
                    </th>
                    <th>
                        SĐT Khách hàng
                    </th>
                    <th>
                        Giờ hẹn
                    </th>
                    <th>
                        Ngày hẹn
                    </th>
                    <th>
                        Nhân viên
                    </th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>      
                <?php 
                $stt=0;
                foreach($listAppointment as $row)
                {
                    $stt ++;
               ?> 
                <tr class="table-warning">
                    <td><?php echo $stt ?></td>
                    <td><?php echo $row['TenKH']?></td>
                    <td><?php echo $row['SDTKH']?></td>
                    <td><?php echo $row['GioHen']?></td>
                    <td><?php echo $row['NgayHen']?></td>
                    <td><?php echo $row['MaNV']?></td>
                    <td>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#edit-modal">
                            <i class="fa fa-edit">
                                Sửa
                            </i>
                        </button>
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không');" href="<?php echo base_url() . "index.php/appointment/delete/" . $row['SDTKH'];?>">
                           <i class="fa fa-trash">
                                Xóa
                            </i>
                        </a>
                    </td>
                </tr>  
                <?php 
                }?>         
            </tbody>
        </table> 
     </div>
     <div class="text-center">
        <?php
            echo  $this->pagination->create_links();
        ?>
    </div>
    </div>
    </div>
    </div>
    </div>
    
</div>
<div >
        <div class="modal" tabindex="-1" role="dialog" id="add-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Thêm Lịch Hẹn</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form  ng-controller="ctrlAppointment" name="formAppointment"action="<?php echo base_url();?>index.php/appointment/pro_add_Appointment" method="post">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Tên khách hàng
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text"name="tkh" ng-model="" class="form-control" />                                   
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Số điện thoại
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="sdtkh" ng-model=""class="form-control" />                                   
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Giờ hẹn
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="time" name="giohen" ng-model="" class="form-control" />                                   
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Ngày hẹn
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="date" name="ngayhen" ng-model=""class="form-control" />                                   
                                </div>
                            </div>
                             <div class="row mt-3">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Nhân viên
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <select name="manv" id="">
                                        
                                            <?php 
                                                foreach ($listAllCustomer as $row) {?>
                                                <option value="<?php echo $row['MaNV'];?>">
                                                        <?php echo $row['MaNV'];?>
                                                </option>
                                                <?php }?>
                                            
                                        
                                    </select>                                   
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input class="btn btn-primary" type="submit" value="Lưu">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                        </div>
                        <p><?php echo validation_errors(); ?></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div >
        <div class="modal" tabindex="-1" role="dialog" id="edit-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Sửa Lịch Hẹn</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                     <form  ng-controller="ctrlCategory" name="formCategory">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Tên khách hàng
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="txtEmployeeNameInsert" name="" ng-model="" placeholder="Nhập tên khách hàng" class="form-control" ng-required="true" ng-maxlength="10" />                                   
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Số điện thoại
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="txtEmployeePhoneInsert" name="" ng-model="" placeholder="Nhập số điện thoại khách hàng" class="form-control" ng-required="true" ng-maxlength="10" />                                   
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Giờ hẹn
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="txtEmployeePhoneInsert" name="" ng-model="" placeholder="Nhập giờ hẹn" class="form-control" ng-required="true" ng-maxlength="10" />                                   
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Ngày hẹn
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="txtEmployeePhoneInsert" name="" ng-model="" placeholder="Nhập ngày hẹn" class="form-control" ng-required="true" ng-maxlength="10" />                                   
                                </div>
                            </div>
                        </div>
                    </form>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="SaveCategory()">Lưu</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

                
                