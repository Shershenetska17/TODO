<?php
$host = "liza-db17.mysql.database.azure.com";
$username = "lizaadmin@liza-db17";
$password = "Liza1234Z";
$dbname = "todo";

// Połączenie z bazą danych na porcie 3306
$conn = new mysqli($host, $username, $password, $dbname, 3306);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("❌ Błąd połączenia z bazą danych: " . $conn->connect_error);
}
echo "✅ Połączono z bazą danych!";
?>
