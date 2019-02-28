<?php
include "../registration/constant.php";
if (isset($_POST["phone_no"])) {
	$phone_no=$_POST["phone_no"];
	$sent=array("mobile_no"=>$phone_no);
	$recieve=apicall("/api/customer/forgotpassword",$sent);
	if ($recieve["message"]=="success") {
		$email=$recieve["email"];
		$mobile_no=$recieve["user_id"];
		$password=$recieve["password"];
		

		require '../registration/phpmailer/PHPMailerAutoload.php';

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
                  $mail->addAddress($email);     // Add a recipient
                  
                                 // Name is optional
                 // $mail->addReplyTo('info@example.com', 'Information');
                 // $mail->addCC('cc@example.com');
                 // $mail->addBCC('bcc@example.com');

                  //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                  //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                  $mail->isHTML(true);                                  // Set email format to HTML

                  $mail->Subject = 'The INITIATIVE 2019 Password';
                  $mail->Body    = '<b>Hi!</b><br>You Recently Requested for Your password Information.<br>Your Mobile Number is <b>'.$mobile_no.'</b> and Your Password is <b>'.$password.'</b><br>Thanks,<br>Regards, Team CSI';
                  $mail->AltBody = 'Hi!You Recently Requested for Your password Information.<br>Your Mobile Number is '.$mobile_no.' and Your Password is '.$password.'Thanks!Regards, Team CSI';

                 if ($mail->send()) {
                  	echo "success";
                  } 
                  else{
                  	echo "error";
                  }

	}
	else{
		echo "Mobile Number Doesn't exist!";
	}
}

?>