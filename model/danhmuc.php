<?php
function themdm($name, $detail) : bool{
    $conn=connectdb();
    $sql = "INSERT INTO `catalog` (`id`, `name`, `detail`, `count`) VALUES (NULL, '".$name."', '".$detail."', '');";
    // use exec() because no results are returned
    $conn->exec($sql);
    return true;
}

function deldm($id){
    $conn=connectdb();
    $sql = "DELETE FROM `catalog` WHERE id=".$id;
    // use exec() because no results are returned
    $conn->exec($sql);
    return true;
}

function updatedm($id,$name, $detail){
    $conn=connectdb();
//    $sql = "UPDATE `catalog` SET tendm='".$tendm."' WHERE id=".$id;
    $sql = "UPDATE `catalog` SET `name` = '$name', `detail` = '$detail' WHERE `id` = $id";
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
//    $conn->exec($sql);
}

function getonedm($id){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM catalog WHERE id=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}

function getall_dm(){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM `catalog`");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}

function check_foregin($id_cata) {
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM `product` WHERE `id_cata` = ".$id_cata);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return count($kq);
}

?>