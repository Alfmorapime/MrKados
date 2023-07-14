<?php
require_once('header.php');
$correo = $_GET["correo"];

if(isset($_GET["type"]))
{
    $usuarioTipo = $_GET["type"];
}
else
{
    $usuarioTipo = "";
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

if(isset($_POST["telefono"]))
{
    $n = $_POST['name'];
    $a = $_POST['apellido'];
    $t = $_POST['telefono'];
    $co = $_POST['correo'];
    $f = $fecha;
    $c = " ";
    $query = "UPDATE usuarios SET nombre = '$n', apellidos = '$a', cumpleanos = '$c', telefono = '$t', correo = '$co', fechaRegistro = '$f' WHERE correo = '$correo'";
    $user = mysqli_query($conection,$query);
    
    header("Location: user-profile-Tienda.php?correo=$correo&type=$usuarioTipo");
}

if(isset($_POST["id-eliminar"]))
{
    $id_eliminar = $_POST['id-eliminar'];
    $queryDelete = "DELETE from usuarios WHERE id = '$id_eliminar'"; 
    mysqli_query($conection,$queryDelete);

    $queryDeleteTienda = "DELETE from tiendas WHERE id_usuario = '$correo'"; 
    mysqli_query($conection,$queryDeleteTienda);

    $to = $correo;
    $subject = 'Estás apunto de decirnos adiós :(';
    $message = file_get_contents('template_eliminarCuenta.php'); 

    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    $headers .= "From: info@mrkados.com";

    $mail_sent=mail($to, $subject, $message, $headers);

    header("Location: ../../../eliminacionCuentaExitosa.php");
}

if(isset($_POST["usuID"]))
{
    $usuarioID = $_POST['usuID'];
    $chequeo = 1;
    mysqli_query($conection,"UPDATE notificaciones_tienda SET chequeo = $chequeo WHERE id_user_tienda = $usuarioID");
    //header( 'Location: detalleTienda.php?correo=$user&id=$id_tienda' ) ;
    header("Location:  user-profile-Tienda.php?correo=$correo&type=$usuarioTipo");
}
Page::header($correo, $usuarioTipo, $name, $apellido, $idUser, $conection);
?> 
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-aside-wrap">
                                            <div class="card-inner card-inner-lg">
                                                <div class="nk-block-head nk-block-head-lg">
                                                    <div class="nk-block-between">
                                                        <div class="nk-block-head-content">
                                                            <h4 class="nk-block-title">Información personal</h4>
                                                            <div class="data-item" >
                                                                    <div class="data-item" data-toggle="modal" data-target="#profile-edit" >      
                                                                        <input type="button" value="Actualizar Información" style="background:#ffbe00; color:black; font-weight:bold; border-color:#ffbe00; border-radius:10px;">
                                                                    </div>
                                                                    <div class="data-item" data-toggle="modal" data-target="#profile-delete" >
                                                                        <input type="button" value="Eliminar Cuenta" style="background:#ffbe00; color:black; font-weight:bold; border-color:#ffbe00; border-radius:10px;">
                                                                    </div>
                                                            </div>

                                                            <div class="nk-block-des">
                                                             <!--   <p>Basic info, like your name and address, that you use on Nio Platform.</p> -->
                                                        </div>
                                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <div class="nk-data data-list">
                                                        <div class="data-head">
                                                          <!--  <h6 class="overline-title">Basics</h6> -->
                                                        </div>
                                                        <div class="data-item" >
                                                            <div class="data-col">
                                                                <span class="data-label">Nombre</span>
                                                                <span class="data-value"><?php echo $name; ?></span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" >
                                                            <div class="data-col">
                                                                <span class="data-label">Apellido</span>
                                                                <span class="data-value"><?php echo $apellido; ?></span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" >
                                                            <div class="data-col">
                                                                <span class="data-label">Teléfono</span>
                                                                <span class="data-value"><?php echo $telefono; ?></span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" >
                                                            <div class="data-col">
                                                                <span class="data-label">Correo Electrónico</span>
                                                                <span class="data-value text-soft"><?php echo $correo; ?></span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" >
                                                            <div class="data-col">
                                                                <span class="data-label">Fecha de Registro</span>
                                                                <span class="data-value"><?php echo $fecha; ?></span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                       
                                                    </div><!-- data-list -->

                                                    </div><!-- data-list -->
                                                </div><!-- .nk-block -->
                                            </div>
                                            
                                    </div><!-- .card -->
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
                    <h5 class="title">Actualizar Información Personal</h5>
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

     <!-- @@ Profile Edit Modal @e -->
     <div class="modal fade" tabindex="-1" role="dialog" id="profile-delete">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Desea Eliminar Cuenta?</h5>
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
                                            <input type="text" class="form-control form-control-lg" id="full-name"  value="<?php echo $name; ?>" placeholder="Enter Full name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="display-name">Apellido</label>
                                            <input type="text" class="form-control form-control-lg" id="display-name"  value="<?php echo $apellido; ?>" placeholder="Enter display name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="phone-no">Teléfono</label>
                                            <input type="text" class="form-control form-control-lg" id="phone-no"  value="<?php echo $telefono; ?>" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="birth-day">Correo Electrónico</label>
                                            <input type="text" class="form-control form-control-lg" id="birth-day" disabled   value="<?php echo $correo; ?>">
                                            <input type="text" class="form-control form-control-lg" id="birth-day" style="display:none;"   value="<?php echo $correo; ?>">
                                            <input type="text" class="form-control form-control-lg"  style="display:none;" name="id-eliminar"  value="<?php echo $idUser; ?>">
                                        </div>
                                    </div>
                                
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <input onclick="showDiv()" style="background:#ffb800; border-radius:10px; border-color:#ffb800; color: black; font-weight:bold;" type="button" value="Eliminar">
                                            </li>
                                            <li>
                                                <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-12" style="display:none; margin-top:3%; text-align:center;" id="deleteBlock"> 
                                        <span>Esta seguro que desea eliminar su cuenta?</span>
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <a href="html/general/user-profile-regular.php?correo=<?php echo $correo; ?>" > <input style="background:#ffb800; border-radius:10px; border-color:#ffb800; color: black; font-weight:bold;" type="submit" value="Eliminar"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <script>
                                        function showDiv() 
                                        { 
                                            document.getElementById('deleteBlock').style.display = "block"; 
                                        } 
                                    </script>
                                </div>
                            </div><!-- .tab-pane -->
                        </form>
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
<?php
Page::complement();
?>