<?php
/*
 *  Subscription Email by ThemeWar
 */

$from = $_POST['email'];
$to = 'expjoomworker@gmail.com';

$subject = 'Subscribetion Mail From Sight Business';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$message = "<b>Subscriber:</b> ".$from;

$headers .= 'From: <'.$from.'>' . "\r\n";

mail($to,$subject,$message,$headers);
echo 1;