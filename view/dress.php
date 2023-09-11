<?php

if(isset($_GET['danhmuc']) && ($_GET['danhmuc'] > 0) ) {
    $danhmuc = $_GET['danhmuc'];
} else {
    $danhmuc = 1;
}

$_SESSION['danhmuc'] = $danhmuc;

if(isset($_GET['page']) && ($_GET['page'] > 0) ) {
    $page = $_GET['page'];
} else {
    $page = 1;
}


$sp = getall_sp($danhmuc, $page);
$all_cata = getall_dm();

if(isset($_POST['buy_btn']) && ($_POST['buy_btn'])) {

//                            unset($_SESSION['cart']);

    $count = $_POST['count_product'];

    if (isset($_GET['buyid']) && ($_GET['buyid'] > 0)) {

        $buyid = $_GET['buyid'];

        $in4 = getonesp($buyid);

        $arrayCart = [];

        $check = true;

        extract($in4);
        $i = 0;
        if(isset($_SESSION['cart']) && ($_SESSION['cart'] != '')) {

            foreach ($_SESSION['cart'] as $item) {
                if ($item['id'] == $buyid) {
                    $sl = $item['count'] + 1;
                    $_SESSION['cart'][$i]['count'] = $sl;
//                                        $item[$i]['count'] = 2;
//                                        $_SESSION['cart'][]
                    $check = false;
                    break;
                }
                $i++;
            }

        }


        if ($check) {
            $_SESSION['cart'][] = [
                'id' => $id,
                'price' => $price,
                'name' => $name,
                'id_cata' => $id_cata,
                'size' => $size,
                'count' => $count
            ];
        }

    }
}

?>

<div class="banner flex">

    <div class="heading">
        váy cưới
    </div>

    <div class="vector">
        <img src="assets/img/dress/Vector 1.svg" alt="" class="img-full">
    </div>

</div>

<section class="dress-des flex">

    <div class="des-top">
        Với sứ mạng mang đến cho nửa phần còn lại của thế giới một hôn lễ tuyệt với nhất trong ngày trọng đại của họ, chúng tôi - Công ty Váy Cưới Việt xin được phép cho ra mắt dịch vụ mua bán và cho thuê váy cưới
    </div>

    <div class="des-bot">
        Nhằm mang đến sự yên tâm cho khách hàng, chúng tôi luôn cung cấp những chiếc váy áo cưới với chất lượng tốt nhất cùng giá thành hợp lý với khách hàng của mình  - đồng thời luôn luôn cập nhật các xu hướng mới của thời trang nói chung, ngoài ra chúng tôi còn có các loại ưu đãi riêng dành cho những khách hàng thân thiết của mình bằng hệ thống đăng nhập (đăng kí) trên website chính chủ)
    </div>

</section>

<section class="filter flex">

    <div class="type flex">

        <div class="detail">
            Loại váy cưới :
        </div>

        <?php

            $select_danhmuc = '';

            foreach ($all_cata as $item) {
                extract($item);

                if($id == $danhmuc ) {
                    $select_danhmuc .= '
                    <option selected value="'.$id.'">'.$name.'</option>
                ';
                } else {
                    $select_danhmuc .= '
                    <option value="'.$id.'">'.$name.'</option>
                ';
                }


            }

        ?>

        <div class="input">
            <select onchange="open_cata();" class="img-full" name="type" id="">
<!--                <option value="">Váy cưới làm lễ</option>-->
<!--                <option value="">Váy cưới truyền thống</option>-->
<!--                <option value="">Váy cưới dòng đền</option>-->
                <?=$select_danhmuc?>
            </select>
        </div>

    </div>

    <div class="search-fillter flex">

        <div class="input">
            <input class="img-full" name="search" placeholder="Nhập tên sản phảm" type="text">
        </div>

        <div class="icon">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>

    </div>

    <div class="arrange flex">

        <div class="detail">
            Sắp xếp :
        </div>

        <div class="input">
            <select class="img-full" name="type" id="">
                <option value="">Từ thấp đến cao</option>
                <option value="">Từ cao đến thấp</option>
                <option value="">Từ A đến Z</option>
                <option value="">Từ Z đến A</option>
            </select>
        </div>

    </div>

</section>

<section class="box-sp grid">

    <?php

    $page = '';

    if($danhmuc == 1) {

        foreach($sp as $item) {

        extract($item);

        $img = getImage($id);

        $page .= '
        <div class="box">
    
            <div class="img">
                <img src="upload/'.$img['name'].'" alt="" class="img-full">
                <span class="effect flex">
                    <a href="index.php?act=product&idproduct='.$id.'" class="view">
                        chi tiết
                    </a>
                    <form action="index.php?act=dress&buyid='.$id.'" method="post">
                        <input type="text" name="count_product" value="1" value="" hidden>
                        <input type="submit" name="buy_btn" class="addCart" value="mua ngay">                
                    </form>
                </span>
            </div>
    
            <div class="des">
                '.$name.'
            </div>
         
        </div>
        ';

        }

    }

//    foreach($sp as $item) {
//
//        extract($item);
//
//        $img = getImage($id);
//
//        $page .= '
//        <div class="box">
//
//            <div class="img">
//                <img src="upload/'.$img['name'].'" alt="" class="img-full">
//                <span class="effect flex">
//                    <a href="index.php?act=product&idproduct='.$id.'" class="view">
//                        chi tiết
//                    </a>
//                    <form action="index.php?act=dress&buyid='.$id.'" method="post">
//                        <input type="text" name="count_product" value="1" value="" hidden>
//                        <input type="submit" name="buy_btn" class="addCart" value="mua ngay">
//                    </form>
//                </span>
//            </div>
//
//            <div class="des">
//                '.$name.'
//            </div>
//
//            <div class="price">
//                '.number_format($price,0, ',', '.').' VNĐ'.'
//            </div>
//
//        </div>
//        ';
//
//    }



    ?>

    <?=$page?>




</section>

<section class="page flex">

    <a href="index.php?act=dress&page=1" class="cricle">
        1
    </a>

    <a href="index.php?act=dress&page=2" class="cricle">
        2
    </a>

    <div class="cricle">
        3
    </div>

    <div class="cricle">
        4
    </div>

    <div class="cricle">
        ...
    </div>

    <div class="cricle">
        14
    </div>

    <div class="cricle">
        15
    </div>

    <div class="cricle">
        16
    </div>

    <div class="cricle">
        <i class="fa-solid fa-chevron-right"></i>
    </div>

</section>