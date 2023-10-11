<?php

//    var_dump($_SESSION['user']);



?>

<form class="form_update flex" method="post" enctype="multipart/form-data">

    <div class="icon flex">

        <div class="icon_img">

        </div>

        <div class="icon_icon">
            <i class="fa-solid fa-user"></i>
        </div>

    </div>

    <div class="Up_img flex">

        <div class="text">
            Tải lên hình đại diện của bạn:
        </div>

        <input type="file">

    </div>


    <div class="input">

        <label for="update_user_name">
            Họ và Tên
            <input name="update_user_name" type="text" value="<?=$_SESSION['user']['name']?>">
        </label>

    </div>

    <div class="input">

        <label for="update_user_email">
            Địa chỉ email
            <input name="update_user_email" type="text" value="<?=$_SESSION['user']['email']?>">
        </label>

    </div>

    <div class="input">

        <label for="update_user_email">
            Số điện thoại
            <input name="update_user_email" type="text" value="<?=$_SESSION['user']['phone']?>">
        </label>

    </div>

    <div class="input">

        <label for="update_user_email">
            Địa chỉ
            <input name="update_user_email" type="text" value="<?=$_SESSION['user']['address']?>">
        </label>

    </div>

    <button class="button" type="submit">Cập nhật</button>

</form>










