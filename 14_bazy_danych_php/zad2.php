<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new mysqli("127.0.0.1", "sakra", "supermocnehaslo", "sakra");
        if ($conn->connect_error) {
            die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: " . $conn->connect_error);
        }

        $result = $conn->query("SELECT Tytul, Imie, Nazwisko FROM ksiazki");
        while($row = $result->fetch_assoc()) {
    ?>
            Książka <i>"<?=$row["Tytul"]?>"</i> została napisana przez <b><?=$row["Imie"]?> <?=$row["Nazwisko"]?></b>.<br>
    <?php
        }

        $conn->close();
    ?>
</body>
</html>