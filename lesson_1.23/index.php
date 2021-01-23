<?php 
// for loop diye kivabe ulta dik theke man ber korte hoy 
for($i = 10; $i > 0; $i--){
    echo $i;
    echo PHP_EOL;
}
echo PHP_EOL;

// kivabe for loop diye multiple value likha jay 
for($i = 10, $j = 1; $i > 0; $i--, $j++){
    echo $i.":".$j;
    echo PHP_EOL;
}
echo PHP_EOL;

// another way 
for($i = 10; $i > 0; $i--){
    echo $i.":".(11-$i);
    echo PHP_EOL;
}