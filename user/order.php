<section class="banner flex">

    <div class="heading">

        <div class="des">

            Tài Khoản của bạn

        </div>

        <div class="vector">

            <img src="../assets/img/cart/Vector 1.svg" alt="" class="img-full">

        </div>

    </div>


</section>

<section class="section1 flex">

    <div class="left flex">

        <div class="admin-link">
            <i class="fa-solid fa-sliders"></i>
            <a href="index.php?acount=index">

                bảng điều khiển
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-solid fa-bag-shopping"></i>
            <a href="index.php?act=account&account=order">
                đơn hàng
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-solid fa-cart-shopping"></i>
            <a href="index.php?act=account&account=cart">
                giỏ hàng
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-solid fa-location-dot"></i>
            <a href="index.php?act=account&account=adress">
                địa chỉ
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-solid fa-user"></i>
            <a href="index.php?act=account&account=setting">
                tài khoản
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

            $order = get_all_ordert($_SESSION['user']['id']);

            var_dump($order);

            $view = '';

//       foreach ($order as $item) {
//           extract($item);
//
//           $view .= '
//    <div class="product flex">
//
//        <div class="name">
//            '.$name.'
//        </div>
//
//        <div class="price">
//            '.number_format($price, 0,',','.').'
//        </div>
//
//        <div class="small flex">
//
//            <div class="size">
//                '.$size.'
//            </div>
//
//            <div class="action flex">
//
//                <a href="index.php?act=sanpham&sanpham=edit&edit='.$id.'" class="edit">
//                    Sửa
//                </a>
//                /
//                <a href="index.php?act=sanpham&sanpham=remove&remove='.$id.'" class="remove">
//                    Xóa
//                </a>
//
//            </div>
//        </div>
//
//    </div>
//
//            ';
//
//       }

       ?>

        <div class="display-cata flex">

            <div class="nav flex">

                <div class="name">
                    tên
                </div>

                <div class="img">
                    ảnh
                </div>

                <div class="price">
                    giá
                </div>

                <div class="size">
                    kích cỡ
                </div>


                <div class="action flex">

                    hành động

                </div>

            </div>



        </div>

    </div>

</section>




