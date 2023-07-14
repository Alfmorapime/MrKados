<?php
$conection = include '../conection.php';

/**
 * 
 * Se recibe la description y el logo
 * 
 */
if(isset($_POST["newDescription"]))
{
    $newDescription = $_POST["newDescription"];
    $idMrkado = $_POST["idMrkado"];
    $nombreTienda = $_POST["nombreTienda"];

    if($_FILES['newLogoName']['name'] == "")
    {
        $currentLogo = $_POST["currentLogoName"];

        $queryUpdate = "UPDATE tiendas SET descripcion = '$newDescription', nombreTienda = '$nombreTienda' WHERE id = '$idMrkado'";

        mysqli_query($conection, $queryUpdate);

        if($_FILES['catalogoEdit']['name'] != "")
        {
            // se toma la hora del sistema
            $date = new DateTime();  
            $date->setTimezone(new DateTimeZone('America/Mexico_City'));
            $now = date_format($date,"d/m/y H:i:s");
            $now2 = date_format($date,"dmyHis");

            $newLogoNombre = $_FILES['catalogoEdit']['name'];
            $newLogoNombreCompleto = $now2."".$newLogoNombre;
            $directorioLogo ="../images/catalogos";

            $guardado = $_FILES['catalogoEdit']['tmp_name'];
        
            if(file_exists($directorioLogo))
            {
                move_uploaded_file($guardado, $directorioLogo."/".$newLogoNombreCompleto);
            }

            $queryUpdate = "UPDATE tiendas SET catalogo = '$newLogoNombreCompleto' WHERE id = '$idMrkado'";

            mysqli_query($conection, $queryUpdate);
        }

        header("Location: editarmrkado.php?correo=$user&key=tiendas&result=edited&ite=$idMrkado");
    }
    else
    {
        // se toma la hora del sistema
        $date = new DateTime();  
        $date->setTimezone(new DateTimeZone('America/Mexico_City'));
        $now = date_format($date,"d/m/y H:i:s");
        $now2 = date_format($date,"dmyHis");

        $newLogoNombre = $_FILES['newLogoName']['name'];
        $newLogoNombreCompleto = $now2."".$newLogoNombre;
        $directorioLogo ="../images/Logos";

        $guardado = $_FILES['newLogoName']['tmp_name'];
    
        if(file_exists($directorioLogo))
        {
            move_uploaded_file($guardado, $directorioLogo."/".$newLogoNombreCompleto);
        }

        $queryUpdate = "UPDATE tiendas SET descripcion = '$newDescription', nombreTienda = '$nombreTienda', logo = '$newLogoNombreCompleto' WHERE id = '$idMrkado'";
        mysqli_query($conection, $queryUpdate);

        $testing = $_FILES['catalogoEdit']['name'];
        var_dump($testing);

        if($_FILES['catalogoEdit']['name'] != "")
        {
            // se toma la hora del sistema
            $date = new DateTime();  
            $date->setTimezone(new DateTimeZone('America/Mexico_City'));
            $now = date_format($date,"d/m/y H:i:s");
            $now2 = date_format($date,"dmyHis");

            $newLogoNombre = $_FILES['catalogoEdit']['name'];
            $newLogoNombreCompleto = $now2."".$newLogoNombre;
            $directorioLogo ="../images/catalogos";

            $guardado = $_FILES['catalogoEdit']['tmp_name'];
        
            if(file_exists($directorioLogo))
            {
                move_uploaded_file($guardado, $directorioLogo."/".$newLogoNombreCompleto);
            }

            $queryUpdate = "UPDATE tiendas SET catalogo = '$newLogoNombreCompleto' WHERE id = '$idMrkado'";

            mysqli_query($conection, $queryUpdate);
        }

        header("Location: editarmrkado.php?correo=$user&key=tiendas&result=edited&ite=$idMrkado");
    }

}
else
{
    $newDescription = "";
}

/**
 * 
 * Se recibe el status
 * 
 */
if(isset($_GET["result"]))
{
    $status = $_GET["result"];
}
else
{
    $status = "";
}

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
    $estado = $row['estado'];
    $ciudad = $row['ciudad'];
    $colonia = $row['colonia'];
    $codigoPostal = $row['codigoPostal'];
    $catalogo = $row['catalogo'];
}

/**
 * 
 * Se recibe la informacion parte secundaria para editar
 * 
 */
if(isset($_POST["idTiendaEditSec2"]))
{
    $idTiendaEdit = $_POST["idTiendaEditSec2"];
    $nombreEncargado = $_POST["nombreEditar"];
    $apellidoEncargado = $_POST["apellidoEditar"];
    $direccion = $_POST["direccionEditar"];
    $paginaWeb = $_POST["paginaWebEditar"];
    $ciudad = $_POST["ciudadEditar"];
    $estado = $_POST["estadoEditar"];
    $colonia = $_POST["coloniaEditar"];
    $tiempoEnvio = $_POST["tiempoEnvioEditar"];
    $factura = $_POST["facturaEditar"];
    $correo = $_POST["correoEditar"];
    $redsocial1 = $_POST["redSocial1"];
    $redsocial2 = $_POST["redSocial2"];
    $redsocial3 = $_POST["redSocial3"];
    $redsocial4 = $_POST["redSocial4"];
    $redsocial5 = $_POST["redSocial5"];
    $redsocial6 = $_POST["redSocial6"];
    $codigoP = $_POST['codigoPostal'];
    $editWhat = $_POST['editarWhatsaap'];
    $editFace = $_POST['editarFacebook'];
    $RedSocialCuenta1 = $_POST["redSocialCuenta1"];
    $RedSocialCuenta2 = $_POST["redSocialCuenta2"];
    $RedSocialCuenta3 = $_POST["redSocialCuenta3"];
    $RedSocialCuenta4 = $_POST["redSocialCuenta4"];
    $RedSocialCuenta5 = $_POST["redSocialCuenta5"];
    $RedSocialCuenta6 = $_POST["redSocialCuenta6"];

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
 
    $redes = $redsocial1.",".$RedSocialCuenta1.",".$redsocial2.",".$RedSocialCuenta2.",".$redsocial3.",".$RedSocialCuenta3.",".$redsocial4.",".$RedSocialCuenta4.",".$redsocial5.",".$RedSocialCuenta5.",".$redsocial6.",".$RedSocialCuenta6;

    if(isset($_POST["efectivoEditar"]))
    {
        $efectivo = $_POST["efectivoEditar"];
    }
    else
    {
        $efectivo = "";
    }

    if(isset($_POST["tarjetaEditar"]))
    {
        $tarjeta = $_POST["tarjetaEditar"];
    }
    else
    {
        $tarjeta = "";
    }

    if(isset($_POST["tienda"]))
    {
        $tienda = $_POST["tienda"];
    }
    else
    {
        $tienda = "";
    }

    if(isset($_POST["transferencia"]))
    {
        $transferencia = $_POST["transferencia"];
    }
    else
    {
        $transferencia = "";
    }

    if(isset($_POST["deposito"]))
    {
        $deposito = $_POST["deposito"];
    }
    else
    {
        $deposito = "";
    }

    $metodoPago = $efectivo.",".$tarjeta.",".$tienda.",".$transferencia.",".$deposito;


    if(isset($_POST["recogerloEditar"]))
    {
        $recogerlo = $_POST["recogerloEditar"];
    }
    else
    {
        $recogerlo = "";
    }

    if(isset($_POST["rappiEditar"]))
    {
        $rappi = $_POST["rappiEditar"];
    }
    else
    {
        $rappi = "";
    }

    if(isset($_POST["UberEditar"]))
    {
        $ubber = $_POST["UberEditar"];
    }
    else
    {
        $ubber = "";
    }

    if(isset($_POST["envioDirectoEditar"]))
    {
        $envioDirecto = $_POST["envioDirectoEditar"];
    }
    else
    {
        $envioDirecto = "";
    }

    if(isset($_POST["mensajeriaEditar"]))
    {
        $mensajeria = $_POST["mensajeriaEditar"];
    }
    else
    {
        $mensajeria = "";
    }

    $metodoEnvio = $recogerlo.",".$rappi.",".$ubber.",".$envioDirecto.",".$mensajeria;

    $costoEnvio = $_POST["costoEnvio"];
    $detalleEnvio = $_POST["detalleEnvioEditar"];


    $queryUpdate = "UPDATE tiendas SET nombrePersonaSucursal = '$nombreEncargado', codigoPostal = '$codigoP', apellidoPersonaSucursal = '$apellidoEncargado', paginaWeb = '$paginaWeb', redSocial = '$redes', direccion = '$direccion', estado = '$estado', ciudad = '$ciudad', colonia = '$colonia', metodoPago = '$metodoPago', tiposEntrega = '$metodoEnvio', costoEnvio = '$costoEnvio', descripcionEnvio = '$detalleEnvio', tiempoEnvio = '$tiempoEnvio', factura = '$factura', whatsaap = '$editWhat', linkFacebook = '$editFace', horarios = '$horarios'  WHERE id = '$idTiendaEdit'";

    mysqli_query($conection, $queryUpdate);
    header("Location: editarmrkado.php?correo=$user&key=tiendas&result=edited&ite=$idTiendaEdit");
}

/**
 * 
 * Se recibe la informacion sobre las categorias
 * 
 */
if(isset($_POST["categoriaEdit"]))
{
    $categoria = $_POST["categoriaEdit"];
    $subcat1 = $_POST["subCategoriaEdit2"];
    $subcat2 = $_POST["subCategoriaEdit3"];
    $subcat3 = $_POST["subCategoriaEdit4"];
    $subcat4 = $_POST["subCategoriaEdit5"];

    $subcats = $subcat1.",".$subcat2.",".$subcat3.",".$subcat4;

    $id = $_POST["idTiendaEditCat"];

    
    $queryUpdate = "UPDATE tiendas SET giro = '$categoria', etiquetas = '$subcats' WHERE id = '$id'";

    mysqli_query($conection, $queryUpdate);
    header("Location: editarmrkado.php?correo=$user&key=tiendas&result=edited&ite=$id");
}

if(isset($_POST["idTiendaFachadaEdit"]))
{
    if($_FILES['fachadaEdit']['name'] != "")
    {
        $id = $_POST["idTiendaFachadaEdit"];

        // se toma la hora del sistema
        $date = new DateTime();  
        $date->setTimezone(new DateTimeZone('America/Mexico_City'));
        $now = date_format($date,"d/m/y H:i:s");
        $now2 = date_format($date,"dmyHis");

        $newLogoNombre = $_FILES['fachadaEdit']['name'];
        $newLogoNombreCompleto = $now2."".$newLogoNombre;
        $directorioLogo ="../images/fachadas";

        $guardado = $_FILES['fachadaEdit']['tmp_name'];
    
        if(file_exists($directorioLogo))
        {
            move_uploaded_file($guardado, $directorioLogo."/".$newLogoNombreCompleto);
        }

        $queryUpdate = "UPDATE tiendas SET fotoNegocio = '$newLogoNombreCompleto' WHERE id = '$id'";

        mysqli_query($conection, $queryUpdate);
        header("Location: editarmrkado.php?correo=$user&key=tiendas&result=edited&ite=$id");
    }


}

if(isset($_POST["idTiendaGaleriaEdit"]))
{
    if($_FILES['galeriaEdit1']['name'] != "")
    {
        $id = $_POST["idTiendaGaleriaEdit"];

        // se toma la hora del sistema
        $date = new DateTime();  
        $date->setTimezone(new DateTimeZone('America/Mexico_City'));
        $now = date_format($date,"d/m/y H:i:s");
        $now2 = date_format($date,"dmyHis");

        $newLogoNombre = $_FILES['galeriaEdit1']['name'];
        $newLogoNombreCompleto = $now2."".$newLogoNombre;
        $directorioLogo ="../images/imagenMerkados";

        $guardado = $_FILES['galeriaEdit1']['tmp_name'];
    
        if(file_exists($directorioLogo))
        {
            move_uploaded_file($guardado, $directorioLogo."/".$newLogoNombreCompleto);
        }

        $queryUpdate = "UPDATE tiendas SET imagen1 = '$newLogoNombreCompleto' WHERE id = '$id'";

        mysqli_query($conection, $queryUpdate);
        header("Location: editarmrkado.php?correo=$user&key=tiendas&result=edited&ite=$id");
    }

    if($_FILES['galeriaEdit2']['name'] != "")
    {
        $id = $_POST["idTiendaGaleriaEdit"];

        // se toma la hora del sistema
        $date = new DateTime();  
        $date->setTimezone(new DateTimeZone('America/Mexico_City'));
        $now = date_format($date,"d/m/y H:i:s");
        $now2 = date_format($date,"dmyHis");

        $newLogoNombre = $_FILES['galeriaEdit2']['name'];
        $newLogoNombreCompleto = $now2."".$newLogoNombre;
        $directorioLogo ="../images/imagenMerkados";

        $guardado = $_FILES['galeriaEdit2']['tmp_name'];
    
        if(file_exists($directorioLogo))
        {
            move_uploaded_file($guardado, $directorioLogo."/".$newLogoNombreCompleto);
        }

        $queryUpdate = "UPDATE tiendas SET imagen2 = '$newLogoNombreCompleto' WHERE id = '$id'";

        mysqli_query($conection, $queryUpdate);
        header("Location: editarmrkado.php?correo=$user&key=tiendas&result=edited&ite=$id");
    }

    if($_FILES['galeriaEdit3']['name'] != "")
    {
        $id = $_POST["idTiendaGaleriaEdit"];

        // se toma la hora del sistema
        $date = new DateTime();  
        $date->setTimezone(new DateTimeZone('America/Mexico_City'));
        $now = date_format($date,"d/m/y H:i:s");
        $now2 = date_format($date,"dmyHis");

        $newLogoNombre = $_FILES['galeriaEdit3']['name'];
        $newLogoNombreCompleto = $now2."".$newLogoNombre;
        $directorioLogo ="../images/imagenMerkados";

        $guardado = $_FILES['galeriaEdit3']['tmp_name'];
    
        if(file_exists($directorioLogo))
        {
            move_uploaded_file($guardado, $directorioLogo."/".$newLogoNombreCompleto);
        }

        $queryUpdate = "UPDATE tiendas SET imagen3 = '$newLogoNombreCompleto' WHERE id = '$id'";

        mysqli_query($conection, $queryUpdate);
        header("Location: editarmrkado.php?correo=$user&key=tiendas&result=edited&ite=$id");
    }

    if($_FILES['galeriaEdit4']['name'] != "")
    {
        $id = $_POST["idTiendaGaleriaEdit"];

        // se toma la hora del sistema
        $date = new DateTime();  
        $date->setTimezone(new DateTimeZone('America/Mexico_City'));
        $now = date_format($date,"d/m/y H:i:s");
        $now2 = date_format($date,"dmyHis");

        $newLogoNombre = $_FILES['galeriaEdit4']['name'];
        $newLogoNombreCompleto = $now2."".$newLogoNombre;
        $directorioLogo ="../images/imagenMerkados";

        $guardado = $_FILES['galeriaEdit4']['tmp_name'];
    
        if(file_exists($directorioLogo))
        {
            move_uploaded_file($guardado, $directorioLogo."/".$newLogoNombreCompleto);
        }

        $queryUpdate = "UPDATE tiendas SET imagen4 = '$newLogoNombreCompleto' WHERE id = '$id'";

        mysqli_query($conection, $queryUpdate);
        header("Location: editarmrkado.php?correo=$user&key=tiendas&result=edited&ite=$id");
    }

    if($_FILES['galeriaEdit5']['name'] != "")
    {
        $id = $_POST["idTiendaGaleriaEdit"];

        // se toma la hora del sistema
        $date = new DateTime();  
        $date->setTimezone(new DateTimeZone('America/Mexico_City'));
        $now = date_format($date,"d/m/y H:i:s");
        $now2 = date_format($date,"dmyHis");

        $newLogoNombre = $_FILES['galeriaEdit5']['name'];
        $newLogoNombreCompleto = $now2."".$newLogoNombre;
        $directorioLogo ="../images/imagenMerkados";

        $guardado = $_FILES['galeriaEdit5']['tmp_name'];
    
        if(file_exists($directorioLogo))
        {
            move_uploaded_file($guardado, $directorioLogo."/".$newLogoNombreCompleto);
        }

        $queryUpdate = "UPDATE tiendas SET imagen5 = '$newLogoNombreCompleto' WHERE id = '$id'";

        mysqli_query($conection, $queryUpdate);
        header("Location: editarmrkado.php?correo=$user&key=tiendas&result=edited&ite=$id");
    }
}


require_once('Page.class.php');

Page::header_menu_detail($user); //Se llama al metodo que contiene el header de la pagina
Page::primaryInformationEdit($logo, $description, $nombreTienda, $id, $status, $catalogo);
Page:: tiendaInformacionGeneralEdit($encargadoNombre, $encargadoApellido, $direccion, $paginaWeb,  $horarios, $tiempoEnvio, $factura, $correo, $social, $metodoPago, $tiposEntrega, $costoEnvio, $descripcionEnvio, $whatsaap,$facebook, $citas, $nombreTienda, $id, $user, $estado, $colonia, $ciudad, $conection, $codigoPostal);
Page::queTenemosEdit($nombreTienda, $categoria, $etiquetas,$conection, $id);
Page::mostrarFachadaEdit($fachada, $id);
Page::galeriaEdit($image1, $image2, $image3, $image4, $image5, $id);
?>