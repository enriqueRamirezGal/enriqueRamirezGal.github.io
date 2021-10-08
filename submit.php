<$php

$name = $_POST['your-name'];
$email = $_POST['your-email'];
$empresa = $_POST['empresa'];
$telefono = $_POST['telefono'];
$sistema = $_POST['sistema'];
$asunto = $_POST['your-subject'];
$mensaje = $_POST['your-message'];

$header = 'From: '. $email. " \r\n";
$header .= "X-mailer: PHP/" .phpversion(). " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " .$name . "\r\n";
$message .= "Su email es: " .$email . "\r\n";
$message .= "Telefono de contacto: " .$telefono . "\r\n";
$message .= "Mensaje: " .$mensaje . "\r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'ramirezgalindoenrique@gmail.com';
$asunto = 'ASUNTO PRUEBAS';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:prueba.html");
?>