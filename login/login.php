<?php
error_reporting(E_ALL ^ E_WARNING);
session_start();
include "../registration/constant.php";
$mobile_no_login=$_POST["mobile_no_login"];
$password_login=$_POST["password_login"];
$reg_mob="/^[0-9]{10}$/";
if (($mobile_no_login=="")&&($password_login=="")) {
	$flagsubmit=false;
}
if(!preg_match($reg_mob,$mobile_no_login)){
        $flagsubmit=false;
      }
echo "dfsdh";
$sent=array("mobile_no"=>$mobile_no_login,"password"=>$password_login);
$recieve=apicall("/api/customer/login",$sent);
print_r($recieve);
if ($recieve["message"]=="success") {
	header("Location:../profile/index.php");
}
if ($recieve["message"]=="invalid_mobile_password") {
	# code...
	header("Location:../registration/error_bak.html");
}
else{
	header("Location:../registration/error_bak.html");	
}
//echo $recieve["user_id"];
$_SESSION["user_details"]["user_id"] = $recieve["user_id"];
$_SESSION["user_details"]["mobile_no"] = $mobile_no_login;

echo $_SESSION["user_details"]["user_id"];
echo $_SESSION["user_details"]["mobile_no"];

//echo json_encode($_SESSION["user_details"]);

?>