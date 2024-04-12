<?php
if(isset($_POST['birthday'])) {
    $birthday = $_POST['birthday'];
    setcookie("user_birthday", $birthday, strtotime('+1 year'));
}

if(isset($_COOKIE['user_birthday'])) {
   $user_birthday = $_COOKIE['user_birthday'];
   if(date('m-d') == date('m-d', strtotime($user_birthday))) {
       echo "Wszystkiego najlepszego z okazji urodzin!";
   } else {
       echo "Zapamiętaliśmy Twój nadchodzący urodziny. Wracaj do nas w dniu obchodów!";
   }
} else {
   echo "Wpisz swoją datę urodzin w formularzu poniżej.";
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>Formularz daty urodzin</title>
</head>
<body>
    <form method="post">
       <label>Podaj datę urodzin:</label>
       <input type="date" name="birthday">
       <button type="submit">Zapisz</button>
   </form>
</body>
</html>