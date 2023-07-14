<?php
ob_start();
if(isset($_GET['error']))
{
    $error = $_GET['error'];
}
else
{
    $error = "";
}

require_once('Page.class.php');
$conection = include '../conection.php';

$date = new DateTime();  
$date->setTimezone(new DateTimeZone('America/Mexico_City'));
$now = date_format($date,"d/m/y H:i:s");


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
        $correo = $_POST["email"]; 
        $contrasena = $_POST["contrasena"];

        $query = "select * from usuarios where correo = '$correo';";
        $result_slider = mysqli_query($conection,$query);
       // $row = mysqli_fetch_assoc($result_slider);

        while ($row = mysqli_fetch_assoc($result_slider)) 
        {
            $correoUsuario = $row['correo'];
            $emailUsuario = $row['contrasena'];
            $usuario = $row['tipo_usuario'];

            if($correoUsuario == $correo && $emailUsuario == $contrasena && $usuario == 3)
            {
                echo "AQUIIIIIIIIIIII";
                    //header("Location: src/html/general/index.php?user=$correo");
                    header("Location: menu.php?correo=$correo");
            }
            else
            {
                header("Location: index.php?error=2");
            }
        }

      /*  if($row != 0)
        {
            $correoUsuario = $row['correo'];
            $emailUsuario = $row['contrasena'];
            $usuario = $row['tipo_usuario'];

            if($correoUsuario == $correo && $emailUsuario == $contrasena && $usuario == 3)
            {
                echo "AQUIIIIIIIIIIII";
                    //header("Location: src/html/general/index.php?user=$correo");
                    header("Location: menu.php?correo=$correo");
            }
            else
            {
                header("Location: index.php?error=2");
            }
        }
        else
        {
            header("Location: index.php?error=2");
        } */
}

//Structuracion de la pagina.
//Page::setTitle($title); //Se llama al metodo que setea el titulo
Page::header(); //Se llama al metodo que contiene el header de la pagina
Page::inicioSession($error);
ob_end_flush();
?>