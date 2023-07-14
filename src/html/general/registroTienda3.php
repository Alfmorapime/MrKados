<?php
require_once('header.php');

$correo = $_GET["user"];

if(isset($_GET["type"]))
{
    $usuarioTipo = $_GET["type"];
}
else
{
    $usuarioTipo = "";
}

if(isset($_GET["id"]))
{
    $id_tienda = $_GET["id"];
}
else
{
    $id_tienda = "";
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
    $fecha = $row['fechaRegistro'];
    $idUser = $row['id'];
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


    if($_FILES["galeria1"]['name']  != "")
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

    header("Location: index.php?user=$correo&type=$usuarioTipo");
}  

if(isset($_POST["usuID"]))
{
    $usuarioID = $_POST['usuID'];
    $chequeo = 1;
    mysqli_query($conection,"UPDATE notificaciones_tienda SET chequeo = $chequeo WHERE id_user_tienda = $usuarioID");
    //header( 'Location: detalleTienda.php?correo=$user&id=$id_tienda' ) ;
    header("Location:  registroTienda.php?user=$correo&type=$usuarioTipo");
}

Page::header($correo, $usuarioTipo, $name, $apellido, $idUser, $conection);
?> 
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Registra tu Negocio Ahora</h3>
                                <div class="nk-block-des text-soft">
                                <!--  <p>Welcome to DashLite Dashboard Template.</p> -->
                                </div>
                            </div><!-- .nk-block-head-content -->
                                            
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                        
                                        
                            <!-- FORMULARIO NEGOCIO -->

                                <!-- SECTION -->
                                    <!-- Section -->
                                <section>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-8 center no-padding">
                                                    <form class="form-transparent-grey" method="POST" enctype="multipart/form-data">
                                                        <div class="row" style="width:100%; margin-left:5%;">
                                                            <div class="col-12 form-group">
                                                                <label style="color: black; font-weight: bold; font-size: 14px; ">SECCION 3 - INFORMACIÓN DE TU NEGOCIO</label>
                                                            </div>
                                                            <div class="col-12 form-group">
                                                                <label style="color: black; font-weight: bold; font-size: 11px; ">NOMBRE DEL ENCARGADO DE SUCURSAL</label>
                                                            </div>
                                                            <div class="col-6 form-group">
                                                                <input type="text" name="nombreEncargado" placeholder="Escribe su nombre" class="form-control">
                                                            </div>
                                                            <div class="col-6 form-group">
                                                                <input type="text" name="apellidoEncargado" placeholder="Apellidos" class="form-control">
                                                            </div>
                                                            <div class="col-12 form-group">
                                                                <label style="color: black; font-weight: bold; font-size: 11px; margin-top: 3%;">DIRECCIÓN DEL NEGOCIO</label>
                                                            </div>
                                                            <div class="col-6 form-group">   
                                                                <input type="text" name="direccionNegocio" placeholder="Escribe la calle y número interior y/o exterior" class="form-control">
                                                            </div>
                                                            <div class="col-6 form-group">
                                                                <input type="text" name="codigopostal" placeholder="Escribe tu C.P." class="form-control"> 
                                                            </div>
                                                            <div class="col-lg-12 form-group">
                                                                <input type="text" name="googleMap" placeholder="Escribe el link de Google Maps" class="form-control" > 
                                                            </div>
                                                            <div class="col-lg-4 form-group">
                                                                <select name="estado" size="number_of_options">
                                                                                <?php 
                                                                                    $query_estado = "SELECT * FROM estado";
                                                                                    $result_estados = mysqli_query($conection,$query_estado);
                                                                                
                                                                                
                                                                                ?>
                                                                                <option value="">SELECCIONA TU ESTADO</option>
                                                                                <?php  while ($row = mysqli_fetch_assoc($result_estados)) { ?>
                                                                                <option value="<?php echo utf8_encode($row['nombre']); ?>"><?php echo utf8_encode($row['nombre']); ?></option>
                                                                                <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-4 form-group">
                                                            <?php 
                                                                                $query_ciudad = "SELECT * FROM ciudad";
                                                                                $result_ciudades = mysqli_query($conection,$query_ciudad);
                                                                            
                                                                            
                                                                            ?>
                                                                        <select name="ciudad" size="number_of_options">
                                                                            <option value="">SELECCIONA TU CIUDAD</option>
                                                                            <?php  while ($row = mysqli_fetch_assoc($result_ciudades)) { ?>
                                                                            <option value="<?php echo utf8_encode($row['nombre']); ?>"><?php echo utf8_encode($row['nombre']); ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                            </div>
                                                            <div class="col-lg-4 form-group">
                                                            <?php 
                                                                                $query_colonia = "SELECT * FROM colonia order by nombre ASC";
                                                                                $result_colonias = mysqli_query($conection,$query_colonia);
                                                                            
                                                                            
                                                                            ?>
                                                                                <select name="colonia" size="number_of_options">
                                                                                    <option value="option1">SELECCIONA TU COLONIA</option>
                                                                                    <?php  while ($row = mysqli_fetch_assoc($result_colonias)) { ?>
                                                                                <option value="<?php echo utf8_encode($row['nombre']); ?>"><?php echo utf8_encode($row['nombre']); ?></option>
                                                                                <?php } ?>
                                                                                </select>
                                                            </div>
                                                        </div>
                                                            <!-- Bloque que muestra el horario del negocio-->
                                                        <div class="row" style="width:100%; margin-left:5%;">
                                                            <div class="col-lg-12 form-group">
                                                                <label style="font-weight:bold; color: black; font-size: 11px; margin-top: 3%;">HORARIO DE ATENCIÓN</label>
                                                            </div>
                                                            <!-- lunes -->
                                                            <div class="col-lg-2 form-group">
                                                                <label style="color: black; font-size: 11px; margin-top: 6%;">Lunes </label>
                                                            </div>
                                                            <div class="col-lg-1 form-group">
                                                                <h4 style=" font-size: 11px; margin-top: 17%;">De </h4>
                                                            </div>
                                                            <div class="col-lg-2 form-group">
                                                                <select name="lunesH" class="form-control" >
                                                                    <option value="---"></option>
                                                                    <option value="00:00">00:00</option>
                                                                    <option value="00:30">00:30</option>
                                                                    <option value="01:00">01:00</option>
                                                                    <option value="01:30">01:30</option>
                                                                    <option value="02:00">02:00</option>
                                                                    <option value="02:30">02:30</option>
                                                                    <option value="03:00">03:00</option>
                                                                    <option value="03:30">03:30</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="04:30">04:30</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="05:30">05:30</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="06:30">06:30</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="07:30">07:30</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="08:30">08:30</option>
                                                                    <option value="09:00">09:00</option>
                                                                    <option value="09:30">09:30</option>
                                                                    <option value="10:00">10:00</option>
                                                                    <option value="10:30">10:30</option>
                                                                    <option value="11:00">11:00</option>
                                                                    <option value="11:30">11:30</option>
                                                                    <option value="12:00">12:00</option>
                                                                    <option value="12:30">12:30</option>
                                                                    <option value="13:00">13:00</option>
                                                                    <option value="13:30">13:30</option>
                                                                    <option value="14:00">14:00</option>
                                                                    <option value="14:30">14:30</option>
                                                                    <option value="15:00">15:00</option>
                                                                    <option value="15:30">15:30</option>
                                                                    <option value="16:00">16:00</option>
                                                                    <option value="16:30">16:30</option>
                                                                    <option value="17:00">17:00</option>
                                                                    <option value="17:30">17:30</option>
                                                                    <option value="18:00">18:00</option>
                                                                    <option value="18:30">18:30</option>
                                                                    <option value="19:00">19:00</option>
                                                                    <option value="19:30">19:30</option>
                                                                    <option value="20:00">20:00</option>
                                                                    <option value="20:30">20:30</option>
                                                                    <option value="21:00">21:00</option>
                                                                    <option value="21:30">21:30</option>
                                                                    <option value="22:00">22:00</option>
                                                                    <option value="22:30">22:30</option>
                                                                    <option value="23:00">23:00</option>
                                                                    <option value="23:30">23:30</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-1 form-group">
                                                                <h4 style=" font-size: 11px; margin-top: 17%;">a </h4>
                                                            </div>
                                                            <div class="col-lg-2 form-group">
                                                                    <select name="lunesC" class="form-control">
                                                                    <option value="---"></option>
                                                                    <option value="00:00">00:00</option>
                                                                    <option value="00:30">00:30</option>
                                                                    <option value="01:00">01:00</option>
                                                                    <option value="01:30">01:30</option>
                                                                    <option value="02:00">02:00</option>
                                                                    <option value="02:30">02:30</option>
                                                                    <option value="03:00">03:00</option>
                                                                    <option value="03:30">03:30</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="04:30">04:30</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="05:30">05:30</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="06:30">06:30</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="07:30">07:30</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="08:30">08:30</option>
                                                                    <option value="09:00">09:00</option>
                                                                    <option value="09:30">09:30</option>
                                                                    <option value="10:00">10:00</option>
                                                                    <option value="10:30">10:30</option>
                                                                    <option value="11:00">11:00</option>
                                                                    <option value="11:30">11:30</option>
                                                                    <option value="12:00">12:00</option>
                                                                    <option value="12:30">12:30</option>
                                                                    <option value="13:00">13:00</option>
                                                                    <option value="13:30">13:30</option>
                                                                    <option value="14:00">14:00</option>
                                                                    <option value="14:30">14:30</option>
                                                                    <option value="15:00">15:00</option>
                                                                    <option value="15:30">15:30</option>
                                                                    <option value="16:00">16:00</option>
                                                                    <option value="16:30">16:30</option>
                                                                    <option value="17:00">17:00</option>
                                                                    <option value="17:30">17:30</option>
                                                                    <option value="18:00">18:00</option>
                                                                    <option value="18:30">18:30</option>
                                                                    <option value="19:00">19:00</option>
                                                                    <option value="19:30">19:30</option>
                                                                    <option value="20:00">20:00</option>
                                                                    <option value="20:30">20:30</option>
                                                                    <option value="21:00">21:00</option>
                                                                    <option value="21:30">21:30</option>
                                                                    <option value="22:00">22:00</option>
                                                                    <option value="22:30">22:30</option>
                                                                    <option value="23:00">23:00</option>
                                                                    <option value="23:30">23:30</option>
                                                                    </select>
                                                            </div>
                                                            <div class="col-lg-1 form-group">
                                                                <input type="checkbox" name="cerradoLunes" class="form-control" >
                                                            </div>
                                                            <div class="col-lg-1 form-group">
                                                                <h4 style=" font-size: 11px; margin-top: 30%;">Cerrado </h4>
                                                            </div>
                                                            <div class="col-lg-2 form-group"></div>
                                                            <!-- Fin Lunes-->

                                                            <!-- Martes -->
                                                            <div class="col-lg-2 form-group">
                                                                <label style="color: black; font-size: 11px; margin-top: 6%;">Martes </label>
                                                            </div>
                                                            <div class="col-lg-1 form-group">
                                                                <h4 style=" font-size: 11px; margin-top: 17%;">De </h4>
                                                            </div>
                                                            <div class="col-lg-2 form-group">
                                                                <select name="martesH" class="form-control">
                                                                <option value="---"></option>
                                                                    <option value="00:00">00:00</option>
                                                                    <option value="00:30">00:30</option>
                                                                    <option value="01:00">01:00</option>
                                                                    <option value="01:30">01:30</option>
                                                                    <option value="02:00">02:00</option>
                                                                    <option value="02:30">02:30</option>
                                                                    <option value="03:00">03:00</option>
                                                                    <option value="03:30">03:30</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="04:30">04:30</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="05:30">05:30</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="06:30">06:30</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="07:30">07:30</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="08:30">08:30</option>
                                                                    <option value="09:00">09:00</option>
                                                                    <option value="09:30">09:30</option>
                                                                    <option value="10:00">10:00</option>
                                                                    <option value="10:30">10:30</option>
                                                                    <option value="11:00">11:00</option>
                                                                    <option value="11:30">11:30</option>
                                                                    <option value="12:00">12:00</option>
                                                                    <option value="12:30">12:30</option>
                                                                    <option value="13:00">13:00</option>
                                                                    <option value="13:30">13:30</option>
                                                                    <option value="14:00">14:00</option>
                                                                    <option value="14:30">14:30</option>
                                                                    <option value="15:00">15:00</option>
                                                                    <option value="15:30">15:30</option>
                                                                    <option value="16:00">16:00</option>
                                                                    <option value="16:30">16:30</option>
                                                                    <option value="17:00">17:00</option>
                                                                    <option value="17:30">17:30</option>
                                                                    <option value="18:00">18:00</option>
                                                                    <option value="18:30">18:30</option>
                                                                    <option value="19:00">19:00</option>
                                                                    <option value="19:30">19:30</option>
                                                                    <option value="20:00">20:00</option>
                                                                    <option value="20:30">20:30</option>
                                                                    <option value="21:00">21:00</option>
                                                                    <option value="21:30">21:30</option>
                                                                    <option value="22:00">22:00</option>
                                                                    <option value="22:30">22:30</option>
                                                                    <option value="23:00">23:00</option>
                                                                    <option value="23:30">23:30</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-1 form-group">
                                                                <h4 style=" font-size: 11px; margin-top: 17%;">a </h4>
                                                            </div>
                                                            <div class="col-lg-2 form-group">
                                                                <select name="martesC" class="form-control">
                                                                <option value="---"></option>
                                                                    <option value="00:00">00:00</option>
                                                                    <option value="00:30">00:30</option>
                                                                    <option value="01:00">01:00</option>
                                                                    <option value="01:30">01:30</option>
                                                                    <option value="02:00">02:00</option>
                                                                    <option value="02:30">02:30</option>
                                                                    <option value="03:00">03:00</option>
                                                                    <option value="03:30">03:30</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="04:30">04:30</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="05:30">05:30</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="06:30">06:30</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="07:30">07:30</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="08:30">08:30</option>
                                                                    <option value="09:00">09:00</option>
                                                                    <option value="09:30">09:30</option>
                                                                    <option value="10:00">10:00</option>
                                                                    <option value="10:30">10:30</option>
                                                                    <option value="11:00">11:00</option>
                                                                    <option value="11:30">11:30</option>
                                                                    <option value="12:00">12:00</option>
                                                                    <option value="12:30">12:30</option>
                                                                    <option value="13:00">13:00</option>
                                                                    <option value="13:30">13:30</option>
                                                                    <option value="14:00">14:00</option>
                                                                    <option value="14:30">14:30</option>
                                                                    <option value="15:00">15:00</option>
                                                                    <option value="15:30">15:30</option>
                                                                    <option value="16:00">16:00</option>
                                                                    <option value="16:30">16:30</option>
                                                                    <option value="17:00">17:00</option>
                                                                    <option value="17:30">17:30</option>
                                                                    <option value="18:00">18:00</option>
                                                                    <option value="18:30">18:30</option>
                                                                    <option value="19:00">19:00</option>
                                                                    <option value="19:30">19:30</option>
                                                                    <option value="20:00">20:00</option>
                                                                    <option value="20:30">20:30</option>
                                                                    <option value="21:00">21:00</option>
                                                                    <option value="21:30">21:30</option>
                                                                    <option value="22:00">22:00</option>
                                                                    <option value="22:30">22:30</option>
                                                                    <option value="23:00">23:00</option>
                                                                    <option value="23:30">23:30</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-1 form-group">
                                                                <input type="checkbox" name="cerradoMartes" class="form-control" >
                                                            </div>
                                                            <div class="col-lg-1 form-group">
                                                                <h4 style=" font-size: 11px; margin-top: 30%;">Cerrado </h4>
                                                            </div>
                                                            <div class="col-lg-2 form-group"></div>
                                                            <!-- Fin Martes-->

                                                                <!-- Miercoles -->
                                                                <div class="col-lg-2 form-group">
                                                                    <label style="color: black; font-size: 11px; margin-top: 6%;">Miercoles </label>
                                                                </div>
                                                                <div class="col-lg-1 form-group">
                                                                    <h4 style=" font-size: 11px; margin-top: 17%;">De </h4>
                                                                </div>
                                                                <div class="col-lg-2 form-group">
                                                                    <select name="miercolesH" class="form-control">
                                                                    <option value="---"></option>
                                                                    <option value="00:00">00:00</option>
                                                                    <option value="00:30">00:30</option>
                                                                    <option value="01:00">01:00</option>
                                                                    <option value="01:30">01:30</option>
                                                                    <option value="02:00">02:00</option>
                                                                    <option value="02:30">02:30</option>
                                                                    <option value="03:00">03:00</option>
                                                                    <option value="03:30">03:30</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="04:30">04:30</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="05:30">05:30</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="06:30">06:30</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="07:30">07:30</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="08:30">08:30</option>
                                                                    <option value="09:00">09:00</option>
                                                                    <option value="09:30">09:30</option>
                                                                    <option value="10:00">10:00</option>
                                                                    <option value="10:30">10:30</option>
                                                                    <option value="11:00">11:00</option>
                                                                    <option value="11:30">11:30</option>
                                                                    <option value="12:00">12:00</option>
                                                                    <option value="12:30">12:30</option>
                                                                    <option value="13:00">13:00</option>
                                                                    <option value="13:30">13:30</option>
                                                                    <option value="14:00">14:00</option>
                                                                    <option value="14:30">14:30</option>
                                                                    <option value="15:00">15:00</option>
                                                                    <option value="15:30">15:30</option>
                                                                    <option value="16:00">16:00</option>
                                                                    <option value="16:30">16:30</option>
                                                                    <option value="17:00">17:00</option>
                                                                    <option value="17:30">17:30</option>
                                                                    <option value="18:00">18:00</option>
                                                                    <option value="18:30">18:30</option>
                                                                    <option value="19:00">19:00</option>
                                                                    <option value="19:30">19:30</option>
                                                                    <option value="20:00">20:00</option>
                                                                    <option value="20:30">20:30</option>
                                                                    <option value="21:00">21:00</option>
                                                                    <option value="21:30">21:30</option>
                                                                    <option value="22:00">22:00</option>
                                                                    <option value="22:30">22:30</option>
                                                                    <option value="23:00">23:00</option>
                                                                    <option value="23:30">23:30</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-1 form-group">
                                                                    <h4 style=" font-size: 11px; margin-top: 17%;">a </h4>
                                                                </div>
                                                                <div class="col-lg-2 form-group">
                                                                    <select name="miercolesC" class="form-control">
                                                                    <option value="---"></option>
                                                                    <option value="00:00">00:00</option>
                                                                    <option value="00:30">00:30</option>
                                                                    <option value="01:00">01:00</option>
                                                                    <option value="01:30">01:30</option>
                                                                    <option value="02:00">02:00</option>
                                                                    <option value="02:30">02:30</option>
                                                                    <option value="03:00">03:00</option>
                                                                    <option value="03:30">03:30</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="04:30">04:30</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="05:30">05:30</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="06:30">06:30</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="07:30">07:30</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="08:30">08:30</option>
                                                                    <option value="09:00">09:00</option>
                                                                    <option value="09:30">09:30</option>
                                                                    <option value="10:00">10:00</option>
                                                                    <option value="10:30">10:30</option>
                                                                    <option value="11:00">11:00</option>
                                                                    <option value="11:30">11:30</option>
                                                                    <option value="12:00">12:00</option>
                                                                    <option value="12:30">12:30</option>
                                                                    <option value="13:00">13:00</option>
                                                                    <option value="13:30">13:30</option>
                                                                    <option value="14:00">14:00</option>
                                                                    <option value="14:30">14:30</option>
                                                                    <option value="15:00">15:00</option>
                                                                    <option value="15:30">15:30</option>
                                                                    <option value="16:00">16:00</option>
                                                                    <option value="16:30">16:30</option>
                                                                    <option value="17:00">17:00</option>
                                                                    <option value="17:30">17:30</option>
                                                                    <option value="18:00">18:00</option>
                                                                    <option value="18:30">18:30</option>
                                                                    <option value="19:00">19:00</option>
                                                                    <option value="19:30">19:30</option>
                                                                    <option value="20:00">20:00</option>
                                                                    <option value="20:30">20:30</option>
                                                                    <option value="21:00">21:00</option>
                                                                    <option value="21:30">21:30</option>
                                                                    <option value="22:00">22:00</option>
                                                                    <option value="22:30">22:30</option>
                                                                    <option value="23:00">23:00</option>
                                                                    <option value="23:30">23:30</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-1 form-group">
                                                                    <input type="checkbox" name="cerradoMiercoles" class="form-control" >
                                                                </div>
                                                                <div class="col-lg-1 form-group">
                                                                    <h4 style=" font-size: 11px; margin-top: 30%;">Cerrado </h4>
                                                                </div>
                                                                <div class="col-lg-2 form-group"></div>
                                                                <!-- Fin Miercoles-->

                                                        <!-- Jueves -->
                                                        <div class="col-lg-2 form-group">
                                                            <label style="color: black; font-size: 11px; margin-top: 6%;">Jueves </label>
                                                        </div>
                                                        <div class="col-lg-1 form-group">
                                                            <h4 style=" font-size: 11px; margin-top: 17%;">De </h4>
                                                        </div>
                                                        <div class="col-lg-2 form-group">
                                                            <select name="juevesH" class="form-control">
                                                            <option value="---"></option>
                                                                    <option value="00:00">00:00</option>
                                                                    <option value="00:30">00:30</option>
                                                                    <option value="01:00">01:00</option>
                                                                    <option value="01:30">01:30</option>
                                                                    <option value="02:00">02:00</option>
                                                                    <option value="02:30">02:30</option>
                                                                    <option value="03:00">03:00</option>
                                                                    <option value="03:30">03:30</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="04:30">04:30</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="05:30">05:30</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="06:30">06:30</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="07:30">07:30</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="08:30">08:30</option>
                                                                    <option value="09:00">09:00</option>
                                                                    <option value="09:30">09:30</option>
                                                                    <option value="10:00">10:00</option>
                                                                    <option value="10:30">10:30</option>
                                                                    <option value="11:00">11:00</option>
                                                                    <option value="11:30">11:30</option>
                                                                    <option value="12:00">12:00</option>
                                                                    <option value="12:30">12:30</option>
                                                                    <option value="13:00">13:00</option>
                                                                    <option value="13:30">13:30</option>
                                                                    <option value="14:00">14:00</option>
                                                                    <option value="14:30">14:30</option>
                                                                    <option value="15:00">15:00</option>
                                                                    <option value="15:30">15:30</option>
                                                                    <option value="16:00">16:00</option>
                                                                    <option value="16:30">16:30</option>
                                                                    <option value="17:00">17:00</option>
                                                                    <option value="17:30">17:30</option>
                                                                    <option value="18:00">18:00</option>
                                                                    <option value="18:30">18:30</option>
                                                                    <option value="19:00">19:00</option>
                                                                    <option value="19:30">19:30</option>
                                                                    <option value="20:00">20:00</option>
                                                                    <option value="20:30">20:30</option>
                                                                    <option value="21:00">21:00</option>
                                                                    <option value="21:30">21:30</option>
                                                                    <option value="22:00">22:00</option>
                                                                    <option value="22:30">22:30</option>
                                                                    <option value="23:00">23:00</option>
                                                                    <option value="23:30">23:30</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-1 form-group">
                                                            <h4 style=" font-size: 11px; margin-top: 17%;">a </h4>
                                                        </div>
                                                        <div class="col-lg-2 form-group">
                                                            <select name="juevesC" class="form-control">
                                                            <option value="---"></option>
                                                                    <option value="00:00">00:00</option>
                                                                    <option value="00:30">00:30</option>
                                                                    <option value="01:00">01:00</option>
                                                                    <option value="01:30">01:30</option>
                                                                    <option value="02:00">02:00</option>
                                                                    <option value="02:30">02:30</option>
                                                                    <option value="03:00">03:00</option>
                                                                    <option value="03:30">03:30</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="04:30">04:30</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="05:30">05:30</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="06:30">06:30</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="07:30">07:30</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="08:30">08:30</option>
                                                                    <option value="09:00">09:00</option>
                                                                    <option value="09:30">09:30</option>
                                                                    <option value="10:00">10:00</option>
                                                                    <option value="10:30">10:30</option>
                                                                    <option value="11:00">11:00</option>
                                                                    <option value="11:30">11:30</option>
                                                                    <option value="12:00">12:00</option>
                                                                    <option value="12:30">12:30</option>
                                                                    <option value="13:00">13:00</option>
                                                                    <option value="13:30">13:30</option>
                                                                    <option value="14:00">14:00</option>
                                                                    <option value="14:30">14:30</option>
                                                                    <option value="15:00">15:00</option>
                                                                    <option value="15:30">15:30</option>
                                                                    <option value="16:00">16:00</option>
                                                                    <option value="16:30">16:30</option>
                                                                    <option value="17:00">17:00</option>
                                                                    <option value="17:30">17:30</option>
                                                                    <option value="18:00">18:00</option>
                                                                    <option value="18:30">18:30</option>
                                                                    <option value="19:00">19:00</option>
                                                                    <option value="19:30">19:30</option>
                                                                    <option value="20:00">20:00</option>
                                                                    <option value="20:30">20:30</option>
                                                                    <option value="21:00">21:00</option>
                                                                    <option value="21:30">21:30</option>
                                                                    <option value="22:00">22:00</option>
                                                                    <option value="22:30">22:30</option>
                                                                    <option value="23:00">23:00</option>
                                                                    <option value="23:30">23:30</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-1 form-group">
                                                            <input type="checkbox" name="cerradoJueves" class="form-control" >
                                                        </div>
                                                        <div class="col-lg-1 form-group">
                                                            <h4 style=" font-size: 11px; margin-top: 30%;">Cerrado </h4>
                                                        </div>
                                                        <div class="col-lg-2 form-group"></div>
                                                        <!-- Fin Jueves-->
                                                    
                                                    <!-- Viernes -->
                                                    <div class="col-lg-2 form-group">
                                                        <label style="color: black; font-size: 11px; margin-top: 6%;">Viernes </label>
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <h4 style=" font-size: 11px; margin-top: 17%;">De </h4>
                                                    </div>
                                                    <div class="col-lg-2 form-group">
                                                        <select name="viernesH" class="form-control">
                                                        <option value="---"></option>
                                                                    <option value="00:00">00:00</option>
                                                                    <option value="00:30">00:30</option>
                                                                    <option value="01:00">01:00</option>
                                                                    <option value="01:30">01:30</option>
                                                                    <option value="02:00">02:00</option>
                                                                    <option value="02:30">02:30</option>
                                                                    <option value="03:00">03:00</option>
                                                                    <option value="03:30">03:30</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="04:30">04:30</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="05:30">05:30</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="06:30">06:30</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="07:30">07:30</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="08:30">08:30</option>
                                                                    <option value="09:00">09:00</option>
                                                                    <option value="09:30">09:30</option>
                                                                    <option value="10:00">10:00</option>
                                                                    <option value="10:30">10:30</option>
                                                                    <option value="11:00">11:00</option>
                                                                    <option value="11:30">11:30</option>
                                                                    <option value="12:00">12:00</option>
                                                                    <option value="12:30">12:30</option>
                                                                    <option value="13:00">13:00</option>
                                                                    <option value="13:30">13:30</option>
                                                                    <option value="14:00">14:00</option>
                                                                    <option value="14:30">14:30</option>
                                                                    <option value="15:00">15:00</option>
                                                                    <option value="15:30">15:30</option>
                                                                    <option value="16:00">16:00</option>
                                                                    <option value="16:30">16:30</option>
                                                                    <option value="17:00">17:00</option>
                                                                    <option value="17:30">17:30</option>
                                                                    <option value="18:00">18:00</option>
                                                                    <option value="18:30">18:30</option>
                                                                    <option value="19:00">19:00</option>
                                                                    <option value="19:30">19:30</option>
                                                                    <option value="20:00">20:00</option>
                                                                    <option value="20:30">20:30</option>
                                                                    <option value="21:00">21:00</option>
                                                                    <option value="21:30">21:30</option>
                                                                    <option value="22:00">22:00</option>
                                                                    <option value="22:30">22:30</option>
                                                                    <option value="23:00">23:00</option>
                                                                    <option value="23:30">23:30</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <h4 style=" font-size: 11px; margin-top: 17%;">a </h4>
                                                    </div>
                                                    <div class="col-lg-2 form-group">
                                                        <select name="viernesC" class="form-control">
                                                        <option value="---"></option>
                                                                    <option value="00:00">00:00</option>
                                                                    <option value="00:30">00:30</option>
                                                                    <option value="01:00">01:00</option>
                                                                    <option value="01:30">01:30</option>
                                                                    <option value="02:00">02:00</option>
                                                                    <option value="02:30">02:30</option>
                                                                    <option value="03:00">03:00</option>
                                                                    <option value="03:30">03:30</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="04:30">04:30</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="05:30">05:30</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="06:30">06:30</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="07:30">07:30</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="08:30">08:30</option>
                                                                    <option value="09:00">09:00</option>
                                                                    <option value="09:30">09:30</option>
                                                                    <option value="10:00">10:00</option>
                                                                    <option value="10:30">10:30</option>
                                                                    <option value="11:00">11:00</option>
                                                                    <option value="11:30">11:30</option>
                                                                    <option value="12:00">12:00</option>
                                                                    <option value="12:30">12:30</option>
                                                                    <option value="13:00">13:00</option>
                                                                    <option value="13:30">13:30</option>
                                                                    <option value="14:00">14:00</option>
                                                                    <option value="14:30">14:30</option>
                                                                    <option value="15:00">15:00</option>
                                                                    <option value="15:30">15:30</option>
                                                                    <option value="16:00">16:00</option>
                                                                    <option value="16:30">16:30</option>
                                                                    <option value="17:00">17:00</option>
                                                                    <option value="17:30">17:30</option>
                                                                    <option value="18:00">18:00</option>
                                                                    <option value="18:30">18:30</option>
                                                                    <option value="19:00">19:00</option>
                                                                    <option value="19:30">19:30</option>
                                                                    <option value="20:00">20:00</option>
                                                                    <option value="20:30">20:30</option>
                                                                    <option value="21:00">21:00</option>
                                                                    <option value="21:30">21:30</option>
                                                                    <option value="22:00">22:00</option>
                                                                    <option value="22:30">22:30</option>
                                                                    <option value="23:00">23:00</option>
                                                                    <option value="23:30">23:30</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <input type="checkbox" name="cerradoViernes" class="form-control" >
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <h4 style=" font-size: 11px; margin-top: 30%;">Cerrado </h4>
                                                    </div>
                                                    <div class="col-lg-2 form-group"></div>
                                                    <!-- Fin Viernes-->

                                                
                                                <!-- Sabado -->
                                                    <div class="col-lg-2 form-group">
                                                        <label style="color: black; font-size: 11px; margin-top: 6%;">Sabado </label>
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <h4 style=" font-size: 11px; margin-top: 17%;">De </h4>
                                                    </div>
                                                    <div class="col-lg-2 form-group">
                                                        <select name="sabadoH" class="form-control">
                                                        <option value="---"></option>
                                                                    <option value="00:00">00:00</option>
                                                                    <option value="00:30">00:30</option>
                                                                    <option value="01:00">01:00</option>
                                                                    <option value="01:30">01:30</option>
                                                                    <option value="02:00">02:00</option>
                                                                    <option value="02:30">02:30</option>
                                                                    <option value="03:00">03:00</option>
                                                                    <option value="03:30">03:30</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="04:30">04:30</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="05:30">05:30</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="06:30">06:30</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="07:30">07:30</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="08:30">08:30</option>
                                                                    <option value="09:00">09:00</option>
                                                                    <option value="09:30">09:30</option>
                                                                    <option value="10:00">10:00</option>
                                                                    <option value="10:30">10:30</option>
                                                                    <option value="11:00">11:00</option>
                                                                    <option value="11:30">11:30</option>
                                                                    <option value="12:00">12:00</option>
                                                                    <option value="12:30">12:30</option>
                                                                    <option value="13:00">13:00</option>
                                                                    <option value="13:30">13:30</option>
                                                                    <option value="14:00">14:00</option>
                                                                    <option value="14:30">14:30</option>
                                                                    <option value="15:00">15:00</option>
                                                                    <option value="15:30">15:30</option>
                                                                    <option value="16:00">16:00</option>
                                                                    <option value="16:30">16:30</option>
                                                                    <option value="17:00">17:00</option>
                                                                    <option value="17:30">17:30</option>
                                                                    <option value="18:00">18:00</option>
                                                                    <option value="18:30">18:30</option>
                                                                    <option value="19:00">19:00</option>
                                                                    <option value="19:30">19:30</option>
                                                                    <option value="20:00">20:00</option>
                                                                    <option value="20:30">20:30</option>
                                                                    <option value="21:00">21:00</option>
                                                                    <option value="21:30">21:30</option>
                                                                    <option value="22:00">22:00</option>
                                                                    <option value="22:30">22:30</option>
                                                                    <option value="23:00">23:00</option>
                                                                    <option value="23:30">23:30</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <h4 style=" font-size: 11px; margin-top: 17%;">a </h4>
                                                    </div>
                                                    <div class="col-lg-2 form-group">
                                                        <select name="sabadoC" class="form-control">
                                                        <option value="---"></option>
                                                                    <option value="00:00">00:00</option>
                                                                    <option value="00:30">00:30</option>
                                                                    <option value="01:00">01:00</option>
                                                                    <option value="01:30">01:30</option>
                                                                    <option value="02:00">02:00</option>
                                                                    <option value="02:30">02:30</option>
                                                                    <option value="03:00">03:00</option>
                                                                    <option value="03:30">03:30</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="04:30">04:30</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="05:30">05:30</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="06:30">06:30</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="07:30">07:30</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="08:30">08:30</option>
                                                                    <option value="09:00">09:00</option>
                                                                    <option value="09:30">09:30</option>
                                                                    <option value="10:00">10:00</option>
                                                                    <option value="10:30">10:30</option>
                                                                    <option value="11:00">11:00</option>
                                                                    <option value="11:30">11:30</option>
                                                                    <option value="12:00">12:00</option>
                                                                    <option value="12:30">12:30</option>
                                                                    <option value="13:00">13:00</option>
                                                                    <option value="13:30">13:30</option>
                                                                    <option value="14:00">14:00</option>
                                                                    <option value="14:30">14:30</option>
                                                                    <option value="15:00">15:00</option>
                                                                    <option value="15:30">15:30</option>
                                                                    <option value="16:00">16:00</option>
                                                                    <option value="16:30">16:30</option>
                                                                    <option value="17:00">17:00</option>
                                                                    <option value="17:30">17:30</option>
                                                                    <option value="18:00">18:00</option>
                                                                    <option value="18:30">18:30</option>
                                                                    <option value="19:00">19:00</option>
                                                                    <option value="19:30">19:30</option>
                                                                    <option value="20:00">20:00</option>
                                                                    <option value="20:30">20:30</option>
                                                                    <option value="21:00">21:00</option>
                                                                    <option value="21:30">21:30</option>
                                                                    <option value="22:00">22:00</option>
                                                                    <option value="22:30">22:30</option>
                                                                    <option value="23:00">23:00</option>
                                                                    <option value="23:30">23:30</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <input type="checkbox" name="cerradoSabado" class="form-control" >
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <h4 style=" font-size: 11px; margin-top: 30%;">Cerrado </h4>
                                                    </div>
                                                    <div class="col-lg-2 form-group"></div>
                                                    <!-- Fin Sabado-->

                                                    <!-- Domingo -->
                                                    <div class="col-lg-2 form-group">
                                                        <label style="color: black; font-size: 11px; margin-top: 6%;">Domingo </label>
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <h4 style=" font-size: 11px; margin-top: 17%;">De </h4>
                                                    </div>
                                                    <div class="col-lg-2 form-group">
                                                        <select name="domingoH" class="form-control">
                                                        <option value="---"></option>
                                                                    <option value="00:00">00:00</option>
                                                                    <option value="00:30">00:30</option>
                                                                    <option value="01:00">01:00</option>
                                                                    <option value="01:30">01:30</option>
                                                                    <option value="02:00">02:00</option>
                                                                    <option value="02:30">02:30</option>
                                                                    <option value="03:00">03:00</option>
                                                                    <option value="03:30">03:30</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="04:30">04:30</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="05:30">05:30</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="06:30">06:30</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="07:30">07:30</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="08:30">08:30</option>
                                                                    <option value="09:00">09:00</option>
                                                                    <option value="09:30">09:30</option>
                                                                    <option value="10:00">10:00</option>
                                                                    <option value="10:30">10:30</option>
                                                                    <option value="11:00">11:00</option>
                                                                    <option value="11:30">11:30</option>
                                                                    <option value="12:00">12:00</option>
                                                                    <option value="12:30">12:30</option>
                                                                    <option value="13:00">13:00</option>
                                                                    <option value="13:30">13:30</option>
                                                                    <option value="14:00">14:00</option>
                                                                    <option value="14:30">14:30</option>
                                                                    <option value="15:00">15:00</option>
                                                                    <option value="15:30">15:30</option>
                                                                    <option value="16:00">16:00</option>
                                                                    <option value="16:30">16:30</option>
                                                                    <option value="17:00">17:00</option>
                                                                    <option value="17:30">17:30</option>
                                                                    <option value="18:00">18:00</option>
                                                                    <option value="18:30">18:30</option>
                                                                    <option value="19:00">19:00</option>
                                                                    <option value="19:30">19:30</option>
                                                                    <option value="20:00">20:00</option>
                                                                    <option value="20:30">20:30</option>
                                                                    <option value="21:00">21:00</option>
                                                                    <option value="21:30">21:30</option>
                                                                    <option value="22:00">22:00</option>
                                                                    <option value="22:30">22:30</option>
                                                                    <option value="23:00">23:00</option>
                                                                    <option value="23:30">23:30</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <h4 style=" font-size: 11px; margin-top: 17%;">a </h4>
                                                    </div>
                                                    <div class="col-lg-2 form-group">
                                                        <select name="domingoC" class="form-control">
                                                        <option value="---"></option>
                                                                    <option value="00:00">00:00</option>
                                                                    <option value="00:30">00:30</option>
                                                                    <option value="01:00">01:00</option>
                                                                    <option value="01:30">01:30</option>
                                                                    <option value="02:00">02:00</option>
                                                                    <option value="02:30">02:30</option>
                                                                    <option value="03:00">03:00</option>
                                                                    <option value="03:30">03:30</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="04:30">04:30</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="05:30">05:30</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="06:30">06:30</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="07:30">07:30</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="08:30">08:30</option>
                                                                    <option value="09:00">09:00</option>
                                                                    <option value="09:30">09:30</option>
                                                                    <option value="10:00">10:00</option>
                                                                    <option value="10:30">10:30</option>
                                                                    <option value="11:00">11:00</option>
                                                                    <option value="11:30">11:30</option>
                                                                    <option value="12:00">12:00</option>
                                                                    <option value="12:30">12:30</option>
                                                                    <option value="13:00">13:00</option>
                                                                    <option value="13:30">13:30</option>
                                                                    <option value="14:00">14:00</option>
                                                                    <option value="14:30">14:30</option>
                                                                    <option value="15:00">15:00</option>
                                                                    <option value="15:30">15:30</option>
                                                                    <option value="16:00">16:00</option>
                                                                    <option value="16:30">16:30</option>
                                                                    <option value="17:00">17:00</option>
                                                                    <option value="17:30">17:30</option>
                                                                    <option value="18:00">18:00</option>
                                                                    <option value="18:30">18:30</option>
                                                                    <option value="19:00">19:00</option>
                                                                    <option value="19:30">19:30</option>
                                                                    <option value="20:00">20:00</option>
                                                                    <option value="20:30">20:30</option>
                                                                    <option value="21:00">21:00</option>
                                                                    <option value="21:30">21:30</option>
                                                                    <option value="22:00">22:00</option>
                                                                    <option value="22:30">22:30</option>
                                                                    <option value="23:00">23:00</option>
                                                                    <option value="23:30">23:30</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <input type="checkbox" name="cerradoDomingo" class="form-control" >
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <h4 style=" font-size: 11px; margin-top: 30%;">Cerrado </h4>
                                                    </div>
                                                    <div class="col-lg-2 form-group"></div>
                                                    <!-- Fin Domingo-->
                                                    <!-- Final del bloque horario del negocio-->
                                                </div>
                                                <div class="row" style="width:100%; margin-left:5%;">
                                                    <!-- Metodos de pago -->
                                                    <div class="col-lg-12 form-group">
                                                        <label style="color: black; font-weight:bold; font-size: 11px; margin-top: 4%;">MÉTODOS DE PAGO</label>
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <input type="checkbox" name="efectivo" value="Efectivo" class="form-control" >  
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <h4 style="color: black; font-size: 9px; margin-top:30%;">Efectivo</h4>
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <input type="checkbox" name="tarjeta" value="Tarjeta" class="form-control" >
                                                    </div>
                                                    <div class="col-lg-2 form-group">
                                                        <h4 style="color: black; font-size: 9px; margin-top: 28%;">Tarjeta de crédito/débito</h4>
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <input type="checkbox" name="tiendadpal" value="TiendaPal" class="form-control" >
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <h4 style="color: black; font-size: 9px; margin-top: 28%;">Tienda Dptal</h4>
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <input type="checkbox" name="transfer" value="Transfer" class="form-control" >
                                                    </div>
                                                    <div class="col-lg-2 form-group">
                                                        <h4 style="color: black; font-size: 9px; margin-top: 28%;">Transferencia electrónica</h4>
                                                    </div> 
                                                    <div class="col-lg-1 form-group">
                                                        <input type="checkbox" name="deposito" value= "Deposito" class="form-control" >
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <h4 style="color: black; font-size: 9px; margin-top: 28%;">Depósito en banco</h4>
                                                    </div>
                                                    <!-- FIn Metodos de pago -->
                                                </div>
                                                <div class="row" style="width:100%; margin-left:5%;">
                                                    <!-- Tipos de Entregas -->
                                                    <div class="col-lg-12 form-group">
                                                        <label style="color: black; font-weight:bold; font-size: 11px; margin-top: 4%;">TIPOS DE ENTREGA</label>
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                            <input type="checkbox" name="pickup" value="PickUp" class="form-control" >
                                                    </div>
                                                    <div class="col-lg-2 form-group">
                                                        <h4 style="color: black; font-size: 9px; margin-top: 14%;">Recogerlo en el establecimiento</h4>
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <input type="checkbox" name="rappi" onclick="showRappi()" class="form-control" >
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <h4 style="color: black; font-size: 9px; margin-top: 28%;">RAPPI</h4>
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <input type="checkbox" onclick="showUber()" name="ubber" class="form-control" > 
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <h4 style="color: black; font-size: 9px; margin-top: 28%;">Uber Eats</h4>
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <input type="checkbox" name="envio" class="form-control" >
                                                    </div>
                                                    <div class="col-lg-2 form-group">
                                                        <h4 style="color: black; font-size: 9px; margin-top: 14%;">Envío directo del establecimiento</h4>
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <input type="checkbox" name="mensajeria" class="form-control" > 
                                                    </div>
                                                    <div class="col-lg-1 form-group">
                                                        <h4 style="color: black; font-size: 9px; margin-top: 28%;">Mensajería</h4>
                                                    </div>
                                                    <!-- FIn Tipos de entregas -->
                                                </div>
                                                <div class="row" style="width:100%; margin-left:5%; margin-bottom:2%;">
                                                    <div class="col-6" id="rappi" style="display:none;">
                                                        <input type="text" style="width:90%;" placeholder="Escribe el link de tu cuenta de RAPPI" name="linkRappi" />
                                                    </div>   
                                                    <div class="col-6" id="uber" style="display:none;">
                                                        <input type="text" style="width:90%;" placeholder="Escribe el link de tu cuenta de Uber" name="linkUber" />
                                                    </div>                                 
                                                </div>
                                                <script>
                                                    function showRappi()
                                                    {
                                                        if (document.getElementById("rappi").style.display === "none")
                                                        {
                                                            document.getElementById("rappi").style.display = "block";
                                                        }
                                                        else{
                                                            document.getElementById("rappi").style.display = "none";
                                                        }
                                                    }

                                                    function showUber()
                                                    {
                                                        if (document.getElementById("uber").style.display === "none")
                                                        {
                                                            document.getElementById("uber").style.display = "block";
                                                        }
                                                        else{
                                                            document.getElementById("uber").style.display = "none";
                                                        }
                                                    }
                                                </script>
                                                    <!-- envios -->
                                                    <div class="row"  style=" width:100%; margin-left:5%;">
                                                        <div class="row" style="width:100%">
                                                            <div class="col-12 form-group">
                                                                <label style="color: black; font-weight: bold; font-size: 11px; ">COSTO DE ENVÍO</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-1 form-group">
                                                                <input type="radio" onclick="showFields()" id="siEnvio" style="font-size:20px;" name="tieneEnvioSI" value="SI" class="form-control" >
                                                            </div>
                                                            <div class="col-1 form-group">
                                                                <h4 style="font-size: 12px; color: black; ">Si</h4>
                                                            </div>
                                                            <div class="col-1 form-group">
                                                                <input type="radio" onclick="hideFields()" id="noEnvio" style="font-size:20px;" name="tieneEnvioSI" value="NO" class="form-control">  
                                                            </div>
                                                            <div class="col-1 form-group">
                                                                <h4 style="font-size: 12px; color: black; ">No</h4>
                                                            </div>
                                                            <div class="col-7 form-group" id="precio" style="display:none;">
                                                                <input type="number" name="precio" placeholder="Coloca el precio del envío" class="form-control">
                                                            </div>
                                                            <div class="col-1 form-group" id="precio5" style="display:none;">
                                                                <label style="color: black; font-weight: bold; font-size: 11px;">MXN</label>
                                                            </div>
                                                       
                                                        <!-- fin envios -->
                                                    
                                                        <div class="col-12 form-group" id="precio2" style="display:none;">
                                                            <input type="text" name="descriptionENvio" placeholder="Describe detalladamente las condiciones del costo de envío para evitar confusiones a la hora de cobrar a tus clientes." class="form-control">
                                                        </div>

                                                        <div class="col-3 form-group" id="precio3" style="display:none;">
                                                            <label style="color: black; font-weight: bold; font-size: 11px; margin-top: 5%;">TIEMPO DE ENVÍO</label>
                                                        </div>
                                                        <div class="col-6 form-group" id="precio4" style="display:none;">
                                                            <input type="number" name="tiempoEnvio" placeholder="Tiempo promedio de las entregas a domicilio." class="form-control">
                                                        </div>
                                                        <div class="col-2 form-group" id="precio5" style="display:none;">
                                                            <label style="color: black; font-weight: bold; font-size: 11px;">MIN</label>
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- ESCRIBE CODIGO JAVASCRIPT AQUI -->
                                                    <script>
                                                        function showFields()
                                                        {
                                                            document.getElementById("precio").style.display = 'block';
                                                            document.getElementById("precio2").style.display = 'block';
                                                            document.getElementById("precio3").style.display = 'block';
                                                            document.getElementById("precio4").style.display = 'block';
                                                            document.getElementById("precio5").style.display = 'block';
                                                        }

                                                        function hideFields()
                                                        {
                                                            document.getElementById("precio").style.display = 'none';
                                                            document.getElementById("precio2").style.display = 'none';
                                                            document.getElementById("precio3").style.display = 'none';
                                                            document.getElementById("precio4").style.display = 'none';
                                                            document.getElementById("precio5").style.display = 'none';
                                                        }
                                                    </script>
                                                    <!-- END JAVASCRIPT -->
                                                    <div class="row" style=" width:100%;">
                                                        <div class="col-12 form-group">
                                                            <label style="color: black; font-weight: bold; font-size: 11px;">EMITES FACTURA</label>
                                                        </div>
                                                        <div class="col-1 form-group">
                                                            <input type="radio" name="factura" value="SI" class="form-control" >
                                                        
                                                        </div>
                                                        <div class="col-1 form-group">
                                                            <h4 style="font-size: 12px; color: black; ">SI</h4>
                                                        </div>
                                                        <div class="col-1 form-group">
                                                            <input type="radio" name="factura" value="NO" class="form-control" >
                                                        </div>
                                                        <div class="col-1 form-group">
                                                            <h4 style="font-size: 12px; color: black;">No</h4>
                                                        </div>
                                                        <div class="col-8 form-group">
                                                        
                                                        </div>
                                                    </div>
                                                <div class="row" style="width:100%; ">
                                                    <div class="col-12 form-group">
                                                        <label style="color: black; font-weight: bold; font-size: 11px;">FACHADA DE TU
                                                            NEGOCIO</label>
                                                    </div>
                                                    <div class="col-5 form-group">
                                                        <input style="margin-top: 5%;" type="file" name="fachada" value="Seleccionar imagen" accept="image/png, image/jpeg">
                                                    </div>
                                                    <div class="col-4 form-group">
                                                    </div>

                                                    <div class="col-3 form-group">
                                                    </div>
                                                    <div class="col-12 form-group">
                                                        <label style=" color: black; font-size: 14px;">Te recomendamos subir fotos de tu negocio para que tus clientes te puedan identificar rápidamente.
                                                            Recomendamos que cada imagen mida 1920x1080 pixeles y con un peso máximo de 2 mb. Para adaptar tu imagen puedes hacerlo <b>AQUÍ.</b>
                                                            Para reducir el tamaño de tu imagen puedes hacerlo <b>AQUÍ.</b></label>
                                                    </div>

                                                    <div class="col-12 form-group">
                                                        <label style="color: black; font-weight: bold; font-size: 11px;">GALERÍA DE IMÁGENES
                                                            DE TU NEGOCIO</label>
                                                    </div>
                                                    <div class="col-6 form-group">
                                                        <input  type="file" name="galeria1" value="Seleccionar imagen" accept="image/png, image/jpeg">
                                                    </div>
                                                    <div class="col-6 form-group">
                                                        <input type="file" name="galeria2" value="Seleccionar imagen" accept="image/png, image/jpeg">
                                                    </div>
                                                    <div class="col-6 form-group">
                                                        <input type="file" name="galeria3" value="Seleccionar imagen" accept="image/png, image/jpeg">
                                                    </div>
                                                    <div class="col-6 form-group">
                                                        <input  type="file" name="galeria4" value="Seleccionar imagen" accept="image/png, image/jpeg">
                                                    </div>
                                                    <div class="col-4 form-group">
                                                        <input  type="file" name="galeria5" value="Seleccionar imagen" accept="image/png, image/jpeg">
                                                    </div>

                                                    <div class="col-12 form-group">
                                                        <label style=" color: black; font-size: 14px;">Te recomendamos subir fotos de tu negocio para que tus clientes te puedan identificar rápidamente.
                                                            Recomendamos que cada imagen mida 1920x1080 pixeles y con un peso máximo de 2 mb. Para adaptar tu imagen puedes hacerlo <b>AQUÍ.</b>
                                                            Para reducir el tamaño de tu imagen puedes hacerlo <b>AQUÍ.</b></label>
                                                    </div>
                                                    
                                                    <div class="col-12 form-group">
                                                        <input type="submit" name="submit" value="REGÍSTRAR INFORMACIÓN" class="form-control" style="margin-top: 5%; font-size: 14px; background: black; color: white; font-weight: bold; border-radius: 10px; height: 70px;">
                                                    </div>

                                                </div>
                                            </div>

                                                </div>                       
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                                            <!-- ENDING SECTION -->

                                                            <!-- FIN FORMULARIO NEGOCIO -->
                                        
                        </div><!-- .row -->
                    </div><!-- .nk-block -->
                </div><!-- nk-content-body -->
            </div><!-- nk-content-inner -->
        </div><!-- container-fluid -->
    </div> <!-- content @e -->

<?php
Page::complement();

?>