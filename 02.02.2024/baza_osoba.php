<table>
    <tr>
        <td>ID</td>
        <td>imie</td>
        <td>nazwisko</td>
        <td>rok_urodzenia</td>
        <td>miejsce_urodzenia</td>
    </tr>

    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "klient";

        $connect = mysqli_connect($host, $user, $pass, $db);
        $select = "SELECT * FROM osoba";
        $result = mysqli_query($connect, $select);

        while($row = mysqli_fetch_row($result))  {
            echo "<tr>";
            echo "<td>$row[0]</td>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";
            echo "</tr>";
        }
    ?>
</table>