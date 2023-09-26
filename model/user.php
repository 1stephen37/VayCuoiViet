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
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM user WHERE Email='".$email."' AND PassWord ='".$pass."'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = '';
    if($stmt->rowCount() == 1) {
        $kq=$stmt->fetch();
        return $kq;
    } else {
        return 0;
    }

}

function Newuser($user,$pass){
    $conn=connectdb();
    if(checkuser($user,$pass) == 0) {
        $stmt = $conn->exec("INSERT INTO `user` (`id`, `UserName`, `PassWord`, `Name`, `Email`, `Phone`, `Active`, `role`, `address`) VALUES (NULL, '".$user."', '".$pass."', '', '', '', '1', '0', '');");
    } else {
        $stmt = false;
    }
    return $stmt;
}

function get_all_user(){
    $conn=connectdb();
    $sql= "SELECT * FROM user";
    echo $sql;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}

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

function post_reset($reset,$user) {
    $sql = "UPDATE `user` SET `reset` = (?) WHERE `id` = (?)";
    return pdo_execute($sql,$reset ,$user);
}

function get_reset($user) {
    $sql = "SELECT `reset` FROM `user` WHERE `id` = (?)";
    return pdo_query_one($sql);
}

function check_user($email) {
    $sql = "SELECT `id` FROM `user` WHERE `Email` = (?)";
    return pdo_query_one($sql,$email);
}

?>