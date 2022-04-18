<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once '../layouts/header.php';
    ?>
    <title>CAR RENTAL - nền tảng thuê xe</title>

</head>

<body>

    <!-- ***** Preloader Start ***** -->

    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <?php
    include_once '../layouts/menu.php';

    ?>


    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <?php
            $dirname = "../assets/img/";
            $images = glob($dirname . "banner*.jpg");
            foreach ($images as $image) {
                echo '<div class="banner-item-01" style="background-image: url(' . $image . ');">';
                echo ' <div class="text-content">';
                echo ' </div>';
                echo '</div>';
            }

            ?>

        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Sản phẩm</h2>
                        <a href="../view/product.php">Xem thêm <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="cards col-md-12">
                    <!-- select data  -->
                    <?php
                    include "../model/product.php";
                    $product = new Product();
                    $select = $product->selectDataLimit();
                    foreach ($select as $row) {
                        if ($row["state"] == '0') {
                            echo '<div class="card col-md-4 ">';
                            echo '    <div class="product-item">';
                            echo '        <a href="../controller/usercontroller.php?action=detail&id=' . $row["id"] . '" ><img class="img-product" src="' . $row["car_img"] . '" alt="..."></a>';
                            echo '        <div class="card-top">';
                            echo '            <h3 class="card-title" style="text-align: center;"><a href=../controller/usercontroller.php?action=detail&' . $row["id"] . ' style="color: black;">' . $row["car_name"] . '</a></h3>';
                            echo '        </div>';
                            echo '        <h6 class="card-user"><small>Từ </small> <span>' . $row["price"] . '.000 / ngày </span></h6>';
                            echo '        <p class="card-detail">' . $row["description"] . '</p>';
                            echo '    </div>';
                            echo '</div>';
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>

    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Về chúng tôi</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <p>
                            CarRental là một Startup tiên phong trong việc phát triển nền tảng trực tuyến cho thuê và
                            chia sẻ
                            xe tự lái ở Việt Nam.
                        </p>
                        <p>
                            CarRental giúp khách hàng có nhu cầu thuê xe tự lái (ô tô, xe máy) có thể kết nối với các
                            đơn vị
                            cho thuê xe cũng như cá nhân có xe nhàn rỗi trên khắp cả nước thông qua website hoặc ứng
                            dụng di
                            động. Khách hàng có thể tìm kiếm, so sánh và thuê xe một cách dễ dàng, nhanh chóng.
                        </p>
                        <p>
                            CarRental được ra đời với sứ mệnh mang đến nền tảng công nghệ hiện đại giúp việc thuê và
                            chia sẻ
                            xe một cách Nhanh chóng, An toàn và Tiết kiệm. CarRental hướng tới một cộng đồng cho thuê và
                            chia
                            sẻ phương tiện đi lại một cách văn minh và thân thiện với môi trường.
                        </p>
                        <a href="../view/connact.php" class="filled-button">Read More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="../assets/img/about-us.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services" style="background-image: url(../assets/img/background2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Hướng dẫn đặt xe</h2>

                        <a href="../view/blog.php">read more <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <a href="#" class="services-item-image"><img src="../assets/img/step1.webp" class="img-fluid" alt=""></a>

                        <div class="down-content">
                            <h4>Đặt xe</h4>

                            <p style="margin: 0;"> Nhanh chóng đặt một chiếc xe ưng ý thông qua Website hoặc Ứng dụng
                                của chúng tôi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <a href="#" class="services-item-image"><img src="../assets/img/step2.webp" class="img-fluid" alt=""></a>

                        <div class="down-content">
                            <h4>Nhận xe</h4>

                            <p style="margin: 0;"> Nhận xe tại nhà hoặc các đại lý trong khu vực của chúng tôi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <a href="#" class="services-item-image"><img src="../assets/img/step3.webp" class="img-fluid" alt=""></a>

                        <div class="down-content">
                            <h4>Tận hưởng</h4>
                            <p style="margin: 0;"> Tất cả các phương tiện của chúng tôi đều đạt chuẩn an toàn</p>
                        </div>
                    </div>
                </div>

                <div class="button col-md-12 text-center"><a href="../view/connact.php" class="filled-button">Xem chi
                        tiết</a></div>
            </div>
        </div>
    </div>

    <div class="happy-clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Đối tác</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-clients owl-carousel text-center">
                        <?php
                        $dirname = "../assets/img/";
                        $images = glob($dirname . "hang*.png");
                        echo $image[0];
                        foreach ($images as $image) {
                            echo ' <div class="service-item">';
                            echo '     <img src="' . $image . '" alt="">';
                            echo ' </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- footer -->

    <?php
    include_once '../layouts/footer.php';
    include_once '../layouts/js.php';
    ?>


</body>

</html>