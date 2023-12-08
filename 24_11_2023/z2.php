<?php
    echo "Odliczanie z uzyciem petli for <br>";
    for($number1 = 100; $number1 >= 90; $number1--) {
        print($number1.", ");
    }

    echo "<br> Odliczanie z uzyciem petli while <br>";
    $number2 = 100;
    while($number2 >= 90){
        print($number2.", ");
        $number2--;
    }

    echo "<br> Odliczanie z uzyciem petli do-while <br>";
    $number3 = 100;
    do{
        print($number3.", ");
        $number3--;
    }while($number3 >= 90);
?>