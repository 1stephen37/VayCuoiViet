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

function get_all_products() {
    $sql = "SELECT * FROM product WHERE 1";
    return pdo_query($sql);
}

function getonesp($id){
    $sql = "SELECT * FROM product WHERE id= (?)";
    return pdo_query_one($sql, $id);
}

function get_product_hot(){
    $sql = "SELECT * FROM `product` WHERE 1 ORDER BY views DESC LIMIT 1";
    return pdo_query_one($sql);
}

function get_product_by_view3() {
    $sql = "SELECT * FROM `product` WHERE 1 ORDER BY views DESC LIMIT 1,3";
    return pdo_query($sql);
}

function product_view_Plus($view, $idproduct) {
    $sql = "UPDATE `product` SET `views` = (?) WHERE `product`.`id` = (?)";
    return pdo_execute($sql, $view, $idproduct);
}

function get_view_product($idproduct) {
    $sql = "SELECT views FROM `product` WHERE id = (?)";
    return pdo_query_value($sql, $idproduct);
}


// function getall_sp(){
//     $conn=connectdb();
//     $stmt = $conn->prepare("SELECT * FROM tbl_sanpham order by id desc");
//     $stmt->execute();
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $kq=$stmt->fetchAll();
//     return $kq;
// }

function get_sp_page($iddm, $page) {
    $start = ($page - 1) * 12;

    $sql = "SELECT * FROM product WHERE `id_cata` = (?) ORDER BY `id` ASC LIMIT $start,12";

    return pdo_query($sql, $iddm);

}


function search_product_name($name) {
    $sql = "SELECT * FROM `product` WHERE `name` LIKE CONCAT('%', ?, '%')";
    return pdo_query($sql,$name);
}

function getIdCata($id_product) {
    $sql = "SELECT id_cata FROM `product` WHERE id = (?)";
    return pdo_query_value($sql,$id_product);
}

function count_product_byCata($id_cata) {
    $sql = "SELECT COUNT(id) FROM `product` WHERE `id_cata` = (?);";
    return pdo_query_one($sql, $id_cata);
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


function get_detail($id) {
    $sql = "SELECT * FROM product WHERE id= (?)";
    return pdo_query_one($sql, $id);
}

?>