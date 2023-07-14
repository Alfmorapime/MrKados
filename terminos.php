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
include 'email_solicitudColonia.php';
include 'calificaProcess.php';

// Final ----------------------------------------------------------------------
//Structuracion de la pagina.
//Page::setTitle($title); //Se llama al metodo que setea el titulo
Page::header($user,$usuarioTipo); //Se llama al metodo que contiene el header de la pagina
Page::terminos();
Page::footer($user,$usuarioTipo); // Banner que contiene el pie de la pagina.

?>