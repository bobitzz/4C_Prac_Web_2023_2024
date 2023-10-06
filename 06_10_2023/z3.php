<?php
    $num1 = 57;

    if($num1 >= 100 && $num1 < 150)
        echo "liczba miesci sie w podanym zakersie";
    else
        echo "liczba nie miesci sie w podanym zakresie";

    echo "<br>";

    switch($num1 >= 100 && $num1 < 150) {
        case true:
            echo "liczba miesci sie w podanym zakersie";
        case false:
            echo "liczba nie miesci sie w podanym zakresie";
    }
?>