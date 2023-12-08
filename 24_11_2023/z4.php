<?php
    echo "Liczba oraz jej pierwiastek z uzyciem petli for <br>";
    for ($number1 = 1; $number1 <= 10; $number1++)
    {
        echo $number1.", pierwiastek: ".sqrt($number1)."<br>";
    }

    echo "<br> Liczba oraz jej pierwiastek z uzyciem petli while <br>";
    $number2 = 1;
    while($number2 <= 10)
    {
        echo $number2." pierwiastek: ".sqrt($number2)."<br>";
        $number2++;
    }

    echo "<br> Liczba oraz jej pierwiastek z uzyciem petli do-while <br>";
    $number3 = 1;
    do {
        echo $number3." pierwiastek: ".sqrt($number3)."<br>";
        $number3++;
    }while($number3 <= 10)
?>