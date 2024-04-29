<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["full-name"]);
        $email = htmlspecialchars($_POST["email"]);
        $phone = htmlspecialchars($_POST["phone"]);
        $company = htmlspecialchars($_POST["company"]);
        $job_title = htmlspecialchars($_POST["job-title"]);
        $date = htmlspecialchars($_POST["date"]);
        $message = htmlspecialchars($_POST["message"]);

        $to = "disenolako@gmail.com";
        $subject = "Nuevo contacto de la página web";
        $headers = "From: $email" . "\r\n" .
                   "Reply-To: $email" . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();
        $body = "Nombre completo: $name\n" .
                "Email: $email\n" .
                "Teléfono: $phone\n" .
                "Empresa: $company\n" .
                "Cargo: $job_title\n" .
                "Fecha de nacimiento: $date\n" .
                "Mensaje: $message";

        if (mail($to, $subject, $body, $headers)) {
            header("Location: success.html");
        } else {
            header("Location: error.html");
        }
    }
?>