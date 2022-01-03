<?php 
    include 'khachhang.php';
    include 'Xe.php';
    include 'hopdong.php';
    $list = select_all_kh();
    $list_xe = selectxe();
?>

<div class="border">
    <form action="" method="POST">
        <div>
            Mã hợp đồng <input type="text" name="MAHD">
        </div><br>
        <div>
            Tên hợp đồng <input type="text" name="TENHD">
        </div><br>
        <div>
            Tên khách hàng
            <select name="TENKH" id="TENKH">
                <?php foreach ($list as $row) : ?>
                    <option value="<?php echo $row['MAKH']?>"><?php echo $row['HOTEN']?></option>
                <?php endforeach; ?>
            </select>
        </div><br>

        <div>
            Tên xe
            <select name="TENXE[]" id="TENXE" multiple>
                    <?php foreach($list_xe as $row) : ?>
                        <option value="<?php echo $row['MAXE']?>"><?php echo $row['TENXE']?></option>
                    <?php endforeach; ?>
            </select>

        </div><br>

        <div>
            Số tiền <input type="text" name="TONGTIEN">
        </div><br>
        <input type="submit" value="Thuê xe" name="submit">

    </form>
    <?php addHD(); ?>   
    <?php addcthd(); ?>              
</div>