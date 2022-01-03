<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="cau4.js"></script>

<script>
    $(document).ready(function() {
        $('#number').keypress(function(){
	        var keycode = (event.keyCode ? event.keyCode : event.which);
	        if(keycode == 13 ){
                event.preventDefault(); 
                var number = $('#number').val();
                ajax1(number);
	        }
        });          
    
    })
</script>

<input type="text" name="number" id="number">

<br>

<div>
        <div id="result"></div>
</div>