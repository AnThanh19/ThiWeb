<?php
 include 'connection.php';
 $MAXE = $_POST['MAXE'];
 $MAHD = $_POST['MAHD'];
 $stmt = $conn->prepare("DELETE FROM cthd WHERE MAXE = {$MAXE} AND MAHOPDONG = {$MAHD}");
 $stmt->execute();
 echo 'success';