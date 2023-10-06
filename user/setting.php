<?php

//    var_dump($_SESSION['user']);



?>

<div class="form_update">

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


    <div class="name">

        <?=$_SESSION['user']['name']?>

    </div>

    <div class="email">

        <?=$_SESSION['user']['email']?>

    </div>

    <div class="phone">

        <?=$_SESSION['user']['phone']?>

    </div>

</div>










