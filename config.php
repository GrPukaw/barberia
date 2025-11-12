<?php
// config.php
$host = "localhost";
$user = "admin";
$password = "admin";
$database = "barberia";

//conexión
$conn = new mysqli($host, $user, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
