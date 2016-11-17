<?php
function mailer($t,$sub,$con,$email,$key)
{
$headers = "From:" .$email ."\r\n";	
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$to = $t;
$subject = $sub;
$content = $con;
$api_key = $key;
if($api_key != "keyForFun") die("Access Denied!");
$status=mail($to,$subject,$content,$headers);
if(!$status) return 0;
else return 1;
}
?>