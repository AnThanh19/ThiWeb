<?php

function addkh(){
    include 'connection.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $MAKH = $_POST['MAKH'];
        $HOTENKH = $_POST['HOTENKH'];
        $DIACHI = $_POST['DIACHI'];
        $SDT = $_POST['SDT'];
        $result = $conn->prepare("INSERT INTO khachhang (MAKHACHHANG, HOTENKH, SDT, DIACHI) 
        VALUES (:MAKH, :HOTENKH, :SDT, :DIACHI)");
        $result->bindParam(':MAKH', $MAKH);
        $result->bindParam(':HOTENKH', $HOTENKH);
        $result->bindParam(':SDT', $SDT);
        $result->bindParam(':DIACHI', $DIACHI);
        $result->execute();
        echo 'Thêm thành công';
    }
}

function select_KH(){
    include 'connection.php';
    $stmt = $conn->query("select * from khachhang");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}