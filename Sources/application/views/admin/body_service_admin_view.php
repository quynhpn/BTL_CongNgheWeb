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
            <a class="btn btn-info col-md-2 offset-md-9" href="<?php echo base_url() . "index.php/service/add_services/"?>">
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
                        <a class="btn btn-primary" href="<?php echo base_url() . "index.php/service/detail/" . $row['MaDV'];?>">
                            <i class="fa fa-edit">
                                Chi tiết
                            </i>
                        </a>
                    </td>                      
                    <td>
                        <a class="btn btn-warning" href="<?php echo base_url() . "index.php/service/edit_services/"?>">
                            <i class="fa fa-edit">
                                Sửa
                            </i>
                        </a>
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


    
                
                