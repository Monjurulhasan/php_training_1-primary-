<?php 
$firstName = "Monjurul";
$lastName = "Hasan";

// printf("My name is %s %s", $firstName, $lastName); // print ar man show kore

$output = sprintf("My name is %s %s", $firstName, $lastName); // sprintf ar man akti variable a store kore rakhte hoy, abong variabel ar man return korar jonno variable ke call korte hoy  
echo $output;
echo "\n";
echo strtoupper($output); // to upper case
echo "\n";
echo strtolower($output); // to lower case

