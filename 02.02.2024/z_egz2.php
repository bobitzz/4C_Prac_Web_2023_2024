<?php
    $height = $_POST['height'] / 100;
    $weight = $_POST['weight'];

    $BMI = $weight / ($height * $height);
    if($BMI < 18.5)
        echo "niedowaga";
    else if($BMI > 18.5 && $BMI < 24.99)
        echo "wartośc prawidłowa";
    else
        echo "nadwaga";
?>