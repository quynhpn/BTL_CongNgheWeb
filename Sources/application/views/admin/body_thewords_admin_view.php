<div class="col-md-6 col-lg-10">
                      <div class="container-fluid">
                     <div class="row mt-4">
                    <h3 class="col-md-12 text-center">QUẢN LÝ BÀI VIẾT</h3>
        </div>
        
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="row">
                    <label class="col-md-5 text-right">
                        Tên bài viết
                    </label>
                    <div class="col-md-5">
                        <div class="row">
                            <input class="form-control" type="text" placeholder="Nhập tên bài viết"/>
                        </div>
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
                <div class="row">
                     <table class="table table-bordered table-hover mt-3">
            <thead>
                <tr class="table-active">
                    <th>
                        STT
                    </th>
                    <th>
                        Tên bài viết 
                    </th>
                    <th>
                        Giới thiệu
                    </th>   
                    <th>
                        Chi tiết
                    </th> 
                    <th>
                        Link
                    </th> 
                    <th>
                        Mã nhân viên
                    </th>
                    <th></th>
                    <th></th>         
                </tr>
            </thead>
            <tbody>  
            <?php
                $stt=0; 
                foreach ($listWords as $row){
                $stt++;
            ?>       
                <tr class="table-warning">
                    <td><?php echo $stt?></td>
                    <td><?php echo $row['TenBV'];?></td>
                    <td><?php echo $row['GioiThieuBV'];?></td>
                    <td><?php echo $row['ChiTietBV'];?></td>
                    <td><?php echo $row['link'];?></td>
                    <td><?php echo $row['MaNV'];?></td>
                    <td>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#edit-modal">
                            <i class="fa fa-edit"data-toggle="modal" data-target="#edit-modal">
                                Sửa
                            </i>
                        </button>
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không');" href="<?php echo base_url() . "index.php/thewords/delete/" . $row['MaBV'];?>">
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
            //echo  $this->pagination->create_links();
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
                        <h5 class="modal-title">Thêm Bài Viết</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form  ng-controller="ctrlThewords" name="formThewords"action="<?php echo base_url();?>index.php/thewords/pro_add_TheWords" method="post">
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

<div>
        <div class="modal" tabindex="-1" role="dialog" id="edit-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Sửa Bài Viết</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form  ng-controller="ctrlCategory" name="formCategory">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Mã bài viết
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="txtEmployeeNameInsert" name="" ng-model="" class="form-control" ng-required="true" ng-maxlength="10" />                                   
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Tên bài viết
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="txtEmployeeNameInsert" name="" ng-model="" class="form-control" ng-required="true" ng-maxlength="10" />                                   
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Giới thiệu
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="txtEmployeePhoneInsert" name="" ng-model=""class="form-control" ng-required="true" ng-maxlength="10" />                                   
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Chi tiết
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="txtEmployeeEmailInsert" name="" ng-model="" class="form-control" ng-required="true" ng-maxlength="10" />                                   
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Link
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="txtEmployeeEmailInsert" name="" ng-model="" class="form-control" ng-required="true" ng-maxlength="10" />                                   
                                </div>
                            </div>
                        </div>
                    </form>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="SaveEmployee()">Lưu</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                    </div>
                </div>
            </div>
        </div>
</div>    