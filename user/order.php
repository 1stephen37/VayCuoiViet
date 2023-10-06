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