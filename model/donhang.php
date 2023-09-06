<?php
    function taodonhang($id,$total,$name,$address,$email,$tel){
        $conn=connectdb();
        $sql = "INSERT INTO `order_product` (`id`, `id_user`, `total`, `name`, `email`, `phone`, `address`, `order_date`) 
VALUES (NULL, '".$id."', '".$total."', '".$name."', '".$email."', '".$tel."', '".$address."', NULL);";
        // use exec() because no results are returned
        $conn->exec($sql);
        $last_id = $conn->lastInsertId();
        return $last_id;
    }

    function addtocart($iddh,$idpro,$thanhtien,$soluong){
        $conn=connectdb();
        $sql = "INSERT INTO `detail` (`id`, `id_product`, `id_order`, `quantity`, `total`)
VALUES (NULL, '".$idpro."', '".$iddh."', '".$soluong."', '".$thanhtien."');";
        // use exec() because no results are returned
        $conn->exec($sql);
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