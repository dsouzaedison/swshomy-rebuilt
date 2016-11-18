<?php 
//header('content-type: application/json; charset=utf-8');
//header("access-control-allow-origin: *");
$email = 'unknown@swshomy.com';

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

$email = $request->email;
$phone = $request->phone;
$name = $request->name ;
$service = $request->service;

$text = "Name: <b>" .$name ."</b><br/>";
$text .= "Phone: <b>" .$phone ."</b><br/>";
$text .= "Email: <b>" .$email ."</b><br/>";
$text .= "service: <p>" .$service ."</p><br/>";

require "mailer.php";

$status=mailer("dsouzaedison11@gmail.com","Service Request From SWS Services Website",$text,$email,"keyForFun");
?>