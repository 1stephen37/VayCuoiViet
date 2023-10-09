</main>

<?php
require_once 'view/form.php';
?>

<?php
if(!isset($_GET['act']) || ($_GET['act'] == '')) {
    echo '
            <script type="text/javascript" src="assets/js/index.js"></script>
            ';
}

if(isset($_GET['act']) && ($_GET['act'] != '')) {

    $page = $_GET['act'];

    switch($page) {
//                        case 'about':
//                            echo '
//                    <link rel="stylesheet" type="text/css" href="assets/css/about.css">
//                            ';
//                            break;
        case 'index':
            echo '
                            <script type="text/javascript" src="assets/js/index.js"></script>
                        ';
            break;
        case 'product':
            echo '
                         <script type="text/javascript" src="assets/js/product.js"></script>   
            ';
            break;
        case 'dress':
            echo '
                         <script type="text/javascript" src="assets/js/dress.js"></script>   
            ';
            break;
        case 'miss_pass':
            echo '
                         <script type="text/javascript" src="assets/js/miss_pass.js"></script>   
            ';
            break;
        case 'cart':
            echo '
                         <script type="text/javascript" src="assets/js/cart.js"></script>   
            ';
            break;
        default:
            break;

    }

}

        echo '
            <script type="text/javascript" src="assets/js/validator.js"></script>
        ';
//        if(isset($_SESSION['user']) && $_SESSION['user'] != '') {
//            echo '<script type="text/javascript" src="assets/js/login.js"></script>';
//        } else {
//            echo '<script type="text/javascript" src="assets/js/main.js"></script>';
//        }

        if(isset($_SESSION['user']) && $_SESSION['user'] != '') {
            echo '<script type="text/javascript" src="assets/js/login.js"></script>';
        } else if(isset($_SESSION['admin']) && $_SESSION['admin'] != '') {
            echo '<script type="text/javascript" src="assets/js/admin.js"></script>';
        } else {
            echo '<script type="text/javascript" src="assets/js/main.js"></script>';
        }



?>

    <div id="root_script">

    </div>

<script>

    document.addEventListener('DOMContentLoaded', function () {
        // Mong muốn của chúng ta
        Validator({
            form: '#sign-in',
            formGroupSelector: '.input',
            errorSelector: '.error-message',
            rules: [
                Validator.isRequired('#email_sign_in', 'vui lòng nhập email của bạn'),
                Validator.isEmail('#email_sign_in', 'bạn phải nhập đúng email'),
                Validator.isRequired('#user_password_sign_in', 'vui lòng nhập mật khẩu của bạn'),
                Validator.minLength('#user_password_sign_in', 6, 'mật khẩu phải dài hơn 6 kì tự'),
            ],
            onSubmit: '#form-sign-in'
        });


        Validator({
            form: '#sign-up',
            formGroupSelector: '.input',
            errorSelector: '.error-message',
            rules: [
                Validator.isRequired('#user_name_sign_up', 'vui lòng nhập email của bạn'),
                Validator.isEmail('#user_name_sign_up', 'vui lòng nhập email chính xác'),
                Validator.isRequired('#pass_name_sign_up', 'vui lòng nhập mật khẩu của bạn'),
                Validator.minLength('#pass_name_sign_up', 6, 'mật khẩu phải dài hơn 6 kí tự'),
            ],
            onSubmit: '.form-sign-in'
        });
    });

</script>







</body>
</html>