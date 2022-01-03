<?php
include 'connection.php';

$MABD = $_POST['MABD'];
$stmt = $conn->query("select * from CT_BD, congviec cv
                    where CT_BD.MACV= cv.MACV and
                    MABD = '{$MABD}'");
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<tbody>
    <tr>
        <th>Tên công việc</th>
        <th>Đơn giá</th>
        <th>Chức năng</th>
    </tr>
    <?php foreach ($result as $row) : ?>
        <tr>
            <td><?php echo $row['TENCV'] ?></td>
            <td><?php echo $row['DONGIA'] ?></td>
            <td><button type="button" class="delete" value="<?php echo $row['MACV'] ?>">Xóa</button></td>
        </tr>
    <?php endforeach; ?>
</tbody>