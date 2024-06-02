<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST)
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $mensaje = $_POST['mensaje'];

    // Validar los datos
    if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
        $to = "mmpantaleon@gmail.com";
        $subject = "Nuevo mensaje de contacto";
        $body = "Nombre: $nombre\nEmail: $email\nPhone: $phone\nMensaje: $mensaje";
        $headers = "From: no-reply@tudominio.com";

        if (mail($to, $subject, $body, $headers)) {
            echo "Mensaje enviado con éxito.";
        } else {
            error_log("Error al enviar el correo.");
            echo "Error al enviar el mensaje.";
        }
    } else {
        echo "Todos los campos son obligatorios.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
