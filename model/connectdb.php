<?php
    function connectdb(){
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=assignment", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
        return $conn;
        } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }
    }

    function getAll($sql) {
        $conn = connectdb();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }

    function getOne($sql) {
        $conn = connectdb();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetch();
        return $kq;
    }

    function handle($sql) {
        $conn = connectdb();
        $conn->exec($sql);
        return $conn;
    }

?>