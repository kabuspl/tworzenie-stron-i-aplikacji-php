<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define("DOBRA_RADA", "Bez chleba, to się nie najesz.");
        echo DOBRA_RADA."<br>";
        echo "strlen: ".strlen(DOBRA_RADA)."<br>";
        echo "str_word_count: ".str_word_count(DOBRA_RADA)."<br>";
        echo "strrev: ".strrev(DOBRA_RADA)."<br>";
        echo "strpos: ".strpos(DOBRA_RADA, "to")."<br>";
        echo "str_replace: ".str_replace("chleba", "mięsa", DOBRA_RADA)."<br>";
        echo "strtolower: ".strtolower(DOBRA_RADA)."<br>";
        echo "strtoupper: ".strtoupper(DOBRA_RADA)."<br>";
        echo "ucwords: ".ucwords(DOBRA_RADA)."<br>";
        echo "trim: ".trim(DOBRA_RADA)."<br>";
        echo "strstr: ".strstr(DOBRA_RADA, "nie")."<br>";
        echo "substr: ".substr(DOBRA_RADA, 10, 5)."<br>";
        echo "str_pad: ".str_pad(DOBRA_RADA, 41, " -_-", STR_PAD_BOTH)."<br>";
    ?>
</body>
</html>