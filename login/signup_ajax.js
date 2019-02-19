$(document).ready(function () {

    $(document).on('submit', '#signup_form', function (event) {

        $('.loader').css('display','block');
        event.preventDefault();
        //$("#signup_submit").attr('disabled','disabled');
        $.ajax({
            url: "signup.php",
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (data) {
                //$("#signup_submit").removeAttr('disabled'); 
                $('#signup_form')[0].reset();
                if (data == "Successfully Registered") {
                    $("#error_msg").css("color", "#18b435");
                    $("#error_msg").css("font-weight","600");

                    $('#error_msg').html(data);
                } else {
                    $("#error_msg").css("color", "red");
                    $('#error_msg').html(data);
                }

                $('.loader').css('display','none');


            }
        });
        setInterval(function () {
            $('#error_msg').html('');
        }, 10000);


    });


    $(document).on('submit', '#login_form', function (event) {
        $('.loader').css('display','block');
        event.preventDefault();
         
        //$("#signup_submit").attr('disabled','disabled');
        $.ajax({
            url: "login.php",
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (data) {
                //$("#signup_submit").removeAttr('disabled'); 
                $('.loader').css('display','none');
                if (data == "success") {
                    window.location.href = "../profile/index.php";
                } else {
                    $("#error_msg_login").html(data);
                }


            }
        });
        setInterval(function () {
            $('#error_msg_login').html('');
        }, 10000);

    });

});
