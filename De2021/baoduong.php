<?php 
function addbd(){
    include 'connection.php';
    if($_SERVER["REQUEST_METHOD"] == "POST")
    { 
        $SOXE = $_POST['SOXE'];
        $MABD = $_POST['MABD'];
        $SOKM = $_POST['SOKM'];
        $NOIDUNG = $_POST['NOIDUNG'];
        $newDate = strval(date('Y-m-d'));
        $result = $conn->prepare("INSERT INTO baoduong (SOXE, MABD, SOKM, NGAYNHAN, NOIDUNG) 
        VALUES (:SOXE, :MABD, :SOKM, :NGAYNHAN, :NOIDUNG)");
        $result->bindParam(':SOXE', $SOXE);
        $result->bindParam(':MABD', $MABD);
        $result->bindParam(':SOKM', $SOKM);
        $result->bindParam(':NOIDUNG', $NOIDUNG);
        $result->bindParam(':NGAYNHAN', $newDate);
        $result->execute();
        echo 'success';
    }
}

function updatebd(){
    include 'connection.php';
    if($_SERVER["REQUEST_METHOD"] == "POST")
    { 
        $THANHTIEN = $_POST['tongtien'];
        $MABD = $_POST['SOXE'];
        $NGAYTRA = strval(date('Y-m-d'));
        $result = $conn->prepare("UPDATE baoduong 
        SET THANHTIEN = :THANHTIEN, NGAYTRA = :NGAYTRA 
        WHERE MABD = :MABD");
        $result->bindParam(':THANHTIEN', $THANHTIEN);
        $result->bindParam(':NGAYTRA', $NGAYTRA);
        $result->bindParam(':MABD', $MABD);
        $result->execute();
        echo 'success';
    }
}