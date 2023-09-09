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







</body>
</html>