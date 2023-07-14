<?php

$conection = include 'conection.php';

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

if(isset($_GET["error"]))
{
    $error = $_GET["error"];
}
else
{
    $error = "";
}

require_once('Page.class.php');

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
        $dia = $_POST["dia"];
        $mes = $_POST["mes"];
        $ano = $_POST["ano"];
        $cumpleanos = $dia."-".$mes."-".$ano;
        $telefono = $_POST["telefono"];
        $correo = $_POST["correo"];
        $contrasena = $_POST["contrasena"];
        $fecha = $now;
        $tipo_usuario = 1;
        $test = "alfmorapime@gmail.com";

        $query = "select * from usuarios where correo = '$correo';";
        $result_slider = mysqli_query($conection,$query);
        $row = mysqli_fetch_assoc($result_slider);
        //var_dump($correo);

        if($row == 0)
        {
            $insert_query = "insert into usuarios (nombre, apellidos, cumpleanos, telefono, correo, contrasena, fechaRegistro, tipo_usuario, activo) VALUES ('$nombre', '$apellidos', '$cumpleanos', '$telefono', '$correo', '$contrasena', '$fecha', '$tipo_usuario', '0')";
            mysqli_query($conection, $insert_query);
            include 'email_registroMrkliente.php';
            //include 'email_registroMrklienteActivacion.php';
            include 'registerEmailMrkliente.php';
            //var_dump("JUSTO ANTES DE LA REDIRECCION");
            header("Location: registroUsuarioSatisfactorio.php?user=$correo&type=$tipo_usuario");
            //header("Location: src/html/general/index.php?user=$correo");
        }
        else
        {
            header("Location: registroUsuarios.php?error=1");
        }
    }
    else
    {
        header("Location: registroUsuarios.php?error=2");
    }
}

Page::header2($user, $usuarioTipo); //Se llama al metodo que contiene el header de la pagina
Page::sliderRegistroUsuario2($conection); //Metodo que contiene Banner slider 
Page::formularioRegistroUsuario($error); //Metodo que contiene seccion con formulario de registro de usuario
Page::footer($user,$usuarioTipo); // Banner que contiene el pie de la pagina.

?>