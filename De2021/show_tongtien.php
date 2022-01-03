<?php
include 'connection.php';
$MABD = $_POST['MABD'];
$stmt = $conn->query("select * from CT_BD, congviec cv
                    where CT_BD.MACV= cv.MACV and
                    MABD = '{$MABD}'");
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$tongtien = 0;

foreach($result as $row){
    $tongtien = $tongtien + intval($row['DONGIA']);
}
echo $tongtien;
?>