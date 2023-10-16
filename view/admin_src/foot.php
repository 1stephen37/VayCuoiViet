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
                <link rel="stylesheet" type="text/css" href="../assets/js/index.js">
                        ';
            break;

    }

}
echo '<script type="text/javascript" src="../assets/js/validator.js"></script>';

echo '<script type="text/javascript" src="../assets/js/admin.js"></script>';



?>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Lấy tham chiếu đến đối tượng canvas
    var ctx = document.getElementById('myChart').getContext('2d');

    // Tạo dữ liệu cho biểu đồ
    var data = {
        labels: ['Thể loại 1', 'Thể loại 2', 'Thể loại 3', 'Thể loại 4'],
        datasets: [{
            label: 'Số lượng',
            data: [10, 20, 30, 5],
            backgroundColor: ['red', 'blue', 'green', 'yellow']
        }]
    };

    // Cấu hình biểu đồ
    var options = {};

    // Tạo biểu đồ miền
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: data,
        options: options
    });
</script>

</body>
</html>