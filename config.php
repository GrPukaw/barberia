<?php
// config.php
$host = "localhost";
$user = "admin"; // tu usuario de MySQL
$password = "admin"; // tu contraseña de MySQL
$database = "barberia";

// Crear conexión
$conn = new mysqli($host, $user, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
