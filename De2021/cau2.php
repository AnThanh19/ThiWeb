<?php 
    include 'connection.php';
?>
<div >
    <h2>Thêm thông tin xe khách hàng</h2>
    <form action="" method="POST">
       <div>
           Họ tên khách hàng
           <select name="MAKH" id="TENKH">
               <?php 
               $stmt = $conn->query("select * from khachhang");
               $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($list as $row) { ?>
                    <option value="<?=$row['MAKHACHHANG']?>"><?=$row['HOTENKH'] ?></option>
                <?php } ?>
           </select>
       </div><br>
       <div>
           Số xe
           <input type="text" name="SOXE" placeholder="51H-XXX.XX">
       </div><br>
       <div>
            Hãng xe
            <select name="HANGXE" id="XE" multiple>
                <option value="Toyota">Toyota</option>
                <option value="BMW">BMW</option>
                <option value="Audi">Audi</option>
            </select>
       </div><br>
       <div>
            Năm sản xuất
            <input type="text" name="NAMSX" placeholder="2022">
       </div><br>
        <input type="submit" value="thêm">
    </form>
</div>

<?php 
if(isset($_POST['HANGXE'])){
    $MAKH = $_POST['MAKH'];
    $SOXE = $_POST['SOXE'];
    $HANGXE = $_POST['HANGXE'];
    $NAMSX = $_POST['NAMSX'];
    $result = $conn->prepare("INSERT INTO xe (SOXE, HANGXE, NAMSX, MAKHACHHANG) 
    VALUES ('$SOXE', '$HANGXE', '$NAMSX' ,'$MAKH')");
    $result->execute();
    echo 'Thêm thành công';
}
?>