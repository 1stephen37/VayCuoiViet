<div class="banner flex">

    <div class="heading">
        chào Stephen Nguyễn !
    </div>

    <div class="vector">
        <img src="../assets/img/about/Vector 1.svg" alt="" class="img-full">
    </div>

</div>

<section class="section1 flex">

    <div class="left flex">

        <div class="admin-link">
            <i class="fa-solid fa-sliders"></i>
            <a href="index.php?act=index">
                bảng điều khiển
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-solid fa-bag-shopping"></i>
            <a href="index.php?act=danhmuc">
                danh mục
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-solid fa-cart-shopping"></i>
            <a href="index.php?act=sanpham">
                sản phẩm
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-solid fa-user"></i>
            <a href="index.php?act=user">
                người dùng
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-solid fa-tag"></i>
            <a href="index.php?act=brand">
                thương hiệu
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-sharp fa-solid fa-truck-fast"></i>
            <a href="index.php?act=order">
                đơn hàng
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-solid fa-pen-clip"></i>
            <a href="index.php?act=comment">
                đánh giá
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-solid fa-right-from-bracket"></i>
            <a href="../index.php?act=logout">
                đăng xuất
            </a>
        </div>

    </div>

    <div class="right">

        <?php

        $users = get_all_user();

        $user_string = '';

        foreach ($users as $user){
            extract($user);

            $user_string .= '
                <div class="user flex grid">
            
                    <div class="User_name">
                        '.$UserName.'
                    </div>
            
                    <div class="pass">
                        '.$PassWord.'
                    </div>
            
                    <div class="role">
                        '.$role.'
                    </div>
            
                    <div class="email">
                        '.$Email.'
                    </div>
            
                    <div class="phone">
                        '.$Phone.'
                    </div>
            
                </div>
        ';
        }

        ?>

        <div class="display-cata flex ">

            <div class="nav grid flex">

                <div class="User_name">
                    Tên
                </div>

                <div class="pass">
                    Mật khẩu
                </div>

                <div class="role">
                    vai trò
                </div>

                <div class="email">
                    email
                </div>

                <div class="phone">
                    điện thoại
                </div>

            </div>

            <?=$user_string?>



            <!--    <div class="user flex grid">-->
            <!---->
            <!--        <div class="User_name">-->
            <!--            admin-->
            <!--        </div>-->
            <!---->
            <!--        <div class="pass">-->
            <!--            mat khau-->
            <!--        </div>-->
            <!---->
            <!--        <div class="role">-->
            <!--            vai tro-->
            <!--        </div>-->
            <!---->
            <!--        <div class="email">-->
            <!--            email-->
            <!--        </div>-->
            <!---->
            <!--        <div class="phone">-->
            <!--            so dien thoai-->
            <!--        </div>-->
            <!---->
            <!--    </div>-->



        </div>

    </div>

</section>

