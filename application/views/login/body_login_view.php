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
                            Đăng nhập
                        </h2>
                    </div>
                    <div class="row mt-2 position-relative">
                        <input type="text" class="form-control" placeholder="Tên tài khoản/UserName" id="txtUser"/>
                            <i class="fa fa-user position-absolute" style="top:10px;right:5px"></i>
                    </div>
                    <div class="row mt-2 position-relative">
                        <input type="password" class="form-control" placeholder="Mật khẩu/password" id="txtPass"/>
                            <i class="fa fa-key position-absolute" style="top:10px;right:5px"></i>
                    </div>
                    <div class="row mb-2 mt-3">
                        <button class="col-md-6 offset-3 btn btn-secondary">    
                            Đăng nhập
                        </button>
                    </div>
                </div>    
            </div>
            <div class="row mt-3">                
                <div class="col-md-12 text-center"> 
                    <button class="btn btn-link text-white">                                            
                            Đổi mật khẩu                                                                
                    </button>
                </div>                  
            </div>
        </div>