<?php

include 'connection.php';
if (isset($_POST['number'])){
    $sql = "select X.TENXE, COUNT(cthd.MAHOPDONG) as SOLAN
            from xe X, cthd
            where X.MAXE = cthd.MAXE
            group by TENXE 
            order by COUNT(cthd.MAHOPDONG) DESC
            limit ". $_POST['number'];
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $json = json_encode($result);
            echo $json;
}