<?php
$host = "liza-db17.mysql.database.azure.com";
$username = "lizaadmin@liza-db17";
$password = "Liza1234Z";

// Tworzymy połączenie bez wskazania konkretnej bazy danych
$conn = new mysqli($host, $username, $password);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("❌ Błąd połączenia: " . $conn->connect_error);
}

// Tworzymy bazę danych
$sql = "CREATE DATABASE IF NOT EXISTS todo";

if ($conn->query($sql) === TRUE) {
    echo "✅ Baza danych 'todo' została utworzona!";
} else {
    echo "❌ Błąd: " . $conn->error;
}

$conn->close();
?>
