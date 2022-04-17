<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../layouts/header.php';  ?>
    <title>CAR RENTAL - nền tảng thuê xe</title>
</head>

<body>

    <!-- ***** Preloader Start ***** -->

    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <?php
        include '../layouts/menu.php';
    ?>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text"
        style="background-image: url(../assets/img/offers.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>Về chúng tôi</h4>
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
                        <a href="../view/offers.php">Về chúng tôi</a>
                    </li>
                </ul>
            </div>
            
            <hr>
        </div>
    </section>

    <div class="best-features about-features">
        <div class="container">
            <div class="row">
               
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="https://chungxe.vn/assets/images/about/pexels-photo.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h3>Chúng tôi làm như thế nào?</h3>
                        <hr>
                        <p>Ngay cả những vấn đề phức tạp nhất cũng có một giải pháp phù hợp để giải quyết. Tại Chungxe,
                            chúng tôi không chỉ cho thuê xe, chúng tôi tạo ra những sản phẩm đổi mới sáng tạo trong hệ
                            sinh thái hiện có. Chúng tôi dựa trên công nghệ để cung cấp một giải pháp toàn diện cho vấn
                            đề đi lại bằng cách kết nối khách hàng với các nhà cung cấp dịch vụ cho thuê xe tự lái. Sứ
                            mệnh của chúng tôi tại Chungxe là cung cấp một nền tảng mà khách hàng có thể dễ dàng thuê
                            một chiếc xe như ý trong khi chủ sở hữu xe có thể thu hút khách hàng và tiến hành kinh doanh
                            một cách thuận tiện. Chúng tôi tập trung nỗ lực vào việc đơn giản hóa quá trình thuê xe bằng
                            cách đưa ra công cụ hỗ trợ giao dịch từ việc so sánh giá đến thanh toán trực tuyến, từ bảo
                            hiểm thuê xe đến miễn giảm thủ tục và rất nhiều các tiện ích cho cả khách hàng và các đối
                            tác cung cấp xe.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="team-members">
        <div class="container">
            <div class="row">
                

                <div class="col-md-6">
                    <div class="left-content">
                        <div class="child-right">
                            <h2 class="title-child-about"> Tại sao chúng tôi làm?</h2><hr>
                            <p class="text-why">- Hiện nay, ở Việt Nam chưa có một nền tảng trực tuyến cho thuê và chia
                                sẻ xe máy, ô tô tự lái.</p>
                            <p class="text-why">- Khách thuê xe gặp rất nhiều khó khăn để thuê được một chiếc xe tự lái
                                như ý trong khi cá nhân có xe nhàn rỗi hoặc các đơn vị cho thuê xe tự lái chưa có một
                                công nghệ đủ tốt để quản lý, tối ưu tài sản của mình.</p>
                            <p class="text-why">- Với sự bùng nổ của xu hướng công nghệ 4.0 thì các tiện ích của việc
                                đặt dịch vụ vận chuyển qua kênh online/ mobile cũng như công nghệ chia sẻ xe đang ngày
                                càng phát triển và phổ biến.</p>
                            <p class="text-why">- Chia sẻ phương tiện đang dần trở thành xu hướng chính trên thế giới
                                thay thế cho việc sở hữu xe.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="https://chungxe.vn/assets/images/about/pexels-photo-862734.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <?php
        include_once '../layouts/footer.php';
    ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>


        <script src="../assets/libs/js/Custom.js"></script>
        <script src="../assets/libs/js/Owl.js"></script>
</body>

</html>