  <div class="col-md-6 col-lg-10">
    <div class="container-fluid">
        <div class="container-fluid">
       <div class="row mt-3">
            <h3 class="col-md-12 text-center">QUẢN LÝ DỊCH VỤ</h3>
        </div>
        
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="row">
                    <label class="col-md-4 text-center">
                        Tên dịch vụ
                    </label>
                    <div class="col-md-4">
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
                        Mã dịch vụ
                    </th>
                    <th>
                        Tên dịch vụ
                    </th>
                    <th>
                        Giá 
                    </th>
                    <th></th>           
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>  
            <?php
                $stt=0; 
                foreach ($listService as $row){
                    $stt++;
            ?>        
                <tr class="table-warning">
                    <td><?php echo $stt?></td>
                    <td><?php echo $row['MaDV']?></td>
                    <td><?php echo $row['TenDV']?></td>
                    <td><?php echo $row['Gia']?></td>
                    <td>
                        <button class="btn btn-primary"data-toggle="modal" data-target="#detail-modal">
                            <i class="fa fa-edit">
                                Chi tiết
                            </i>
                        </button>
                    </td>                      
                    <td>
                        <button class="btn btn-warning"data-toggle="modal" data-target="#edit-modal">
                            <i class="fa fa-edit">
                                Sửa
                            </i>
                        </button>
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không');" href="<?php echo base_url() . "index.php/service/delete/" . $row['MaDV'];?>">
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

<div class="modal" tabindex="-1" role="dialog" id="detail-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Chi Tiết Dịch Vụ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="container"style="padding:30px;">
                        <table class="table table-bordered table-hover" >
                            <?php
                                $stt=0; 
                                //foreach ($listInvoiceDetail as $row2){
                                $stt++;
                            ?>  
                            <tr>
                                <th>Bước</th>
                                <th>Chi tiết bước</th>
                            </tr>
                            <tr>
                                <td><?php //echo $row2['TenDV']; ?></td>
                                <td><?php //echo $row2['Gia']; ?></td>    
                            </tr>
                            <?php
                           // }
                            ?>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                    </div>
                </div>
            </div>
        </div>
 </div>

        <div class="modal" tabindex="-1" role="dialog" id="add-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Thêm Dịch Vụ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form  ng-controller="ctrlCategory" name="formCategory">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Tên dịch vụ
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="txtEmployeeNameInsert" name="" ng-model="" placeholder="Nhập tên dịch vụ" class="form-control" ng-required="true" ng-maxlength="10" />                                   
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Giá dịch vụ
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="txtEmployeePhoneInsert" name="" ng-model="" placeholder="Nhập giá dịch vụ" class="form-control" ng-required="true" ng-maxlength="10" />                                   
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

    <div >
        <div class="modal" tabindex="-1" role="dialog" id="edit-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Sửa Dịch Vụ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form  ng-controller="ctrlCategory" name="formCategory">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Tên dịch vụ
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="" name="" ng-model="" placeholder="Nhập tên dịch vụ" class="form-control" ng-required="true" ng-maxlength="10" />                                   
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Giá dịch vụ
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="" name="" ng-model="" placeholder="Nhập giá dịch vụ" class="form-control" ng-required="true" ng-maxlength="10" />                                   
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

                
                