<?php
require_once('header.php');
$correo = $_GET["user"];
$id = $_GET["id"];

if(isset($_GET["type"]))
{
    $usuarioTipo = $_GET["type"];
}
else
{
    $usuarioTipo = "";
}

if(isset($_GET["status"]))
{
    $status = $_GET["status"];
}
else
{
    $status = "";
}

$conection = include '../../../conection.php';

//Llamada a BD para traer la informacion sobre los Slides de banners en registro tienda
$query = "select * from usuarios where correo = '$correo';";
$user = mysqli_query($conection,$query);

while ($row = mysqli_fetch_assoc($user)) {
    $name = $row['nombre'];
    $apellido = $row['apellidos'];
    $telefono = $row['telefono'];
    $contrasena = $row['contrasena'];
    $fecha = ['fechaRegistro'];
}

if(isset($_POST["id"]))
{
    $id = $_POST["id"];
    $queryDelete = "delete from tiendas where id = '$id';";
    $deleteExecution = mysqli_query($conection,$queryDelete);
    header("Location: index.php?user=$correo");
}

$queryTienda = "select * from tiendas where id = '$id';";
$tienda = mysqli_query($conection,$queryTienda);

while ($row = mysqli_fetch_assoc($tienda)) {
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
            $directorioLogo ="../../../images/catalogos";

            $guardado = $_FILES['catalogoEdit']['tmp_name'];
        
            if(file_exists($directorioLogo))
            {
                move_uploaded_file($guardado, $directorioLogo."/".$newLogoNombreCompleto);
            }

            $queryUpdate = "UPDATE tiendas SET catalogo = '$newLogoNombreCompleto' WHERE id = '$idMrkado'";

            mysqli_query($conection, $queryUpdate);
        }

        header("Location: informacionTienda.php?user=$correo&id=$id&type=$usuarioTipo&result=edited");
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
            $directorioLogo ="../../../images/catalogos";

            $guardado = $_FILES['catalogoEdit']['tmp_name'];
        
            if(file_exists($directorioLogo))
            {
                move_uploaded_file($guardado, $directorioLogo."/".$newLogoNombreCompleto);
            }

            $queryUpdate = "UPDATE tiendas SET catalogo = '$newLogoNombreCompleto' WHERE id = '$idMrkado'";

            mysqli_query($conection, $queryUpdate);
        }

        header("Location: informacionTienda.php?user=$correo&id=$id&type=$usuarioTipo&result=edited");
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
    header("Location: informacionTienda.php?user=$correo&result=edited&id=$id&type=$usuarioTipo");
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
    header("Location: informacionTienda.php?user=$correo&result=edited&id=$id&type=$usuarioTipo");
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
        $directorioLogo ="../../../images/fachadas";

        $guardado = $_FILES['fachadaEdit']['tmp_name'];
    
        if(file_exists($directorioLogo))
        {
            move_uploaded_file($guardado, $directorioLogo."/".$newLogoNombreCompleto);
        }

        $queryUpdate = "UPDATE tiendas SET fotoNegocio = '$newLogoNombreCompleto' WHERE id = '$id'";

        mysqli_query($conection, $queryUpdate);
        header("Location: informacionTienda.php?user=$correo&result=edited&id=$id&type=$usuarioTipo");
    }
}

/**
 * 
 * Recibe informavcion para editar galeria
 * 
 */

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
        $directorioLogo ="../../../images/imagenMerkados";

        $guardado = $_FILES['galeriaEdit1']['tmp_name'];
    
        if(file_exists($directorioLogo))
        {
            move_uploaded_file($guardado, $directorioLogo."/".$newLogoNombreCompleto);
        }

        $queryUpdate = "UPDATE tiendas SET imagen1 = '$newLogoNombreCompleto' WHERE id = '$id'";

        mysqli_query($conection, $queryUpdate);
        header("Location: informacionTienda.php?user=$correo&result=edited&id=$id&type=$usuarioTipo");
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
        $directorioLogo ="../../../images/imagenMerkados";

        $guardado = $_FILES['galeriaEdit2']['tmp_name'];
    
        if(file_exists($directorioLogo))
        {
            move_uploaded_file($guardado, $directorioLogo."/".$newLogoNombreCompleto);
        }

        $queryUpdate = "UPDATE tiendas SET imagen2 = '$newLogoNombreCompleto' WHERE id = '$id'";

        mysqli_query($conection, $queryUpdate);
        header("Location: informacionTienda.php?user=$correo&result=edited&id=$id&type=$usuarioTipo");
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
        $directorioLogo ="../../../images/imagenMerkados";

        $guardado = $_FILES['galeriaEdit3']['tmp_name'];
    
        if(file_exists($directorioLogo))
        {
            move_uploaded_file($guardado, $directorioLogo."/".$newLogoNombreCompleto);
        }

        $queryUpdate = "UPDATE tiendas SET imagen3 = '$newLogoNombreCompleto' WHERE id = '$id'";

        mysqli_query($conection, $queryUpdate);
        header("Location: informacionTienda.php?user=$correo&result=edited&id=$id&type=$usuarioTipo");
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
        $directorioLogo ="../../../images/imagenMerkados";

        $guardado = $_FILES['galeriaEdit4']['tmp_name'];
    
        if(file_exists($directorioLogo))
        {
            move_uploaded_file($guardado, $directorioLogo."/".$newLogoNombreCompleto);
        }

        $queryUpdate = "UPDATE tiendas SET imagen4 = '$newLogoNombreCompleto' WHERE id = '$id'";

        mysqli_query($conection, $queryUpdate);
        header("Location: informacionTienda.php?user=$correo&result=edited&id=$id&type=$usuarioTipo");
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
        $directorioLogo ="../../../images/imagenMerkados";

        $guardado = $_FILES['galeriaEdit5']['tmp_name'];
    
        if(file_exists($directorioLogo))
        {
            move_uploaded_file($guardado, $directorioLogo."/".$newLogoNombreCompleto);
        }

        $queryUpdate = "UPDATE tiendas SET imagen5 = '$newLogoNombreCompleto' WHERE id = '$id'";

        mysqli_query($conection, $queryUpdate);
        header("Location: informacionTienda.php?user=$correo&result=edited&id=$id&type=$usuarioTipo");
    }
}
//Llamada a BD para traer la informacion sobre los Slides de banners en registro tienda
$queryy = "select * from usuarios where correo = '$correo';";
$userr = mysqli_query($conection,$queryy);

while ($rowqq = mysqli_fetch_assoc($userr)) {
    $idUser = $rowqq['id'];
}
Page::header($correo, $usuarioTipo, $name, $apellido, $idUser, $conection);
?> 
                <!-- Contenido tiendas -->

                <!-- content @s -->
                 <!-- content @s -->
                 <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-aside-wrap">
                                            <section style="background:white;">
                                                    <?php if($status != "")
                                                        { ?>
                                                            <div class="row">   
                                                                <div class="col-lg-12" style="background:green; color:white; text-align:center; font-size:25px; margin-bottom:5%;"> 
                                                                    La informacion fue editada
                                                                </div>
                                                            </div>
                                                    <?php } 
                                                    ?>
                                                    <form method="POST" enctype="multipart/form-data">
                                                        <div class="container">
                                                                <h2 style="margin-left:22%; margin-bottom:5%;">Detalle del MrKado <?php echo $nombreTienda; ?></h2>
                                                                <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <div style="width:70%; margin-top:1%; font-weight:bold;" >
                                                                                <div><span>Logo</span></div>
                                                                                <div><img src="../images/Logos/<?php echo $logo; ?>" style="width:100%" />
                                                                                <input type="text" value="<?php echo $logo; ?>" name="currentLogoName" style="display:none;"/>
                                                                                <input type="file" name="newLogoName" />
                                                                                <input type="text" value="<?php echo $id; ?>" name="idMrkado" style="display:none;"/></div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-8" >
                                                                            <div style="width:100%; margin-top:1%; color:black;">
                                                                                <div><span style="font-weight:bold;">Descripcion</span></div>
                                                                                <div><textarea name="newDescription" style="width:60%; height:150px;"><?php echo $description; ?></textarea></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4" >
                                                                            <div style="width:100%; margin-top:1%; color:black;">
                                                                                <div><span style="font-weight:bold;">Nombre de la Tienda</span></div>
                                                                                <div><input name="nombreTienda" placeholder="Escriba el nombre de la tienda" value="<?php echo $nombreTienda; ?>"></input></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-8" >
                                                                            <div style="width:100%; margin-top:1%; color:black;">
                                                                                <div><span style="font-weight:bold;">Catalogo</span></div>
                                                                                <div><input type="button" data-target="#modal-1" data-toggle="modal" value="Conoce más..." style="background:#ff9f00; font-weight:bold; margin-top:5%; width:25%; border:1px solid; border-color:#ff9f00; border-radius:15px;"/></div>
                                                                                <div><input type="file" name="catalogoEdit" /></div>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                                <div class="col-lg-12"><input type="submit" value="Editar" style="background:#ffa300; margin-left:40%; margin-top:5%; color:white; border:1px solid; border-color:#ffa300;"/></div>
                                                        </div>
                                                    </form>      
                                            </section>  

                                            <div class="modal fade" id="modal-1" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">Catalogo</h4>
                                                            </div>
                                                            <div>
                                                            <iframe src="../images/catalogos/<?php echo $catalogo; ?>" frameborder="0" height="900px" ></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                                <!-- end: Modal large editar mostrar catalogo -->  

                                                <!--Plugins-->
                                            <script src="../js/jquery.js"></script>
                                            <script src="../js/plugins.js"></script>
                                            <!--Template functions-->
                                            <script src="../js/functions.js"></script>

                                        </div>
                                            
                                    </div><!-- .card -->

                                <div class="card card-bordered">
                                    <section style="background:white;">
        <div class="container">
        <form method="POST">
            <div class="row">
                
                    <div class="col-lg-12" style="margin-bottom:5%;">
                        <h2 style="text-align:center;">Información general</h2>
                    </div>
              

                <div class="col-lg-4" style=" font-weight:bold;">
                    Nombre del encargado:
                </div>
                <div class="col-lg-4" style=" font-weight:bold;">
                    Dirección:
                </div>
                <div class="col-lg-4" style=" font-weight:bold;">
                    Sitio web:
                </div>
                <input type="text" name="idTiendaEditSec2" value="<?php echo $id; ?>" style="display:none;" />
                <div class="col-lg-4">
                    <input type="text" name="nombreEditar" placeholder="Escriba el nombre del encargado" value="<?php echo $encargadoNombre; ?>"/>
                    <input type="text" name="apellidoEditar" placeholder="Escriba el apellido del encargado" value="<?php echo $encargadoApellido; ?>" style="margin-top:1%;"/>
                </div>
                <div class="col-lg-4" >
                    <div><input type="text" name="direccionEditar" placeholder="Escriba la direccion" value="<?php echo $direccion; ?>"/></div>
                    <div style=" font-weight:bold;"><span>Codigo Postal</span></div>
                    <div><input type="text" name="codigoPostal" value="<?php echo $codigoPostal; ?>" /></div>
                </div>
                <div class="col-lg-4" >
                    <input type="text" name="paginaWebEditar" placeholder="Escriba la pagina web" value="<?php echo $paginaWeb; ?>"/>
                </div>

                <div class="col-lg-4" style=" font-weight:bold; margin-top:2%;">
                    Ciudad:
                </div>
                <div class="col-lg-4" style=" font-weight:bold; margin-top:2%;">
                    Estado:
                </div>
                <div class="col-lg-4" style=" font-weight:bold; margin-top:2%;">
                    Colonia:
                </div>

                <div class="col-lg-4">
                    <select name="ciudadEditar" id="ciudadEditar">
                        <option value="">Seleccione la ciudad de la colonia</option>
                            <?php 
                                $query_ciudad = "SELECT * FROM ciudad";
                                $result_ciudad = mysqli_query($conection,$query_ciudad);
                                while ($row = mysqli_fetch_assoc($result_ciudad)) 
                                { 
                                    if($row["nombre"] == $ciudad)
                                    {
                                        ?> 
                                            <option value="<?php echo $row["nombre"]; ?>" selected><?php echo $row["nombre"]; ?></option> 
                                        <?php
                                    }
                                    else
                                    {
                                        ?> 
                                            <option value="<?php echo $row["nombre"]; ?>"><?php echo $row["nombre"]; ?></option> 
                                        <?php
                                    }
                                        
                                }?>
                    </select>
                </div>
                <div class="col-lg-4" >
                    <select name="estadoEditar" id="estadoEditar">
                        <option value="">Seleccione el estado</option>
                            <?php 
                                $query_estado = "SELECT * FROM estado";
                                $result_estado = mysqli_query($conection,$query_estado);
                                while ($row = mysqli_fetch_assoc($result_estado)) 
                                { 
                                    if($row["nombre"] == $estado)
                                    {
                                        ?> 
                                            <option value="<?php echo $row["nombre"]; ?>" selected><?php echo $row["nombre"]; ?></option> 
                                        <?php
                                    }
                                    else
                                    {
                                        ?> 
                                            <option value="<?php echo $row["nombre"]; ?>"><?php echo $row["nombre"]; ?></option> 
                                        <?php
                                    }
                                        
                                }?>
                    </select>
                </div>
                <div class="col-lg-4" >
                    <select name="coloniaEditar" id="coloniaEditar">
                        <option value="">Seleccione la Colonia</option>
                            <?php 
                                $query_colonia = "SELECT * FROM colonia";
                                $result_colonia = mysqli_query($conection,$query_colonia);
                                while ($row = mysqli_fetch_assoc($result_colonia)) 
                                { 
                                    if($row["nombre"] == $colonia)
                                    {
                                        ?> 
                                            <option value="<?php echo $row["nombre"]; ?>" selected><?php echo $row["nombre"]; ?></option> 
                                        <?php
                                    }
                                    else
                                    {
                                        ?> 
                                            <option value="<?php echo $row["nombre"]; ?>"><?php echo $row["nombre"]; ?></option> 
                                        <?php
                                    }
                                        
                                }?>
                    </select>
                </div>

                <div class="col-lg-4" style=" font-weight:bold; margin-top:2%;">
                    Horario del establecimiento:
                </div>
                <div class="col-lg-4" style=" font-weight:bold; margin-top:2%;">
                    Tiempo de envío aproximado:
                </div>
                <div class="col-lg-4" style=" font-weight:bold; margin-top:2%;">
                    Redes Sociales:
                </div>
                <div class="col-lg-4">
                <?php $horario = explode(",", $horarios); 
                 $arr_length = count($horario);
        

                ?>
                        <!-- Bloque que muestra el horario del negocio-->
                        <div class="col-lg-12 form-group">
                               </div>
                               <!-- lunes -->
                                <div class="col-lg-12" style="float:left;">
                                    <div style="float:left; margin-top:10px;">Lunes</div>
                                    <div style="float:left; margin-left:5px; margin-top:10px;">de</div>
                                    <?php if($horario[0] != " ")
                                    { ?>
                                        <div style="float:left; margin-left:5px;"><input type="text" name="lunesH" value="<?php echo $horario[0]; ?>" class="form-control" style="width:70px; "></div>
                                   <?php }
                                   else
                                   { ?>
                                    <div style="float:left; margin-left:5px;"><input type="text" name="lunesH" class="form-control" style="width:70px; "></div>
                                   <?php } ?>
                                    <div style="float:left; margin-left:5px; margin-top:10px;">a</div>

                                    <?php if($horario[1] != " ")
                                    { ?>
                                        <div style="float:left; margin-left:5px;"><input type="text" name="lunesC" value="<?php echo $horario[1]; ?>" class="form-control" style="width:70px;" /></div>
                                    <?php } 
                                    else
                                    { ?>
                                        <div style="float:left; margin-left:5px;"><input type="text" name="lunesC"  class="form-control" style="width:70px;" /></div>
                                   <?php } ?>

                                   <?php if($horario[1] != " ")
                                    { ?>
                                        <div style="float:left; margin-left:5px; margin-top:10px;"><input type="checkbox" name="cerradoLunes" class="form-control" style="width:10px;"></div>
                                    <?php }
                                    else{ ?>
                                        <div style="float:left; margin-left:5px; margin-top:10px;"><input type="checkbox" checked name="cerradoLunes" class="form-control" style="width:10px;"></div>
                                   <?php } ?>
                                   <div style="float:left; margin-top:10px; font-size:9px;">Cerrado</div>
                                </div>
                                <!-- Fin Lunes-->

                                <!-- Martes -->
                                <div class="col-lg-12" style="float:left; margin-top:5px;">
                                    <div style="float:left; margin-top:10px;">Martes</div>
                                    <div style="float:left; margin-left:5px; margin-top:10px;">de</div>
                                    <?php if($horario[2] != " ")
                                    { ?>
                                        <div style="float:left; margin-left:5px;"><input type="text" name="martesH" value="<?php echo $horario[2]; ?>" class="form-control" style="width:70px; "></div>
                                   <?php }
                                   else
                                   { ?>
                                    <div style="float:left; margin-left:5px;"><input type="text" name="martesH" class="form-control" style="width:70px; "></div>
                                   <?php } ?>
                                    <div style="float:left; margin-left:5px; margin-top:10px;">a</div>

                                    <?php if($horario[3] != " ")
                                    { ?>
                                        <div style="float:left; margin-left:5px;"><input type="text" name="martesC" value="<?php echo $horario[3]; ?>" class="form-control" style="width:70px;" /></div>
                                    <?php } 
                                    else
                                    { ?>
                                        <div style="float:left; margin-left:5px;"><input type="text" name="martesC"  class="form-control" style="width:70px;" /></div>
                                   <?php } ?>

                                   <?php if($horario[3] != " ")
                                    { ?>
                                        <div style="float:left; margin-left:5px; margin-top:10px;"><input type="checkbox" name="cerradoMartes" class="form-control" style="width:10px;"></div>
                                    <?php }
                                    else{ ?>
                                        <div style="float:left; margin-left:5px; margin-top:10px;"><input type="checkbox" checked name="cerradoMartes" class="form-control" style="width:10px;"></div>
                                   <?php } ?>
                                   <div style="float:left; margin-top:10px; font-size:9px;">Cerrado</div>
                        </div>
                                <!-- Fin Martes-->
                        
                                <!-- Miercoles -->
                                <div class="col-lg-12" style="float:left; margin-top:5px;">
                                    <div style="float:left; margin-top:10px;">Miercoles</div>
                                    <div style="float:left; margin-left:5px; margin-top:10px;">de</div>
                                    <?php if($horario[4] != " ")
                                    { ?>
                                        <div style="float:left; margin-left:5px;"><input type="text" name="miercolesH" value="<?php echo $horario[4]; ?>" class="form-control" style="width:70px; "></div>
                                   <?php }
                                   else
                                   { ?>
                                    <div style="float:left; margin-left:5px;"><input type="text" name="miercolesH" class="form-control" style="width:70px; "></div>
                                   <?php } ?>
                                    <div style="float:left; margin-left:5px; margin-top:10px;">a</div>

                                    <?php if($horario[5] != " ")
                                    { ?>
                                        <div style="float:left; margin-left:5px;"><input type="text" name="miercolesC" value="<?php echo $horario[5]; ?>" class="form-control" style="width:70px;" /></div>
                                    <?php } 
                                    else
                                    { ?>
                                        <div style="float:left; margin-left:5px;"><input type="text" name="miercolesC"  class="form-control" style="width:70px;" /></div>
                                   <?php } ?>

                                   <?php if($horario[5] != " ")
                                    { ?>
                                        <div style="float:left; margin-left:5px; margin-top:10px;"><input type="checkbox" name="cerradoMiercoles" class="form-control" style="width:10px;"></div>
                                    <?php }
                                    else{ ?>
                                        <div style="float:left; margin-left:5px; margin-top:10px;"><input type="checkbox" checked name="cerradoMiercoles" class="form-control" style="width:10px;"></div>
                                   <?php } ?>
                                   <div style="float:left; margin-top:10px; font-size:9px;">Cerrado</div>
                                </div>
                                <!-- Fin Miercoles-->

                                <!-- Jueves -->
                                <div class="col-lg-12" style="float:left; margin-top:5px;">
                                    <div style="float:left; margin-top:10px;">Jueves</div>
                                    <div style="float:left; margin-left:5px; margin-top:10px;">de</div>
                                    <?php if($horario[6] != " ")
                                    { ?>
                                        <div style="float:left; margin-left:5px;"><input type="text" name="juevesH" value="<?php echo $horario[6]; ?>" class="form-control" style="width:70px; "></div>
                                   <?php }
                                   else
                                   { ?>
                                    <div style="float:left; margin-left:5px;"><input type="text" name="juevesH" class="form-control" style="width:70px; "></div>
                                   <?php } ?>
                                    <div style="float:left; margin-left:5px; margin-top:10px;">a</div>

                                    <?php if($horario[7] != " ")
                                    { ?>
                                        <div style="float:left; margin-left:5px;"><input type="text" name="juevesC" value="<?php echo $horario[7]; ?>" class="form-control" style="width:70px;" /></div>
                                    <?php } 
                                    else
                                    { ?>
                                        <div style="float:left; margin-left:5px;"><input type="text" name="juevesC"  class="form-control" style="width:70px;" /></div>
                                   <?php } ?>

                                   <?php if($horario[7] != " ")
                                    { ?>
                                        <div style="float:left; margin-left:5px; margin-top:10px;"><input type="checkbox" name="cerradoJueves" class="form-control" style="width:10px;"></div>
                                    <?php }
                                    else{ ?>
                                        <div style="float:left; margin-left:5px; margin-top:10px;"><input type="checkbox" checked name="cerradoJueves" class="form-control" style="width:10px;"></div>
                                   <?php } ?>
                                   <div style="float:left; margin-top:10px; font-size:9px;">Cerrado</div>
                                </div>
                                <!-- Fin Jueves-->

                                
                                <!-- Viernes -->
                                <div class="col-lg-12" style="float:left; margin-top:5px;">
                                    <div style="float:left; margin-top:10px;">Viernes</div>
                                    <div style="float:left; margin-left:5px; margin-top:10px;">de</div>
                                    <?php if($horario[8] != " ")
                                    { ?>
                                        <div style="float:left; margin-left:5px;"><input type="text" name="viernesH" value="<?php echo $horario[8]; ?>" class="form-control" style="width:70px; "></div>
                                   <?php }
                                   else
                                   { ?>
                                    <div style="float:left; margin-left:5px;"><input type="text" name="viernesH" class="form-control" style="width:70px; "></div>
                                   <?php } ?>
                                    <div style="float:left; margin-left:5px; margin-top:10px;">a</div>

                                    <?php if($horario[9] != " ")
                                    { ?>
                                        <div style="float:left; margin-left:5px;"><input type="text" name="viernesC" value="<?php echo $horario[9]; ?>" class="form-control" style="width:70px;" /></div>
                                    <?php } 
                                    else
                                    { ?>
                                        <div style="float:left; margin-left:5px;"><input type="text" name="viernesC"  class="form-control" style="width:70px;" /></div>
                                   <?php } ?>

                                   <?php if($horario[9] != " ")
                                    { ?>
                                        <div style="float:left; margin-left:5px; margin-top:10px;"><input type="checkbox" name="cerradoViernes" class="form-control" style="width:10px;"></div>
                                    <?php }
                                    else{ ?>
                                        <div style="float:left; margin-left:5px; margin-top:10px;"><input type="checkbox" checked name="cerradoViernes" class="form-control" style="width:10px;"></div>
                                   <?php } ?>
                                   <div style="float:left; margin-top:10px; font-size:9px;">Cerrado</div>
                                </div>
                                <!-- Fin Viernes-->

                                <!-- Sabado -->
                                <div class="col-lg-12" style="float:left; margin-top:5px;">
                                    <div style="float:left; margin-top:10px;">Sabado</div>
                                    <div style="float:left; margin-left:5px; margin-top:10px;">de</div>
                                    <?php if($horario[10] != " ")
                                    { ?>
                                        <div style="float:left; margin-left:5px;"><input type="text" name="sabadoH" value="<?php echo $horario[10]; ?>" class="form-control" style="width:70px; "></div>
                                   <?php }
                                   else
                                   { ?>
                                    <div style="float:left; margin-left:5px;"><input type="text" name="sabadoH" class="form-control" style="width:70px; "></div>
                                   <?php } ?>
                                    <div style="float:left; margin-left:5px; margin-top:10px;">a</div>

                                    <?php if($horario[11] != " ")
                                    { ?>
                                        <div style="float:left; margin-left:5px;"><input type="text" name="sabadoC" value="<?php echo $horario[11]; ?>" class="form-control" style="width:70px;" /></div>
                                    <?php } 
                                    else
                                    { ?>
                                        <div style="float:left; margin-left:5px;"><input type="text" name="sabadoC"  class="form-control" style="width:70px;" /></div>
                                   <?php } ?>

                                   <?php if($horario[11] != " ")
                                    { ?>
                                        <div style="float:left; margin-left:5px; margin-top:10px;"><input type="checkbox" name="cerradoSabado" class="form-control" style="width:10px;"></div>
                                    <?php }
                                    else{ ?>
                                        <div style="float:left; margin-left:5px; margin-top:10px;"><input type="checkbox" checked name="cerradoSabado" class="form-control" style="width:10px;"></div>
                                   <?php } ?>
                                   <div style="float:left; margin-top:10px; font-size:9px;">Cerrado</div>
                                </div>
                                <!-- Fin Sabado-->

                                <!-- Domingo -->
                                <div class="col-lg-12" style="float:left; margin-top:5px;">
                                    <div style="float:left; margin-top:10px;">Domingo</div>
                                    <div style="float:left; margin-left:5px; margin-top:10px;">de</div>
                                    <?php if($horario[12] != " ")
                                    { ?>
                                        <div style="float:left; margin-left:5px;"><input type="text" name="domingoH" value="<?php echo $horario[12]; ?>" class="form-control" style="width:70px; "></div>
                                   <?php }
                                   else
                                   { ?>
                                    <div style="float:left; margin-left:5px;"><input type="text" name="domingoH" class="form-control" style="width:70px; "></div>
                                   <?php } ?>
                                    <div style="float:left; margin-left:5px; margin-top:10px;">a</div>

                                    <?php if($horario[13] != " ")
                                    { ?>
                                        <div style="float:left; margin-left:5px;"><input type="text" name="domingoC" value="<?php echo $horario[13]; ?>" class="form-control" style="width:70px;" /></div>
                                    <?php } 
                                    else
                                    { ?>
                                        <div style="float:left; margin-left:5px;"><input type="text" name="domingoC"  class="form-control" style="width:70px;" /></div>
                                   <?php } ?>

                                   <?php if($horario[13] != " ")
                                    { ?>
                                        <div style="float:left; margin-left:5px; margin-top:10px;"><input type="checkbox" name="cerradoDomingo" class="form-control" style="width:10px;"></div>
                                    <?php }
                                    else{ ?>
                                        <div style="float:left; margin-left:5px; margin-top:10px;"><input type="checkbox" checked name="cerradoDomingo" class="form-control" style="width:10px;"></div>
                                   <?php } ?>
                                   <div style="float:left; margin-top:10px; font-size:9px;">Cerrado</div>
                                </div>
                                <!-- Fin Domingo-->
                        

                         <!-- Final del bloque horario del negocio-->
                    
                   
                </div>
                <div class="col-lg-4" >
                    <input type="text" value="<?php echo $tiempoEnvio; ?>" name="tiempoEnvioEditar" />
                    <div style=" font-weight:bold; margin-top:3%;">
                        ¿Emite factura?
                    </div>
                    <div>
                        <?php 
                            if ($factura == "SI")
                            { ?>
                                <label>SI</label>
                                <input type="radio" value="SI" checked name="facturaEditar" />

                                <label style="margin-left:2%;">NO</label>
                                <input type="radio" value="NO"  name="facturaEditar" />
                            <?php }
                            else
                            { ?>
                                <label>SI</label>
                                <input type="radio" value="SI" name="facturaEditar" />

                                <label style="margin-left:2%;">NO</label>
                                <input type="radio" value="NO" checked name="facturaEditar" />
                            <?php }
                        ?>
                    </div>
                    <div style=" font-weight:bold; margin-top:3%;">
                        Correo Electronico
                    </div>
                    <div>
                        <input type="text" value="<?php echo $correo; ?>" name="correoEditar" style="width:250px;"/> 
                    </div>
                    <div style=" font-weight:bold; margin-top:3%;">
                        Whatsaap
                    </div>
                    <div>
                        <input type="text" value="<?php echo $whatsaap; ?>" name="editarWhatsaap" style="width:250px;"/> 
                    </div>
                    <div style=" font-weight:bold; margin-top:3%;">
                        Link de Facebook
                    </div>
                    <div>
                        <input type="text" value="<?php echo $facebook; ?>" name="editarFacebook" style="width:250px;"/> 
                    </div>
                </div>
                <div class="col-lg-4" >
                    <div>
                    <?php $redes = explode(",", $social); 
                          $arr_length = count($redes);
                    ?>

                        <?php
                            if($redes[0] == "Instagram")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram" selected>Instagram</option> 
                                    <option value="Twitter" >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[1]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[0] == "Twitter")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter" selected >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[1]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[0] == "Linkedin")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" selected>Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[1]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[0] == "Snapchat")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" selected>Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[1]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[0] == "TikTok")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" selected>TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[1]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[0] == "none" || $redes[0] == "")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" placeholder="Escriba el nombre de su cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[2] == "Instagram")
                            { ?> 
                                <select name="redSocial2" id="redSocial2" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram" selected>Instagram</option> 
                                    <option value="Twitter" >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[3]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta2" />
                            <?php } ?>

                            <?php
                            if($redes[2] == "Twitter")
                            { ?> 
                                <select name="redSocial2" id="redSocial2" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter" selected >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[3]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta2" />
                            <?php } ?>

                            <?php
                            if($redes[2] == "Linkedin")
                            { ?> 
                                <select name="redSocial2" id="redSocial2" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" selected>Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[3]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta2" />
                            <?php } ?>

                            <?php
                            if($redes[2] == "Snapchat")
                            { ?> 
                                <select name="redSocial2" id="redSocial2" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" selected>Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[3]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta2" />
                            <?php } ?>

                            <?php
                            if($redes[2] == "TikTok")
                            { ?> 
                                <select name="redSocial2" id="redSocial2" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" selected>TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[3]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta2" />
                            <?php } ?>

                            <?php
                            if($redes[2] == "none" || $redes[2] == "")
                            { ?> 
                                <select name="redSocial2" id="redSocial2" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" placeholder="Escriba el nombre de su cuenta" name="redSocialCuenta2" />
                            <?php } ?>
                            
                            <?php
                            if($redes[4] == "Instagram")
                            { ?> 
                                <select name="redSocial3" id="redSocial3" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram" selected>Instagram</option> 
                                    <option value="Twitter" >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[5]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta3" />
                            <?php } ?>

                            <?php
                            if($redes[4] == "Twitter")
                            { ?> 
                                <select name="redSocial3" id="redSocial3" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter" selected >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[5]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta3" />
                            <?php } ?>

                            <?php
                            if($redes[4] == "Linkedin")
                            { ?> 
                                <select name="redSocial3" id="redSocial3" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" selected>Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[5]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta3" />
                            <?php } ?>

                            <?php
                            if($redes[4] == "Snapchat")
                            { ?> 
                                <select name="redSocial3" id="redSocial3" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" selected>Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[5]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta3" />
                            <?php } ?>

                            <?php
                            if($redes[4] == "TikTok")
                            { ?> 
                                <select name="redSocial3" id="redSocial3" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" selected>TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[5]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta3" />
                            <?php } ?>

                            <?php
                            if($redes[4] == "none" || $redes[4] == "")
                            { ?> 
                                <select name="redSocial3" id="redSocial3" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" placeholder="Escriba el nombre de su cuenta" name="redSocialCuenta3" />
                            <?php } ?>
                            
                            <?php
                            if($redes[6] == "Instagram")
                            { ?> 
                                <select name="redSocial4" id="redSocial4" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram" selected>Instagram</option> 
                                    <option value="Twitter" >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[7]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta4" />
                            <?php } ?>

                            <?php
                            if($redes[6] == "Twitter")
                            { ?> 
                                <select name="redSocial4" id="redSocial4" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter" selected >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[7]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta4" />
                            <?php } ?>

                            <?php
                            if($redes[6] == "Linkedin")
                            { ?> 
                                <select name="redSocial4" id="redSocial4" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" selected>Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[7]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta4" />
                            <?php } ?>

                            <?php
                            if($redes[6] == "Snapchat")
                            { ?> 
                                <select name="redSocial4" id="redSocial4" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" selected>Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[7]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta4" />
                            <?php } ?>

                            <?php
                            if($redes[6] == "TikTok")
                            { ?> 
                                <select name="redSocial4" id="redSocial4" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" selected>TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[7]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta4" />
                            <?php } ?>

                            <?php
                            if($redes[6] == "none" || $redes[6] == "")
                            { ?> 
                                <select name="redSocial4" id="redSocial4" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" placeholder="Escriba nombre de cuenta" name="redSocialCuenta4" />
                            <?php } ?>

                            <?php
                            if($redes[8] == "Instagram")
                            { ?> 
                                <select name="redSocial5" id="redSocial5" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram" selected>Instagram</option> 
                                    <option value="Twitter" >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[9]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta5" />
                            <?php } ?>

                            <?php
                            if($redes[8] == "Twitter")
                            { ?> 
                                <select name="redSocial5" id="redSocial5" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter" selected >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[9]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta5" />
                            <?php } ?>

                            <?php
                            if($redes[8] == "Linkedin")
                            { ?> 
                                <select name="redSocial5" id="redSocial5" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" selected>Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[9]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta5" />
                            <?php } ?>

                            <?php
                            if($redes[8] == "Snapchat")
                            { ?> 
                                <select name="redSocial5" id="redSocial5" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" selected>Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[9]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta5" />
                            <?php } ?>

                            <?php
                            if($redes[8] == "TikTok")
                            { ?> 
                                <select name="redSocial5" id="redSocial5" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" selected>TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[9]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta5" />
                            <?php } ?>

                            <?php
                            if($redes[8] == "none" || $redes[8] == "")
                            { ?> 
                                <select name="redSocial5" id="redSocial5" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" placeholder="Escriba nombre de cuenta" name="redSocialCuenta5" />
                            <?php } ?>

                            <?php
                            if($redes[10] == "Instagram")
                            { ?> 
                                <select name="redSocial6" id="redSocial6" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram" selected>Instagram</option> 
                                    <option value="Twitter" >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[11]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta6" />
                            <?php } ?>

                            <?php
                            if($redes[10] == "Twitter")
                            { ?> 
                                <select name="redSocial6" id="redSocial6" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter" selected >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[11]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta6" />
                            <?php } ?>

                            <?php
                            if($redes[10] == "Linkedin")
                            { ?> 
                                <select name="redSocial6" id="redSocial6" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" selected>Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[11]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta6" />
                            <?php } ?>

                            <?php
                            if($redes[10] == "Snapchat")
                            { ?> 
                                <select name="redSocial6" id="redSocial6" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" selected>Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[11]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta6" />
                            <?php } ?>

                            <?php
                            if($redes[10] == "TikTok")
                            { ?> 
                                <select name="redSocial6" id="redSocial6" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" selected>TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[11]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta6" />
                            <?php } ?>

                            <?php
                            if($redes[10] == "none" || $redes[10] == "")
                            { ?> 
                                <select name="redSocial6" id="redSocial6" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" placeholder="Escriba nombre de cuenta" name="redSocialCuenta6" />
                            <?php } ?>

                            
                    </div>
                </div>
                

                <div class="col-lg-12">
                    <div style="font-weight:bold; text-align:left; margin-top:3%;">Métodos de pago:</div>
                </div>
                
                <?php $pieces = explode(",", $metodoPago); 
                if($pieces[0] == "") {  ?> <div style="width:3%;"><input type="checkbox" name="efectivoEditar" value="Efectivo"  style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;"  name="efectivoEditar" value="Efectivo" checked></div> <?php }?>

                <div class="col-lg-1" >Efectivo</div>
                
               <?php if($pieces[1] == "") {  ?> <div style="width:3%;"><input type="checkbox"  name="tarjetaEditar" value="Tarjeta" style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" name="tarjetaEditar" value="Tarjeta" checked></div> <?php }?>

                <div style="width:20%;">Tarjeta de crédito / Débito</div>

                <?php if($pieces[2] == "") {  ?> <div style="width:3%;"><input type="checkbox" name="tienda" value="Tienda Departamental" style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" name="tienda" value="Tienda Departamental" checked ></div> <?php }?>
                
                <div style="width:15%;">Tienda Dptal</div>

                <?php if($pieces[3] == "") {  ?> <div style="width:3%;"><input type="checkbox" name="transferencia" value="Transferencia" style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" name="transferencia" value="Transferencia" checked></div> <?php }?>

                <div style="width:20%;">Transferencia electrónica</div>
                
                <?php if($pieces[4] == "") {  ?> <div style="width:3%;"><input type="checkbox" name="deposito" value="Deposito"  style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" name="deposito" value="Deposito" checked></div> <?php }?>

                <div style="width:20%;">Depósito en banco</div>

                <div class="col-lg-12">
                    <div style="font-weight:bold; text-align:left; margin-top:3%;">Tipos de entrega:</div>
                </div>
                
                <?php $piece = explode(",", $tiposEntrega); 
                if($piece[0] == "") {  ?> <div style="width:3%;"><input type="checkbox" name="recogerloEditar" value="Recogerlo en el establecimiento"  style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" name="recogerloEditar" value="Recogerlo en el establecimiento" checked></div> <?php }?>

                <div style="width:20%;">Recogerlo directamente</div>
                
               <?php if($piece[1] == "") {  ?> <div style="width:3%;"><input type="checkbox" name="rappiEditar" value="Rappi"  style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" name="rappiEditar" value="Rappi"   checked></div> <?php }?>

                <div style="width:10%;">RAPPI</div>

                <?php if($piece[2] == "") {  ?> <div style="width:3%;"><input type="checkbox" name="UberEditar" value="ubber"   style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" name="UberEditar" value="ubber"  checked ></div> <?php }?>
                
                <div style="width:10%;">Uber eats</div>

                <?php if($piece[3] == "") {  ?> <div style="width:3%;"><input type="checkbox" name="envioDirectoEditar" value="Envio directo del establecimiento" style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" name="envioDirectoEditar" value="Envio directo del establecimiento" checked></div> <?php }?>

                <div style="width:25%;">Envío directo del establecimiento</div>
                
                <?php if($piece[4] == "") {  ?> <div style="width:3%;"><input type="checkbox" name="mensajeriaEditar" value="Mensajeria" style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" name="mensajeriaEditar" value="Mensajeria" checked></div> <?php }?>

                <div style="width:20%;">Mensajería</div>

                <div class="col-lg-12">
                    <div style="font-weight:bold; text-align:left; margin-top:3%;">Costo de envío:</div>
                </div>

                <input type="text" name="costoEnvio" placeholder="Costo del envio" value="<?php echo $costoEnvio; ?>">
              
                <input type="text" value="<?php echo $descripcionEnvio; ?>" placeholder="Detalle del envio" name="detalleEnvioEditar"  style="margin-left:2%;"/>
                

            </div>
            <div class="col-lg-12"><input type="submit" value="Editar" style="background:#ffa300; margin-left:40%; color:white; border:1px solid; border-color:#ffa300;"/></div>
           
            </div>
        </form>
        </div>
    </section>
                                    </div>

                                    <div class="card card-bordered" style="margin-top:15px;">
                                    <section>
        
        <div class="container">
        <form method="POST">
            <input type="text" value="<?php echo $id; ?>" name="idTiendaEditCat" style="display:none;" />
            <div style="text-align:center;">
                <h2>En <?php echo $nombreTienda; ?> encontrarás...</h2>
           </div>
           <div class="row" style="margin-top:5%;">

            <div class="col-lg-4">
                <span>Seleccione la categoria principal</span>
                <select name="categoriaEdit" id="categoriaEdit">
                    <option value="">Seleccione la categoria Principal</option>
                        <?php 
                            $query_subcategoria = "SELECT * FROM subcategoria";
                            $result_subcategoria = mysqli_query($conection,$query_subcategoria);
                            while ($row = mysqli_fetch_assoc($result_subcategoria)) 
                            { 
                               
                                if($row["subcat"] == $categoria)
                                {
                                    ?> 
                                        <option value="<?php echo $row["subcat"]; ?>" selected><?php echo $row["subcat"]; ?></option> 
                                    <?php
                                }
                                else
                                {
                                    ?> 
                                        <option value="<?php echo $row["subcat"]; ?>"><?php echo $row["subcat"]; ?></option> 
                                    <?php
                                }
                                    
                            }?>
                </select>
            </div>

            <div class="col-lg-4">
                <span>Seleccione la subcategoria</span>
                <select name="subCategoriaEdit2" id="subCategoriaEdit2">
                    <option value="">Seleccione la subcategoria </option>
                        <?php 
                            $pieces = explode(",", $etiquetas);
                            $query_subcategoria = "SELECT * FROM subcategoria";
                            $result_subcategoria = mysqli_query($conection,$query_subcategoria);
                            while ($row = mysqli_fetch_assoc($result_subcategoria)) 
                            { 
                               
                                if($row["subcat"] == $pieces[0])
                                {
                                    ?> 
                                        <option value="<?php echo $row["subcat"]; ?>" selected><?php echo $row["subcat"]; ?></option> 
                                    <?php
                                }
                                else
                                {
                                    ?> 
                                        <option value="<?php echo $row["subcat"]; ?>"><?php echo $row["subcat"]; ?></option> 
                                    <?php
                                }
                                    
                            }?>
                </select>
            </div>

            <div class="col-lg-4">
                <span>Seleccione la subcategoria</span>
                <select name="subCategoriaEdit3" id="subCategoriaEdit3">
                    <option value="">Seleccione la subcategoria </option>
                        <?php 
                            $pieces = explode(",", $etiquetas);
                            $query_subcategoria = "SELECT * FROM subcategoria";
                            $result_subcategoria = mysqli_query($conection,$query_subcategoria);
                            while ($row = mysqli_fetch_assoc($result_subcategoria)) 
                            { 
                               
                                if($row["subcat"] == $pieces[1])
                                {
                                    ?> 
                                        <option value="<?php echo $row["subcat"]; ?>" selected><?php echo $row["subcat"]; ?></option> 
                                    <?php
                                }
                                else
                                {
                                    ?> 
                                        <option value="<?php echo $row["subcat"]; ?>"><?php echo $row["subcat"]; ?></option> 
                                    <?php
                                }
                                    
                            }?>
                </select>
            </div>

            <div class="col-lg-4" style="margin-top:2%;">
                <span>Seleccione la subcategoria</span>
                <select name="subCategoriaEdit4" id="subCategoriaEdit4">
                    <option value="">Seleccione la subcategoria </option>
                        <?php 
                            $pieces = explode(",", $etiquetas);
                            $query_subcategoria = "SELECT * FROM subcategoria";
                            $result_subcategoria = mysqli_query($conection,$query_subcategoria);
                            while ($row = mysqli_fetch_assoc($result_subcategoria)) 
                            { 
                               
                                if($row["subcat"] == $pieces[2])
                                {
                                    ?> 
                                        <option value="<?php echo $row["subcat"]; ?>" selected><?php echo $row["subcat"]; ?></option> 
                                    <?php
                                }
                                else
                                {
                                    ?> 
                                        <option value="<?php echo $row["subcat"]; ?>"><?php echo $row["subcat"]; ?></option> 
                                    <?php
                                }
                                    
                            }?>
                </select>
            </div>

            <div class="col-lg-4" style="margin-top:2%;">
                <span>Seleccione la subcategoria</span>
                <select name="subCategoriaEdit5" id="subCategoriaEdit5">
                    <option value="">Seleccione la subcategoria </option>
                        <?php 
                            $pieces = explode(",", $etiquetas);
                            $query_subcategoria = "SELECT * FROM subcategoria";
                            $result_subcategoria = mysqli_query($conection,$query_subcategoria);
                            while ($row = mysqli_fetch_assoc($result_subcategoria)) 
                            { 
                               
                                if($row["subcat"] == $pieces[3])
                                {
                                    ?> 
                                        <option value="<?php echo $row["subcat"]; ?>" selected><?php echo $row["subcat"]; ?></option> 
                                    <?php
                                }
                                else
                                {
                                    ?> 
                                        <option value="<?php echo $row["subcat"]; ?>"><?php echo $row["subcat"]; ?></option> 
                                    <?php
                                }
                                    
                            }?>
                </select>
            </div>

            <div class="col-lg-12" style="margin-top:3%;">
                <div class="col-lg-12"><input type="submit" value="Editar" style="background:#ffa300; margin-left:40%; color:white; border:1px solid; border-color:#ffa300;"/></div>
       
            </div>

          </div>
        </form>
        </div>
    </section>
                                    </div>
                                
                                <div class="card card-bordered" style="margin-top:15px;">
                                <section id="page-content" style="background:white;">
            <div class="container">
                <!-- Gallery -->
                <div style="text-align:center;" >
                    <h2> Fachada del Negocio</h2>
                </div>
                    <div class="grid-9-columns" data-margin="10" data-item="grid-item" >
                        <?php if($fachada != "") { ?>
                        <div class="grid-item" style="margin-top:4%; margin-right:10%;">
                            <img src="../images/fachadas/<?php echo $fachada; ?>">
                        </div>
                        <?php   } ?>
                    </div>
                    <div class="row" >
                        <form method="POST" enctype="multipart/form-data">
                                <div class="col-lg-4">
                                    <input type="text" value="<?php echo $id; ?>" name="idTiendaFachadaEdit" style="display:none;"/>
                                    <input type="file" name="fachadaEdit"/>
                                    <input type="text" value="<?php echo $fachada; ?>" name="fachada" style="display:none;"/>
                                </div>

                                <div class="col-lg-12" style="margin-top:3%;">
                                    <input type="submit" value="Editar" style="background:#ffa300;  color:white; border:1px solid; border-color:#ffa300;"/>
                                </div>
                        </form>
                    </div>
                <!-- end: Gallery -->
            </div>
        </section> <!-- end: Content -->
                                </div>

                                <div class="card card-bordered" style="margin-top:15px;">
                                <section id="page-content" style="background:white;">
            <div class="container">
                <!-- Gallery -->
                <div style="text-align:center;" >
                    <h2> Te presentamos nuestra galería</h2>
                </div>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="col-lg-12">
                            <input type="text" value="<?php echo $id; ?>" name="idTiendaGaleriaEdit" style="display:none;"/>
                            
                            <div class="grid-3-columns" data-margin="10" data-item="grid-item" >
                                <?php if($image1 != "") { ?>
                                <div class="grid-item" style="margin-top:4%; margin-right:10%;">
                                    <span style="font-weight:bold;">Imagen 1</span>
                                    <img src="../images/imagenMerkados/<?php echo $image1; ?>">
                                    <input type="file" name="galeriaEdit1"/>
                                    <input type="text" value="<?php echo $image1; ?>" name="galeriaEdit1" style="display:none;"/>  
                                </div>
                                <?php   } 
                                else{ ?>
                                    <div class="grid-item" style="margin-top:4%; margin-right:10%;">
                                        <span style="font-weight:bold;">Imagen 1</span>
                                        <input type="file" name="galeriaEdit1"/>
                                    </div>
                            <?php }?>

                                <?php if($image2 != "") { ?>
                                <div class="grid-item" style="margin-top:4%; margin-right:10%;">
                                    <span style="font-weight:bold;">Imagen 2</span>
                                    <img src="../images/imagenMerkados/<?php echo $image2; ?>">
                                    <input type="file" name="galeriaEdit2"/>
                                    <input type="text" value="<?php echo $image2; ?>" name="galeriaEdit2" style="display:none;"/>  
                                </div>
                                <?php   } 
                                else{ ?>
                                    <div class="grid-item" style="margin-top:4%; margin-right:10%;">
                                        <span style="font-weight:bold;">Imagen 2</span>
                                        <input type="file" name="galeriaEdit2"/>
                                    </div>
                            <?php }?>
                                
                                <?php if($image3 != "") { ?>
                                    <div class="grid-item" style="margin-top:4%; margin-right:10%;">
                                    <span style="font-weight:bold;">Imagen 3</span>
                                    <img src="../images/imagenMerkados/<?php echo $image3; ?>">
                                    <input type="file" name="galeriaEdit3"/>
                                    <input type="text" value="<?php echo $image3; ?>" name="galeriaEdit3" style="display:none;"/>  
                                </div>
                                <?php   } 
                                else{ ?>
                                    <div class="grid-item" style="margin-top:4%; margin-right:10%;">
                                        <span style="font-weight:bold;">Imagen 3</span>
                                        <input type="file" name="galeriaEdit3"/>
                                    </div>
                            <?php }?>

                                <?php if($image4 != "") { ?>
                                    <div class="grid-item" style="margin-top:4%; margin-right:10%;">
                                    <span style="font-weight:bold;">Imagen 4</span>
                                    <img src="../images/imagenMerkados/<?php echo $image4; ?>">
                                    <input type="file" name="galeriaEdit4"/>
                                    <input type="text" value="<?php echo $image4; ?>" name="galeriaEdit4" style="display:none;"/>  
                                </div>
                                <?php   } 
                                else{ ?>
                                    <div class="grid-item" style="margin-top:4%; margin-right:10%;">
                                        <span style="font-weight:bold;">Imagen 4</span>
                                        <input type="file" name="galeriaEdit4"/>
                                    </div>
                            <?php }?>

                                <?php if($image5 != "") { ?>
                                    <div class="grid-item" style="margin-top:4%; margin-right:10%;">
                                    <span style="font-weight:bold;">Imagen 5</span>
                                    <img src="../images/imagenMerkados/<?php echo $image5; ?>">
                                    <input type="file" name="galeriaEdit5"/>
                                    <input type="text" value="<?php echo $image5; ?>" name="galeriaEdit5" style="display:none;"/>  
                                </div>
                                <?php   } 
                                else{ ?>
                                    <div class="grid-item" style="margin-top:4%; margin-right:10%;">
                                        <span style="font-weight:bold;">Imagen 5</span>
                                        <input type="file" name="galeriaEdit5"/>
                                    </div>
                            <?php }?>

                            </div>

                        </div>

                        <div class="col-lg-12" style="margin-top:3%; float:left; margin-left:40%;">
                            <input type="submit" value="Editar" style="background:#ffa300;  color:white; border:1px solid; border-color:#ffa300;"/>
                        </div>
                    </form>
                
                
                <!-- end: Gallery -->
            </div>
        </section> <!-- end: Content -->
                                </div>
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                           
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- @@ Profile Edit Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Información de mi Negocio</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal">Personal</a>
                        </li>
                        
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <form method="POST">
                            <div class="tab-pane active" id="personal">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name">Nombre</label>
                                            <input type="text" class="form-control form-control-lg" id="full-name" name="name" value="<?php echo $name; ?>" placeholder="Enter Full name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="display-name">Apellido</label>
                                            <input type="text" class="form-control form-control-lg" id="display-name" name="apellido" value="<?php echo $apellido; ?>" placeholder="Enter display name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="phone-no">Teléfono</label>
                                            <input type="text" class="form-control form-control-lg" id="phone-no" name="telefono" value="<?php echo $telefono; ?>" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="birth-day">Correo Electrónico</label>
                                            <input type="text" class="form-control form-control-lg" id="birth-day" disabled name="correoBlock"  value="<?php echo $correo; ?>">
                                            <input type="text" class="form-control form-control-lg" id="birth-day" style="display:none;" name="correo"  value="<?php echo $correo; ?>">
                                        </div>
                                    </div>
                                
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <a href="html/general/user-profile-regular.php?correo=<?php echo $correo; ?>" > <input style="background:#ffb800; border-radius:10px; border-color:#ffb800; color: black; font-weight:bold;" type="submit" value="Actualizar"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .tab-pane -->
                        </form>
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
               
            </div>
            <!-- wrap @e -->
<?php
Page::complement();
?>