function ajax1(number) {
    $.ajax({
        url: 'list_xe.php',
        type: 'POST',
        data: {
            number: number,
        },
        dataType: 'json',
        success: function(result){
            var html = '';
            html += '<table border="1px">';
            html += '<tr>'
            html += '<th>Tên xe</th>';
            html += '<th>Số lần thuê</th>';
            html += '</tr>';
            $(result).each(function(key,item){
                html += '<tr>';
                html += '<td>' + item['TENXE'] + '</td>';
                html += '<td>' + item['SOLAN'] + '</td>';
                html += '</tr>';
            });
            html += '</table>';
            $('#result').html(html);
        },
        error: function(data, errorThrown){
            alert('error: ' + errorThrown +' loi');
        }
    });
}