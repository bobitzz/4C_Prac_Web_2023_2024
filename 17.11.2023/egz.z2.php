<!DOCTYPE html>
<html lang="pl-Pl">
    <head>
        <title>jezyki</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <header>
            <h1>jezyki</h1>
        </header>
        <main>
            <ol>
                <li>angielski</li>
                <li>niemiecki</li>
                <li>hiszpanski</li>
                <li>polski</li>
            </ol>
        </main>
    </body>
    <?php
        $jezyk = "n";
        switch ($jezyk)
        {
            case "a":
                echo "angielski";
                break;
            case "n":
                echo "niemiecki";
                break;
            case "h":
                echo "hiszpański";
                break;
            default:
                echo "polski";
        }
    ?>
</html> 