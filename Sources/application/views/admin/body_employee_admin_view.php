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
                    <a class="btn btn-info col-md-2 offset-md-9" href="<?php echo base_url() . "index.php/employee/add_employee"; ?>">
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
                    <td><?php echo $row['TenDN']?></td>
                    <td><?php echo $row['MatKhau']?></td>
                    <td><?php echo $row['MaNV']?></td>
                    <td><?php echo $row['TenNV']?></td>
                    <td><?php echo $row['SDTNV']?></td>
                    <td><?php echo $row['Email']?></td>     
                    <td><?php echo $row['ChucVu']?></td>                   
                    <td>
                        <a class="btn btn-warning"href="<?php echo base_url() . "index.php/employee/edit_employee"; ?>">
                            <i class="fa fa-edit">
                                Sửa
                            </i>
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không');" href="<?php echo base_url() . "index.php/employee/delete/" . $row['MaNV'];?> onclick="return confirm('Bạn có muốn xóa không');" href="<?php echo base_url() . "index.php/employee/delete/" . $row['MaNV'];?>">
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

                
                
             