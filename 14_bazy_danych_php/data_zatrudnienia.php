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
            padding: 5px;
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
        $months = [
            "stycznia",
            "lutego",
            "marca",
            "kwietnia",
            "maja",
            "czerwca",
            "lipca",
            "sierpnia",
            "września",
            "października",
            "listopada",
            "grudnia"
        ];
        $conn = new mysqli("127.0.0.1", "sakra", "supermocnehaslo", "sakra");
        if ($conn->connect_error) {
            die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: " . $conn->connect_error);
        }

        $result = $conn->query("SELECT Imie, Nazwisko, Data_zatrudnienia FROM pracownicy");
        while($row = $result->fetch_assoc()) {
            $d = strtotime($row['Data_zatrudnienia']);
            $month =  date('n', $d) - 1;
        ?>
            <tr>
                <td><?=$row["Imie"]?></td>
                <td><?=$row["Nazwisko"]?></td>
                <td>
                    <?=date('j', $d)?> <?=$months[$month]?> <?=date('Y', $d)?>
                    (data w bazie: <?=$row['Data_zatrudnienia']?>)
                </td>
            </tr>
        <?php
        }

        $conn->close();
        ?>
    </table>
</body>
</html>