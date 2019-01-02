<div class="modal-content col-md-6 col-lg-10" >
    <div class="modal-header">
        <h5 class="modal-title">Chi Tiết Đơn Hàng <?php echo $dtiv[0]['MaDH'];?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="container">
        <table class="table table-bordered table-hover" style="background-color:#DEB887;">
            <?php
            $stt=0; 
            foreach ($dtiv as $row){
            $stt++;
            ?>  
        <tr>
        <td><?php echo $stt; ?></td>    
        <td><?php echo $row['TenDV']; ?></td>
        <td><?php echo $row['Gia']; ?></td>    
        </tr>
        <?php
            }
            ?>
        </table>
    <div class="modal-footer">
        <a type="button" class="btn btn-secondary" data-dismiss="modal" href="<?php echo base_url() . "index.php/invoice/index" ?>">Thoát</a>
    </div>
</div>
</div>