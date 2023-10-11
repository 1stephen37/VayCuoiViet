<!DOCTYPE html>
<!--suppress XmlInvalidId -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/logo/logo-icon.png" type="image/x-icon">
    <?php

    if(!isset($_GET['act']) || ($_GET['act'] == '')) {
        echo '
                    <title>bảng điều khiển</title>
                    <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
                
                ';
    }

    if(isset($_GET['act']) && ($_GET['act'] != '')) {

        $page = $_GET['act'];

        switch($page) {
            case 'index':
                echo '
                    <title>bảng điều khiển</title>
                    <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
                ';
                break;
            case 'danhmuc':
                echo '
                     <title>Danh Mục</title>
                    <link rel="stylesheet" type="text/css" href="css/catalog.css">
                ';
                break;
            case 'sanpham':
                echo '
                     <title>Sản Phẩm</title>
                    <link rel="stylesheet" type="text/css" href="css/product.css">
                ';
                break;
            case 'user':
                echo '
                     <title>Người Dùng</title>
                    <link rel="stylesheet" type="text/css" href="css/user.css">
                ';
                break;
            case 'comment':
                echo '
                     <title>Đánh giá</title>
                    <link rel="stylesheet" type="text/css" href="css/comment.css">
                ';
                break;
            case 'order':
                echo '
                     <title>Đơn hàng</title>
                    <link rel="stylesheet" type="text/css" href="css/order.css">
                ';
                break;
            case 'statistical':
                echo '
                     <title>Thống kê</title>
                    <link rel="stylesheet" type="text/css" href="css/statistical.css">
                ';
                break;
            default:
                echo '
                    <title>bảng điều khiển</title>
                    <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
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
