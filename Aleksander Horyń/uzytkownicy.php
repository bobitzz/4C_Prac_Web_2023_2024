<!DOCTYPE hmtl>
<hmtl lang="pl">
    <head>
        <title>Portal społecznościowy</title>
        <link rel="stylesheet" href="styl5.css">
    </head>
    <body>
        <div id="baner">
            <div class="left-top">
                <h2>Nasze osiedle</h2>
            </div>  
            <div class="right-top">
                <?php
                $host = "localhost";
                $user = "root";
                $pass = "";
                $db = "portal";
                $connect = mysqli_connect($host, $user, $pass, $db);
                $select = "SELECT COUNT(*) FROM dane;";
                $result = mysqli_query($connect, $select);
                $resultText = mysqli_fetch_array($result);
                echo "<h5>Liczba użytkowników portalu " . $resultText[0] . "</h5>";
                ?>
            </div>
        </div>
        <div id="blok">
            <div class="left-down">
                <h3>Logowanie</h3>
                <form action="uzytkownicy.php" method="post">
                    login: <br><input type="text" name="login"><br>
                    hasło: <br><input type="password" name="haslo"><br>
                    <input type="submit" value="Zaloguj">
                </form>
            </div> 
            <div class="right-down">
                <h3>Wizytówka</h3>
                <div class="wizytowka">
                    <?php
                        $host = "localhost";
                        $user = "root";
                        $pass = "";
                        $db = "portal";
                        $connect = mysqli_connect($host, $user, $pass, $db);
                        if(!empty($_POST['login']) && !empty($_POST['haslo'])){
                            $login = $_POST['login'];
                            $haslo = $_POST['haslo'];
                            $select2 = "SELECT `haslo` FROM uzytkownicy WHERE login = `Justyna`";
                            $result2 = mysqli_query($connect, $select2);
                            $ile = mysqli_num_rows($result2);
                            if($ile == 0) {
                                echo "login nie istnieje";
                            }else {
                                $wiersz2 = mysqli_fetch_row($result2);
                                $haslo_szyfr = sha1($haslo);
                                if($haslo_szyfr == $wiersz2[0]){
                                    $select3 = "SELECT uzytkownicy.login, dane.rok_urodz, dane.przyjaciol, dane.hobby, dane.zdjecie FROM uzytkownicy, dane WHERE uzytkownicy.login = `Justyna`;";
                                    $result3 = mysqli_query($connect, $select3);
                                    $wiersz3 = mysqli_fetch_row($result3);
                                    $wiek = 2022-$wiersz3[1];
                                    echo "
                                        <img src='$wiersz3[4]' alt='osoba'>
                                        <h4>$wiersz3[0] ($wiek)</h4>
                                        <p>hobby: $wiersz3[3]</p>
                                        <h1><img src='icon-on.png'> $wiersz3[2]</h1>
                                        <a href='dane.html'><button class='button'>Więcej informacji</button></a>";
                                } else {
                                    echo "hasło nieprawidłowe";
                                }
                            }
                        }
                        mysqli_close($connect);
                    ?>
                </div>
            </div>
        </div>
        <footer>
            Strone wykonał: Aleksander Horyń
        </footer>
    </body>
</html>