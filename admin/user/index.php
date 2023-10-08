
<?php

$users = get_all_user();

$user_string = '';

foreach ($users as $user){
    extract($user);

    $user_string .= '
        <div class="user flex grid">
    
            <div class="User_name">
                '.$name.'
            </div>
    
            <div class="role">
                '.$role.'
            </div>
    
            <div class="email">
                '.$email.'
            </div>
    
            <div class="phone">
                '.$phone.'
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

