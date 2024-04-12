<?php
$cookie_name = "username";
$cookie_value = "Aleksander Horyń";
setcookie($cookie_name, $cookie_value);
?>
<html>
    <body>
        <?php
        setcookie("username", "Kamil Nowak");
        ?>
    </body>
</html>