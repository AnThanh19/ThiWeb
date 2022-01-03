<?php

function addXe(){
    include 'connection.php';
    if(isset($_POST['HANGXE'])){
        $MAKH = $_POST['MAKH'];
        $SOXE = $_POST['SOXE'];
        $HANGXE = $_POST['HANGXE'];
        $NAMSX = $_POST['NAMSX'];
        $result = $conn->prepare("INSERT INTO xe (SOXE, HANGXE, NAMSX, MAKHACHHANG) 
        VALUES (:SOXE, :HANGXE, :NAMSX ,:MAKH)");
        $result->bindParam(':MAKH', $MAKH   );
        $result->bindParam(':SOXE', $SOXE);
        $result->bindParam(':HANGXE', $HANGXE);
        $result->bindParam(':NAMSX', $NAMSX);
        $result->execute();
        echo 'success';
    }
}