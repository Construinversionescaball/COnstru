<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacto</title>
    <link rel="stylesheet" type="text/css" href="css/contacto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <ul class="nav-links">
            <li><a href="index.html"><i class="fas fa-home"></i> Inicio</a></li>
            <li><a href="servicios.html"><i class="fas fa-cogs"></i> Catálogo</a></li>
            <li><a href="nosotros.html"><i class="fas fa-eye"></i> Nosotros</a></li>
            <li><a href="contacto.php"><i class="fas fa-map-marker-alt"></i> Contáctanos</a></li>
        </ul>
    </nav>

    <section id="contacto" class="contacto">
        <h2>Contáctanos</h2>
        <form id="miFormulario" action="procesar_formulario.php" method="post">
            <div class="form-group">
                <label for="Nombre">Nombre:</label>
                <input type="text" id="Nombre" name="Nombre" required>
            </div>
            
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="Telefono">Teléfono:</label>
                <input type="tel" id="Telefono" name="Telefono" required>
            </div>
            <div class="form-group">
                <label for="Mensaje">Mensaje:</label>
                <textarea id="Mensaje" name="Mensaje" rows="4" required></textarea>
            </div>
            
            <button type="submit" class="btn-submit">Enviar</button>
        </form>
    </section>

    <script src="js/nav.js"></script>
</body>
</html>
