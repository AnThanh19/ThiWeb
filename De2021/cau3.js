function timKH(SOXE){
    $.ajax({
        url: 'tim_KH.php',
        type: 'POST',
        data:{
            SOXE: SOXE
        },
        datatype: 'json',
        success: function (result){
            console.log(result);
            let json = JSON.parse(result); 
            //json lúc này là 1 object có thuộc tính HOTENKH
            console.log(json.HOTENKH);
            document.getElementById("result").value = json.HOTENKH;
            
        },
        error: function(data, errorThrown){
            alert('error: ' + errorThrown +' loi');
        }
    });
}