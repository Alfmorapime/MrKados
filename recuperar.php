<?php
ob_start();

if(isset($_GET["error"]))
{
    $error = $_GET["error"];
}
else
{
    $error = $_GET["error"];
}
require_once('Page.class.php');
$conection = include 'conection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
        $correo = $_POST["email"]; 

        $query = "select * from usuarios where correo = '$correo';";
        $result_slider = mysqli_query($conection,$query);
        $row = mysqli_fetch_assoc($result_slider);

        if($row != 0)
        {
            $correoUsuario = $row['correo'];
            $to = $correoUsuario;
            $subject = 'Recuperación de contraseña para tu cuenta de MrKados. ';
            $message = file_get_contents('template_recuperacionClave.php'); 
            $message = str_replace('{{correo}}', $correoUsuario, $message);

            //SET HEADER OF THE EMAIL
            $headers = "Organization: MrKados\r\n";
            $headers .= 'MIME-Version: 1.0'."\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
            $headers .= "X-Priority: 3\r\n";
            $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
            $headers .= "Reply-To:  MrKados <hola@mrkados.com>\r\n";
            $headers .= "Return-Path:  MrKados <hola@mrkados.com>\r\n";
            $headers .= "From: MrKados <info@mrkados.com>\r\n";

            $mail_sent=mail($to, $subject, $message, $headers);
            header("Location: recuperacionEmailEnviado.php?correo=$correoUsuario");
        }
        else
        {
            header("Location: recuperar.php?error=1");
        }
}

//Structuracion de la pagina.
//Page::setTitle($title); //Se llama al metodo que setea el titulo
Page::header2($user,$usuarioTipo); //Se llama al metodo que contiene el header de la pagina
Page::recuperarForm($error, $user, $usuarioTipo);
Page::footer($user,$usuarioTipo); // Banner que contiene el pie de la pagina.
ob_end_flush();
?>