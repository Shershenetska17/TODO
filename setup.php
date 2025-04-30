<?php
$host = "lizadb2server.mysql.database.azure.com";
$username = "lizaadmin@lizadb2server";
$password = "Llll1234Z";

$conn = new mysqli($host, $username, $password);

if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}

$sql = "
CREATE USER 'liza2'@'%' IDENTIFIED WITH mysql_native_password BY 'Llll1234Z';
GRANT ALL PRIVILEGES ON *.* TO 'liza2'@'%';
FLUSH PRIVILEGES;
";

if ($conn->multi_query($sql) === TRUE) {
    echo "✅ Użytkownik 'liza2' został utworzony!";
} else {
    echo "❌ Błąd: " . $conn->error;
}

$conn->close();
?>
