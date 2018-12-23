  <div class="col-md-6 col-lg-10">
                      <div class="container-fluid">
                <div class="row mt-3">
            <h3 class="col-md-12 text-center">QUẢN LÝ NHÂN VIÊN</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <label class="col-md-5 text-right">
                        Tên nhân viên
                    </label>
                <div class="col-md-5">
                    <input class="form-control" type="text" placeholder="Nhập tên người dùng" id="txtUserName" />
                </div>
            </div>
        </div>
        
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="row">
                <label class="col-md-5 text-right">
                    Chức vụ
                </label>
                <div class="col-md-5">
                    <select class="form-control" id="slPositionID">
                        <option value="0">Tất cả</option>                                 
                    </select>
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
                    <button class="btn btn-info col-md-2 offset-md-9" data-toggle="modal" data-target="#add-modal">
                        <i class="fa fa-user-plus"></i>
                        Thêm mới
                    </button>
                </div>
                <div class="row">
                     <table class="table table-bordered table-hover mt-3">
            <thead>
                <tr class="table-active">
                    <th>
                        STT
                    </th>
                    <th>
                        Tài khoản
                    </th>
                    <th>
                        Mật khẩu
                    </th>
                    <th>
                        Mã nhân viên
                    </th>
                    <th>
                        Tên nhân viên
                    </th>
                    <th>
                        Số điện thoại 
                    </th>
                    <th>
                        Email
                    </th>            
                    <th>Chức vụ</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>    
            <?php
            $stt=0;
            foreach ($listEmployee as $row) {
                $stt++;
            ?>   
                <tr class="table-warning">
                    <td><?php echo $stt?></td>
                    <td></td>
                    <td></td>
                    <td><?php echo $row['MaNV']?></td>
                    <td><?php echo $row['TenNV']?></td>
                    <td><?php echo $row['SDTNV']?></td>
                    <td><?php echo $row['Email']?></td>     
                    <td><?php echo $row['MaCV']?></td>                   
                    <td>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#edit-modal">
                            <i class="fa fa-edit">
                                Sửa
                            </i>
                        </button>
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không');" href="<?php echo base_url() . "index.php/employee/delete/" . $row['MaNV'];?>">
                           <i class="fa fa-trash">
                                Xóa
                            </i>
                        </a>
                    </td>
                </tr>  
                <?php
                }
                ?>         

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
                        <h5 class="modal-title">Thêm Nhân Viên</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form  ng-controller="ctrlEmployee" name="formEmployee" action="<?php echo base_url();?>index.php/employee/addEmployee" method="post" >
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Tài khoản
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="tennv" ng-model="" placeholder="Nhập tài khoản" class="form-control" ng-required="true" ng-maxlength="10" />                                   
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Mật khẩu
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="tennv" ng-model="" class="form-control" ng-required="true" ng-maxlength="10" />                                   
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Tên nhân viên
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="tennv" ng-model="" placeholder="Nhập tên nhân viên" class="form-control" ng-required="true" ng-maxlength="10" />                                   
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Số điện thoại
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text"  name="sdtnv" ng-model="" placeholder="Nhập số điện thoại nhân viên" class="form-control" ng-required="true" ng-maxlength="10" />                                   
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Email
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text"  name="eamilnv" ng-model="" placeholder="Nhập email nhân viên" class="form-control" ng-required="true" ng-maxlength="10" />                                   
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 text-center">
                                    <label for="exampleFormControlSelect1">Chức vụ</label>
                                </div>
                                <div class="col-md-7">
                                    <select class="form-control" name = "cvnv">
                                        <option value ="Nhân viên" >Nhân viên</option>
                                        <option value ="Lễ tân">Lễ tân</option>
                                    </select>                                   
                                </div>                                                           
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input class="btn btn-primary" type="submit" value="Lưu">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                        </div>
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
                        <h5 class="modal-title">Sửa Nhân Viên</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form  ng-controller="ctrlCategory" name="formCategory">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Tên nhân viên
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="" name="" ng-model="" placeholder="Nhập tên nhân viên" class="form-control" ng-required="true" ng-maxlength="10" />                                   
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Số điện thoại
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="" name="" ng-model="" placeholder="Nhập số điện thoại nhân viên" class="form-control" ng-required="true" ng-maxlength="10" />                                   
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Email
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="" name="" ng-model="" placeholder="Nhập số điện thoại nhân viên" class="form-control" ng-required="true" ng-maxlength="10" />                                   
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 text-center">
                                    <label for="exampleFormControlSelect1">Chức vụ</label>
                                </div>
                                <div class="col-md-7">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Nhân viên</option>
                                        <option>Lễ tân</option>
                                    </select>                                   
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
                
                