<div class="heading">

    Chào <?php
    //                foreach ($_SESSION['user'] as item) {
    //
    //                };

        if($_SESSION['admin']) {
            echo($_SESSION['admin']['name']);
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