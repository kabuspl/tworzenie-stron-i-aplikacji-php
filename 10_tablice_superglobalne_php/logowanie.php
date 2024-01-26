<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="text" name="login">
        <input type="password" name="haslo">
        <input type="submit" value="Wyslij" name="wyslij">
    </form>
    <br>
    <pre>
        <?php
            print_r($_GET);
        ?>
    </pre>
</body>
</html>