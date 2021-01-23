<?php 
$n = 6;
$result = 1;
for($i = $n; $i > 1; $i--){
    $result *= $i;
}
echo "The factorial of {$n} is {$result} \n";

// Factorial diagnosis from 1 to 10
$j = 1;
for($n = 1; $n <= 10; $n++){
    $result = 1;
    for($i = $n; $i > 1; $i--){
        $result *= $i;
        $j++;
    }
    echo "The factorial of {$n} is {$result} \n";
}
echo "Total {$j} number of operations";

// smart and standard way to diagnosis factorial 
$result = 1;
$j = 1;
for($n = 1; $n <= 10; $n++){
    $result *= $n;
    $j++;
    echo "The factorial of {$n} is {$result} \n";
}
echo "Total {$j} number of operations";