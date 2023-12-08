<?php
    echo "Dzielenie bez reszty z uzyciem petli for <br>";
    for($number1 = 100; $number1 <= 125; $number1++) {
        if($number1 % 5 == 0)
            print($number1.", ");
    }

    echo "<br> Dzielenie bez reszty z uzyciem petli while<br>";
    $number2 = 100;
    while($number2 <= 125)
    {
        if($number2 % 5 == 0)
            print($number2.", ");
        $number2++;
    }

    echo "<br> Dzielenie bez reszty z uzyciem petli do-while<br>";
    $number3 = 100;
    do {
        if($number3 % 5 == 0)
            print($number3.", ");
        $number3++;
    }while($number3 <= 125);
?>