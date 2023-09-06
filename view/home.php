<section class="banner flex">

    <div class="title">

        <img src="assets/img/banner/title.svg" alt="" class="img-full">

    </div>

    <div class="button">
        Xem Ngay
    </div>

    <div class="sub-banner flex">

        <div class="img">
            <img src="assets/img/banner/1.svg" alt="" class="img-full">
        </div>

        <div class="img">
            <img src="assets/img/banner/2.svg" alt="" class="img-full">
        </div>

    </div>


</section>

<section class="section1 flex">

    <div class="left">

        <div class="heading">
            chương trình khuyến mãi - giá siêu rẻ
        </div>

        <div class="des">
            Nhân dịp khai trương cửa hàng mới - sự kiện khuyển mãi sẽ diễn ra từ 1 tháng sáu đến 1 tháng 7 nhằm tri ân những khách hàng đã luôn ủng hộ chúng tôi
        </div>

        <div class="button btn">
            mua ngay
        </div>

    </div>

    <div class="right">

        <img src="assets/img/section/1.svg" alt="" class="img-full">

    </div>


</section>

<section class="section2 flex">

    <div class="left">

        <div class="heading flex">
            Sản phẩm nổi bật nhất trong tháng
            <img src="assets/img/section/Vector 1.svg" alt="" class="img-full">
        </div>

        <div class="right">

            <div class="background"></div>

            <div class="img">

                <?php

                $hot = get_hot_sp('special');
//
//                $output = '';
//
                foreach ($hot as $item) {
//                    $output .= '<img src="upload/'.$item['img'].'" alt="" class="img-full">';
                    $img = 'upload/'.$item['img'];
                };
//
//                echo $output ;



                ?>

                <img src="<?=$img?>" alt="" class="img-full">

            </div>

        </div>

        <div class="des">
            là sản phẩm có số lượt mua và thuê nhiều nhất trong tháng, có giá thành và chất lượng tốt và được đại đa số chị em phụ nữ lựa chọn
        </div>

        <div class="button btn">
            mua ngay
        </div>

        <div class="sub-des">
            <a href="index.php?act=dress">
                xem thêm
            </a>
        </div>

    </div>

    <div class="vetor">
        <img src="assets/img/section/Vector2.svg" alt="" class="img-full">
    </div>

    <div class="des name flex">
        <div class="des">
            DIOR - 23LP512
        </div>
        <div class="vector">
            <img src="assets/img/section/Vector 3.svg" alt="" class="img-full">
        </div>
    </div>

    <div class="des price">
        <div class="des">
            Giá may: 28,000,000 ₫
        </div>

        <div class="vector">
            <img src="assets/img/section/Vector 4.svg" alt="" class="img-full">
        </div>
    </div>

    <div class="des sell">
        <div class="des">
            Giá thuê: 5,000,000 ₫
        </div>

        <div class="vector">
            <img src="assets/img/section/Vector 6.svg" alt="" class="img-full">
        </div>
    </div>

    <div class="right">

        <div class="background"></div>

        <div class="img">

            <?php

                $output = '';

                foreach ($hot as $item) {
                    $output .= '<img src="upload/'.$item['img'].'" alt="" class="img-full">';
                };

                echo $output ;
            ?>

<!--            <img src="assets/img/section/product1.svg" alt="" class="img-full">-->
        </div>

    </div>


</section>

<section class="section3">

    <div class="heading">

        <div class="des">
            Mua - Thuê Váy Cưới
        </div>

        <div class="vector">
            <img src="assets/img/section/Vector 7.svg" alt="" class="img-full">
        </div>
    </div>

    <div class="box grid">

        <div class="box-3">

            <div class="img">
                <img src="assets/img/section/product2.svg" alt="" class="img-full">
                <a href="index.php?act=dress" class="effect"></a>
            </div>
            <div class="name">
                DIOR - 23LP512
            </div>
        </div>

        <div class="box-3">

            <div class="img">
                <img src="assets/img/section/product3.svg" alt="" class="img-full">
                <a href="index.php?act=dress" class="effect"></a>
            </div>

            <div class="name">
                DIOR - 23LP512
            </div>
        </div>

        <div class="box-3">

            <div class="img">
                <img src="assets/img/section/product4.svg" alt="" class="img-full">
                <a href="index.php?act=dress" class="effect"></a>
            </div>

            <div class="name">
                DIOR - 23LP512
            </div>

        </div>

    </div>

    <div class="button">
        xem tất cả
    </div>

</section>

<section class="section4">

    <div class="heading">

        <div class="des">
            Quay Phim - Chụp Ảnh Cưới
        </div>

        <div class="vector">
            <img src="assets/img/section/Vector 8.svg" alt="" class="img-full">
        </div>

    </div>

    <div class="content flex">

        <div class="left flex">

            <div class="top flex">

                <div class="left">
                    Nhằm mang đến sự tiện lợi cho khách hàng, hiện nay Váy Cưới Việt đã cho ra mắt dịch vụ quay phim - chụp ảnh cưới kèm theo những dịch vụ khác, với kinh nghiệm nhiều năm hành nghề và dàn nhiếp ảnh gia được tuyển chọn kĩ càng thêm vào thái độ làm việc chuyên nghiệp sẽ mang đến cho khách hàng những trải nghiệm tốt nhất
                </div>

                <div class="right">
                    <img src="assets/img/section/record2.svg" alt="" class="ing-full">
                </div>

            </div>

            <div class="bottom">
                <img src="assets/img/section/record1.svg" alt="" class="img-full">

            </div>

        </div>

        <div class="right">
            <img src="assets/img/section/record3.svg" alt="" class="img-full">
        </div>

    </div>

    <div class="button">
        Xem thêm
    </div>

</section>

<section class="section5">

    <div class="heading">

        <div class="des">
            makeup
        </div>

        <div class="vector">
            <img src="assets/img/section/Vector 9.svg" alt="" class="img-full">
        </div>
    </div>

    <div class="content flex">

        <div class="left flex">

            <div class="top">
                Nhằm mang đến sự tiện lợi cho khách hàng, hiện nay Váy Cưới Việt đã cho ra mắt dịch vụ makeup cho cô dâu, với kinh nghiệm nhiều năm hành nghề và dàn chuyên viên makeup được tuyển chọn kĩ càng, thêm vào thái độ làm việc chuyên nghiệp sẽ mang đến cho khách hàng những trải nghiệm tốt nhất
            </div>

            <div class="bottom">
                <img src="assets/img/section/makeup2.svg" alt="" class="img-full">
            </div>

        </div>

        <div class="right">
            <img src="assets/img/section/makeup1.svg" alt="" class="img-full">
        </div>

    </div>

    <div class="button">
        Xem thêm
    </div>


</section>

<section class="section6">

    <div class="heading">

        <div class="des">
            vì sao lại chọn chúng tôi ?
        </div>

        <div class="vector">
            <img src="assets/img/section/Vector 10.svg" alt="" class="img-full">
        </div>

    </div>

    <div class="box grid">

        <div class="box-3">
            <img src="assets/img/section/why1.svg" alt="" class="img-full">
        </div>

        <div class="box-3 flex">
            Là thương hiệu uy tín và đã có nhiều năm kinh nghiệm trong lĩnh vực cho thuê, mua bán váy cưới và vẫn đang không ngừng cải thiện dịch vụ để đem đến trải nghiệm tốt nhất cho khách hàng
        </div>

        <div class="box-3">
            <img src="assets/img/section/why2.svg" alt="" class="img-full">
        </div>

    </div>

</section>

<section class="section7 flex">

    <div class="heading">
        <div class="des">
            Để Lại Số Điện Thoại Để Được Chuyên Viên Tư Vấn
        </div>
        <div class="sub-des">
            Để Lại Số Điện Thoại Ngay
        </div>
        <div class="vector">
            <img src="assets/img/section/Vector 11.svg" alt="" class="img-full">
        </div>
    </div>

    <div class="input">
        <input name="phone_number" class="img-full" placeholder="số điện thoại của bạn" type="text">
    </div>

    <div class="button">
        Gửi
    </div>

</section>