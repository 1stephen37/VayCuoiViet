<section class="banner flex">

    <div class="heading">

        <div class="des">
            thanh toán
        </div>

        <div class="vector">
            <img src="assets/img/about/Vector 1.svg" alt="" class="img-full">
        </div>

    </div>

</section>

<?php

    if(isset($_SESSION['cart']) && ($_SESSION['cart'] != '')) {

        $order = '';

    }

    if(isset($_SESSION['user']) && ($_SESSION['user'])) {
        $login = '
            <div class="login">
            Chào '.$_SESSION['user']['name'].'
            </div>
        ';
    } else {
        $login = '';
    }

?>

<section class="box-grid">

        <?=$login?>

        <form class="form_left">

            <input type="text">



        </form>

        <div class="right">

            <div class="cart">



            </div>

        </div>


<!--        <form action="index.php?act=pay&pay=1" method="post" class="form-deli flex">-->
<!---->
<!--                <div class="label">-->
<!---->
<!--                    <label for="">-->
<!--                        Họ và Tên-->
<!--                        <span>-->
<!--                            *-->
<!--                        </span>-->
<!--                    </label>-->
<!---->
<!--                    <input name="order_Name" type="text" value="--><?php //=$_SESSION['user']['name']?><!--">-->
<!---->
<!--                </div>-->
<!---->
<!--                <div class="label">-->
<!---->
<!--                    <label for="">-->
<!---->
<!--                        Địa Chỉ-->
<!---->
<!--                        <span>-->
<!--                            *-->
<!--                        </span>-->
<!---->
<!--                    </label>-->
<!---->
<!--                    <input type="order_adress" value="--><?php //=$_SESSION['user']['address']?><!--">-->
<!---->
<!---->
<!--                </div>-->
<!---->
<!--                <div class="label">-->
<!---->
<!--                    <label for="">-->
<!--                        Email-->
<!--                        <span>-->
<!--                                *-->
<!--                        </span>-->
<!--                    </label>-->
<!---->
<!--                    <input name="order_email" type="text" value="--><?php //=$_SESSION['user']['Email']?><!--">-->
<!---->
<!--                </div>-->
<!---->
<!--                <div class="label">-->
<!---->
<!--                    <label for="">-->
<!--                        Phone-->
<!--                        <span>-->
<!--                                    *-->
<!--                            </span>-->
<!--                    </label>-->
<!---->
<!--                    <input name="order_tel" type="text" value="--><?php //=$_SESSION['user']['Phone']?><!--">-->
<!---->
<!--                </div>-->
<!---->
<!--                <div class="type_deli flex">-->
<!---->
<!--                    <label for="">-->
<!---->
<!--                        Giao cả ngày-->
<!--                        <input name="deli" value="all" type="radio" name="" id="">-->
<!---->
<!--                    </label>-->
<!---->
<!--                    <label for="">-->
<!---->
<!--                        Giao giờ hành chính-->
<!--                        <input name="deli" value="office" type="radio" name="" id="">-->
<!---->
<!--                    </label>-->
<!---->
<!--                </div>-->
<!---->
<!--                <input class="submit_btn" name="payBtn" type="submit" value="Đặt Hàng Ngay">-->
<!---->
<!---->
<!--        </form>-->




</section>

