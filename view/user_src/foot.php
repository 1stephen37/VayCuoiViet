</main>

<?php
require_once '../view/form.php';
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
                 <script type="text/javascript" src="../assets/js/index.js"></script>
                        ';
            break;
        default:
            echo '
                <script type="text/javascript" src="../assets/js/index.js"></script>
                        ';
            break;

    }

}

echo '
        <script type="text/javascript" src="../assets/js/validator.js"></script>
     ';

//        if(isset($_SESSION['user']) && $_SESSION['user'] != '') {
//            echo '<script type="text/javascript" src="assets/js/login.js"></script>';
//        } else {
//            echo '<script type="text/javascript" src="assets/js/main.js"></script>';
//        }

if(isset($_SESSION['user']) && $_SESSION['user'] != '') {
    echo '<script type="text/javascript" src="../assets/js/login.js"></script>';
} else if(isset($_SESSION['admin']) && $_SESSION['admin'] != '') {
    echo '<script type="text/javascript" src="../assets/js/admin.js"></script>';
} else {
    echo '<script type="text/javascript" src="../assets/js/main.js"></script>';
}



?>


<script>

    document.addEventListener('DOMContentLoaded', function () {
        // Mong muốn của chúng ta
        Validator({
            form: '#form_update',
            formGroupSelector: '.input',
            errorSelector: '.error-message',
            rules: [
                Validator.isRequired('#update_user_name', 'vui lòng nhập tên của bạn'),
                Validator.minLength('#update_user_name', 6, 'tên của bạn phải dài hơn 6 kì tự'),
                Validator.isRequired('#update_user_email', 'vui lòng nhập email của bạn'),
                Validator.isEmail('#update_user_email', 'vui lòng nhập email đúng định dạng'),
                Validator.isRequired('#update_user_phone', 'vui lòng nhập số điện thoại của bạn'),
                Validator.minLength('#update_user_phone', 10, 'số điện thoại phải có 10 số'),
                Validator.maxLength('#update_user_phone', 10, 'số điện thoại phải có 10 số'),
                Validator.isRequired('#update_user_address', 'vui lòng nhập địa chỉ của bạn'),
                Validator.minLength('#update_user_address', 10, 'địa chỉ phải có 10 trên 10 kí tự'),
                Validator.isString('#update_user_address', 'vui lòng nhập địa chỉ là 1 dãy kí tự')

            ],
            onSubmit: '#form-sign-in'
        });

    });

</script>



</body>
</html>