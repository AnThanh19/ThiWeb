<h2>Thêm khách hàng</h2>
    <form action="" method="POST">
        <div>
            Mã khách hàng
            <input type="text" name="MAKH" placeholder="KH01">
        </div><br>
        <div>
            Họ tên khách hàng
            <input type="text" name="HOTENKH" placeholder="Trần Anh Hùng">
        </div><br>
        <div>
            Địa chỉ
            <input type="text" name="DIACHI">
        </div><br>
        <div>
            Điện thoại
            <input type="text" name="SDT">
        </div><br>
        <input type="submit" name="submit" value="Thêm">
    </form>

<?php
include 'connection.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $MAKH = $_POST['MAKH'];
    $HOTENKH = $_POST['HOTENKH'];
    $DIACHI = $_POST['DIACHI'];
    $SDT = $_POST['SDT'];
    $result = $conn->prepare("INSERT INTO khachhang (MAKHACHHANG, HOTENKH, SDT, DIACHI) 
    VALUES ('$MAKH', '$HOTENKH', '$SDT', '$DIACHI')");
    $result->execute();
    echo 'Thêm thành công';
}
?>