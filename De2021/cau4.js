function show_soxe(date){
    $.ajax({
        url: 'show_soxe.php',
        type: 'POST',
        data:{
            date: date
        },
        success: function (result) {
            console.log(result);
            $('#soxe').html(result);   
        },
        error: function(data, errorThrown){
            alert('error: ' + errorThrown +' loi');
        }
    });
}

function show_cv(MABD){
    $.ajax({
        url: 'show_cv.php',
        type: 'POST',
        data:{
            MABD: MABD
        },
        success: function (result) {
            console.log(result);
            $('.table2').html(result);   
        },
        error: function(data, errorThrown){
            alert('error: ' + errorThrown +' loi');
        }
    });
}

function show_tongtien(MABD){
    $.ajax({
        url: 'show_tongtien.php',
        type: 'POST',
        data:{
            MABD: MABD
        },
        success: function (result) {
            console.log(result);
            document.getElementById("tongtien").value = result;
        },
        error: function(data, errorThrown){
            alert('error: ' + errorThrown +' loi');
        }
    });
}

function delete_ctbd(MABD,MACV){
    $.ajax({
        url: 'delete_ctbd.php',
        type: 'POST',
        data:{
            MABD: MABD,
            MACV: MACV
        },
        success: function(result){
            console.log(result);
            if(result == 'success'){
                alert('xóa thành công');
                show_cv(MABD);
                show_tongtien(MABD); 
            }
        }
    });

}