<?php
if(isset($_GET["correo"]))
{
    $user = $_GET["correo"];
}
else
{
    $user = "";
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
include 'email_solicitudColonia.php';

$error = $_GET['error'];

// se toma la hora del sistema
$date = new DateTime();  
$date->setTimezone(new DateTimeZone('America/Mexico_City'));
$now = date_format($date,"d/m/y H:i:s");


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    
    if($_POST["contrasena2"] == $_POST["contrasena"])
    {
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellido"];
        $cumpleanos = " ";
        $telefono = $_POST["telefono"];
        $correo = $_POST["correo"];
        $contrasena = $_POST["contrasena"];
        $fecha = $now;
        $tipo_usuario = 1;

        $query = "select * from usuarios where correo = '$correo';";
        $result_slider = mysqli_query($conection,$query);
        $row = mysqli_fetch_assoc($result_slider);

        if($row == 0)
        {
            $insert_query = "insert into usuarios (nombre, apellidos, cumpleanos, telefono, correo, contrasena, fechaRegistro, tipo_usuario, activo) VALUES ('$nombre', '$apellidos', '$cumpleanos', '$telefono', '$correo', '$contrasena', '$fecha', '$tipo_usuario', '0')";
            mysqli_query($conection, $insert_query);
            include 'email_registroMrkado.php';
            include 'email_registroMrkadoActivacion.php';
            include 'registerEmailMrkado.php';
            header("Location: registroTiendaSatisfactorio.php?user=");
           // header("Location: src/html/general/index.php?user=$correo");
        }
        else
        {
            header("Location: registroUsuariosMerkados.php?error=1");
        }
    }
    else
    {
        header("Location: registroUsuariosMerkados.php?error=2");
    }
}
//Page::setTitle($title); //Se llama al metodo que setea el titulo
Page::header2($user, $usuarioTipo); //Se llama al metodo que contiene el header de la pagina
Page::sliderRegistroUsuario($conection); //Metodo que contiene Banner slider 
Page::formularioRegistroUsuarioMerkados($error); //Metodo que contiene seccion con formulario de registro de usuario
Page::footer($user,$usuarioTipo); // Banner que contiene el pie de la pagina.

?>