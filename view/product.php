<?php

    $idproduct = $_GET['idproduct'];

    $detail = get_detail($idproduct);

    $imgs = getImage_full($idproduct);

//    echo count($img);

    if(is_array($detail)) {
        extract($detail);
    }

    $sub_img = '';

    if(count($imgs) > 0) {

        foreach ($imgs as $img) {

            if($_SESSION['danhmuc'] == 1) {
                $sub_img .= '
                 <div class="img">
                    <img style="height: 12rem;" src="upload/'.$img['name'].'" alt="" class="img-full">
                 </div>
                ';
            } else {
                $sub_img .= '
                 <div class="img">
                    <img style="height: 12rem;" src="upload/'.$img['name'].'" alt="" class="img-full">
                 </div>
                ';
            }


        }

    }


?>

<div class="banner flex">

    <div class="heading">
        chi tiết sản phẩm
    </div>

    <div class="vector">
        <img src="assets/img/product/Vector 1.svg" alt="" class="img-full">
    </div>

</div>

<div class="section1 flex">

    <div class="left flex">

        <div class="main-img">
            <img src="upload/<?=$imgs[0]['name']?>" alt="" class="img-full">
        </div>

        <div class="close" id="mirror" style="background: url('upload/<?=$imgs[0]['name']?>')"></div>

        <div class="sub-img flex">

<!--            <div class="img">-->
<!--                <img src="assets/img/product/sub-1.svg" alt="" class="img-full">-->
<!--            </div>-->
<!---->
<!--            <div class="img">-->
<!--                <img src="assets/img/product/sub-1.svg" alt="" class="img-full">-->
<!--            </div>-->
<!---->
<!--            <div class="img">-->
<!--                <img src="assets/img/product/sub-1.svg" alt="" class="img-full">-->
<!--            </div>-->
<!---->
<!--            <div class="img">-->
<!--                <img src="assets/img/product/sub-1.svg" alt="" class="img-full">-->
<!--            </div>-->

            <?=$sub_img?>

        </div>

    </div>

    <div class="right">

        <div class="heading">
<!--            NIKINI - 22PM409-->
            <?=$name?>
        </div>

        <div class="stars flex">

            <div class="star">
                <i class="fa-solid fa-star"></i>
            </div>

            <div class="star">
                <i class="fa-solid fa-star"></i>
            </div>

            <div class="star">
                <i class="fa-solid fa-star"></i>
            </div>

            <div class="star">
                <i class="fa-solid fa-star"></i>
            </div>

            <div class="star">
                <i class="fa-solid fa-star"></i>
            </div>

        </div>

        <div class="des">
            Váy cưới NIKINI dáng công chúa kín đáo với thiết kế cúp ngực truyền thống rất phù hợp với những cô dâu yêu thích vẻ đẹp e lệ cổ điển. Thiết kế là sự kết hợp giữa Hạt cườm, Lụa Satin và Ren mi giúp nàng nổi bật lãng mạn trong chiếc váy cưới dài tay đơn giản.
        </div>

        <div class="price sell">
            Giá may:
            <span>
                        22.000.000
                    </span>
            vnd
        </div>

        <div class="price rent">
            Giá thuê:
            <span>
                5.000.000
            </span>
            vnd
        </div>

        <div class="cart flex">

            <div class="count">
                1
            </div>

            <div class="button">
                <a href="index.php?act=cart">
                    thêm vào giỏ hàng
                </a>
            </div>

        </div>

        <div class="detail flex">

            <div class="flex">
                <div class="icon">
                    <img src="assets/img/icon/checkr.svg" alt="" class="img-full">
                </div>
                <div class="title">Bảng số đo tiêu chuẩn</div>
            </div>

            <div class="flex">
                <div class="icon">
                    <img src="assets/img/icon/question.svg" alt="" class="img-full">
                </div>
                <div class="title">Câu hỏi thường gặp</div>
            </div>

            <div class="flex">
                <div class="icon">
                    <img src="assets/img/icon/play.svg" alt="" class="img-full">
                </div>
                <div class="title">Quy trình may đo váy cưới</div>
            </div>

        </div>

        <div class="share flex">

            <div class="title">
                Chia sẻ :
            </div>

            <div class="icon">
                <img src="assets/img/icon/fb.svg" alt="" class="img-full">
            </div>

            <div class="icon">
                <img src="assets/img/icon/insta.svg" alt="" class="img-full">
            </div>

            <div class="icon">
                <img src="assets/img/icon/twitter.svg" alt="" class="img-full">
            </div>

        </div>


    </div>


</div>

<section class="section2">

    <div class="heading">

        <div class="des">
            chi tiết sản phẩm
        </div>

        <div class="vector">
            <img src="assets/img/product/Vector 2.svg" alt="" class="img-full">
        </div>

    </div>

    <div class="box-sp flex">

        <div class="box flex">

            <div class="detail">
                Màu sắc
            </div>

            <div class="des">
                Trắng kem
            </div>

        </div>

        <div class="box flex">

            <div class="detail">
                Kiểu dáng áo cưới
            </div>

            <div class="des">
                Áo cưới công chúa
            </div>

        </div>

        <div class="box flex">

            <div class="detail">
                Kích cỡ
            </div>

            <div class="des">
                M
            </div>

        </div>

        <div class="box flex">

            <div class="detail">
                Chất liệu
            </div>

            <div class="des">
                Cườm, Lụa Satin, Ren lông mi
            </div>

        </div>

        <div class="box flex">

            <div class="detail">
                Kiểu cổ
            </div>

            <div class="des">
                Cổ thuyền
            </div>

        </div>

        <div class="box flex">

            <div class="detail">
                Kiểu tay
            </div>

            <div class="des">
                Tay dài
            </div>

        </div>

        <div class="box flex">

            <div class="detail">
                Kiểu lưng
            </div>

            <div class="des">
                Thắt dây
            </div>

        </div>

        <div class="box flex">

            <div class="detail">
                Dài đuôi
            </div>

            <div class="des">
                1M
            </div>

        </div>

    </div>

</section>

<form method="post" action="index.php?act=post_comment&id=<?=$idproduct?>" class="form-comment">

    <div class="heading">

        <div class="left">
            Bình luận
        </div>

        <div class="right">

        </div>

    </div>

    <div class="flex">

        <input type="text">

    </div>

    <button type="submit">
        Gửi nhận xét
    </button>


</form>

<section class="section3">

    <div class="heading">

        <div class="des">
            sản phẩm liên quan
        </div>

        <div class="vector">
            <img src="assets/img/product/Vector 2.svg" alt="" class="img-full">
        </div>

    </div>

    <div class="box-sp">

        <div class="box">

            <div class="img">
                <img src="assets/img/product/1.svg" alt="" class="img-full">
            </div>

            <div class="des">
                DIOR - 23LP512
            </div>

        </div>

        <div class="box">

            <div class="img">
                <img src="assets/img/product/1.svg" alt="" class="img-full">
            </div>

            <div class="des">
                OHARA - 23LP522
            </div>

        </div>

        <div class="box">

            <div class="img">
                <img src="assets/img/product/1.svg" alt="" class="img-full">
            </div>

            <div class="des">
                MALLORIE - 23LP518
            </div>

        </div>

    </div>

    <div class="button">
        Xem tất cả
    </div>

</section>