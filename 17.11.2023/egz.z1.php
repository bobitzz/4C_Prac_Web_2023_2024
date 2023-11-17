<!DOCTYPE html>
<html lang="pl-Pl">
    <head>
        <title>Kantor</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <header>
            <h1>Kantor</h1>
        </header>
        <main>
            <ol>
                <li>euro</li>
                <li>dolary</li>
                <li>franki</li>
            </ol>
        </main>
    </body>
    <?php
        $value = 2;
        $pl = 20;

        switch ($value)
        {
            case 1:
                $result = $pl * 4.32;
                echo "waluta przeliczona na euro: " . $result;
                break;
            case 2:
                $result = $pl * 3.21;
                echo "waluta przeliczona na dolary: " . $result;
                break;
            case 3:
                $result = $pl * 3.98;
                echo "waluta przeliczona na franki: " . $result;
                break;
        }
    ?>
</html> 