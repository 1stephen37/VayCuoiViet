<?php

$output = '';

$error = '';

if(isset($_GET['danhmuc']) && ($_GET['danhmuc'] != '')) {
    switch($_GET['danhmuc']) {
        case 'add':
            $output = add();
            break;
        case 'add_new':
            if(isset($_POST['addSubmit']) && ($_POST['addSubmit'])) {
                $name = $_POST['nameCata'];
                $detail = $_POST['detailCata'];

                $bool = themdm($name, $detail);

                header('location: index.php?act=danhmuc');

            }
            break;
        case 'edit' :
            if(isset($_GET['id']) && ($_GET['id'] != '')){

                $id_get = $_GET['id'];

                $dm1 = getonedm($id_get);

            }
            $output = edit($id_get);
            break;
        case 'edit_submit':
            if( isset($_POST['editSubmit']) && ($_POST['editSubmit']) ) {

                $name = $_POST['edit_name'];
                $detail = $_POST['edit_detail'];

                $id = $_GET['id'];

                updatedm($id,$name, $detail);

                header('location: index.php?act=danhmuc');

            };
            break;
        case 'remove':
            if(isset($_GET['remove']) && ($_GET['remove'] != '')) {
                if(check_foregin($_GET['remove']) > 0) {
                    $error = error();
                    $output = view($error);
                } else {
                    deldm($_GET['remove']);
                    header('Location: index.php?act=danhmuc');
                }
            }
            break;
        default:
            $output = view(null);
            break;
    }
} else {
    $output = view(null);
}

function view($error):string {
    $list = getall_dm();

    $kq = '';

    $kq = '
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
';

    foreach ($list as $item) {
        extract($item);

        $kq .= '
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

    $kq .= '
    <a class="add_btn" href="index.php?act=danhmuc&danhmuc=add">
        thêm
    </a>

</div>
';

    if($error != '') {
        $kq .= $error;
    }

    return $kq;
}

function add():string {
    $kq = '
        <div class="form-cata ">
        
            <form class="flex" action="index.php?act=danhmuc&danhmuc=add_new" method="POST">
        
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
    ';

    return $kq;
}

function edit($id_get):string {

    $dm1 = getonedm($id_get);

    $kq = '
        <div class="form-cata ">

    <form class="flex" action="index.php?act=danhmuc&danhmuc=edit_submit&id='.$id_get.'" method="POST">

        <div class="label flex">
            <label for="">
                ID danh mục:
            </label>
            <input type="text" name="id" disabled value="'.$dm1["id"].'">
        </div>

        <div class="label flex">
            <label for="">
                Tên danh mục:
            </label>
            <input type="text" name="edit_name" value="'.$dm1["name"].'">
        </div>

        <div class="label flex">
            <label for="">
                Mô tả danh mục:
            </label>
            <input type="text" name="edit_detail" value="'.$dm1["detail"].'">
        </div>

        <div class="button flex">

            <a class="back" href="index.php?act=danhmuc">
                quay lại
            </a>

            <input class="submit" type="submit" name="editSubmit" value="cập nhật">

        </div>
        
    </form>

        </div>
    
    ';
    return $kq;

}

function error() {
    return $kq = '
    <div class="error close flex">

    <div class="container">

        <div class="line">

            Danh mục bạn muốn xóa đã có sản phẩm nên không thể xóa !

        </div>

        <i class="des">Bạn có thể xóa các sản phẩm trong danh mục sau đó thử lại</i>

        <div class="button">
            xác nhận
        </div>

    </div>

</div>';

}

?>


<?=$output?>




<script>

    const error_panel = document.querySelector('.error');

    error_panel.classList.remove('close');

    const button_clsoe_error = document.querySelector('.error .container .button');

    const error_container = document.querySelector('.error .container');

    button_clsoe_error.addEventListener('click', function() {
        error_panel.classList.add('close');
    });

    error_panel.addEventListener('click', function() {
        error_panel.classList.add('close');
    })


    error_container.addEventListener('click', function(e) {
        e.stopPropagation();
    })


</script>




