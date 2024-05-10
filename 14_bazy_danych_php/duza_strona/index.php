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
        <?php
            $current_page = ($_GET["page"] ?? "home") . "-" . ($_GET["table"] ?? "");
        ?>
        <a class="<?= $current_page == "home-" ? "active" : "" ?>" href="?page=home">Strona główna</a>
        <a class="<?= $current_page == "show_table-Czytelnicy" ? "active" : "" ?>" href="?page=show_table&table=Czytelnicy">Tabela czytelnicy</a>
        <a class="<?= $current_page == "show_table-Dzialy" ? "active" : "" ?>" href="?page=show_table&table=Dzialy">Tabela działy</a>
        <a class="<?= $current_page == "show_table-Ksiazki" ? "active" : "" ?>" href="?page=show_table&table=Ksiazki">Tabela książki</a>
        <a class="<?= $current_page == "show_table-Pracownicy" ? "active" : "" ?>" href="?page=show_table&table=Pracownicy">Tabela pracownicy</a>
        <a class="<?= $current_page == "show_table-Stanowiska" ? "active" : "" ?>" href="?page=show_table&table=Stanowiska">Tabela stanowiska</a>
        <a class="<?= $current_page == "show_table-Wypozyczenia" ? "active" : "" ?>" href="?page=show_table&table=Wypozyczenia">Tabela wypożyczenia</a>
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
