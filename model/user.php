<?php
// function themdm($tendm){
//     $conn=connectdb();
//     $sql = "INSERT INTO tbl_danhmuc (tendm) VALUES ('".$tendm."')";
//     // use exec() because no results are returned
//     $conn->exec($sql);
// }
// function deldm($id){
//     $conn=connectdb();
//     $sql = "DELETE FROM tbl_danhmuc WHERE id=".$id;
//     // use exec() because no results are returned
//     $conn->exec($sql);
// }
// function updatedm($id,$tendm){
//     $conn=connectdb();
//     $sql = "UPDATE tbl_danhmuc SET tendm='".$tendm."' WHERE id=".$id;
//     // Prepare statement
//     $stmt = $conn->prepare($sql);
//     // execute the query
//     $stmt->execute();
// }
// function getonedm($id){
//     $conn=connectdb();
//     $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc WHERE id=".$id);
//     $stmt->execute();
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $kq=$stmt->fetchAll();
//     return $kq;
// }

function checkuser($email,$pass){
    $sql = "SELECT * FROM user WHERE Email='".$email."' AND PassWord ='".$pass."'";
    $kq = pdo_query_one($sql);
    if(is_array($kq)) {
        return $kq;
    } else {
        return 0;
    }
}

function get_Password_by_email($email) {
    if(is_array(checkEmail($email))) {
        $sql = "SELECT `PassWord`  FROM user WHERE `Email` = (?)";
        return pdo_query_value($sql, $email);
    } else {
        return 0;
    }
}

function checkEmail($email) {
    $sql = "SELECT email FROM `user` WHERE email = (?)";
    return pdo_query_one($sql, $email);
}

function Newuser($pass, $email){
    $sql = "INSERT INTO `user` (`id`, `PassWord`, `name`, `img`, `email`, `phone`, `Active`, `role`, `address`, `reset`) VALUES (NULL, (?), '', NULL, (?), '', '1', '0', '', NULL);";
    return pdo_execute($sql, $pass, $email);
}

function New_User_Active_0 ($passWord, $name, $email, $phone, $address) {
    $sql = "INSERT INTO `user` (`id`, `PassWord`, `name`, `img`, `email`, `phone`, `Active`, `role`, `address`, `reset`)
VALUES (NULL, (?), (?), NULL, (?), (?), '0', '0', (?), NULL);";
    return pdo_execute($sql, $passWord, $name, $email, $phone, $address);
}

function get_all_user(){
    $sql= "SELECT * FROM user";
    return pdo_query($sql);
}

//function get_user_by_id($id) {
//    $sql = "SELECT * FROM user WHERE `id` = (?)";
//
//}

function getuserinfo($user,$pass){
    $conn=connectdb();
    $sql="SELECT * FROM user WHERE user='".$user."' AND pass='".$pass."'";
    echo $sql;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetch();
    return $kq;
}

function reset_pass($user,$pass) {
    $sql = "UPDATE `user` SET `PassWord` = (?) WHERE `id` = (?)";
    return pdo_execute($sql,$pass ,$user);
}

function remove_reset($reset,$user) {
    $sql = "UPDATE `user` SET `reset` = (?) WHERE `id` = (?)";
    return pdo_execute($sql,$reset ,$user);
}

function post_reset($reset,$user) {
    $sql = "UPDATE `user` SET `reset` = (?) WHERE `id` = (?)";
    return pdo_execute($sql,$reset ,$user);
}

function get_reset($user) {
    $sql = "SELECT `reset` FROM `user` WHERE `id` = (?)";
    return pdo_query_one($sql,$user);
}

function check_user($email) {
    $sql = "SELECT `id` FROM `user` WHERE `Email` = (?)";
    return pdo_query_one($sql,$email);
}

function update_user($name, $img, $email,$phone, $address, $id) {
    $sql = "UPDATE `user` SET `name` = (?), `img` = (?), `email` = (?), `phone` = (?) , `address` = (?) WHERE `user`.`id` = (?)";
    return pdo_execute($sql, $name, $img, $email, $phone, $address, $id);
}

function get_user_by_id($id) {
    $sql = "SELECT * FROM `user` WHERE `id` = (?)";
    return pdo_query_one($sql, $id);
}

?>