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
                
                if (data == "Account created successfully") {
                    $("#error_msg").css("color", "#18b435");
                    $("#error_msg").css("font-weight","600");

                    $('#error_msg').html("Account Created Successfully");
                } else if (data=="Sorry! Mobile Number Already Exist") {
                    $("#error_msg").css("color", "red");
                    $('#error_msg').html("Sorry! Mobile Number Already Exist");
                } else if (data=="Please Enter all the fields"){
                    $("#error_msg").css("color", "red");
                    $('#error_msg').html("Please Enter all the fields");
                }  else if(data=="Some Unexpected Error Occured"){
                    $("#error_msg").css("color", "red");
                    $('#error_msg').html("Please check internet connection and retry");
                } 
                else{
                    $("#error_msg").css("color", "red");
                    $('#error_msg').html("Please check internet connection and retry");
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
                    window.location.href = "../profile/";
                } else {
                    $("#error_msg_login").html(data);
                }


            }
        });
        setInterval(function () {
            $('#error_msg_login').html('');
        }, 10000);

    });



    $(document).on('submit', '#forget_password_form', function (event) {
        $('.loader').css('display','block');
        event.preventDefault();
         
        //$("#signup_submit").attr('disabled','disabled');
        $.ajax({
            url: "forgot_password.php",
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (data) {
                //$("#signup_submit").removeAttr('disabled'); 
                $('.loader').css('display','none');
                if (data=="success") {
                $('#forget_notify').html("Your password is sent to your email. Please check!");    
                }
                else if (data=="Mobile Number Doesn't exist!") {
                    $('#forget_notify').html("Mobile Number Doesn't exist!");
                }
                else{
                    $('#forget_notify').html("Some Unknown Error Occured!"); 
                }

            }
        });

    });

});
