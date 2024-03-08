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
            border: 4px solid yellowgreen;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Ankieta</legend>

            <label for="imie">
                Imię: 
                <span class="red">* <?= isset($_POST["imie"]) && $_POST["imie"]=="" ? "(Nie podano imienia)" : "" ?></span>
            </label><br>
            <input type="text" id="imie" name="imie" value="<?= isset($_POST["imie"]) ? $_POST["imie"] : "" ?>"><br>


            <label for="nazwisko">
                Nazwisko: 
                <span class="red">* <?= isset($_POST["nazwisko"]) && $_POST["nazwisko"]=="" ? "(Nie podano nazwiska)" : "" ?></span>
            </label><br>
            <input type="text" id="nazwisko" name="nazwisko" value="<?= isset($_POST["nazwisko"]) ? $_POST["nazwisko"] : "" ?>"><br>


            Wybierz jedną opcję: 
            <span class="red">* <?= !isset($_POST["opcje"]) && $_SERVER['REQUEST_METHOD'] == "POST" ? "(Nie wybrano opcji)" : "" ?></span><br>

            <input type="radio" name="opcje" id="uczen" value="uczeń" <?= isset($_POST["opcje"]) && $_POST["opcje"]=="uczeń" ? "checked" : "" ?>>
            <label for="uczen">uczeń</label><br>
            <input type="radio" name="opcje" id="absolwent" value="absolwent" <?= isset($_POST["opcje"]) && $_POST["opcje"]=="absolwent" ? "checked" : "" ?>>
            <label for="absolwent">absolwent</label><br>
            <input type="radio" name="opcje" id="nauczyciel" value="nauczyciel" <?= isset($_POST["opcje"]) && $_POST["opcje"]=="nauczyciel" ? "checked" : "" ?>>
            <label for="nauczyciel">nauczyciel</label><br>
            <input type="radio" name="opcje" id="pracownik_adm" value="pracownik administracji" <?= isset($_POST["opcje"]) && $_POST["opcje"]=="pracownik administracji" ? "checked" : "" ?>>
            <label for="pracownik_adm">pracownik administracji</label><br><br>

            
            <input type="submit" value="Wyślij">
        </fieldset>
    </form>
</body>
</html>