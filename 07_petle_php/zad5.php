<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for($n = -15; $n <= 10; $n++) {
            echo $n;
            if($n == 10) {
                echo ".";
            } else {
                echo ", ";
            }
        }
    ?>
</body>
</html>