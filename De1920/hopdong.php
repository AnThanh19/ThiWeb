<?php
function addHD(){
    include 'connection.php';
    if($_SERVER["REQUEST_METHOD"] =="POST"){
        $MAHD = $_POST['MAHD'];
        $TENHD = $_POST['TENHD'];
        $MAKH =  $_POST['TENKH'];
        $TONGTIEN = $_POST['TONGTIEN'];
        $result = $conn->prepare("INSERT INTO hopdong (MAHOPDONG, TENHD, MAKH, TONGTIEN) 
        VALUES (:MAHD, :TENHD, :MAKH, :TONGTIEN)");
        $result->bindParam('MAHD', $MAHD);
        $result->bindParam(':TENHD', $TENHD);
        $result->bindParam(':MAKH', $MAKH);
        $result->bindParam(':TONGTIEN', $TONGTIEN);
        $result->execute();
    }
}

function addcthd(){
    include 'connection.php';

    if(isset($_POST['TENXE']))
    {
        foreach($_POST['TENXE'] as $MAXE)
        {
            if($_SERVER["REQUEST_METHOD"] =="POST"){
                $MAHD = $_POST['MAHD'];
                $result = $conn->prepare("INSERT INTO cthd (MAHOPDONG, MAXE)
                values (:MAHD, :MAXE)");
                $result->bindParam(':MAXE', $MAXE);
                $result->bindParam(':MAHD', $MAHD);
                $result->execute();
            }
        }
    }
}