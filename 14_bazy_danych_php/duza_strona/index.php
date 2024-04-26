<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="left">
        <a href="?page=home">Strona główna</a>
        <a href="?page=show_table&table=czytelnicy">Tabela czytelnicy</a>
        <a href="?page=show_table&table=dzialy">Tabela działy</a>
        <a href="?page=show_table&table=ksiazki">Tabela książki</a>
        <a href="?page=show_table&table=pracownicy">Tabela pracownicy</a>
        <a href="?page=show_table&table=stanowiska">Tabela stanowiska</a>
        <a href="?page=show_table&table=wypozyczenia">Tabela wypożyczenia</a>
    </div>
    <div class="right">
        <?php
            $page = ($_GET["page"] ?? "home") . ".php";
            if(file_exists($page)) {
                include($page);
            } else {
        ?>
                <h1>Strona nie istnieje!</h1>
        <?php
            }
        ?>
    </div>
</body>
</html>