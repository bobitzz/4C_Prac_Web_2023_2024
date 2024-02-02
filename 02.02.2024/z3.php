<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $surname = $_POST["surname"];
    }

    echo "imie: " . $name . "<br>";
    echo "nazwisko: " . $surname . "<br>";
?>