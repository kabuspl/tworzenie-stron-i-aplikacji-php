<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3 {
            color: red;
        }

        p {
            color: #336ee1;
        }

        div {
            color: green;
            text-decoration: underline overline;
        }
    </style>
</head>
<body>
    <?php
        $a = 97;
        $b = 3.14;
        $c = "PHP";
    ?>
    <h3><?=$a?> jest liczbą pierwszą</h3>
    <p>Liczba Pi zaokrąglona do dwóch miejsc po przecinku: <?=$b?></p>
    <div><?=$c?> to język skryptowy wykonywany po stronie serwera</div>
</body>
</html>