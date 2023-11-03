<?php
    $category = "elektronika";
    $screenCost = 500;
    $hoodieCost = 100;
    $donutCost = 3;

    switch($category) {
        case "elektronika":
            echo "cena monitora z podatkiem wynosi: " . $screenCost *= 1.12;
            break;
        case "odziez":
            echo "cena bluzy z podatkiem wynosi: " . $hoodieCost *= 1.23;
            break;
        case "pieczywo":
            echo "cena paczka z podatkiem wynosi: " . $donutCost *= 1.08;
            break;
        default:
            echo "brak takiego pruduktu";
    }
?>