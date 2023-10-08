<?php

    function getImage($id_product) {
        $sql = "SELECT * FROM img where id_product= (?) LIMIT 1";
        return pdo_query_one($sql, $id_product);
    }

    function getImage_full($id_product) {
        $sql = "SELECT * FROM img where id_product= (?)";
        return pdo_query($sql, $id_product);
    }


?>