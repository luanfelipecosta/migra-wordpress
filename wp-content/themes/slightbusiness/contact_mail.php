<?php
/*
 * Ajax contact Mail Function by ThemeWar
 */


$name = $_POST['name'];
$from = $_POST['email'];
$message = $_POST['message'];

$to = 'expjoomworker@gmail.com';

$subject = 'Query Mail From Sight Business';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$message .= "<br/><br/> Thanks<br/>".$name;

$headers .= 'From: <'.$from.'>' . "\r\n";

mail($to,$subject,$message,$headers);
echo 1;