<?php
if(isset($_SESSION["logged_in"])) {
    echo "Jesteś już zalogowany!!!";
    exit();
}

if($_SERVER['REQUEST_METHOD'] == "POST") {
    if($_POST["login"] == "admin" && $_POST["password"] == "admin") {
        $_SESSION["logged_in"] = true;
        $_SESSION["login"] = $_POST["login"];
        echo "Zalogowano!";
        exit();
    } else {
        echo "Nieprawidłowe dane logowania!!!";
    }
}
?>
<form action="" method="POST">
    <label for="login">Login: </label>
    <input type="text" name="login" id="login">

    <label for="password">Hasło: </label>
    <input type="password" name="password" id="password">

    <input type="submit" value="Zaloguj">
</form>