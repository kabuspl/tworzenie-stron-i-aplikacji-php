<style>
    .pierwszy {
        color: tomato;
    }
    .drugi {
        color: navy;
    }
</style>

<h3 class="pierwszy">Aktualna godzina</h3>
<p class="pierwszy"><?= date("G:i:s") ?></p>
<h3 class="drugi">Osiem godzin później</h3>
<p class="drugi"><?= date("G:i:s", time()+28800) ?></p>