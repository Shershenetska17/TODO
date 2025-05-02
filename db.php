<?php
$host = "liza-db17.mysql.database.azure.com";
$username = "lizaadmin"; // ← bez @liza-db17
$password = "Liza1234Z";
$dbname = "todo";

$conn = new mysqli($host, $username, $password, $dbname, 3306);

if ($conn->connect_error) {
    die("❌ Błąd połączenia z bazą danych: " . $conn->connect_error);
}
echo "✅ Połączono z bazą danych!";
?>
