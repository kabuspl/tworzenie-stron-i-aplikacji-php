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
            border: 1px solid sandybrown;
            padding: 10px;
        }
        .bg {
            background-color: brown;
        }
    </style>
</head>
<body>
    <?php
        $dni_tygodonia = [
            "poniedziałek",
            "wtorek",
            "środa",
            "czwartek",
            "piątek",
            "sobota",
            "niedziela"
        ];
    ?>
    <table>
        <?php
        foreach ($dni_tygodonia as $dzien) {
        ?>
        <tr>
            <td <?=$dzien=="piątek" ? "class='bg'" : "" ?>><?=$dzien?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>