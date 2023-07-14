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

Page::header($correo, $usuarioTipo, $name, $apellido, $idUser, $conection);
?> 
               <!-- content @s -->
               <div class="nk-content ">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-content-wrap">
                                    <div class="nk-block-head nk-block-head-lg">
                                        <div class="nk-block-between-md g-4">
                                            <div class="nk-block-head-content">
                                                <h2 class="nk-block-title fw-normal">Mis Suscripciones</h2>
                                            </div>
                                            <div class="nk-block-head-content">
                                                <ul class="nk-block-tools gx-3">
                                                <?php 
                                                    $query = "select * from tiendas where id_usuario = '$correo' AND subscription = 'MrKadito' ";
                                                    $tiendas = mysqli_query($conection,$query);

                                                    if(mysqli_num_rows($tiendas) == 0)
                                                    {?>
                                                    <?php }
                                                    else
                                                    { ?>
                                                        <li class="order-md-last"><a href="html/general/planes.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo ?>" class="btn btn-white btn-dim btn-outline-primary" style="background:#ffb800; border-color:#ffb800; color:white; font-weight:bold; border-radius:10px;"><span>Ver Planes</span></a></li>
                                                     <?php }
                                                ?>
                                                  </ul>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block">
                                        <span style="margin-left:12%;">Para renovar tu suscripcion, debes esperar a la fecha de vencimiento del mismo para poder elegir otro.</span>
                                               
                                        <?php 
                                            $query_sus = "select * from suscripciones_rel where id_user = '$idUser';";
                                            $Result_sus = mysqli_query($conection,$query_sus);
                                        
                                            while ($row_sus = mysqli_fetch_assoc($Result_sus)) 
                                            {
                                                $id_t = $row_sus['id_tienda'];
                                                $query = "select * from tiendas where id = '$id_t';";
                                                $tienda_id = mysqli_query($conection,$query);

                                                while ($rowT = mysqli_fetch_assoc($tienda_id)) {
                                                    $idid = $rowT['nombreTienda'];
                                                    $si =  $row_sus['id'];
                                        ?>
                                        <div class="card card-bordered sp-plan"> <!-- Bloque de suscripcion -->
                                            <div class="row no-gutters">
                                                <div class="col-md-8">
                                                    <div class="sp-plan-info card-inner">
                                                        <div class="row gx-0 gy-3">
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div class="sp-plan-name">
                                                                    <h6 class="title">
                                                                        <a href="html/subscription/subscriptions-detail.html"><?php echo $idid; ?> | Plan: <?php echo $row_sus['plan']; ?> 
                                                                            <?php if($row_sus['active'] == 1)
                                                                            { ?>
                                                                                <span class="badge badge-success badge-pill">Activo</span></a>
                                                                            <?php }
                                                                            else if($row_sus['active'] == 2)
                                                                            { ?>
                                                                                <span class="badge badge-warning badge-pill">Pendiente</span></a>
                                                                           <?php } else {?>
                                                                                <span class="badge badge-light badge-pill">Expirado</span></a>
                                                                           <?php } ?>
                                                                        
                                                                    </h6>
                                                                    <p>Subscription ID: <span class="text-base"><?php echo $row_sus['id']; ?></span></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-sm-4">
                                                                <div class="sp-plan-opt">
                                                                    <div class="custom-control custom-switch">
                                                                        <input type="checkbox" class="custom-control-input" id="auto-plan-p1" checked>
                                                                        <!-- <label class="custom-control-label text-soft" for="auto-plan-p1">Auto Renew</label> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .sp-plan-info -->
                                                    <div class="sp-plan-desc card-inner">
                                                        <ul class="row gx-1">
                                                            <li class="col-6 col-lg-3">
                                                                <p><span class="text-soft">Desde</span><?php echo $row_sus['desde']; ?></p>
                                                            </li>
                                                            <li class="col-6 col-lg-3">
                                                                <p><span class="text-soft">Hasta</span><?php echo $row_sus['hasta']; ?></p>
                                                            </li>
                                                            <li class="col-6 col-lg-3">
                                                                <p><span class="text-soft">Precio</span> <?php echo $row_sus['precio']; ?> MXN</p>
                                                            </li>
                                                            <!-- <li class="col-6 col-lg-3">
                                                                <p><span class="text-soft">Access</span> Unlimited</p>
                                                            </li> -->
                                                        </ul>
                                                    </div><!-- .sp-plan-desc -->
                                                </div><!-- .col -->
                                                <div class="col-md-4">
                                                    <div class="sp-plan-action card-inner">
                                                       <!-- <div class="sp-plan-btn">
                                                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#subscription-change"><span>Cambiar Plan</span></a>
                                                        </div> -->
                                                        <div class="sp-plan-note text-md-center">
                                                            <p>Tu suscripcion vence en:  <span><?php echo $row_sus['hasta']; ?></span></p>
                                                        </div>
                                                        <?php 
                                                            if($row_sus['formulario'] == 0) {
                                                                ?>
                                                                    <div class="row">
                                                                        <a href="/src/html/general/formularioSus.php?user=<?php echo $correo ?>&type=<?php echo $usuarioTipo ?>&it=<?php echo $$id_t; ?>&nt=<?php echo $idid; ?>&si=<?php echo $si; ?>&kt=<?php echo $row_sus['plan']; ?>"><input type="button" value="Formulario" style="background:#ffb800; border-color:#ffb800; color:white; font-weight:bold; border-radius:10px;"/></a>
                                                                    </div>
                                                            <?php } 
                                                            else
                                                            {
                                                                //nada
                                                            }
                                                        ?>
                                                    </div>
                                                </div> <!-- .col -->
                                            </div><!-- .row -->
                                        </div><!-- .sp-plan --> <!-- ENDING blopque suscripcion -->
                                        <?php } } ?>
                                    </div><!-- .nk-block -->
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->    
<?php
Page::complementSuscripcion();
Page::ventanasEmergentes();
Page::complementAllSuscription();
?>