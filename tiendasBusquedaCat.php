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

if(isset($_GET["cat"]))
{
    $subCat = $_GET["cat"];
}
else
{
    $subCat = "";
}


//$estado = $_GET["estado"];
//$ciudad = $_GET["ciudad"];
//$colonia = $_GET["colonia"];

require_once('Page.class.php');
$conection = include 'conection.php';
include 'email_solicitudColonia.php';

$query_tiendas = "SELECT * FROM tiendas WHERE etiquetas LIKE '%$subCat%';";
$result_tiendas = mysqli_query($conection,$query_tiendas);
$numberOfTIendas = 0;

if(mysqli_fetch_assoc($result_tiendas) == 0)
{
    $numberOfTIendas = 0;
}
else
{
    $query_tiendas = "SELECT * FROM tiendas WHERE etiquetas LIKE '%$subCat%';";
    $result_tiendas = mysqli_query($conection,$query_tiendas);
    while ($row = mysqli_fetch_assoc($result_tiendas)) 
    {
        $numberOfTIendas = $numberOfTIendas + 1;
    }
}

//---- FIN llamada a la BD para traer SLider pricipal --------------------------

//Structuracion de la pagina.
//Page::setTitle($title); //Se llama al metodo que setea el titulo
Page::header($user,$usuarioTipo); //Se llama al metodo que contiene el header de la pagina
Page::contador_resultado_cat($numberOfTIendas); // Banner que contiene los 3 pasos a seguir
Page::negocios_result_cat($subCat, $conection, $user, $usuarioTipo);
Page::tiendas_nuevas_banner(); // Banner que contiene las ultimas tienditas
if ($user == "")
{
    Page::registrate_banner(); // Banner con los tipos de registro
}

Page::footer($user, $usuarioTipo); // Banner que contiene el pie de la pagina.

?>