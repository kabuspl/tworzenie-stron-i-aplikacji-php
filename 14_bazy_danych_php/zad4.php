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

        $result = $conn->query("SELECT UPPER(CONCAT(Imie, Nazwisko)) FROM ksiazki INNER JOIN dzialy ON ksiazki.Id_dzial = dzialy.Id_dzial");
        while($row = $result->fetch_assoc()) {
    ?>
            "<?=$row["Tytul"]?>" - <?=$row["Imie"]?> <?=$row["Nazwisko"]?>, wydawnictwo <?=$row["Wydawnictwo"]?> (<?=$row["Miejsce_wyd"]?> <?=$row["Rok_wyd"]?>), <?=$row["Objetosc_ks"]?> str., Cena: <?=$row["Cena"]?>zł (dział: <?=$row["nazwa_dzialu"]?>).<br>
    <?php
        }

        $conn->close();
    ?>
</body>
</html>