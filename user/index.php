<?php

    session_start();
    ob_start();

    require_once '../model/connectdb.php';

    require_once '../model/danhmuc.php';

    require_once '../model/sanpham.php';

    require_once '../model/user.php';

    require_once '../model/donhang.php';

    require_once '../view/user_src/head.php';

    require_once '../view/user_src/header.php';

    if(isset($_GET['account']) && ($_GET['account']) != '') {

        $account = $_GET['account'];

        switch ($account) {

            case 'order': {
                require_once 'order.php';
                break;
            }

            case 'cart': {
                require_once 'cart.php';
                break;
            }

            default: {
                require_once 'default.php';
                break;
            }

        }



    } else {
        require_once 'default.php';
    }

    require_once '../view/user_src/footer.php';

    require_once '../view/user_src/foot.php';



?>