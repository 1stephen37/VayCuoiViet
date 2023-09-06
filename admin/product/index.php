<div class="banner flex">

    <div class="heading">
        chào Stephen Nguyễn !
    </div>

    <div class="vector">
        <img src="../assets/img/about/Vector 1.svg" alt="" class="img-full">
    </div>

</div>

<section class="section1 flex">

    <div class="left flex">

        <div class="admin-link">
            <i class="fa-solid fa-sliders"></i>
            <a href="index.php?act=index">
                bảng điều khiển
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-solid fa-bag-shopping"></i>
            <a href="index.php?act=danhmuc">
                danh mục
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-solid fa-cart-shopping"></i>
            <a href="index.php?act=sanpham">
                sản phẩm
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-solid fa-user"></i>
            <a href="index.php?act=user">
                người dùng
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-solid fa-tag"></i>
            <a href="index.php?act=brand">
                thương hiệu
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-sharp fa-solid fa-truck-fast"></i>
            <a href="index.php?act=order">
                đơn hàng
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-solid fa-pen-clip"></i>
            <a href="index.php?act=comment">
                đánh giá
            </a>
        </div>

        <div class="admin-link">
            <i class="fa-solid fa-right-from-bracket"></i>
            <a href="../index.php?act=logout">
                đăng xuất
            </a>
        </div>

    </div>

    <div class="right">

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

    </div>

</section>

