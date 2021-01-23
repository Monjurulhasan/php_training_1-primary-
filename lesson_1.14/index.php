<?php 
$conditional1 = false;
$conditional2 = true;
$conditional3 = true;

if($conditional1){
    if($conditional2){
        if($conditional3){
            echo "Hello";
        }else{
            echo "No 1";
        }
    }else{
        echo "No 2";
    }
}else{
    echo "No 3";
}

echo "\n";

if($conditional1 && $conditional2 && $conditional3){
    echo "Hello";
}elseif($conditional1 && $conditional2){
    echo "No 3";
}elseif($conditional1){
    echo "No 2";
}else{
    echo "No 1";
}