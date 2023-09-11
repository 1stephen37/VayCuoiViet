<!DOCTYPE html>
<!--suppress XmlInvalidId -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/logo/logo-icon.png" type="image/x-icon">
    <?php

    if(!isset($_GET['act']) || ($_GET['act'] == '')) {
        echo '
                    <title>Váy Cưới Việt</title>
                    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
                
                ';
    }

    if(isset($_GET['act']) && ($_GET['act'] != '')) {

        $page = $_GET['act'];

        switch($page) {
            case 'about':
                echo '
                    <title>Về chúng tôi</title>
                    <link rel="stylesheet" type="text/css" href="assets/css/about.css">
                ';
                break;
            case 'index':
                echo '
                     <title>Váy Cưới Việt</title>
                    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
                ';
                break;
            case 'dress':
                echo '
                    <title>Váy cưới</title>
                    <link rel="stylesheet" type="text/css" href="assets/css/dress.css">
                ';
                break;
            case 'login':
                echo '
                    <title>Tài khoản</title>
                    <link rel="stylesheet" type="text/css" href="assets/css/account.css">
                ';
                break;
            case 'error':
                echo '
                    <title>Có Lỗi Xảy Ra !</title>
                    <link rel="stylesheet" type="text/css" href="assets/css/error.css">
                ';
                break;
            case 'product':
                echo '
                    <title>Chi tiết sản phẩm</title>
                    <link rel="stylesheet" type="text/css" href="assets/css/product.css">
                ';
                break;
            case 'thuvien':
                echo '
                    <title>Thư viện</title>
                    <link rel="stylesheet" type="text/css" href="assets/css/thuvien.css">
                ';
                break;
            case 'contact':
                echo '
                    <title>Liên hệ</title>
                    <link rel="stylesheet" type="text/css" href="assets/css/contact.css">
                ';
                break;
            case 'cart':
                echo '
                    <title>Giỏ hàng</title>
                    <link rel="stylesheet" type="text/css" href="assets/css/cart.css">
                ';
                break;
            case 'account':
                echo '
                    <title>Tài Khoản</title>
                    <link rel="stylesheet" type="text/css" href="assets/css/account.css">
                ';
            case 'pay':
                echo '
                    <title>Thanh Toán</title>
                    <link rel="stylesheet" type="text/css" href="assets/css/pay.css">
                ';
                break;
            default:
                echo '
                    <title>Váy Cưới Việt</title>
                    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
                ';
                break;

        }

    }

    ?>

    <link rel="stylesheet" type="text/css" href="assets/css/pop-up/form.css">
    <link rel="stylesheet" type="text/css" href="assets/css/pop-up/sign-in.css">
    <link rel="stylesheet" type="text/css" href="assets/css/pop-up/sign-up.css">
    <link rel="stylesheet" type="text/css" href="assets/css/pop-up/miss_pass.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/keyframe.css">
    <link rel="stylesheet" type="text/css" href="assets/icon/fontawesome-free-6.4.0-web/css/all.min.css">
</head>
<body>

<main>
