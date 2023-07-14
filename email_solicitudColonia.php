<?php 
if(isset($_POST["nameSendColonia"]))
{
    $nombreSolicitante = $_POST["nameSendColonia"];
    $emailSolicitante = $_POST["emailSendColonia"];
    $coloniaSolicitante = $_POST["coloniaSendColonia"];
    
    $to = $emailSolicitante;
    $strSubject="Solicitud de Colonia";
    $message = file_get_contents('template_emailSolicitudColonia.php'); 
    $message = str_replace('{{firstname}}', $nombreSolicitante, $message);      
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    $headers .= "From: info@mrkados.com";

    $mail_sent=mail($to, $strSubject, $message, $headers);

    $to = "hola@mrkados.com";
    $strSubject=$nombreSolicitante." ha solicitado una Colonia";
    $message = file_get_contents('template_emailSolicitudColoniaRecibidoMrkado.php'); 
    $message = str_replace('{{firstname}}', $nombreSolicitante, $message); 
    $message = str_replace('{{email}}', $emailSolicitante, $message);   
    $message = str_replace('{{colonia}}', $coloniaSolicitante, $message);    
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    $headers .= "From: hola@mrkados.com";

    $mail_sent=mail($to, $strSubject, $message, $headers);

    header("Location: enviadoExitoso.php?correo=$user&type=$usuarioTipo");
}
?>