<?php
    echo "Rok urodzenia: <br>".$_POST['born_year'] . "<br>";
    echo "Płeć: ";
    $gender = $_POST['gender'];
    if(isset($gender) && $gender == "men")
        echo "Mężczyzna";
    else
        echo "Kobieta";
?>