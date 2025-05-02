<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "liza-db17.mysql.database.azure.com";
$username = "lizaadmin";
$password = "Liza1234Z";

// Tworzymy połączenie z MySQL na porcie 3306 bez wskazania bazy
$conn = new mysqli($host, $username, $password, "", 3306);

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
