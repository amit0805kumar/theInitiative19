<?php
include "constant.php";
$team_name=$_POST["team_name"];
$team_topic=$_POST["team_topic"];
$mem1_name=$_POST["mem1_name"];
$mem1_email=$_POST["mem1_email"];
$mem1_mobile=$_POST["mem1_mobile"];
$mem1_branch=$_POST["mem1_branch"];
$mem1_year=$_POST["mem1_year"];
$mem1_stdno=$_POST["mem1_stdno"];
$mem2_name=$_POST["mem2_name"];
$mem2_email=$_POST["mem2_email"];
$mem2_mobile=$_POST["mem2_mobile"];
$mem2_branch=$_POST["mem2_branch"];
$mem2_year=$_POST["mem2_year"];
$mem2_stdno=$_POST["mem2_stdno"];
$mem3_name=$_POST["mem3_name"];
$mem3_email=$_POST["mem3_email"];
$mem3_mobile=$_POST["mem3_mobile"];
$mem3_branch=$_POST["mem3_branch"];
$mem3_year=$_POST["mem3_year"];
$mem3_stdno=$_POST["mem3_stdno"];
$flagsubmit=true;
$mem_count=2;
$master=true;
//reg exps
            $reg_std_n="/^[0-9]{7}$/";
            $reg_std_l="/^[0-9]{7}[D]{1}$/";
			$reg_mob="/^[0-9]{10}$/";

      if (($team_name=="")&&($team_topic=="")&&($mem1_name=="")&&($mem1_email=="")&&($mem1_mobile=="")&&($mem1_branch=="")&&($mem1_year=="")&&($mem1_stdno=="")&&($mem2_name=="")&&($mem2_email=="")&&($mem2_mobile=="")&&($mem2_branch=="")&&($mem2_year=="")&&($mem2_stdno=="")) {
        # code...
        $flagsubmit=false;
      }

      if($mem3_name!=""){
    $mem_count=3;
    if (!filter_var($mem3_email, FILTER_VALIDATE_EMAIL) === true) {   //for member 1
            echo("Email is not a valid email address");
            $flagsubmit=false;      
            } 

    if(!preg_match($reg_std_n,$mem3_stdno))
                { 
          echo "invalid student id";
          $flagsubmit=false;
          }

    if(!preg_match($reg_mob,$mem3_mobile)){
        echo "invalid contact for member2";
        $flagsubmit=false;
      }

}
//validate email
			if (!filter_var($mem1_email, FILTER_VALIDATE_EMAIL) === true) {		//for member 1
            echo("Email is not a valid email address");
            $flagsubmit=false;			
            } 
        
            if (!filter_var($mem2_email, FILTER_VALIDATE_EMAIL) === true) {		//for member 2
            echo("Email is not a valid email address");
            $flagsubmit=false;			
            } 
//validate stdno
            if(!preg_match($reg_std_n,$mem1_stdno))
                { 
				  echo "invalid student id";
				  $flagsubmit=false;
			    }

    if(!preg_match($reg_std_n,$mem2_stdno) )
                { 
				  echo "invalid student id";
				  $flagsubmit=false;
			    }

//validate mobile
                if(!preg_match($reg_mob,$mem1_mobile)){
				echo "invalid contact for member1";
				$flagsubmit=false;
			}
			if(!preg_match($reg_mob,$mem2_mobile)){
				echo "invalid contact for member2";
				$flagsubmit=false;
			}

    
//create teamid====================================================================
			// $sqlteam="Select count(team_id) from initiative";

   //          $result=mysqli_query($Connection,$sqlteam);
			// $count=mysqli_fetch_assoc($result);
   //          $c=$count["count(team_id)"];
   //          $c=$c+1;
   //          $team_id='INIT-'.$c;

if($flagsubmit){

$sent=array("team_name"=>$team_name,"topic"=>$team_topic,"email"=>$mem1_email,"mobile_no"=>$mem1_mobile);
$recieve=apicall("/api/customer/teamregister",$sent);
$teamid=$recieve["team_id"];
//mem1_details
$sent=array("team_id"=>$teamid,"name"=>$mem1_name,"mobile"=>$mem1_mobile,"branch"=>$mem1_branch,"year"=>$mem1_year,"student_no"=>$mem1_stdno);
apicall("/api/customer/addmember",$sent);
//mem2_details
$sent=array("team_id"=>$teamid,"name"=>$mem2_name,"mobile"=>$mem2_mobile,"branch"=>$mem2_branch,"year"=>$mem2_year,"student_no"=>$mem2_stdno);
$msg_success=apicall("/api/customer/addmember",$sent);
//mem3_details
if ($mem_count==3) {

  $sent=array("team_id"=>$teamid,"name"=>$mem3_name,"mobile"=>$mem3_mobile,"branch"=>$mem3_branch,"year"=>$mem3_year,"student_no"=>$mem3_stdno);
$msg_success=apicall("/api/customer/addmember",$sent);
}
if ($msg_success["message"]=="success") {
  header("Location:success.html");
}
else{
  header("Location:error_bak.html");
}
}
else{
  header("Location:error_bak.html");
}

//mem3_details


/*if($mem_count=2){ 
            
if($flagsubmit){ 

 $master=true;
$sq = "INSERT INTO team (team_id, team_password, team_name, team_topic, team_mem1_name, team_mem1_mobile, team_mem1_email, team_mem1_clg, team_mem1_stdno, team_mem1_branch, team_mem1_year, team_mem2_name, team_mem2_mobile, team_mem2_email, team_mem2_clg, team_mem2_stdno, team_mem2_branch, team_mem2_year) VALUES ('$team_id','$team_password','$team_name','$team_topic','$mem1_name','$mem1_mobile','$mem1_email','$mem1_college','$mem1_stdno','$mem1_branch','$mem1_year','$mem2_name','$mem2_mobile','$mem2_email','$mem2_college','$mem2_stdno','$mem2_branch','$mem2_year')";

  
if (mysqli_query($Connection, $sq)) {
    echo "New record created successfully";
    
} 
  else{
      echo mysqli_error($Connection);
      $master=false;
  }
}
else {
    
    header("Location:index.php");
    
}
}*/

  

  

            //mailing info
                   

                 //  require 'phpmailer/PHPMailerAutoload.php';

                 //  $mail = new PHPMailer;

                 // // $mail->SMTPDebug = 4;                               // Enable verbose debug output

                 //  $mail->isSMTP();                                      // Set mailer to use SMTP
                 //  $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                 //  $mail->SMTPAuth = true;                               // Enable SMTP authentication
                 //  $mail->Username = 'csichapters@gmail.com';                 // SMTP username
                 //  $mail->Password = 'Computer@society';                           // SMTP password
                 //  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                 //  $mail->Port = 587;                                    // TCP port to connect to

                 //  $mail->setFrom('csichapters@gmail.com', 'CSI AKGEC');
                 //  $mail->addAddress($mem1_email);     // Add a recipient
                 // // $mail->addAddress('ellen@example.com');               // Name is optional
                 // // $mail->addReplyTo('info@example.com', 'Information');
                 // // $mail->addCC('cc@example.com');
                 // // $mail->addBCC('bcc@example.com');

                 //  //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                 //  //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                 //  $mail->isHTML(true);                                  // Set email format to HTML

                 //  $mail->Subject = 'The INITIATIVE 2019 Registration Confirmation';
                 //  $mail->Body    = 'Congratulations! You\'ve successfully registered for <b>THE INITIATIVE 2019</b>! Your TeamID is <b>'.$team_id.'</b> and Your Password is <b>'.$team_password.'</b>.Login to your profile to submit the synopsis and optional tasks.<br>For any queries, please write to us at csichapters@gmail.com .<br>All The Best.<br>Regards,Team CSI.';
                 //  $mail->AltBody = 'Congratulations! You\'ve successfully registered for The INITIATIVE 2019! Your TeamID is '.$team_id.' And Your Password is '.$team_password.'. Login to your profile to submit the synopsis and optional tasks.For any queries, please write to us at csichapters@gmail.com.All The Best.Regards,Team CSI.';

                 //  $mail->send();
                     





                   //header("Location:success/index.html");
         








?>