<div class="product-form ">

    <form class="flex" action="index.php?act=sanpham&sanpham=add" method="POST" enctype="multipart/form-data">

        <div class="label flex">
            <label for="">
                Tên sản phẩm:
            </label>
            <input type="text" name="nameproduct" value="">
        </div>

        <div class="label flex">
            <label for="">
                Giá sản phẩm:
            </label>
            <input type="text" name="priceproduct" value="">
        </div>

        <div class="label flex">
            <label for="">
                Hình sản phẩm:
            </label>
            <input type="file" name="imgProduct" value="">
        </div>

        <div class="label flex">
            <label for="">
                danh mục của sản phẩm:
            </label>
            <input type="text" name="idCataProduct" value="">
        </div>

        <div class="label flex">
            <label for="">
                chi tiết sản phẩm:
            </label>
            <input type="text" name="detailProduct" value="">
        </div>

        <div class="label flex">
            <label for="">
                kích cỡ sản phẩm:
            </label>
            <input type="text" name="sizeProduct" value="">
        </div>

        <div class="button flex">

            <a class="back" href="index.php?act=sanpham">
                quay lại
            </a>

            <input class="submit" type="submit" name="addSubmit" value="cập nhật">

        </div>



    </form>

</div>