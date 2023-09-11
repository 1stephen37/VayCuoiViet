<?php
function themdm($name, $detail) {
    $sql = "INSERT INTO `catalog` (`id`, `name`, `detail`, `count`) VALUES (NULL, '".$name."', '".$detail."', '');";
    return handle($sql);
}

function deldm($id) {
    $sql = "DELETE FROM `catalog` WHERE id=".$id;
    // use exec() because no results are returned
    return handle($sql);
}

function updatedm($id,$name, $detail){
    $sql = "UPDATE `catalog` SET `name` = '$name', `detail` = '$detail' WHERE `id` = $id";
    return handle($sql);
}

function getonedm($id){
    $sql = "SELECT * FROM catalog WHERE id=".$id;
    return getOne($sql);
}

function getall_dm(){
    $sql = "SELECT * FROM `catalog`";
    return getAll($sql);
}

function check_foregin($id_cata) {
    $sql = "SELECT * FROM `product` WHERE `id_cata` = ".$id_cata;
    $kq = getAll($sql);
    return count($kq);
}

?>