<?php
include 'khachhang.php';
?>

<div class="border">
    <form action="" method="POST">
        <div>
            <h2>Thêm Khách hàng</h2>
        </div><br>
        <div>
            Mã khách hàng <input type="text" name="MAKH">
        </div><br>
        <div>
            Tên Khách hàng <input type="text" name="TENKH">
        </div><br>
        <div>
            Điện thoại <input type="text" name="SDT">
        </div>
        <br>
        <input type="submit" name="submit" value="Thêm">

    </form>

</div>

<?php
addKH();
?>