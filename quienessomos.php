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
include 'calificaProcess.php';

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
Page::Banner1Somos(); //Banner que contiene el bloque del slide principal
Page::busqueda_sector_index($conection); // Banner que contiene el bloque buscar por ciudad, colonia, etc
Page::Banner2Somos(); //Banner que contiene el bloque del slide principal
Page::Banner3Somos(); //Banner que contiene el bloque del slide principal
Page::Banner4Somos(); //Banner que contiene el bloque del slide principal
Page::valores();
Page::resena();
Page::ayudanos();
Page::footer($user,$usuarioTipo); // Banner que contiene el pie de la pagina.

?>