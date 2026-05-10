<?php
// Recibir las variables enviadas desde Flash
$nombre      = $_POST['nombre'];
$ciudad      = $_POST['ciudad'];
$email       = $_POST['email'];
$comentarios = $_POST['comentarios'];

// Configuración del correo
$para        = "luisalejandrolorenzogtz2008@gmail.com"; // <--- CAMBIA ESTO
$asunto      = "Nueva suscripción a novedades";
$mensaje     = "Nombre: $nombre \nCiudad: $ciudad \nEmail: $email \nComentarios: $comentarios";
$cabeceras   = "From: luisalejandrolorenzogtz2008@gmail.com";

// Enviar el correo
if(mail($para, $asunto, $mensaje, $cabeceras)) {
    // Flash espera una respuesta para confirmar que se envió
    echo "status=success";
} else {
    echo "status=error";
}
?>