<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset {
            border: 3px solid gray;
        }
        legend {
            border-width: 0 3px;
            border-style: solid;
            border-color: gray;
            padding: 7px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Najlepszy rok w muzyce</legend>

            <label for="rok">Wybierz najlepszy rok w muzyce: </label>
            <select name="rok" id="rok" required>
                <?php
                foreach(["", ...range(1500, 2020)] as $rok) {
                    $selected = isset($_POST["rok"]) && $_POST["rok"] == $rok ? "selected" : "";
                ?>
                    <option value="<?=$rok?>" <?=$selected?>><?=$rok?></option>
                <?php
                }
                ?>
            </select>
            <br><br>

            <input type="submit" value="Wybierz najlepszy rok w muzyce">

            <?php
                if(isset($_POST["rok"])) {
                    echo "<br><br>Według ciebie najlepszym rokiem w muzyce był rok: ".$_POST["rok"].".<br><br>";
                }
            ?>
        </fieldset>
    </form>
</body>
</html>