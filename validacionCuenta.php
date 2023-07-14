<?php
ob_start();
$conection = include 'conection.php';
$usuarioTipo = "";
$user = "";

if(isset($_GET["correo"]))
{
    $correo = $_GET["correo"];
}
else
{
    $correo = "";
}

if(isset($_GET["type"]))
{
    $type = $_GET["type"];
}
else
{
    $type = "";
}

$queryUpdate = "UPDATE usuarios SET activo = '1' WHERE correo = '$correo'";
mysqli_query($conection, $queryUpdate);

require_once('Page.class.php');

//Structuracion de la pagina.
//Page::setTitle($title); //Se llama al metodo que setea el titulo
Page::header2($user,$usuarioTipo); //Se llama al metodo que contiene el header de la pagina
Page::validacionCuenta($correo, $type);
Page::footer($user,$usuarioTipo); // Banner que contiene el pie de la pagina.
ob_end_flush();
?>