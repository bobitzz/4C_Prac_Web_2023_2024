<?php
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $name = $_GET["name"];
        $surname = $_GET["surname"];
    }

    echo "imie: " . $name . "<br>";
    echo "nazwisko: " . $surname . "<br>";
?>