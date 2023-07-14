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
include 'email_solicitudColonia.php';
include 'email_solicitudCotizacion.php';

if(isset($_POST["estado"]) &&  isset($_POST["colonia"]) && isset($_POST["ciudad"]))
{
    $estado = $_POST["estado"];
    $ciudad = $_POST["ciudad"];
    $colonia = $_POST["colonia"];
    header("Location: tiendasBusqueda.php?correo=$user&type=$usuarioTipo&estado=$estado&ciudad=$ciudad&colonia=$colonia");
}
//---- FIN llamada a la BD para traer SLider pricipal --------------------------

//------------------- modulo buscar by Sub categorias -------------------------

if(isset($_POST['BuscarSubCat']))
{
    $subCat = $_POST['BuscarSubCat'];
    header("Location: tiendasBusquedaCat.php?correo=$user&type=$usuarioTipo&cat=$subCat");
}

// Final ----------------------------------------------------------------------
//Structuracion de la pagina.
//Page::setTitle($title); //Se llama al metodo que setea el titulo
Page::header($user,$usuarioTipo); //Se llama al metodo que contiene el header de la pagina
Page::extraMrkadosBanner1(); //Banner que contiene el bloque del slide principal
Page::mejorar();
Page::footer($user,$usuarioTipo); // Banner que contiene el pie de la pagina.

?>