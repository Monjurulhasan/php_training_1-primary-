<?php 
// php control structure alternative way to write
$n = 20;
if($n % 2 == 0){
    echo "This is an even number";
}else{
    echo "This is an odd number";
} 

echo PHP_EOL;

if($n % 2 == 0):
    echo "This is an even number";
else:
    echo "This is an odd number";
endif;

echo PHP_EOL;

switch($n % 2 == 0):
    case 0:
        echo "This is an even number";
        break;
    default:
        echo "This is an odd number";
    endswitch;