<?php
error_reporting(E_ALL ^ E_WARNING);
session_start();
include "../registration/constant.php";
$task_link=$_POST["task_link"];
$team_id=$_POST["team_id"];
$task_code=$_POST["task_code"];
$sent=array("link"=>$task_link,"team_id"=>$team_id,"task_code"=>$task_code);
$recieve=apicall("/api/customer/optionaltask",$sent);
if ($recieve["message"]=="success") {
	echo "success";
}
?>