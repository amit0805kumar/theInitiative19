// //Login Validation
// $(function(){
//    $("#submit").attr("disabled", "disabled");
//      var mobile = false;
//      var password_login = false;
    
// 	$("#mobile_no_login").focusout(function(){
// 		check_mobile();
//         confirm_status();
        
// 	});    
    
//     $("#password_login").focusout(function(){
// 		check_password();
//         confirm_status();
        
// 	});    
    
    
//  //validations 
//     function check_mobile(){
// 		var regex_mobile = /^[0-9]{10}$/;		
// 		var num_length = ($("#mobile_no_login").val()).length;
// 		if (num_length!=10) 
// 		{
// 			$("#mobile_error").text("Enter correct details");
// 			mobile = false;
// 		}
// 		else if (!regex_mobile.test($("#mobile_no_login").val())) 
// 		{
// 			$("#mobile_error").text("Enter correct details");
// 			mobile = false;
// 		}
// 		else
// 		{
// 			$("#mobile_error").text("");
//             mobile = true;
// 		}
// 	};
    
    
//        function check_password(){
//         var num_length = ($("#password_login").val()).length;
// 		if (num_length<6) 
// 		{
// 			$("#password_login_error").text("Password must be of 6 digit");
// 			password_login = false;
// 		}
// 		else
// 		{
// 			$("#password_login_error").text("");
// 			password_login = true;
           
// 		}
// 	};
    
    
//   function confirm_status() {
//           if(mobile === true && password_login === true){
//             $("#submit").removeAttr("disabled");         
//           }        
// }
    
    
// });



//Sign up validation

$(function(){
   // $("#signup_submit").attr("disabled", "disabled");
     var mobile = false;
     var password_signup = false;
     var confirm_password = false;
     var email = false;
    
	$("#mobile_no").focusout(function(){
		check_mobile();
        confirm_status();
        
	});    
    
    $("#email").focusout(function(){
		check_email();
        confirm_status();
        
	});    
    
    
    $("#password").focusout(function(){
		check_password();
        confirm_status();
        
	});    
    
    
    $("#confirm_password").focusout(function(){
		check_confirm_password();
        confirm_status();
        
	});    
    
    
 //validations 
    function check_mobile(){
		var regex_mobile = /^[0-9]{10}$/;		
		var num_length = ($("#mobile_no").val()).length;
		if (num_length!=10) 
		{
			$("#mobile_no_error").text("Enter correct details");
			mobile = false;
		}
		else if (!regex_mobile.test($("#mobile_no").val())) 
		{
			$("#mobile_no_error").text("Enter correct details");
			mobile = false;
		}
		else
		{
			$("#mobile_no_error").text("");
            mobile = true;
		}
	};
    
    
    	function check_email(){
		var regex_email = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);

		if (regex_email.test($('#email').val()))
		{
			$("#email_error").text("");
            email = true;
		}
		else
		{
			$("#email_error").text("Enter correct email.");
			email = false;
            
		}
	};

    
      function check_password(){
        var num_length = ($("#password").val()).length;
		if (num_length<6) 
		{
			$("#password_error").text("Password must be of 6 digit");
			password_signup = false;
		}
          else if($("#password").val() != $("#confirm_password").val())
        {
               $("#password_error").text("Password does not match");
            $("#confirm_password_error").text("Password does not match");
			password_signup = false; 
        }
		else
		{
			$("#password_error").text("");
            $("#confirm_password_error").text("");
			password_signup = true;
           
		}
	};
    

      function check_confirm_password(){
        var num_length = ($("#confirm_password").val()).length;
		if (num_length<6) 
		{
			$("#confirm_password_error").text("Password must be of 6 digit");
			confirm_password = false;
		}
        else if($("#password").val() != $("#confirm_password").val())
        {
            $("#password_error").text("Password does not match");
            $("#confirm_password_error").text("Password does not match");
			confirm_password = false; 
        }
		else
		{
			$("#password_error").text("");
            $("#confirm_password_error").text("");
			confirm_password = true;
           
		}
	};
      
    
  function confirm_status() {
          if(mobile === true && password_signup === true && confirm_password === true){
            $("#signup_submit").removeAttr("disabled");         
          }        
}
    
    
});

