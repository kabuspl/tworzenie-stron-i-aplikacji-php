<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td, th {
            border: 1px solid black;
        }

        .cena {
            text-align: right;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Sygnatura</th>
            <th>Tytuł</th>
            <th>Autor</th>
            <th>Wydawnictwo</th>
            <th>Rok wydania</th>
            <th>Cena</th>
        </tr>
        <?php
        $conn = new mysqli("127.0.0.1", "sakra", "supermocnehaslo", "sakra");
        if ($conn->connect_error) {
            die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: " . $conn->connect_error);
        }

        $result = $conn->query("SELECT Sygnatura, Tytul, Imie, Nazwisko, Wydawnictwo, Rok_wyd, Cena FROM ksiazki WHERE Rok_wyd BETWEEN 1990 and 2011 AND Wydawnictwo in ('PWN', 'Helion') ORDER BY Rok_wyd asc");
        while($row = $result->fetch_assoc()) {
            $cena = explode(".", $row["Cena"]);
        ?>
            <tr>
                <td><?=$row["Sygnatura"]?></td>
                <td><?=$row["Tytul"]?></td>
                <td><?=$row["Imie"]?> <?=$row["Nazwisko"]?></td>
                <td><?=$row["Wydawnictwo"]?></td>
                <td><?=$row["Rok_wyd"]?></td>
                <td class="cena"><?=$cena[0]?> zł <?=$cena[1]?> gr</td>
            </tr>
        <?php
        }

        $conn->close();
        ?>
    </table>
</body>
</html>