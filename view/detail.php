<!DOCTYPE html>
<html lang="en">
<?php
if (!isset($_SESSION)) {
    session_start();
}

include "../model/product.php";
$product = new Product();
$resu = $product->selectDetail($_SESSION['car_id']);
?>

<head>

    <?php
    include '../layouts/header.php';
    ?>
    <title>Cho thuê ôtô <?php echo $resu[0]['car_name']   ?></title>

</head>

<body>

    <!-- ***** Preloader Start ***** -->

    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <?php
    include_once '../layouts/menu.php';
    ?>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(../assets/img/banner_detail.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4><?php echo $resu[0]['car_name']  ?></h4>
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
                        <a href="../view/product.php">Sản phẩm</a>
                        <i class="fa fa-chevron-right"></i>
                    </li>
                    <li>
                        <a href="../controller/usercontroller.php?action=detail&id=<?php echo $id ?>"><?php echo $resu[0]['car_name'] ?></a>
                    </li>
                </ul>
            </div>

            <hr>
        </div>
    </section>
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 ">
                    <div class="left-content detail_car">

                        <div class="section mb-3 p-3">
                            <div class="model row">
                                <div class="col-12 col-sm-6 Product">
                                    <img class="imgDetail" alt="<?php echo $resu[0]['car_name'] ?>" src="<?php echo $resu[0]['car_img'] ?>" class="img-vehicle-detail">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div>
                                        <h2 class="tit3"><?php echo $resu[0]['car_name'] ?></h2>
                                        <ul>
                                            <li>Đánh giá</li>
                                            <li class="star">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            </li>
                                        </ul>
                                        <div class="infoDetail row">
                                            <div class="col-6">
                                                <div class="vehicle-spec mb-2"><i class="fa-solid fa-gas-pump"></i><span class="ml-2"><?php echo $resu[0]['engine'] ?></span>
                                                </div>
                                                <div class="vehicle-spec mb-2"><i class="fa-solid fa-gas-pump"></i><span class="ml-2"><?php echo $resu[0]['wattage'] ?></span>
                                                </div>
                                                <div class="vehicle-spec mb-2"><i class="fa-solid fa-steering-wheel"></i><span class="ml-2"><?php echo $resu[0]['gearbox'] ?></span>
                                                </div>
                                                <div class="vehicle-spec mb-2"><i class="fa-solid fa-wrench"></i><span class="ml-2"><?php echo $resu[0]['vehical_size'] ?>mm</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="vehicle-spec mb-2"><i class="fa-solid fa-seat-airline"></i><span class="ml-2"><?php echo $resu[0]['seat'] ?> chỗ</span>
                                                </div>
                                                <div class="vehicle-spec mb-2"><i class="fa-solid fa-car"></i><span class="ml-2"><?php echo $resu[0]['brand'] ?></span>
                                                </div>
                                                <div class="vehicle-spec mb-2"><i class="fa-solid fa-car-side"></i><span class="ml-2">6.3L/100km</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-clickover col-9">
                                        <?php
                                        $gia = $resu[0]['price'];
                                        if (isset($_SESSION['account_id'])) {
                                            $account_id = $_SESSION["account_id"];
                                            $arr = $product->likeCar($account_id, $_SESSION['car_id']);
                                            if (count($arr) == 1) {
                                                echo ' <button class="btn-like liked" type="button"><a  href="../controller/usercontroller.php?action=like&account_id=' . $account_id . '&car=' . $resu[0]['id'] . '&like=1"><i class="fa-solid fa-thumbs-up"></i>&nbsp;Like</a></button>';
                                                echo ' <button class="btn-like" type="button"><a href="#"><i class="fa-solid fa-share"></i>&nbsp;Chia sẻ</a></button>';
                                            } else {
                                                echo ' <button class="btn-like like" type="button"><a href="../controller/usercontroller.php?action=like&account_id=' . $account_id . '&car=' . $resu[0]['id'] . '&like=0"><i class="fa-solid fa-thumbs-up"></i>&nbsp;Like</a></button>';
                                                echo ' <button class="btn-like" type="button"><a href="#"><i class="fa-solid fa-share"></i>&nbsp;Chia sẻ</a></button>';
                                            }
                                        } else {
                                            echo ' <button class="btn-like like" id="like_aleart" type="button"><a href=""><i class="fa-solid fa-thumbs-up"></i>&nbsp;Like</a></button>';
                                            echo ' <button class="btn-like" type="button"><a href="#"><i class="fa-solid fa-share"></i>&nbsp;Chia sẻ</a></button>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-xlg">
                                <div class="col-md-12">
                                    <div class="mt-5">
                                        <h5>ĐỊA CHỈ</h5>
                                        <p class="mt-2">Quận Bình Tân, TPHCM</p>
                                    </div>
                                    <?php include '../layouts/info.php'; ?>
                                    <div class="section p-3 mt-2">
                                        <div class="title">Dịch vụ tùy chọn</div>
                                        <form class="formGia" action="" method="POST">
                                            <div class="addon">
                                                <div class="addon-row"><label><input type="checkbox" class="boxGia" name="package1" value="insurance" checked="">&nbsp;Bảo hiểm
                                                        xe</label>
                                                    <i class="fa-solid fa-circle-question" data-toggle="modal" data-target="#exampleModal"></i>
                                                    <div class="float-right fee">+0₫</div>
                                                </div>
                                                <div class="addon-row">
                                                    <label>
                                                        <input type="checkbox" <?php echo isset($_POST["package2"]) ? 'checked' : '' ?> class="boxGia" name="package2" value="facilitation">
                                                        <span>&nbsp;Miễn giảm thủ tục&nbsp;</span>
                                                    </label>
                                                    <i class="fa-solid fa-circle-question" data-toggle="modal" data-target="#exampleModal2"></i>
                                                    <div class="form-check">
                                                        <?php
                                                        if (isset($_POST["facilitation"])) {
                                                            switch ($_POST["facilitation"]) {
                                                                case '120':
                                                                    $gia2 = 120;
                                                                    echo '<div>';
                                                                    echo '<label class="mb-1 form-check-label">';
                                                                    echo '  <input class="radioInput" checked type="radio"name="facilitation" value="120">';
                                                                    echo '  <span class="ml-2">Miễn thủ tục và cọc</span>';
                                                                    echo '</label>';
                                                                    echo ' <div class="float-right fee">+120.000₫</div>';
                                                                    echo '</div>';

                                                                    echo '<div>';
                                                                    echo '<label class="mb-1 form-check-label">';
                                                                    echo '  <input class="radioInput" type="radio"name="facilitation" value="90">';
                                                                    echo '  <span class="ml-2">Giảm thủ tục và cọc</span>';
                                                                    echo '</label>';
                                                                    echo '<div class="float-right fee">+90.000₫</div>';
                                                                    echo '</div>';

                                                                    echo '<div>';
                                                                    echo '<label class="mb-1 form-check-label">';
                                                                    echo '  <input  class="radioInput" type="radio"name="facilitation" value="60">';
                                                                    echo '  <span class="ml-2">Giảm tiền và cọc</span>';
                                                                    echo '</label>';
                                                                    echo '<div class="float-right fee">+60.000₫</div>';
                                                                    echo '</div>';

                                                                    break;
                                                                case '90':
                                                                    $gia2 = 90;

                                                                    echo '<div>';
                                                                    echo '<label class="mb-1 form-check-label">';
                                                                    echo '  <input class="radioInput"  type="radio"name="facilitation" value="120">';
                                                                    echo '  <span class="ml-2">Miễn thủ tục và cọc</span>';
                                                                    echo '</label>';
                                                                    echo ' <div class="float-right fee">+120.000₫</div>';
                                                                    echo '</div>';

                                                                    echo '<div>';
                                                                    echo '<label class="mb-1 form-check-label">';
                                                                    echo '  <input class="radioInput" checked type="radio"name="facilitation" value="90">';
                                                                    echo '  <span class="ml-2">Giảm thủ tục và cọc</span>';
                                                                    echo '</label>';
                                                                    echo '<div class="float-right fee">+90.000₫</div>';
                                                                    echo '</div>';

                                                                    echo '<div>';
                                                                    echo '<label class="mb-1 form-check-label">';
                                                                    echo '  <input  class="radioInput" type="radio"name="facilitation" value="60">';
                                                                    echo '  <span class="ml-2">Giảm tiền và cọc</span>';
                                                                    echo '</label>';
                                                                    echo '<div class="float-right fee">+60.000₫</div>';
                                                                    echo '</div>';
                                                                    break;
                                                                case '60':
                                                                    $gia2 = 60;

                                                                    echo '<div>';
                                                                    echo '<label class="mb-1 form-check-label">';
                                                                    echo '  <input class="radioInput"  type="radio"name="facilitation" value="120">';
                                                                    echo '  <span class="ml-2">Miễn thủ tục và cọc</span>';
                                                                    echo '</label>';
                                                                    echo ' <div class="float-right fee">+120.000₫</div>';
                                                                    echo '</div>';

                                                                    echo '<div>';
                                                                    echo '<label class="mb-1 form-check-label">';
                                                                    echo '  <input class="radioInput"  type="radio"name="facilitation" value="90">';
                                                                    echo '  <span class="ml-2">Giảm thủ tục và cọc</span>';
                                                                    echo '</label>';
                                                                    echo '<div class="float-right fee">+90.000₫</div>';
                                                                    echo '</div>';

                                                                    echo '<div>';
                                                                    echo '<label class="mb-1 form-check-label">';
                                                                    echo '  <input  class="radioInput" checked type="radio"name="facilitation" value="60">';
                                                                    echo '  <span class="ml-2">Giảm tiền cọc</span>';
                                                                    echo '</label>';
                                                                    echo '<div class="float-right fee">+60.000₫</div>';
                                                                    echo '</div>';
                                                                    break;
                                                                default:
                                                                    break;
                                                            }
                                                        } else {
                                                            echo '<div>';
                                                            echo '<label class="mb-1 form-check-label">';
                                                            echo '  <input class="radioInput" disabled  type="radio"name="facilitation" value="120">';
                                                            echo '  <span class="ml-2">Miễn thủ tục và cọc</span>';
                                                            echo '</label>';
                                                            echo ' <div class="float-right fee">+120.000₫</div>';
                                                            echo '</div>';

                                                            echo '<div>';
                                                            echo '<label class="mb-1 form-check-label">';
                                                            echo '  <input class="radioInput" disabled type="radio"name="facilitation" value="90">';
                                                            echo '  <span class="ml-2">Giảm thủ tục và cọc</span>';
                                                            echo '</label>';
                                                            echo '<div class="float-right fee">+90.000₫</div>';
                                                            echo '</div>';

                                                            echo '<div>';
                                                            echo '<label class="mb-1 form-check-label">';
                                                            echo '  <input  class="radioInput" disabled type="radio"name="facilitation" value="60">';
                                                            echo '  <span class="ml-2">Giảm tiền và cọc</span>';
                                                            echo '</label>';
                                                            echo '<div class="float-right fee">+60.000₫</div>';
                                                            echo '</div>';
                                                        }
                                                        $gia2 = 0;
                                                        ?>
                                                    </div>
                                                    <div class="addon-row">
                                                        <label>
                                                            <input type="checkbox" <?php echo isset($_POST["package3"]) ? 'checked' : '' ?> class="boxGia" name="package3" value="500">
                                                            <span>&nbsp;Thuê thêm tài xế</span>
                                                        </label>
                                                        <i class="fa-solid fa-circle-question" data-toggle="modal" data-target="#exampleModal3"></i>
                                                        <div class="float-right fee">+500.000₫</div>
                                                    </div>
                                                </div>
                                                <input type="submit" hidden value="" class="submitGia" name="submitDV">
                                        </form>
                                    </div>
                                    <div class="section mt-3 p-2">
                                        <div class="title">CHI TIẾT GIÁ</div>
                                        <div class="price-row mt-1">
                                            <span class="price-label">Đơn giá</span>
                                            <<<<<<< HEAD <span class="price-value"><?php echo $resu[0]['price'] ?>.000&nbsp;đ</span>
                                                =======
                                                <span class="price-value"><?php echo $gia ?>.000&nbsp;đ</span>
                                                >>>>>>> 3fee3d45eec1961aa05f07898e571ddbe3f2526d
                                        </div>
                                        <div class="price-row mt-1 text-muted"><span class="price-label">Thời gian
                                                thuê</span><span class="price-value">×1 ngày</span></div>
                                        <div class="price-detail">
                                            <div class="price-row mt-1"><span class="price-label">Giá cơ bản</span><span <<<<<<< HEAD class="price-value"><?php echo $resu[0]['price'] ?>.000&nbsp;đ</span></div>
                                            =======
                                            class="price-value"><?php echo $gia ?>.000&nbsp;đ</span>
                                        </div>
                                        >>>>>>> 3fee3d45eec1961aa05f07898e571ddbe3f2526d
                                    </div>
                                    <div class="mt-4">
                                        <div class="mb-2"><strong>Dịch vụ tùy chọn</strong></div>
                                        <div class="form-control-static pt-none " id="dichvu1">
                                            <?php
                                            if (isset($_POST["facilitation"])) {
                                                $gia2 = $_POST["facilitation"];
                                                switch ($gia2) {
                                                    case '120':
                                                        echo '<span>Miễn thủ tục và cọc</span>';
                                                        echo '<span>120.000đ</span>';
                                                        break;
                                                    case '90':
                                                        echo '<span>Giảm thủ tục và cọc</span>';
                                                        echo '<span>90.000đ</span>';
                                                        break;
                                                    case '60':
                                                        echo '<span>Miễn tiền cọc</span>';
                                                        echo '<span>60.000đ</span>';
                                                        break;
                                                    default:
                                                        break;
                                                }
                                            } else $gia2 = 0;
                                            ?>
                                        </div>
                                        <div class="form-control-static pt-none " id="dichvu2">
                                            <?php
                                            if (isset($_POST["package3"])) {
                                                $gia3 = $_POST["package3"];
                                                if ($gia3 = 500) {
                                                    echo '<span>Thuê thêm tài xế</span>';
                                                    echo '<span>500.000&nbsp;đ</span>';
                                                }
                                            } else $gia3 = 0;
                                            ?>
                                        </div>
                                    </div>
                                    <form action="../controller/usercontroller.php" method="POST">
                                        <hr class="mt-4">
                                        <div class="price-row mt-1">
                                            <span class="price-label">Tổng</span>
                                            <<<<<<< HEAD <span class="price-value"><?php
                                                                                    $tong =  $resu[0]['price'] + $gia2 + $gia3;
                                                                                    echo '' . number_format($tong) . '.000'; ?>&nbsp;đ</span>
                                                =======
                                                <span class="price-value"><?php
                                                                            $tong =  $gia + $gia2 + $gia3;
                                                                            $format_number_1 = number_format($tong);
                                                                            echo '' . $format_number_1 . '.000'; ?>&nbsp;đ</span>
                                                >>>>>>> 3fee3d45eec1961aa05f07898e571ddbe3f2526d
                                                <input class="price-value" hidden type="text" id="valuemoney" name="moneycart" value="<?php echo  $format_number_1; ?>">
                                                <input type="text" hidden name="car_id" value="<?php echo $_SESSION['car_id'] ?>">
                                                <input type="text" hidden name="account_id" value="<?php echo (isset($_SESSION['account_id'])) ? $_SESSION['account_id'] : ""; ?>">
                                        </div>
                                        <div class="section p-3 mt-3">
                                            <button type="submit" id="<?php echo (isset($_SESSION['account_id']) ? 'booked' : 'book_aleart') ?>" name="useraction" class="mt-2 btn btn-primary btn-block" value="book">Đặt xe</button>
                                            <a class="btn btn-light btn-block" href="../view/product.php">Quay lại</a>
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
    </div>

    <?php
    include '../layouts/footer.php';
    include '../model/modal.php';
    include '../layouts/js.php';
    ?>
    <script src="../assets/libs/js/test.js"></script>

</body>

</html>