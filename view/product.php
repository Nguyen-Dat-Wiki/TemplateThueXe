<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include '../layouts/header.php';
    ?>
    <title>Cho thuê ôtô tự lái tại TP.Hồ Chí Minh</title>

</head>

<body>

    <!-- ***** Preloader Start ***** -->

    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <?php
    include_once '../layouts/menu.php';
    ?>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(../assets/img/banner_product.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4> Sản phẩm </h4>
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
                    </li>
                </ul>
            </div>

            <hr>
        </div>
    </section>
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="cards col-md-12">
                    <!-- select data  -->
                    <?php

                    include "../model/product.php";
                    $product = new Product();
                    $retval1 = $product->countCar();
                    $limit = 9;
                    $total_pages = ceil($retval1[0]['Tongxe'] / $limit);
                    $page = (isset($_GET["page"])) ? $_GET['page'] : 1;
                    if ($page > $total_pages) {
                        echo '<b id="warning"></b>';
                        header('Location: ../view/404.php');
                    }
                    $record_index = ($page - 1) * $limit;
                    $select = $product->selectDataLimitPage($record_index, $limit);
                    foreach ($select as $row) {
                        if ($row["state"] == '0') {
                            echo '  <div class="card col-md-4 ">';
                            echo '      <div class="product-item">';
                            echo '          <button class="fa fa-heart likeHeart"></button>';
                            echo '          <a href="../controller/usercontroller.php?action=detail&id=' . $row["id"] . '" ><img class="img-product" src="' . $row["car_img"] . '" alt="..."></a>';
                            echo '          <div class="card-top">';
                            echo '              <h3 class="card-title" style="text-align: center;"><a href=../controller/usercontroller.php?action=detail&' . $row["id"] . ' style="color: black;">' . $row["car_name"] . '</a></h3>';
                            echo '          </div>';
                            echo '          <h6 class="card-user"><small>Từ </small> <span>' . $row["price"] . '.000 </span></h6>';
                            echo '          <p class="card-detail">' . $row["description"] . '</p>';
                            echo '          <div class="book-car">';
                            echo '          <small>
                                                    <strong title="passegengers"><i class="fa fa-user"></i> ' . $row["seat"] . '</strong>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                                                </small>
                                                <span>
                                                    <a href="../controller/usercontroller.php?action=detail&id=' . $row["id"] . '" >Chi tiết</a>
                                                </span>';
                            echo '                </div>';
                            echo '    </div>';
                            echo '</div>';
                        }
                    }
                    ?>

                </div>

                <div class="col-md-12">
                    <?php
                    $temp = (int)$total_pages / 2;
                    for ($i = 1; $i <= $total_pages; $i++) {
                        if ($page == 1) {
                            echo '<ul class="pagination">';
                            for ($i = 1; $i <= $total_pages; $i++) {
                                if ($i == 1) {
                                    echo '<li><a class="button active" href="product.php?page=' . $i . '">' . $i . '</a></li>';
                                } else if ($i <= 5) {
                                    echo '<li><a class="button" href="product.php?page=' . $i . '">' . $i . '</a></li>';
                                } else if ($i = $total_pages) {
                                    echo '<li><a class="button" href="product.php?page=' . ($page + 1) . '">...</a></li>';
                                }
                            };

                            echo '<li><a href="product.php?page=' . ($page + 1) . '" class="button">next</a></li>';
                            echo '</ul>';
                        } else {
                            echo '<ul class="pagination">';
                            echo '<li><a href="product.php?page=' . ($page - 1) . '" class="button">Previous</a></li>';
                            for ($i = $page - 2; $i <= $total_pages; $i++) {
                                if ($i == 0) {
                                } else if ($i <= $total_pages - ($temp++ - $page)) {
                                    if ($i == $page) {
                                        echo '<li><a class="button active" href="product.php?page=' . $i . '">' . $i . '</a></li>';
                                    } else {
                                        echo '<li><a class="button" href="product.php?page=' . $i . '">' . $i . '</a></li>';
                                    }
                                } else if ($i = $total_pages) {
                                    echo '<li><a class="button" href="product.php?page=' . ($page + 1) . '">...</a></li>';
                                }
                            };

                            echo '<li><a href="product.php?page=' . ($page + 1) . '" class="button">NEXT</a></li>';
                            echo '</ul>';
                        }
                    }

                    ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php
    include '../layouts/footer.php';
    ?>
    <?php
    include '../layouts/js.php';
    ?>
</body>

</html>