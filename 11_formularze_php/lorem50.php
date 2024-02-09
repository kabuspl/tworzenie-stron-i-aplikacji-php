<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .lorem {
            font-style: italic;
            color: red;
        }
        fieldset {
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>lorem50</legend>
            <?php
                if(isset($_POST["lorem"])) {
                    echo "<p>Oto wpisany tekst:</p>";
                    echo "<p class='lorem'>".$_POST["lorem"]."</p>";
                } else {
                    echo "<textarea rows='5' cols='50' name='lorem'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt odio fugiat assumenda dolore tenetur, voluptatum at omnis delectus accusamus? Libero et nostrum doloribus deleniti ipsa odit nam, aliquam suscipit impedit aperiam consequuntur labore, sit saepe aut error exercitationem vero totam qui! Amet suscipit hic numquam provident nam, magni ducimus optio.</textarea><br>";
                    echo "<input type='submit'>";
                }
            ?>
        </fieldset>
    </form>
</body>
</html>