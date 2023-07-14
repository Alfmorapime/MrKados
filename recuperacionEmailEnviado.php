<?php
ob_start();
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

require_once('Page.class.php');

//Structuracion de la pagina.
//Page::setTitle($title); //Se llama al metodo que setea el titulo
Page::header2($user,$usuarioTipo); //Se llama al metodo que contiene el header de la pagina
Page::recuperarMensajeEnviado($correo);
Page::footer($user,$usuarioTipo); // Banner que contiene el pie de la pagina.
ob_end_flush();
?>