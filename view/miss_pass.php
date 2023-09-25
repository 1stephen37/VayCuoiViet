<?php

//    $email = $_POST['email_miss'];

//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
//
//require_once 'PHPMailer-master/src/PHPMailer.php';
//require_once 'PHPMailer-master/src/Exception.php';
//require_once 'PHPMailer-master/src/SMTP.php';
//
//$mail = new PHPMailer(true);
//
//$mail->isSMTP();
//$mail->Host = 'smtp.gmail.com.';
//$mail->SMTPAuth = true;
//$mail->Username = 'ngamingyahoo@gmail.com';
//$mail->Password = 'tovc smtk yvds lfgz';
//$mail->SMTPSecure = 'tls';
//$mail->Port = 587;
//
//
//$mail->setFrom('sender@example.com', 'Sender Name');
//$mail->addAddress('dienndtps32003@fpt.edu.vn', 'Recipient Name');
//
//// Thiết lập nội dung email
//$mail->Subject = 'Subject of the email';
//$mail->Body = 'Content of the email';
//
//// Gửi email
//if ($mail->send()) {
//    echo 'Email sent successfully';
//} else {
//    echo 'Error: ' . $mail->ErrorInfo;
//}

    $min = 1; // Giá trị nhỏ nhất trong dãy số
    $max = 10; // Giá trị lớn nhất trong dãy số
    $code = '';

    for($i = 0; $i < 6; $i++) {
        $randomNumber =  mt_rand($min, $max);

        $code .= $randomNumber;
    }

    $_SESSION['code'] = $code;

    echo $code;

//    $content = '';


    $content = '
    
        <form action="index.php?act=miss_pass&author=true" method="post" class="code flex">

            <input name="codeValue" type="text" placeholder="nhập mã vào đây">

            <input onclick="return checkCode();" name="codeBtn" type="submit" value="xác nhận">

        </form>

    ';

    if(isset($_GET['author']) ) {
        $code_input = $_POST['codeValue'];

        echo $code_input;

        if($code_input == $_SESSION['code']) {
            $content = '
                
            <form method="post" action="index.php?act=miss_pass&reset=true" class="section1 flex">

    <div class="input flex">

        <div class="heading">

            Nhập mật khẩu mới

        </div>

        <input name="miss_pass_re" type="text">

    </div>

    <div class="input flex">

        <div class="heading">
            Nhập lại mật khẩu
        </div>

        <input name="miss_pass_re2" type="text">

    </div>

    <input onclick="return checkPass();" type="submit" value="đổi mật khẩu">

</form>
                
            ';
        } else {
            $content = '

                 <form action="index.php?act=miss_pass" method="post" class="code flex">

                    <input name="codeValue" type="text" placeholder="bạn đã nhập sai mã">

                    <input onclick="return checkCode();" name="codeBtn" type="submit" value="xác nhận">

                </form>

            ';
        }

    }

    if(isset($_POST['codeBtn']) && ($_POST['codeBtn'])) {






    }


?>

<div class="banner flex">

    <div class="heading">

        <div class="des">
            Thay đổi mật khẩu
        </div>

        <div class="vector">
            <img src="assets/img/cart/Vector 1.svg" alt="" class="img-full">
        </div>

    </div>

</div>



<div class="notice close">

    <div class="container">
        Chúng tôi đã gửi 1 dẫy số gồm 6 số ngẫu nhiên đến mail của bạn
        <br>nhập dãy số đó vào để có thể đặt lại mật khẩu của bạn
    </div>

</div>



<?=$content?>


