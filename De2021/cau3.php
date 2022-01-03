<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="cau3.js"></script>

<script>
    $(document).ready(function(){
        $('#SOXE').change(function(){
            var SOXE = $('#SOXE').val();
            timKH(SOXE);
        })
    });
</script>

<div>
    <h2>Thêm bảo dưỡng</h2>
    <form action="" method="POST">
        <div>
            Số xe
            <input type="text" name="SOXE" id="SOXE" placeholder="51X-XXX.XX">
        </div><br>
        <div>
            Họ tên khách hàng
            <input type="text" name="HOTENKH" id="result" placeholder="Trần Anh Hùng">
        </div><br>
        <div>
            Mã bảo dưỡng
            <input type="text" name="MABD" placeholder="BD001">
        </div><br>
        <div>
            Số KM
            <input type="text" name="SOKM" placeholder="20000">
        </div><br>
        <div>
            Nội dung
            <input type="text" name="NOIDUNG" placeholder="Bao duong 20000">
        </div><br>
        <input type="submit" value="Thêm">
    </form>
</div>

<?php 
include 'connection.php';
if($_SERVER["REQUEST_METHOD"] == "POST")
{ 
    $SOXE = $_POST['SOXE'];
    $MABD = $_POST['MABD'];
    $SOKM = $_POST['SOKM'];
    $NOIDUNG = $_POST['NOIDUNG'];
    $newDate = strval(date('Y-m-d'));
    $result = $conn->prepare("INSERT INTO baoduong (SOXE, MABD, SOKM, NGAYNHAN, NOIDUNG) 
    VALUES ('$SOXE', '$MABD', '$SOKM', '$newDate', '$NOIDUNG')");
    $result->execute();
    echo 'Thành công';
}
?>