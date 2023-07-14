<?php

if(isset($_GET["id_Editar"]))
{
    $id_Editar = $_GET["id_Editar"];
    echo "<script>console.log('ID_EDITAR: " . $id_Editar . "' );</script>";
    if(isset($_GET["status"]))
    {
        $statusEdit = $_GET["status"];
    }
    else
    {
        $statusEdit = "";
    }

    $queryTienda = "select * from tiendas where id = '$id_Editar';";
    $tienda = mysqli_query($conection,$queryTienda);

    while ($row = mysqli_fetch_assoc($tienda)) {

        //INFORMATION PART 1
        $logoEdit = $row['logo'];
        $nombreTiendaEdit = $row['nombreTienda'];
        $descriptionEdit = $row['descripcion'];
        $catalogoEdit = $row['catalogo'];

        //INFORMATION PART 2
        $encargadoNombreEditar2 = $row['nombrePersonaSucursal'];
        $encargadoApellidoEditar2 = $row['apellidoPersonaSucursal'];
        $codigoPostalEditar2 = $row['codigoPostal'];
        $direccionEditar2 = $row['direccion'];
        $paginaWebEditar2 = $row['paginaWeb'];
        $ciudadEditar2 = $row['ciudad'];
        $estadoEditar2 = $row['estado'];
        $coloniaEditar2 = $row['colonia'];
        $horariosEditar2 = $row['horarios'];
        $tiempoEnvioEditar2 = $row['tiempoEnvio'];
        $facturaEditar2 = $row['factura'];
        $emailEditar2 = $row['email'];
        $whatsaapEditar2 = $row['whatsaap'];
        $facebookEditar2 = $row['linkFacebook'];
        $socialEditar2 = $row['redSocial'];
        $metodoPagoEditar2 = $row['metodoPago'];
        $tiposEntregaEditar2 = $row['tiposEntrega'];
        $costoEnvioEditar2 = $row['costoEnvio'];
        $descripcionEnvioEditar2 = $row['descripcionEnvio'];

        //INFORMATION PART 3
        $categoriaEditar3 = $row['giro'];

        //INFORMATION PART 4
        $fachada = $row['fotoNegocio'];
        $image1 = $row['imagen1'];
        $image2 = $row['imagen2'];
        $image3 = $row['imagen3'];
        $image4 = $row['imagen4'];
        $image5 = $row['imagen5'];
    

        /**
         * 
         * PART 1 FUNCTIOLALITY
         * 
         */
        if(isset($_POST["newDescription"]))
        {
            $newDescription = $_POST["newDescription"];
            $idMrkado = $_POST["idMrkado"];
            $nombreTiendaUpdate = $_POST["nombreTienda"];

            if($_FILES['newLogoName']['name'] == "")
            {
                $currentLogo = $_POST["currentLogoName"];

                $queryUpdate = "UPDATE tiendas SET descripcion = '$newDescription', nombreTienda = '$nombreTiendaUpdate' WHERE id = '$idMrkado'";

                mysqli_query($conection, $queryUpdate);

                $testing = $_FILES['catalogoEdit']['name'];

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

                //header("Location: index.php?user=$correo&type=$usuarioTipo&result=edited&op=negocios");
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
                $directorioLogo ="../../../images/Logos";

                $guardado = $_FILES['newLogoName']['tmp_name'];
            
                if(file_exists($directorioLogo))
                {
                    move_uploaded_file($guardado, $directorioLogo."/".$newLogoNombreCompleto);
                }

                $queryUpdate = "UPDATE tiendas SET descripcion = '$newDescription', nombreTienda = '$nombreTienda', logo = '$newLogoNombreCompleto' WHERE id = '$idMrkado'";
                mysqli_query($conection, $queryUpdate);

                $testing = $_FILES['catalogoEdit']['name'];

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

                //header("Location: index.php?user=$correo&type=$usuarioTipo&result=op=negocios");
            }



        }
        else
        {
            $newDescription = "";
        }

        
        /**
         * 
         * PART 2 FUNCTIONABILITY
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
            $emailEditar2 = $_POST["correoEditar"];
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
            echo "<script>console.log('idTiendaEdit: " . $idTiendaEdit . "' );</script>";
            echo "<script>console.log('nombreEncargado: " . $nombreEncargado . "' );</script>";

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


            $queryUpdate = "UPDATE tiendas SET nombrePersonaSucursal = '$nombreEncargado', codigoPostal = '$codigoP', email = '$emailEditar2', apellidoPersonaSucursal = '$apellidoEncargado', paginaWeb = '$paginaWeb', redSocial = '$redes', direccion = '$direccion', estado = '$estado', ciudad = '$ciudad', colonia = '$colonia', metodoPago = '$metodoPago', tiposEntrega = '$metodoEnvio', costoEnvio = '$costoEnvio', descripcionEnvio = '$detalleEnvio', tiempoEnvio = '$tiempoEnvio', factura = '$factura', whatsaap = '$editWhat', linkFacebook = '$editFace', horarios = '$horarios'  WHERE id = '$idTiendaEdit'";

            mysqli_query($conection, $queryUpdate);
            header("Location: index.php?user=$correo&type=$usuarioTipo&op=satisfactorio");
        }
        else
        {

        }

        /**
         * FUNCTIONABILITY PART 3
         */
        if(isset($_POST["idTiendaEditCatPart3"]))
        {
            $categoriaEdi = $_POST["categoriaEdit"];

            //$subcats = $subcat1.",".$subcat2.",".$subcat3.",".$subcat4;

            $categoriaEditPart3 = $_POST["categoriaEditPart3"];

            
            $queryUpdate = "UPDATE tiendas SET giro = '$categoriaEdi' WHERE id = '$categoriaEditPart3'";

            mysqli_query($conection, $queryUpdate);
            header("Location: index.php?user=$correo&type=$usuarioTipo&op=satisfactorio");
        }

        /**
         * FUNCTIONALITY PART 4
         */
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
        header("Location: index.php?user=$correo&type=$usuarioTipo&op=satisfactorio");
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
        $directorioLogo ="../../../images/imagenMrkados";

        $guardado = $_FILES['galeriaEdit1']['tmp_name'];
    
        if(file_exists($directorioLogo))
        {
            move_uploaded_file($guardado, $directorioLogo."/".$newLogoNombreCompleto);
        }

        $queryUpdate = "UPDATE tiendas SET imagen1 = '$newLogoNombreCompleto' WHERE id = '$id'";

        mysqli_query($conection, $queryUpdate);
        header("Location: index.php?user=$correo&type=$usuarioTipo&op=satisfactorio");
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
        $directorioLogo ="../../../images/imagenMrkados";

        $guardado = $_FILES['galeriaEdit2']['tmp_name'];
    
        if(file_exists($directorioLogo))
        {
            move_uploaded_file($guardado, $directorioLogo."/".$newLogoNombreCompleto);
        }

        $queryUpdate = "UPDATE tiendas SET imagen2 = '$newLogoNombreCompleto' WHERE id = '$id'";

        mysqli_query($conection, $queryUpdate);
        header("Location: index.php?user=$correo&type=$usuarioTipo&op=satisfactorio");
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
        $directorioLogo ="../../../images/imagenMrkados";

        $guardado = $_FILES['galeriaEdit3']['tmp_name'];
    
        if(file_exists($directorioLogo))
        {
            move_uploaded_file($guardado, $directorioLogo."/".$newLogoNombreCompleto);
        }

        $queryUpdate = "UPDATE tiendas SET imagen3 = '$newLogoNombreCompleto' WHERE id = '$id'";

        mysqli_query($conection, $queryUpdate);
        header("Location: index.php?user=$correo&type=$usuarioTipo&op=satisfactorio");
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
        $directorioLogo ="../../../images/imagenMrkados";

        $guardado = $_FILES['galeriaEdit4']['tmp_name'];
    
        if(file_exists($directorioLogo))
        {
            move_uploaded_file($guardado, $directorioLogo."/".$newLogoNombreCompleto);
        }

        $queryUpdate = "UPDATE tiendas SET imagen4 = '$newLogoNombreCompleto' WHERE id = '$id'";

        mysqli_query($conection, $queryUpdate);
        header("Location: index.php?user=$correo&type=$usuarioTipo&op=satisfactorio");
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
        $directorioLogo ="../../../images/imagenMrkados";

        $guardado = $_FILES['galeriaEdit5']['tmp_name'];
    
        if(file_exists($directorioLogo))
        {
            move_uploaded_file($guardado, $directorioLogo."/".$newLogoNombreCompleto);
        }

        $queryUpdate = "UPDATE tiendas SET imagen5 = '$newLogoNombreCompleto' WHERE id = '$id'";

        mysqli_query($conection, $queryUpdate);
        header("Location: index.php?user=$correo&type=$usuarioTipo&op=satisfactorio");
    }
}

        // END FUNCIONALIDAD
    }
}
else
{
    $id_Editar = "";
    $logoEdit = "";
    $nombreTiendaEdit = "";
    $descriptionEdit = "";
    $catalogoEdit = "";
    $statusEdit = "";

            //INFORMATION PART 2
            $encargadoNombreEditar2 = "";
            $encargadoApellidoEditar2 = "";
            $codigoPostalEditar2 = "";
            $direccionEditar2 = "";
            $paginaWebEditar2 = "";
            $ciudadEditar2 = "";
            $estadoEditar2 = "";
            $coloniaEditar2 = "";
            $horariosEditar2 = "";
            $tiempoEnvioEditar2 = "";
            $facturaEditar2 = "";
            $emailEditar2 = "";
            $whatsaapEditar2 = "";
            $facebookEditar2 = "";
            $socialEditar2 = "";
            $metodoPagoEditar2 = "";
            $tiposEntregaEditar2 = "";
            $costoEnvioEditar2 = "";
            $descripcionEnvioEditar2 = "";

            //INFORMATION PART 3
            $categoriaEditar3 = "";

            //INFORMATION PART 4
            $fachada = "";
            $image1 = "";
            $image2 = "";
            $image3 = "";
            $image4 = "";
            $image5 = "";


}


?>