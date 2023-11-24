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
            border: 2px solid black;
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php
        $dni = date("t");
    ?>
    <table>
        <caption><?=$dni?></caption>
        <tr>
            <?php
                for($n = 1; $n <= $dni; $n++) {
                    if(($n-1)%7 == 0) echo "</tr><tr>";
                    echo "<td>$n</td>";
                }
            ?>  
        </tr>
    </table>
</body>
</html>