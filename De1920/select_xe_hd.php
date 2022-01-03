<?php

    include 'connection.php';
    $MAHOPDONG = $_POST['MAHD'];
    $stmt = $conn->query("select X.TENXE, cthd.MAXE
                            from Xe X, cthd
                            where X.MAXE = cthd.MAXE
                            and cthd.MAHOPDONG = {$MAHOPDONG}");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($result);
    echo $json;