<?php
error_reporting(E_ALL ^ E_WARNING);
session_start();
include "../registration/constant.php";
$team_id=$_POST["team_id"];
if (isset($_POST["synopsis_link"])) {
	$synopsis_link=$_POST["synopsis_link"];
	$sent=array("url"=>$synopsis_link,"team_id"=>$team_id);
	$recieve=apicall("/api/customer/synopsis",$sent);
}

// if ($recieve["message"]=="success") {
// 	echo "success";
// }
$sent=array("team_id"=>$team_id);
$recieve=apicall("/api/customer/synopsisstatus",$sent);
if ($recieve["message"]=="success") {
	echo $recieve["url"];
}
else{
	echo "Your Synopsis was not Uploaded Successfully";
}
?>