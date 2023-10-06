<?php
    $num1 = -4;

    if($num1 > 0)
        echo "liczba wieksza od 0";
    else if($num1 == 0)
        echo "liczba jest rowna zero";
    else
        echo "liczba jest ujemna";

    echo "<br>";

    switch ($num1) {
        case $num1 > 0:
            echo "liczba wieksza od 0";
            break;
        case $num1 == 0:
            echo "liczba jest rowna zero";
            break;
        default:
            echo "liczba jest ujemna";
    }
?>