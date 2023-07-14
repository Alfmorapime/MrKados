<?php 
if(isset($_POST["tipo_de_usuario"]))
{
    $nombre = $_POST["nombre"];
    $tipo_usuario = $_POST["tipo_de_usuario"];
    $pais = $_POST["pais"];
    $ciudad = $_POST["ciudad"];
    $estado = $_POST["estado"];
    $codigoPostal = $_POST["codigoPostal"];
    $asunto = $_POST["asunto"];
    $correo = $_POST["correo"];
    $comentario = $_POST["comentario"];

    //Set the email
    $to = 'hola@mrkados.com';
    $strSubject='Ficha Contacto';
    $message = file_get_contents('template_contactanos.php'); 
    $message = str_replace('{{firstname}}', $nombre, $message);
    $message = str_replace('{{tipo}}', $tipo_usuario, $message);
    $message = str_replace('{{pais}}', $pais, $message);
    $message = str_replace('{{ciudad}}', $ciudad, $message);
    $message = str_replace('{{estado}}', $estado, $message);
    $message = str_replace('{{codigoPostal}}', $codigoPostal, $message);
    $message = str_replace('{{asunto}}', $asunto, $message);
    $message = str_replace('{{correo}}', $correo, $message);
    $message = str_replace('{{comentario}}', $comentario, $message);

    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    $headers .= "From: hola@mrkados.com";

    $mail_sent = mail($to, $strSubject, $message, $headers);

    header("Location: contactanosExitoso.php?correo=$user&type=$usuarioTipo");
    
}
?>