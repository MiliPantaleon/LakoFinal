<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Información del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$mensaje_usuario = $_POST['mensaje']; // El campo mensaje que contiene la provincia y ciudad

// Construir el mensaje
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su email es: " . $email . ",\r\n";
$mensaje .= "Su teléfono es: " . $phone . ",\r\n";
$mensaje .= "Vive en: " . $mensaje_usuario . ",\r\n";

// Definir mail de recepción y asunto
$destinatario = "estudio@lako.com.ar";
$asunto = "Hola quiero trabajar con LAKO stands";

// Construir las cabeceras
$headers = "From: " . $email . "\r\n" .
           "Reply-To: " . $email . "\r\n" .
           "X-Mailer: PHP/" . phpversion() . "\r\n" .
           "MIME-Version: 1.0\r\n" .
           "Content-Type: text/plain; charset=utf-8\r\n";

// Enviar el correo
if (mail($destinatario, $asunto, $mensaje, $headers)) {
    // Redirigir después de enviar el formulario
    header("Location: https://stands.estudiolako.com"); // Asegúrate de que la URL sea correcta
    exit();  // Asegúrate de detener el script después de la redirección
} else {
    echo "Error al enviar el correo.";
}
