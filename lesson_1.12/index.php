<?php 
// $n = 15;

// if($n % 2 == 0){
//     echo "$n is an even number";
// }else{
//     echo "$n is a odd number";
// }

// Logical operator 
// == equality check 
// > greater than 
// < less than 
// >= greater than or equal 
// <= less than or equal 

// $alam = 100;
// $rahim = 500;
// if($alam >= $rahim){
//     echo "Alam has same or less money than Rahim";
// }elseif($alam > $rahim){
//     echo "Alam has more money than Rahim";
// }elseif($alam = $rahim){
//     echo "Alam and Rahim has same amount of money";
// }elseif($alam < $rahim){
//     echo "Alam has less money than Rahim";
// }

// $age = 13;
// if($age >= 13 && $age <= 19){
//     echo "This person is a teenager";
// }else{
//     echo "This person is not a teenager";
// }

$food = "salmon";
if("tuna" == $food || "salmon" == $food){
    echo "{$food} has vitamin D";
}elseif("apple" == $food){
    "Apple doesn't contain vitamin D";
}else{
    "We don't know if {$food} contains vitamin D";
}