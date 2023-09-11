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
            <a href="index.php?account=order">
                đơn hàng
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-solid fa-cart-shopping"></i>
            <a href="index.php?account=cart">
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

        <div class="heading">

            Chào <?php
            //                foreach ($_SESSION['user'] as item) {
            //
            //                };

            if($_SESSION['user']) {
                echo($_SESSION['user']['Name']);
            }

            ?>

        </div>

        <div class="content">

            Từ bảng điều khiển tài khoản của bạn. bạn có thể dễ dàng kiểm tra và xem các
            <a href="">
                đơn đặt hàng gần đây
            </a> của mình,
            quản lý
            <a href="">địa chỉ giao hàng và thanh toán</a>
            của bạn, đồng thời
            <a href="">chỉnh sửa mật khẩu và chi tiết tài khoản của bạn.</a>

        </div>

    </div>

</section>




