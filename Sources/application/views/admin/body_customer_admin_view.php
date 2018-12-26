            <div class="col-md-6 col-lg-10">
                      <div class="container-fluid">
        <div class="row mt-4">
                    <h3 class="col-md-12 text-center">QUẢN LÝ KHÁCH HÀNG</h3>
        </div>
        
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="row">
                    <label class="col-md-5 text-right">
                        Tên khách hàng
                    </label>
                    <div class="col-md-5">
                        <div class="row">
                            <input class="form-control" type="text" placeholder="Nhập tên khách hàng"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <label class="col-md-5 text-right mt-3">
                        SĐT khách hàng
                    </label>
                    <div class="col-md-5 mt-3">
                        <div class="row">
                            <input class="form-control" type="text" placeholder="Nhập SĐT khách hàng"/>
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
                    <a class="btn btn-info col-md-2 offset-md-9" href="<?php echo base_url() . "index.php/customer/add_customer"; ?>">
                        <i class="fa fa-user-plus"></i>
                        Thêm mới
                    </a>
                </div>
                <div class="row">
                     <table class="table table-bordered table-hover mt-3">
            <thead>
                <tr class="table-active">
                    <th>
                        STT
                    </th>
                    <th>
                        Số điện thoại
                    </th>
                    <th>
                       Tên khách hàng 
                    </th>
                    <th>
                        Địa chỉ
                    </th>            
                    <th></th>
                </tr>
            </thead>
            <tbody>  
            <?php
                $stt=0; 
                foreach ($listCustomer as $row){
                    $stt++;
            ?>     
                <tr class="table-warning">
                    <td><?php echo $stt?></td>
                    <td><?php echo $row['SDTKH']?></td>
                    <td><?php echo $row['TenKH']?></td>
                    <td><?php echo $row['DiaChi']?></td>                        
                    <td>
                        <a class="btn btn-warning" href="<?php echo base_url() . "index.php/customer/edit_customer"; ?>">
                            <i class="fa fa-edit">
                                Sửa
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
        <div class="modal" tabindex="-1" role="dialog" id="edit-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Sửa Khách Hàng</h5>
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
                                    <input type="text" id="" name="" ng-model="" placeholder="Nhập tên khách hàng" class="form-control" ng-required="true" ng-maxlength="10" />                                   
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Số điện thoại
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="" name="" ng-model="" placeholder="Nhập số điện thoại khách hàng" class="form-control" ng-required="true" ng-maxlength="10" />                                   
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 text-center">
                                    <label>
                                        Địa chỉ
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="" name="" ng-model="" placeholder="Nhập số điện thoại khách hàng" class="form-control" ng-required="true" ng-maxlength="10" />                                   
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
                
                