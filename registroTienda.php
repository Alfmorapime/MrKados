<?php

if(isset($_GET["correo"]))
{
    $user = $_GET["correo"];
}
else
{
    $user = "";
}

require_once('Page.class.php');

$conection = include 'conection.php';
include 'email_solicitudColonia.php';

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
  
//---- FIN llamada a la BD  --------------------------




//Structuracion de la pagina.
//Page::setTitle($title); //Se llama al metodo que setea el titulo
Page::header(); //Se llama al metodo que contiene el header de la pagina
Page::sliderRegistroTienda($slides); //Metodo que contiene Banner slider 
Page::formularioNegocio(); //Metodo que contiene seccion con formulario de registro de negocio o tienda
Page::footer($user,$usuarioTipo); // Banner que contiene el pie de la pagina.

?>