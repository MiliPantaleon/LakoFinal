<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Dirección de correo electrónico a la que se enviará el mensaje
    $destinatario = "estudio@lako.com.ar";

    // Asunto del correo electrónico
    $asunto = "Nuevo mensaje de contacto desde tu sitio web";

    // Cuerpo del correo electrónico
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Email: $email\n";
    $contenido .= "Mensaje:\n$mensaje";

    // Envía el correo electrónico
    mail($destinatario, $asunto, $contenido);

    // Redirige al usuario a una página de confirmación
    header("Location: gracias.html");
    exit;
}
?>
