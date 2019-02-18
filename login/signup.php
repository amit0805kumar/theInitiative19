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
	echo "Successfully Registered";
	$_SESSION["user_details"]["user_id"] = $recieve["user_id"];
	$_SESSION["user_details"]["mobile_no"]=$mobile_no;
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