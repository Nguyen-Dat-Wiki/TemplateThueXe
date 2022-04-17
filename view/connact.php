<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../layouts/header.php';  ?>
    <title>Liên hệ chúng tôi</title>
</head>

<body>



    <!-- Header -->
    <?php
        include '../layouts/menu.php';
    ?>

    <!-- Page Content -->
    <div class="page-heading contact-heading header-text"
        style="background-image: url(../assets/img/banner_connact.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>Liên hệ</h4>
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
                        <a href="../view/connact.php">Liên hệ</a>
                    </li>
                </ul>
            </div>
            
            <hr>
        </div>
    </section>

    <div class="find-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Địa chỉ của chúng tôi</h2>
                    </div>
                </div>
                <div class="col-md-7">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5543.3960033461535!2d106.68037913965553!3d10.751977764766485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f01c3de51d1%3A0x8928a2ecd89d398b!2zMjYzRC8yIELhur9uIEJhIMSQw6xuaCwgUGjGsOG7nW5nIDgsIFF14bqtbiA4LCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1649905944435!5m2!1svi!2s"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="left-content">
                        <h4>Về chúng tôi</h4>
                        <p>
                            CarRental là một Startup tiên phong trong việc phát triển nền
                            tảng trực tuyến cho thuê và chia sẻ xe tự lái ở Việt Nam. </p>
                        <p>CarRental giúp khách hàng có nhu cầu thuê xe tự lái (ô tô, xe máy) có thể kết nối với các
                            đơn
                            vị cho thuê xe cũng như cá nhân có xe nhàn rỗi trên khắp cả nước thông qua website hoặc ứng
                            dụng di động. Khách hàng có
                            thể tìm kiếm, so sánh và thuê xe một cách dễ dàng, nhanh chóng.</p>
                        <p>CarRental được ra đời
                            với sứ mệnh mang đến nền tảng công nghệ hiện đại giúp việc thuê và chia sẻ xe một cách
                            Nhanh
                            chóng, An toàn và Tiết kiệm. CarRental hướng tới một cộng đồng cho thuê và chia sẻ phương
                            tiện
                            đi lại một cách văn minh và thân thiện với môi trường.</p>
                        <hr>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="send-message">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Câu hỏi của bạn về chúng tôi</h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <form id="contact" action="../controller/usercontroller.php?action=mail" method="POST">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="Họ tên" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email"
                                            placeholder="E-Mail Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="subject" type="text" class="form-control" id="subject"
                                            placeholder="Chủ đề" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message"
                                            placeholder="Nội dung" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="submit" id="form-submit" class="filled-button" value="Gửi nội dung">
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="../assets/img/focus_team.jpg" class="img-fluid" alt="">

                    <h5 class="text-center" style="margin-top: 15px;">CarRental Team</h5>
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