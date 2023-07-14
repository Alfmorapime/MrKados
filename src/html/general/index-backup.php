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

//ELIMINAR TIENDA
if(isset($_POST["id"]))
{
    $id = $_POST["id"];
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

    header("Location: index.php?user=$correo&type=$usuarioTipo");
}

if(isset($_POST["usuID"]))
{
    $usuarioID = $_POST['usuID'];
    $chequeo = 1;
    mysqli_query($conection,"UPDATE notificaciones_tienda SET chequeo = $chequeo WHERE id_user_tienda = $usuarioID");
    //header( 'Location: detalleTienda.php?correo=$user&id=$id_tienda' ) ;
    header("Location:  index.php?user=$correo&type=$usuarioTipo");
}

if(isset($_POST["id_edit"]))
{
    $id = $_POST["id_edit"];
    header("Location: informacionTienda.php?user=$correo&id=$id&type=$usuarioTipo");
}
Page::header($correo, $usuarioTipo, $name, $apellido, $idUser, $conection);
?> 

                <!-- Contenido tiendas -->

                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm" >
                                    <div class="nk-block-between" >
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Mis Negocios</h3>
                                            <div class="nk-block-des text-soft">
                                              <!--  <p>Welcome to DashLite Dashboard Template.</p> -->
                                            </div>
                                        </div><!-- .nk-block-head-content --> 


                                        
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle" >
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li class="nk-block-tools-opt" style="background:#ffb800; border-color:#ffb800; color:white; font-weight:bold; border-radius:10px;"><a href="html/general/registroTienda.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>" ><span style="color:white; font-weight:bold;">Agrega tu Negocio</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->

                                <!-- Bloque donde esta la tienda -->
                                <?php
                                     $query_tiendas = "select * from tiendas where id_usuario = '$correo';";
                                     $tienda = mysqli_query($conection,$query_tiendas);
                                     while ($rowTienda = mysqli_fetch_assoc($tienda)) 
                                     { $rep = $rowTienda['correo'];
                                        $repFormat = number_format($rep, 2, '.', '');
                                         
                                ?>
                                <div class="nk-block" style="border:1px solid; border-radius:10px; border-color:black; margin-top:1%;">
                                    <div class="row g-gs">
                                        <div class="col-xxl-6" >
                                            <div class="col-xl-2" >
                                                <img src="../images/Logos/<?php echo $rowTienda['logo']; ?>" style="margin-top:55%; float:left;">
                                            </div>
                                            <div class="col-xl-6" style="float:left;">
                                                    <h2 style="color:black; font-weight:bold;"><?php echo $rowTienda['nombreTienda']; ?></h2>
                                                    <h5 style="color:black; font-weight:bold;"><?php echo $rowTienda['giro']; ?></h5>
                                                    <p style="color:black;"><?php echo $rowTienda['descripcion'];?></p> 
                                                    <h5 style="color:black;">Ranking: <b><?php echo $repFormat; ?></b></h5>
                                            </div>
                                            <div class="col-xl-4" style="float:left;">
                                            <form method="POST">
                                                <input type="text" name="id_edit" style="display:none;" value="<?php echo $rowTienda['id']; ?>">   
                                                <input type="submit" name="editar" value="Editar Info." style="background:black; color:white; border-color:black; width:50%; border-radius:10px; margin-left:25%; margin-top:40%;" />
                                            </form>
                                            </br>
                                               <?php $idTienda = $rowTienda['id'];
                                                     $nombreTienda = $rowTienda['nombreTienda'];
                                                     $descripcion = $rowTienda['descripcion'];
                                               ?>
                                                    <input type="text" name="id" style="display:none;" value="<?php echo $rowTienda['id']; ?>">
                                                    <div class="data-item">
                                                        <input id="delete_tienda" data-id="<?php echo $rowTienda['id'].",".$rowTienda['nombreTienda'].",".$rowTienda['descripcion']; ?>" data-toggle="modal" data-target="#delete-tienda" type="button" value="Eliminar Tienda" style="background:white; border:none; color:black; margin-left:75%; font-size:10px; font-weight:bold;"/>
                                                    </div>
                                                            </div>
                                                                    <script>
                                                                        $(document).on("click", "#delete_tienda", function () {
                                                                            var passedID = $(this).data('id');//get the id of the selected button
                                                                            var tiendaInfo = passedID.split(",");
                                                                            $('#idTienda').val(tiendaInfo[0]);;//set the id to the input on the modal
                                                                            $('#nombreTienda').val(tiendaInfo[1]);;//set the id to the input on the modal
                                                                            $('#descripcion').val(tiendaInfo[2]);;//set the id to the input on the modal
                                                                        });
                                                                    </script>
                                             </form>
                                            </div>
                                        </div><!-- .col -->
                                        
                                    </div><!-- .row -->
                                </div><!-- .nk-block -->
                                     <?php } ?>
                                <!-- FIn bloque tienda -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
               
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="delete-tienda">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Estas seguro que deseas eliminar esta tienda?</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal">Tienda</a>
                        </li>
                        
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <form method="POST">
                            <div class="tab-pane active" id="personal">
                                <div class="row gy-4">
                                    <form method="POST">
                                        <div class="col-md-6">

                                                <div class="form-group">
                                                    <label class="form-label" for="display-name">Nombre de la Tienda</label>
                                                    <input type="text" class="form-control form-control-lg" disabled id="nombreTienda" name="tienda">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="phone-no">Descripcion</label>
                                                    <input type="text" class="form-control form-control-lg" id="descripcion" disabled >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" style="display:none;" class="form-control form-control-lg" id="idTienda" name="id">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                    <li>

                                                        <a href="html/general/index.php.php?correo=<?php echo $correo; ?>" > <input style="background:#ffb800; border-radius:10px; border-color:#ffb800; color: black; font-weight:bold;" type="submit" value="Eliminar"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                     </form>
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