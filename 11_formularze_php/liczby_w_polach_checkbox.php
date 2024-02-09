<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset {
            border: 3px solid green;
        }

        label {
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Liczby</legend>
            <?php
                foreach (range(0, 100, 10) as $num) {
                    echo "<input type='checkbox' name='numbers[]' id='c$num' value='$num' ".
                        (isset($_POST["numbers"]) && in_array($num, $_POST["numbers"]) ? "checked" : "").
                        "><label for='c$num'>$num</label>";
                }
            ?>
            <br>
            <br>
            <input type="submit" value="Wybierz">
            <p>
                <?php
                    if(isset($_POST["numbers"]) && count($_POST["numbers"]) != 0) {
                        echo "Te liczby zostały wybrane: ".implode(", ", $_POST["numbers"]).".";
                    } else {
                        echo "Żadna liczba nie została wybrana";
                    }
                ?>
            </p>
        </fieldset>
    </form>
</body>
</html>