
        <?php

        session_start();
        ob_start();

        require_once "model/DAO.php";
        require_once 'model/sanpham.php';
        require_once 'model/danhmuc.php';
        require_once 'model/donhang.php';
        require_once 'model/user.php';
        require_once 'model/comment.php';
        require_once 'model/img.php';

        date_default_timezone_set('Asia/Ho_Chi_Minh');

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
                        $name_information = $_POST['name_information'];
                        $address_information = $_POST['address_information'];
                        $phone_information = $_POST['phone_information'];
                        $email_information= $_POST['email_information'];
                        $delivery_information = $_POST['delivery_information'];
                        $pay_information = $_POST['pay_information'];
                        $total = $_SESSION['total'];
                        $currentDateTime = date('Y-m-d H:i:s');
                        $timestamp = strtotime($currentDateTime);
                        $formattedDateTime = date('Y-m-d H:i:s', $timestamp);
                        $createOrder = taodonhang($_SESSION['user']['id'],$total,$name_information,$address_information,$email_information,$phone_information,$formattedDateTime);
                        foreach($_SESSION['cart'] as $cart) {
                            extract($cart);
                            $total_product = $price * $count;
                            $cart = addtocart($id,$createOrder,$count,$total_product);
                        }
                        unset($_SESSION['cart']);
                        header('location: user/index.php?account=order');
                        break;
                    case 'pay_create':
                        $name_information = $_POST['name_information'];
                        $address_information = $_POST['address_information'];
                        $phone_information = $_POST['phone_information'];
                        $email_information = $_POST['email_information'];
                        $delivery_information = $_POST['delivery_information'];
                        $pay_information = $_POST['pay_information'];
                        $total = $_SESSION['total'];

                        $hashedPass = password_hash('default', PASSWORD_DEFAULT);

                        New_User_Active_0 ($hashedPass, $name_information, $email_information, $phone_information, $address_information);

                        $in4 = checkuser($email_information,$hashedPass);

                        if($in4 != 0) {
                            $_SESSION['user'] = $in4;
                        }

                        $currentDateTime = date('Y-m-d H:i:s');
                        $timestamp = strtotime($currentDateTime);
                        $formattedDateTime = date('Y-m-d H:i:s', $timestamp);
                        $createOrder = taodonhang($_SESSION['user']['id'],$total,$name_information,$address_information,$email_information,$phone_information,$formattedDateTime);
                        foreach($_SESSION['cart'] as $cart) {
                            extract($cart);
                            $total_product = $price * $count;
                            $cart = addtocart($id,$createOrder,$count,$total_product);
                        }
                        unset($_SESSION['cart']);
                        header('location: user/index.php?account=order');
                        break;
                    case 'cart':
                        include_once 'view/cart.php';
                        break;
                    case 'admin':
                        include_once 'admin/index.php';
                        break;
                    case 'error':
                        include_once 'view/error.php';
                        break;
                    case 'miss_pass':
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
                        $email = $_POST['email_sign_in'];
                        $pass = $_POST['user_password_sign_in'];

                        $hashedPasswordSignIn = get_Password_by_email($email);

                        if($hashedPasswordSignIn == 0) {
                            header('location: index.php?act=error');
                        }

                        if(password_verify($pass, $hashedPasswordSignIn)) {
                            $in4 = checkuser($email,$hashedPasswordSignIn);
                        } else {
                            $in4 = 0;
                        }

                        if($in4 == 0) {
                            header('location: index.php?act=error');
                        } else if($in4) {
                            if($in4['role'] == 1) {
                                $_SESSION['admin'] = $in4;
                                header('location: admin/index.php?act=admin');
                            } else {
                                $_SESSION['user'] = $in4;
                                header('location: user/index.php');
                            }
                        }
                        break;
                    case 'signup':

                        $NewEmail = $_POST['Email_sign_up'];
                        $Newpass = $_POST['pass_name_sign_up'];

                        $check = checkEmail($NewEmail);

                        if(!($check)) {

                            $hashedPassword = password_hash($Newpass, PASSWORD_DEFAULT);

                            $ceateUser = Newuser($hashedPassword, $NewEmail);

                            if($ceateUser == NULL) {
                                $in4 = checkuser($NewEmail,$hashedPassword);
                                $_SESSION['user'] = $in4;
                                header( 'location:user/index.php');
                            } else {
                                header( 'location:index.php?act=error');
                            }

                        } else {
                            header('Location:index.php?act=error');
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

