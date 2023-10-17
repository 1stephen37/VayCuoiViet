<?php

    session_start();
    ob_start();

    require_once '../model/DAO.php';

    require_once '../model/danhmuc.php';

    require_once '../model/sanpham.php';

    require_once '../model/user.php';

    require_once '../model/donhang.php';

    require_once '../model/comment.php';

    require_once '../view/user_src/head.php';

    require_once '../view/user_src/header.php';

    require_once 'layout_top.php';

    if(isset($_GET['account']) && ($_GET['account']) != '') {

        $account = $_GET['account'];

        switch ($account) {
            case 'order': {
                require_once 'order/index.php';
                break;
            }
            case 'cart': {
                require_once 'cart.php';
                break;
            }
            case 'setting' :
                if(isset($_GET['update']) && ($_GET['update'] != 0)) {
                    $update_user_name = $_POST['update_user_name'];
                    $update_user_email = $_POST['update_user_email'];
                    $update_user_phone = $_POST['update_user_phone'];
                    $update_user_address = $_POST['update_user_address'];
                    $update_user_img = $_FILES['update_user_img']['name'];
                    $file="../user_img/".basename($_FILES['update_user_img']['name']) ;
                    if(move_uploaded_file($_FILES['update_user_img']['tmp_name'],$file)){
                        echo "";
                    }else{
                        echo "";
                    }
                    update_user($update_user_name, $update_user_img, $update_user_email, $update_user_phone, $update_user_address, $_SESSION['user']['id']);
                    $user_update = get_user_by_id($_SESSION['user']['id']);
                    $_SESSION['user'] = $user_update;
                }
                require 'setting.php';
                break;
            case 'comment' :
                require 'comment.php';
                break;
            default: {
                require_once 'default.php';
                break;
            }

        }



    } else {
        require_once 'default.php';
    }

    require_once 'layout_bot.php';

    require_once '../view/user_src/footer.php';

    require_once '../view/user_src/foot.php';



?>