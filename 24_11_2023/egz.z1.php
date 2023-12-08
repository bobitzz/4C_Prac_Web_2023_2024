<!DOCTYPE html>
<html lang="pl-Pl">
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
       <?php
            $sum = 0;
            $meter = 0;
            $number = 100;

            while($meter < 100)
            {
                $number++;
                if($number % 2 == 0)
                {
                    $sum += $number;
                    $meter++;
                }
            }

            echo $sum;
        ?> 
    </body>
</html> 