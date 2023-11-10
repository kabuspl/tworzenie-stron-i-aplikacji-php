<style>
    p {
        background-color: lightsteelblue;
        border: 2px dotted blueviolet;
        border-radius: 5px;
        font-style: italic;
        padding: 15px;
    }
</style>

<?php
$rozpoczecie = mktime(12, 00, 00, 9, 4, 2023);
?>
<p>Rozpoczęcie tego roku szkolnego odbyło się w <?= date("l", $rozpoczecie) ?> i był to <?= date("z", $rozpoczecie) ?> dzień roku</p>