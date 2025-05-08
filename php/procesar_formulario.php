<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["Nombre"]);
    $email = htmlspecialchars($_POST["email"]);
    $telefono = htmlspecialchars($_POST["Telefono"]);
    $mensaje = htmlspecialchars($_POST["Mensaje"]);

    $destinatario = "tuemail@ejemplo.com"; // Reemplaza con tu email
    $asunto = "Nuevo mensaje de contacto";
    $contenido = "Nombre: $nombre\nCorreo: $email\nTeléfono: $telefono\nMensaje:\n$mensaje";

    // Enviar correo
    if (mail($destinatario, $asunto, $contenido)) {
        echo "¡Mensaje enviado correctamente!";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
}
?>