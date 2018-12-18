

  <div class="col-md-6 col-lg-10">
                      <div class="container-fluid">
                     <div class="row mt-4">
                    <h3 class="col-md-12 text-center">QUẢN LÝ ĐƠN HÀNG</h3>
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
                    <th></th>
                    <th></th>
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
                        <table>
                            <?php
                                $stt=0; 
                                foreach ($listInvoiceDetail as $row2){
                                $stt++;
                            ?>  
                            <tr>
                                <td><?php echo $stt; ?></td>    
                                <td><?php echo $row2['TenDV']; ?></td>
                                <td><?php echo $row2['Gia']; ?></td>    
                            </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </td>                        
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
                
                