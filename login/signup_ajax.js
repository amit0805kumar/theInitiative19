$(document).ready(function(){

	$(document).on('submit','#signup_form',function(event){
		event.preventDefault();
		//$("#signup_submit").attr('disabled','disabled');
		$.ajax({
			url:"signup.php",
			method:'POST',
			data:new FormData(this),
			contentType:false,
			processData:false,
			success:function(data)
			{	 
				//$("#signup_submit").removeAttr('disabled'); 
				$('#signup_form')[0].reset();
				if (data=="Successfully Registered") {
					$("#error_msg").css("color","#18b435");
					$('#error_msg').html(data);
				}else{
					$("#error_msg").css("color","red");
				  $('#error_msg').html(data);	
				}
				
			}
		});
		setInterval(function(){
			$('#error_msg').html('');
		},10000);
		
		
	});

});