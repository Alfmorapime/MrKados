<?php
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
    $fecha = ['fechaRegistro'];
    $idUser = $row['id'];
}

if(isset($_POST["usuID"]))
{
    $usuarioID = $_POST['usuID'];
    $chequeo = 1;
    mysqli_query($conection,"UPDATE notificaciones_tienda SET chequeo = $chequeo WHERE id_user_tienda = $usuarioID");
    //header( 'Location: detalleTienda.php?correo=$user&id=$id_tienda' ) ;
    header("Location:  index-estadisticas.php?user=$correo&type=$usuarioTipo");
}
require_once('header.php');
Page::header($correo, $usuarioTipo, $name, $apellido, $idUser, $conection);
?>

                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Estadísticas de tu Negocio</h3>
                                           
                                        </div><!-- .nk-block-head-content -->
                                       
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->

                                <?php
                                   $query_tiendas = "select * from tiendas where id_usuario = '$correo';";
                                   $tienda = mysqli_query($conection,$query_tiendas);
                                   while ($rowTienda = mysqli_fetch_assoc($tienda)) 
                                   { 
                                       $nameTienda = $rowTienda['nombreTienda'];
                                       $tiendaID = $rowTienda['id'];

                                       $query_estadistica = "select * from estadisticas where id_tienda = '$tiendaID';";
                                       $estadisticas = mysqli_query($conection,$query_estadistica);
                                       while ($rowEstadistica = mysqli_fetch_assoc($estadisticas)) 
                                       { 
                                           $visitas = $rowEstadistica['visitas'];
                                           $contactos = $rowEstadistica['contactos']
                                ?>

                                <div class="nk-block" style="margin-top:2%;">
                                    <span>Tienda: <?php echo $nameTienda; ?></span> 
                                       
                                    <div class="row g-gs">
                                        
                                        <div class="col-md-4">
                                        
                                            <div class="card card-bordered card-full">
                                            
                                                <!-- BLOQUE DONDE VA LA ESTADISTICA VISITAS -->
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">
                                                            <h6 class="subtitle">Total de vistas de tu negocio</h6>
                                                        </div>
                                                       
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"> <?php echo $visitas; ?> <span class="currency currency-usd"> Visitas</span>
                                                        </span>
                                                       
                                                    </div>
                                                </div>
                                            </div><!-- FINAL ESTADISTICAS -->
                                        
                                        <!-- BLOQUE ESTADISTICA VISITAS -->
                                        </div><!-- .col -->
                                        <div class="col-md-4">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">
                                                            <h6 class="subtitle">Total de personas que te contactaron</h6>
                                                        </div>
                                                       
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"> <?php echo $contactos; ?><span class="currency currency-usd"> Contactos</span>
                                                        </span>
                                                      
                                                    </div>
                                                    </div>
                                                </div>
                                            </div><!-- FINAL CONTACTOS -->

                                          <a href="html/general/index-testimonios-tienda.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>&store=<?php echo $tiendaID; ?>">  
                                            <div class="card-inner" style="background:white; margin-top:11%; border: 1px solid; border-radius:5px;">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">
                                                            <h6 class="subtitle">Tus testimonios</h6>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount" style="margin-top:1%;">
                                                            <h6 class="subtitle">Conoce mas</h6>
                                                    </div>
                                                </div>
                                            </div><!-- FINAL CONTACTOS -->
                                         </a>

                                        

                                       
                                    </div>
                                </div>
                                
                                <!-- bloque de testimonios -->

                                

                               

                                <!-- final bloque testimonios -->

                                <!-- FINAL BLOQUE -->
                                    <?php } ?>



                                   <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
               
<?php
Page::complement();
?>