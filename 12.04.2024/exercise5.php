<?php
if(isset($_COOKIE['visit_count'])) {
    $visit_count = $_COOKIE['visit_count'];
    $visit_count++;
} else {
    $visit_count = 1;
}

setcookie("visit_count", $visit_count, strtotime('+1 year'));

if($visit_count >= 10) {
    echo "Gratulacje! Osiągnąłeś/aś 10 odwiedzin na naszej stronie.";
} else {
    echo "Liczba odwiedzin: " . $visit_count;
}
?>