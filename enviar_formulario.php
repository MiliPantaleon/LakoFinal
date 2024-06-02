<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $mensaje = $_POST['mensaje'];

    // Validar los datos
    if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
        // Configurar destinatario y encabezados
        $to = "mmpantaleon@gmail.com";
        $subject = "Nuevo mensaje de contacto";
        $body = "Nombre: $nombre\nEmail: $email\nTeléfono: $phone\nMensaje: $mensaje";
        $headers = "From: $email";

        // Enviar el correo
        if (mail($to, $subject, $body, $headers)) {
            echo "Mensaje enviado con éxito.";
        } else {
            echo "Error al enviar el mensaje.";
        }
    } else {
        echo "Todos los campos son obligatorios.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
