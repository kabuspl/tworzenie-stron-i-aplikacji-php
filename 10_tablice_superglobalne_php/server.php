<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        print_r($_SERVER);
    ?>
    </pre>
    <ol type="a">
        <li>SCRIPT_FILENAME = <?= $_SERVER['SCRIPT_FILENAME'] ?></li>
        <li>SERVER_NAME = <?= $_SERVER['SERVER_NAME'] ?></li>
        <li>REQUEST_METHOD = <?= $_SERVER['REQUEST_METHOD'] ?></li>
    </ol>
</body>
</html>