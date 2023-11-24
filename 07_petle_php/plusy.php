<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $plusy = rand(0, 10);
        echo "Plusy: $plusy<br>";

        if($plusy<1 || $plusy>9) {
            echo "Wartość jest poza zakresem <1, 9>";
        }

        while($plusy>0 && $plusy<10) {
            echo "+";
            $plusy--;
        }  
    ?>
</body>
</html>