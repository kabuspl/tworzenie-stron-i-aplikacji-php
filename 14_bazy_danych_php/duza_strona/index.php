<?php
session_start();
?>
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
            $current_page = $_GET["table"] ?? $_GET["page"] ?? "home";
        ?>
        <a class="<?= $current_page == "home" ? "active" : "" ?>" href="?page=home">Strona główna</a>
        <a class="<?= $current_page == "Czytelnicy" ? "active" : "" ?>" href="?page=show_table&table=Czytelnicy">Tabela czytelnicy</a>
        <a class="<?= $current_page == "Dzialy" ? "active" : "" ?>" href="?page=show_table&table=Dzialy">Tabela działy</a>
        <a class="<?= $current_page == "Ksiazki" ? "active" : "" ?>" href="?page=show_table&table=Ksiazki">Tabela książki</a>
        <a class="<?= $current_page == "Pracownicy" ? "active" : "" ?>" href="?page=show_table&table=Pracownicy">Tabela pracownicy</a>
        <a class="<?= $current_page == "Stanowiska" ? "active" : "" ?>" href="?page=show_table&table=Stanowiska">Tabela stanowiska</a>
        <a class="<?= $current_page == "Wypozyczenia" ? "active" : "" ?>" href="?page=show_table&table=Wypozyczenia">Tabela wypożyczenia</a>
        <a class="<?= $current_page == "login" ? "active" : "" ?>" href="?page=login">Zaloguj się</a>
    </div>
    <div class="right">
        <?php
        if(isset($_SESSION["logged_in"])) {
        ?>
            <header>
                Jesteś zalogowany jako <?=$_SESSION["login"]?>. <a href="?page=logout">Wyloguj się</a>
            </header>
        <?php
        }
        ?>
        <main>
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
        </main>
    </div>
</body>
</html>
