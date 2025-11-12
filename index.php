<!-- index.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BARBERIA URBANBLADE</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Scroll suave */
        html {
            scroll-behavior: smooth;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: #ff4500;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
            transition: background 0.3s ease;
        }
        .btn:hover {
            background: #f8b500;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">BARBERIA URBANBLADE</div>
        <nav>
            <a href="#inicio">Inicio</a>
            <a href="#servicios">Servicios</a>
            <a href="#registro">Registro</a>
            <a href="#cita">Agendar Cita</a>
            <a href="#contacto">Contacto</a>
        </nav>
    </header>

    <!-- Hero section -->
    <section id="inicio" class="hero" style="background-image: url('img/hero.jpg');">
        <h1>BARBERIA URBANBLADE</h1>
        <p>El mejor estilo para tu cabello y barba</p>
        <a href="#registro" class="btn">Regístrate ahora</a>
        <a href="#cita" class="btn">Agendar Cita</a>
        </section>
    <!-- Servicios -->
    <section id="servicios" class="services">
        <h2>Nuestros servicios</h2>
        <div class="cards">
            <div class="card">
                <img src="img/corte.jpg" alt="Corte de Cabello">
                <h3>Corte de Cabello</h3>
                <p>Estilo profesional adaptado a tu personalidad.</p>
            </div>
            <div class="card">
                <img src="img/afeitado.jpg" alt="Afeitado">
                <h3>Afeitado</h3>
                <p>Afeitado clásico con toallas calientes.</p>
            </div>
            <div class="card">
                <img src="img/barba.jpg" alt="Cuidado de Barba">
                <h3>Barba</h3>
                <p>Perfilado y cuidado de la barba con productos premium.</p>
            </div>
        </div>
    </section>

    <!-- Registro de Clientes -->
    <section id="registro" class="registro">
        <h2>Registro de Clientes</h2>
        <form action="registro.php" method="POST" class="registro-form">
            <input type="text" name="nombre" placeholder="Nombre completo" required>
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <input type="tel" name="telefono" placeholder="Teléfono" required>
            <button type="submit">Registrarse</button>
        </form>
    </section>

    <!-- Agendar Cita -->
    <section id="cita" class="registro">
        <h2>Agendar Cita</h2>
        <form action="index.php#cita" method="POST" class="registro-form">
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
        <a href="#inicio" class="btn">Regresar al inicio</a>
    </section>

    <!-- Footer -->
    <footer id="contacto">
        <h3>Contacto</h3>
        <p>Dirección: Jr. 24 de junio</p>
        <p>Teléfono: +51 985226470</p>
        <p>Redes Sociales: 
            <a href="#">Facebook</a> | 
            <a href="#">Instagram</a> | 
            <a href="#">WhatsApp</a>
        </p>
        <p>© 2025 BARBERIA URBANBLADE. Todos los derechos reservados.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
