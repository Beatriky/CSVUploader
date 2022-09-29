$("input:checkbox").on('click', function() {
    // in the handler, 'this' refers to the box clicked on
    let $box = $(this);
    if ($box.is(":checked")) {
        // the name of the box is retrieved using the .attr() method
        // as it is assumed and expected to be immutable
        var group = "input:checkbox[name='" + $box.attr("name") + "']";
        // the checked state of the group/box on the other hand will change
        // and the current value is retrieved using .prop() method
        $(group).prop("checked", false);
        $box.prop("checked", true);
    } else {
        $box.prop("checked", false);
    }
});

function myFunction() {
    let checkBoxOscar = document.getElementById("checkboxOscar");
    let checkBoxProduct = document.getElementById("checkboxProduct");

    let text = document.getElementById("text");
    if (checkBoxOscar.checked === true || checkBoxProduct.checked ===true){
        text.style.display = "block";
    } else {
        text.style.display = "none";
    }
}

// $(document).ready(function(){
//     var clear_timer;
//
//     $('#sample_form').on('submit', function(event){
//         $('#message').html('');
//         event.preventDefault();
//         $.ajax({
//             url:"upload.php",
//             method:"POST",
//             data: new FormData(this),
//             dataType:"json",
//             contentType:false,
//             cache:false,
//             processData:false,
//             beforeSend:function(){
//                 $('#import').attr('disabled','disabled');
//                 $('#import').val('Importing');
//             },
//             success:function(data)
//             {
//                 if(data.success)
//                 {
//                     $('#total_data').text(data.total_line);
//
//                     $('#message').html('<div class="alert alert-success">CSV File Uploaded</div>');
//                 }
//                 if(data.error)
//                 {
//                     $('#message').html('<div class="alert alert-danger">'+data.error+'</div>');
//                     $('#import').attr('disabled',false);
//                     $('#import').val('Import');
//                 }
//             }
//         })
//     });
// });