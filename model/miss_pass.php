<?php

//    $email = $_POST['email_miss'];

    ini_set('SMTP', 'smtp.example.com');
    ini_set('smtp_port', 23);

    $email = "ngamingyahoo@gmail.com";

    $subject = "cập nhật mật khẩu";

    $message = "ấn vào đây để câp nhật mật khẩu";

    $header  =  "From:myemail@exmaple.com \r\n";
    $header .=  "Cc:other@exmaple.com \r\n";

    $check = mail($email,$subject, $message,$header);

    if($check) {
//        header('location: index.php');
        echo "false";
    } else {
        echo "true";
    }


?>