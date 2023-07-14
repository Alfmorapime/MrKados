<?php
require_once('header.php');

if(isset($_GET["user"]))
{
    $correo = $_GET["user"];
}
else
{
    $correo = "";
    header("Location: index.php");
}

if(isset($_GET["type"]))
{
    $usuarioTipo = $_GET["type"];
}
else
{
    $usuarioTipo = "";
}

if(isset($_GET["op"]))
{
    $module = $_GET["op"];
}
else
{
    $module = "";
}

if(isset($_GET["store"]))
{
    $store = $_GET["store"];
}
else
{
    $store = "";
}

$conection = include '../../../conection.php';

//Llamada a BD para traer la informacion sobre el user
$queryUsuarioP = "select * from usuarios where correo = '$correo';";
$userP = mysqli_query($conection,$queryUsuarioP);

while ($row = mysqli_fetch_assoc($userP)) {
    $name = $row['nombre'];
    $apellido = $row['apellidos'];
    $telefono = $row['telefono'];
    $contrasena = $row['contrasena'];
    $fecha = $row['fechaRegistro'];
    $idUser = $row['id'];
}

include 'config-cuenta.php';
include 'formulario-infoRequired.php';
include 'planes-infoRequired.php';
include 'registroTienda-infoRequired.php';
include 'registroTienda-infoRequired2.php';
include 'registroTienda-infoRequired3.php';
include 'editarTienda-infoRequired1.php';

if(isset($_POST["usuID"]))
{
    $usuarioID = $_POST['usuID'];
    $chequeo = 1;
    mysqli_query($conection,"UPDATE notificaciones_tienda SET chequeo = $chequeo WHERE id_user_tienda = $usuarioID");
    //header( 'Location: detalleTienda.php?correo=$user&id=$id_tienda' ) ;
    header("Location:  index.php?user=$correo&type=$usuarioTipo&op=config");
}

//ELIMINAR TIENDA
if(isset($_POST["idTE"]))
{
    $id = $_POST["idTE"];
    $queryDelete = "delete from tiendas where id = '$id';";
    $deleteExecution = mysqli_query($conection,$queryDelete);

    $queryDeleteEstadistica = "delete from estadisticas where id_tienda = '$id';";
    $deleteExecutionEst = mysqli_query($conection,$queryDeleteEstadistica);

    $queryDeleteContactos = "delete from contactos where id_tienda = '$id';";
    $deleteExecutionCont = mysqli_query($conection,$queryDeleteContactos);

    $queryDeleteTestimonios = "delete from testimonios where id_tienda = '$id';";
    $deleteExecutionTest = mysqli_query($conection,$queryDeleteTestimonios);

    $queryDeleteRelSubCategorias = "delete from rel_tienda_subcategoria where id_tienda = '$id';";
    $deleteExecutionRelSubcategorias = mysqli_query($conection,$queryDeleteRelSubCategorias);

    header("Location: index.php?user=$correo&type=$usuarioTipo&op=negocios");
}

//RECEIVE SUPPORT FORM DATA
if(isset($_POST["soporteNombre"]))
{
    $soportename = $_POST["soporteNombre"];
    $soporteCorreo = $_POST["soporteCorreo"];
    $soporteAsunto = $_POST["soporteAsunto"];
    $soporteMensaje = $_POST["soporteMensaje"];

    //call file that will send the email
    include 'email_soporte.php';
    header("Location: index.php?user=$correo&type=$usuarioTipo&op=soporteEnviado");
}

//RECEIVE DATA TO SEND EVAUATION
if(isset($_POST["idContactoEvaluar"]))
{
    $idContactoEvaluar = $_POST["idContactoEvaluar"];
    $idTiendaEvaluar = $_POST["idTienda"];
    $idUserEvaluar = $_POST["idUser"];
    $comentarioEvaluar = $_POST['comentarios'];
    $reputacionEvaluar = $_POST['reputacion'];

    $date = new DateTime();  
    $date->setTimezone(new DateTimeZone('America/Mexico_City'));
    $now = date_format($date,"y/m/d H:i:s");

    $rep_cont=0;
    $cont = 0;

    $insert_query = "insert into testimonios (id_usuario, id_tienda, comentario, reputacion, fecha) VALUES ('$idUserEvaluar', '$idTiendaEvaluar', '$comentarioEvaluar', '$reputacionEvaluar', '$now')";
    mysqli_query($conection, $insert_query);

    $query_rep = "SELECT * FROM testimonios WHERE id_usuario = '$idUserEvaluar' AND id_tienda = '$idTiendaEvaluar';";
    $result_rep = mysqli_query($conection,$query_rep);
    while ($row2 = mysqli_fetch_assoc($result_rep)) {
     
        $rep_cont = $rep_cont + $row2['reputacion'];
    
        $cont++;
    }
    $detalle = " Te han dejado un testimonio";

    $tiendaInfo2 = "select * from tiendas where id = '$idTiendaEvaluar';";
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

    $chequeo = 0;

    $insert_query = "insert into notificaciones_tienda (id_usuario, id_tienda, id_user_tienda, nombre, chequeo, fecha) VALUES ('$idUserEvaluar', '$idTiendaEvaluar', '$usuarioTiendaID2', '$detalle', '$chequeo',  '$now')";
    mysqli_query($conection, $insert_query);

    mysqli_query($conection,"UPDATE contactos SET id_testimonio = 1 WHERE id = $idContactoEvaluar");

    if($rep_cont != 0 && $cont != 0)
    {
        $totalRep = $rep_cont / $cont;

        mysqli_query($conection,"UPDATE tiendas SET correo = $totalRep WHERE id = $idTiendaEvaluar");
        //header( 'Location: detalleTienda.php?correo=$user&id=$id_tienda' ) ;
        header("Location: index.php?user=$correo&type=$usuarioTipo&op=welcome");
        //echo $totalRep;
    }
}

//EDIT MrKados
if(isset($_POST["id_edit"]))
{
    $id = $_POST["id_edit"];
    header("Location: index.php?user=$correo&id_Editar=$id&type=$usuarioTipo&op=editarTienda&status=");
}

Page::header($correo, $usuarioTipo, $name, $apellido, $idUser, $conection);

if($module == "welcome")
{
    Page::bienvenido($correo, $usuarioTipo);
}
else if($module == "config")
{
    Page::configuracionCuenta($name, $apellido, $telefono, $contrasena, $fecha, $correo, $usuarioTipo, $idUser);
}
else if($module == "evaluacion")
{
    Page::evaluacion($correo, $idUser, $conection, $name, $apellido, $telefono);
}
else if($module == "estadisticas")
{
    Page::estadisticas($correo, $conection, $usuarioTipo);
}
else if($module == "evaluacionT")
{
    Page::evaluacionT($store, $correo, $conection, $usuarioTipo);
}
else if($module == "negocios")
{
    Page::negocios($correo, $usuarioTipo, $conection);
}
else if($module == "misSuscripciones")
{
    Page::misSuscripciones($correo, $usuarioTipo, $conection, $idUser);
}
else if($module == "formulario")
{
    Page::formulario($nombre_tienda, $kt);
}
else if($module == "satisfactorio")
{
    Page::satisfactorio();
}
else if($module == "planes")
{
    Page::Planes($conection);
    Page::ventanasEmergentesPlanes($correo, $conection);
}
else if($module == "pagoSatisfactorio")
{
    Page::pagoSatisfactorio();
}
else if($module == "pagoPendiente")
{
    Page::pagoPendiente();
}
else if($module == "pagoNoSatisfactorio")
{
    Page::pagoNoSatisfactorio();
}
else if($module == "preguntasFrecuentes")
{
    Page::preguntasFrecuentesClientes();
    Page::preguntasFrecuentesMrkados();
}
else if($module == "registroTienda")
{
    Page::registroTienda($conection, $correo, $usuarioTipo);
}
else if($module == "registroTienda2")
{
    Page::registroTienda2($conection);
}
else if($module == "registroTienda3")
{
    Page::registroTienda3($conection);
}
else if($module == "editarTienda")
{
    Page::openBlock();
    Page::editarPrimerBloque($conection, $statusEdit, $nombreTiendaEdit, $logoEdit, $id_Editar, $descriptionEdit, $catalogoEdit);
    Page::editarSegundoBloque($conection, $id_Editar, $encargadoNombreEditar2, $encargadoApellidoEditar2, $codigoPostalEditar2, $direccionEditar2, $paginaWebEditar2, $ciudadEditar2, $estadoEditar2, $coloniaEditar2, $horariosEditar2, $tiempoEnvioEditar2, $facturaEditar2, $correo, $whatsaapEditar2, $facebookEditar2, $socialEditar2, $metodoPagoEditar2, $tiposEntregaEditar2, $costoEnvioEditar2, $descripcionEnvioEditar2, $emailEditar2);
    Page::editarTercerBloque($conection, $categoriaEditar3, $nombreTiendaEdit, $id_Editar);
    Page::editarCuartoBloque($conection, $fachada, $id_Editar, $image1, $image2, $image3, $image4, $image5);
    Page::closeBlock();
}
else if($module == "soporte")
{
    Page::soporte($correo);
}
else if($module == "soporteEnviado")
{
    Page::soporteEnviado();
}

Page::complement();
?>