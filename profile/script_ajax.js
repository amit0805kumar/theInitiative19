$(document).ready(function () {

    $(document).on('submit', '#upload_synopsis_form', function (event) {
      //  console.log("vhgvgh");
       // $('.loader').css('display','block');
        event.preventDefault();
        //$("#signup_submit").attr('disabled','disabled');
        $.ajax({
            url: "upload_synopsis.php",
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (data) {
                //$("#signup_submit").removeAttr('disabled'); 

            }
        });


    });

    $(document).on('submit', '#task_form', function (event) {
        //console.log("vhgvgh");
       // $('.loader').css('display','block');
        event.preventDefault();
        //$("#signup_submit").attr('disabled','disabled');
        $.ajax({
            url: "upload_optional_task.php",
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (data) {
                //$("#signup_submit").removeAttr('disabled'); 

            }
        });


    });


});