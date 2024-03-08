<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .red {
            color: red;
        }

        fieldset {
            border: 4px solid navy;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Rejesracja</legend>

            <label for="login">
                Login: 
                <span class="red">* <?= isset($_POST["login"]) && $_POST["login"]=="" ? "Login jest wymagany" : "" ?></span>
            </label><br>
            <input type="text" id="login" name="login" value="<?= isset($_POST["login"]) ? $_POST["login"] : "" ?>"><br>


            <label for="haslo">
                Hasło: 
                <span class="red">* <?= isset($_POST["haslo"]) && $_POST["haslo"]=="" ? "Hasło jest wymagane" : "" ?></span>
            </label><br>
            <input type="password" id="haslo" name="haslo" value="<?= isset($_POST["haslo"]) ? $_POST["haslo"] : "" ?>"><br>


            Wybierz jedną opcję: 
            <span class="red">* <?= !isset($_POST["opcje"]) && $_SERVER['REQUEST_METHOD'] == "POST" ? "Wybierz jedną rolę" : "" ?></span><br>

            <input type="radio" name="opcje" id="urzytkownik" value="Urzytkownik" <?= isset($_POST["opcje"]) && $_POST["opcje"]=="Urzytkownik" ? "checked" : "" ?>>
            <label for="urzytkownik">Urzytkownik</label><br>
            <input type="radio" name="opcje" id="autor" value="Autor" <?= isset($_POST["opcje"]) && $_POST["opcje"]=="Autor" ? "checked" : "" ?>>
            <label for="autor">Autor</label><br>
            <input type="radio" name="opcje" id="redaktor" value="Redaktor" <?= isset($_POST["opcje"]) && $_POST["opcje"]=="Redaktor" ? "checked" : "" ?>>
            <label for="redaktor">Redaktor</label><br>
            <input type="radio" name="opcje" id="administrator" value="Administrator" <?= isset($_POST["opcje"]) && $_POST["opcje"]=="Administrator administracji" ? "checked" : "" ?>>
            <label for="administrator">Administrator</label><br><br>

            
            <input type="submit" value="Zarejestruj">
        </fieldset>
    </form>
</body>
</html>