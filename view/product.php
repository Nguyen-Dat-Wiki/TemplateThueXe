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
    <div class="page-heading about-heading header-text"
        style="background-image: url(../assets/img/banner_product.png);">
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
                        if (isset($_GET["page"] )) 
                        {
                        $page  = $_GET["page"]; 
                        } 
                        else 
                        {
                            $page=1; 
                        }; 
                        include "../utils/MySQLUtils.php";
                        $mySQLCon = new MySQLUtils();
                        $mySQLCon->connect();
                        $limit = 9; 
                        $sql2 = "SELECT COUNT(*) as Tongxe FROM car"; 
                        $retval1 = $mySQLCon->getAllData($sql2);

                        $total_pages = ceil($retval1[0]['Tongxe'] / $limit);  
                         
                        if ($page>$total_pages) {
                            echo '<b id="warning"></b>';
                            header('Location: ../view/404.php');
                        }
                        $record_index= ($page-1) * $limit;     
                        $sql = "SELECT * from car,car_detail where car.id = car_detail.car_id LIMIT $record_index, $limit";
                        $select = $mySQLCon->getAllData($sql);
                        foreach ($select as $row) {
                            if($row["state"] == '0'){
                                echo '  <div class="card col-md-4 ">';
                                echo '      <div class="product-item">';
                                echo '          <button class="fa fa-heart likeHeart"></button>';
                                echo '          <a href="../controller/usercontroller.php?action=detail&id='.$row["id"].'" ><img class="img-product" src="'.$row["car_img"].'" alt="..."></a>';
                                echo '          <div class="card-top">';
                                echo '              <h3 class="card-title" style="text-align: center;"><a href=../controller/usercontroller.php?action=detail&'.$row["id"].' style="color: black;">'.$row["car_name"].'</a></h3>';
                                echo '          </div>';
                                echo '          <h6 class="card-user"><small>Từ </small> <span>' . $row["price"].'.000 </span></h6>';
                                echo '          <p class="card-detail">'.$row["description"].'</p>';
                                echo '          <div class="book-car">';
                                echo '          <small>
                                                    <strong title="passegengers"><i class="fa fa-user"></i> '.$row["seat"].'</strong>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                                                </small>
                                                <span>
                                                    <a href="../controller/usercontroller.php?action=detail&id='.$row["id"].'" >Chi tiết</a>
                                                </span>';
                                echo '                </div>';
                                echo '    </div>';
                                echo '</div>';
                            }
                        }
                        $mySQLCon->disconnect();
                    ?>

                </div>

                <div class="col-md-12">
                    <?php
                        $temp= $total_pages/2;
                        $temp = (int)$temp;
                        function tangint($temp1)
                        {
                            if($temp1==0){
                                return 0;
                            }else{
                                return $temp1--;
                            }
                        }
                        for ($i=1; $i<=$total_pages; $i++) {  
                            if ($page==1) {
                                echo '<ul class="pagination">';
                                for ($i=1; $i<=$total_pages; $i++) {  
                                    if($i == 1){
                                        echo '<li><a class="button active" href="product.php?page='.$i.'">'.$i.'</a></li>';
                                    }
                                    else if ($i<=5) {
                                        echo '<li><a class="button" href="product.php?page='.$i.'">'.$i.'</a></li>';
                                    }
                                    else if($i = $total_pages){
                                        echo '<li><a class="button" href="product.php?page='.($page+1).'">...</a></li>';
                                    }
                                };  
                                
                                echo '<li><a href="product.php?page='.($page+1).'" class="button">next</a></li>';
                                echo '</ul>'; 
                            }
                            else {
                                echo '<ul class="pagination">';
                                echo '<li><a href="product.php?page='.($page-1).'" class="button">Previous</a></li>'; 
                                for ($i=$page-2; $i<=$total_pages; $i++) {  
                                    if($i == 0){}
                                    else if ($i<=$total_pages-($temp++ - $page)) {
                                        if ($i == $page) {
                                            echo '<li><a class="button active" href="product.php?page='.$i.'">'.$i.'</a></li>';
                                        }else {
                                            echo '<li><a class="button" href="product.php?page='.$i.'">'.$i.'</a></li>';
                                        }
                                    }
                                    else if($i = $total_pages){
                                        echo '<li><a class="button" href="product.php?page='.($page+1).'">...</a></li>';
                                    }
                                    
                                };  
                                
                                echo '<li><a href="product.php?page='.($page+1).'" class="button">NEXT</a></li>';
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form">
                        <form action="#" id="contact">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <small class="text-muted ml-2">Ngày nhận xe</small>
                                        <?php
                                            $time = time();
                                            $time += 86400;
                                            echo '<input type="datetime-local"  value="'.date("Y-m-d",$time).'T07:00" class="form-control" placeholder="Return date/time" required="">';
                                        ?>
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset>
                                        <small class="text-muted ml-2">Ngày trả xe</small>
                                        <?php
                                            echo '<input type="datetime-local"  value="'.date("Y-m-d",$time).'T19:30" class="form-control" placeholder="Return date/time" required="">';
                                        ?>

                                    </fieldset>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Họ tên" required="">

                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Email" required="">
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Số điện thoại" required="">
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Book Now</button>
                </div>
            </div>
        </div>
    </div>


    <?php
    include '../layouts/js.php';
    ?>
</body>

</html>