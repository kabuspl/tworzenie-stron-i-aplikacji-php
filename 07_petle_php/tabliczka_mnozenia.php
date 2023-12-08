<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            font-family: Verdana, sans-serif;
            font-size: large;
        }

        td, th {
            border: 1px dashed black;
            padding: 5px;
        }

        th {
            background-color: burlywood;
        }

        td {
            background-color: beige;
            text-align: center;
            vertical-align: middle;
        }

        .przek {
            background-color: bisque;
        }
    </style>
</head>
<body>
    <table>
        <caption>Tabliczka mnożenia</caption>
        <tr>
            <?php
                for($x=0; $x<=10; $x++) {
                    if($x==0) {
                        echo "<th>&times;</th>";
                    }else{
                        echo "<th>$x</th>";
                    }
                }
            ?>
        </tr>
        <?php
            for($x=1; $x<=10; $x++) {
                echo "<tr><th>$x</th>";
                for($y=1; $y<=10; $y++) {
                    echo ($x==$y ? "<td class='przek'>" : "<td>").($x*$y)."</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>