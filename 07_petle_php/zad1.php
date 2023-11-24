<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        li {
            margin-left: 40px;
        }
    </style>
</head>
<body>
    <ol type="I">
        <?php
            for($n = 1; $n <= 100; $n++) {
                echo "<li>To jest $n. element listy</li>";
            }
        ?>
    </ol>
</body>
</html>