<?php 
    include 'khachhang.php';
    $list = listKH_SL();
?>
<div>
    <table border="1">
        <tr>
            <th>Tên khách hàng</th>
            <th>Số lần thuê xe</th>
        </tr>

        <?php foreach($list as $row) : ?>
            <tr>
                <td><?php echo $row['HOTEN']?></td>
                <td><?php echo $row['SOLAN']?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>