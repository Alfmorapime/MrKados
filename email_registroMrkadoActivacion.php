<?php 
$to=$correo; 
$strSubject="¡No te quedes fuera!...Estás a un click de ser un MrKado";
$message = file_get_contents('template_emailRegistroMrkadoActivacion.php'); 
$message = str_replace('{{firstname}}', $nombre, $message);
$message = str_replace('{{correo}}', $correo, $message);

$headers = 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
//$headers .= "Bcc: pradeepku041@gmail.com\r\n";
$headers .= "From: hola@mrkados.com";

$mail_sent=mail($to, $strSubject, $message, $headers);
?>