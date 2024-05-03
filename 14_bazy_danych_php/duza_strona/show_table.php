<?php
$table = $_GET["table"];
?>
<h1>Tabela <?=$table?></h1>

<?php
$conn = new mysqli("127.0.0.1", "sakra", "supermocnehaslo", "sakra");
if ($conn->connect_error) {
    die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: " . $conn->connect_error);
}
$columns_query = null;
try {
    $columns_query = $conn->query("DESC $table;");
} catch(Exception $e){
    die("Tabela nie istnieje!!!");
}
$columns = array_column($columns_query->fetch_all(MYSQLI_ASSOC), "Field");
$result = $conn->query("SELECT * FROM $table;");
?>
Liczba wierszy: <?= $result->num_rows ?>

<table>
    <tr>
        <?php
        foreach ($columns as $column) {
        ?>
            <th><?=$column?></th>
        <?php
        }
        ?>
    </tr>
    <?php
    while($row = $result->fetch_assoc()) {
    ?>
    <tr>
        <?php
        foreach ($row as $key => $value) {
        ?>
            <td><?=$value?></td>
        <?php
        }
        ?>
    </tr>
    <?php
    }
    ?>
</table>
