<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset {
            border: 3px solid pink;
        }

        label {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Miesiące</legend>
            <?php
                $months = [
                    "Styczeń",
                    "Luty",
                    "Marzec",
                    "Kwiecień",
                    "Maj",
                    "Czerwiec",
                    "Lipiec",
                    "Sierpień",
                    "Wrzesień",
                    "Październik",
                    "Listopad",
                    "Grudzień"
                ];

                foreach ($months as $month) {
                    echo "<input type='checkbox' name='months[]' id='$month' value='$month' ".
                        (isset($_POST["months"]) && in_array($month, $_POST["months"]) ? "checked" : "").
                        "><label for='$month'>$month</label>";
                }
            ?>
            <br>
            <br>
            <input type="submit" value="Wybierz">
            <p>
                <?php
                    if(isset($_POST["months"]) && count($_POST["months"]) != 0) {
                        echo "Te miesiące zostały wybrane: ".implode(", ", $_POST["months"]).".";
                    } else {
                        echo "Żaden miesiąc nie został wybrany.";
                    }
                ?>
            </p>
        </fieldset>
    </form>
</body>
</html>