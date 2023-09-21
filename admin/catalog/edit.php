<?php

    if(isset($_GET['id']) && ($_GET['id'] != '')){

        $id_get = $_GET['id'];

        $dm1 = getonedm($id_get);

    }

    if( isset($_POST['editSubmit']) && ($_POST['editSubmit']) ) {

        $name = $_POST['edit_name'];
        $detail = $_POST['edit_detail'];

        $id = $dm1[0]["id"];

        updatedm($id,$name, $detail);

        header('location: index.php?act=danhmuc');

    }



?>

<div class="form-cata ">

    <form class="flex" action="index.php?act=danhmuc&danhmuc=edit&id=<?php echo $_GET['id']; ?>" method="POST">

        <div class="label flex">
            <label for="">
                ID danh mục:
            </label>
            <input type="text" name="id" disabled value="
            <?php
                    echo $dm1["id"];
            ?>
            ">
        </div>

        <div class="label flex">
            <label for="">
                Tên danh mục:
            </label>
            <input type="text" name="edit_name" value="
                <?php
                    echo $dm1["name"];
                ?>
            ">
        </div>

        <div class="label flex">
            <label for="">
                Mô tả danh mục:
            </label>
            <input type="text" name="edit_detail" value="
                 <?php
                    echo $dm1["detail"];
                ?>
            ">
        </div>

        <div class="button flex">

            <a class="back" href="index.php?act=danhmuc">
                quay lại
            </a>

            <input class="submit" type="submit" name="editSubmit" value="cập nhật">

        </div>



    </form>

</div>
