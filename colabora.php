<?php
require_once('Page.class.php');
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

$conection = include 'conection.php';
include 'email_colabora.php';
include 'calificaProcess.php';

//Structuracion de la pagina.
//Page::setTitle($title); //Se llama al metodo que setea el titulo
Page::header2($user,$usuarioTipo); //Se llama al metodo que contiene el header de la pagina
Page::sliderColabora();
Page::contactanos_banner_colabora($user, $usuarioTipo);
Page::footer($user,$usuarioTipo); // Banner que contiene el pie de la pagina.

?>