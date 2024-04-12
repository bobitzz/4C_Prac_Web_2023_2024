<?php
if(isset($_COOKIE['visit_count'])) {
    $visit_count = $_COOKIE['visit_count'];
    $visit_count++;
} else {
    $visit_count = 1;
}

setcookie("visit_count", $visit_count, strtotime('+1 year'));

echo "Liczba odwiedzin: " . $visit_count;
?>