<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="trim">trim:</label><br>
        <input type="text" name="trim" id="trim"><br>
        <label for="stripslashes">stripslashes:</label><br>
        <input type="text" name="stripslashes" id="stripslashes"><br>
        <label for="htmlspecialchars">htmlspecialchars:</label><br>
        <input type="text" name="htmlspecialchars" id="htmlspecialchars"><br>
        <input type="submit">
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            echo "<h3>trim</h3>";
            echo "Przed: ";
            var_dump($_POST['trim']);
            echo "<br>Po:";
            var_dump(trim($_POST['trim']));

            echo "<h3>stripslashes</h3>";
            echo "Przed: ";
            var_dump($_POST['stripslashes']);
            echo "<br>Po:";
            var_dump(stripslashes($_POST['stripslashes']));

            echo "<h3>htmlspecialchars</h3>";
            echo "Przed: ";
            var_dump($_POST['htmlspecialchars']);
            echo "<br>Po:";
            var_dump(htmlspecialchars($_POST['htmlspecialchars']));
        }
    ?>
</body>
</html>