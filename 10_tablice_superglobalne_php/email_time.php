<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Email: <input type="email" name="email"><br>
        Date: <input type="date" name="date"><br>
        Month: <input type="month" name="month"><br>
        Time: <input type="time" name="time"><br>
        Week: <input type="week" name="week"><br>
        <input type="submit">
    </form>
    <pre>
        <?php
            print_r($_POST);
        ?>
    </pre>
</body>
</html>