<div class="container">
        <div class="row">
          <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a><span>Trang chủ</span></a></li>
                <li class="breadcrumb-item"><a><span>Đặt lịch</span></a></li>
                
          </ol>
      </div>
</div>
 <div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-3"></div>
                <div class="col-md-4 col-lg-6" style="background:#efdcbc">
                    <div class="col-md-12 mt-3 mb-2">
                        <h5><i class="fa fa-hand-o-right"></i>NHẬP SỐ ĐIỆN THOẠI CỦA BẠN</h5>
                    </div> 
                    <div class="col-md-12 mt-2 mb-3">
                        <input type="text" class="form-control" placeholder="Nhập số điện thoại (Một số đặt cho 1 người)">
                    </div> 
                </div>
                <div class="col-md-4 col-lg-3"></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row ">
                <div class="col-md-4 col-lg-3"></div>
                <div class="col-md-4 col-lg-6" style="background:#fef9dc;">
                    
                    <h3>CHỌN NGÀY/GIỜ CẮT</h3>
                </div>
                <div class="col-md-4 col-lg-3"></div>
            </div>
            <div class="row">
               <div class="col-md-4 col-lg-3"></div>
                <div class="col-md-4 col-lg-6" style="background:#fef9dc;">
                     <div class="col-md-12 mt-2 text-center">
                      <button class="btn btn-dark btn-date">
                        <p>Hôm nay</p>
                        <p><?php echo date("d-m-Y");?></p>
                      </button>
                      <button class="btn btn-dark btn-date">
                        <p>Ngày mai</p>
                        <p>
                          <?php
                           $d=strtotime("tomorrow");
                           echo date("d-m-Y", $d) . "<br>";
                          ?>
                        </p>
                      </button>
                      <button class="btn btn-dark btn-date">
                        <p>Ngày kia</p>
                        <p>
                          <?php
                            $startdate = strtotime("tomorrow");
                            $enddate = strtotime("+1 days", $startdate);
                            echo date("d-m-Y", $enddate) . "<br>";
                          ?>
                        </p>
                      </button>
                     </div> 
               </div>
                <div class="col-md-4 col-lg-3"></div>
             
          <div class="row text-center">
            <div class="col-md-4 col-lg-3"></div>
                <div class="col-md-4 col-lg-6 mb-4" style="background:#fef9dc;">
                     <div class="col-md-12 mt-2">
            <button class="btn btn-outline-success" time-frame="09:00">
              <div class="time">09:00</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success" time-frame="09:30">
              <div class="time">09:30</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success" time-frame="10:00">
              <div class="time">10:00</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success" time-frame="10:30">
              <div class="time">10:30</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success" time-frame="11:00">
              <div class="time">11:00</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-danger mt-2" time-frame="10:30">
              <div class="time">10:30</div>
              <div class="slot">Hết chỗ</div>
            </button>
            <button class="btn btn-outline-success mt-2" time-frame="11:00">
              <div class="time">11:00</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success mt-2" time-frame="11:30">
              <div class="time">11:30</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success mt-2" time-frame="12:00">
              <div class="time">12:00</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success mt-2" time-frame="12:30">
              <div class="time">12:30</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success mt-2" time-frame="13:00">
              <div class="time">13:00</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success mt-2" time-frame="13:30">
              <div class="time">13:30</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success mt-2" time-frame="14:00">
              <div class="time">14:00</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success mt-2" time-frame="14:30">
              <div class="time">14:30</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success mt-2" time-frame="15:00">
              <div class="time">15:00</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success mt-2" time-frame="15:30">
              <div class="time">15:30</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success mt-2" time-frame="16:00">
              <div class="time">16:00</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success mt-2" time-frame="16:30">
              <div class="time">16:30</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success mt-2" time-frame="17:00">
              <div class="time">17:00</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success mt-2" time-frame="17:30">
              <div class="time">17:30</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success mt-2" time-frame="18:00">
              <div class="time">18:00</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success mt-2" time-frame="18:30">
              <div class="time">18:30</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success mt-2" time-frame="19:00">
              <div class="time">19:00</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success mt-2" time-frame="19:30">
              <div class="time">19:30</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success mt-2" time-frame="20:00">
              <div class="time">20:00</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success mt-2" time-frame="20:30">
              <div class="time">20:30</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success mt-2" time-frame="21:00">
              <div class="time">21:00</div>
              <div class="slot">Còn chỗ</div>
            </button>
            <button class="btn btn-outline-success mt-2" time-frame="21:30">
              <div class="time">21:30</div>
              <div class="slot">Còn chỗ</div>
            </button>
          </div>  
          <div class="col-md-12 mt-4 text-center mb-3">
             <a type="type" class="btn btn-dark btn_cal " style="font-size: 40px;" href="#">
               <i class="fa fa-calendar"></i>
               ĐẶT LỊCH GIỮ CHỖ
             </a>
          </div>  
               </div>
                <div class="col-md-4 col-lg-3"></div>
          </div>
        </div>
    </div>
   
</div>