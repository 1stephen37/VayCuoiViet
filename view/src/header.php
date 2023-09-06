<header>

    <div class="nav flex">

        <div id="sign-button" class="icon">
            <i class="fa-solid fa-user"></i>
        </div>

        <div id="about" class="nav-link">
            <a href="index.php?act=about">
                về chúng tôi
            </a>
        </div>

        <div id="libary" class="nav-link">
            <a href="index.php?act=thuvien">
                thư viện
            </a>
        </div>

        <div id="logo" class="nav-link">
            <a href="index.php?act=index">
                <img src="assets/img/logo/logo.svg" alt="" class="img-full">
            </a>
        </div>

        <div class="nav-link">
            các dịch vụ
            <i class="fa-solid fa-angle-down"></i>
        </div>

        <div id="contact" class="nav-link">
            <a href="index.php?act=contact">
                liên hệ
            </a>
        </div>

        <div onclick="show();" id="search" class="icon">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>

        <div class="icon-mobile">
            <i class="fa-sharp fa-solid fa-bars"></i>
        </div>

    </div>

    <div class="mobile-menu flex close">

        <a href="index.php?act=about" class="nav_mobile">
            Về chúng tối
        </a>

        <a href="index.php?act=thuvien" class="nav_mobile">
            Thư viện
        </a>

        <a href="index.php?act=contact" class="nav_mobile">
            Liên hệ
        </a>

        <a href="index.php?act=dress" class="nav_mobile">
            Váy cưới
        </a>

        <a href="index.php?act=error" class="nav_mobile">
            Quay - Chụp ảnh cưới
        </a>

        <a href="index.php?act=error" class="nav_mobile">
            Makeup
        </a>

        <a class="nav_mobile">
            Đăng nhập
        </a>

    </div>

    <div id="search-input" class="search flex close">

        <div class="input">
            <input placeholder="Tìm kiếm sản phẩm" class="img-full" name="search" type="text">
        </div>

        <div class="icon">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>

    </div>

    <div id="sub-menu" class="sub-menu flex">
        <a href="index.php?act=dress">Mua - Thuê váy cưới</a>
        <a href="">Makeup</a>
        <a href="">Quay phim - chụp ảnh</a>
    </div>

    <a href="index.php?act=cart" class="header_cart">
        <span class="count">
            <?php
            if(isset($_SESSION['cart']) && ($_SESSION['cart'] != '') ) {
                echo count($_SESSION['cart']);
            } else {
                echo 0;
            }
            ?>
        </span>
        <i class="fa-solid fa-cart-shopping"></i>
    </a>

</header>

