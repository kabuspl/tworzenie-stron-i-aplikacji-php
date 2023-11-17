<style>
    h1 {
        color: brown;
        padding: 10px;
        border: 2px solid black;
    }
    h2 {
        color: indigo;
        border: 2px dotted;
        padding: 10px;
        color: navy;
    }
</style>

<?php
$wiek = rand(0, 100);
?>
<h1>Mam <?= $wiek ?> lat</h1>

<h2>
    <?php
        if($wiek < 18) {
            echo "Jeszcze nie możesz głosować";
        } else if($wiek < 21) {
            echo "Możesz tylko głosować";
        } else if($wiek < 30) {
            echo "Możesz głosować i kandydować do Sejmu";
        } else if($wiek < 35) {
            echo "Możesz głosować i kandydować do Sejmu i Senatu";
        } else {
            echo "Możesz głosować, kandydować do Sejmu i Senatu oraz na Prezydenta";
        }
    ?>
</h2>