<?php 
// calculate factorial 
$n = 5;
for($i = $n, $factorial = 1; $i> 1; $i--){
    // $factorial = $factorial * $i;
    $factorial *= $i;
}
printf("Factorial of %d of %d", $n, $factorial);