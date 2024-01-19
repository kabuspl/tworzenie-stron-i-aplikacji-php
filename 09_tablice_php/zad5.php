<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numbers = array(rand(0, 99), rand(0, 99), rand(0, 99), rand(0, 99), rand(0, 99));
        rsort($numbers);
        print_r($numbers);
    ?>
</body>
</html>