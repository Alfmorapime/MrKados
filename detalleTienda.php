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

//$user = $_GET['correo'];
$id_tienda = $_GET['id'];

require_once('Page.class.php');
$conection = include 'conection.php';
include 'email_solicitudColonia.php';

//Llamada a BD para traer la informacion sobre la tienda
$query_tienda = "SELECT * FROM tiendas WHERE id = '$id_tienda';";
$result_tienda = mysqli_query($conection,$query_tienda);

$date = new DateTime();  
$date->setTimezone(new DateTimeZone('America/Mexico_City'));
$now = date_format($date,"y/m/d H:i:s");


while ($row = mysqli_fetch_assoc($result_tienda)) {
    $logo = $row['logo'];
    $fachada = $row['fotoNegocio'];
    $nombreTienda = $row['nombreTienda'];
    $categoria = $row['giro'];
    $reputacion = $row['correo'];
    $description = $row['descripcion'];
    $encargadoNombre = $row['nombrePersonaSucursal'];
    $telefono = $row['telefono'];
    $email = $row['email'];
    $linkUber = $row['linkUber'];
    $linkRappi = $row['linkRappi'];
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
    $descripcionEnvio = utf8_encode($row['descripcionEnvio']);
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
    $catalogo = $row['catalogo'];
}

$queryEsta = "select * from estadisticas where id_tienda = '$id';";
$estadis = mysqli_query($conection,$queryEsta);
$sumVisitas = 0;
$sumContactos = 0;
if(mysqli_fetch_assoc($estadis) == 0)
{
    $sumVisitas = $sumVisitas + 1;
    $insert_estadistica = "insert into estadisticas (id_tienda, visitas, contactos) VALUES ('$id', '$sumVisitas', '$sumContactos')";
    mysqli_query($conection, $insert_estadistica);
}
else
{
    $queryEsta = "select * from estadisticas where id_tienda = '$id';";
    $estadis = mysqli_query($conection,$queryEsta);
    while($rowEsta = mysqli_fetch_assoc($estadis))
    {
        $idEstadistica = $rowEsta['id'];
        $visitasNumber = intval($rowEsta['visitas']);
        $sumVisitas = 1 + $visitasNumber;
        mysqli_query($conection,"UPDATE estadisticas SET visitas = $sumVisitas WHERE id = $idEstadistica");
    }
}


$query2 = "select * from usuarios where correo = '$user';";
$user2 = mysqli_query($conection,$query2);
$idContacto = 0;
while ($row2 = mysqli_fetch_assoc($user2)) 
{
    $idUser = $row2['id'];

    $query3 = "select * from contactos where id_usuario = '$idUser' AND id_testimonio = 0 AND id_tienda = '$id_tienda';";
    $contactos = mysqli_query($conection,$query3);

    while ($row3 = mysqli_fetch_assoc($contactos)) 
    {
        if($row3['id'] != null)
        {
            $idContacto = $row3['id'];
            break;
        }
        else{
            $idContacto = 0;
        }
    }
}
if(isset($_POST["comentarios"]))
{
    $rep_cont=0;
    $cont = 0;
    $query_usuario = "SELECT * FROM usuarios WHERE correo = '$user';";
    $result_usuario = mysqli_query($conection,$query_usuario);
    while ($row_usuario = mysqli_fetch_assoc($result_usuario)) {
        $id_usu1 = $row_usuario['id'];
    }

    $comentario = $_POST["comentarios"];
    $rep = $_POST["reputacion"];
    //$conection = mysqli_connect('localhost','root','','mrkadosc_db');
    $insert_query = "insert into testimonios (id_usuario, id_tienda, comentario, reputacion, fecha) VALUES ('$id_usu1', '$id_tienda', '$comentario', '$rep', '$now')";
    mysqli_query($conection, $insert_query);

    //$conection = mysqli_connect('localhost','root','','mrkadosc_db');
    $query_rep = "SELECT * FROM testimonios WHERE id_usuario = '$id' AND id_tienda = '$id_tienda';";
    $result_rep = mysqli_query($conection,$query_rep);
    while ($row2 = mysqli_fetch_assoc($result_rep)) {
     
        $rep_cont = $rep_cont + $row2['reputacion'];
    
        $cont++;
    }
    $detalle = " Te ha dejado su testimonio";

    $tiendaInfo2 = "select * from tiendas where id = '$id_tienda';";
    $tiendaInfoResult2 = mysqli_query($conection,$tiendaInfo2);
    while($rowTiendaInfo2 = mysqli_fetch_assoc($tiendaInfoResult2))
    {
        $tiendaCorreo2 = $rowTiendaInfo2['id_usuario'];

        $usuTiendaid2 = "select * from usuarios where correo = '$tiendaCorreo2';";
        $usuTiendaIdResult2 = mysqli_query($conection,$usuTiendaid2);
        while($rowUsuTiendaID2 = mysqli_fetch_assoc($usuTiendaIdResult2))
        {
            $usuarioTiendaID2 = $rowUsuTiendaID2['id'];
        }
    }

    $date = new DateTime();  
    $date->setTimezone(new DateTimeZone('America/Mexico_City'));
    $now = date_format($date,"y/m/d H:i:s");
    $chequeo = 0;

    $insert_query = "insert into notificaciones_tienda (id_usuario, id_tienda, id_user_tienda, nombre, chequeo, fecha) VALUES ('$id_usu1', '$id_tienda', '$usuarioTiendaID2', '$detalle', '$chequeo',  '$now')";
    mysqli_query($conection, $insert_query);

    mysqli_query($conection,"UPDATE contactos SET id_testimonio = 1 WHERE id = $idContacto");

    if($rep_cont != 0 && $cont != 0)
    {
        $totalRep = $rep_cont / $cont;

        mysqli_query($conection,"UPDATE tiendas SET correo = $totalRep WHERE id = $id_tienda");
        //header( 'Location: detalleTienda.php?correo=$user&id=$id_tienda' ) ;
        header("Location: detalleTienda.php?id=$id_tienda&correo=$user&type=$usuarioTipo");
        //echo $totalRep;
    }

}
else
{
 
}

if(isset($_POST["idTiendaContacto"]))
{
    $query_user = "select * from usuarios where correo = '$user';";
    $result_User = mysqli_query($conection,$query_user);
    $row_user = mysqli_fetch_assoc($result_User);
    $userId = $row_user['id'];
    $tiendaId = $_POST["idTiendaContacto"];
    $id_testimonio = 0;
    $date = new DateTime();  
    $date->setTimezone(new DateTimeZone('America/Mexico_City'));
    $now = date_format($date,"y/m/d H:i:s");

    $insert_query = "insert into contactos (id_tienda, id_usuario, fecha, id_testimonio) VALUES ('$tiendaId', '$userId', '$now', '$id_testimonio')";
    mysqli_query($conection, $insert_query);

    $queryEsta2 = "select * from estadisticas where id_tienda = '$id';";
    $estadis2 = mysqli_query($conection,$queryEsta2);
    while($rowEsta2 = mysqli_fetch_assoc($estadis2))
    {
        $idEstadistica2 = $rowEsta2['id'];
        $contactoNumber = intval($rowEsta2['contactos']);
        $sumContactos = 1 + $contactoNumber;
        mysqli_query($conection,"UPDATE estadisticas SET contactos = $sumContactos WHERE id = $idEstadistica2");
    }

    $usuarioTiendaID = 0;
    //calling tiendas information
    $tiendaInfo = "select * from tiendas where id = '$tiendaId';";
    $tiendaInfoResult = mysqli_query($conection,$tiendaInfo);
    while($rowTiendaInfo = mysqli_fetch_assoc($tiendaInfoResult))
    {
        $tiendaCorreo = $rowTiendaInfo['id_usuario'];

        $usuTiendaid = "select * from usuarios where correo = '$tiendaCorreo';";
        $usuTiendaIdResult = mysqli_query($conection,$usuTiendaid);
        while($rowUsuTiendaID = mysqli_fetch_assoc($usuTiendaIdResult))
        {
            $usuarioTiendaID = $rowUsuTiendaID['id'];
        }
    }


    $detalle=" contacto por Whatsaap a ";
    $chequeo = 0;
    $insert_query = "insert into notificaciones_tienda (id_usuario, id_tienda, id_user_tienda, nombre, chequeo, fecha) VALUES ('$userId', '$tiendaId', '$usuarioTiendaID', '$detalle', '$chequeo',  '$now')";
    mysqli_query($conection, $insert_query);

    //<a href="https://wa.me/<?php echo $whatsaap; " target="_blank">
    //<a href="https://wa.me/$whatsaap" target="_blank">
    header("Location: https://wa.me/$whatsaap?pop=yes");
}

if(isset($_POST["idTiendaContactoF"]))
{
    $query_user = "select * from usuarios where correo = '$user';";
    $result_User = mysqli_query($conection,$query_user);
    $row_user = mysqli_fetch_assoc($result_User);
    $userId = $row_user['id'];
    $tiendaId = $_POST["idTiendaContactoF"];
    $id_testimonio = 0;
    $date = new DateTime();  
    $date->setTimezone(new DateTimeZone('America/Mexico_City'));
    $now = date_format($date,"y/m/d H:i:s");

    $insert_query = "insert into contactos (id_tienda, id_usuario, fecha, id_testimonio) VALUES ('$tiendaId', '$userId', '$now', '$id_testimonio')";
    mysqli_query($conection, $insert_query);

    $queryEsta2 = "select * from estadisticas where id_tienda = '$id';";
    $estadis2 = mysqli_query($conection,$queryEsta2);
    while($rowEsta2 = mysqli_fetch_assoc($estadis2))
    {
        $idEstadistica2 = $rowEsta2['id'];
        $contactoNumber = intval($rowEsta2['contactos']);
        $sumContactos = 1 + $contactoNumber;
        mysqli_query($conection,"UPDATE estadisticas SET contactos = $sumContactos WHERE id = $idEstadistica2");
    }

    $usuarioTiendaID = 0;
    //calling tiendas information
    $tiendaInfo = "select * from tiendas where id = '$tiendaId';";
    $tiendaInfoResult = mysqli_query($conection,$tiendaInfo);
    while($rowTiendaInfo = mysqli_fetch_assoc($tiendaInfoResult))
    {
        $tiendaCorreo = $rowTiendaInfo['id_usuario'];

        $usuTiendaid = "select * from usuarios where correo = '$tiendaCorreo';";
        $usuTiendaIdResult = mysqli_query($conection,$usuTiendaid);
        while($rowUsuTiendaID = mysqli_fetch_assoc($usuTiendaIdResult))
        {
            $usuarioTiendaID = $rowUsuTiendaID['id'];
        }
    }


    $detalle=" contacto por Facebook a ";
    $chequeo = 0;
    $insert_query = "insert into notificaciones_tienda (id_usuario, id_tienda, id_user_tienda, nombre, chequeo, fecha) VALUES ('$userId', '$tiendaId', '$usuarioTiendaID', '$detalle', '$chequeo',  '$now')";
    mysqli_query($conection, $insert_query);

    //<a href="https://wa.me/<?php echo $facebook; " target="_blank">
    //<a href="https://wa.me/$whatsaap" target="_blank">
    header("Location: https://$facebook?pop=yes");
}

//Busco subcategorias
$imagesSubCats = "";
$pieces = explode(",", $etiquetas); 
for($i = 0; $i < sizeof($pieces); $i++)
{ 
    if($pieces[$i] != " ")
    {
        $subcat = $pieces[$i];
        $tiendaInfo = "select * from subcategoria where subcat = '$subcat';";
        $tiendaInfoResult = mysqli_query($conection,$tiendaInfo);
        while($rowTiendaInfo = mysqli_fetch_assoc($tiendaInfoResult))
        {
            if($imagesSubCats == "")
            {
                $imagesSubCats = $rowTiendaInfo["image"];
            }
            else
            {
                $imagesSubCats = $imagesSubCats.",".$rowTiendaInfo["image"];
            }
        }
    }
}

//Busco foto Categoria principal
$categoriaImg = "";
$sqlCategoriaFoto = "select * from categorias where nombre = '$categoria';";
$resultCategoriaFoto = mysqli_query($conection,$sqlCategoriaFoto);
while($rowCategoriaFoto = mysqli_fetch_assoc($resultCategoriaFoto))
{
    $categoriaImg = $rowCategoriaFoto['image'];
}

//Structuracion de la pagina.
Page::header2($user,$usuarioTipo); //Se llama al metodo que contiene el header de la pagina
Page::sliderDetalleTienda($fachada,$nombreTienda, $categoria, $reputacion, $user, $usuarioTipo, $idContacto);
Page::primaryInformation($logo, $description, $catalogo);
Page::testimonios($id_tienda);
Page::tiendaInformacionGeneral($encargadoNombre, $encargadoApellido, $direccion, $paginaWeb, $horarios, $tiempoEnvio, $factura, $correo, $social, $metodoPago, $tiposEntrega, $costoEnvio, $descripcionEnvio, $whatsaap, $facebook, $citas, $nombreTienda, $id, $user, $telefono, $email, $linkUber, $linkRappi);
Page::queTenemos($nombreTienda, $categoria, $categoriaImg, $id, $conection);
Page::galeria($image1, $image2, $image3, $image4, $image5);
Page::footer($user, $usuarioTipo); // Banner que contiene el pie de la pagina.

?>