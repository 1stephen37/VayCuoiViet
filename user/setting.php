<?php

//    var_dump($_SESSION['user']);

    if($_SESSION['user']['img'] == '') {
        $icon = '
            <div class="icon_icon">
              <i class="fa-solid fa-user"></i>
            </div>
        ';

    } else {
        $img = $_SESSION['user']['img'];
        $icon = '
             <div class="icon_img">
                  <img src="../user_img/'.$img.'" class="img-full" alt="">
            </div>
        ';
    }

?>

<form id="form_update" class="form_update flex" action="index.php?account=setting&update=1" method="post" enctype="multipart/form-data">

    <div class="icon flex">
<!--        <img src="../user_img/b9a926ae7059a807f148.jpg" alt="">-->
        <?=$icon?>
<!--        <img src="../user_img/cat.jpg" alt="">-->

    </div>

    <div class="Up_img flex">

        <div class="text">
            Tải lên hình đại diện của bạn:
        </div>

        <input type="file" name="update_user_img">

    </div>


    <div class="input">

        <label for="update_user_name">
            Họ và Tên
            <input id="update_user_name" name="update_user_name" type="text" value="<?=$_SESSION['user']['name']?>">
        </label>

        <span class="error-message"></span>

    </div>

    <div class="input">

        <label for="update_user_email">
            Địa chỉ email
            <input id="update_user_email" name="update_user_email" type="text" value="<?=$_SESSION['user']['email']?>">
        </label>

        <span class="error-message"></span>

    </div>

    <div class="input">

        <label for="update_user_email">
            Số điện thoại
            <input id="update_user_phone" name="update_user_phone" type="text" value="<?=$_SESSION['user']['phone']?>">
        </label>

        <span class="error-message"></span>

    </div>

    <div class="input">

        <label for="update_user_email">
            Địa chỉ
            <input id="update_user_address" name="update_user_address" type="text" value="<?=$_SESSION['user']['address']?>">
        </label>

        <span class="error-message"></span>

    </div>

    <button name="update_user_btn" class="button" type="submit">Cập nhật</button>

</form>










