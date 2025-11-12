<?php
// Conexión a la base de datos
$host = "localhost";
$usuario = "admin";
$clave = "admin";
$bd = "barberia";

$conn = new mysqli($host, $usuario, $clave, $bd);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar que se reciban los datos
if(isset($_POST['nombre']) && isset($_POST['email'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $fecha_cita = $_POST['fecha_cita'];
    $hora_cita = $_POST['hora_cita'];
    $servicio_cita = $_POST['servicio_cita'];
    $comentarios = $_POST['comentarios'];

    // Preparar consulta segura
    $sql = "INSERT INTO citas (nombre, email, telefono, fecha, hora, servicio, comentarios) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $nombre, $email, $telefono, $fecha_cita, $hora_cita, $servicio_cita, $comentarios);

    if ($stmt->execute()) {
        echo "<script>alert('Cita agendada correctamente'); window.location.href='cita.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
