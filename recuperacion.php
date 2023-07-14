<?php
ob_start();

if(isset($_GET["id"]))
{
    $correo2 = $_GET["id"];
}
else
{
    $correo2 = "";
}
$correo="";

if(isset($_GET["error"]))
{
    $error = $_GET["error"];
}
else
{
    $error = "";
}

if(isset($_GET["type"]))
{
    $usuarioTipo = $_GET["type"];
}
else
{
    $usuarioTipo = "";
}

require_once('Page.class.php');
$conection = include 'conection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
        $query = "select * from usuarios where correo = '$correo2';";
        $result_slider = mysqli_query($conection,$query);
        $row = mysqli_fetch_assoc($result_slider);
        $type = "";
      

        if($row != 0)
        {
            $contrasena1 = $_POST["contrasena1"]; 
            $contrasena2 = $_POST["contrasena2"]; 
            
            if($contrasena1 != $contrasena2)
            {
                header("Location: recuperacion.php?id=$correo2&error=1");
            }
            else
            {
                $query = "select * from usuarios where correo = '$correo2';";
                $result_slider = mysqli_query($conection,$query);
                $type = "";

                while ($row = mysqli_fetch_assoc($result_slider)) 
                {
                    $type = $row['tipo_usuario'];
                } 

                $queryUpdate = "UPDATE usuarios SET contrasena = '$contrasena1' WHERE correo = '$correo2'";
                mysqli_query($conection, $queryUpdate);
    
                $to = $correo2;
                $subject = 'Tu contraseña ha sido actualizada';
                $message = file_get_contents('template_claveRecuperada.php'); 
                $message = str_replace('{{password}}', $contrasena1, $message);

                $headers = "Organization: MrKados\r\n";
                $headers .= 'MIME-Version: 1.0'."\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
                $headers .= "X-Priority: 3\r\n";
                $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
                $headers .= "Reply-To:  MrKados <hola@mrkados.com>\r\n";
                $headers .= "Return-Path:  MrKados <hola@mrkados.com>\r\n";
                $headers .= "From: MrKados <hola@mrkados.com>\r\n";
    
                $mail_sent=mail($to, $subject, $message, $headers);
                header("Location: recuperacionExitosa.php?correo=$correo2&type=$type");
            }
        }
        else
        {
            header("Location: noexisteCorreo.php?error=1");
        }
}

//Structuracion de la pagina.
//Page::setTitle($title); //Se llama al metodo que setea el titulo
Page::header2($correo,$usuarioTipo); //Se llama al metodo que contiene el header de la pagina
Page::clavesForm($correo2, $error);
Page::footer($correo,$usuarioTipo); // Banner que contiene el pie de la pagina.
ob_end_flush();
?>