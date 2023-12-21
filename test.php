<?php


// OTP System
function SMS_API($number, $messages)
{
    $number = $number;
    $messages = $messages;
    $url = 'http://api.greenweb.com.bd/api.php?json&token=2966070732169128405295f2776ee4a84e0c7c332b10ab173604&to=' . $number . '&message=' . rawurldecode($messages);
    $gateway = preg_replace("/ /", "%20", $url);
    $result = file_get_contents($gateway);
    $decode = json_decode($result, true);
    return $decode;
}



echo SMS_API('01843640517', 'Test SMS');

?>