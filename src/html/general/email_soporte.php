<?php

$to = "MrKados <hola@mrkados.com>"; 
$strSubject="Soporte: $soporteAsunto";
$message = file_get_contents('template_soporte.php'); 
$message = str_replace('{{soporteName}}', $soportename, $message);
$message = str_replace('{{soporteCorreo}}', $soporteCorreo, $message);
$message = str_replace('{{soporteAsunto}}', $soporteAsunto, $message);
$message = str_replace('{{soporteMensaje}}', $soporteMensaje, $message);

 //SET HEADER OF THE EMAIL
 $headers = "Organization: MrKados\r\n";
 $headers .= 'MIME-Version: 1.0'."\r\n";
 $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
 $headers .= "X-Priority: 3\r\n";
 $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
 $headers .= "Reply-To:  MrKados <hola@mrkados.com>\r\n";
 $headers .= "Return-Path:  MrKados <hola@mrkados.com>\r\n";
 $headers .= "From: MrKados <hola@mrkados.com>\r\n";

$mail_sent=mail($to, $strSubject, $message, $headers);
?>