<?php 
    include 'connection.php';
    $SOXE = $_POST['SOXE'];
    $stmt = $conn->query("select KH.HOTENKH
                        from KHACHHANG KH, XE
                        where KH.MAKHACHHANG = XE.MAKHACHHANG
                        and XE.SOXE = '{$SOXE}'");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //sau khi fecth kết quả trả về là 1 mảng, mà kết quả chỉ có 1 
    $result = $result[0];//nên lấy phần tử đầu tiền của mảng ra.
    $json = json_encode($result);
    echo $json;
?>