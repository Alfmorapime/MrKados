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

if(isset($_GET["fcat"]))
{
    $filtroCat = $_GET["fcat"];
}

if(isset($_GET["fen"]))
{
    $filtroEnv = $_GET["fen"];
}

if(isset($_GET["fap"]))
{
    $filtroPag = $_GET["fap"];
}


if(isset($_GET["orden"]))
{
    $orden = $_GET["orden"];
}
else
{
    $orden = "";
}



$estado = $_GET["estado"];
$ciudad = $_GET["ciudad"];
$colonia = $_GET["colonia"];

require_once('Page.class.php');
$conection = include 'conection.php';
include 'email_solicitudColonia.php';

$query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND metodoPago LIKE '%$filtroPag%'; ";
$result_tiendas = mysqli_query($conection,$query_tiendas);
$numberOfTIendas = 0;

if(mysqli_fetch_assoc($result_tiendas) == 0)
{
    $numberOfTIendas = 0;
}
else
{
    $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND metodoPago LIKE '%$filtroPag%'; ";
    $result_tiendas = mysqli_query($conection,$query_tiendas);
    while ($row = mysqli_fetch_assoc($result_tiendas)) 
    {
        $numberOfTIendas = $numberOfTIendas + 1;
    }
}

if(isset($_POST["filtroCategoria"]))
{
    $filtroCat = $_POST["filtroCategoria"];
    header("Location: tiendasBusqueda-fc.php?correo=$user&type=$usuarioTipo&cat=$subCat&fcat=$filtroCat&estado=$estado&colonia=$colonia&ciudad=$ciudad");
}

if(isset($_POST["filtroEnv"]))
{
    $filtroEnv = $_POST["filtroEnv"];
    header("Location: tiendasBusqueda-fen.php?correo=$user&type=$usuarioTipo&cat=$subCat&fen=$filtroEnv&estado=$estado&colonia=$colonia&ciudad=$ciudad");
}

if(isset($_POST["filtroPago"]))
{
    $filtroPago = $_POST["filtroPago"];
    header("Location: tiendasBusqueda-fpago.php?correo=$user&type=$usuarioTipo&cat=$subCat&fap=$filtroPago&estado=$estado&colonia=$colonia&ciudad=$ciudad");
}

//---- FIN llamada a la BD para traer SLider pricipal --------------------------

//Structuracion de la pagina.
//Page::setTitle($title); //Se llama al metodo que setea el titulo
Page::header($user,$usuarioTipo); //Se llama al metodo que contiene el header de la pagina
Page::contador_resultado($numberOfTIendas); // Banner que contiene los 3 pasos a seguir
Page::topMenu_fpago($user, $usuarioTipo, $estado, $ciudad, $colonia, $filtroPag);
Page::negocios_result_fpago($estado, $colonia, $ciudad, $conection, $user, $usuarioTipo, $filtroPag, $orden);
Page::tiendas_nuevas_banner(); // Banner que contiene las ultimas tienditas
if ($user == "")
{
    Page::registrate_banner(); // Banner con los tipos de registro
}

Page::footer($user, $usuarioTipo); // Banner que contiene el pie de la pagina.

?>