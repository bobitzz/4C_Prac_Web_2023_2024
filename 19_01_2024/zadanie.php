<?php
    $form = ['name', 'surname', 'age', 'address', 'number', 'mail'];
    foreach($form as $forms)
    {
        if(!isset($_POST[$forms]) || empty($_POST[$forms])) {
            echo "Prosze uzupełnić puste pola";
            break;
        }
        if($forms == end($form)) {
            echo "Rejestracja przebiegła poprawnie <br> Dane ucznia z formularzu <br>";
            echo "Imię i nazwisko: ".$_POST['name']." ".$_POST['surname']."<br>";
            echo "Wiek: ".$_POST['age']."<br>";
            echo "Adres: ".$_POST['address']."<br>";
            echo "Numer kontaktowy: ".$_POST['number']."<br>";
            echo "Adres email: ".$_POST['mail']."<br>";
        }
    }
?>