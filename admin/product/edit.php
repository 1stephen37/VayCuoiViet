<?php

    if(isset($_GET['edit']) && ($_GET['edit']) > 0) {

        $id = $_GET['edit'];

        $product = getonesp($id);

        extract($product);

    }

    if(isset($_POST['productEdit']) && ($_POST['productEdit'])) {

        $name = $_POST['PName_edit'];
        $price= $_POST['editPrice'];
        $id_cata = $_POST['idCataProduct'];
        $detail = $_POST['editDetail'];
        $size = $_POST['editSize'];

        edit_product($name,$price,$id_cata,$detail,$size,$id);

        header('location: index.php?act=sanpham');

    }

?>

<div class="product-form">

    <form class="flex" action="index.php?act=sanpham&sanpham=edit&edit=<?php echo $_GET['edit'];?>" method="POST">

        <div class="label flex">
            <label for="">
                tên sản phẩm:
            </label>
            <input type="text" name="PName_edit" value="
            <?php
                echo $name;
            ?>
            ">
        </div>

        <div class="label flex">
            <label for="">
                giá sản phẩm:
            </label>
            <input type="text" name="editPrice" value="
            <?php
                echo $price;
            ?>
            ">
        </div>

        <div class="label flex">
            <label for="">
                danh mục của sản phẩm:
            </label>
            <input type="text" name="idCataProduct" value="
                <?=$id_cata?>
            ">
        </div>

        <div class="label flex">
            <label for="">
                Mô tả sản phẩm:
            </label>
            <input type="text" name="editDetail" value="
            <?php
                echo $detail;
            ?>
            ">
        </div>

        <div class="label flex">
            <label for="">
                kích cỡ sản phẩm:
            </label>
            <input type="text" name="editSize" value="<?=$size?>">
        </div>



        <div class="button flex">

            <a class="back" href="index.php?act=sanpham">
                quay lại
            </a>

            <input class="submit" type="submit" name="productEdit" value="cập nhật">

        </div>



    </form>

</div>