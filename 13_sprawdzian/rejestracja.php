<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .required {
            color: red;
        }

        fieldset {
            border: 4px solid navy;
        }
    </style>
</head>
<body>
    <?php
        $login = $_POST["login"] ?? "";
        $login_error = $_SERVER['REQUEST_METHOD'] == "POST" && $login == "";
        
        $password = $_POST["password"] ?? "";
        $password_error = $_SERVER['REQUEST_METHOD'] == "POST" && $password == "";

        $rola = $_POST["rola"] ?? "";
        $rola_error = $_SERVER['REQUEST_METHOD'] == "POST" && $rola == "";

    ?>
    <form action="" method="post">
        <fieldset>
            <legend>Rejestracja</legend>


            <label for="login">
                Login: 
                <span class="required">
                    *
                    <?php if($login_error) { ?>
                        Login jest wymagany
                    <?php } ?>
                </span>
            </label><br>
            <input type="text" name="login" id="login" value="<?=$login?>"><br>


            <label for="password">
                Hasło: 
                <span class="required">
                    *
                    <?php if($password_error) { ?>
                        Hasło jest wymagane
                    <?php } ?>
                </span>
            </label><br>
            <input type="password" name="password" id="password" value="<?=$password?>"><br>


            Wybierz jedną rolę: 
            <span class="required">
                *
                <?php if($rola_error) { ?>
                    Wybierz jedną rolę
                <?php } ?>
            </span><br>

            <input type="radio" name="rola" id="rola-urz" value="urzytkownik" <?= $rola=="urzytkownik" ? "checked" : "" ?>>
            <label for="rola-urz">Urzytkownik</label><br>
            
            <input type="radio" name="rola" id="rola-aut" value="autor" <?= $rola=="autor" ? "checked" : "" ?>>
            <label for="rola-aut">Autor</label><br>
            
            <input type="radio" name="rola" id="rola-red" value="redaktor" <?= $rola=="redaktor" ? "checked" : "" ?>>
            <label for="rola-red">Redaktor</label><br>
            
            <input type="radio" name="rola" id="rola-adm" value="administrator" <?= $rola=="administrator" ? "checked" : "" ?>>
            <label for="rola-adm">Administrator</label><br>
            
            <br>


            <input type="submit" value="Zarejestruj">
        </fieldset>
    </form>
</body>
</html>