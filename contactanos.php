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

$conection = include 'conection.php';
include 'email_solicitudColonia.php';
include 'email_contactanos.php';
include 'calificaProcess.php';

$numberOfTIendasProductos = 0;
$numberOfTIendasServicios = 0;
$numberOfTIendasFundaciones = 0;

$query_cat = "SELECT DISTINCT id_tienda FROM rel_tienda_subcategoria where tipo_cat = 'Productos'";
$result_subcat = mysqli_query($conection,$query_cat);
while ($row = mysqli_fetch_assoc($result_subcat)) 
{
    $numberOfTIendasProductos = $numberOfTIendasProductos + 1;
}

$query_cat = "SELECT DISTINCT id_tienda FROM rel_tienda_subcategoria where tipo_cat = 'Servicios'";
$result_subcat = mysqli_query($conection,$query_cat);
while ($row = mysqli_fetch_assoc($result_subcat)) 
{
    $numberOfTIendasServicios = $numberOfTIendasServicios + 1;
}

$query_cat = "SELECT DISTINCT id_tienda FROM rel_tienda_subcategoria where tipo_cat = 'Fundaciones'";
$result_subcat = mysqli_query($conection,$query_cat);
while ($row = mysqli_fetch_assoc($result_subcat)) 
{
    $numberOfTIendasFundaciones = $numberOfTIendasFundaciones + 1;
}


//Structuracion de la pagina.
Page::header2($user,$usuarioTipo); //Se llama al metodo que contiene el header de la pagina
Page::sliderDetalleTienda_como_funciona();
Page::contactanos_banner($user, $usuarioTipo);
//Page::banner3_como_funciona($numberOfTIendasProductos, $numberOfTIendasServicios, $numberOfTIendasFundaciones);
Page::ultimoBanner_contacto();
Page::footer($user,$usuarioTipo); // Banner que contiene el pie de la pagina.

?>