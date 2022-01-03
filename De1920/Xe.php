<?php

function selectxe(){
    include 'connection.php';
    $stmt = $conn->query("select * from xe");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
?>