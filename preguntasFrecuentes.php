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

include 'email_solicitudColonia.php';
include 'calificaProcess.php';

//Structuracion de la pagina.
//Page::setTitle($title); //Se llama al metodo que setea el titulo
Page::header2($user,$usuarioTipo); //Se llama al metodo que contiene el header de la pagina
Page::sliderDetalleTienda_PreguntasFrecuentes();
Page::preguntasClientes();
Page::preguntasMercados();
Page::noResuelve($user,$usuarioTipo);
Page::footer($user,$usuarioTipo); // Banner que contiene el pie de la pagina.

?>