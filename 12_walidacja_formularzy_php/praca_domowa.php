<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset {
            border: 4px red solid;
        }

        legend {
            border-style: solid;
            border-color: red;
            border-width: 0 0 4px 4px;
            padding: 6px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Ulubione sale koncertowe</legend>
            <?php
                $miasta = [
                    "Częstochowa",
                    "Gdańsk",
                    "Łódź",
                    "Poznań",
                    "Rzeszów",
                    "Szczecin",
                    "Wrocław"
                ];
                foreach ($miasta as $miasto) {
                    $checked = isset($_POST["miasta"]) && in_array($miasto, $_POST["miasta"]);
            ?>
                    <input type="checkbox" name="miasta[]" id="<?= $miasto ?>" value="<?= $miasto ?>" <?= $checked ? "checked" : "" ?>>
                    <label for="<?= $miasto ?>"><?= $miasto ?></label>
                    <br>
            <?php
                }
            ?>

            <br>
            <input type="submit" value="Wybierz ulubioną salę koncertową">

            <?php
                if($_SERVER['REQUEST_METHOD'] == "POST") {
                    if(isset($_POST["miasta"]) && !empty($_POST["miasta"])) {
                        echo "<br><br>Twoje ulubione sale koncertowe znajdują się w miastach: " .
                            implode(", ", $_POST["miasta"]);
                    } else {
                        echo "<br><br>Nie wybrałeś ulubionej sali.";
                    }
                }
            ?>
        </fieldset>
    </form>
</body>
</html>
