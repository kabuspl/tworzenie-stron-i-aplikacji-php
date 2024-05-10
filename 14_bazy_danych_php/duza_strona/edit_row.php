<?php
$table = $_GET["table"];
$row_id = $_GET["row_id"];
?>

<h1>Edytowanie wiersza <?=$row_id?> w tabeli <?=$table?></h1>

<?php
$conn = new mysqli("127.0.0.1", "sakra", "supermocnehaslo", "sakra");
if ($conn->connect_error) {
    die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: " . $conn->connect_error);
}
$table_escaped = $conn->real_escape_string($table);

$columns_query = null;
try {
    $columns_query = $conn->query("DESC $table_escaped;");
} catch(Exception $e){
    die("Tabela nie istnieje!!!");
}
$columns = array_column($columns_query->fetch_all(MYSQLI_ASSOC), "Field");

$id_column_name = $columns[0];

$escaped_id = $conn->real_escape_string($_GET["row_id"] ?? "0");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $values = [];
    foreach($_POST as $key => $value) {
        $value_escaped = $conn->real_escape_string($key)."='".$conn->real_escape_string($value)."'";
        array_push($values, $value_escaped);
    }
    // echo "INSERT INTO $table_escaped VALUES $values";
    // $result = $conn->query("INSERT INTO $table_escaped VALUES (".implode(", ", $values).")");
    $result = $conn->query("UPDATE $table_escaped SET ".implode(", ", $values)." WHERE $id_column_name=".$escaped_id);
    if($result) {
?>
        <span class="success">Pomyślnie dodano wiersz</span>
<?php
    } else {
?>
        <span class="error">Błąd przy dodawaniu wiersza</span>
<?php
    }
}

$values = $conn->query("SELECT * FROM $table WHERE $id_column_name = '$escaped_id';")->fetch_assoc();
?>

<form action="" method="post">
    <?php
    foreach ($columns as $column) {
    ?>
        <label for="<?=$column?>"><?=$column?>:</label>
        <input type="text" id="<?=$column?>" name="<?=$column?>" value="<?=$values[$column]?>">
    <?php
    }
    ?>
    <input type="submit" value="Edytuj">
</form>