<?php
// Conexión a la base de datos
$host = "localhost";
$usuario = "admin"; 
$clave = "admin"; 
$bd = "barberia";
$conn = new mysqli($host, $usuario, $clave, $bd);
$mensaje = "";

if($conn->connect_error){
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesar formulario si se envía
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $fecha_cita = $_POST['fecha_cita'];
    $hora_cita = $_POST['hora_cita'];
    $servicio_cita = $_POST['servicio_cita'];
    $comentarios = $_POST['comentarios'];

    $sql = "INSERT INTO citas (nombre, email, telefono, fecha, hora, servicio, comentarios) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $nombre, $email, $telefono, $fecha_cita, $hora_cita, $servicio_cita, $comentarios);

    if($stmt->execute()){
        $mensaje = "Cita agendada correctamente";
    } else {
        $mensaje = "Error al agendar cita: " . $stmt->error;
    }
    $stmt->close();
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Cita - Barbería UrbanPlade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">Barbería UrbanPlade</div>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="#servicios">Servicios</a>
            <a href="#registro">Registro</a>
            <a href="index.php#contacto">Contacto</a>
        </nav>
    </header>

    <section class="registro">
        <h2>Agendar Cita</h2>
        <?php if($mensaje != ""): ?>
            <p style="background:#d4edda;color:#155724;padding:10px;border-radius:5px; text-align:center;">
                <?php echo $mensaje; ?>
            </p>
        <?php endif; ?>
        <form action="" method="POST" class="registro-form">
            <input type="text" name="nombre" placeholder="Nombre completo" required>
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <input type="tel" name="telefono" placeholder="Teléfono" required>
            <input type="date" name="fecha_cita" required>
            <input type="time" name="hora_cita" required>
            <select name="servicio_cita" required>
                <option value="">Selecciona un servicio</option>
                <option value="corte">Corte de cabello</option>
                <option value="afeitado">Afeitado</option>
                <option value="barba">Barba</option>
            </select>
            <textarea name="comentarios" placeholder="Comentarios adicionales"></textarea>
            <button type="submit">Agendar Cita</button>
        </form>
        <a href="index.php" class="btn">Regresar al inicio</a>
    </section>
</body>
</html>
