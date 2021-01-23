<?php 
$default_lat = 23.9;
$default_lan = 90.8;

$user_let;

// $let = isset($user_let) ? $user_let : $default_lat;

// Null coalesce operator 
$let = $user_let ?? $default_lat;
echo $let;

// if(isset($user_let)){
//     $let = $user_let;
// }else{
//     $let = $default_lat;
// }
