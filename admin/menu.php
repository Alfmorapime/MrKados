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
$conection = include '../conection.php';

Page::header_menu($user); //Se llama al metodo que contiene el header de la pagina
Page::modulos($user);

?>