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

<div id="sign-in" class="sign-in ">

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
                        <span class="error-message"></span>
                    </div>


                    <div class="input flex">
                        <label for="user_password">Mật Khẩu</label>
                        <input id="user_password_sign_in" name="user_password_sign_in" placeholder="Nhập mật khẩu của bạn" type="password">
                        <span class="error-message"></span>
                    </div>


                    <input name="sign_in_submit" type="submit" value="Đăng nhập">


                </form>

                <div class="quest">
                    không có tài khoản ?
                </div>

                <div class="miss">
                    quên mật khẩu ?
                </div>


            </div>

        </div>

        <div class="other_login flex">

            <div class="sub-heading">
                Hoặc đăng nhập bằng:
            </div>

            <div class="social flex">

                <img src="assets/img/popup/gg.svg" alt="" class="img-full">
                <img src="assets/img/popup/fb.svg" alt="" class="img-full">

            </div>

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

    <form action="index.php?act=miss_pass" method="post" class="container">

        <div class="heading">

            <div class="des">
                Nhập email
            </div>

            <div class="vector">
                <img src="assets/img/section/Vector 7.svg" alt="" class="img-full">
            </div>

        </div>

        <div class="input">

            <input name="email_miss" type="email" class="img-full">

        </div>

        <input value="Gửi mail" name="missBtn" onclick="return check_mail_miss();" type="submit"  class="button">

    </form>

</div>

<div id="sorry" class="sorry flex close ">

    <div class="container">

        <div class="heading">
            Chúng tôi xin lỗi vì sự bất tiện này !
        </div>

        <div class="des">
            Chức năng bạn đang truy cập hiện tại đang bảo trì
        </div>

    </div>

</div>

<div id="question" class="question flex close">

    <div class="container">

        <div class="heading">
            Bạn có muốn đăng nhập không ?
        </div>

        <div class="des">
            trở thành hội viên của chúng tôi sẽ có rất nhiều ưu đãi đặc biệt dành cho khách hàng thân thiết
        </div>

       <div class="button-flex flex">

           <div class="button">
               có
           </div>

           <div class="button">
               không
           </div>

       </div>



    </div>

</div>

<div id="information" class="information flex close">

    <div class="container">

        <div class="heading">

            <div class="des">
                Thông tin đặt hàng
            </div>

            <div class="vector">
                <img src="assets/img/popup/Vector 7.svg" alt="" class="img-full">
            </div>

        </div>

        <div class="logo">

            <img src="assets/img/logo/logo.svg" alt="log" class="img-full">

        </div>

        <form action="" class="form_information flex">
            
            <div class="form-group">
                <label for="name_information">
                    <input name="name_information" placeholder="tên anh/chị đặt hàng" type="text">
                </label>
            </div>

            <div class="form-group">
                <label for="address_information">
                    <input name="address_information" placeholder="địa chỉ giao hàng" type="text">
                </label>
            </div>

            <div class="form-group">
                <label for="phone_information">
                    <input name="phone_information" placeholder="số điện thoại của anh/chị" type="text">
                </label>
            </div>

            <div class="form-group">
                <label for="email_information">
                    <input name="email_information" placeholder="Email của anh/chị" type="text">
                </label>
            </div>

            <div class="form-group">
                <label for="delivery_information">
                    <select name="delivery_information">
                        <option value="fast">Giao nhanh</option>
                        <option value="fast">Giao tiết kiệm</option>
                        <option value="fast">Giao hỏa tốc</option>
                    </select>
                </label>
            </div>

            <div class="form-group">
                <label for="delivery_information">
                    <select name="pay_information">
                        <option value="fast">Tiền mặt</option>
                        <option value="fast">Giao tiết kiệm</option>
                        <option value="fast">Giao hỏa tốc</option>
                    </select>
                </label>
            </div>

            <div class="total">
                Tổng tạm tính: 28,000,000 đ
            </div>

            <input name="submit_btn_information" type="submit" value="Xác nhận đơn hàng">
            
        </form>



    </div>

</div>