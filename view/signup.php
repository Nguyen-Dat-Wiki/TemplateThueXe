<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/boostrap.min2.css">
    <link rel="stylesheet" href="../assets/libs/css/signup.css">
    <link rel="stylesheet" href="../assets/libs/css/product.css">

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            justify-content: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>
    <!-- login page  -->
    <div class="splash-container" id="login">
        <div class="card ">
            <div class="card-header text-center"><a href="../view/Index.php"><img class="logo-img" src="../assets/img/logo.png" alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form action="../controller/usercontroller.php" method="POST" id="login_form" enctype="multipart/form-data">
                    <div class="form-group">
                        <input class="form-control form-control-lg"  name="username_login" type="text" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg"  name="password_login" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" name="useraction" value="login" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link" id ="linkCreateAccount">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link" id="forget">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
    <!-- đăng ký  -->
    <div class="splash-container form--hidden" id ="createAccount">
        <div class="card ">
            <div class="card-header text-center"><a href="../view/Index.php"><img class="logo-img" src="../assets/img/logo.png" alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form action="../controller/usercontroller.php" method="POST" id="create_form" enctype="multipart/form-data"> 
                    <div class="form-group">
                        <input class="form-control form-control-lg"  name="username_create" type="text" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg"  name="email_create" type="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" " name="password_create" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="Confirm_password" type="password" placeholder="Confirm Password">
                    </div>
                    
                    <button type="submit" name="useraction" value="create" class="btn btn-primary btn-lg btn-block">Sign up</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link" id="linkLogin">Already an account?</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <?php
        include '../layouts/js.php';
    ?>
    <script src="../assets/libs/js/login.js"></script>

</body>
 
</html>