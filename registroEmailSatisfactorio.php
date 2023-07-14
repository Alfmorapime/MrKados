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

//Structuracion de la pagina.
//Page::setTitle($title); //Se llama al metodo que setea el titulo
Page::header($user,$usuarioTipo); //Se llama al metodo que contiene el header de la pagina
Page::emailRegistroSatisfactorio($error, $user, $usuarioTipo);
Page::footer($user,$usuarioTipo); // Banner que contiene el pie de la pagina.

?>