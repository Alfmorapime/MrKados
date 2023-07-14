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
require_once('inc/config.inc.php');
require_once("inc/Entities/sliderRegistroTienda.class.php");
require_once('Page.class.php');
require_once('inc/Utilities/SliderRegistroTiendaDAO.class.php');
require_once('inc/Utilities/RestClient.class.php');
$conection = include 'conection.php';
include 'email_solicitudColonia.php';

$correo = $_GET["correo"]; //Se toma el valor del correo del cliente luego de registrarse

//Llamada a BD para traer la informacion sobre los Slides de banners en registro tienda
$query_slider = "SELECT * FROM sliderregistrotienda";
$result_slider = mysqli_query($conection,$query_slider);
$slides = array();
while ($row = mysqli_fetch_assoc($result_slider)) {
    $newSlider = new sliderRegistroTiendaClass();
    $newSlider->setID($row['id']);
    $newSlider->setImage($row['image']);
    $newSlider->setText1($row['text1']);
    $newSlider->setText2($row['text2']);

    $slides[] =  $newSlider;
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    //Assemble tiendas

   
}    

//---- FIN llamada a la BD para traer SLider pricipal --------------------------



//Structuracion de la pagina.
//Page::setTitle($title); //Se llama al metodo que setea el titulo
Page::header(); //Se llama al metodo que contiene el header de la pagina
Page::loginRegistradoTienda($correo); //Se llama al metodo que contiene el cuaerpo de la pagina
Page::footer($user, $usuarioTipo); // Banner que contiene el pie de la pagina.

?>