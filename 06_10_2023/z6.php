<?php 
    $year = 1900;

    if($year % 4 == 0 && $year % 100 == 0 && $year % 400 != 0)
        echo "Luty ma 29 dni";
    else 
        echo "Luty ma 28 dni";

    echo "<br>";

    switch($year) {
        case $year % 4 == 0 && $year % 100 == 0 && $year % 400 != 0:
            echo "Luty ma 29 dni";
            break;
        default:
            echo "Luty ma 28 dni";
    }
?>