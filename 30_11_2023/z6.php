<?php
    $sideA = 10;
    $sideB = 12;
    $sideC = 20;

    if($sideA > $sideB && $sideA > $sideC)
    {
        if(pow($sideA, 2) > pow($sideB, 2) + pow($sideC, 2))
            echo "trojkat rozwartokatny"; 
        else if(pow($sideA, 2) == pow($sideB, 2) + pow($sideC, 2))
            echo "trojkat prostokatny";
        else if(pow($sideA, 2) < pow($sideB, 2) + pow($sideC, 2))
            echo "trojkat ostrokatny";
    }
    else if($sideB > $sideA && $sideB > $sideC)
    {
        if(pow($sideB, 2) > pow($sideA, 2) + pow($sideC, 2))
            echo "trojkat rozwartokatny"; 
        else if(pow($sideB, 2) == pow($sideA, 2) + pow($sideC, 2))
            echo "trojkat prostokatny";
        else if(pow($sideB, 2) < pow($sideA, 2) + pow($sideC, 2))
            echo "trojkat ostrokatny";
    }
    else
    {
        if(pow($sideC, 2) > pow($sideB, 2) + pow($sideA, 2))
            echo "trojkat rozwartokatny"; 
        else if(pow($sideC, 2) == pow($sideB, 2) + pow($sideA, 2))
            echo "trojkat prostokatny";
        else if(pow($sideC, 2) < pow($sideB, 2) + pow($sideA, 2))
            echo "trojkat ostrokatny";
    }
?>