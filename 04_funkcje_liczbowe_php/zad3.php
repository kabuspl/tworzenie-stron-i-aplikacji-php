<?php

?>
<style>
    p {
        font-weight: bold;
        color: aliceblue;
        background-color: darkblue;
    }
</style>
<p>abs: <?= abs(-232) ?></p>
<p>min: <?= min(0, 150, 30, 20, -8, -200) ?></p>
<p>max: <?= max(0, 150, 30, 20, -8, -200) ?></p>
<p>pi: <?= pi() ?></p>
<p>round: <?= round(3.4) ?></p>
<p>round: <?= round(3.6) ?></p>
<p>round: <?= round(5.045, 2) ?></p>
<p>round: <?= round(5.055, 2) ?></p>
<p>rand: <?= rand(900, 1000) ?></p>
<p>sqrt: <?= sqrt(0) ?></p>
<p>sqrt: <?= sqrt(64) ?></p>
<p>sqrt: <?= sqrt(256) ?></p>
<p>sqrt: <?= sqrt(65536) ?></p>