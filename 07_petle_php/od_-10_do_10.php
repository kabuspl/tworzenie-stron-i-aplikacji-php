<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            color: yellowgreen;
            border-width: 10px 0;
            border-style: double;
            border-color: greenyellow;
            font-size: 24px;
            padding: 10px 0;
            text-shadow: 1px 1px 5px forestgreen;
        }
    </style>
</head>
<body>
    <p>
        <?php
            for($i = -10; $i <= 10; $i++) {
                echo $i . ($i==10 ? "." : ", ");
            }
        ?>
    </p>
</body>
</html>