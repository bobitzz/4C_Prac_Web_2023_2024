<?php
    $grade = 73;

    if($grade >=0 && $grade < 40)
        echo "Twoja ocena to 1";
    else if($grade >= 40 && $grade < 59)
        echo "Twoja ocena to 2";
    else if($grade >= 59 && $grade < 70)
        echo "Twoja ocena to 3";
    else if($grade >= 70 && $grade < 80)
        echo "Twoja ocena to 4";
    else if($grade >= 80 && $grade < 90)
        echo "Twoja ocena to 5";
    else if($grade >= 90 && $grade < 100)
        echo "Twoja ocena to 6";
    else 
        echo "Zly zakres";
?>