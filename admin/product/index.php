
<?php

if(isset($_GET['sanpham']) && ($_GET['sanpham'] != '') ){

    $product = $_GET['sanpham'];

    switch ($product) {

        case 'remove': {

            if(isset($_GET['remove']) && ($_GET['remove'] > 0) ) {
                echo $_GET['remove'];
                $id_rm = $_GET['remove'];
                del_product($id_rm);

                header('location: index.php?act=sanpham');
            }

        }

        case 'edit': {



            require_once 'edit.php';
            break;
        }

        case 'add': {

            if(isset($_POST['addSubmit']) && ($_POST['addSubmit'])) {

                $name = $_POST['nameproduct'];
                $price = $_POST['priceproduct'];
                $img = $_FILES['imgProduct']["name"];
                $idCata = $_POST['idCataProduct'];
                $detail = $_POST['detailProduct'];
                $size = $_POST['sizeProduct'];

                $file="../upload/".basename($_FILES['imgProduct']['name']) ;
                print_r($file);
                if(move_uploaded_file($_FILES['imgProduct']['tmp_name'],$file)){
                    echo "thanh cong";
                }else{
                    echo "that bai";
                }

                add_product($name,$price,$img,$idCata,$detail,$size );

                header('location: index.php?act=sanpham');

            }

            require_once 'add.php';
            break;
        }


        default: {
            require_once 'view.php';
            break;
        }
    }


} else {
    require_once 'view.php';
}






?>


