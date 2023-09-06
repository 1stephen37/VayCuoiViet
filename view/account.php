<?php



    if(isset($_GET['account']) && ($_GET['account']) != '') {

        $account = $_GET['account'];

        require_once 'view/user/order.php';

    } else {
        require_once 'view/user/default.php';
    }


?>