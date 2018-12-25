<div class="container">
  <form id="formOrder">
    <div class="row">
        <h3 class="col-md-12 text-center">THÊM ĐƠN HÀNG</h3>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <label class="col-md-12 text-right">Khách hàng</label>
        </div>
        <div class="col-md-3">
            <input type="text" class="form-control" name="tenkh"/>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <label class="col-md-12 text-right">Dịch vụ</label>
        </div>
        <div class="col-md-3">
            <input type="text" class="form-control" name="dichvu" />
        </div>
    </div>
    <div class="row mt-3">
        <table class="table table-bordered table-hover" id="tblProduct">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên dịch vụ</th>
                    <th>Giá</th>
                </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
        </table>
    </div>
    <div class="row mt-3">
        <div class="col-md-5 offset-md-7">
            <div class="row">
                <div class="col-md-4">
                    Tổng số tiền:
                </div>
                <div class="col-md-8">
                    <span class="text-danger" id="all_price">
                        0
                    </span>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="col-md-2 offset-md-10">
    <button class="btn btn-warning text-right" onclick="SaveOrder()">
        <i class="fa fa-save"></i>
        Lưu
    </button>
</div>
</div>
