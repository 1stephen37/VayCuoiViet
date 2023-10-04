
        <?php

        session_start();
        ob_start();

        require_once 'model/connectdb.php';
        require_once "model/DAO.php";
        require_once 'model/sanpham.php';
        require_once 'model/danhmuc.php';
        require_once 'model/donhang.php';
        require_once 'model/user.php';
        require_once 'model/comment.php';

            require_once 'view/src/head.php';

            require_once 'view/src/header.php';

            if(isset($_GET['act']) && ($_GET['act'] != '')) {

                $page = $_GET['act'];

                switch ($page) {
                    case 'about':
                        include_once 'view/about.php';
                        break;
                    case 'dress':
                        include_once 'view/dress.php';
                        break;
                    case 'product':
                        if(isset($_GET['idproduct']) && ($_GET['idproduct'] > 0) ) {
                            
                            include_once 'view/product.php';

                        } else {
                            header('location: index.php?act=index');
                        }

                        break;
                    case 'thuvien':
                        include_once 'view/thuvien.php';
                        break;
                    case 'logout':
                        if(isset($_SESSION['cart']) && $_SESSION['cart'] != '') {
                            unset($_SESSION['cart']);
                        }
                        if(isset($_SESSION['user']) && $_SESSION['user'] != '') {
                           unset($_SESSION['user']);
                        }
                        if(isset($_SESSION['admin']) && $_SESSION['admin'] != '') {
                            unset($_SESSION['admin']);
                        }
                        include_once 'view/home.php';
                        break;
                    case 'contact':
                        include_once 'view/contact.php';
                        break;
                    case 'pay':

//                        if(isset($_GET['pay']) && ($_GET['pay'] != 0)) {

                            if(isset($_POST['payBtn']) && ($_POST['payBtn'])) {

                                $id = $_SESSION['user']['id'];
                                $total = $_SESSION['total'];
                                $name = $_SESSION['user']['Name'];
                                $address = $_SESSION['user']['address'];
                                $email = $_SESSION['user']['Email'];
                                $tel = $_SESSION['user']['Phone'];


                                $check = taodonhang($id,$total,$name,$address,$email,$tel);

                                foreach ($_SESSION['cart'] as $item) {
                                    if(is_array($item)) {
                                        extract($item);
                                    }

                                    $thanhtien = $price * $count;

                                    addtocart($check,$id,$thanhtien,$count);
                                }

                                header("location: index.php?act=index");

                            }

//                            foreach ($_SESSION['cart'] as $cart) {
//
//                            }

//                        }
                        include_once 'view/pay.php';
                        break;
                    case 'cart':
                        include_once 'view/cart.php';
                        break;
                    case 'admin':
                        include_once 'view/admin.php';
                        break;
                    case 'error':
                        include_once 'view/error.php';
                        break;
                    case 'miss_pass':
//                        if(isset($_POST['missBtn']) && ($_POST['missBtn'])) {
//                        }
                        if(isset($_POST['email_miss']) && ($_POST['email_miss'] != '')) {

                            $_SESSION['id_user_miss'] = check_user($_POST['email_miss']);

                            include_once 'view/miss_pass.php';

                        } else if(isset($_POST['codeBtn']) && ($_POST['codeBtn'])) {
                            require_once 'view/miss_pass.php';
                        } else {
                            include_once 'view/error.php';
                        }
                        break;
                    case 'reset_pass':
                        require_once 'view/reset_pass.php';
                        break;
                    case 'login':

                        if(isset($_POST['sign_in_submit']) && $_POST['sign_in_submit']) {

                            $email = $_POST['email_sign_in'];
                            $pass = $_POST['user_password_sign_in'];

                            $in4 = checkuser($email,$pass);

                            if($in4 == 0) {
                                require_once 'view/error.php';
                            } else if($in4) {
//                                $_SESSION['user_name'] = $in4['id'];
//                                $_SESSION['user_passWord'] = $in4['PassWord'];
//                                $_SESSION['Name'] = $in4['Name'];
//                                $_SESSION['role'] = $in4['role'];

                                if($in4['role'] == 1) {
                                    $_SESSION['admin'] = $in4;
                                    header('location: admin/index.php?act=admin');
                                } else {
                                    $_SESSION['user'] = $in4;
                                    header('location: user/index.php');
                                }
                            }

//                            require_once 'view/' . $_GET['act'] . '.php';
//
//                            require_once 'view/check.php';

                        }
                        break;
                    case 'signup':

                        if(isset($_POST['sign-in']) && $_POST['sign-in']) {

                            $Newuser = $_POST['user_name_sign_up'];
                            $Newpass = $_POST['pass_name_sign_up'];

                            $ceateUser = Newuser($Newuser, $Newpass);

                            if($ceateUser) {
                                header( 'location:index.php?act=index');
                            } else {
                                header( 'location:index.php?act=error');
                            }

                        }

                        break;

                    case 'index':
                        include_once 'view/home.php';
                        break;
                    default:
                        include_once 'view/home.php';
                }
            } else {
                require_once 'view/home.php';
            }

            require_once 'view/src/footer.php';

//            if($_SESSION['user']) {
//                require_once 'view/src/foot_login.php';
//            } else {
//                require_once 'view/src/foot.php';
//            }

            require_once 'view/src/foot.php';


        ?>

