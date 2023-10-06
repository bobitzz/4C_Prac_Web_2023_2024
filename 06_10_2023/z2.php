<?php
    $num1 = 10;
    $num2 = 5;

    if($num1 % $num2 == 0)
        echo "liczba pierwsza jest podzielna bez reszty przez liczbe druga";
    else
        echo "liczba pierwsza nie jest podzielna przez liczbe druga bez reszty";

    echo "<br>";

    switch($num1 % $num2 == 0) {
        case true:
            echo "liczba pierwsza jest podzielna bez reszty przez liczbe druga";
            break;
        case false:
            echo "liczba pierwsza nie jest podzielna bez reszty przez liczbe druga";
            break;
    }
?>