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
            background-color: greenyellow;
            border: lawngreen solid;
            padding: 10px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <?php
                $n = 1;
                do {
                    echo "<td>To jest kolumna numer $n</td>";
                    $n++;
                }while($n < 5);
            ?>
        </tr>
    </table>
</body>
</html>