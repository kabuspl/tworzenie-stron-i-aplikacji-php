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
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Data zatrudnienia</th>
        </tr>
        <?php
        $conn = new mysqli("127.0.0.1", "sakra", "supermocnehaslo", "sakra");
        if ($conn->connect_error) {
            die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: " . $conn->connect_error);
        }

        $result = $conn->query("SELECT Imie, Nazwisko, Data_zatrudnienia FROM pracownicy");
        while($row = $result->fetch_assoc()) {
            $d = strtotime($row['Data_zatrudnienia']);
            echo date('j n Y', $d);
        ?>
            <tr>
                <td><?=$row["Imie"]?></td>
                <td><?=$row["Nazwisko"]?></td>
                <td><?=$row["Imie"]?> <?=$row["Nazwisko"]?></td>
            </tr>
        <?php
        }

        $conn->close();
        ?>
    </table>
</body>
</html>