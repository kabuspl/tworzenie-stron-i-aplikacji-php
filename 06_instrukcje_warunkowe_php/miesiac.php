<style>
    h1 {
        border: pink dotted;
        border-width: 4px 0;
        text-align: center;
    }
    h3 {
        border: dashed pink;
        border-width: 2px 0;
        text-align: center;
        font-family: cursive;
    }
</style>

<?php
$miesiac = rand(1, 15);
?>
<h1><?= $miesiac ?></h1>

<h3>
<?php
switch($miesiac) {
    case 1:
    case 2:
    case 3:
        echo "I kwartał";
        break;
    case 4:
    case 5:
    case 6:
        echo "II kwartał";
        break;
    case 7:
    case 8:
    case 9:
        echo "III kwartał";
        break;
    case 10:
    case 11:
    case 12:
        echo "IV kwartał";
        break;
    default:
        echo "Błędny numer miesiąca";
        break;
}
?>
</h3>