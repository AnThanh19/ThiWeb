<?php
try{
    $conn = new PDO("mysql:host=localhost;dbname=onthi", "root","Gingin07");
    //thiết lập PDO error mode thành ngoại lệ
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("ERROR: Không thể kết nối. " . $e->getMessage());
}