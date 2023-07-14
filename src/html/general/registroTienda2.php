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

//Se preparan todos los datos para ingresr a BD 
if (isset($_POST["description"]))
{
    $date = new DateTime();  
    $date->setTimezone(new DateTimeZone('America/Mexico_City'));
    $now = date_format($date,"d/m/y H:i:s");
    $now2 = date_format($date,"dmyHis");

    //Assemble tiendas
    $descripcion = $_POST["description"];
    $nombrePersona = $_POST["nombrePersona"];
    $apellidoPersona = $_POST["nombrePersona2"];

    $logo = $_FILES['logoEmpresa']['name'];
    $logoCompleto = $now2."".$logo;
    $directorioLogo ="../../../images/Logos";

    $guardadoLogo = $_FILES['logoEmpresa']['tmp_name'];
 
    if(file_exists($directorioLogo))
    {
        move_uploaded_file($guardadoLogo, $directorioLogo."/".$logoCompleto);
    }

    $paginaWeb = $_POST["paginaweb"];
    //$redSocial = $_POST["redSocialNombre"];

    if($_FILES['catalogo']['name'] != "")
    {
        $catalogoNombre = $_FILES['catalogo']['name'];
        $catalogoCompleto = $now2."".$catalogoNombre;
        $directorioCatalogo ="../../../images/catalogos";

        $guardadoCatalogo = $_FILES['catalogo']['tmp_name'];
 
        if(file_exists($directorioCatalogo))
        {
            move_uploaded_file($guardadoCatalogo, $directorioCatalogo."/".$catalogoCompleto);
        }
    }
    else
    {
        $catalogoCompleto = "";
    }

    $redSocial1="";
    $redSocial2="";
    $redSocial3="";
    $redSocial4="";
    $redSocial5="";
    $redSocial6="";

    if(!isset($_POST["redsocial1"]))
    {
        $redSocial1 = "";
    }
    else
    {
        $redSocial1 = $_POST['redsocial1'].",".$_POST['redSocialNombre1'];
    }

    if(!isset($_POST["redsocial2"]))
    {
        $redSocial2 = "";
    }
    else
    {
        $redSocial2 = $_POST['redsocial2'].",".$_POST['redSocialNombre2'];;
    }

    if(!isset($_POST["redsocial3"]))
    {
        $redSocial3 = "";
    }
    else
    {
        $redSocial3 = $_POST['redsocial3'].",".$_POST['redSocialNombre3'];;
    }

    if(!isset($_POST["redsocial4"]))
    {
        $redSocial4 = "";
    }
    else
    {
        $redSocial4 = $_POST['redsocial4'].",".$_POST['redSocialNombre4'];;
    }

    if(!isset($_POST["redsocial5"]))
    {
        $redSocial5 = "";
    }
    else
    {
        $redSocial5 = $_POST['redsocial5'].",".$_POST['redSocialNombre5'];;
    }

    if(!isset($_POST["redsocial6"]))
    {
        $redSocial6 = "";
    }
    else
    {
        $redSocial6 = $_POST['redsocial6'].",".$_POST['redSocialNombre6'];;
    }

    $allRedes = $redSocial1.",".$redSocial2.",".$redSocial3.",".$redSocial4.",".$redSocial5.",".$redSocial6;


    mysqli_query($conection,"UPDATE tiendas 
    SET descripcion = '$descripcion', nombrePersona = '$nombrePersona', apellidoPersona = '$apellidoPersona', 
    logo = '$logoCompleto', catalogo = '$catalogoCompleto', paginaWeb = '$paginaWeb', redSocial = '$allRedes'
    WHERE id = $id_tienda");

    header("Location:  registroTienda3.php?user=$correo&type=$usuarioTipo&id=$id_tienda");
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
                                                        <div class="row">
                                                            <div class="col-12 form-group">
                                                                <span>Section 2 del formulario</span>
                                                            </div>
                                                            <div class="col-12 form-group">
                                                                <label style="font-weight: bold; color: black; font-size: 11px;">DESCRIBE TU EMPRESA</label>
                                                                <textarea type="text" name="description" placeholder="Describe brevemente lo que hacen en tu negocio." class="form-control"></textarea>
                                                            </div>
                                                            <div class="col-12 form-group">
                                                                <label style="color: black; font-weight: bold; font-size: 11px;">REPRESENTANTE COMERCIAL O DUEÑO DEL NEGOCIO</label>
                                                            </div>
                                                            <div class="col-6 form-group">
                                                                <input type="text" name="nombrePersona" placeholder="Nombre del representante del negocio" class="form-control" required>
                                                            </div>
                                                            <div class="col-6 form-group">
                                                                <input type="text" name="nombrePersona2" placeholder="Apellido del representante del negocio" class="form-control"  required>
                                                            </div>
                                                            <div class="col-12 form-group" >
                                                                <label style="font-weight: bold; color: black; font-size: 11px;">INFORMACIÓN ADICIONAL DE TU NEGOCIO</label>
                                                            </div>
                                                            <div class="col-6 form-group" >
                                                                <div class="row" style="width:100%;">
                                                                    <div class="col-5 form-group">
                                                                        <label style="font-weight: bold; color: black; font-size: 11px;" >LOGOTIPO DE TU NEGOCIO</label>
                                                                    </div>
                                                                    <div class="col-5 form-group">
                                                                        <input type="file" name="logoEmpresa" value="Seleccionar imagen" accept="image/png, image/jpeg">
                                                                    </div>
                                                                    <label style="font-weight: bold; color: black; font-size: 12px; ">Recomendamos que sea una imagen JPG con un pero máximo de 1Mb.
                                                                        Si tu logo es superior a ese tamaño puedes comprimirlo <b>AQUÍ</b></label>
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="col-lg-6 form-group" >
                                                                <div class="row">
                                                                    <div class="col-lg-5 form-group">
                                                                        <label style="font-weight: bold; color: black; font-size: 11px; ">CATÀLOGO/PORTAFOLIO DE TU NEGOCIO</label>
                                                                    </div>
                                                                    <div class="col-lg-5 form-group">
                                                                        <input type="file" name="catalogo" value="Seleccionar imagen" accept="file/pdf">
                                                                    </div>
                                                                    <label style="font-weight: bold; color: black; font-size: 12px; ">Recomendamos que sea un documento PDF con un pero máximo de 3Mb.
                                                                        Si tu archivo es superior a ese tamaño puedes comprimirlo <b>AQUÍ</b></label>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="row" style="width:100%; margin-left:5%;">
                                                                <div class="col-lg-12 form-group" style="width:100%;">
                                                                    <input type="text" name="paginaweb" placeholder="Sitio web" class="form-control">
                                                                </div>
                                                        

                                                                <div class="row" id="redSocial1">
                                                                    <div class="col-lg-4 form-group">
                                                                        <select name="redsocial1" size="number_of_options" style="margin-top: 6.5%;">
                                                                            <option value="none">Red Social</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="Linkedin">Linkedin</option>
                                                                            <option value="Snapchat">Snapchat</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                        </select>
                                                                        <label style="color: black; font-size: 08px;"><b>+ Añadir otra red social</b> (Máximo 6 campos)</label>
                                                                    </div>
                                                                    <div class="col-lg-8 form-group">
                                                                        <input type="text" name="redSocialNombre1" placeholder="/" class="form-control" style="margin-top: 3.1%;">
                                                                    </div>

                                                                    <div class="col-lg-6 form-group" style="margin-bottom:5%;">
                                                                        <input type="button" onclick="mostrarMensajeRe()" name="addRed" value="Tienes otra Red Social?" />
                                                                    </div>
                                                                    <div class="col-lg-8 form-group">
                                                                        <!-- <input type="text" name="redSocialNombre" placeholder="/" class="form-control" style="margin-top: 3.1%;"> -->
                                                                    </div>

                                                                </div>

                                                                
                                                            
                                                            <div class="row" id="redSocial2" style="display:none;  width:100%;">
                                                                <div class="col-lg-4 form-group" style="float:left;">
                                                                    <select name="redsocial2" size="number_of_options" style="margin-top: 6.5%;">
                                                                    <option value="none">Red Social</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="Linkedin">Linkedin</option>
                                                                            <option value="Snapchat">Snapchat</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-8 form-group" style="float:left;">
                                                                    <input type="text" name="redSocialNombre2" placeholder="/" class="form-control" style="margin-top: 3.1%;">
                                                                </div>
                                                            </div>

                                                            <div class="row" id="redSocial3" style="display:none;  width:100%;">
                                                                <div class="col-lg-4 form-group" style="float:left;">
                                                                    <select name="redsocial3" size="number_of_options" style="margin-top: 6.5%;">
                                                                    <option value="none">Red Social</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="Linkedin">Linkedin</option>
                                                                            <option value="Snapchat">Snapchat</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-8 form-group" style="float:left;">
                                                                    <input type="text" name="redSocialNombre3" placeholder="/" class="form-control" style="margin-top: 3.1%;">
                                                                </div>
                                                            </div>

                                                            <div class="row" id="redSocial4" style="display:none;  width:100%;">
                                                                <div class="col-lg-4 form-group" style="float:left;">
                                                                    <select name="redsocial4" size="number_of_options" style="margin-top: 6.5%;">
                                                                    <option value="none">Red Social</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="Linkedin">Linkedin</option>
                                                                            <option value="Snapchat">Snapchat</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-8 form-group" style="float:left;">
                                                                    <input type="text" name="redSocialNombre4" placeholder="/" class="form-control" style="margin-top: 3.1%;">
                                                                </div>
                                                            </div>

                                                            <div class="row" id="redSocial5" style="display:none; width:100%;">
                                                                <div class="col-lg-4 form-group" style="float:left;">
                                                                    <select name="redsocial5" size="number_of_options" style="margin-top: 6.5%;">
                                                                    <option value="none">Red Social</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="Linkedin">Linkedin</option>
                                                                            <option value="Snapchat">Snapchat</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-8 form-group" style="float:left;">
                                                                    <input type="text" name="redSocialNombre5" placeholder="/" class="form-control" style="margin-top: 3.1%;">
                                                                </div>
                                                            </div>

                                                            <div class="row" id="redSocial6" style="display:none;  width:100%;">
                                                                <div class="col-lg-4 form-group" style="float:left;">
                                                                    <select name="redsocial6" size="number_of_options" style="margin-top: 6.5%;">
                                                                    <option value="none">Red Social</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="Linkedin">Linkedin</option>
                                                                            <option value="Snapchat">Snapchat</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-8 form-group" style="float:left;">
                                                                    <input type="text" name="redSocialNombre6" placeholder="/" class="form-control" style="margin-top: 3.1%;">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 form-group">
                                                                <input type="submit" name="submit" value="REGÍSTRAR INFORMACIÓN" class="form-control" style="margin-top: 5%; font-size: 14px; background: black; color: white; font-weight: bold; border-radius: 10px; height: 70px;">
                                                            </div>
                                                        </div>
                                                            <script>
                                                                var RedValue = 2;
                                                                function mostrarMensajeRe()
                                                                {
                                                                    
                                                                    if(RedValue == 2)
                                                                    {
                                                                        document.getElementById('redSocial2').style.display = 'block';
                                                                    }
                                                                    
                                                                    if(RedValue == 3)
                                                                    {
                                                                        document.getElementById('redSocial3').style.display = 'block';
                                                                    }
                                                                    
                                                                    if(RedValue == 4)
                                                                    {
                                                                        document.getElementById('redSocial4').style.display = 'block';
                                                                    }
                                                                    
                                                                    if(RedValue == 5)
                                                                    {
                                                                        document.getElementById('redSocial5').style.display = 'block';
                                                                    }

                                                                    if(RedValue == 6)
                                                                    {
                                                                        document.getElementById('redSocial6').style.display = 'block';
                                                                    }
                                                                
                                                                    RedValue++;
                                                                    
                                                                }

                                                    
                                                            </script>
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