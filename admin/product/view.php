<div class="display-cata flex">

    <div class="nav flex">

        <div class="name">
            tên
        </div>

        <div class="img">
            ảnh
        </div>

        <div class="price">
            giá
        </div>

        <div class="action flex">

            hành động

        </div>

    </div>

    <?php

        $product = get_all_products();

        $view = '';

        foreach ($product as $item) {
            extract($item);

            $img_product = getImage($id);

            $view .= '
    <div class="product flex">

        <div class="name">
            '.$name.'
        </div>

        <div class="img">
            <img src="../upload/'.$img_product['name'].'" alt="" class="img-full">
        </div>

        <div class="price">
            '.number_format($price, 0,',','.').'
        </div>

        <div class="small flex">

            <div class="size">
                '.$size.'
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


    ?>

    <?=$view?>


    <a class="add_btn" href="index.php?act=sanpham&sanpham=add">
        thêm
    </a>


</div>

