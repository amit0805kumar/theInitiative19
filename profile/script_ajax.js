$(function () {
    var team_id = $("#team_id").val();
    $.ajax({
            url: "upload_synopsis.php",
            method: 'POST',
            data:{
                team_id:team_id
            },
            success: function (data) {
                //$("#signup_submit").removeAttr('disabled');
                $("#uploaded_synopsis_link").html(data);
                $("#uploaded_synopsis_link").attr('href',data);

            }
        });



    $(document).on('submit', '#upload_synopsis_form', function (event) {
      //  console.log("vhgvgh");

        $('.loader').css('display','block');
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
                $("#uploaded_synopsis_link").html(data);
                $("#uploaded_synopsis_link").attr('href',data);
                $('#upload_synopsis_form')[0].reset();
                 $('.loader').css('display','none');

            }
        });


    });

    $(document).on('submit', '#task_form', function (event) {
        //console.log("vhgvgh");
        $('.loader').css('display','block');
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
                // $("#optional_task_link").html(data);
                // $("#optional_task_link").attr('href',data);
                console.log(data);
                $('#task_form')[0].reset();
                $('.loader').css('display','none'); 

            }
        });


    });


});