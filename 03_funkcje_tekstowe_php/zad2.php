<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td, th {
            padding: 5px;
            border: solid 1px black;
        }
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
        $haslo1 = "haslo1";
        $haslo2 = "haslo2";
    ?>
    <table>
        <tr>
            <th><?= $haslo1 ?></th>
            <th><?= $haslo2 ?></th>
        </tr>
        <tr>
            <td colspan="2"><?= $haslo1 == $haslo2 ? "Hasła są takie same" : "Hasła są różne" ?></td>
        </tr>
    </table>
</body>
</html>