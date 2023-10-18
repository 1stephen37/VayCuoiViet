
<?php

$output = '';

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
            $output = view();
            break;
        }
    }


} else {
    $output = view();
}

function view(){

    $kq = '
    <div class="display-cata flex">

    <div class="nav flex">

        <div class="name">
            tên
        </div>

        <div class="img">
            ảnh
        </div>

        <div class="action flex">

            hành động

        </div>

    </div>
    ';

    $product = get_all_products();


    foreach ($product as $item) {
        extract($item);

        $img_product = getImage($id);

        $kq .= '
            <div class="product flex">

                <div class="name">
                    '.$name.'
                </div>
            
               
                <div class="small flex">
                
                    <div class="img">
                        <img src="../upload/'.$img_product['name'].'" alt="" class="img-full">
                    </div>
                   
                    <div class="action flex">
                      
                        <a href="index.php?act=sanpham&sanpham=edit&edit='.$id.'" class="edit">
                            Sửa
                        </a>
                        /
                        <a href="index.php?act=sanpham&sanpham=remove&remove='.$id.'" class="remove">
                            Xóa
                        </a>
            
                    </div>
                    
                </div>

            </div>
        
    ';

    }

    $kq .= '<a class="add_btn" href="index.php?act=sanpham&sanpham=add">thêm</a>
    </div>';

    return $kq;

}





?>

<?=$output?>


