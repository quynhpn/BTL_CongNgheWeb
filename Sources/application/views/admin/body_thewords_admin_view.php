<div class="col-md-6 col-lg-10">
                      <div class="container-fluid">
                     <div class="row mt-4">
                    <h3 class="col-md-12 text-center">QUẢN LÝ BÀI VIẾT</h3>
        </div>
        
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="row">
                    <label class="col-md-5 text-right"s>
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
                        Mã bài viết
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
                </tr>
            </thead>
            <tbody>  
            <?php
                $stt=0; 
                //foreach ($listWords as $row){
                $stt++;
            ?>       
                <tr class="table-warning">
                    <td><?php echo $stt?></td>
                    <td><?php //echo $row['MaDH']?></td>
                    <td><?php //echo $row['TenKH']?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>                        
                </tr> 
                <?php
                //}
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