<?php
    $age = 11;

    if($age < 0)
        echo "wiek nie moze byc ujemny";
    else if($age < 11)
        echo "dziecko";
    else if($age >= 11 && $age <= 17)
        echo "nastolatek";
    else
        echo "dorosly";

    echo "<br>";

    switch($age) {
        case $age < 0:
            echo "wiek nie moze byc ujemny";
            break;
        case $age < 11:
            echo "dziecko";
            break;
        case $age >= 11 && $age <= 17:
            echo "nastolatek";
            break;
        default:
            echo "dorosly";
    }
?>