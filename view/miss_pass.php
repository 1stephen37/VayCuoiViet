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



    function reder_code() {
        $min = 1; // Giá trị nhỏ nhất trong dãy số
        $max = 10; // Giá trị lớn nhất trong dãy số
        $ouput = '';

        for($i = 0; $i < 6; $i++) {
            $randomNumber =  mt_rand($min, $max);

            $ouput .= $randomNumber;
        }
        return $ouput;
    }

    if(!isset($_SESSION['code_miss'])) {
        $_SESSION['code_miss'] = '';
        $_SESSION['code_miss'] = reder_code();
    }

    $boll_miss = post_reset($_SESSION['code_miss'],$_SESSION['id_user_miss']['id']);

    $reset_code = get_reset($_SESSION['id_user_miss']['id']);

    $check = '';

    $content = '
    
        <form action="index.php?act=miss_pass&author=true" method="post" class="code flex">

            <input name="codeValue" type="text" placeholder="nhập mã vào đây">

            <input onclick="return checkCode();" name="codeBtn" type="submit" value="xác nhận">

        </form>

    ';

    if(isset($_GET['author'])) {

        remove_reset(null,$_SESSION['id_user_miss']['id']);


        unset($_SESSION['code_miss']);

        $code_input = $_POST['codeValue'];

        if($code_input === $reset_code['reset']) {
            $content = '

                <form method="post" action="index.php?act=reset_pass" class="section1 flex">

    <div class="input flex">

        <div class="heading">

            Nhập mật khẩu mới

        </div>

        <input name="miss_pass_re"  type="password">

    </div>

    <div class="input flex">

        <div class="heading">
            Nhập lại mật khẩu
        </div>

        <input name="miss_pass_re2"  type="password">

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


