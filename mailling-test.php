
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "it@logicbus.com"; // Cambia esto al correo del destinatario
    $subject = "¡Hola, mundo!";
    $message = "Este es un saludo desde mi formulario web.";
    $header = "Content-type: text/plain; charset=UTF-8" . "\r\n";
    // Envía el correo

    if( mail($to, $subject, $message,$header))    echo "Correo enviado correctamente.";
}
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Hola Mundo por Email</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" value="Enviar Hola Mundo">
    </form>
</body>
</html>
