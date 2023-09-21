<div class="banner flex">

    <div class="heading">
        chào Stephen Nguyễn !
    </div>

    <div class="vector">
        <img src="../assets/img/about/Vector 1.svg" alt="" class="img-full">
    </div>

</div>

<section class="section1 flex">

    <div class="left flex">

        <div class="admin-link">
            <i class="fa-solid fa-sliders"></i>
            <a href="index.php?act=index">
                bảng điều khiển
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-solid fa-bag-shopping"></i>
            <a href="index.php?act=danhmuc">
                danh mục
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-solid fa-cart-shopping"></i>
            <a href="index.php?act=sanpham">
                sản phẩm
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-solid fa-user"></i>
            <a href="index.php?act=user">
                người dùng
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-solid fa-tag"></i>
            <a href="index.php?act=brand">
                thương hiệu
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-sharp fa-solid fa-truck-fast"></i>
            <a href="index.php?act=order">
                đơn hàng
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-solid fa-pen-clip"></i>
            <a href="index.php?act=comment">
                đánh giá
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-solid fa-right-from-bracket"></i>
            <a href="../index.php?act=logout">
                đăng xuất
            </a>
        </div>

    </div>

    <div class="right">

        <?php

            if(isset($_GET['danhmuc']) && ($_GET['danhmuc']) ) {

                $action = $_GET['danhmuc'];

                switch ($action) {

                    case 'edit': {
                        require_once 'edit.php';
                        break;
                    }

                    case 'remove': {

                        if(isset($_GET['remove']) && ($_GET['remove'] != '')){

                            $rm = $_GET['remove'];

                            $check = check_foregin($rm);

                            if($check > 0) {
                                header('location: index.php?act=index');
                            } else {
                                deldm($rm);
                                header('location: index.php?act=danhmuc');
                            }


                        }

                        break;
                    }

                    case 'add': {
                        require_once 'add.php';
                        break;
                    }

                    default: {
                        require_once 'view.php';
                        break;
                    }
                }

            } else {
                require_once 'view.php';
            }

        ?>


        </div>

    </div>

</section>

