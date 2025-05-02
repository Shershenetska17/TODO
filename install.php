<?php
$host = "liza-db17.mysql.database.azure.com";
$username = "lizaadmin"; // ← to zmieniamy
$password = "Liza1234Z";

$conn = new mysqli($host, $username, $password);

if ($conn->connect_error) {
    die("❌ Błąd połączenia: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS todo";

if ($conn->query($sql) === TRUE) {
    echo "✅ Baza danych 'todo' została utworzona!";
} else {
    echo "❌ Błąd: " . $conn->error;
}

$conn->close();
?>
