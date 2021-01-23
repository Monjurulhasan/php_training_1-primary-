<?php 
// php loop 
// for loop 
for($i = 1; $i <= 10; $i++){
    echo $i;
    echo PHP_EOL;
}
echo PHP_EOL;

// print even number 
for($i = 0; $i <= 10; $i += 2){
    echo $i;
    echo PHP_EOL;
}
echo PHP_EOL;

// print odd number
for($i = 1; $i <= 10; $i += 2){
    echo $i;
    echo PHP_EOL;
}
echo PHP_EOL;

// while loop 
$i = 1;
while ($i <= 10) {
    echo $i++;
    echo PHP_EOL;
}
echo PHP_EOL;

// do while loop 
$i = 0;
do{
    $i++;
    echo $i.PHP_EOL;
}while ($i < 10);
echo PHP_EOL;

// go to line number 
echo "Go to \n";
$i = 0;
a: $i++;
echo $i.PHP_EOL;
if($i<10){
    goto a;
}