<?php
error_reporting(E_ALL ^ E_WARNING);
session_start();
include "../registration/constant.php";
$mobile_no=$_POST["mobile_no"];
$email=$_POST["email"];
$password=$_POST["password"];
$confirm_password=$_POST["confirm_password"];
$flagsubmit=true;
$reg_mob="/^[0-9]{10}$/";
if (($mobile_no=="")&&($email=="")&&($password=="")&&($confirm_password=="")) {
	$flagsubmit=false;
}
	if(!preg_match($reg_mob,$mobile_no)){
        $flagsubmit=false;
      }

      if (!filter_var($email, FILTER_VALIDATE_EMAIL) === true) { 
            $flagsubmit=false;      
            }
if ($flagsubmit) {
	
$sent=array("mobile_no"=>$mobile_no,"password"=>$password,"email"=>$email);
$recieve=apicall("/api/customer/userregister",$sent);
if ($recieve["message"]=="success") {
	echo "Account created successfully";
	$_SESSION["user_details"]["user_id"] = $recieve["user_id"];
	$_SESSION["user_details"]["mobile_no"]=$mobile_no;


	//mailing info
                   

                 //  require '../registration/phpmailer/PHPMailerAutoload.php';

                 //  $mail = new PHPMailer;

                 //  //$mail->SMTPDebug = 4;                               // Enable verbose debug output

                 //  $mail->isSMTP();                                      // Set mailer to use SMTP
                 //  $mail->Host = 'email-smtp.us-west-2.amazonaws.com';  // Specify main and backup SMTP servers
                 //  $mail->SMTPAuth = true;                               // Enable SMTP authentication
                 //  $mail->Username = 'AKIAJQXNJN7LC4PMFNEA';                 // SMTP username
                 //  $mail->Password = 'BH2xDqi59QZenTjO141tO0un3bqYCKr6k+W1iDUYP+ap';                           // SMTP password
                 //  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                 //  $mail->Port = 587;                                    // TCP port to connect to

                 //  $mail->setFrom('csichapters@gmail.com', 'CSI AKGEC');
                 //  $mail->addAddress($email);     // Add a recipient
                 //                 // Name is optional
                 // // $mail->addReplyTo('info@example.com', 'Information');
                 // // $mail->addCC('cc@example.com');
                 // // $mail->addBCC('bcc@example.com');

                 //  //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                 //  //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                 //  $mail->isHTML(true);                                  // Set email format to HTML

                 //  $mail->Subject = ' CSI Signup Successfull';
                 //  $mail->Body    = 'Congratulations! Your Signup was Successfull On <b>CSI AKGEC</b>. You have registered with Mobile No:<b>'.$mobile_no.'</b> And Your Password is <b>'.$password.'</b>. You can use this mobile number and password to login to your profile. You can also download <b>THE INITIATIVE\'19 </b>app to Register.<br>For any queries, please write to us at csichapters@gmail.com .<br>All The Best.<br>Regards,Team CSI.';
                 //  $mail->AltBody = 'Congratulations! Your Signup was Successfull On CSI AKGEC. You have registered with Mobile No:'.$mobile_no.' And Your Password is '.$password.'. You can use this mobile number and password to login to your profile. You can also download THE INITIATIVE\'19 app to Register.For any queries, please write to us at csichapters@gmail.com .All The Best.Regards,Team CSI.';

                 //  $mail->send();


}
elseif ($recieve["message"]=="already_exist") {
	echo "Sorry! Mobile Number Already Exist";
}
else{
	echo "Some Unexpected Error Occured";
}
}
else{
	echo "Please Enter all the fields";
}
//echo $recieve["user_id"];
//echo json_encode($_SESSION["user_details"]);

?>