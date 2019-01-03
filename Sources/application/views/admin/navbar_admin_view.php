<nav class="navbar navbar-expand navbar-dark bg-dark sticky-top" style="color: #fff;">
    <a class="navbar-brand mr-1">BarBer Shop</a>
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0">
        <i class="fa fa-bars"></i>
    </button>
    <form class="d-none d-md-inline-block form-inline ml-auto mr-md-3 my-2 my-md-0">
    </form>
    <ul class="navbar-nav ml-auto ml-md-0">
            <li>
               <a class="nav-link" style="color:white;" href="<?php echo base_url();?>index.php/home">Trang chủ</a>
            </li>
            <li class="nav-item dropdown no-arrow" >
                <a style="color:white;" class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $this->session->userdata('TenNV');?><i class="fa fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?php echo base_url().'index.php/login/logout';?>">Đăng xuất</a>
                    <a class="dropdown-item" href="<?php echo base_url().'index.php/admin/info/' . $this->session->userdata('MaNV'); ?>">Sửa thông tin cá nhân</a>
                </div>
            </li>
    </ul>

</nav>  
