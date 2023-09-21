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

        <div class="heading">

            Chào <?php
            //                foreach ($_SESSION['user'] as item) {
            //
            //                };

            if($_SESSION['admin']) {
                echo($_SESSION['admin']['Name']);
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

