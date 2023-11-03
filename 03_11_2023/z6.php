<?php
    $sideA = 10;
    $sideB = 10;
    $sideC = 20;

    if($sideA != $sideB && $sideB != $sideC)
    {
        if($sideA > $sideB && $sideA > $sideC)
            if(pow($sideA, 2) == pow($sideB, 2) + pow($sideC, 2))
                echo "trojkat prostokatny";
        else if($sideB > $sideA && $sideB > $sideC)
            if(pow($sideB, 2) == pow($sideA, 2) + pow($sideC, 2))
                echo "trojkat prostokatny";
        else
            if(pow($sideC, 2) == pow($sideB, 2) + pow($sideA, 2))
                echo "trojkat prostokatny";
    }
    else if($sideA == $sideB && $sideB != $sideC || $sideB == $sideC && $sideC != $sideA || $sideA == $sideC && $sideC != $sideB)
        echo "trojkat rownoramienny";
    else
        echo "trojkat jest rownoboczny";
?>