<!DOCTYPE HTML>
<html>

<HEAD>
    <?php
    include '../layouts/header.php';
    ?>



</head>

<body>

    <?php
    include '../layouts/menu.php';
    ?>
    <div class="page-heading about-heading header-text" style="background-image: url(../assets/img/banner_product.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4> Cài đặt </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="khungLink">
        <div class="container">
            <div class="linkChose">
                <ul class="link">
                    <li>
                        <a href="../view/Index.php">Trang chủ</a>
                        <i class="fa fa-chevron-right"></i>
                    </li>
                    <li>
                        <a href="../view/setting.php">Tài khoản</a>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <?php
    include '../model/product.php';
    include '../model/order.php';
    $user = new Product();
    $order = new Order();

    $arr = array("id" => $_SESSION['account_id']);
    $userAll = $user->getAllUser2($arr);


    ?>
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="Profile-Form container">
                    <div class="Profile-SideBar col-md-3">
                        <div class="tabHiden">
                            <div class="In4">
                                <i class="fa fa-user-circle"></i>
                                <div class="namein4">
                                    <span>Tài khoản của</span>
                                    <span style="font-weight: 700;font-size: 15px;"><?php echo $userAll[0]['username'] ?></span>
                                </div>
                            </div>
                            <ul class="nav nav-tabs tab-nav" role="tablist">
                                <li role="presentation" class="active"><a href="#Profile" role="tab" data-toggle="tab"> <i class="fa fa-user-o"></i> Thông tin tài khoản</a></li>
                                <li role="presentation"><a href="#DH" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>Đơn hàng</a></li>
                                <li role="presentation"><a href="#Seen" role="tab" data-toggle="tab"><i class="fa fa-eye"></i>Sản phẩm đã xem</a></li>
                                <li role="presentation"><a href="#Liked" a role="tab" data-toggle="tab"><i class="fa fa-heart-o"></i>Sản phẩm đã thích</a></li>
                                <li role="presentation"><a href="#MuaSau" role="tab" data-toggle="tab"><i class="fa fa-archive"></i>Sản phẩm mua sau</a></li>
                                <li role="presentation"><a href="#DanhGia" role="tab" data-toggle="tab"><i class="fa fa-star-o"></i>Đánh giá của tôi</a></li>
                                <li role="presentation"><a href="#Commnet" role="tab" data-toggle="tab"><i class="fa fa-comment-o"></i>Bình luận của tôi</a></li>
                                <li role="presentation"><a href="#Change" role="tab" data-toggle="tab"><i class="fa fa-lock"></i>Thay đổi mật khẩu</a></li>
                                <li role="presentation"><a href="#Out" role="tab" data-toggle="tab"><i class="fa fa-power-off"></i>Đăng xuất tài khoản</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="Profile-Main col-md-9">
                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane active" id="Profile">

                                <h3>Thông tin tài khoản</h3>
                                <hr>
                                <form action="../controller/usercontroller.php" method="post">
                                    <div class="item-in4">
                                        <span>Họ tên</span>
                                        <input type="text" name="fullname" value="<?php echo $userAll[0]['fullname'] ?>" placeholder="">
                                    </div>
                                    <div class="item-in4">
                                        <span>Số điện thoại</span>
                                        <input type="text" name="phonenumber" id="phone" name="phone" value="<?php echo $userAll[0]['phonenumber'] ?>" required>
                                    </div>
                                    <div class="item-in4">
                                        <span>Email</span>
                                        <input type="email" name="email" id="" value="<?php echo $userAll[0]['email'] ?>">
                                    </div>
                                    <div class="item-in4">
                                        <span>Giới tính</span>
                                        <?php
                                        if ($userAll[0]['gender'] == 'nam') {

                                            echo '<label for="nam">';
                                            echo '    <input type="radio" checked id="nam" name="GioiTinh" value="nam" >';
                                            echo '    <span>Nam</span>';
                                            echo '</label>';
                                            echo '<label for="Nu">';
                                            echo '    <input type="radio" id="Nu" name="GioiTinh" value="nu">';
                                            echo '    <span>Nữ</span>';
                                            echo '</label>';
                                        } else {
                                            echo '<label for="nam">';
                                            echo '    <input type="radio"  id="nam" name="GioiTinh" value="nam">';
                                            echo '    <span>Nam</span>';
                                            echo '</label>';
                                            echo '<label for="Nu">';
                                            echo '    <input type="radio" checked id="Nu" name="GioiTinh" value="nu">';
                                            echo '    <span>Nữ</span>';
                                            echo '</label>';
                                        }
                                        ?>
                                    </div>
                                    <div class="item-in4">
                                        <span>Địa chỉ</span>
                                        <input type="text" name="address" value="<?php echo $userAll[0]['address'] ?>">
                                    </div>
                                    <div class="item-in4">
                                        <span></span>
                                        <button type="submit" class="btn btn-danger" name="useraction" value="updateCustomer">Cập nhật</button>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="DH">
                                <h3>Đơn hàng của tôi</h3>
                                <hr>
                                <ul class="nav-tabs nav navDH" role="tablist">
                                    <li role="presentation" class="active"><a href="#All" role="tab" data-toggle="tab">Tất cả</a></li>
                                    <li role="presentation"><a href="#Reply" role="tab" data-toggle="tab">Chờ xác nhận</a></li>
                                    <li role="presentation"><a href="#Replied" role="tab" data-toggle="tab">Đã xác nhận</a></li>
                                    <li role="presentation"><a href="#GH" role="tab" data-toggle="tab">Đã hủy</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="All">
                                        <div class="DonHang">
                                            <div class="ImgGioHang">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">STT</th>
                                                            <th scope="col">Mã hóa đơn</th>
                                                            <th scope="col">Tên sản phẩm</th>
                                                            <th scope="col">Tình trạng</th>
                                                            <th scope="col">Ngày đặt đơn</th>
                                                            <th scope="col">Ngày duyệt đơn</th>
                                                            <th scope="col">Giá</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tbodytable">
                                                        <?php
                                                        $customer_id = $_SESSION['account_id'];
                                                        $id = ["id" => $customer_id];
                                                        $orderItem = $order->getAllOrder($id);
                                                        foreach ($orderItem as $key =>  $item) {
                                                            echo '<tr>';
                                                            echo '    <td>' . ++$key . '</td>';
                                                            echo '    <td>' . $item['orderid'] . '</td>';
                                                            echo '    <td>' . $item['car_name'] . '</td>';
                                                            if ($item['state'] === "0") {
                                                                echo '    <td class="text-danger">Pending</td>';
                                                            } else if ($item['state'] === "1") {
                                                                echo '    <td class="text-success">Conformed</td>';
                                                            } else {
                                                                echo '    <td class="text-secondary">Denied</td>';
                                                            }
                                                            echo '    <td>' . $item['order_date'] . '</td>';
                                                            echo '    <td>' . $item['conform_order_date'] . '</td>';
                                                            echo '    <td>' . $item['total_price'] . '.000đ</td>';
                                                            echo '</tr>';
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane " id="Reply">
                                        <div class="DonHang">
                                            <div class="ImgGioHang">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">STT</th>
                                                            <th scope="col">Mã hóa đơn</th>
                                                            <th scope="col">Tên sản phẩm</th>
                                                            <th scope="col">Tình trạng</th>
                                                            <th scope="col">Ngày đặt đơn</th>
                                                            <th scope="col">Giá</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tbodytable">
                                                        <?php
                                                        $customer_id = $_SESSION['account_id'];
                                                        $id = ["id" => $customer_id];
                                                        $orderItem = $order->getPendingOrder($id);
                                                        foreach ($orderItem as $key =>  $item) {
                                                            echo '<tr>';
                                                            echo '    <td>' . ++$key . '</td>';
                                                            echo '    <td>' . $item['orderid'] . '</td>';
                                                            echo '    <td>' . $item['car_name'] . '</td>';
                                                            if ($item['state'] === "0") {
                                                                echo '    <td class="text-danger">Pending</td>';
                                                            } else if ($item['state'] === "1") {
                                                                echo '    <td class="text-success">Conformed</td>';
                                                            } else {
                                                                echo '    <td class="text-secondary">Denied</td>';
                                                            }
                                                            echo '    <td>' . $item['order_date'] . '</td>';
                                                            echo '    <td>' . $item['total_price'] . '.000đ</td>';
                                                            echo '</tr>';
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane " id="Replied">
                                        <div class="DonHang">
                                            <div class="ImgGioHang">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">STT</th>
                                                            <th scope="col">Mã hóa đơn</th>
                                                            <th scope="col">Tên sản phẩm</th>
                                                            <th scope="col">Tình trạng</th>
                                                            <th scope="col">Ngày đặt đơn</th>
                                                            <th scope="col">Ngày duyệt đơn</th>
                                                            <th scope="col">Giá</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tbodytable">
                                                        <?php
                                                        $customer_id = $_SESSION['account_id'];
                                                        $id = ["id" => $customer_id];
                                                        $orderItem = $order->getConformOrder($id);
                                                        foreach ($orderItem as $key =>  $item) {
                                                            echo '<tr>';
                                                            echo '    <td>' . ++$key . '</td>';
                                                            echo '    <td>' . $item['orderid'] . '</td>';
                                                            echo '    <td>' . $item['car_name'] . '</td>';
                                                            if ($item['state'] === "0") {
                                                                echo '    <td class="text-danger">Pending</td>';
                                                            } else if ($item['state'] === "1") {
                                                                echo '    <td class="text-success">Conformed</td>';
                                                            } else {
                                                                echo '    <td class="text-secondary">Denied</td>';
                                                            }
                                                            echo '    <td>' . $item['order_date'] . '</td>';
                                                            echo '    <td>' . $item['conform_order_date'] . '</td>';
                                                            echo '    <td>' . $item['total_price'] . '.000đ</td>';
                                                            echo '</tr>';
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane " id="GH">
                                        <div class="DonHang">
                                            <div class="ImgGioHang">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">STT</th>
                                                            <th scope="col">Mã hóa đơn</th>
                                                            <th scope="col">Tên sản phẩm</th>
                                                            <th scope="col">Tình trạng</th>
                                                            <th scope="col">Ngày đặt đơn</th>
                                                            <th scope="col">Ngày duyệt đơn</th>
                                                            <th scope="col">Giá</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tbodytable">
                                                        <?php
                                                        $customer_id = $_SESSION['account_id'];
                                                        $id = ["id" => $customer_id];
                                                        $orderItem = $order->getDeniedOrder($id);
                                                        foreach ($orderItem as $key =>  $item) {
                                                            echo '<tr>';
                                                            echo '    <td>' . ++$key . '</td>';
                                                            echo '    <td>' . $item['orderid'] . '</td>';
                                                            echo '    <td>' . $item['car_name'] . '</td>';
                                                            if ($item['state'] === "0") {
                                                                echo '    <td class="text-danger">Pending</td>';
                                                            } else if ($item['state'] === "1") {
                                                                echo '    <td class="text-success">Conformed</td>';
                                                            } else {
                                                                echo '    <td class="text-secondary">Denied</td>';
                                                            }
                                                            echo '    <td>' . $item['order_date'] . '</td>';
                                                            echo '    <td>' . $item['conform_order_date'] . '</td>';
                                                            echo '    <td>' . $item['total_price'] . '.000đ</td>';
                                                            echo '</tr>';
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="Seen">

                            </div>
                            <div role=" tabpanel" class="tab-pane " id="Liked">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">STT</th>
                                            <th scope="col">Tên sản phẩm</th>
                                            <th scope="col">Hình ảnh</th>
                                            <th scope="col">Giá</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tbodytable">
                                        <?php
                                        $account_id = $_SESSION['account_id'];
                                        $productlistliked = new Product();
                                        $likedcar = $productlistliked->likeCar_list($account_id);
                                        foreach ($likedcar as $key =>  $item) {
                                            echo '<tr>';
                                            echo '    <td>' . ++$key . '</td>';
                                            echo '    <td>' . $item['car_name'] . '</td>';
                                            echo '    <td ><img src="' . $item['car_img'] . '" width="130" height="80" alt=""></td>';
                                            echo '    <td>' . $item['price'] . '.000đ</td>';
                                            echo '</tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane " id="MuaSau">

                            </div>
                            <div role="tabpanel" class="tab-pane " id="DanhGia">

                            </div>
                            <div role="tabpanel" class="tab-pane " id="Commnet">

                            </div>
                            <div role="tabpanel" class="tab-pane " id="Change">
                                <h3 sty>Thay đổi mật khẩu</h3>
                                <hr>
                                <form action="../controller/usercontroller.php?action=pass" method="POST" id="password">
                                    <div class="item-in4">
                                        <span>Mật khẩu hiện tại</span>
                                        <input type="password" class="pass" name="passnow">
                                    </div>
                                    <div class="item-in4">
                                        <span>Mật khẩu mới</span>
                                        <input type="password" class="pass" name="passnew">
                                    </div>
                                    <div class="item-in4">
                                        <span>Nhập lại mật khẩu mới</span>
                                        <input type="password" class="pass" name="checkpassnew">
                                    </div>
                                    <input type="text" name="account_id" hidden value="<?php echo $_SESSION['account_id'] ?>">
                                    <div class="item-in4">
                                        <span></span>
                                        <input type="submit" value="Đổi mật khẩu" id="changPass">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <?php

    include '../layouts/footer.php';
    include '../layouts/js.php';
    ?>

    <script src="../assets/vendor/bootstrap/js/tab.js"></script>
</body>

</html>