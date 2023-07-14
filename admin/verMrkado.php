<?php
$conection = include '../conection.php';

/**
 * 
 * Se recibe el nombre del usuario
 * 
 */
if(isset($_GET["correo"]))
{
    $user = $_GET["correo"];
}
else
{
    $user = "";
}

/**
 * 
 * Se recibe el valor de Key. Este valor especifica cual modulo es el rerquerido
 * 
 */
if(isset($_GET["key"]))
{
    $key = $_GET["key"];
}
else
{
    $key = "";
}

/**
 * 
 * Se recibe el valor del registro que se quiere editar
 * 
 */
if(isset($_GET["ite"]))
{
    $idMrkado = $_GET["ite"];
}
else
{
    $idMrkado = "";
}

/*
*
* Se llama a la base de datos para traer la informacion de la tienda
*
*/
//Llamada a BD para traer la informacion sobre la tienda
$query_tienda = "SELECT * FROM tiendas WHERE id = '$idMrkado';";
$result_tienda = mysqli_query($conection,$query_tienda);

/*
*
* Se Assignan los valores de cada campo de la base de datos
*
*/
while ($row = mysqli_fetch_assoc($result_tienda)) {
    $logo = $row['logo'];
    $fachada = $row['fotoNegocio'];
    $nombreTienda = $row['nombreTienda'];
    $categoria = $row['giro'];
    $reputacion = $row['correo'];
    $description = $row['descripcion'];
    $encargadoNombre = $row['nombrePersonaSucursal'];
    $encargadoApellido = $row['apellidoPersonaSucursal'];
    $direccion = $row['direccion'];
    $paginaWeb = $row['paginaWeb'];
    $horarios = $row['horarios'];
    $tiempoEnvio = $row['tiempoEnvio'];
    $factura = $row['factura'];
    $correo = $row['id_usuario'];
    $social = $row['redSocial'];
    $metodoPago = $row['metodoPago'];
    $tiposEntrega = $row['tiposEntrega'];
    $costoEnvio = $row['costoEnvio'];
    $descripcionEnvio = $row['descripcionEnvio'];
    $image1 = $row['imagen1'];
    $image2 = $row['imagen2'];
    $image3 = $row['imagen3'];
    $image4 = $row['imagen4'];
    $image5 = $row['imagen5'];
    $whatsaap = $row['whatsaap'];
    $facebook = $row['linkFacebook'];
    $citas = $row['citas'];
    $id = $row['id'];
    $etiquetas = $row['etiquetas'];
    $fachada = $row['fotoNegocio'];
    $estado = $row['estado'];
    $colonia = $row['colonia'];
    $ciudad = $row['ciudad'];
    $catalogo = $row['catalogo'];
}

require_once('Page.class.php');

Page::header_menu_detail($user); //Se llama al metodo que contiene el header de la pagina
Page::primaryInformation($logo, $description, $nombreTienda, $catalogo);
Page:: tiendaInformacionGeneral($encargadoNombre, $encargadoApellido, $direccion, $paginaWeb,  $horarios, $tiempoEnvio, $factura, $correo, $social, $metodoPago, $tiposEntrega, $costoEnvio, $descripcionEnvio, $whatsaap,$facebook, $citas, $nombreTienda, $id, $user, $estado, $colonia, $ciudad);
Page::queTenemos($nombreTienda, $categoria, $etiquetas);
Page::mostrarFachada($fachada);
Page::galeria($image1, $image2, $image3, $image4, $image5);
?>