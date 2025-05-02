<?php
$host = "liza-db17.mysql.database.azure.com";
$username = "lizaadmin@liza-db17";
$password = "Liza1234Z";
$dbname = "todo"; // zakładamy, że tak się będzie nazywać Twoja baza

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("❌ Błąd połączenia z bazą danych: " . $conn->connect_error);
}
echo "✅ Połączono z bazą danych!";
?>
