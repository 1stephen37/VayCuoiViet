<?php
function themsp($tensp,$img,$gia,$iddm){
    $conn=connectdb();
    $sql = "INSERT INTO tbl_sanpham (tensp,img,gia,iddm) VALUES ('".$tensp."','".$img."','".$gia."','".$iddm."')";
    // use exec() because no results are returned
    $conn->exec($sql);
}

function add_product($name,$price,$img,$idCata,$detail,$size ) {
    $conn=connectdb();
    $sql = "
        INSERT INTO `product` (`id`, `name`, `price`, `price_sale`, `img`, `date`, `id_cata`, `special`, `views`, `des`, `detail`, `size`, `id_brand`) VALUES (NULL, '".$name."', '".$price."', '0', '".$img."', NULL, '".$idCata."', '0', '', '".$detail."', '".$size."', 'M', '');
    ";
    // use exec() because no results are returned
    $conn->exec($sql);
}

function edit_product($name,$price,$idCata,$detail,$size,$id) {
    $conn=connectdb();
    $sql = "UPDATE `product` SET `name` = '$name', `price` = '$price', `id_cata` = '$idCata', `detail` = '$detail', `size` = '$size' WHERE `product`.`id` = $id";
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}


// function deldm($id){
//     $conn=connectdb();
//     $sql = "DELETE FROM tbl_sanpham WHERE id=".$id;
//     // use exec() because no results are returned
//     $conn->exec($sql);
// }

// function updatedm($id,$tendm){
//     $conn=connectdb();
//     $sql = "UPDATE tbl_sanpham SET tendm='".$tendm."' WHERE id=".$id;
//     // Prepare statement
//     $stmt = $conn->prepare($sql);
//     // execute the query
//     $stmt->execute();
// }

function getonesp($id){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM product WHERE id=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetch();
    return $kq;
}

function get_hot_sp($hot){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM product WHERE $hot= 1");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchALL();
    return $kq;
}


// function getall_sp(){
//     $conn=connectdb();
//     $stmt = $conn->prepare("SELECT * FROM tbl_sanpham order by id desc");
//     $stmt->execute();
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $kq=$stmt->fetchAll();
//     return $kq;
// }

function getall_sp($iddm, $page) :array {
    switch ($page) {
        case 1: {
            $number = 0;
            break;
        }
        case 2: {
            $number = 12;
            break;
        }
        default: {
            $number = 0;
            break;
        }
    }
    $sql = "SELECT * FROM product WHERE";
    if($iddm>0){
        $sql.=" `id_cata`=".$iddm . " LIMIT " . $number . ",12";
        // iddm='".$iddm."'"
    }
//    if($view==1){
//        $sql.=" order by view desc";
//    }else{
//        $sql.=" order by id desc";
//    }
    return getAll($sql);
}

    function del_product($id){
        $conn=connectdb();
        $sql = "DELETE FROM `product` WHERE id=".$id;
        // use exec() because no results are returned
        $conn->exec($sql);
        return true;
    }

function get_Page() {
    $conn=connectdb();
    $sql = "SELECT * FROM product where 1";
}

function getImage($id_product) {
    $sql = "SELECT * FROM img where id_product= (?) LIMIT 1";
    return pdo_query_one($sql, $id_product);
}

function getImage_full($id_product) {
    $sql = "SELECT * FROM img where id_product=" . $id_product;
    return getAll($sql);
}

function get_detail($id) {
    $sql = "SELECT * FROM product WHERE id=" . $id;
    return getOne($sql);
}

?>