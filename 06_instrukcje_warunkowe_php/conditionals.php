<style>
.jeden {
    text-align: center;
    color: darkorchid;
}
.dwa {
    text-align: center;
    color: magenta;
}
.trzy {
    text-align: center;
    color: navy;
}
.cztery {
    text-align: center;
    color: deeppink;
}
</style>

<?php
$losowa = rand(1,30);
?>
<h2 class="jeden"><?= $losowa ?></h2>

<?php

if($losowa >= 20) {
    echo "<h4 class='dwa'>Wylosowana liczba jest większa lub równa 20</h4>";
}

if($losowa % 2 == 0) {
    echo "<h4 class='trzy'>Liczba jest parzysta</h4>";
} else {
    echo "<h4 class='trzy'>Liczba nie jest parzysta</h4>";
}

if($losowa < 10) {
    echo "<h4 class='cztery'>Pierwsza dziesiątka</h4>";
} else if($losowa < 20) {
    echo "<h4 class='cztery'>Druga dziesiątka</h4>";
} else if($losowa < 30) {
    echo "<h4 class='cztery'>Trzecia dziesiątka</h4>";
}

?>