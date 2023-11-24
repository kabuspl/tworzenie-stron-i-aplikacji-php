<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for($n = 50; $n <= 150; $n++) {
            if($n % 2 != 0 && $n % 3 == 0) {
                echo $n."|";
            }
        }
    ?>
</body>
</html>