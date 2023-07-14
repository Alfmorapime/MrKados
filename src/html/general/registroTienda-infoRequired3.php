<?php

if(isset($_GET["id"]))
{
    $id_tienda = $_GET["id"];
}
else
{
    $id_tienda = "";
}

// se toma la hora del sistema
$date = new DateTime();  
$date->setTimezone(new DateTimeZone('America/Mexico_City'));
$now = date_format($date,"d/m/y H:i:s");
$now2 = date_format($date,"dmyHis");

//Se preparan todos los datos para ingresr a BD 
if (isset($_POST["nombreEncargado"]))
{

    $nombrePersonaSucursal = $_POST["nombreEncargado"];
    $apellidoPersonaSucursal = $_POST["apellidoEncargado"];
    $direccion = $_POST["direccionNegocio"];
    $codigoPostal = $_POST["codigopostal"];
    $estado = $_POST["estado"];
    $ciudad = $_POST["ciudad"];
    $colonia = $_POST["colonia"];
    //Validacion del lunes
    if(!isset($_POST["cerradoLunes"]))
    {
        $lunes = $_POST["lunesH"].",".$_POST["lunesC"];
    }
    else{
        //$lunes = $_POST["cerradoLunes"];
        $lunes = " , ";
    }
    
    //Validacion del martes
    if(!isset($_POST["cerradoMartes"]))
    {
        $martes = $_POST["martesH"].",".$_POST["martesC"];
    }
    else{
        //$lunes = $_POST["cerradoLunes"];
        $martes = " , ";
    }

    //Validacion del miercoles
    if(!isset($_POST["cerradoMiercoles"]))
    {
        $miercoles = $_POST["miercolesH"].",".$_POST["miercolesC"];
    }
    else{
        //$lunes = $_POST["cerradoLunes"];
        $miercoles = " , ";
    }

    //Validacion del jueves
    if(!isset($_POST["cerradoJueves"]))
    {
        $jueves = $_POST["juevesH"].",".$_POST["juevesC"];
    }
    else{
        //$lunes = $_POST["cerradoLunes"];
        $jueves = " , ";
    }

    //Validacion del viernes
    if(!isset($_POST["cerradoViernes"]))
    {
        $viernes = $_POST["viernesH"].",".$_POST["viernesC"];
    }
    else{
        //$lunes = $_POST["cerradoLunes"];
        $viernes = " , ";
    }

    //Validacion del sabado
    if(!isset($_POST["cerradoSabado"]))
    {
        $sabado = $_POST["sabadoH"].",".$_POST["sabadoC"];
    }
    else{
        //$lunes = $_POST["cerradoLunes"];
        $sabado = " , ";
    }

    //Validacion del domingo
    if(!isset($_POST["cerradoDomingo"]))
    {
        $domingo = $_POST["domingoH"].",".$_POST["domingoC"];
    }
    else{
        //$lunes = $_POST["cerradoLunes"];
        $domingo = " , ";
    }

    $horarios = $lunes.",".$martes.",".$miercoles.",".$jueves.",".$viernes.","."$sabado".",".$domingo;


    if(isset($_POST["efectivo"]))
    {
        $efectivo = "Efectivo"; 
    }
    else
    {
        $efectivo = "";
    }

    if(isset($_POST["tarjeta"]))
    {
        $tarjeta = "Tarjeta"; 
    }
    else
    {
        $tarjeta="";
    }

    if(isset($_POST["tiendadpal"]))
    {
        $tienda = "Tienda Departamental"; 
    }
    else
    {
        $tienda = "";
    }

    if(isset($_POST["transfer"]))
    {
        $transfer = "Transferencia"; 
    }
    else
    {
        $transfer = "";
    }

    if(isset($_POST["deposito"]))
    {
        $deposito = "Deposito"; 
    }
    else
    {
        $deposito = "";
    }
    
    $metodoPago = $efectivo.",".$tarjeta.",".$tienda.",".$transfer.",".$deposito;

    if(isset($_POST["pickup"]))
    {
        $pickup = "Recogerlo en el establecimiento";
    }
    else
    {
        $pickup = "";
    }

    if(isset($_POST["rappi"]))
    {
        $rappi = "Rappi";

        if(isset($_POST["linkRappi"]))
        {
            $linkRappi = $_POST["linkRappi"];
        }
        else
        {
            $linkRappi = "";
        }
    }
    else
    {
        $rappi = "";
    }

    if(isset($_POST["ubber"]))
    {
        $ubber = "ubber";

        if(isset($_POST["linkUber"]))
        {
            $linkUber = $_POST["linkUber"];
        }
        else
        {
            $linkUber = "";
        }
    }
    else
    {
        $ubber = "";
    }

    if(isset($_POST["envio"]))
    {
        $envio = "Envio directo del establecimiento";
    }
    else
    {
        $envio = "";
    }

    if(isset($_POST["mensajeria"]))
    {
        $mensajeria = "Mensajeria";
    }
    else
    {
        $mensajeria = "";
    }

    $tiposEntrega = $pickup.",".$rappi.",".$ubber.",".$envio.",".$mensajeria;

    if(isset($_POST["tieneEnvioNO"]))
    {
        $costoEnvio = "";
    }
    else if(isset($_POST["tieneEnvioSI"]))
    {
        $costoEnvio = $_POST["precio"];
    }
    else
    {
        $costoEnvio = "";
    }

    if(isset($_POST["descriptionENvio"]))
    {
        $descripcionEnvio = $_POST["descriptionENvio"];
    }
    else
    {
        $descripcionEnvio = "";    
    }

    if(isset($_POST["tiempoEnvio"]))
    {
        $tiempoEnvio = $_POST["tiempoEnvio"];
    }
    else
    {
        $tiempoEnvio = "";    
    }
   
    $factura = $_POST["factura"];
    //$citas = $_POST["cita"];


    $fachada = $_FILES['fachada']['name'];
    $fachadaCompleto = $now2."".$fachada;
    $directorioFachada ="../../../images/fachadas";

    $guardadoFachada = $_FILES['fachada']['tmp_name'];
 
    if(file_exists($directorioFachada))
    {
        move_uploaded_file($guardadoFachada, $directorioFachada."/".$fachadaCompleto);
    }


    if($_FILES["galeria1"]['name'])
    {
        $image1 = $_FILES["galeria1"]['name'];
        $galeria = $now2."".$image1;
        $directorio ="../../../images/imagenMrkados";

        $guardado = $_FILES['galeria1']['tmp_name'];
    
        if(file_exists($directorio))
        {
            move_uploaded_file($guardado, $directorio."/".$galeria);
        }
    }
    else
    {
        $galeria = "";
    }

    if($_FILES["galeria2"]['name'] != "")
    {
        $image1 = $_FILES["galeria2"]['name'];
        $galeria2 = $now2."".$image1;
        $directorio ="../../../images/imagenMrkados";

        $guardado = $_FILES['galeria2']['tmp_name'];
    
        if(file_exists($directorio))
        {
            move_uploaded_file($guardado, $directorio."/".$galeria2);
        }
    }
    else
    {
        $galeria2 = "";
    }

    if($_FILES["galeria3"]['name'] != "")
    {
        $image1 = $_FILES["galeria3"]['name'];
        $galeria3 = $now2."".$image1;
        $directorio ="../../../images/imagenMrkados";

        $guardado = $_FILES['galeria3']['tmp_name'];
    
        if(file_exists($directorio))
        {
            move_uploaded_file($guardado, $directorio."/".$galeria3);
        }
    }
    else
    {
        $galeria3 = "";
    }
    
    
    if($_FILES["galeria4"]['name'] != "")
    {
        $image1 = $_FILES["galeria4"]['name'];
        $galeria4 = $now2."".$image1;
        $directorio ="../../../images/imagenMrkados";

        $guardado = $_FILES['galeria4']['tmp_name'];
    
        if(file_exists($directorio))
        {
            move_uploaded_file($guardado, $directorio."/".$galeria4);
        }
    }
    else
    {
        $galeria4 = "";
    }

    if($_FILES["galeria5"]['name'] != "")
    {
        $image1 = $_FILES["galeria5"]['name'];
        $galeria5 = $now2."".$image1;
        $directorio ="../../../images/imagenMrkados";

        $guardado = $_FILES['galeria5']['tmp_name'];
    
        if(file_exists($directorio))
        {
            move_uploaded_file($guardado, $directorio."/".$galeria5);
        }
    }
    else
    {
        $galeria5 = "";
    }
    
    // se toma la hora del sistema
    $date = new DateTime();  
    $date->setTimezone(new DateTimeZone('America/Mexico_City'));
    $nowF = date_format($date,"y/m/d H:i:s");

    $citas = $_POST['googleMap'];

    mysqli_query($conection,"UPDATE tiendas 
    SET nombrePersonaSucursal = '$nombrePersonaSucursal', apellidoPersonaSucursal = '$apellidoPersonaSucursal',
    direccion = '$direccion', codigoPostal = '$codigoPostal', estado = '$estado', ciudad = '$ciudad', 
    colonia = '$colonia', horarios = '$horarios', metodoPago = '$metodoPago', tiposEntrega = '$tiposEntrega',
    costoEnvio = '$costoEnvio', descripcionEnvio = '$descripcionEnvio', tiempoEnvio = '$tiempoEnvio',
    factura = '$factura', citas = '$citas', fotoNegocio = '$fachadaCompleto', imagen1 = '$galeria',
    imagen2 = '$galeria2', imagen3 = '$galeria3', imagen4 = '$galeria4', imagen5 = '$galeria5', 
    linkRappi = '$linkRappi', linkUber = '$linkUber'
    WHERE id = $id_tienda");

    header("Location: index.php?user=$correo&type=$usuarioTipo&op=negocios");
}  

?>