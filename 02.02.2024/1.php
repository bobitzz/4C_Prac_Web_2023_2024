<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "baza_filmow";

    $polaczenie = mysqli_connect($host, $user, $pass, $db);

    $zapytanie = "SELECT * FROM filmy";

    $wynik = mysqli_query($polaczenie, $zapytanie);

    while($wiersz_danych = mysqli_fetch_row($wynik)) {
        for($i = 0; $i<count($wiersz_danych);$i++)
            print $wiersz_danych[$i] . " ";
    print "<br>";
    }
?>