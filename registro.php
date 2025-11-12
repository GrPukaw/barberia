<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO clientes (nombre, email, telefono) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nombre, $email, $telefono);

    if ($stmt->execute()) {
        echo "<h2>Registro exitoso!</h2>";
        echo "<p>Gracias, $nombre. Tu registro se ha guardado correctamente.</p>";
        echo '<a href="index.php">Volver al inicio</a>';
    } else {
        echo "<h2>Error en el registro</h2>";
        echo "<p>".$stmt->error."</p>";
        echo '<a href="index.php">Volver al inicio</a>';
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<h2>Acceso no permitido</h2>";
    echo '<a href="index.php">Volver al inicio</a>';
}
?>
