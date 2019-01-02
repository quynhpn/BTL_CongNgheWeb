<div class="col-md-6 col-lg-10">
    <div class="container-fluid">
        <div class="row mt-4">
            <h3 class="col-md-12 text-center">QUẢN LÝ KHÁCH HÀNG</h3>
        </div>
    <form action="<?php echo base_url();?>index.php/customer/getListCustomerS" method="post">
        <div class="row mt-3">
            <div class="col-md-4 offset-md-4 text-center">
                <input class="form-control" type="text" placeholder="Nhập nội dung tìm kiếm" name="search" />
            </div>
        </div>
        <div class="row mt-3">
            <button class="btn btn-success col-md-2 offset-md-5" type="submit">
                <i class="fa fa-search"></i>
                    Tìm kiếm
            </button>
        </div>
    </form>
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
                        <a class="btn btn-warning" href="<?php echo base_url() . "index.php/customer/edit_customer/". $row['SDTKH'];?>">
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