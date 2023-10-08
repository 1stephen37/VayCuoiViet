<?php

    $comment = get_all_comments();

    $comment_html = '';

    foreach ($comment as $binhluan) {
        extract($binhluan);

        $comment_html .= '
    <div class="flex-items flex">

        <div class="name_product">

            '.$id.'

        </div>

        <div class="name_user">

            Tên người dùng

        </div>

        <div class="content">
            '.$content.'
        </div>

    </div>
            
        ';

    }

?>

<div class="flex-container flex">

    <div class="flex-heading flex">

        <div class="name_product">

            sản phẩm

        </div>

        <div class="name_user">

            người dùng

        </div>

        <div class="content">
            nội dung
        </div>


    </div>


    <?=$comment_html?>



</div>
