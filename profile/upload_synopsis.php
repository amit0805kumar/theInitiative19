<?php
error_reporting(E_ALL ^ E_WARNING);
session_start();
include "../registration/constant.php";
$synopsis_link=$_POST["synopsis_link"];
$team_id=$_POST["team_id"];
$sent=array("url"=>$synopsis_link,"team_id"=>$team_id);
$recieve=apicall("/api/customer/synopsis",$sent);
if ($recieve["message"]=="success") {
	echo "success";
}
?>