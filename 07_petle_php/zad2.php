<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            border: 1px dotted red;
            padding: 15px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <?php
                $split = str_split("Kon'nichiwa sekai");
                foreach($split as $znak) {
                    echo "<td>$znak</td>";
                }
            ?>
        </tr>
    </table>
</body>
</html>