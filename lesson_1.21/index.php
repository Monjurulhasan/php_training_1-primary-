<?php 
$n = 20;
// $result = ($n % 2 == 0) ? "A" : ($n == 11) ? "B" : "C";

$result = ($n % 2 == 0) ? "A" : (($n == 11) ? "B" : "C");
echo $result;