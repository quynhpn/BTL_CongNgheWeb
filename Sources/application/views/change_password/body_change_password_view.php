<style>
    body{
    background-image: url('<?php echo base_url(); ?>assets/img/Back-gr.jpg');    
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    overflow: hidden;
}
</style>
<div class="container">
        <div class="row mt-3">
            <div class="col-md-4 offset-4 col-sm-12 text-center h-40 mt-1">
                <img src="<?php echo base_url(); ?>assets/img/aaa.png" style="width:50%; height:auto" />
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 offset-4 col-sm-12 bg-white rounded pt-2 pl-5 pr-5 pb-2">
                <div class="row mt-3">
                    <h2>
                        <div class="fa fa-lock">
                        </div>
                        Đổi mật khẩu
                    </h2>
                </div>
                <div class="row mb-1 position-relative mt-3">
                    <input type="text" class="form-control" placeholder="Tên tài khoản" />
                        <i class="fa fa-user position-absolute" style="top:10px;right:5px"></i>
                </div>
                <div class="row mb-1 position-relative mt-3">
                    <input type="password" class="form-control" placeholder="Nhập mật khẩu hiện tại"/>
                        <i class="fa fa-key position-absolute" style="top:10px;right:5px"></i>
                </div>
                <div class="row mb-1 position-relative mt-3">
                    <input type="password" class="form-control" placeholder="Mật khẩu mới"/>
                        <i class="fa fa-key position-absolute" style="top:10px;right:5px"></i>
                </div>
                <div class="row mb-1 position-relative mt-3">
                    <input type="password" class="form-control" placeholder="Xác nhận mật khẩu mới"/>
                        <i class="fa fa-key position-absolute" style="top:10px;right:5px"></i>               
                </div>
                <div class="row mt-3">
                    <button class="col-md-6 offset-md-3 btn btn-primary">
                        Xác nhận
                    </button>
                </div>
        </div>       