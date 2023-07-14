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

if(isset($_GET["id"]))
{
    $kindOfCat = $_GET["id"];
}
else
{
    $kindOfCat = "";
}

require_once('Page.class.php');

$conection = include 'conection.php';
include 'email_solicitudColonia.php';
include 'calificaProcess.php';

//Structuracion de la pagina.
//Page::setTitle($title); //Se llama al metodo que setea el titulo
Page::header2($user, $usuarioTipo); //Se llama al metodo que contiene el header de la pagina
//Page::topMenuKind($user, $usuarioTipo, $kindOfCat);
if($kindOfCat == "Fundaciones")
{
    Page::slide_banner_fundaciones(); // Banner que contiene los 3 pasos a seguir
    //Page::negocios_result_Fundaciones_leftMenu($conection, $user, $usuarioTipo, $orden, $kindOfCat, $filtroNameReceived);
    Page::negocios_result_kind_servicios($conection, $user, $usuarioTipo, $orden, $kindOfCat);
}
else if($kindOfCat == "Servicios")
{
    Page::slide_banner_fundaciones_servicios(); // Banner que contiene los 3 pasos a seguir
    Page::servicios_categories_list($conection, $user, $usuarioTipo);
    Page::negocios_result_kind_servicios($conection, $user, $usuarioTipo, $orden, $kindOfCat);
    Page::busqueda_sector_index($conection);
}
else if($kindOfCat == "Productos"){
    Page::slide_banner_productos_(); // Banner que contiene los 3 pasos a seguir
    Page::productos_categories_list($conection, $user, $usuarioTipo);
    Page::negocios_result_kind_servicios($conection, $user, $usuarioTipo, $orden, $kindOfCat);
    Page::busqueda_sector_index($conection);
}

//Page::tiendas_nuevas_banner(); // Banner que contiene las ultimas tienditas
if ($user == "")
{
    Page::registrate_banner(); // Banner con los tipos de registro
}

Page::footer($user, $usuarioTipo); // Banner que contiene el pie de la pagina.

?>