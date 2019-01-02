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
<div class="hero-image" id="bgr">
            <div class="row">
                <div class="col-md-4 offset-4 col-sm-12 text-center mt-5" >           
                    <img src="<?php echo base_url(); ?>assets/img/aaa.png" style="width: 40%; height: auto" />
                </div>
            </div>
            <div class="row mt-3">              
                <div class="col-md-4 offset-4 col-sm-12 bg-white rounded pt-2 pl-5 pr-5 pb-2">
                    <div class="row mt-2">
                        <h2>
                            <div class="fa fa-lock">    
                            </div>
                            Đăng nhập quản trị
                        </h2>
                    </div>
                    <form method="post" action="<?php echo base_url() . 'index.php/Login'; ?>">
                        <div class="row mt-2 position-relative">
                            <input type="text" class="form-control" placeholder="Tên tài khoản/UserName" name="TenDN" required/>
                                <i class="fa fa-user position-absolute" style="top:10px;right:5px"></i>
                        </div>
                        <div class="row mt-2 position-relative">
                            <input type="password" class="form-control" placeholder="Mật khẩu/password" name="MatKhau" required/>
                                <i class="fa fa-key position-absolute" style="top:10px;right:5px"></i>
                        </div>
                        <div class="row mb-2 mt-3">
                            <input type="submit" value="Đăng nhập" class="col-md-6 offset-3 btn btn-secondary">    
                        </div>
                </div>    
                </form>
            </div>
            <div class="row mt-3">                
                <div class="col-md-12 text-center"> 
                    <input type="submit" value="Đổi mật khẩu" class="btn btn-link text-white">                                            
                </div>                  
            </div>
        </div>        