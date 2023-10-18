<?php

    $comment = get_all_comments();

    $comment_html = '';

    foreach ($comment as $binhluan) {
        extract($binhluan);

        $userComment = get_user_by_id($id_user);

        $productComment = get_product_by_id($id_product);

        $comment_html .= '
    <div class="flex-items flex">

        <div class="name_product">

            '.$productComment['name'].'

        </div>

        <div class="name_user">

            '.$userComment['name'].'

        </div>
        
        <div class="small flex">
        
            <div class="content">
                '.$content.'
            </div>
            
            <a href="" class="detail">
                chi tiết
            </a>
        
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

        <div class="action">
            hành động
        </div>

    </div>


    <?=$comment_html?>



</div>
