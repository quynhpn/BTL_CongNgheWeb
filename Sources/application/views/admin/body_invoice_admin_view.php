

  <div class="col-md-6 col-lg-10">
                      <div class="container-fluid">
                     <div class="row mt-4">
                    <h3 class="col-md-12 text-center">QUẢN LÝ ĐƠN HÀNG</h3>
        </div>
        
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="row">
                    <label class="col-md-5 text-right"s>
                        Tên khách hàng
                    </label>
                    <div class="col-md-5">
                        <div class="row">
                            <input class="form-control" type="text" placeholder="Nhập tên khách hàng"/>
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
                        Mã đơn hàng
                    </th>
                    <th>
                        Tên khách hàng 
                    </th>
                    <th>
                        Danh sách dịch vụ
                    </th>            
                </tr>
            </thead>
            <tbody>  
            <?php
                $stt=0; 
                foreach ($listInvoice as $row){
                $stt++;
            ?>       
                <tr class="table-warning">
                    <td><?php echo $stt?></td>
                    <td><?php echo $row['MaDH']?></td>
                    <td><?php echo $row['TenKH']?></td>
                    <td>
                    

                    <a class="btn btn-primary" href="<?php echo base_url() . "index.php/invoice/detail/" . $row['MaDH'];?>">
                            <i class="fa fa-edit">
                                Chi tiết
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

    
                
                