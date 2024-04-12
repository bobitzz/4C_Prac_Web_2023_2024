<?php
$cookie_name = "username";
$cookie_value = "Aleksander Horyń";
setcookie($cookie_name, $cookie_value);
?>
<html>
    <body>
        <?php
        if(!isset($_COOKIE[$cookie_name])) {
            echo "cookie names '" . $cookie_name . "'is not set!";
        } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
        ?>
    </body>
</html>