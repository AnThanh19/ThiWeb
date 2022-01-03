<?php include 'baoduong.php'?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="cau4.js"></script>
<script>
    $(document).ready(function() {
        $('#date').change(function(){
            var date = $('#date').val();
            show_soxe(date);
        })
        $('#soxe').change(function(){
            var MABD = $('#soxe').val();
            show_cv(MABD);
            show_tongtien(MABD);
        })
        $(document).ready(function(){
            $(document).on( "click", ".delete", function() {
            var MABD = $('#soxe').val();
            var MACV = $(this).val();
            delete_ctbd(MABD, MACV);
            });
        });
        
    });

</script>


<div class="border">
    <form action="" method="POST">
        <table id="table1">
            <h3>Thanh toán</h3>
            <tr>
                <td>
                    <span>Số xe:<select name="SOXE" id="soxe"></select></span>
                </td>
                <td>
                    <span>Ngày nhận xe:<input type="date" name="NGAYNHAN" id="date"></span>
                </td>
            </tr>
            <tr>
                <td>
                    <span>Thành tiền:<input type="text" name="tongtien" id="tongtien"></span>
                </td>
            </tr>
        </table>
        <table class="table2"></table>
        <input type="submit" value="Thêm">
    </form>

</div>

<?php updatebd() ?>