
function selecthd(MAKH) {
    $.ajax({
        url: 'select_hd.php',
        type: 'POST',
        data: {
            MAKH: MAKH,
        },
       dataType: 'json',
        success: function (result) {
                console.log(result);
                var html = '';
                html +='<label>Mã hợp đồng:</label>';
                html +='<select name="MAHD" id="MAHD">';
                $(result).each(function (key, item) {
                    html += '<option value='+item['MAHOPDONG']+'>'+item['MAHOPDONG']+'</option>';
                });
                html +='</select>';
                $('#listHD').html(html); 
        },
        error: function(data, errorThrown){
            alert('error: ' + errorThrown +' loi');
        }
    });
}

function selectxe(MAHD){
    $.ajax({
        url: 'select_xe_hd.php',
        type: 'POST',
        data: {
            MAHD: MAHD,
        },
        dataType: 'json',
        success: function (result) {
            var html = '';
            html += '<table border= "1">';
            html += '<tr>';
            html += '<th>Tên xe</th>';
            html += '<th>Chức năng</th>';
            html += '</tr>';
            $(result).each(function (key,item){
                html += '<tr>';
                html += '<td>' + item['TENXE'] + '</td>';
                html += "<td>";
                html += "<button class='delete' value=" +item['MAXE']+">" + "Delete" +"</button>";
                html += "</td>";
                html += '</tr>';
                
            });
            html +='</table>';
            $('#listDSX').html(html);
        },
        error: function(data, errorThrown){
            alert('error: ' + errorThrown +' loi');
        }
    });
}

function delete_cthd(MAXE, MAHD){
    $.ajax({
        url: 'delete_cthd.php',
        type: 'POST',
        data: {
            MAXE: MAXE,
            MAHD: MAHD
        },
        success: function (result) {
            console.log(result);
            if(result == 'success')
            {
                alert('xóa thành công');
                selectxe(MAHD);
            }
        },
        error: function(data, errorThrown){
            alert('error: ' + errorThrown +' loi');
        }
    });
}