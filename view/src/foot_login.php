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
        default:
            echo '
                <link rel="stylesheet" type="text/css" href="assets/js/index.js">
                        ';
            break;

    }

}



?>





<script type="text/javascript" src="assets/js/login.js"></script>

</body>
</html>