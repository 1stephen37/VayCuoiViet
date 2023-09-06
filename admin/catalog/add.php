<?php

    if(isset($_POST['addSubmit']) && ($_POST['addSubmit'])) {
        $name = $_POST['nameCata'];
        $detail = $_POST['detailCata'];

        $bool = themdm($name, $detail);

        header('location: index.php?act=danhmuc');

//        if($bool) {
//            header('location: index.php?act=danhmuc');
//        }
    }


?>

<div class="form-cata ">

    <form class="flex" action="index.php?act=danhmuc&danhmuc=add" method="POST">

        <div class="label flex">
            <label for="">
                Tên danh mục:
            </label>
            <input type="text" name="nameCata" value="">
        </div>

        <div class="label flex">
            <label for="">
                Mô tả danh mục:
            </label>
            <input type="text" name="detailCata" value="">
        </div>

        <div class="button flex">

            <a class="back" href="index.php?act=danhmuc">
                quay lại
            </a>

            <input class="submit" type="submit" name="addSubmit" value="cập nhật">

        </div>



    </form>

</div>
