 <div class="row">
    <div class="col-md-2">
    </div>
    <div class="container">
        <div class="row mt-3">
            <h3 class="col-md-12 text-center">QUẢN LÝ NHÂN VIÊN</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <label class="col-md-4">
                        Tên nhân viên
                    </label>
                <div class="col-md-8">
                    <input class="form-control" type="text" placeholder="Nhập tên người dùng" id="txtUserName" />
                </div>
            </div>
        </div>
        
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="row">
                <label class="col-md-4">
                    Chức vụ
                </label>
                <div class="col-md-8">
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
                    <button class="btn btn-info col-md-2 offset-md-9">
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
                    <td><?php echo $row['MaNV']?></td>
                    <td><?php echo $row['TenNV']?></td>
                    <td><?php echo $row['SĐTNV']?></td>
                    <td><?php echo $row['Email']?></td>     
                    <td><?php echo $row['ChucVu']?></td>                   
                    <td>
                        <button class="btn btn-warning">
                            <i class="fa fa-edit">
                                Sửa
                            </i>
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-danger">
                           <i class="fa fa-trash">
                                Xóa
                            </i>
                        </button>
                    </td>
                </tr>  
                <?php
                }
                ?>         

            </tbody>
        </table> 
                </div>
                </div>
                </div>
                
                