<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset {
            border: 2px solid blue;
        }

        label {
            margin-right: 15px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Alfabet</legend>
            <?php
                foreach (range("a", "z") as $lit) {
                    echo "<input type='checkbox' name='numbers[]' id='$lit' value='$lit' ".
                        (isset($_POST["letters"]) && in_array($lit, $_POST["letters"]) ? "checked" : "").
                        "><label for='$lit'>$lit</label>";
                }
            ?>
            <br>
            <br>
            <input type="submit" value="Wybierz">
            <p>
                <?php
                    if(isset($_POST["numbers"]) && count($_POST["numbers"]) != 0) {
                        echo "Te litery zostały wybrane: ".implode(", ", $_POST["numbers"]).".";
                    } else {
                        echo "Żadna litera nie została wybrana";
                    }
                ?>
            </p>
        </fieldset>
    </form>
</body>
</html>