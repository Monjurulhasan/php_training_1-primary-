<?php 
$firstName = "Monjurul";
$middleName = "Hasan";
$lastName = "Monjur";
printf('My name is %3$s, %1$s, %2$s', $firstName, $middleName, $lastName);
echo "\n";

// printf("The binary equivalent of %d is %b", 120, 120);
printf('The binary equivalent of %1$d is %1$b', 120);
echo "\n";

$n = 45.1268754;
printf("%.3f", $n);
echo "\n";

$m = 123; // 0123
$n =  2727; // 0023
printf("%04d \n", $m);
printf("%04d \n", $n);