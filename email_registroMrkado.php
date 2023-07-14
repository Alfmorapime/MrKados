<?php 
$to=$correo; 
$strSubject="Bienvenid@ a nuestra familia! Y disfrutemos esta aventura juntos";
$message = file_get_contents('template_emailRegistroMrkado.php'); 
$message = str_replace('{{firstname}}', $nombre, $message);

$headers = 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
$headers .= "Bcc: pradeepku041@gmail.com\r\n";
$headers .= "From: hola@mrkados.com";

$mail_sent=mail($to, $strSubject, $message, $headers);
?>