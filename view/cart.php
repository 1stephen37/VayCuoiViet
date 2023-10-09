<div class="banner flex">

    <div class="heading">
        giỏ hàng
    </div>

    <div class="vector">
        <img src="assets/img/cart/Vector 1.svg" alt="" class="img-full">
    </div>

</div>

<section class="cart">

    <div class="container flex">

        <div class="name">
            SẢN PHẨM
        </div>

        <div class="title flex">

            <div class="price">
                GIÁ
            </div>

            <div class="count">
                SỐ LƯỢNG
            </div>

            <div class="total">
                TỔNG
            </div>

        </div>

    </div>

    <div class="product flex">

        <?php

            $list = '';

            $i = 0;

            if(isset($_SESSION['cart']) && ($_SESSION['cart'] != '')) {

//                unset($_SESSION['cart']);

                if(isset($_GET['remove']) && ($_GET['remove'] >= 0)) {

                    $remove = $_GET['remove'];

                    array_splice($_SESSION['cart'], $remove, 1);

                    if(count($_SESSION['cart']) == 0 ) {
                        header('location: index.php?act=dress');
                        unset($_SESSION['cart']);
                    } else {
                        header('location: index.php?act=cart');
                    }


                }

                if(isset($_GET['countDown']) && ($_GET['countDown'] >= 0)) {

                    $down = $_GET['countDown'];

                    $_SESSION['cart'][$down]['count'] -= 1;

                    if($_SESSION['cart'][$down]['count'] == 0) {
                        array_splice($_SESSION['cart'], $down, 1);
                    }

                    if(count($_SESSION['cart']) == 0 ) {
                        header('location: index.php?act=dress');
                        unset($_SESSION['cart']);
                    } else {
                        header('location: index.php?act=cart');
                    }


                }

                if(isset($_GET['countUp']) && ($_GET['countUp'] >= 0)) {

                    $up = $_GET['countUp'];

                    $_SESSION['cart'][$up]['count'] += 1;

                    header('location: index.php?act=cart');

                }

                $tong = 0;

                $_SESSION['total'] = 0;

                foreach ($_SESSION['cart'] as $item ) {

                    extract($item);

                    $id_product = $id;

                    $img_src = getImage($id_product);

                    $thanhtien = $price * $count;

                    $_SESSION['total'] += $thanhtien;

                    $list .= '
                           <div class="line-container">

                                <div class="line flex">

                                    <div class="cancel">
                                        <a href="index.php?act=cart&remove='.$i.'" class="icon">
                                            <img src="assets/img/cart/cancelsvg.svg" alt="" class="img-full">
                                        </a>
                                    </div>
                    
                                    <div class="product flex">
                                        <div class="img">
                                            <img src="upload/'.$img_src['name'].'." alt="" class="img-full">
                                        </div>
                                        <div class="des">
                                            '.$name.'
                                        </div>
                                    </div>
                    
                                    <div class="numberic flex">
                    
                                        <div class="price">
                                            '.number_format($price,0, ',', '.').'
                                        </div>
                    
                                        <div class="count flex">
                                            <a href="index.php?act=cart&countDown='.$i.'" class="down">
                                                -
                                            </a>
                    
                                            <div class="number">
                                                '.$count.'
                                            </div>
                    
                    
                                            <a href="index.php?act=cart&countUp='.$i.'" class="up">
                                                +
                                            </a>
                                        </div>
                    
                                        <div class="total">
                                            '.number_format($price * $count,0, ',', '.').'
                                        </div>
                    
                                    </div>

                                </div>

                           </div>
                    ';

                    $i++;
                }

                $btn = '<a class="right">Thanh toán</a>';
            } else {
                $list = '';
                $btn = '<a class="right">Thanh toán</a>';
            }






        ?>

        <?=$list?>

    </div>

    <div class="button flex">

        <div class="flex-btn flex">

            <div class="left">
                <a href="index.php?act=dress">
                    Tiếp tục mua sắm
                </a>
            </div>

            <?=$btn?>

        </div>


        <div class="total">
            <?php
            if(isset($_SESSION['cart']) && ($_SESSION['cart'] != '')){
                echo number_format($_SESSION['total'],0,',','.').'VNĐ';
            } else {
                echo '0 VNĐ';
            }
            ?>
        </div>

    </div>

</section>