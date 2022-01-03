<?php 
    function listKH(){
        include 'connection.php';
        $stmt = $conn->query("select * from khachhang");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    $list = listKH();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="cau5.js"></script>

<script>
    $(document).ready(function(){
        $('#TENKH').change(function(){
            var MAKH = $('#TENKH').val();
            selecthd(MAKH);
        })
        $('#listHD').change(function(){
            var MAHD = $('#MAHD').val();
            selectxe(MAHD);
        })
        $(document).on('click', '.delete', function(){
            var MAXE = $(this).val();
            var MAHD = $('#MAHD').val();
            delete_cthd(MAXE, MAHD);
            });
    })
           
        

</script>



<div>
    <div>
        Tên khách
        <select name="TENKH" id="TENKH">
            <?php foreach ($list as $row) : ?>
                <option value="<?php echo $row['MAKH']?>"><?php echo $row['HOTEN']?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div id="listHD"></div>
    
    <div id="listDSX"></div>
            
</div>
