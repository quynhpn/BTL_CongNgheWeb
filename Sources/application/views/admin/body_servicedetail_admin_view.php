  <div class="col-md-6 col-lg-10"style="min-height: 580px;">
    <div class="container-fluid">
        <div class="container-fluid">
       <div class="row mt-3">
            <h3 class="col-md-12 text-center">CHI TIẾT DỊCH VỤ: <?php echo $DV['TenDV']; ?> </h3>
        </div>
        <div class="row">
            <a class="btn btn-info col-md-2 offset-md-9" href="<?php echo base_url() . "index.php/servicedetail/add_servicedetail/" . $DV['MaDV'];?>">
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
                        Bước
                    </th>
                    <th>
                        Chi tiết bước 
                    </th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>  
            <?php
                $stt=0; 
                foreach ($listServiceDetail as $row){
                    $stt++;
            ?>        
                <tr class="table-warning">
                    <td><?php echo $stt?></td>
                    <td><?php echo $row['MaDV']?></td>
                    <td><?php echo $row['Buoc']?></td>
                    <td><?php echo $row['Chitietbuoc']?></td>
                    <td>
                        <a class="btn btn-warning" href="<?php echo base_url() . 'index.php/servicedetail/edit_servicedetail/'.$row['MaDV'] .'/'.$row['MACTDV'] ?>">
                            <i class="fa fa-edit">
                                Sửa
                            </i>
                        </a>
                    </td>
                    <td>
                         <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không');" href="<?php echo base_url() . "index.php/servicedetail/delete/" . $row['MACTDV'].'/'.$DV['MaDV'];?>">
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
<div >


