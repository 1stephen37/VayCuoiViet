<?php

    $oderList = get_order_by_id_user($_SESSION['user']['id']);

    $order_html = '';

    foreach ($oderList as $order) {
        extract($order);
        $order_html .= '
        <div class="order flex">
    
            <div class="name">
               '.$name.'
            </div>
    
            <div class="phone">
               '.$phone.'
            </div>
    
            <div class="total">
                '.number_format($oderList[0]['total'],0, ',', '.').'
            </div>
    
            <div class="date">
                '.$order_date.'
            </div>
    
        </div>
        ';
    }


?>

<div class="list-order">

    <div class="order-title flex">

        <div class="name">
            Người đặt hàng
        </div>

        <div class="phone">
            Số điện thoại
        </div>

        <div class="total">
            Tổng
        </div>

        <div class="date">
            Thời gian đặt hàng
        </div>

        <div class="action">
            Xem Chi Tiết
        </div>

    </div>

<!--    <div class="order flex">-->
<!---->
<!--        <div class="name">-->
<!--            --><?php //=$oderList[0]['name']?>
<!--        </div>-->
<!---->
<!--        <div class="phone">-->
<!--            --><?php //=$oderList[0]['phone']?>
<!--        </div>-->
<!---->
<!--        <div class="total">-->
<!--            --><?php //=number_format($oderList[0]['total'],0, ',', '.')?>
<!--        </div>-->
<!---->
<!--        <div class="date">-->
<!--            --><?php //=$oderList[0]['order_date']?>
<!--        </div>-->
<!---->
<!--    </div>-->

    <?=$order_html?>

</div>
