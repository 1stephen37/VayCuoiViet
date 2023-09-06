<?php

$list = getall_dm();

$output = '';

foreach ($list as $item) {
    extract($item);

    $output .= '
                <div class="cata flex">

                <div class="id">
                    '.$id.'
                </div>

                <div class="private flex">

                    <div class="name">
                        '.$name.'
                    </div>

                    <div class="detail">
                        '.$detail.'
                    </div>

                </div>


                <div class="action flex">

                    <a href="index.php?act=danhmuc&danhmuc=edit&id='.$id.'" class="edit">
                        sửa
                    </a>
                    /
                    <a href="index.php?act=danhmuc&danhmuc=remove&remove='.$id.'" class="remove">
                        xóa
                    </a>

                </div>

            </div>
            ';

}



?>

    <div class="display-cata flex">

        <div class="nav flex">

            <div class="id">
                ID
            </div>

            <div class="name">
                tên
            </div>

            <div class="detail">
                mô tả
            </div>

            <div class="action">

                hành động

            </div>

        </div>

        <?=$output?>


        <a class="add_btn" href="index.php?act=danhmuc&danhmuc=add">
                thêm
        </a>

    </div>


