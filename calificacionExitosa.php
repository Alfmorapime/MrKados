<?php
ob_start();
$usuarioTipo = "";
$user = "";

include 'email_solicitudColonia.php';
include 'calificaProcess.php';

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
    $type = $_GET["type"];
}
else
{
    $type = "";
}

require_once('Page.class.php');

//Structuracion de la pagina.
//Page::setTitle($title); //Se llama al metodo que setea el titulo
Page::header2($user,$type); //Se llama al metodo que contiene el header de la pagina
Page::calificacionExitosa($user, $type);
Page::footer($user,$type); // Banner que contiene el pie de la pagina.
ob_end_flush();
?>