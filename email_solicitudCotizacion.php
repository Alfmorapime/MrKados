<?php 
if(isset($_POST["nameCotizacion"]))
{
    $mas = $_POST["masCotizacion"];
    $nombre = $_POST["nameCotizacion"];
    $company = $_POST["companyCotizacion"];
    $giro = $_POST["giroCotizacion"];
    $service = $_POST["serviciosCotizacion"];

    //Set the email
    $to = 'hola@mrkados.com';
    $strSubject='Ficha de Cotizaciòn para Mrkados';
    $message = file_get_contents('template_cotizacion.php'); 
    $message = str_replace('{{firstname}}', $nombre, $message);
    $message = str_replace('{{company}}', $company, $message);
    $message = str_replace('{{giro}}', $giro, $message);
    $message = str_replace('{{service}}', $service, $message);
    $message = str_replace('{{mas}}', $mas, $message);

    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    $headers .= "From: hola@mrkados.com";

    $mail_sent = mail($to, $strSubject, $message, $headers);

    header("Location: contactanosExitoso.php?correo=$user&type=$usuarioTipo");
}
?>