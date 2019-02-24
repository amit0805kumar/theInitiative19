//Login Validation
$(function () {

    $("#submit").attr("disabled", "disabled");


    var mobile = false;
    var password_login = false;
    $('#mobile_no_login').css('border-bottom', '1.5px solid orangered');
    $('#password_login').css('border-bottom', '1.5px solid orangered');

    $("#mobile_no_login").keyup(function () {
        check_mobile();
        confirm_status();

    });

    $("#password_login").keyup(function () {
        check_password();
        confirm_status();

    });


    //validations 
    function check_mobile() {
        var regex_mobile = /^[0-9]{10}$/;
        var num_length = ($("#mobile_no_login").val()).length;

        if (num_length != 10) {
            $('#mobile_no_login').css('border-bottom', '1.5px solid orangered');
            $('#password_login').css('border-bottom', '1.5px solid orangered');
            $("#mobile_error").text("Enter correct details");
            mobile = false;
            $("#submit").attr("disabled", "disabled");
        } else if (!regex_mobile.test($("#mobile_no_login").val())) {
            $('#mobile_no_login').css('border-bottom', '1.5px solid orangered');
            $('#password_login').css('border-bottom', '1.5px solid orangered');
            $("#mobile_error").text("Enter correct details");
            mobile = false;
            $("#submit").attr("disabled", "disabled");
        } else {
            $("#mobile_error").text("");
            mobile = true;
            $('#mobile_no_login').css('border-bottom', '1.5px solid green');
        }
    };


    function check_password() {
        var num_length = ($("#password_login").val()).length;
        console.log(num_length);
        if (num_length < 6) {
            $("#password_login_error").text("Password must be of 6 digit");
            password_login = false;
            $('#password_login').css('border-bottom', '1.5px solid orangered');
            $("#submit").attr("disabled", "disabled");
        } else {
            $("#password_login_error").text("");
            password_login = true;
            $('#password_login').css('border-bottom', '1.5px solid green');

        }
    };


    function confirm_status() {
        if (mobile === true && password_login === true) {
            $("#submit").removeAttr("disabled");
        }
    }


});



//Sign up validation


$(function () {
    $("#signup_submit").attr("disabled", "disabled");
    var mobile = false;
    var password_signup = false;
    var confirm_password = false;
    var email = false;


    var mobileNo = $("#mobile_no");
    var inemail = $("#email");
    var pwd = $("#password");
    var cpwd = $("#confirm_password");

    mobileNo.css('border-bottom', '1.5px solid orangered');
    pwd.css('border-bottom', '1.5px solid orangered');
    inemail.css('border-bottom', '1.5px solid orangered');
    cpwd.css('border-bottom', '1.5px solid orangered');

    mobileNo.keyup(function () {
        check_mobile();
        confirm_status();

    });

    inemail.keyup(function () {
        check_email();
        confirm_status();

    });


    pwd.keyup(function () {
        check_password();
        confirm_status();

    });


    cpwd.keyup(function () {
        check_confirm_password();
        confirm_status();

    });

    //validations 
    function check_mobile() {
        var regex_mobile = /^[0-9]{10}$/;
        var num_length = ($("#mobile_no").val()).length;
        if (num_length != 10) {
            $("#mobile_no_error").text("Enter correct details");
            mobile = false;
            $("#signup_submit").attr("disabled", "disabled");
            mobileNo.css('border-bottom', '1.5px solid orangered');
        } else if (!regex_mobile.test($("#mobile_no").val())) {
            $("#mobile_no_error").text("Enter correct details");
            mobile = false;
            $("#signup_submit").attr("disabled", "disabled");
            mobileNo.css('border-bottom', '1.5px solid orangered');
        } else {
            $("#mobile_no_error").text("");
            mobile = true;
            mobileNo.css('border-bottom', '1.5px solid green');
        }
    };


    function check_email() {
        var regex_email = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);

        if (regex_email.test($('#email').val())) {
            $("#email_error").text("");
            email = true;
            inemail.css('border-bottom', '1.5px solid green');
        } else {
            $("#email_error").text("Enter correct email.");
            email = false;
            $("#signup_submit").attr("disabled", "disabled");
            inemail.css('border-bottom', '1.5px solid orangered')

        }
    };


    function check_password() {
        var num_length = ($("#password").val()).length;
        if (num_length < 6) {
            $("#password_error").text("Password must be of 6 digit");
            password_signup = false;
            $("#signup_submit").attr("disabled", "disabled");
            pwd.css('border-bottom', '1.5px solid orangered');
        } 
         else if ($("#password").val() != $("#confirm_password").val()) {
            $("#confirm_password_error").text("Password does not match");
            confirm_password = false;
            $("#signup_submit").attr("disabled", "disabled");
            cpwd.css('border-bottom', '1.5px solid orangered');
        }
        
      if(num_length >= 6){
            $("#password_error").text("");
            password_signup = true;
            pwd.css('border-bottom', '1.5px solid green');

        }
    };


    function check_confirm_password() {
        var num_length = ($("#confirm_password").val()).length;
        if ($("#password").val() != $("#confirm_password").val()) {
            $("#confirm_password_error").text("Password does not match");
            confirm_password = false;
            $("#signup_submit").attr("disabled", "disabled");
             cpwd.css('border-bottom', '1.5px solid orangered');
             pwd.css('border-bottom', '1.5px solid orangered');
        } else {
            $("#password_error").text("");
            $("#confirm_password_error").text("");
            confirm_password = true;
            cpwd.css('border-bottom', '1.5px solid green');
             pwd.css('border-bottom', '1.5px solid green');

        }
    };


    function confirm_status() {
        if (mobile === true && password_signup === true && confirm_password === true) {
            $("#signup_submit").removeAttr("disabled");
        }
    }


});
