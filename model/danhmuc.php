<?php
function themdm($name, $detail) {
    $sql = "INSERT INTO `catalog` (`id`, `name`, `detail`) VALUES (NULL, (?), (?))";
    return pdo_execute($sql, $name, $detail);
}

function get_all_danhmuc() {
    $sql = "SELECT * FROM catalog WHERE 1";
    return pdo_query($sql);
}

function deldm($id) {
    $sql = "DELETE FROM `catalog` WHERE id = (?)";
    // use exec() because no results are returned
    return pdo_execute($sql, $id);
}

function updatedm($id,$name, $detail){
    $sql = "UPDATE `catalog` SET `name` = (?), `detail` = (?) WHERE `id` = (?)";
    return pdo_execute($sql, $name, $detail, $id);
}

function getonedm($id){
    $sql = "SELECT * FROM catalog WHERE id= (?)";
    return pdo_query_one($sql, $id);
}

function getall_dm(){
    $sql = "SELECT * FROM `catalog`";
    return pdo_query($sql);
}

function check_foregin($id_cata) {
    $sql = "SELECT * FROM `product` WHERE `id_cata` = (?)";
    $kq = pdo_query($sql, $id_cata);
    return count($kq);
}

function get_product_lienquan($id_cata,$id_product) {
    $sql = "SELECT * FROM `product` WHERE `id_cata` = (?) AND id <> (?) ORDER BY RAND() LIMIT 3";
    return pdo_query($sql,$id_cata, $id_product);
}

?>