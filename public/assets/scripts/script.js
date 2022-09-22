$(document).ready(function(){

    var clear_timer;

    $('#sample_form').on('submit', function(event){
        $('#message').html('');
        event.preventDefault();
        $.ajax({
            url:"upload.php",
            method:"POST",
            data: new FormData(this),
            dataType:"json",
            contentType:false,
            cache:false,
            processData:false,
            beforeSend:function(){
                $('#import').attr('disabled','disabled');
                $('#import').val('Importing');
            },
            success:function(data)
            {
                if(data.success)
                {
                    $('#total_data').text(data.total_line);

                    $('#message').html('<div class="alert alert-success">CSV File Uploaded</div>');
                }
                if(data.error)
                {
                    $('#message').html('<div class="alert alert-danger">'+data.error+'</div>');
                    $('#import').attr('disabled',false);
                    $('#import').val('Import');
                }
            }
        })
    });

});