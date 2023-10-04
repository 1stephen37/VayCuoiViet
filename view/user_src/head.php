<!DOCTYPE html>
<!--suppress XmlInvalidId -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/logo/logo-icon.png" type="image/x-icon">
    <?php

    if(!isset($_GET['account']) || ($_GET['account'] == '')) {
        echo '
                    <title>Tài khoản của bạn</title>
                    <link rel="stylesheet" type="text/css" href="../assets/css/account.css">
                
                ';
    }

    if(isset($_GET['account']) && ($_GET['account'] != '')) {

        $page = $_GET['account'];

        switch($page) {
            case 'index':
                echo '
                    <title>Tài khoản của bạn</title>
                    <link rel="stylesheet" type="text/css" href="../assets/css/account.css">
                ';
                break;
            case 'order':
                echo '
                    <title>Đơn Hàng</title>
                    <link rel="stylesheet" type="text/css" href="css/order.css">
                ';
                break;
            case 'cart':
                echo '
                     <title>Giỏ Hàng</title>
                    <link rel="stylesheet" type="text/css" href="css/cart.css">
                ';
                break;
            case 'user':
                echo '
                     <title>Người Dùng</title>
                    <link rel="stylesheet" type="text/css" href="css/user.css">
                ';
                break;
            case 'brand':
                echo '
                     <title>Thương Hiệu</title>
                    <link rel="stylesheet" type="text/css" href="css/brand.css">
                ';
                break;
            case 'order':
                echo '
                     <title>Đơn hàng</title>
                    <link rel="stylesheet" type="text/css" href="css/order.css">
                ';
                break;
            case 'setting':
                echo '
                     <title>Thông Tin</title>
                     <link rel="stylesheet" type="text/css" href="css/setting.css">
                ';
                break;
            default:
                echo '
                    <title>bảng điều khiển</title>
                    <link rel="stylesheet" type="text/css" href="../assets/css/account.css">
                ';
                break;

        }

    }

    ?>


    <link rel="stylesheet" type="text/css" href="../assets/css/pop-up/form.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/pop-up/sign-in.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/pop-up/sign-up.css">
    <link rel="stylesheet" type="text/css" href="assets/css/pop-up/miss_pass.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/keyframe.css">
    <link rel="stylesheet" type="text/css" href="../assets/icon/fontawesome-free-6.4.0-web/css/all.min.css">
</head>
<body>

<main>
