<?php

    function get_comment_by_id_product($id_product) {
        $sql = "SELECT * FROM `comment` where `id_product` = (?)";
        return pdo_query($sql, $id_product);
    }

    function post_comment_by_id_product($id, $data, $id_user, $id_product, $date_time) {
        $sql = "INSERT INTO `comment` (`id`, `content`, `id_user`, `id_product`, `datetime`) VALUES ((?), (?), (?), (?), (?));";
        return pdo_execute($sql, $id, $data, $id_user, $id_product, $date_time);
    }





?>