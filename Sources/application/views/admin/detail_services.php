<div class="modal-content col-md-6 col-lg-10" >
    <div class="modal-header">
        <h5 class="modal-title">Chi Tiết Dịch Vụ <?php echo $dtsv[0]['MaDV'];?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="container">
        <table class="table table-bordered table-hover" >
            <tr>
                <th>Bước</th>
                <th>Chi tiết bước</th>
            </tr>
            <?php
                foreach ($dtsv as $row){
            ?>  
            <tr>
                <td><?php echo $row['Buoc']; ?></td>
                <td><?php echo $row['Chitietbuoc']; ?></td>    
            </tr>
            <?php
             }
            ?>
        </table>
    </div>
    <div class="modal-footer">
        <a type="button" class="btn btn-secondary" data-dismiss="modal" href="<?php echo base_url() . "index.php/service/index" ?>">Thoát</a>
    </div>
    </div>
</div>