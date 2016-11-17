<?php 
//header('content-type: application/json; charset=utf-8');
//header("access-control-allow-origin: *");

if(isset($_POST['name']))
	$name=$_POST['name'];
else $name = '';
if(isset($_POST['email']))
	$email=$_POST['email'];
else $email = '';
if(isset($_POST['phone']))
	$phone=$_POST['phone'];
else $phone = '';
if(isset($_POST['service']))
	$service=$_POST['service'];
else $service = '';

$text = "Name: <b>" .$name ."</b><br/>";
$text .= "Phone: <b>" .$phone ."</b><br/>";
$text .= "Email: <b>" .$email ."</b><br/>";
$text .= "service: <p>" .$service ."</p><br/>";

require "mailer.php";

$status=mailer("testing@gmail.com","Service Request From SWS Services Website",$text,$email,"keyForFun");
?>