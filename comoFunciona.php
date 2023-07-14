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

/**
 * Se llama a whatsaapo
 * 
 */
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

    $queryEsta2 = "select * from estadisticas where id_tienda = '$tiendaId';";
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

/**
 * Se llama a Facebook
 * 
 */
if(isset($_POST["idTiendaContactoFacebook"]))
{
    $query_user = "select * from usuarios where correo = '$user';";
    $result_User = mysqli_query($conection,$query_user);
    $row_user = mysqli_fetch_assoc($result_User);
    $userId = $row_user['id'];
    $tiendaId = $_POST["idTiendaContactoFacebook"];
    $id_testimonio = 0;
    $date = new DateTime();  
    $date->setTimezone(new DateTimeZone('America/Mexico_City'));
    $now = date_format($date,"y/m/d H:i:s");

    $insert_query = "insert into contactos (id_tienda, id_usuario, fecha, id_testimonio) VALUES ('$tiendaId', '$userId', '$now', '$id_testimonio')";
    mysqli_query($conection, $insert_query);

    $queryEsta2 = "select * from estadisticas where id_tienda = '$tiendaId';";
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

    header("Location: https://facebook.com");
}

// Final ----------------------------------------------------------------------
//Structuracion de la pagina.
//Page::setTitle($title); //Se llama al metodo que setea el titulo
Page::header($user,$usuarioTipo); //Se llama al metodo que contiene el header de la pagina
Page::comoFuncionaBanner1(); // Banner 1 de como funciona
Page::comoFuncionaBanner2(); // Banner 2 de como funciona
Page::comoFuncionaBanner3(); // Banner 3 de como funciona
Page::comoFuncionaBanner4(); // Banner 4 de como funciona
Page::comoFuncionaBanner5(); // Banner 5 de como funciona
Page::comoFuncionaBanner6(); // Banner 6 de como funciona
Page::busqueda_sector_index_como_funciona($conection);
Page::footer($user,$usuarioTipo); // Banner que contiene el pie de la pagina.

?>