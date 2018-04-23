$(document).ready(function() {

    $('#search_text').keyup(function(){

        var txt = $(this).val();
        if (txt === ''){
            $('#result').html(' ')
        }
        else{
            $('#result').html('');
            $.ajax({
                url:'fetch.php',
                method:'POST',
                data:{search: txt},
                dataType: 'text',
                success:function (data) {
                    $('#result').html(data);
                }
            });
        }
    })
    console.log("Hello");
});