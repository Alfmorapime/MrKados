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

$tiendaIdtestimonio = $_GET["store"];

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
    header("Location:  index-testimonios-tienda.php?user=$correo&type=$usuarioTipo&store=$tiendaIdtestimonio");
}

if(isset($_POST["id_usuario_reportar"]))
{
    $usuarioIdRep = $_POST["id_usuario_reportar"];
    $reportar = 1;

    $insert_queryR = "insert into reportados (id_usuario, id_tienda, reporte) VALUES ('$usuarioIdRep', '$tiendaIdtestimonio', '$reportar')";
    
    mysqli_query($conection, $insert_queryR);
   // echo  mysqli_error($conection);
  // header("Location: index.php?user=$usuario&type=$usuarioTipo");
}
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
                                        <?php
                                            $query_tiendasT = "select * from tiendas where id = '$tiendaIdtestimonio';";
                                            $tiendaT = mysqli_query($conection,$query_tiendasT);
                                            while ($rowTiendaT = mysqli_fetch_assoc($tiendaT)) 
                                            { 
                                                $nameTienda = $rowTiendaT['nombreTienda'];
                                                ?>

                                                <h3 class="nk-block-title page-title">Testimonios de <?php echo $nameTienda; ?></h3>

                                         <?php   } ?>
                                        </div><!-- .nk-block-head-content -->
                                       
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->

                                


                                
                                <!-- bloque de testimonios -->

                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                           
                                            
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->

                                <div class="nk-block">
                                    <div class="card card-bordered card-stretch">
                                        <div class="card-inner-group">
                                            <div class="card-inner p-0">
                                                <div class="nk-tb-list nk-tb-ulist">

                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text"></span></div>
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text"></span></div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <select onchange="location = this.value;">
                                                                <option value="html/general/index-testimonios-tienda.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>&store=<?php echo $tiendaIdtestimonio; ?>">Ordenar por:</option>
                                                                <option value="html/general/index-testimonios-tienda-ASC.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>&store=<?php echo $tiendaIdtestimonio; ?>">ASC</option>
                                                                <option value="html/general/index-testimonios-tienda-DESC.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>&store=<?php echo $tiendaIdtestimonio; ?>">DESC</option>
                                                            </select>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <select onchange="location = this.value;">
                                                                <option value="html/general/index-testimonios-tienda.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>&store=<?php echo $tiendaIdtestimonio; ?>">Ordenar por:</option>
                                                                <option value="html/general/index-testimonios-tienda-fechaASC.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>&store=<?php echo $tiendaIdtestimonio; ?>">ASC</option>
                                                                <option value="html/general/index-testimonios-tienda-fechaDESC.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>&store=<?php echo $tiendaIdtestimonio; ?>">DESC</option>
                                                            </select>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text"> </span></div> 
                                                    </div>

                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Nombre</span></div>
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Comentario</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Reputacion</span></div> 
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Fecha</span></div>  
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text"> </span></div> 
                                                    </div>

                                                   <!-- $tiendaID. -->
                                                   <?php
                                                                $query3 = "select * from testimonios where id_tienda = '$tiendaIdtestimonio' order by reputacion ASC;";
                                                                $tiendaTesti = mysqli_query($conection,$query3);

                                                                while ($row3 = mysqli_fetch_assoc($tiendaTesti)) 
                                                                {
                                                                    $comentario = $row3["comentario"];
                                                                    $reputacion = $row3['reputacion'];
                                                                    $nombre = $row3['id_usuario'];
                                                                    $fecha = $row3['fecha'];

                                                                    ?>

                                                                    <div class="nk-tb-item">
                                                                        <?php
                                                                        $queryUser = "select * from usuarios where id = '$nombre';";
                                                                        $usuN = mysqli_query($conection,$queryUser);

                                                                        while ($rowN = mysqli_fetch_assoc($usuN)) 
                                                                        { ?>
                                                                        <div class="nk-tb-col tb-col-md">
                                                                              <span  class="tb-amount"><?php echo $rowN['nombre']; ?></span>
                                                                           
                                                                        </div>
                                                                        <?php } ?>
                                                                        <div class="nk-tb-col tb-col-md">
                                                                            <span  class="tb-amount"><?php echo $row3['comentario']; ?></span>
                                                                        </div>

                                                                        <div class="nk-tb-col tb-col-md">
                                                                            <span  class="tb-amount"><?php echo $row3['reputacion']; ?></span>
                                                                        </div>

                                                                        <div class="nk-tb-col tb-col-md">
                                                                            <span  class="tb-amount"><?php echo $fecha; ?></span>
                                                                        </div>

                                                                        <div class="nk-tb-col tb-col-md">
                                                                            <form method="post">
                                                                                <input type="text" name="id_usuario_reportar" value="<?php echo $nombre; ?>" style="display:none;" />
                                                                                <span  class="tb-amount"><input type="submit" value="Reportar" /></span>
                                                                            </form>
                                                                        </div>
                                                        
                                                                    
                                                                
                                                                </div><!-- .nk-tb-item -->

                                                                    <?php

                                                                }
                                                                    
                                                    ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- final bloque testimonios -->

                                <!-- FINAL BLOQUE -->
                                   




                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
<?php
Page::complement();
?>