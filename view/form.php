<div id="form" class="form close">

    <div class="container">

        <div class="heading">
            Thông Tin Đặt Hàng
        </div>

        <div class="content flex">

            <div class="left">
                <img src="assets/img/product/product.svg" alt="" class="img-full">
            </div>

            <div class="right">

                <div class="heading">
                    DIOR - 23LP512
                </div>

                <div class="input">
                    <input class="img-full" type="text" placeholder="địa chỉ thường trú">
                </div>

                <div class="input">
                    <input class="img-full" type="text" placeholder="tên anh chị đặt hàng">
                </div>

                <div class="input">
                    <input class="img-full" type="text" placeholder="số điện thoại đặt hàng">
                </div>

                <div class="select">
                    <select class="img-full" name="pay" id="pay">
                        <option value="">tiền mặt</option>
                        <option value="">momo</option>
                        <option value="">ngân hàng</option>
                    </select>
                </div>

                <div class="price">
                    Giá may: 28,000,000 ₫
                </div>

            </div>

        </div>

        <div class="button">
            Xác nhận đơn hàng
        </div>

    </div>

</div>

<div id="sign-in" class="sign-in close ">

    <div class="container">

        <div class="heading">

            <div class="des">
                đăng nhập
            </div>

            <div class="vector">
                <img src="assets/img/section/Vector 1.svg" alt="" class="img-full">
            </div>
        </div>

        <div class="content flex">

            <div class="left">
                <img src="assets/img/banner/1.svg" alt="" class="img-full">
            </div>

            <div class="right">

                <form id="form-sign-in" method="POST" action="index.php?act=login" class="form-sign-in flex">

                    <div class="input flex">
                        <label for="user_name">Email</label>

                        <input id="email_sign_in" name="email_sign_in" placeholder="Nhập tài khoản của bạn" type="text">
                    </div>

                    <div class="input flex">
                        <label for="user_password">Mật Khẩu</label>

                        <input id="user_password_sign_in" name="user_password_sign_in" placeholder="Nhập mật khẩu của bạn" type="password">
                    </div>


                    <input onclick="return chek_form_sign_in();" name="sign_in_submit" type="submit" value="Đăng nhập">


                </form>

                <div class="quest">
                    không có tài khoản ?
                </div>

                <div class="miss">
                    quên mật khẩu ?
                </div>


            </div>

        </div>

        <div class="sub-heading">
            Hoặc đăng nhập bằng:
        </div>

        <div class="social flex">

            <img src="assets/img/popup/gg.svg" alt="" class="img-full">
            <img src="assets/img/popup/fb.svg" alt="" class="img-full">
            <img src="assets/img/popup/insta.svg" alt="" class="img-full">
            <img src="assets/img/popup/linked.svg" alt="" class="img-full">

        </div>

    </div>

</div>

<div id="sign-up" class="sign-up close">

    <div class="container">

        <div class="heading">

            <div class="des">
                đăng kí
            </div>

            <div class="vector">
                <img src="assets/img/section/Vector 1.svg" alt="" class="img-full">
            </div>
        </div>

        <div class="content flex">

            <div class="left">
                <img src="assets/img/banner/1.svg" alt="" class="img-full">
            </div>

            <div class="right">

                <form method="POST" action="index.php?act=signup" class="form-sign-in flex">

                    <div class="input flex">
                        <label for="">Tài Khoản</label>

                        <input name="user_name_sign_up" id="user_name_sign_up" placeholder="Nhập tài khoản của bạn" type="text">
                    </div>

                    <div class="input flex">
                        <label for="">Mật Khẩu</label>

                        <input name="pass_name_sign_up" id="pass_name_sign_up" placeholder="Nhập mật khẩu của bạn" type="text">
                    </div>

                    <input name="sign-in" id="user_password_sign_up" onclick="return chek_form_sign_up();" type="submit" value="Đăng kí">

                </form>


            </div>


        </div>

        <div class="sub-heading">
            Liên kết với mạng xã hội :
        </div>

        <div class="social flex">

            <img src="assets/img/popup/gg.svg" alt="" class="img-full">
            <img src="assets/img/popup/fb.svg" alt="" class="img-full">
            <img src="assets/img/popup/insta.svg" alt="" class="img-full">
            <img src="assets/img/popup/linked.svg" alt="" class="img-full">

        </div>

    </div>

</div>

<div id="miss_pass" class="miss_pass close">

    <div class="container">

    </div>

</div>