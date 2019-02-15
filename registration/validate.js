$(function(){
   
    $("#next").attr("disabled", "disabled");
    $("#next2,#submit2").attr("disabled", "disabled");
     $("#submit").attr("disabled", "disabled");
    
	var team_name = false;
    var team_topic = false;
    var mem1_email = false;
    var mem1_mobile = false;
    var mem1_stdno = false;
    var mem1_year = false;
    var mem1_branch = false;
    var mem2_name = false;
	var mem2_email = false;
	var mem2_mobile = false;
	var mem2_stdno = false;
	var mem2_year = false;
    var mem2_branch = false;
    var mem3_name = false;
	var mem3_email = false;
	var mem3_mobile = false;
	var mem3_stdno = false;
	var mem3_year = false;
    var mem3_branch = false;
    
    
    $("#team_name").focusout(function(){
		check_team_name();
        confirm_mem1();
        
	});
    
    
    $("#team_topic").focusout(function(){
		check_topic();
        confirm_mem1();
        
	});
   
    $("#mem1_name").focusout(function(){
		check_mem1_name();
        confirm_mem1();
        
	});
    
	$("#mem1_email").focusout(function(){
		check_mem1_email();
        confirm_mem1();
        
	});    
    
      
    
	$("#mem1_rollno").focusout(function(){
		check_mem1_rollno();
         confirm_mem1();
	});
    
    $("#college").focusout(function(){
		check_college();
         confirm_mem1();
	});
    
      $("#mem1_year").focusout(function(){
		check_mem1_year();
        confirm_mem1();
        
	});  
      $("#mem1_branch").focusout(function(){
		check_mem1_branch();
        confirm_mem1();
        
	});  
   
    
    
    
    $("#mem2_name").focusout(function(){
		check_mem2_name();
        confirm_mem2();
        
	});
    
	$("#mem2_email").focusout(function(){
		check_mem2_email();
        confirm_mem2();
	});
    
   	$("#mem2_mobile").focusout(function(){
		check_mem2_mobile();
        confirm_mem2();
	});
    
   
    $("#mem2_branch").focusout(function(){
		check_mem2_branch();
        confirm_mem2();
	});
    
   
	$("#mem2_year").focusout(function(){
		check_mem2_year();
        confirm_mem2();
	});
    
 
	$("#mem2_rollno").focusout(function(){
		check_mem2_rollno();
         confirm_mem2();
	});
    
    
    
    
     $("#mem3_name").focusout(function(){
		check_mem3_name();
        confirm_mem3();
        
	});
    
	$("#mem3_email").focusout(function(){
		check_mem3_email();
        confirm_mem3();
	});
    
   	$("#mem3_mobile").focusout(function(){
		check_mem3_mobile();
        confirm_mem3();
	});
    
   
    $("#mem3_branch").focusout(function(){
		check_mem3_branch();
        confirm_mem3();
	});
    
   
	$("#mem3_year").focusout(function(){
		check_mem3_year();
        confirm_mem3();
	});
    
 
	$("#mem3_rollno").focusout(function(){
		check_mem3_rollno();
         confirm_mem3();
	});
    
    
    //member 1 validations 
    function check_team_name(){
		var regex_team_name = /^[a-zA-Z ]{3,30}$/;

		if (regex_team_name.test($('#team_name').val()))
		{
			$("#team_name").css("border", "2px solid #5cb85c");
            team_name = true;
            
		}
		else
		{
			$("#team_name").css("border","2px solid #d9534f");
			team_name = false;
           
		}
	};
    
          function check_topic(){
		if ($("#team_topic").val()=="default") 
		{
			$("#team_topic").css("border","2px solid #d9534f");
			team_topic = false;
		}
		else
		{
			$("#team_topic").css("border", "2px solid #5cb85c");
            team_topic=true;
		}
	};
    
        function check_mem1_name(){
		var regex_mem1_name = /^[a-zA-Z ]{3,30}$/;

		if (regex_mem1_name.test($('#mem1_name').val()))
		{
			$("#mem1_name").css("border", "2px solid #5cb85c");
            mem1_name = true;
           
		}
		else
		{
			$("#mem1_name").css("border","2px solid #d9534f");
			mem1_name = false;
           
		}
	};
    
	function check_mem1_email(){
		var regex_mem1_email = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);

		if (regex_mem1_email.test($('#mem1_email').val()))
		{
			$("#mem1_email").css("border", "2px solid #5cb85c");
            mem1_email = true;
		}
		else
		{
			$("#mem1_email").css("border","2px solid #d9534f");
			mem1_email = false;
            
		}
	};

	
    
    function check_mem1_rollno(){
		var regex_mem1_rollno = /^[0-9]{10}$/;		
		var num_mem1_length = ($("#mem1_rollno").val()).length;
		if (num_mem1_length!=10) 
		{
			$("#mem1_rollno").css("border","2px solid #d9534f");
			mem1_rollno = false;
		}
		else if (!regex_mem1_rollno.test($("#mem1_rollno").val())) 
		{
			$("#mem1_rollno").css("border","2px solid #d9534f");
			mem1_rollno = false;
		}
		else
		{
			$("#mem1_rollno").css("border", "2px solid #5cb85c");
            mem1_rollno = true;
		}
	};
    
    
            function check_college(){
		var regex_college = /^[a-zA-Z ]{3,50}$/;

		if (regex_college.test($('#college').val()))
		{
			$("#college").css("border", "2px solid #5cb85c");
            college = true;
           
		}
		else
		{
			$("#college").css("border","2px solid #d9534f");
			college = false;
           
		}
	};
    
	
        
     function check_mem1_year(){
		if ($("#mem1_year").val()=="default") 
		{
			$("#mem1_year").css("border","2px solid #d9534f");
			mem1_year = false;
		}
		else
		{
			$("#mem1_year").css("border", "2px solid #5cb85c");
            mem1_year=true;
		}
	};

    	function check_mem1_branch(){
		if ($("#mem1_branch").val()=="default") 
		{
			$("#mem1_branch").css("border","2px solid #d9534f");
			mem1_branch = false;
		}
		else
		{
			$("#mem1_branch").css("border", "2px solid #5cb85c");
            mem1_branch=true;
		}

	};
    
  function confirm_mem1() {
          console.log("name");
          console.log(mem1_name);
          if(team_name===true  && team_topic ===true && mem1_name === true && mem1_email===true  && mem1_branch===true && mem1_rollno===true && mem1_year===true && college=== true){
            $("#next").removeAttr("disabled");         
          }

          
          
}
    
    
    //member 2 validations
    
    function check_mem2_name(){
		var regex_mem2_name = /^[a-zA-Z ]{3,30}$/;

		if (regex_mem2_name.test($('#mem2_name').val()))
		{
			$("#mem2_name").css("border", "2px solid #5cb85c");
            mem2_name = true;
           
		}
		else
		{
			$("#mem2_name").css("border","2px solid #d9534f");
			mem2_name = false;
           
		}
	};
	function check_mem2_email(){
		var regex_mem2_email = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);

		if (regex_mem2_email.test($('#mem2_email').val()))
		{
			$("#mem2_email").css("border", "2px solid #5cb85c");
            mem2_email = true;
		}
		else
		{
			$("#mem2_email").css("border","2px solid #d9534f");
			mem2_email = false;
            
		}
	};

	function check_mem2_mobile(){
		var regex_mem2_mobile = /^[0-9]{10}$/;		
		var num_mem2_length = ($("#mem2_mobile").val()).length;
		if (num_mem2_length!=10) 
		{
			$("#mem2_mobile").css("border","2px solid #d9534f");
			mem2_mobile = false;
		}
		else if (!regex_mem2_mobile.test($("#mem2_mobile").val())) 
		{
			$("#mem2_mobile").css("border","2px solid #d9534f");
			mem2_mobile = false;
		}
		else
		{
			$("#mem2_mobile").css("border", "2px solid #5cb85c");
            mem2_mobile = true;
		}
	};
	

    
	function check_mem2_branch(){
		if ($("#mem2_branch").val()=="default") 
		{
			$("#mem2_branch").css("border","2px solid #d9534f");
			mem2_branch = false;
		}
		else
		{
			$("#mem2_branch").css("border", "2px solid #5cb85c");
            mem2_branch=true;
		}
    };
  
    function check_mem2_year(){
		if ($("#mem2_year").val()=="default") 
		{
			$("#mem2_year").css("border","2px solid #d9534f");
			mem2_year = false;
		}
		else
		{
			$("#mem2_year").css("border", "2px solid #5cb85c");
            mem2_year=true;
		}
	};
  
    


	function check_mem2_rollno(){
		var regex_mem2_rollno = /^[0-9]{10}$/;		
		var num_mem2_length = ($("#mem2_rollno").val()).length;
		if (num_mem2_length!=10) 
		{
			$("#mem2_rollno").css("border","2px solid #d9534f");
			mem2_rollno = false;
		}
		else if (!regex_mem2_rollno.test($("#mem2_rollno").val())) 
		{
			$("#mem2_rollno").css("border","2px solid #d9534f");
			mem2_rollno = false;
		}
		else
		{
			$("#mem2_rollno").css("border", "2px solid #5cb85c");
            mem2_rollno = true;
		}
	};		
        
        
        
    
    function confirm_mem2() {
         
         
          if( mem2_name===true && mem2_email===true && mem2_mobile===true && mem2_rollno===true && mem2_branch===true && mem2_year===true ){
            $("#next2,#submit2").removeAttr("disabled"); ; 
            
          }
          
}
    
    //member 3 validations
    function check_mem3_name(){
		var regex_mem3_name = /^[a-zA-Z ]{3,30}$/;

		if (regex_mem3_name.test($('#mem3_name').val()))
		{
			$("#mem3_name").css("border", "2px solid #5cb85c");
            mem3_name = true;
           
		}
		else
		{
			$("#mem3_name").css("border","2px solid #d9534f");
			mem3_name = false;
           
		}
	};
	function check_mem3_email(){
		var regex_mem3_email = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);

		if (regex_mem3_email.test($('#mem3_email').val()))
		{
			$("#mem3_email").css("border", "2px solid #5cb85c");
            mem3_email = true;
		}
		else
		{
			$("#mem3_email").css("border","2px solid #d9534f");
			mem3_email = false;
            
		}
	};

	function check_mem3_mobile(){
		var regex_mem3_mobile = /^[0-9]{10}$/;		
		var num_mem3_length = ($("#mem3_mobile").val()).length;
		if (num_mem3_length!=10) 
		{
			$("#mem3_mobile").css("border","2px solid #d9534f");
			mem3_mobile = false;
		}
		else if (!regex_mem3_mobile.test($("#mem2_mobile").val())) 
		{
			$("#mem3_mobile").css("border","2px solid #d9534f");
			mem3_mobile = false;
		}
		else
		{
			$("#mem3_mobile").css("border", "2px solid #5cb85c");
            mem3_mobile = true;
		}
	};
	

    
	function check_mem3_branch(){
		if ($("#mem3_branch").val()=="default") 
		{
			$("#mem3_branch").css("border","2px solid #d9534f");
			mem3_branch = false;
		}
		else
		{
			$("#mem3_branch").css("border", "2px solid #5cb85c");
            mem3_branch=true;
		}
    };
  
    function check_mem3_year(){
		if ($("#mem3_year").val()=="default") 
		{
			$("#mem3_year").css("border","2px solid #d9534f");
			mem3_year = false;
		}
		else
		{
			$("#mem3_year").css("border", "2px solid #5cb85c");
            mem3_year=true;
		}
	};
  
    


	function check_mem3_rollno(){
		var regex_mem3_rollno = /^[0-9]{10}$/;		
		var num_mem3_length = ($("#mem3_rollno").val()).length;
		if (num_mem3_length!=10) 
		{
			$("#mem3_rollno").css("border","2px solid #d9534f");
			mem3_rollno = false;
		}
		else if (!regex_mem3_rollno.test($("#mem2_rollno").val())) 
		{
			$("#mem3_rollno").css("border","2px solid #d9534f");
			mem3_rollno = false;
		}
		else
		{
			$("#mem3_rollno").css("border", "2px solid #5cb85c");
            mem3_rollno = true;
		}
        
	};

    
    function confirm_mem3() {
         
         
          if( mem3_name===true && mem3_email===true && mem3_mobile===true && mem3_rollno===true && mem3_branch===true && mem3_year===true ){
            $("#submit").removeAttr("disabled"); 
            
          }

          
}
    
    

    
    
    
    
    
    
    
});