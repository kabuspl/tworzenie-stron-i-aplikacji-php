<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>
    <?php
        $parzyste = range(0, 12, 2);
        $dziesiatki = range(-10, 100, 10);
        $polowki = range(-5.5, 5.5, 0.5);
        $litery_od_em = range('m', 'e');
        $litery_wstecz = range('X', 'E');

        print_r($parzyste);
        print_r($dziesiatki);
        print_r($polowki);
        print_r($litery_od_em);
        print_r($litery_wstecz);
    ?>
</pre>
    
</body>
</html>