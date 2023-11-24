<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            background-color: lightgray;
            border: solid gray;
            padding: 10px;
        }
    </style>
</head>
<body>
    <table>
        <?php
            $n = 1;
            while($n <= 5) {
                echo "<tr><td>To jest wiersz numer $n</td></tr>";
                $n++;
            }
        ?>
    </table>
</body>
</html>