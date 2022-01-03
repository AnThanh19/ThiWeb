<?php
include 'common_helper.php';
function addKH(){
    include 'connection.php';
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $MAKH = $_POST['MAKH'];
        $TENKH = $_POST['TENKH'];
        $SDT = $_POST['SDT'];
        $result = $conn->prepare("INSERT INTO KHACHHANG(MAKH, HOTEN, SDT) VALUES (:MAKH, :TENKH, :SDT)");
        $result->bindParam(':MAKH', $MAKH);
        $result->bindParam(':TENKH', $TENKH);
        $result->bindParam(':SDT', $SDT);
        $result->execute();
        echo 'success';

    }
}

function select_all_kh(){
    include 'connection.php';
    $stmt = $conn->query("select * from khachhang");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function listKH_SL(){
    include 'connection.php';
    $stmt = $conn->query("select KH.HOTEN, COUNT(HD.MAHOPDONG) AS SOLAN
                        from khachhang KH, hopdong HD
                        where KH.MAKH = HD.MAKH
                        group by KH.HOTEN
                        having count(HD.MAHOPDONG) > 2;");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);                 
    return $result;
}

?>