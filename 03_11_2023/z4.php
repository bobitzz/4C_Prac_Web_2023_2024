<?php
    $year = 2016;

    if($year % 4 == 0 && $year % 100 == 0 || $year % 400 == 0)
        echo "Rok jest przestepny, stulecie: " . ceil($year/100);
    else 
        echo "Rok nie jest przestepny, stulecie: " . ceil($year/100);

?>