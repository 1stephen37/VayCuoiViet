<?php
    function taodonhang($id_user,$total,$name,$address,$email,$tel,$order_date){
        $sql = "INSERT INTO `order` (`id`, `id_user`, `total`, `name`, `email`, `phone`, `address`, `order_date`) 
VALUES (NULL, (?), (?), (?), (?), (?), (?), (?));";
//        $last_id = $conn->lastInsertId();
        return pdo_execute_return_id($sql, $id_user, $total, $name, $email, $tel, $address, $order_date);
    }

    function addtocart($id_product,$id_order,$quantity, $total){
        $sql = "INSERT INTO `detail` (`id`, `id_product`, `id_order`, `quantity`, `total`)
VALUES (NULL, (?), (?), (?), (?))";
        return pdo_query($sql, $id_product, $id_order, $quantity, $total);
    }

    function get_order_by_id_user($id_user) {
        $sql = "SELECT * FROM `order` WHERE `id_user` = (?)";
        return pdo_query($sql, $id_user);
    }

    function getshowcart($iddh){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM tbl_cart WHERE iddh=".$iddh);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }

    function get_all_ordert($id_user){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM `order_product` WHERE `id_user` =".$id_user);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }

    function getorderinfo($iddh){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM tbl_order WHERE id=".$iddh);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }


?>