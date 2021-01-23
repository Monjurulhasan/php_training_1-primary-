<?php 
// $n = 12;
// $r = $n %2;
// switch($r){
//     case 0:
//         echo "{$n} is an even number";
//         break;
//     default:
//         echo "{$n} is an odd number";
// }

$color = "yellow";
switch($color){
    // case 'red': 
    //     echo "Red is our favorite color";
    //     break;
    // case 'green':
    //     echo "Green is our favorite color";
    //     break;
    case 'red':
    case 'green':
        echo ucwords($color) . " is a favorite color"; //ucwords() function dara word ke bodo hater kora hoy.
    case 'blue':
        echo "Blue is not a favorite color";
        break;
    default:
        echo "This color is ok";
}
echo "\n";
// same condition run with if else statement
if("red" == $color || "green" == $color){
    echo ucwords($color) . " is a favorite color";
}else{
    echo ucwords($color) . " is not a favorite color";
}
