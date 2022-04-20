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
    <div class="page-heading about-heading header-text"
        style="background-image: url(../assets/img/banner_product.png);">
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
        $user = new Product();

        $arr = array("id"=>$_SESSION['account_id']);
        $userAll = $user->getAllUser2($arr);
    ?>
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="Profile-Form container">
                    <div class="Profile-SideBar col-md-3">
                        <div class="tabHiden" >
                            <div class="In4">
                                <i class="fa fa-user-circle"></i>
                                <div class="namein4">
                                    <span>Tài khoản của</span>
                                    <span style="font-weight: 700;font-size: 15px;"><?php echo $userAll[0]['username'] ?></span>
                                </div>
                            </div>
                            <ul class="nav nav-tabs tab-nav" role="tablist">
                                <li role="presentation" class="active"><a href="#Profile" role="tab" data-toggle="tab"> <i class="fa fa-user-o"></i> Thông tin tài khoản</a></li>
                                <li role="presentation"><a href="#DH"  role="tab" data-toggle="tab"> <i class="fa fa-list"></i>Đơn hàng</a></li>
                                <li role="presentation"><a href="#Seen"  role="tab" data-toggle="tab" ><i class="fa fa-eye"></i>Sản phẩm đã xem</a></li>
                                <li role="presentation"><a href="#Liked" a role="tab" data-toggle="tab"><i class="fa fa-heart-o"></i>Sản phẩm đã thích</a></li>
                                <li role="presentation"><a href="#MuaSau"  role="tab" data-toggle="tab"><i class="fa fa-archive"></i>Sản phẩm mua sau</a></li>
                                <li role="presentation"><a href="#DanhGia"  role="tab" data-toggle="tab"><i class="fa fa-star-o"></i>Đánh giá của tôi</a></li>
                                <li role="presentation"><a href="#Commnet"  role="tab" data-toggle="tab"><i class="fa fa-comment-o"></i>Bình luận của tôi</a></li>
                                <li role="presentation"><a href="#Change"  role="tab" data-toggle="tab"><i class="fa fa-lock"></i>Thay đổi mật khẩu</a></li>
                                <li role="presentation"><a href="#Out"  role="tab" data-toggle="tab"><i class="fa fa-power-off"></i>Đăng xuất tài khoản</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="Profile-Main col-md-9">
                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane active" id="Profile">
                                
                                <h3>Thông tin tài khoản</h3>
                                <hr>
                                <div class="item-in4">
                                    <span>Họ tên</span>
                                    <input type="text" value="<?php echo $userAll[0]['fullname'] ?>" placeholder="">
                                </div>
                                <div class="item-in4">
                                    <span>Số điện thoại</span>
                                    <input type="tel" id="phone" name="phone" value="<?php echo $userAll[0]['phonenumber'] ?>" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required>
                                </div>
                                <div class="item-in4">
                                    <span>Email</span>
                                    <input type="email" name="" id="" value="<?php echo $userAll[0]['email'] ?>">
                                </div>
                                <div class="item-in4">
                                    <span>Giới tính</span>
                                    <?php
                                        if($userAll[0]['gender']=='Nam'){

                                            echo '<label for="Nam">';
                                            echo '    <input type="radio" checked id="Nam" name="GioiTinh">';
                                            echo '    <span>Nam</span>';
                                            echo '</label>';
                                            echo '<label for="Nu">';
                                            echo '    <input type="radio" id="Nu" name="GioiTinh">';
                                            echo '    <span>Nữ</span>';
                                            echo '</label>';
                                        }
                                        else {
                                            echo '<label for="Nam">';
                                            echo '    <input type="radio"  id="Nam" name="GioiTinh">';
                                            echo '    <span>Nam</span>';
                                            echo '</label>';
                                            echo '<label for="Nu">';
                                            echo '    <input type="radio" checked id="Nu" name="GioiTinh">';
                                            echo '    <span>Nữ</span>';
                                            echo '</label>';
                                        }
                                    ?>
                                </div>
                                <div class="item-in4">
                                    <span>Địa chỉ</span>
                                    <input type="text" value="<?php echo $userAll[0]['address'] ?>">
                                </div>
                                <div class="item-in4">
                                    <span>Tỉnh / Thành Phố</span>
                                    <select class="select1" name="select">
                                        <option selected="selected">Thành phố </option>
                                        <option>Hồ Chí Minh</option>
                                        <option>Hà Nội</option>
                                        <option>An giang</option>
                                        <option>Bà rịa - Vũng tàu</option>
                                        <option>Bắc Ninh</option>
                                        <option>Bắc Giang</option>
                                        <option>Bình Dương</option>
                                        <option>Bình Phước</option>
                                        <option>Bình Định</option>
                                        <option>Bình Thuận</option>
                                        <option>Bình Thuận</option>
                                    </select>
                                </div>
                                <div class="item-in4">
                                    <span>Quận / huyện</span>
                                    <select class="select1" name="select" >
                                        <option selected="selected">Quận huyện </option>
                                        <option>Quận 1</option>
                                        <option>Quận 2</option>
                                        <option>Quận 3</option>
                                        <option>Quận 4</option>
                                        <option>Quận 5</option>
                                        <option>Quận 6</option>
                                        <option>Quận 7</option>
                                        <option>Quận 8</option>
                                        <option>Quận 9</option>
                                        <option>Quận 10</option>
                                        <option>Quận 11</option>
                                        <option>Quận 12</option>
                                        <option>Quận Thủ đức</option>
                                        <option>Quận Tân Phú</option>
                                        <option>Quận Tân Bình</option>
                                        <option>Quận Phú Thuận</option>
                                        <option>Quận Phú Thuận</option>
                                        <option>Quận Gò Vấp</option>
                                        <option>Quận Bình Thạnh</option>
                                        <option>Huyện Bình Chánh</option>
                                        <option>Huyện Nhà Bè</option>
                                        <option>Huyện Hóc Môn</option>
                                    </select>
                                </div>
                                <div class="item-in4">
                                    <span></span>
                                    <input type="submit" value="Cập nhật">
                                </div>
                                
                            </div>
                            <div role="tabpanel" class="tab-pane" id="DH">
                                <h3>Đơn hàng của tôi</h3>
                                <hr>
                                <ul class="nav-tabs nav navDH" role="tablist">
                                    <li role="presentation" class="active"><a href="#All" role="tab" data-toggle="tab">Tất cả</a></li>
                                    <li role="presentation"><a href="#Reply"  role="tab" data-toggle="tab">Chờ xác nhận</a></li>
                                    <li role="presentation"><a href="#Replied"  role="tab" data-toggle="tab">Chờ lấy hàng</a></li>
                                    <li role="presentation"><a href="#GH" a role="tab" data-toggle="tab">Đang giao</a></li>
                                    <li role="presentation"><a href="#DaGiao"  role="tab" data-toggle="tab">Đã giao</a></li>
                                    <li role="presentation"><a href="#Ca"  role="tab" data-toggle="tab">Đã hủy</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="All">
                                        <div class="DonHang">
                                            <div class="ImgGioHang">
                                                <img src="/img/tk-shopping-img.png" alt="">
                                                <span>Bạn chưa có đơn hàng nào</span>
                                                <input type="button" value="Tiếp tục mua sắm" onclick="window.location.href = '/Index.html';">
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane " id="Reply">
                                        <div class="DonHang">
                                            <div class="ImgGioHang">
                                                <img src="/img/tk-shopping-img.png" alt="">
                                                <span>Bạn chưa có đơn hàng nào</span>
                                                <input type="button" value="Tiếp tục mua sắm" onclick="window.location.href = '/Index.html';">
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane " id="Replied">
                                        <div class="DonHang">
                                            <div class="ImgGioHang">
                                                <img src="/img/tk-shopping-img.png" alt="">
                                                <span>Bạn chưa có đơn hàng nào</span>
                                                <input type="button" value="Tiếp tục mua sắm" onclick="window.location.href = '/Index.html';">
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane " id="GH">
                                        <div class="DonHang">
                                            <div class="ImgGioHang">
                                                <img src="/img/tk-shopping-img.png" alt="">
                                                <span>Bạn chưa có đơn hàng nào</span>
                                                <input type="button" value="Tiếp tục mua sắm" onclick="window.location.href = '/Index.html';">
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane " id="DaGiao">
                                        <div class="DonHang">
                                            <div class="ImgGioHang">
                                                <img src="/img/tk-shopping-img.png" alt="">
                                                <span>Bạn chưa có đơn hàng nào</span>
                                                <input type="button" value="Tiếp tục mua sắm" onclick="window.location.href = '/Index.html';">
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane " id="Ca">
                                        <div class="DonHang">
                                            <div class="ImgGioHang">
                                                <img src="/img/tk-shopping-img.png" alt="">
                                                <span>Bạn chưa có đơn hàng nào</span>
                                                <input type="button" value="Tiếp tục mua sắm" onclick="window.location.href = '/Index.html';">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="Seen"">
                                
                            </div>
                            <div role="tabpanel" class="tab-pane " id="Liked">
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
                                                echo '    <td>'.$key++.'</td>';
                                                echo '    <td>'.$item['car_name'].'</td>';
                                                echo '    <td ><img src="'.$item['car_img'].'" width="200" height="100" alt=""></td>';
                                                echo '    <td>'.$item['price'].'.000đ</td>';
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
                                        <input type="password" class="pass" name="passnow" >
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
