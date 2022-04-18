<!-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
 -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="../controller/usercontroller.php">
                <h2>Car Rental <em>Website</em></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="../controller/usercontroller.php">Trang chủ
                        </a>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="../view/offers.php">Giới thiệu</a></li>
                    <li class="nav-item"><a class="nav-link" href="../view/product.php">Sản phẩm</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Thông tin</a>

                        <div class="dropdown-menu"">
                            <a class=" dropdown-item" href="../view/blog.php">Tin mới</a>
                            <a class="dropdown-item" href="../view/sale.php">Khuyến mãi</a>
                            <a class="dropdown-item" href="../view/testimonials.php">Testimonials</a>
                            <a class="dropdown-item" href="../view/terms.php">Terms</a>
                        </div>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="../view/connact.php">Liên hệ</a></li>
                    <li class="nav-item dropdown">
                        <?php
                            if(!isset($_SESSION)){
                                session_start();
                            }
                            if (isset($_SESSION["is_login"])) {
                                echo '    <a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">'.$_SESSION["username_login"].'</a>';
                                echo '    <div class="dropdown-menu"">';
                                echo '        <a class="dropdown-item" href="../view/setting.php">Cài đặt</a>';
                                echo '        <a class="dropdown-item" href="../controller/usercontroller.php?action=logout">Logout</a>';
                                echo '    </div>';
                                echo '</li>';
                                echo '';
                            }else{
                                echo '<a class="nav-link nav-user-img" href="../view/signup.php">SignUp</a>';
                            }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section class="hotline-phone-ring-wrap">
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle"> <a href="tel:0938103176" class="pps-btn-img">
                <i style="color:#fff;font-size:25px;" class="fa fa-mobile"></i> </a>
        </div>
    </div>
</section>