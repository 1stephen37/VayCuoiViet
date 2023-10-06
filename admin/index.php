
<?php

    session_start();

    ob_start();

    require_once '../model/connectdb.php';

    require_once '../model/danhmuc.php';

    require_once '../model/sanpham.php';

    require_once '../model/user.php';

    require_once '../model/DAO.php';

    require_once '../view/admin_src/head.php';

    require_once '../view/admin_src/header.php';

    require_once 'layout_top.blade.php';

    if(isset($_GET['act']) && ($_GET['act']) ) {

        $page = $_GET['act'];

        switch ($page) {

            case 'danhmuc': {
                require_once 'catalog/index.php';
                break;
            }

            case 'sanpham': {
                require_once 'product/index.php';
                break;
            }

            case 'user': {
                require_once 'user/index.php';
                break;
            }

            case 'order': {
                require_once 'order/index.php';
                break;
            }

            default: {
                require_once 'admin.php';
                break;
            }
        }


    } else {
        require_once '../view/admin.php';
    }

    require_once 'layout_bot.blade.php';

    require_once '../view/admin_src/footer.php';
    require_once '../view/admin_src/foot.php';

//    require_once '';

?>