<!DOCTYPE html>
<html lang="pl-Pl">
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
       <?php
            $number = 10;
            $sum = 0;

            do {
                $number++;
                $sum += $number;
            }while($sum < 1000);

            echo ($sum - $number);
        ?> 
    </body>
</html> 