<?php

$nombre = $_POST['name'];
$mail = $_POST['email'];
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $mensaje . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'diferentt.dev@gmail.com';
$asunto = 'Mensaje de sitio web Mi Gremio';

if(mail($para, $asunto, utf8_decode($mensaje), $header)) {
    echo "Mensaje enviado correctamente.";
}else{
    echo "Hubo un problema al enviar el correo. Por favor intentelo nuevamente.";
}

?>