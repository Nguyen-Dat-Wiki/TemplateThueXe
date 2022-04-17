<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include '../layouts/header.php';
    ?>
    <title>Trang thông tin về dịch vụ thuê xe</title>
</head>

<body>


    <!-- Header -->
    <?php

        include '../layouts/menu.php';
    ?>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(../assets/img/banner_blog.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2>Blog</h2>
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
                        <a href="../view/blog.php">Blog</a>
                    </li>
                </ul>
            </div>
            
            <hr>
        </div>
    </section>
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <?php
                            $dirname = "../assets/img/";
                            $images = glob($dirname."blog*.jpg");
                        ?>
                        <div class="col-md-6">
                            <div class="service-item">
                                <a href="../view/404.php" class="services-item-image"><img src="<?php echo $images[0]  ?>" class="img-fluid" alt=""></a>

                                <div class="down-content">
                                    <h4><a href="../view/404.php">Top xe bán chạy nhất tháng 3/2022: VinFast Fadil trở lại cuộc đua, lên thẳng top 1</a></h4>

                                    <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <a href="../view/404.php" class="services-item-image"><img src="<?php echo $images[1]  ?>" class="img-fluid" alt=""></a>

                                <div class="down-content">
                                    <h4><a href="../view/404.php">Giải thưởng “Xe của năm 2022” gọi tên Toyota Camry</a></h4>

                                    <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <a href="../view/404.php" class="services-item-image"><img src="<?php echo $images[2]  ?>" class="img-fluid" alt=""></a>

                                <div class="down-content">
                                    <h4><a href="../view/404.php">Điểm danh những mẫu ô tô giá rẻ vừa ra mắt khách hàng Việt</a></h4>

                                    <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="service-item">
                                <a href="../view/404.php" class="services-item-image"><img src="<?php echo $images[3]  ?>" class="img-fluid" alt=""></a>

                                <div class="down-content">
                                    <h4><a href="../view/404.php">Đánh giá xe Toyota Veloz 2022: Trả thù cho đàn anh Innova</a></h4>

                                    <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <a href="../view/404.php" class="services-item-image"><img src="<?php echo $images[4]  ?>" class="img-fluid" alt=""></a>

                                <div class="down-content">
                                    <h4><a href="../view/404.php">Top 10 xe ô tô bán chạy nhất tháng 02/2022: KIA Carnival lần đầu góp mặt</a></h4>

                                    <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <a href="../view/404.php" class="services-item-image"><img src="<?php echo $images[5]  ?>" class="img-fluid" alt=""></a>

                                <div class="down-content">
                                    <h4><a href="../view/404.php">Những mẫu xe gầm cao sẽ ra mắt Việt Nam nửa cuối năm 2022</a></h4>

                                    <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <ul class="pages">
                                <li class="active"><a href="#">1</a></li>
                                <li ><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-form">
                        <div class="form-group">
                            <h5>Blog Search</h5>
                        </div>

                        <div class="row">
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                            </div>

                            <div class="col-4">
                                <button class="filled-button" type="button">Go</button>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>Đánh giá và so sánh</h5>
                    </div>

                    <p><a href="../view/404.php">So sánh Toyota Veloz Cross và Suzuki XL7: Giá rẻ có giúp XL7 đấu doanh số với Veloz Cross?</a></p>
                    <p><a href="../view/404.php">Toyota Sienta 2022 ra mắt Thái Lan: MPV cỡ nhỏ có thiết kế khác lạ</a></p>
                    <p><a href="../view/404.php">Đánh giá xe Toyota Veloz 2022: Trả thù cho đàn anh Innova</a></p>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->


    <!-- Bootstrap core JavaScript -->
    <?php
        include '../layouts/footer.php';
        include '../layouts/js.php';
    ?>
    
</body>

</html>