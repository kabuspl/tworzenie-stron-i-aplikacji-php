<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset {
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Roczniki</legend>
        <?php
            for($i = 2010; $i <= 2025; $i++) {
                echo "<input type='radio' name='rok' id='rok$i' value='$i'><label for='rok$i'>$i</label><br>";
            }
        ?>
    </fieldset>
</body>
</html>
