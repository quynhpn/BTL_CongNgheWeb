<div class="col-md-6 col-lg-10">
    <div class="container-fluid">
        <div class="row mt-4">
            <h3 class="col-md-12 text-center">QUẢN LÝ ĐƠN HÀNG</h3>
        </div>
        <form action="<?php echo base_url();?>index.php/invoice/getListInvoiceS" method="post">
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
                            <table class="table table-bordered table-hover" style="background-color:#DEB887;">
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

    
                
                