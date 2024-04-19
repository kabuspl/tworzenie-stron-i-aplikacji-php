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

        td,th {
            border: 1px solid black;
        }

        .right {
            text-align: right;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nazwa stanowiska</th>
            <th>Liczba liter</th>
        </tr>
        <?php
        $conn = new mysqli("127.0.0.1", "sakra", "supermocnehaslo", "sakra");
        if ($conn->connect_error) {
            die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: " . $conn->connect_error);
        }

        $result = $conn->query("SELECT Nazwa FROM stanowiska");
        while($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?=$row["Nazwa"]?></td>
                <td class="right"><?=strlen($row["Nazwa"])?> liter</td>
            </tr>
        <?php
        }

        $conn->close();
        ?>
    </table>
</body>
</html>