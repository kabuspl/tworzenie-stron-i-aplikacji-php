<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select>
        <?php
            $miesiace = [
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
            
            foreach ($miesiace as $i => $miesiac) {
                echo "<option value='$miesiac' ".(date("n") == $i + 1 ? "selected" : "").">$miesiac</option>";
            }
        ?>
    </select>
</body>
</html>