    <?php

    include '../utils/vhvalidate.php';
    include_once '../utils/FileUtils.php';
    include_once '../utils/MySQLUtils.php';
    include_once '../model/User.php';
    include_once '../utils/mail.php';

    class UserController
    {

        public function __construct($action)
        {
            $valid = new VhuValidate();
            $mySQLCon = new MySQLUtils();

            switch ($action) {
                case "login":
                    $username = $_POST["username_login"];
                    $password = $_POST["password_login"];
                    $user = new User("", "", "", "", "", "", "");
                    if ($user->isUser($username, $password)) {
                        $arr_param = array("username" => $username);
                        $userInfo = $user->getUser($arr_param);
                        $_SESSION['account_id'] = $userInfo[0]['id'];
                        header("Location: ../view/index.php");
                    } else {
                        header('Location: ../view/signup.php');
                    }
                    break;
                case "book":
                    $account_id = $_POST["account_id"];
                    $car_id = $_POST['car_id'];
                    $money = $_POST['moneycart'];
                    $mySQLCon->connect();
                    if ($account_id == "") {
                        header('Location: ../view/signup.php');
                    } else {
                        $sql = 'INSERT INTO `order` (`customer_id`) values( :customer_id)';
                        $arr_param = array("customer_id" => $account_id);
                        $mySQLCon->insertData($sql, $arr_param);

                        $sqlID = 'SELECT id from dack_carrent.order where dack_carrent.order.customer_id=' . $account_id . ' order by id DESC LIMIT 1;';
                        $order_id = $mySQLCon->getAllData($sqlID);

                        $sql = "INSERT INTO order_detail(car_id,order_id,total_price) value (:car_id,:order_id,:total_price)";
                        $arr = array("car_id" => $car_id, "order_id" => $order_id[0]['id'], "total_price" => $money);
                        $mySQLCon->insertData($sql, $arr);
                        header('Location: ../view/index.php');
                    }
                    break;
                case "create":
                    $username = $_POST['username_create'];
                    $email = $_POST['email_create'];
                    $fullname = $_POST['name_create'];
                    $phone = $_POST['phone_create'];
                    $address = $_POST['address_create'];
                    $gender = $_POST['gender'];
                    $password = $_POST['password_create'];
                    $Confirm_password = $_POST['Confirm_password'];
                    $user = new User("", "", "", "", "", "", "");
                    if ($user->exitsUser($username)) {
                        include '../view/signup.php';
                        echo "<script type='text/javascript'>alert('Tài khoản bị trùng');</script>";
                    } else if ($user->checkpass($password, $Confirm_password)) {
                        include '../view/signup.php';
                        echo "<script type='text/javascript'>alert('Vui lòng nhập lại mật khẩu');</script>";
                    } else {
                        $mySQLCon->connect();
                        $sql = "INSERT INTO customer (username, email, password,fullname,phonenumber,address,gender) VALUES (:username, :email, :password,:fullname,:phonenumber,:address,:gender)";
                        $arr = array(":username" => $username, ":email" => $email, ":password" => $password, ":fullname" => $fullname, ":phonenumber" => $phone, ":address" => $address, ":gender" => $gender);
                        $mySQLCon->insertData($sql, $arr);
                        if ($valid->checkUserName($username) && $valid->checkUserEmail($email)) {
                            if (!isset($_SESSION)) {
                                session_start();
                            }
                            $_SESSION['is_login'] = true;
                            $_SESSION['username_login'] = $username;
                            $arr_param = array("username" => $username);
                            $user = new User("", "", "", "", "", "", "");
                            $userInfo = $user->getUser($arr_param);
                            $_SESSION['account_id'] = $userInfo[0]['id'];
                            header("Location: ../view/index.php");
                        } else {
                            header("Location: ../view/signup.php");
                        }
                    }
                    break;
                case "detail":
                    $id = $_GET["id"];
                    if (!isset($_SESSION)) {
                        session_start();
                    }
                    $_SESSION["car_id"] = $id;
                    header("Location: ../view/detail.php");
                    break;

                case "like":
                    $account_id  = $_GET["account_id"];
                    $car_id = $_GET['car'];
                    $like = $_GET['like'];
                    $mySQLCon->connect();
                    if ($like == 1) {
                        $sql = "DELETE FROM car_like WHERE customer_id = :account_id and car_id=:car_id";
                        $arr_param = array("account_id" => $account_id, "car_id" => $car_id);
                        $mySQLCon->deleteData($sql, $arr_param);
                        $mySQLCon->disconnect();
                    } else {
                        $sql = "INSERT INTO car_like(customer_id,car_id,status) values (:account_id,  :car_id,:status)";
                        $arr_param = array("account_id" => $account_id, "car_id" => $car_id, "status" => 1);
                        $mySQLCon->insertData($sql, $arr_param);
                        $mySQLCon->disconnect();
                    }
                    header("Location: ../view/detail.php");
                    break;

                case "pass":
                    $passnow = $_POST['passnow'];
                    $passnew = $_POST['passnew'];
                    $checkpassnew = $_POST['checkpassnew'];
                    $id = $_POST['account_id'];

                    $user = new User("", "", "", "", "", "", "");
                    $account = $user->changepass($passnow, $passnew, $checkpassnew, $id);
                    if ($account) {
                        header('Location: ../view/signup.php');
                    } else {
                        header('Location: ../view/setting.php');
                    }
                    break;
                case "mail":
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $subject = $_POST['subject'];
                    $message = $_POST['message'];
                    $mail = new MailSend();
                    $mail->mailsend($email, $name, $subject, $message);
                    header('Location: ../view/index.php');
                    break;
                case "logout":
                    if (!isset($_SESSION)) {
                        session_start();
                    }
                    session_unset();
                    session_destroy();
                    header("Location:../view/index.php");
                    break;
                default:
                    $_SESSION["is_login"] = false;
                    include '../view/index.php';
                    break;
            }
        }

        private function isLogin()
        {
            if (!isset($_SESSION)) {
                session_start();
                if ($_SESSION["is_login"]) {
                    return true;
                }
            }
            return false;
        }
    }

    $action = "";

    if (isset($_POST["useraction"])) {
        $action = $_POST["useraction"];
    } else {
        $action = $_GET["action"];
    }

    $userController = new UserController($action);
    ?>
