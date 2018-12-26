
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
            <a class="btn btn-info col-md-2 offset-md-9" href="<?php echo base_url() . "index.php/appointment/add_appointment"; ?>"
                <i class="fa fa-user-plus"></i>
                Thêm mới
            </a>
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
                        <a class="btn btn-warning" href="<?php echo base_url() . "index.php/appointment/edit_appointment"; ?>">
                            <i class="fa fa-edit">
                                Sửa
                            </i>
                        </a>
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


                
                