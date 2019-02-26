<?php
session_start();
include "constant.php";
$team_name=$_POST["team_name"];
$team_topic=$_POST["team_topic"];
$mem1_name=$_POST["mem1_name"];
$mem1_email=$_POST["mem1_email"];
$mem1_mobile=$_SESSION['user_details']['mobile_no'];
$mem1_branch=$_POST["mem1_branch"];
$mem1_year=$_POST["mem1_year"];
$mem1_rollno=$_POST["mem1_rollno"];
$mem2_name=$_POST["mem2_name"];
$mem2_email=$_POST["mem2_email"];
$mem2_mobile=$_POST["mem2_mobile"];
$mem2_branch=$_POST["mem2_branch"];
$mem2_year=$_POST["mem2_year"];
$mem2_rollno=$_POST["mem2_rollno"];
$mem3_name=$_POST["mem3_name"];
$college = $_POST["college"];
$mem3_email=$_POST["mem3_email"];
$mem3_mobile=$_POST["mem3_mobile"];
$mem3_branch=$_POST["mem3_branch"];
$mem3_year=$_POST["mem3_year"];
$mem3_rollno=$_POST["mem3_rollno"];
$flagsubmit=true;
$mem_count=2;
$master=true;
//reg exps
            $reg_std_n="/^[0-9]{10}$/";
            $reg_std_l="/^[0-9]{7}[D]{1}$/";
			$reg_mob="/^[0-9]{10}$/";

      if (($team_name=="")&&($team_topic=="")&&($mem1_name=="")&&($mem1_email=="")&&($mem1_mobile=="")&&($mem1_branch=="")&&($mem1_year=="")&&($mem1_rollno=="")&&($mem2_name=="")&&($mem2_email=="")&&($mem2_mobile=="")&&($mem2_branch=="")&&($mem2_year=="")&&($mem2_rollno=="")) {
        # code...
        $flagsubmit=false;
      }

      if($mem3_name!=""){
    $mem_count=3;
    if (!filter_var($mem3_email, FILTER_VALIDATE_EMAIL) === true) {   //for member 1
            echo("Email is not a valid email address");
            $flagsubmit=false;      
            } 

    if(!preg_match($reg_std_n,$mem3_rollno))
                { 
          echo "invalid roll number";
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
            if(!preg_match($reg_std_n,$mem1_rollno))
                { 
				  echo "invalid roll number";
				  $flagsubmit=false;
			    }

    if(!preg_match($reg_std_n,$mem2_rollno) )
                { 
				  echo "invalid roll number";
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

$sent=array("team_name"=>$team_name,"topic"=>$team_topic,"email"=>$mem1_email,"college"=>$college,"mobile_no"=>$mem1_mobile);
$recieve=apicall("/api/customer/teamregister",$sent);
$teamid=$recieve["team_id"];
$_SESSION["user_details"]["team_id"]=$recieve["team_id"];
//mem1_details
$sent=array("team_id"=>$teamid,"name"=>$mem1_name,"mobile"=>$mem1_mobile,"branch"=>$mem1_branch,"year"=>$mem1_year,"roll_no"=>$mem1_rollno);
apicall("/api/customer/addmember",$sent);
//mem2_details
$sent=array("team_id"=>$teamid,"name"=>$mem2_name,"mobile"=>$mem2_mobile,"branch"=>$mem2_branch,"year"=>$mem2_year,"roll_no"=>$mem2_rollno);
$msg_success=apicall("/api/customer/addmember",$sent);
//mem3_details
if ($mem_count==3) {

  $sent=array("team_id"=>$teamid,"name"=>$mem3_name,"mobile"=>$mem3_mobile,"branch"=>$mem3_branch,"year"=>$mem3_year,"roll_no"=>$mem3_rollno);
$msg_success=apicall("/api/customer/addmember",$sent);
}
if ($msg_success["message"]=="success") {
   header("Location:success");

         //mailing info
                   

                  require 'phpmailer/PHPMailerAutoload.php';

                  $mail = new PHPMailer;

                  //$mail->SMTPDebug = 4;                               // Enable verbose debug output

                  $mail->isSMTP();                                      // Set mailer to use SMTP
                  $mail->Host = 'email-smtp.us-west-2.amazonaws.com';  // Specify main and backup SMTP servers
                  $mail->SMTPAuth = true;                               // Enable SMTP authentication
                  $mail->Username = 'AKIAIT4OK6ETIUISY2YQ';                 // SMTP username
                  $mail->Password = 'BGbNtjzGN/vMhLcgJjMS54IZ0QLsi5H7y+y09EAsHu1J';                           // SMTP password
                  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                  $mail->Port = 587;                                    // TCP port to connect to

                  $mail->setFrom('csichapters@gmail.com', 'CSI AKGEC');
                  $mail->addAddress($mem1_email);     // Add a recipient
                  $mail->addAddress($mem2_email);
                  if ($mem_count==3) {
                    $mail->addAddress($mem3_email);
                  }
                                 // Name is optional
                 // $mail->addReplyTo('info@example.com', 'Information');
                 // $mail->addCC('cc@example.com');
                 // $mail->addBCC('bcc@example.com');

                  //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                  //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                  $mail->isHTML(true);                                  // Set email format to HTML

                  $mail->Subject = 'The INITIATIVE 2019 Registration Confirmation';
                  $mail->Body    = 'Congratulations! You\'ve successfully registered for <b>THE INITIATIVE 2019</b>! Your TeamID is <b>INIT-'.$teamid.'</b>.Login to your profile OR Download <b>THE INITIATIVE\'19</b> app to submit the synopsis and optional tasks.<br>For any queries, please write to us at csichapters@gmail.com .<br>All The Best.<br>Regards,Team CSI.<br><br>
                    <a href="#" style="font-family:sans-serif; color:#fff; font-size:15px; padding: 10px 15px; text-decoration:none; background: #7FFAFF; border-radius: 3px;">Download App</a>';
                  $mail->AltBody = 'Congratulations! You\'ve successfully registered for The INITIATIVE 2019! Your TeamID is INIT-'.$teamid.' And . Login to your profile OR Download THE INITIATIVE app to submit the synopsis and optional tasks.For any queries, please write to us at csichapters@gmail.com.All The Best.Regards,Team CSI.';

                  $mail->send();

}
else{
  header("Location:error_bak");
}
}
else{
 header("Location:error_bak");
}


  

  

           
                     





                   //header("Location:success/index.html");
         








?>