<?php

    $idproduct = $_GET['idproduct'];

    $detail = get_detail($idproduct);

    $imgs = getImage_full($idproduct);

    $id_cata = getIdCata($idproduct);

    $sp_lienquan = get_product_lienquan($id_cata,$idproduct);

    $html_sp_lienquan = '';

    foreach ($sp_lienquan as $sp) {

        $img_lienquan = getImage($sp['id']);

        $html_sp_lienquan .= '
        <div class="box">

            <div class="img">
                <img src="upload/'.$img_lienquan['name'].'" alt="" class="img-full">
            </div>

            <div class="des">
                '.$sp['name'].'
            </div>

        </div>
        ';
    }

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

    $comments = get_comment_by_id_product($idproduct);

    $comment_html = '';

    if($comments) {
        foreach ($comments as $comment) {
            extract($comment);

            $comment_html .= '
                <div class="comment-content flex">

            <div class="left flex">

                <div class="flex">
                    <div class="avatar flex">
                        <i class="fa-solid fa-user"></i>
                    </div>

                    <div class="name flex">
                        <p>
                            '.$_SESSION['user']['name'].'
                        </p>
                    </div>
                </div>


                <i class="date-time">
                    '.$date.'
                </i>


            </div>

            <div class="right">
                '.$content.'
            </div>

        </div>
            ';

        }
    } else {
        $comment_html .= ' 
            <h1 style="text-align: center">sản phẩm hiện chưa có cảm nhận của khách hàng</h1>
        ';
    }


    if(isset($_GET['post_comment']) && ($_GET['post_comment'] != '')) {

        if(isset($_SESSION['user']) && $_SESSION['user'] != '') {

            if(isset($_POST['comment_content']) && ($_POST['comment_content'] != '')) {

                $currentDateTime = date( 'H:i:s d/m/Y');

                echo $currentDateTime;

                $post_comment = post_comment_by_id_product(null, $_POST['comment_content'], $_SESSION['user']['id'], $idproduct, $currentDateTime);

                header('Location: index.php?act=product&idproduct='.$idproduct);

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


<form method="post" action="index.php?act=product&idproduct=<?=$idproduct?>&post_comment=true" class="form-comment flex">

    <div class="non-comment flex close">

        <div class="button">đăng nhập để comment</div>

    </div>

    <div class="heading">

        <div class="des">
            Bình Luận
        </div>
        <div class="vector">
            <img src="assets/img/product/Vector 2.svg" alt="" class="img-full">
        </div>

    </div>

    <div class="comment flex">

        <?=$comment_html?>

<!--        <div class="comment-content flex">-->
<!---->
<!--            <div class="left flex">-->
<!---->
<!--                <div class="flex">-->
<!--                    <div class="avatar flex">-->
<!--                        <i class="fa-solid fa-user"></i>-->
<!--                    </div>-->
<!---->
<!--                    <div class="name flex">-->
<!--                        <p>-->
<!--                            Nguyễn Tiến-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--                <i class="date-time">-->
<!--                    11:17 4/10/2023-->
<!--                </i>-->
<!---->
<!---->
<!--            </div>-->
<!---->
<!--            <div class="right">-->
<!--                Trong cơ sở dữ liệu, "onDelete: Cascade" là một thuộc tính được sử dụng để xác định hành vi xóa dữ liệu liên quan đến một thực thể khi thực thể đó bị xóa.-->
<!---->
<!--                Khi một quan hệ liên quan được định nghĩa giữa hai thực thể trong cơ sở dữ liệu, ví dụ như quan hệ cha-con (parent-child) hoặc quan hệ tham chiếu (reference relationship), thuộc tính "onDelete: Cascade" có thể được sử dụng để đảm bảo rằng khi thực thể cha (parent entity) bị xóa, tất cả các thực thể con (child entities) liên quan sẽ cũng bị xóa theo.-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--        <div class="comment-content flex">-->
<!---->
<!--            <div class="left flex">-->
<!---->
<!--                <div class="flex">-->
<!--                    <div class="avatar flex">-->
<!--                        <i class="fa-solid fa-user"></i>-->
<!--                    </div>-->
<!---->
<!--                    <div class="name flex">-->
<!--                        <p>-->
<!--                            Nguyễn Tiến-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--                <i class="date-time">-->
<!--                    11:17 4/10/2023-->
<!--                </i>-->
<!---->
<!---->
<!--            </div>-->
<!---->
<!--            <div class="right">-->
<!--                Trong cơ sở dữ liệu, "onDelete: Cascade" là một thuộc tính được sử dụng để xác định hành vi xóa dữ liệu liên quan đến một thực thể khi thực thể đó bị xóa.-->
<!---->
<!--                Khi một quan hệ liên quan được định nghĩa giữa hai thực thể trong cơ sở dữ liệu, ví dụ như quan hệ cha-con (parent-child) hoặc quan hệ tham chiếu (reference relationship), thuộc tính "onDelete: Cascade" có thể được sử dụng để đảm bảo rằng khi thực thể cha (parent entity) bị xóa, tất cả các thực thể con (child entities) liên quan sẽ cũng bị xóa theo.-->
<!--            </div>-->
<!---->
<!--        </div>-->

    </div>

    <div class="flex">

        <div class="infor flex">

            <div class="avatar flex">
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="name flex">
                <p>
                    <?=$_SESSION['user']['name']?>
                </p>
            </div>

        </div>

        <textarea placeholder="Hãy cho chúng tôi biết cảm nghĩ của bạn sau khi sử dụng sản phẩm" name="comment_content"></textarea>

    </div>

    <input class="button" type="submit" value="Gửi nhận xét">


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

        <?=$html_sp_lienquan?>

<!--        <div class="box">-->
<!---->
<!--            <div class="img">-->
<!--                <img src="assets/img/product/1.svg" alt="" class="img-full">-->
<!--            </div>-->
<!---->
<!--            <div class="des">-->
<!--                OHARA - 23LP522-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!---->
<!--        <div class="box">-->
<!---->
<!--            <div class="img">-->
<!--                <img src="assets/img/product/1.svg" alt="" class="img-full">-->
<!--            </div>-->
<!---->
<!--            <div class="des">-->
<!--                MALLORIE - 23LP518-->
<!--            </div>-->
<!---->
<!--        </div>-->

    </div>

    <div class="button">
        Xem tất cả
    </div>

</section>