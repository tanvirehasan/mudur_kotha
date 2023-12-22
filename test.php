<?php

function SMS_API($number, $messages)
{
    $number = $number;
    $messages = $messages;
    $url = 'http://api.greenweb.com.bd/api.php?json&token=2966070732169128405295f2776ee4a84e0c7c332b10ab173604&to=' . $number . '&message=' . rawurldecode($messages);
    $gateway = preg_replace("/ /", "%20", $url);
    $result = file_get_contents($gateway);
    $decode = json_decode($result, true);
    return $decode; // Returning decoded data
}


$phoneNO = '018436405';
$otp = rand(1111, 6666);
$messages = "Your OTP is " . $otp;
$smsstatus = SMS_API($phoneNO, $messages);

$data = $smsstatus[0];

echo $data['to'];






?>