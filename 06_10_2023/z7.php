<?php
    $num1 = 32;
    $num2 = 2;
    $num3 = 15;

    if($num1 < $num2 && $num1 < $num3)
        echo $num1;
    else if($num2 < $num1 && $num2 < $num3)
        echo $num2;
    else
        echo $num3;

    echo "<br>";

    switch($num1) {
        case $num1 < $num2 && $num1 < $num3:
            echo $num1;
            break;
        case $num2 < $num1 && $num2 < $num3:
            echo $num2;
            break;
        default:
            echo $num3;
    }
?>