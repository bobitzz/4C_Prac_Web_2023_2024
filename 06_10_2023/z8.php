<?php
    $num1 = 4;
    $num2 = 21;
    $num3 = 14;

    if($num1 == $num2 || $num1 == $num3)
        echo $num1;
    else if($num2 == $num1 || $num2 == $num3)
        echo $num2;
    else if($num3 == $num1 || $num3 == $num2)
        echo $num3;
    else
        echo "wszystkie 3 liczby sa rozne";

    echo "<br>";

    switch($num1) {
        case $num1 == $num2 || $num1 == $num3:
            echo $num1;
            break;
        case $num2 == $num1 || $num2 == $num3:
            echo $num2;
            break;
        case $num3 == $num1 || $num3 == $num2:
            echo $num3;
            break;
        default:
            echo "wszystkie 3 liczby sa rozne";
    }
?>