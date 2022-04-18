<div class="mt-5">
    <h5>TÍNH NĂNG</h5>
    <div class="mt-2">
        <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-center">
                <i class="fa fa-circle-check mr-2"></i>
                <span>Điều hoà (A/C) </span>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-center"><i class="fa fa-circle-check mr-2"></i><span>Định
                    vị (GPS) </span></div>
            <div class="col-lg-4 col-md-6 d-flex align-items-center"><i
                    class="fa fa-circle-check mr-2"></i><span>Bluetooth </span></div>
            <div class="col-lg-4 col-md-6 d-flex align-items-center"><i class="fa fa-circle-check mr-2"></i><span>Khe
                    cắm USB</span></div>
        </div>
    </div>
</div>
<div class="mt-5">
    <h5>THỦ TỤC</h5>
    <div class="mt-2">
        <div><b>Giấy tờ chỉ cần xác minh (chủ xe không giữ lại)</b>
            <ul class="list-style">
                <li>CMND</li>
                <li>Bằng lái</li>
            </ul>
        </div>
        <div><b>Giấy tờ thế chấp (chủ xe giữ lại)</b>
            <ul class="list-style">
                <li>Sổ hộ khẩu</li>
            </ul>
        </div>
        <div><b>Tài sản thế chấp (chủ xe giữ lại)</b>
            <ul class="list-style">
                <li>15-20 triệu hoặc xe máy + đăng kí xe giá trị tương đương</li>
            </ul>
        </div>
    </div>
</div>
<div class="mt-5">
    <h5>CHẤP NHẬN THANH TOÁN</h5>
    <div class="mt-2">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-md">
                <span style="float: left; width: 73%;">
                    <i class="fa-solid fa-money-bill-simple-wave mr-2"></i>Trả sau
                </span>
                <span style="float: left; width: 73%;">
                    <i class="fa-brands fa-cc-visa mr-2"></i>Thanh toán qua chuyển khoản ngân
                    hàng
                </span>
            </div>
        </div>
    </div>
</div>
<div class="mt-5">
    <h5>GIỚI HẠN QUÃNG ĐƯỜNG</h5>
    <div class="mt-2">
        <ul class="form-control-static pt-none">
            <li>Tối đa 300 km/ngày</li>
            <li>Phụ trội 3.000 đ/km</li>
        </ul>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 ">
    <div class="right-info detail-page">
        <div class="section p-3 mb-2">
            <div class="title">Giao xe</div>
            <div class="form-check"><label class="form-check-label"><input type="checkbox" class="form-check-input">Giao
                    xe tại nhà</label></div>
        </div>
        <div class="section p-3 mb-2">
            <div class="title">Thời gian thuê</div>
            <div class="rental-dates">
                <div>
                    <div class="label">Ngày nhận xe</div>
                    <div class="react-datepicker-wrapper">
                        <div class="react-datepicker__input-container">
                            <?php
                                $time = time();
                                $time += 86400;
                                echo '<input type="datetime-local"  value="'.date("Y-m-d",$time).'T07:00" class="form-control input-time" placeholder="Return date/time" required="">';
                            ?>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="label">Ngày trả xe</div>
                    <div class="react-datepicker-wrapper">
                        <div class="react-datepicker__input-container">
                            <?php
                                echo '<input type="datetime-local"  value="'.date("Y-m-d",$time).'T19:30" class="form-control" placeholder="Return date/time" required="">';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>