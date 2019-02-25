<?php
error_reporting(E_ALL ^ E_WARNING);
session_start();
include "../registration/constant.php";
$team_id=$_POST["team_id"];
if ((isset($_POST["task_link"]))&&(isset($_POST["task_code"]))) {
	$task_code=$_POST["task_code"];
	$task_link=$_POST["task_link"];
	$sent=array("link"=>$task_link,"team_id"=>$team_id,"task_code"=>$task_code);
	$recieve=apicall("/api/customer/optionaltask",$sent);
}

$sent=array("team_id"=>$team_id);
$recieve=apicall("/api/customer/optionaltaskstatus",$sent);
//print_r($recieve);
if (json_encode($recieve)!="") {
	echo(json_encode($recieve));
}
else{
	echo "Your Task was not Uploaded Successfully";
}
?>