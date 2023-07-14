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

if(isset($_GET['error']))
{
    $error = $_GET['error'];
}
else
{
    $error = "";
}

require_once('Page.class.php');
include 'email_solicitudColonia.php';

$conection = include 'conection.php';

$date = new DateTime();  
$date->setTimezone(new DateTimeZone('America/Mexico_City'));
$now = date_format($date,"d/m/y H:i:s");


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
        $correo = $_POST["email"]; 
        $contrasena = $_POST["contrasena"];

        $query = "select * from usuarios where correo = '$correo';";
        $result_slider = mysqli_query($conection,$query);
        $row = mysqli_fetch_assoc($result_slider);

        if($row != 0)
        {
            $correoUsuario = $row['correo'];
            $emailUsuario = $row['contrasena'];
            $usuario = $row['tipo_usuario'];
            $activo = $row['activo'];

            if($activo == 0)
            {
                header("Location: inicioSession.php?error=3");
            }
            else
            {
                if($correoUsuario == $correo && $emailUsuario == $contrasena)
                {
                        //header("Location: src/html/general/index.php?user=$correo");
                        header("Location: index2-2.php?correo=$correo&type=$usuario");
                }
                else
                {
                    header("Location: inicioSession.php?error=2");
                }
            }
        }
        else
        {
            header("Location: inicioSession.php?error=1");
        }
}

//Structuracion de la pagina.
//Page::setTitle($title); //Se llama al metodo que setea el titulo
Page::header($user,$usuarioTipo); //Se llama al metodo que contiene el header de la pagina
Page::inicioSession2($error, $user, $usuarioTipo);
Page::footer($user,$usuarioTipo); // Banner que contiene el pie de la pagina.

?>