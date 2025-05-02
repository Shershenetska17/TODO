<?php
$host = "liza-db17.mysql.database.azure.com";
$username = "lizaadmin@liza-db17";
$password = "Liza1234Z";

// Połączenie bez wskazania konkretnej bazy (bo dopiero ją tworzymy)
$conn = new mysqli($host, $username, $password);

if ($conn->connect_error) {
    die("❌ Błąd połączenia: " . $conn->connect_error);
}

$sql = "CREATE DATABASE todo";

if ($conn->query($sql) === TRUE) {
    echo "✅ Baza danych 'todo' została utworzona!";
} else {
    echo "❌ Błąd: " . $conn->error;
}

$conn->close();
?>
