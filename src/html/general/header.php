<?php

class Page 
{

    private static $_title = "Header";

    static function setTitle(string $title) {
        self::$_title = $title;
    }

    static function header($correo, $usuarioTipo, $name, $apellido, $idUser, $conection)    { ?>
        <!DOCTYPE html>
        <html lang="zxx" class="js">

        <head>
            <base href="../../">
            <meta charset="utf-8">
            <meta name="Alfredo Morales" content="alfmorapime@gmail.com">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="MrKados">
            <!-- Fav Icon  -->
            <link rel="icon" type="image/png" href="../images/favicon/favicon.png">
            <!-- Page Title  -->
            <title>MrKados | Admin </title>
            <!-- StyleSheets  -->
            <link rel="stylesheet" href="./assets/css/dashlite.css?ver=1.6.0">
            <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=1.6.0">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   
            <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>        
          
        </head>

        <body class="nk-body bg-lighter npc-general has-sidebar ">
            <div class="nk-app-root">
                <!-- main @s -->
                <div class="nk-main ">
                    <!-- AQUI PEGAR EL HEADER -->
                         <!-- sidebar @s -->
                        <div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
                            <div class="nk-sidebar-element nk-sidebar-head">
                                <div class="nk-sidebar-brand">
                                    <a href="../index2-2.php?correo=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>" class="logo-link nk-sidebar-logo">
                                        <img class="logo-light logo-img" src="././images/Mrkados Logo.png"   />
                                        <img class="logo-dark logo-img" src="././images/Mrkados Logo.png"  />
                                        <!-- <span class="nio-version">General</span> -->
                                    </a>
                                </div>
                                <div class="nk-menu-trigger mr-n2">
                                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                                </div>
                            </div><!-- .nk-sidebar-element -->
                            <div class="nk-sidebar-element">
                                <div class="nk-sidebar-content">
                                    <div class="nk-sidebar-menu" data-simplebar>
                                        <ul class="nk-menu">
                                            <li class="nk-menu-item">
                                                <span class="nk-menu-text"><b>General</b></span><br>
                                            </li><!-- .nk-menu-item -->

                                            <li class="nk-menu-item">
                                                <a href="html/general/index.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>&op=welcome" class="nk-menu-link">
                                                    <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                                    <span class="nk-menu-text">Bienvenido</span>
                                                </a>
                                            </li><!-- .nk-menu-item -->

                                            <li class="nk-menu-item">
                                                <a href="/index2-2.php?correo=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>" class="nk-menu-link">
                                                    <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                                    <span class="nk-menu-text">Ir a página principal </span>
                                                </a>
                                            </li><!-- .nk-menu-item -->

                                            <li class="nk-menu-item">
                                            <a href="html/general/index.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>&op=config" class="nk-menu-link">
                                                    <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                                                    <span class="nk-menu-text">Config. de Cuenta</span>
                                                </a>
                                            </li><!-- .nk-menu-item -->

                                            <li class="nk-menu-item">
                                                <a href="html/general/index.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>&op=soporte" class="nk-menu-link">
                                                    <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                                                    <span class="nk-menu-text">Soporte Técnico</span>
                                                </a>
                                            </li><!-- .nk-menu-item -->

                                            <li class="nk-menu-item">
                                                <a href="html/general/index.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>&op=preguntasFrecuentes" class="nk-menu-link">
                                                    <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                                                    <span class="nk-menu-text">Preguntas Frecuentes</span>
                                                </a>
                                            </li><!-- .nk-menu-item -->   

                                            <li class="nk-menu-item">
                                                <span class="nk-menu-text"><b>MrKliente</b></span>
                                            </li><!-- .nk-menu-item -->

                                            <li class="nk-menu-item">
                                                <a href="html/general/index.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>&op=evaluacion" class="nk-menu-link">
                                                    <span class="nk-menu-icon"><em class="icon ni ni-bitcoin-cash"></em></span>
                                                    <span class="nk-menu-text">Mis Evaluaciones</span>
                                                </a>
                                            </li><!-- .nk-menu-item -->

                                            <?php if($usuarioTipo == 2)
                                            { ?>
                                                <li class="nk-menu-item">
                                                    <span class="nk-menu-text"><b>MrKado</b></span>
                                                </li><!-- .nk-menu-item -->

                                                <li class="nk-menu-item">
                                                <a href="html/general/index.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>&op=estadisticas" class="nk-menu-link">
                                                        
                                                        <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                                        <span class="nk-menu-text">Estadísticas</span>
                                                    </a>
                                                </li><!-- .nk-menu-item -->
                                                <li class="nk-menu-item">
                                                <a href="html/general/index.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>&op=negocios" class="nk-menu-link">
                                                        <span class="nk-menu-icon"><em class="icon ni ni-bitcoin-cash"></em></span>
                                                        <span class="nk-menu-text">Mis Negocios</span>
                                                    </a>
                                                </li><!-- .nk-menu-item -->
                                            
                                                <li class="nk-menu-item">
                                                    <a href="html/general/index.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>&op=misSuscripciones" class="nk-menu-link">
                                                        <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                                                        <span class="nk-menu-text">Mi Suscripción</span>
                                                    </a>
                                                </li><!-- .nk-menu-item -->

                                                <li class="nk-menu-item">
                                                    <a href="/extraMrkados.php?correo=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>" class="nk-menu-link">
                                                        <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                                                        <span class="nk-menu-text">¿Necesitas publicidad para tu negocio? </span>
                                                    </a>
                                                </li><!-- .nk-menu-item -->  
                                            <?php } 
                                            else{ ?>
                                                    <li class="nk-menu-item">
                                                        <form method="POST">
                                                            <span class="nk-menu-text"><b>¿Tienes un negocio?</b></span>
                                                            <input type="text" value="new" name="newMrkado" style="display:none;" />
                                                            <input type="submit" value="Regístralo ahora GRATIS" style="background:none; border-color:none; color:white; font-weight:bold; border-radius:10px;" />
                                                        </form>
                                                    </li><!-- .nk-menu-item -->
                                            <?php }?>
                                                          
                                        </ul><!-- .nk-menu -->
                                    </div><!-- .nk-sidebar-menu -->
                                </div><!-- .nk-sidebar-content -->
                            </div><!-- .nk-sidebar-element -->
                        </div>
                        <!-- sidebar @e -->
                        <!-- wrap @s -->
                        <div class="nk-wrap ">
                            <!-- main header @s -->
                            <div class="nk-header nk-header-fixed is-light">
                                <div class="container-fluid">
                                    <div class="nk-header-wrap">
                                        <div class="nk-menu-trigger d-xl-none ml-n1">
                                            <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                                        </div>
                                        <div class="nk-header-tools">
                                            <ul class="nk-quick-nav">
                                                <li class="dropdown user-dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        <div class="user-toggle">
                                                            <div class="user-avatar sm">
                                                                <em><img src="../images/iconom.png" /></em>
                                                            </div>
                                                            <div class="user-info d-none d-md-block">
                                                            <!--  <div class="user-status">Administrator</div> -->
                                                                <div class="user-name dropdown-indicator"><?php echo $name." ".$apellido ?></div>
                                                            </div>
                                                        </div>
                                                    </a>

                                                    <!-- CALL THE CUSTOMER DROP MENU  -->
                                                    <?php include 'persona_drop_menu.php'; ?>

                                                </li><!-- .dropdown -->
                                                <?php include 'notificacion_drop_menu.php'; ?>
                                            </ul><!-- .nk-quick-nav -->
                                        </div><!-- .nk-header-tools -->
                                    </div><!-- .nk-header-wrap -->
                                </div><!-- .container-fliud -->
                            </div>
                            <!-- main header @e -->
                            <!-- main header @e -->
                
                    
    <?php } 

static function bienvenido($correo, $usuarioTipo)
{ ?>
    <!-- Contenido tiendas -->

    <!-- content @s -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm" >
                        <div class="nk-block-between" >
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Bienvenid@</h3>
                                <div class="nk-block-des text-soft">
                                  <!--  <p>Welcome to DashLite Dashboard Template.</p> -->
                                </div>
                            </div><!-- .nk-block-head-content --> 
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <!-- FIn bloque tienda -->
                    <div class="nk-block" style="margin-top:1%; text-align:center;">
                        <div class="row g-gs">
                            <div class="col-xxl-11" >
                                <p>Bienvenido a nuestro panel de administración.</p>
                                <p>Como MrKliente podrás ver y evaluar a los MrKados que hayas contactado.</p><br><br>
                                <p>Descubre los MrKados que están cerca de ti</p>
                                <a href="../index2-2.php?&correo=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>"><input type="button" value="Comienza ahora" style="background:#ffb800; border-color:#ffb800; color:white; font-weight:bold; border-radius:10px;" /></a><br>
                                <br><br>
                                <p>Como MrKado podrás agregar tu(s) negocio(s), impulsarlos y monitorear las estadísticas y opiniones que los MrKlientes te hayan hecho.</p><br>
                                <?php if($usuarioTipo == 1)
                                { ?>
                                    <p><b>¿Tienes un negocio?</b><br>
                                    <form method="POST">
                                        <input type="text" value="new" name="newMrkado" style="display:none;" />
                                        <input type="submit" value="Regístralo ahora GRATIS" style="background:#ffb800; border-color:#ffb800; color:white; font-weight:bold; border-radius:10px;" />
                                    </form>
                               <?php }
                                else{ ?>
                                    <a href="html/general/index.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>&op=registroTienda"><input type="button" value="¿Tienes un negocio?" style="background:#ffb800; border-color:#ffb800; color:white; font-weight:bold; border-radius:10px;" /></a>
                               <?php } ?>
                                </p>
                            </div>
                        </div>
                    </div>
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

   
</div> 
<!-- wrap @e -->
<?php }

static function configuracionCuenta($name, $apellido, $telefono, $contrasena, $fecha, $correo, $usuarioTipo, $idUser)
{ ?>
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
                                                            <h4 class="nk-block-title">Configuración de la Cuenta</h4>
                                                            <div class="data-item" >
                                                                    <div class="data-item" data-toggle="modal" data-target="#profile-edit" >      
                                                                        <input type="button" value="Actualizar Información" style="background:#ffbe00; color:black; font-weight:bold; border-color:#ffbe00; border-radius:10px;">
                                                                    </div>
                                                                    <div class="data-item" data-toggle="modal" data-target="#profile-delete" >
                                                                        <input type="button" value="Eliminar Cuenta" style="background:#ffbe00; color:black; font-weight:bold; border-color:#ffbe00; border-radius:10px;">
                                                                    </div>
                                                            </div>

                                                           
                                                        
                                                    </div>
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <div class="nk-data data-list">
                                                        <div class="data-item" >
                                                            <div class="data-col">
                                                                <span class="data-label">Nombre</span>
                                                                <span class="data-value"><?php echo $name; ?></span>
                                                            </div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" >
                                                            <div class="data-col">
                                                                <span class="data-label">Apellido</span>
                                                                <span class="data-value"><?php echo $apellido; ?></span>
                                                            </div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" >
                                                            <div class="data-col">
                                                                <span class="data-label">Teléfono</span>
                                                                <span class="data-value"><?php echo $telefono; ?></span>
                                                            </div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" >
                                                            <div class="data-col">
                                                                <span class="data-label">Correo Electrónico</span>
                                                                <span class="data-value text-soft"><?php echo $correo; ?></span>
                                                            </div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" >
                                                            <div class="data-col">
                                                                <span class="data-label">Fecha de Registro</span>
                                                                <span class="data-value"><?php echo $fecha; ?></span>
                                                            </div>
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
                    <h5 class="title">¿Estás seguro que deseas eliminar tu cuenta?</h5>
                    <img src="../images/PersonajeTriste.png" width="50%;" />
                    <div class="tab-content">
                        <form method="POST">
                            <div class="tab-pane active" id="personal">
                                <div class="row gy-4">
                                    <input type="text" class="form-control form-control-lg"  style="display:none;" name="id-eliminar"  value="<?php echo $idUser; ?>">
                                     
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
                                        <span>Esta seguro que desea eliminar tu cuenta?</span>
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <a href="html/general/user-profile-regular.php?correo=<?php echo $correo; ?>" > <input style="background:#ffb800; border-radius:10px; border-color:#ffb800; color: black; font-weight:bold;" type="submit" value="SI, realmente quiero eliminar la cuenta"></a>
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
<? }

static function estadisticas($correo, $conection, $usuarioTipo)
{ ?>

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
                                          <a href="html/general/index.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>&store=<?php echo $tiendaID; ?>&op=evaluacionT">  
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

<?php }

static function negocios($correo, $usuarioTipo, $conection)
{ ?>
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
                                            <li class="nk-block-tools-opt" style="background:#ffb800; border-color:#ffb800; color:white; font-weight:bold; border-radius:10px;"><a href="html/general/index.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>&op=registroTienda" ><span style="color:white; font-weight:bold;">Agrega tu Negocio</span></a></li>
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
                                        <input type="text" style="display:none;" class="form-control form-control-lg" id="idTienda" name="idTE">
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
<?php }

static function misSuscripciones($correo, $usuarioTipo, $conection, $idUser)
{ ?>
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
                                                        <li class="order-md-last"><a href="html/general/index.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo ?>&op=planes" class="btn btn-white btn-dim btn-outline-primary" style="background:#ffb800; border-color:#ffb800; color:white; font-weight:bold; border-radius:10px;"><span>Conoce nuestros planes</span></a></li>
                                                     <?php }
                                                ?>
                                                  </ul>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block">
                                        <div class="col-12" style="text-align:center;">
                                            <span>¡No esperes más! Lleva tus negocios a otro nivel.</span><br>
                                            <span>Adquiere una suscripción y nosotros te ayudamos a impulsar el perfil de tus MrKados.</span> <br>
                                           <?php
                                                    if(mysqli_num_rows($tiendas) != 0)
                                                    {?>
                                                        <span>Da click <a href="html/general/index.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo ?>&op=planes"><b>AQUÍ</b></a> para conocer nuestras suscripciones.</span> <br>
                                                    <?php } ?>
                                            
                                            
                                        </div>    
                                        <?php 
                                            $query_sus = "select * from suscripciones_rel where id_user = '$idUser' AND active = '1';";
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
                                                                        <?php echo $idid; ?> | Plan: <?php echo $row_sus['plan']; ?> 
                                                                            <?php if($row_sus['active'] == 1)
                                                                            { ?>
                                                                                <span class="badge badge-success badge-pill" style="background:#ffb800; border-color:#ffb800; color:black;">Activo</span>
                                                                            <?php }
                                                                            else if($row_sus['active'] == 2)
                                                                            { ?>
                                                                                <span class="badge badge-warning badge-pill" style="background:black; border-color:black; color:white;">Pendiente</span>
                                                                           <?php } else {?>
                                                                                <span class="badge badge-light badge-pill">Expirado</span>
                                                                           <?php } ?>
                                                                        
                                                                    </h6>
                                                                    <p>ID de suscripción: <span class="text-base"><?php echo $row_sus['id']; ?></span></p>
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
                                                                <p><span class="text-soft">Precio de suscripción</span> $<?php echo $row_sus['precio']; ?> MXN</p>
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
                                                            <p>Tu suscripción vence el:  <span><?php echo $row_sus['hasta']; ?></span></p>
                                                        </div>
                                                        <?php 
                                                            if($row_sus['formulario'] == 0) {
                                                                ?>
                                                                    <div class="row">
                                                                        <a href="/src/html/general/index.php?user=<?php echo $correo ?>&type=<?php echo $usuarioTipo ?>&it=<?php echo $id_t; ?>&nt=<?php echo $idid; ?>&si=<?php echo $si; ?>&kt=<?php echo $row_sus['plan']; ?>&op=formulario"><input type="button" value="Llenar formulario AHORA" style="background:#ffb800; border-color:#ffb800; color:white; font-weight:bold; border-radius:10px;"/></a>
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
                                    <?php
                                    $query_sus = "select * from suscripciones_rel where id_user = '$idUser' AND active = '1';";
                                            $Result_sus = mysqli_query($conection,$query_sus);
                                                        
                                            if(mysqli_num_rows($Result_sus) != 0)
                                            {?>
                                                <div class="col-12">Te recordamos que la renovación estará disponible una vez que haya finalizado el periodo de tu suscripción activa.</div>
                                                <div class="col-12">¡No te preocupes! Te enviaremos un correo para recordarte. </div> 
                                                <div class="col-12">
                                                    Contesta el formulario durante del las primeras 72 horas de contratación, ya que es información fundamental para publicitarte de la mejor manera, de lo contrario tu campaña se postergará para el siguiente mes. La suscripción contratada puede ser postergada máximo en 3 ocasiones. Después de este tiempo, se perderá tu suscripción y no habrá ningún rembolso. Solo tienes 1 oportunidad para llenar el formulario, por lo que te pedimos seas consciente de la información que nos envías. En caso de que quieras modificar el formulario, envíanos un correo a hola@mrkados.com
                                                </div>
                                            <?php } ?>
                                   
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->    
<?php }

static function planes($conection)
{ ?>
  <!-- content @s -->
  <div class="nk-content ">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
                           
                            <div class="nk-content-body">
                                <div class="nk-content-wrap">
                                    <div class="nk-block-head nk-block-head-lg">
                                        <div class="nk-block-head-sub"><span>Somos MrKados</span></div>
                                        <div class="nk-block-between-md g-4">
                                            <div class="nk-block-head-content">
                                                <h2 class="nk-block-title fw-normal">Suscripciones disponibles</h2>
                                                <div class="nk-block-des">
                                                    <!-- <p>You can change your plan any time by upgrade your plan</p> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block">
                                            <div class="sp-package text-center">
                                                <ul class="sp-package-plan nav nav-switch nav-tabs">
                                                    <li class="nav-item">
                                                        <div class="nav-link" id="Mensual" style="color:black; background:#ffb800">Mensual</div>
                                                    </li>
                                                  <!--  <li class="nav-item">
                                                        <div class="nav-link " id="anual" style="color:black;">Anual</div>
                                                    </li> -->
                                                </ul>
                                            </div>
                                    </div>

                                    <!-- Jquery que hace el efecto de esconde ry mostart los preicos por mensualidad y anual -->
                                    <script>
                                      $("#anual").click(function(){
                                        $("#bloque_mensual").hide();
                                        $("#Mensual").css("background-color","#f5f6fa");
                                        //$("#Mensual").removeClass("active");
                                        $("#bloque_anual").show();
                                        //$("#anual").addClass("active");
                                        $("#anual").css("background-color","#ffb800");
                                    });

                                    $("#Mensual").click(function(){
                                        $("#bloque_anual").hide();
                                        $("#anual").css("background-color","#f5f6fa");
                                        $("#bloque_mensual").show();
                                        $("#Mensual").css("background-color","#ffb800");
                                    });
                                    </script>  
                                    <!-- ENDING Jquery que hace el efecto de esconde ry mostart los preicos por mensualidad y anual -->

                                    <div class="nk-block" id="bloque_mensual">
                                        <div class="nk-block"> <!-- Bloque de precios de planes mensuales -->
                                            <div class="row g-gs">
                                                <?php
                                                    $query_Planes = "select * from tipos_subscription order by id ASC;";
                                                    $result_planes = mysqli_query($conection,$query_Planes);
                                                    
                                                    while ($row_planes = mysqli_fetch_assoc($result_planes)) 
                                                    {
                                                        ?>
                                                            <div class="col-md-3"> <!-- Bloque que muestra la suscripcion  -->
                                                                <div class="price-plan card card-bordered text-center"> 
                                                                    <div class="card-inner">
                                                                        <div class="price-plan-media">
                                                                            <?php
                                                                        if($row_planes['id'] == "4")
                                                                        { ?>
                                                                            <img src="html/general/images/planes/logo2.png" alt="">
                                                                       <?php }
                                                                       else if($row_planes['id'] == "5")
                                                                       { ?>
                                                                           <img src="html/general/images/planes/logo2.png" alt="">
                                                                      <?php }
                                                                       else if($row_planes['id'] == "6")
                                                                       { ?>
                                                                            <img src="html/general/images/planes/logo3.png" alt="">
                                                                       <?php }
                                                                       else if($row_planes['id'] == "7")
                                                                       { ?>
                                                                            <img src="html/general/images/planes/logo.png" alt="">
                                                                       <?php }
                                                                        else if($row_planes['id'] == "8")
                                                                        {  ?>
                                                                        
                                                                             <img src="html/general/images/planes/hiper.png" alt="">
                                                                        <?php }
                                                                    ?>
                                                                </div>
                                                                <div class="price-plan-info">
                                                                    <h5 class="title" id="tittleMP"><?php echo $row_planes['name']; ?></h5>
                                                                    
                                                                </div>
                                                                <div class="price-plan-amount">
                                                                    <?php
                                                                        if($row_planes['id'] != "4")
                                                                        { ?>
                                                                            <div class="amount">$<?php echo $row_planes['precio']; ?><span> MXN</span></div>
                                                                        <?php }
                                                                        else
                                                                        { ?>
                                                                            <div class="amount"><span>Gratis</span></div>
                                                                        <?php }
                                                                    ?>
                                                                    <!-- <span class="bill">1 User, Billed Yearly</span> -->
                                                                </div>
                                                                <div class="price-plan-action">
                                                                   
                                                                <a href="#" id="selecPlanM" data-id="<?php echo $row_planes['name'].",".$row_planes['precio']; ?>"  data-toggle="modal" data-target="#mensualidadWindow" style="background:#ffb800; border-color:#ffb800;" class="btn btn-primary">Adquirir</a>
                                                                    
                                                                </div>
                                                                <script>
                                                                    $(document).on("click", "#selecPlanM", function () {
                                                                        var passedID = $(this).data('id');//get the id of the selected button
                                                                        var planName = passedID.split(",");
                                                                        $('#planNameAdd').val(planName[0]);;//set the id to the input on the modal
                                                                        $('#planNameAddd').val(planName[0]);;//set the id to the input on the modal
                                                                        $('#precioMP').val(planName[1]);;//set the id to the input on the modal
                                                                        $('#precioMPd').val(planName[1]);;//set the id to the input on the modal
                                                                    });
                                                                </script>
                                                            </div>
                                                        </div><!-- .price-item -->
                                                    </div><!-- .col --> <!-- ENDING Bloque que muestra la suscripcion -->
                                                <?php } ?>
                                            </div><!-- .row --> <!-- ENDING Bloque de precios de planes mensuales -->
                                        </div><!-- .nk-block --> <!-- Bloque de precios de planes anuales -->

                                        <!-- middle block that shows IVA message. -->
                                        <div class="nk-block" style="text-align:center"> 
                                            <span class="bill">Precios con IVA incluido</span><br>
                                            <span class="bill" style="color:red;">Si deseas factura solicítala al correo mifactura@mrkados.com <br>
Si tu pago será en efectivo, no olvides escribir el correo electrónico de tu usuario registrado
</span>
                                        </div> 
                                        <!-- ENDING middle block that shows IVA message. -->
                                        
                                        <div class="nk-block">
                                            <div class="card card-bordered">
                                                <table class="table table-features">
                                                    <thead class="tb-ftr-head thead-light">
                                                        <tr class="tb-ftr-item">
                                                            <th class="tb-ftr-info">Incluye</th>
                                                            <?php 
                                                                $query_Planes = "select * from tipos_subscription order by id ASC;";
                                                                $result_planes = mysqli_query($conection,$query_Planes);
                                                                
                                                                while ($row_planes = mysqli_fetch_assoc($result_planes)) 
                                                                { 
                                                                    if($row_planes['id'] != "5")
                                                                    {?>
                                                                        <th class="tb-ftr-plan"><?php echo $row_planes['name']; ?></th>
                                                                    <?php } ?>
                                                        
                                                            <?php } ?>
                                                        </tr><!-- .tb-ftr-item -->
                                                    </thead>
                                                    <tbody class="tb-ftr-body">
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Espacio propio en el directorio de MrKados</td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            </tr><!-- .tb-ftr-item -->
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Ubicacion en carrusel "Lo mas nuevo" los primeros 7 dias en pagina principal de MrKados</td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                        </tr><!-- .tb-ftr-item -->
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Poster autoadherible para tienda fisica</td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                        </tr><!-- .tb-ftr-item -->
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Diseno de publicaciones para redes sociales (FB e IG)</td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-check"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                        </tr><!-- .tb-ftr-item -->
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Publicaciones mensuales en redes sociales</td>
                                                            <td class="tb-ftr-plan"><span>1</span></td>
                                                            <td class="tb-ftr-plan"><span>1</span></td>
                                                            <td class="tb-ftr-plan"><span>2</span></td>
                                                            <td class="tb-ftr-plan"><span>2</span></td>
                                                        </tr><!-- .tb-ftr-item -->
                                                        
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Espacio en cuponera digital <a data-toggle="modal" data-target="#showCuponera">?</a></td>
                                                            <td class="tb-ftr-plan"><span>-</span></td>
                                                            <td class="tb-ftr-plan"><span>Basico</span></td>
                                                            <td class="tb-ftr-plan"><span>Estandar</span></td>
                                                            <td class="tb-ftr-plan"><span>Premium</span></td>
                                                        </tr><!-- .tb-ftr-item -->
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Ubicacion en carrusel "Tal vez te interese" en pagina de mrkados</td>
                                                            <td class="tb-ftr-plan"><span>-</span></td>
                                                            <td class="tb-ftr-plan"><span>-</span></td>
                                                            <td class="tb-ftr-plan"><span>-</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                        </tr><!-- .tb-ftr-item -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- .nk-block --><!-- ENDING Bloque de precios de planes mensuales -->
                                    </div><!-- .nk-block --> <!--ENDING Bloque de total precios -->
                                    <div class="col-12" style="text-align:center;">
                                         <a href="" style="color:black;">Terminos y Condiciones</a>
                                    </div>

                                    <!-- BLOQUE PLANES ANUALES --> 
                                  <!--  <div class="nk-block" style="display:none;" id="bloque_anual">
                                        <div class="nk-block">  Bloque de precios de planes mensuales -->
                                          <!--  <div class="row g-gs"> -->
                                                <?php
                                                   /* $query_Planes = "select * from tipos_subscription order by id ASC;";
                                                    $result_planes = mysqli_query($conection,$query_Planes);
                                                    
                                                    while ($row_planes = mysqli_fetch_assoc($result_planes)) 
                                                    {
                                                        $total_anual = $row_planes['precio_anual'] * 12;
                                                        $total_mensual = $row_planes['precio'] * 12;
                                                        $diferencia = $total_mensual - $total_anual;
                                                       
                                                        if($row_planes['id'] != "5")
                                                        {?>
                                                    <div class="col-md-3"> <!-- Bloque que muestra la suscripcion  -->
                                                        <div class="price-plan card card-bordered text-center"> 
                                                            <div class="card-inner">
                                                                <div class="price-plan-media">
                                                                <?php
                                                                       if($row_planes['id'] == "4")
                                                                       { ?>
                                                                           <img src="html/general/images/planes/logo2.png" alt="">
                                                                      <?php }
                                                                      else if($row_planes['id'] == "6")
                                                                      { ?>
                                                                           <img src="html/general/images/planes/logo3.png" alt="">
                                                                      <?php }
                                                                      else if($row_planes['id'] == "7")
                                                                      { ?>
                                                                           <img src="html/general/images/planes/logo.png" alt="">
                                                                      <?php }
                                                                       else if($row_planes['id'] == "8")
                                                                       {  ?>
                                                                       
                                                                            <img src="html/general/images/planes/hiper.png" alt="">
                                                                       <?php }
                                                                    ?>
                                                                </div>
                                                                <div class="price-plan-info">
                                                                    <h5 class="title"><?php echo $row_planes['name']; ?></h5>
                                                                    
                                                                </div>
                                                                <div class="price-plan-amount">
                                                                    <?php
                                                                        if($row_planes['id'] != "4")
                                                                        { 
                                                                            $porcenatge = ( $diferencia * 100 ) / $total_mensual;

                                                                            ?>
                                                                            <div class="amount"><?php echo $row_planes['precio_anual']; ?><span> MXN</span></div>
                                                                            <span class="bill">1 pago anual de <?php echo $total_anual ?>MXN</span> 
                                                                            <span class="bill">Te ahorraras <?php echo $porcenatge ?>%</span> 
                                                                        <?php }
                                                                        else
                                                                        { ?>
                                                                            <div class="amount"><span>Gratis</span></div>
                                                                            <span class="bill" style="color:#fcfcfc">1 pago anual de <?php echo $total_anual ?>MXN</span> 
                                                                            <span class="bill" style="color:#fcfcfc">Te ahorrara< un total de 475943 </span> 
                                                                        <?php }
                                                                    ?>
                                                                    
                                                                </div>
                                                                <div class="price-plan-action">
                                                                   
                                                                   <a href="#" id="selecPlanA" data-id="<?php echo $row_planes['name'].",".$total_anual; ?>" style="background:#ffb800; border-color:#ffb800;" data-toggle="modal" data-target="#anualWindow" class="btn btn-primary">Selecciona este plan</a>
                                                                       
                                                                   </div>
                                                                   <script>
                                                                       $(document).on("click", "#selecPlanA", function () {
                                                                           var passedID = $(this).data('id');//get the id of the selected button
                                                                           var planName = passedID.split(",");
                                                                           $('#planNameAddA').val(planName[0]);;//set the id to the input on the modal
                                                                           $('#planNameAddAd').val(planName[0]);;//set the id to the input on the modal
                                                                           $('#precioAP').val(planName[1]);;//set the id to the input on the modal
                                                                           $('#precioAPd').val(planName[1]);;//set the id to the input on the modal
                                                                       });
                                                                   </script>
                                                            </div>
                                                        </div><!-- .price-item -->
                                                    </div><!-- .col --> <!-- ENDING Bloque que muestra la suscripcion -->
                                                <?php } } */?>
                                          <!--  </div> .row --> <!-- ENDING Bloque de precios de planes mensuales -->
                                       <!--  </div> .nk-block --> <!-- Bloque de precios de planes anuales -->
                                        
                                         <!-- middle block that shows IVA message. -->
                                        <!-- <div class="nk-block" style="text-align:center"> 
                                            <span class="bill">Los precios no incluyen IVA</span><br>
                                            <span class="bill" style="color:red;">Si deseas pagar con efectivo, debes colocar el correo registrado en mrkados</span>
                                        </div> -->
                                        <!-- ENDING middle block that shows IVA message. -->

                                      <!--  <div class="nk-block">
                                            <div class="card card-bordered">
                                                <table class="table table-features">
                                                    <thead class="tb-ftr-head thead-light">
                                                        <tr class="tb-ftr-item">
                                                            <th class="tb-ftr-info">Incluye</th> -->
                                                            <?php 
                                                               /* $query_Planes = "select * from tipos_subscription order by id ASC;";
                                                                $result_planes = mysqli_query($conection,$query_Planes);
                                                                
                                                                while ($row_planes = mysqli_fetch_assoc($result_planes)) 
                                                                { 
                                                                    if($row_planes['id'] != "5")
                                                                    {?>
                                                                        <th class="tb-ftr-plan"><?php echo $row_planes['name']; ?></th>
                                                                    <?php } ?>
                                                        
                                                            <?php } */ ?>
                                                      <!--  </tr> 
                                                    </thead>
                                                    <tbody class="tb-ftr-body">
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Espacio propio en el directorio de MrKados</td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            </tr>
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Ubicacion en carrusel "Lo mas nuevo" los primeros 7 dias en pagina principal de MrKados</td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                        </tr>
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Poster autoadherible para tienda fisica</td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                        </tr>
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Diseno de publicaciones para redes sociales (FB e IG)</td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                        </tr>
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Publicaciones mensuales en redes sociales</td>
                                                            <td class="tb-ftr-plan"><span>1</span></td>
                                                            <td class="tb-ftr-plan"><span>12</span></td>
                                                            <td class="tb-ftr-plan"><span>24</span></td>
                                                            <td class="tb-ftr-plan"><span>24</span></td>
                                                        </tr>
                                                       
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Espacio en cuponera digital <a data-toggle="modal" data-target="#showCuponera">?</a></td>
                                                            <td class="tb-ftr-plan"><span>-</span></td>
                                                            <td class="tb-ftr-plan"><span>Basico</span></td>
                                                            <td class="tb-ftr-plan"><span>Estandar</span></td>
                                                            <td class="tb-ftr-plan"><span>Premium</span></td>
                                                        </tr>
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Ubicacion en carrusel "Tal vez te interese" en pagina de mrkados</td>
                                                            <td class="tb-ftr-plan"><span>-</span></td>
                                                            <td class="tb-ftr-plan"><span>-</span></td>
                                                            <td class="tb-ftr-plan"><span>-</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div> 
                                    </div>  .  -->              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->
<?php }

static function satisfactorio()
{ ?>
     <!-- content @s -->
     <div class="nk-content ">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
                           
                            <div class="nk-content-body">
                                <div class="nk-content-wrap">
                                    <div class="nk-block-head nk-block-head-lg">
                                        <div class="nk-block-between-md g-4">
                                            <div class="nk-block-head-content">
                                                <h2 class="nk-block-title fw-normal" style="text-align:center; marin-top:10%;">Su Informacion fue enviada satisfactoriamente</h2>
                                            </div>
                                        </div>
                                        <div class="col-12" style="margin:auto;">
                                            <img style="width:40%; margin-left:30%;" src="../../../images/mrkados-inicia.png"/>
                                        </div>
                                    </div><!-- .nk-block-head -->   
                                    <!-- ENDING PLANES ANUAlES -->   .                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->
<?php }

static function formulario($nombre_tienda, $kt)
{ ?>
     <!-- content @s -->
     <div class="nk-content " style="background-image: url('../../../images/amarillo-back.png');">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-content-wrap">
                                    <div class="nk-block-head nk-block-head-lg">
                                        
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block">
                                       <!-- <span style="margin-left:12%;">Para renovar tu suscripcion, debes esperar a la fecha de vencimiento del mismo para poder elegir otro.</span> -->
                                               
                                        <div class="card card-bordered sp-plan"> <!-- Bloque de suscripcion -->
                                            <div class="row no-gutters">
                                                <div class="col-md-12" style="text-align:center;">
                                                    <h2 class="nk-block-title">Formulario de la tienda <?php echo $nombre_tienda; ?></h2>
                                                    <img src="../../../images/Mrkados Logo.png"/>
                                                </div><!-- .col -->
                                                <div class="col-md-12">
                                                    <div class="col-md-11" style="margin-left:4%;">
                                                        <h5>Conociendo al MrKado</h5>
                                                        <p>Hola, bienvenido a este cuestionario, éste está hecho para conocerte a ti a tu negocio, que en
        nuestro mundo lo llamamos MrKado. Por favor respondelo para saber más de tu MrKado.</p>
                                                        <form method="POST" enctype="multipart/form-data">
                                                            <label>Cual es el nombre de tu Marca o M rKado?</label>
                                                            <input type="text" name="nombreTienda" value="<?php echo $nombre_tienda ?>" disabled style="width:100%"/>
                                                            <input type="text" name="nombreTienda" value="<?php echo $nombre_tienda ?>"  style="width:100%; display:none;"/>
                                                            <br><br>
                                                            <label>Escribe brevemente a qué servicio o producto ofreces con tu marca:</label>
                                                            <textarea name="descripcion" required style="width:100%; height:50px;">
                                                            </textarea>
                                                            <br><br>
                                                            <label>Qué información, descuento o promoción quieres que se coloque en cada promoción?</label><br><br>
                                                            <br><br>
                                                            <label>Publicación en semana 1 en Facebook:</label>
                                                            <textarea name="descripcionFace" required style="width:100%; height:50px;">
                                                            </textarea>

                                                            <label>Seleccione la imagen de la semana 1:</label>
                                                            <input type="file" name="image1" accept="image/png, image/jpeg"/>
                                                            <br>
                                                            <label>La imagen debe ser de 1200 x 1200 </label>
                                                            <br><br>

                                                            <label>Vigencia de esta promoción o descuento:</label>
                                                            <input type="text" name="vigenciaFace" value="" style="width:50%"/>
                                                            <br><br>
                                                            <label>Publicación en semana 2 en Mailing:</label>
                                                            <textarea name="descripcionMail" required style="width:100%; height:50px;">
                                                            </textarea>

                                                            <label>Seleccione la imagen de la semana 2:</label>
                                                            <input type="file" name="image2" accept="image/png, image/jpeg"/>
                                                            <br>
                                                            <label>La imagen debe ser de 1200 x 1200 </label>
                                                            <br><br>

                                                            <label>Vigencia de esta promoción o descuento:</label>
                                                            <input type="text" name="vigenciaMail" value="" style="width:50%"/>
                                                            <br><br>
                                                            

                                                            
                                                            <?php if($kt != 'Mrkado')
                                                            { ?>
                                                                <br>
                                                                <label>Publicación en semana 3 en Facebook:</label>
                                                                    <textarea name="descripcion3Face" required style="width:100%; height:50px;">
                                                                </textarea>
                                                                <label>Seleccione la imagen de la semana 3:</label>
                                                                <input type="file" name="image3" accept="image/png, image/jpeg"/>
                                                                <br>
                                                                <label>La imagen debe ser de 1200 x 1200 </label>
                                                                <br><br>

                                                                <label>Vigencia de esta promoción o descuento:</label>
                                                                <input type="text" name="vigencia3Face" value="" style="width:50%"/>
                                                                <br><br>
                                                            <?php } ?>

                                                            <?php if($kt == 'Mrkadito Social')
                                                            { ?>
                                                                    <br>
                                                                    <label>Publicación en semana 4 en Facebook:</label>
                                                                    <textarea name="descripcion4Face" required style="width:100%; height:50px;">
                                                                    </textarea>

                                                                    <label>Seleccione la imagen de la semana 4:</label>
                                                                    <input type="file" name="image4" accept="image/png, image/jpeg"/>
                                                                    <br>
                                                                    <label>La imagen debe ser de 1200 x 1200 </label>
                                                                    <br><br>

                                                                    <label>Vigencia de esta promoción o descuento:</label>
                                                                    <input type="text" name="vigencia4Face" value=""  style="width:50%"/>
                                                                    <br><br>
                                                            <?php }
                                                            ?>

                                                            
                                                            <label>Qué alcande de distribución tienes?</label>
                                                            <select name="alcance" required style="width:60%;">
                                                                <option value="-">--</option>
                                                                <option value="Sólo en mi local o domicilio">Sólo en mi local o domicilio</option>
                                                                <option value="En mi colonia">En mi colonia</option>
                                                                <option value="A 30 mts o menos de mi ubicación">A 30 mts o menos de mi ubicación</option>
                                                                <option value="En puntos específicos de la ciudad">En puntos específicos de la ciudad</option>
                                                                <option value="En todo León Gto">En todo León Gto</option>
                                                            </select>
                                                        
                                                            <label style="width:100%;">Qué datos de contacto tendrán tus publicaciones?</label>
                                                            <select name="contacto1" required>
                                                                <option value="-">--</option>
                                                                <option value="Teléfono fijo">Teléfono fijo</option>
                                                                <option value="Whatsaap">Whatsaap</option>
                                                                <option value="Red social">Red social</option>
                                                                <option value="Página web">Página web</option>
                                                                <option value="E-mail">E-mail</option>
                                                            </select>

                                                            <input type="text" name="contactoValue1" value=""  style="width:80%; "/><br><br>

                                                            <select name="contacto2" required>
                                                                <option value="-">--</option>
                                                                <option value="Teléfono fijo">Teléfono fijo</option>
                                                                <option value="Whatsaap">Whatsaap</option>
                                                                <option value="Red social">Red social</option>
                                                                <option value="Página web">Página web</option>
                                                                <option value="E-mail">E-mail</option>
                                                            </select>

                                                            <input type="text" name="contactoValue2" value=""  style="width:80%"/><br><br>

                                                            <select name="contacto3" required>
                                                                <option value="-">--</option>
                                                                <option value="Teléfono fijo">Teléfono fijo</option>
                                                                <option value="Whatsaap">Whatsaap</option>
                                                                <option value="Red social">Red social</option>
                                                                <option value="Página web">Página web</option>
                                                                <option value="E-mail">E-mail</option>
                                                            </select>

                                                            <input type="text" name="contactoValue3" value=""  style="width:80%"/><br><br>

                                                            <label>Qué restricciones nos tienes para el uso de tu marca? (Qué NO debemos usar: colores,
formas, elementos visuales, etc)</label>
                                                            <textarea name="otros" required style="width:100%; height:50px;">
                                                            </textarea>
                                                            
                                                            <br><br>
                                                            <input type="submit" value="Enviar" style="background:#ffb800; border-color:#ffb800; color:Black; font-weight:bold; border-radius:10px;" />
                                                            <br><br>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div><!-- .row -->
                                        </div><!-- .sp-plan --> <!-- ENDING blopque suscripcion -->
                                       
                                    </div><!-- .nk-block -->
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->    
<?php }

static function evaluacionT($tiendaIdtestimonio, $correo, $conection, $usuarioTipo)
{ ?>
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
                                                                $query3 = "select * from testimonios where id_tienda = '$tiendaIdtestimonio' order by fecha desc;";
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
<?php }

static function complement()
{ ?>    
        </div><!-- wrap @e -->
    </div><!-- main @e -->
    
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=1.6.0"></script>
    <script src="./assets/js/scripts.js?ver=1.6.0"></script>
    <script src="./assets/js/charts/gd-general.js?ver=1.6.0"></script>
</body>

</html>
<script type="text/javascript">
	$(document).ready(function(){
		//$('#lista1').val(1);
		recargarLista();

		$('#listCat').change(function(){
            subCatValue = 2;
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"html/general/datos.php",
			data:"id_categoria=" + $('#listCat').val(),
			success:function(r){
				$('#subcatList1').html(r);
			}
		});

        $.ajax({
			type:"POST",
			url:"html/general/datos2.php",
			data:"id_categoria=" + $('#listCat').val(),
			success:function(r){
				$('#subcatList2').html(r);
			}
		});

        $.ajax({
			type:"POST",
			url:"html/general/datos3.php",
			data:"id_categoria=" + $('#listCat').val(),
			success:function(r){
				$('#subcatList3').html(r);
			}
		});

        $.ajax({
			type:"POST",
			url:"html/general/datos4.php",
			data:"id_categoria=" + $('#listCat').val(),
			success:function(r){
				$('#subcatList4').html(r);
			}
		});

        $.ajax({
			type:"POST",
			url:"html/general/datos5.php",
			data:"id_categoria=" + $('#listCat').val(),
			success:function(r){
				$('#subcatList5').html(r);
			}
		});
	}
</script>

<?php } 

static function complementSuscripcion()
{?>
</div><!-- wrap @e -->
    </div><!-- main @e -->
    
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=1.6.0"></script>
    <script src="./assets/js/scripts.js?ver=1.6.0"></script>
    <script src="./assets/js/charts/gd-general.js?ver=1.6.0"></script>
<?php }

static function complementAllSuscription()
{ ?>    

</body>

</html>

<?php } 

static function ventanasEmergentes()
{ ?>    
 <!-- @@Modal - Subscription Change @s -->
        <div class="modal fade" tabindex="-1" id="subscription-change">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                    <div class="modal-body modal-body-md">
                        <div class="sp-package text-center">
                            <div class="sp-package-head">
                                <h4 class="title">Change Subscription</h4>
                                <p class="text-soft">This change will become effective on Jan 14, 2020 on your account.</p>
                            </div>
                            <ul class="sp-package-plan nav nav-switch nav-tabs">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">Yearly</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Monthly</a>
                                </li>
                            </ul>
                            <ul class="sp-package-list">
                                <li class="sp-package-item">
                                    <input class="sp-package-choose" type="radio" name="subscription-pack-plan" id="pack-plan-entprise" checked="">
                                    <label class="sp-package-desc" for="pack-plan-entprise">
                                        <span class="sp-package-info">
                                            <span class="sp-package-title title">Enterprise Plan <span class="badge badge-primary badge-pill">Current</span></span>
                                            <span class="sp-package-detail">Unlimited Access / $599.00 USD / Year</span>
                                        </span>
                                        <span class="sp-package-price">
                                            <span class="sp-package-amount yearly">
                                                <span class="amount">$599.00</span>
                                                <span class="text-soft">Yearly</span>
                                            </span>
                                            <span class="sp-package-amount monthly d-none">
                                                <span class="amount">$99.00</span>
                                                <span class="text-soft">Monthly</span>
                                            </span>
                                        </span>
                                    </label>
                                </li>
                                <li class="sp-package-item">
                                    <input class="sp-package-choose" type="radio" name="subscription-pack-plan" id="pack-plan-pro">
                                    <label class="sp-package-desc" for="pack-plan-pro">
                                        <span class="sp-package-info">
                                            <span class="sp-package-title title">NioPro Plan</span>
                                            <span class="sp-package-detail">Unlimited Access / $249.00 USD / Year</span>
                                        </span>
                                        <span class="sp-package-price">
                                            <span class="sp-package-amount yearly">
                                                <span class="amount">$299.00</span>
                                                <span class="text-soft">Yearly</span>
                                            </span>
                                            <span class="sp-package-amount monthly d-none">
                                                <span class="amount">$49.00</span>
                                                <span class="text-soft">Monthly</span>
                                            </span>
                                        </span>
                                    </label>
                                </li>
                                <li class="sp-package-item">
                                    <input class="sp-package-choose" type="radio" name="subscription-pack-plan" id="pack-plan-free">
                                    <label class="sp-package-desc" for="pack-plan-free">
                                        <span class="sp-package-info">
                                            <span class="sp-package-title title">Free Plan</span>
                                            <span class="sp-package-detail">Free Access / $0.00 USD / Year</span>
                                        </span>
                                        <span class="sp-package-price">
                                            <span class="sp-package-amount yearly">
                                                <span class="amount">$0.00</span>
                                                <span class="text-soft">Yearly</span>
                                            </span>
                                            <span class="sp-package-amount monthly d-none">
                                                <span class="amount">$0.00</span>
                                                <span class="text-soft">Monthly</span>
                                            </span>
                                        </span>
                                    </label>
                                </li>
                            </ul>
                            <div class="sp-package-action">
                                <a href="#" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#subscription-confirmed">Change Plan</a>
                                <a href="#" class="btn btn-dim btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#subscription-cancel">Cancel Plan</a>
                            </div>
                        </div>
                    </div>
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div><!-- .modal -->
        <!-- @@Modal - Confirm Plan @s -->
        <div class="modal fade" tabindex="-1" id="subscription-confirmed">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-body modal-body-md text-center">
                        <div class="nk-modal">
                            <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                            <h4 class="nk-modal-title">Plan Change Successfully!</h4>
                            <div class="nk-modal-text">
                                <p>It will effect at the end of your current billing cycle on <strong>01 Feb 2020</strong>. We sent you a confirmation email <strong>(this may take up to 3 hours to receive)</strong>.</p>
                                <p class="sub-text-sm"><a href="#">Click here</a> to learn more about subscription plan.</p>
                            </div>
                            <div class="nk-modal-action-lg">
                                <a href="#" class="btn btn-mw btn-light" data-dismiss="modal">Return</a>
                            </div>
                        </div>
                    </div><!-- .modal-body -->
                    <div class="modal-footer bg-lighter">
                        <div class="text-center w-100">
                            <p>Earn upto $25 for each friend your refer! <a href="#">Invite friends</a></p>
                        </div>
                    </div>
                </div><!-- .modal-content -->
            </div><!-- .modla-dialog -->
        </div><!-- .modal -->
        <!-- @@Modal - Subscription Cancle @s -->
        <div class="modal fade" tabindex="-1" id="subscription-cancel">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                    <div class="modal-body modal-body-md">
                        <h4 class="nk-modal-title title">Cancel Your Subscription</h4>
                        <p><strong>Are you sure you want to cancel your subscription?</strong></p>
                        <p>If you cancel, you'll lose your all demand. But you can re-subscription your favourite plan any time.</p>
                        <div class="form">
                            <div class="form-group">
                                <label class="form-label">Enter your password to confirm cancellation</label>
                                <div class="form-control-wrap">
                                    <input type="password" class="form-control" placeholder="*********">
                                </div>
                                <div class="form-note">
                                    <span>You'll receieve confirmation email once successfully cancel your plan.</span>
                                </div>
                            </div>
                            <ul class="align-center flex-wrap g-3">
                                <li>
                                    <button class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#subscription-cancel-confirmed">Cancel Subscription</button>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-light" data-dismiss="modal">Never mind, don't cancel</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .modal-content -->
            </div><!-- .modla-dialog -->
        </div><!-- .modal -->
        <!-- @@Modal - Subscription Cancle Confirmed @s -->
        <div class="modal fade" tabindex="-1" id="subscription-cancel-confirmed">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body modal-body-md text-center">
                        <div class="nk-modal">
                            <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success-dim text-success"></em>
                            <h4 class="nk-modal-title">Successfully Cancelled</h4>
                            <div class="nk-modal-text">
                                <p>It will effect at the end of your current billing cycle on <strong>01 Feb 2020</strong>. We sent you a confirmation email <strong>(this may take up to 3 hours to receive)</strong>.</p>
                                <p class="sub-text-sm"><a href="#">Click here</a> to learn more about subscription plan.</p>
                            </div>
                            <div class="nk-modal-action-lg">
                                <a href="#" class="btn btn-mw btn-light" data-dismiss="modal">Return</a>
                            </div>
                        </div>
                    </div><!-- .modal-body -->
                    <div class="modal-footer bg-lighter">
                        <div class="text-center w-100">
                            <p>You can easily re-subscription your favourite plan any time.</p>
                        </div>
                    </div>
                </div><!-- .modal-content -->
            </div><!-- .modla-dialog -->
        </div><!-- .modal -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=1.6.0"></script>
    <script src="./assets/js/scripts.js?ver=1.6.0"></script>
<?php } 

static function ventanasEmergentesPlanes($correo, $conection)
{ ?>    
    <!-- @@Modal - Subscription Change @s -->
    <div class="modal fade" tabindex="-1" id="mensualidadWindow">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                    <div class="modal-body modal-body-md">
                        <div class="sp-package text-center">
                            <div class="sp-package-head">
                                <h4 class="title">Confirmación de suscripción</h4>
                            </div>
                            <form method="POST">
                                <table>
                                    <tr>
                                        <td>
                                            <span class="sp-package-title title">Suscripción seleccionada</span>
                                        </td>
                                        <td>
                                            <input type="text" name="planNameAdd" id="planNameAdd" val="" style="display:none;">
                                            <input type="text" name="" id="planNameAddd" val="" disabled />
                                            <input type="text" name="usuarioCorreo" value="<?php echo $correo; ?>" style="display:none;" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="sp-package-title title">¿En qué negocio quieres aplicar la suscripción?</span>
                                        </td>
                                        <td>
                                            <select id="tiendaMP" name="tiendaMP">
                                            <?php 
                                                $query = "select * from tiendas where id_usuario = '$correo' AND ( subscription = ' ' OR subscription = 'MrKadito' );";
                                                $tiendas = mysqli_query($conection,$query);
        
                                                while ($row = mysqli_fetch_assoc($tiendas)) 
                                                { ?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombreTienda']; ?></option>
                                            <?php }
                                            ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="sp-package-title title">Precio total</span>
                                        </td>
                                        <td>
                                            $<input type="text" name="precioMP" id="precioMP" style="display:none;">
                                            <input type="text" name="" id="precioMPd" disabled /><span>MXN</span>
                                        </td>
                                    </tr>
                                </table>
                            
                                <div class="sp-package-action">
                                    <input type="submit" class="btn btn-primary" style="background:#ffb800; border-color:#ffb800;" value="Contratar" />
                                    
                                    <a href="#" class="btn btn-dim btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#subscription-cancel">Cancelar</a>
                                </div>
                            </form>  
                        </div>
                    </div>
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div><!-- .modal -->
    </div>
    <!-- app-root @e -->


     <!-- @@Modal - Subscription Change @s -->
     <div class="modal fade" tabindex="-1" id="anualWindow">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                    <div class="modal-body modal-body-md">
                        <div class="sp-package text-center">
                            <div class="sp-package-head">
                                <h4 class="title">Confirmacion de suscription</h4>
                            </div>
                            <form method="POST">
                                <table>
                                    <tr>
                                        <td>
                                            <span class="sp-package-title title">Usted Selecciono el plan</span>
                                        </td>
                                        <td>
                                            
                                            <input type="text" name="planNameAddA" id="planNameAddA" val="" style="display:none;">
                                            <input type="text" name="" id="planNameAddAd" val="" disabled />
                                            <input type="text" name="usuarioCorreoA" value="<?php echo $correo; ?>" style="display:none;" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="sp-package-title title">Seleccione su tienda</span>
                                        </td>
                                        <td>
                                            <select id="tiendaAPa" name="tiendaAPa">
                                            <?php 
                                                $query = "select * from tiendas where id_usuario = '$correo' AND ( subscription = ' ' OR subscription = 'MrKadito' );";
                                                $tiendas = mysqli_query($conection,$query);
        
                                                while ($row = mysqli_fetch_assoc($tiendas)) 
                                                { ?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombreTienda']; ?></option>
                                            <?php }
                                            ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="sp-package-title title">Precio del plan</span>
                                        </td>
                                        <td>
                                            
                                            <input type="text" name="precioAPA" id="precioAP" style="display:none;">
                                            <input type="text" name="" id="precioAPd" disabled /><span>MXN</span>
                                        </td>
                                    </tr>
                                </table>
                            
                                <div class="sp-package-action">
                                    <input type="submit" class="btn btn-primary" style="background:#ffb800; border-color:#ffb800;" value="Contratar Plan" />
                                    <a href="#" class="btn btn-dim btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#subscription-cancel">Cancel Plan</a>
                                </div>
                            </form>    
                        </div>
                    </div>
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div><!-- .modal -->
    </div>
    <!-- app-root @e -->

      <!-- @@Modal - Subscription Change @s -->
      <div class="modal fade" tabindex="-1" id="showCuponera">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                    <div class="modal-body modal-body-md">
                        <div class="sp-package text-center">
                            <img src="../images/Mrkados Logo.png"   />
                        </div>
                    </div>
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div><!-- .modal -->
    </div>
    <!-- app-root @e -->

    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=1.6.0"></script>
    <script src="./assets/js/scripts.js?ver=1.6.0"></script>
<?php } 

static function evaluacion($correo, $idUser, $conection, $name, $apellido, $telefono)
{ ?>
 
 <!-- main header @e -->
    <!-- content @s -->
    <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Mis Evaluaciones</h3>
                                            
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                        
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="col-10" style="margin-bottom:20px;">
                                            <p style="text-align:center;">
                                                Ayúdanos a crear negocios responsables. Evalúa tu experiencia para que más MrKlientes
                                                 puedan tomar decisión inteligente. 
                                            </p>
                                            <p style="text-align:center;">
                                                Evita utilizar un lenguaje inapropiado.
                                            </p>
                                            <p style="text-align:center;">
                                                No envíes ningún dato de contacto ni compartas links externos
                                            </p>
                                </div>  
                                <div class="nk-block">
                                    <div class="col-12"><b>MrKados por evaluar</b></div>
                                    <div class="card card-bordered card-stretch">
                                        <div class="card-inner-group">
                                            <div class="card-inner p-0">
                                                <div class="nk-tb-list nk-tb-ulist">
                                                    <div class="nk-tb-item nk-tb-head">
                                                         <div class="nk-tb-col tb-col-mb"><span class="sub-text">Nombre del MrKado</span></div>
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Decha de Contacto</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Reputación</span></div>
                                                    </div><!-- .nk-tb-item -->
                                                    <?php 
                                                            $query2 = "select * from usuarios where correo = '$correo';";
                                                            $user2 = mysqli_query($conection,$query2);
                                                            
                                                            while ($row2 = mysqli_fetch_assoc($user2)) 
                                                            {
                                                                $idUser = $row2["id"];
                                                                $query3 = "select * from contactos where id_usuario = '$idUser' AND id_testimonio = '0';";
                                                                $testi = mysqli_query($conection,$query3);

                                                                while ($row3 = mysqli_fetch_assoc($testi)) 
                                                                {
                                                                    $idContacto = $row3['id'];
                                                                    $id_tienda = $row3["id_tienda"];
                                                                    $query4 = "select * from tiendas where id = '$id_tienda';";
                                                                    $tienda = mysqli_query($conection,$query4);

                                                                    while ($row4 = mysqli_fetch_assoc($tienda)) 
                                                                    {   

                                                                ?>
                                                                <div class="nk-tb-item">
                                                                 
                                                                    <input style="display:none;" id="tiendaIdEvaluar" type="text" value="<?php echo $row3['id']; ?>">
                                                                    <input style="display:none;" id="userIdEvaluar" type="text" value="<?php echo $row2['id']; ?>">
                                                                   
                                                                    <div class="nk-tb-col tb-col-mb">
                                                                        <span  class="tb-amount"><?php echo $row4['nombreTienda']; ?></span>
                                                                    </div>

                                                                    <div class="nk-tb-col tb-col-md">
                                                                        <span  class="tb-amount"><?php echo $row3['fecha']; ?></span>
                                                                    </div>

                                                                    <div class="nk-tb-col tb-col-md">
                                                                        <!-- <input type="button" id="sendEvaluar" data-bs-toggle="modal" data-bs-target="#modal-evaluar"  value="Debe Calificar"  style="background:#ffb800; border-color:#ffb800; color:white; font-weight:bold; border-radius:10px;" /> -->
                                                                        <input type="button" id="btn-evaluar" data-id="<?php echo $idContacto.",".$row4['nombreTienda'].",".$id_tienda.",".$idUser; ?>"  data-target="#modal-evaluar" data-toggle="modal" value="Evaluar negocio"  style="background:#ffb800; border-color:#ffb800; color:white; font-weight:bold; border-radius:10px;" /> 
                                                                    </div> 


                                                                    <div class="nk-tb-col nk-tb-col-tools"  data-toggle="modal" data-target="#profile-edit">
                                                                   <!-- <a href="?action=edit&id='.$section->getSectionId().'">Edit</td>'; -->
                                                                    <!--   <form action="edit">  
                                                                           <input  type="text" name="idTestimonio" value="<?php echo $row3['id']; ?>"> 
                                                                           <input type="button"  value="Editar"> 
                                                                        </form> -->
                                                                    </div>
                                                                 
                                                                </div><!-- .nk-tb-item -->
                                                                    <?php } ?>
                                                                <?php } ?>
                                                           <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                                                    $(document).on("click", "#btn-evaluar", function () {
                                                                        var passedID = $(this).data('id');//get the id of the selected button
                                                                        var info = passedID.split(",");
                                                                        $('#idContacto').val(info[0]);;//set the id to the input on the modal
                                                                        $('#nombreTienda').val(info[1]);;//set the id to the input on the modal
                                                                        $('#idTienda').val(info[2]);;//set the id to the input on the modal
                                                                        $('#idUser').val(info[3]);;//set the id to the input on the modal
                                                                    });
                                                                </script>
                                </div>    
                                <div class="nk-block">
                                    <div class="col-12"><b>MrKados evaluados</b></div>
                                    <div class="card card-bordered card-stretch">
                                        <div class="card-inner-group">
                                            <div class="card-inner p-0">
                                                <div class="nk-tb-list nk-tb-ulist">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Nombre del MrKado</span></div>
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Opiniones</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Reputación</span></div>
                                                        
                                                    </div><!-- .nk-tb-item -->

                                                    <?php 
                                                            $query2 = "select * from usuarios where correo = '$correo';";
                                                            $user2 = mysqli_query($conection,$query2);
                                                            
                                                            while ($row2 = mysqli_fetch_assoc($user2)) 
                                                            {
                                                                $idUser = $row2["id"];
                                                                $query3 = "select * from testimonios where id_usuario = '$idUser';";
                                                                $testi = mysqli_query($conection,$query3);

                                                                while ($row3 = mysqli_fetch_assoc($testi)) 
                                                                {
                                                                    $id_tienda = $row3["id_tienda"];
                                                                    $query4 = "select * from tiendas where id = '$id_tienda';";
                                                                    $tienda = mysqli_query($conection,$query4);

                                                                    while ($row4 = mysqli_fetch_assoc($tienda)) 
                                                                    {   

                                                                ?>
                                                                <div class="nk-tb-item">
                                                                 
                                                                    <input style="display:none;" type="text" value="<?php echo $row3['id']; ?>">
                                                                   
                                                                    <div class="nk-tb-col tb-col-mb">
                                                                        <span  class="tb-amount"><?php echo $row4['nombreTienda']; ?></span>
                                                                    </div>

                                                                    <div class="nk-tb-col tb-col-md">
                                                                        <span  class="tb-amount"><?php echo $row3['comentario']; ?></span>
                                                                    </div>

                                                                    <div class="nk-tb-col tb-col-md">
                                                                        <span  class="tb-amount"><?php echo $row3['reputacion']; ?></span>
                                                                    </div>
                                                        
                                                                    <div class="nk-tb-col nk-tb-col-tools" data-toggle="modal" data-target="#profile-edit">
                                                                   <!-- <a href="?action=edit&id='.$section->getSectionId().'">Edit</td>'; -->
                                                                    <!--   <form action="edit">  
                                                                           <input  type="text" name="idTestimonio" value="<?php echo $row3['id']; ?>"> 
                                                                           <input type="button"  value="Editar"> 
                                                                        </form> -->
                                                                    </div>
                                                                 
                                                                </div><!-- .nk-tb-item -->
                                                                    <?php } ?>
                                                                <?php } ?>
                                                           <?php } ?>

                                                   
                                                </div><!-- .nk-tb-list -->
                                            </div><!-- .card-inner -->
                                        </div><!-- .card-inner-group -->
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
                    <h5 class="title">Actualizar Testimonio</h5>
                    
                  
                    <div class="tab-content">
                        <form method="POST">
                            <div class="tab-pane active" id="personal">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name">AA</label>
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

        <!-- ventana emergente -->
     <!--Modal large -->
     <div class="modal fade" id="modal-evaluar" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">¡EVALUA ESTE NEGOCIO!</h4>
                        <input type="text" disabled style="width:500px;" id="nombreTienda" class="modal-title" style="text-align:center; font-weight:bold;" />
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    </div>
                    <form method="post">
                      <div class="modal-body">
                        <div class="row mb20">
                            <div class="col-md-6">
                                <h5>¿Qué te pareció el servicio de este negocio?</h5>
                            </div>
                            
                                <div class="col-md-6">
                                    <input type="radio" id="1" name="reputacion" value="1" required>
                                    <img src="../../../images/PersonajeTriste.png" style="width:15%;">
                                    <input type="radio" id="2" name="reputacion" value="2">
                                    <img src="../../../images/PersonajePensando.png" style="width:15%;">
                                    <input type="radio" id="3" name="reputacion" value="3">
                                    <img src="../../../images/PersonajeFeliz.png" style="width:15%;">
                                    <input type="radio" id="4" name="reputacion" value="4">
                                    <img src="../../../images/PersonajeSuperFeliz.png" style="width:15%;">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" id="idContacto" style="display:none;" name="idContactoEvaluar" />
                                    <input type="text" id="idTienda" style="display:none;"  name="idTienda" />
                                    <input type="text" id="idUser"  style="display:none;"  name="idUser"/>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="comentarios" rows="10" cols="90" style="color:black;" placeholder="Escribe aquí tus comentarios"></textarea>
                                </div>
                            
                        </div>
                       
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button>
                            <button type="submit" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Enviar comentario</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end: Modal large -->


    <!--end: Inspiro Slider -->

   <!-- Scroll top -->
   <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <!--Template functions-->
    <script src="js/functions.js"></script>
    <!--Rating  plugin files-->
    <script src="plugins/rateit/jquery.rateit.min.js"></script>
    <link rel="stylesheet" href="plugins/rateit/rateit.css">
    </script>
    <script type="text/javascript">

        if(INSPIRO.core.rtlStatus()) {
            $('.rateit').wrap('<div style="direction:rtl"></div>');
        }
        
        //#rateit6
        $("#rateit6").bind('rated', function (event, value) {
            $('#value6').text('You\'ve rated it: ' + value);
        });
        $("#rateit6").bind('reset', function () {
            $('#value6').text('Rating reset');
        });
        $("#rateit6").bind('over', function (event, value) {
            $('#hover6').text('Hovering over: ' + value);
        });
        //#rateit7
        $(function () {
            $('#rateit7').rateit({
                max: 15,
                step: 2,
                backingfld: '#backing7'
            });
        });

        $('.rateit').click(function(e) {   
        e.preventDefault();
        var ri = $(this);
        var value = ri.rateit('value');
            alert(value);
        //documento = $(this).closest("tr").find('td:eq(0)').text();    
    });

        //AJAX Example
        //we bind only to the rateit controls within the products div
        $('.rateit').bind('rated reset', function (e) {
            var ri = $(this);
            //if the use pressed reset, it will get value: 0 (to be compatible with the HTML range control), we could check if e.type == 'reset', and then set the value to  null .
            var value = ri.rateit('value');
            alert(value);
            $document.getElementById("rateValue").value = value;
            //var productID = ri.data('productid'); // if the product id was in some hidden field: ri.closest('li').find('input[name="productid"]').val()
            //maybe we want to disable voting?
            ri.rateit('readonly', true);
           /* $.ajax({
                // url: 'rateit.php', //your server side script
                data: {
                    //id: productID,
                    value: value
                },
                //type: 'POST',
                complete: function (data) {
                    INSPIRO.elements.notification("You have rated Product " + value + " stars. Thank you!", "success")
                },
                 error: function (jxhr, msg, err) {
                    INSPIRO.elements.notification(msg, "warning");
                }  
            }); */
        });


       /* $("#sendEvaluar").click(function () {
            var idUser = $("#userIdEvaluar").val();
            var idTienda = $("#tiendaIdEvaluar").val();
            console.log(idUser);
            console.log(idTienda);
            $('#showTiendaId').val($(this).data(idTienda));
            $('#showUserId').val($(this).data(idUser));
        }); */
    </script>

<?php }

static function pagoSatisfactorio()
{ ?>
 <!-- content @s -->
 <div class="nk-content ">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
                           
                            <div class="nk-content-body">
                                <div class="nk-content-wrap">
                                    <div class="nk-block-head nk-block-head-lg">
                                        <div class="nk-block-between-md g-4">
                                            <div class="nk-block-head-content">
                                                <h2 class="nk-block-title fw-normal" style="text-align:center; marin-top:10%;">¡Felicidades! Tu negocio acaba de subir a otro nivel.
Tu suscripción ha comenzado. Es importante proporcionarnos la información de tus promociones para difundirlas de manera estratégica. </h2>
                                            </div>
                                        </div>
                                        <div class="col-12" style="margin:auto;">
                                            <img style="width:40%; margin-left:30%;" src="../../../images/mrkados-inicia.png"/>
                                        </div>
                                    </div><!-- .nk-block-head -->   
                                    <!-- ENDING PLANES ANUAlES -->   .                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->
<?php }

static function pagoPendiente()
{ ?>
 <!-- content @s -->
 <div class="nk-content ">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
                           
                            <div class="nk-content-body">
                                <div class="nk-content-wrap">
                                    <div class="nk-block-head nk-block-head-lg">
                                        <div class="nk-block-between-md g-4">
                                            <div class="nk-block-head-content">
                                                <h2 class="nk-block-title fw-normal" style="text-align:center; marin-top:10%;">Tu proceso de pago inició con éxito. Tu suscripción se activará cuando el pago se vea reflejado. 
Cualquier duda o inquietud, por favor escríbenos al correo: hola@mrkados.com</h2>

                                            </div>
                                        </div>
                                        <div class="col-12" style="margin:auto;">
                                            <img style="width:40%; margin-left:30%;" src="../../../images/mrkados-inicia.png"/>
                                        </div>
                                    </div><!-- .nk-block-head -->   
                                    <!-- ENDING PLANES ANUAlES -->   .                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->
<?php }

static function pagoNoSatisfactorio()
{ ?>
   <!-- content @s -->
   <div class="nk-content ">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
                           
                            <div class="nk-content-body">
                                <div class="nk-content-wrap">
                                    <div class="nk-block-head nk-block-head-lg">
                                        <div class="nk-block-between-md g-4">
                                            <div class="nk-block-head-content">
                                                <h2 class="nk-block-title fw-normal" style="text-align:center; marin-top:10%;">Lo sentimos, tu pago no pudo ser procesado. Intenta nuevamente o selecciona otro método de pago.</h2>
                                            </div>
                                        </div>
                                        <div class="col-12" style="margin:auto;">
                                            <img style="width:40%; margin-left:30%;" src="../../../images/PersonajeTriste.png"/>
                                        </div>
                                    </div><!-- .nk-block-head -->   
                                    <!-- ENDING PLANES ANUAlES -->   .                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->
<?php }

static function preguntasFrecuentesClientes()
{ ?>
 <!-- Page Content -->
            <link href="../../../css/plugins.css" rel="stylesheet">
           <link href="../../../css/style.css" rel="stylesheet">
 <section id="page-content" style="background-image: url('../../../images/amarillo-back.png');">
            <div class="container">
                <div class="row" style="margin-top:5%;">
                    <div class="content col-lg-12">
                        <h1 style="text-align:center;"><b>MrKlientes</b></h1>
                        <!-- Accordion -->
                        <div class="accordion">
                            <div class="ac-item" style="background:white;">
                                <h5 class="ac-title">Before you get started</h5>
                                <div class="ac-content">
                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet
                                        mornings of spring which I enjoy with my whole heart.</p>
                                    <p>I am alone, and feel the charm of existence in this spot, which was created for
                                        the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the
                                        exquisite sense of mere tranquil existence, that I neglect my talents. I should
                                        be incapable of drawing a single stroke at the present moment; and yet I feel
                                        that I never was a greater artist than now. </p>
                                </div>
                            </div>
                            <div class="ac-item" style="background:white;">
                                <h5 class="ac-title">Before you get started</h5>
                                <div class="ac-content">
                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet
                                        mornings of spring which I enjoy with my whole heart.</p>
                                    <p>I am alone, and feel the charm of existence in this spot, which was created for
                                        the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the
                                        exquisite sense of mere tranquil existence, that I neglect my talents. I should
                                        be incapable of drawing a single stroke at the present moment; and yet I feel
                                        that I never was a greater artist than now. </p>
                                </div>
                            </div>
                            <div class="ac-item" style="background:white;">
                                <h5 class="ac-title">Before you get started</h5>
                                <div class="ac-content">
                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet
                                        mornings of spring which I enjoy with my whole heart.</p>
                                    <p>I am alone, and feel the charm of existence in this spot, which was created for
                                        the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the
                                        exquisite sense of mere tranquil existence, that I neglect my talents. I should
                                        be incapable of drawing a single stroke at the present moment; and yet I feel
                                        that I never was a greater artist than now. </p>
                                </div>
                            </div>
                            <div class="ac-item" style="background:white;">
                                <h5 class="ac-title">Layout and design options</h5>
                                <div class="ac-content">
                                    <p>When, while the lovely valley teems with vapour around me, and the meridian sun
                                        strikes the upper surface of the impenetrable foliage of my trees, and but a few
                                        stray gleams steal into the inner sanctuary.</p>
                                    <p>I throw myself down among the tall grass by the trickling stream; and, as I lie
                                        close to the earth, a thousand unknown plants are noticed by me</p>
                                </div>
                            </div>
                            <div class="ac-item" style="background:white;">
                                <h5 class="ac-title">Compatibility with premium plugins</h5>
                                <div class="ac-content">
                                    <p>As it floats around us in an eternity of bliss; and then, my friend, when
                                        darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and
                                        absorb its power, like the form of a beloved mistress</p>
                                    <p>I often think with longing, Oh, would I could describe these conceptions, could
                                        impress upon paper all that is living so full and warm within me, that it might
                                        be the mirror of my soul, as my soul is the mirror of the infinite God! O my
                                        friend — but it is too much for my strength — I sink under the weight of the
                                        splendour of these visions!”</p>
                                </div>
                            </div>
                        </div>
                        <!-- end: Accordion -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Page Content -->
        <!-- Scroll top -->

<?php }

static function preguntasFrecuentesMrkados()
{ ?>
 <!-- Page Content -->
 <section id="page-content" style="background-image: url('../../../images/green-patron.png');">
            <div class="container">
                <div class="row" style="margin-top:5%;">
                    <div class="content col-lg-12">
                        <h1 style="text-align:center;"><b>MrKados</b></h1>
                        <!-- Accordion -->
                        <div class="accordion">
                            <div class="ac-item" style="background:white;">
                                <h5 class="ac-title">Before you get started</h5>
                                <div class="ac-content">
                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet
                                        mornings of spring which I enjoy with my whole heart.</p>
                                    <p>I am alone, and feel the charm of existence in this spot, which was created for
                                        the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the
                                        exquisite sense of mere tranquil existence, that I neglect my talents. I should
                                        be incapable of drawing a single stroke at the present moment; and yet I feel
                                        that I never was a greater artist than now. </p>
                                </div>
                            </div>
                            <div class="ac-item" style="background:white;">
                                <h5 class="ac-title">Before you get started</h5>
                                <div class="ac-content">
                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet
                                        mornings of spring which I enjoy with my whole heart.</p>
                                    <p>I am alone, and feel the charm of existence in this spot, which was created for
                                        the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the
                                        exquisite sense of mere tranquil existence, that I neglect my talents. I should
                                        be incapable of drawing a single stroke at the present moment; and yet I feel
                                        that I never was a greater artist than now. </p>
                                </div>
                            </div>
                            <div class="ac-item" style="background:white;">
                                <h5 class="ac-title">Before you get started</h5>
                                <div class="ac-content">
                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet
                                        mornings of spring which I enjoy with my whole heart.</p>
                                    <p>I am alone, and feel the charm of existence in this spot, which was created for
                                        the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the
                                        exquisite sense of mere tranquil existence, that I neglect my talents. I should
                                        be incapable of drawing a single stroke at the present moment; and yet I feel
                                        that I never was a greater artist than now. </p>
                                </div>
                            </div>
                            <div class="ac-item" style="background:white;">
                                <h5 class="ac-title">Layout and design options</h5>
                                <div class="ac-content">
                                    <p>When, while the lovely valley teems with vapour around me, and the meridian sun
                                        strikes the upper surface of the impenetrable foliage of my trees, and but a few
                                        stray gleams steal into the inner sanctuary.</p>
                                    <p>I throw myself down among the tall grass by the trickling stream; and, as I lie
                                        close to the earth, a thousand unknown plants are noticed by me</p>
                                </div>
                            </div>
                            <div class="ac-item" style="background:white;">
                                <h5 class="ac-title">Compatibility with premium plugins</h5>
                                <div class="ac-content">
                                    <p>As it floats around us in an eternity of bliss; and then, my friend, when
                                        darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and
                                        absorb its power, like the form of a beloved mistress</p>
                                    <p>I often think with longing, Oh, would I could describe these conceptions, could
                                        impress upon paper all that is living so full and warm within me, that it might
                                        be the mirror of my soul, as my soul is the mirror of the infinite God! O my
                                        friend — but it is too much for my strength — I sink under the weight of the
                                        splendour of these visions!”</p>
                                </div>
                            </div>
                        </div>
                        <!-- end: Accordion -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Page Content -->
        <!-- Scroll top -->

        <!--Plugins-->
        <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
        <script src="../../../js/jquery.js"></script>
            <script src="../../../js/plugins.js"></script>
            <!--Template functions-->
            <script src="../../../js/functions.js"></script>
<?php }

static function registroTienda($conection, $correo, $usuarioTipo)
{ ?>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Registra tu Negocio Ahora</h3>
                                <h6>Estás a un paso de dar a conocer tu negocio en nuestro mundo digital. Evita utilizar un lenguaje inapropiado.</h6>
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
                                                        <div class="row" style=" width: 100%; margin-left:5%;">
                                                            <div class="col-12 form-group">
                                                                <label style="font-weight: bold; color: black; font-size: 11px;">INFORMACIÓN GENERAL</label>
                                                            </div>
                                                            <div class="col-6 form-group">
                                                                <input type="text" name="nombre_negocio" placeholder="Nombre del negocio" class="form-control" required>
                                                            </div>
                                                            <div class="col-6 form-group">
                                                                <input type="text" name="whatsaap" required pattern=".{10}" placeholder="WhatsApp (número a 10 dígitos)" class="form-control">
                                                            </div>
                                                            <div class="col-6 form-group">
                                                                <input type="text" name="telefonoT" placeholder="Tel. fijo del negocio" class="form-control">
                                                            </div>
                                                            <div class="col-6 form-group">
                                                                <input type="mail" name="correo" placeholder="E-Mail del negocio" class="form-control">
                                                            </div>

                                                            <div class="col-lg-6 form-group">
                                                                <a href="#" data-toggle="modal" data-target="#facebookModal"><img src="../../../images/logo_admiracion-removebg-preview.png" style="width:15px;" /></a>
                                                                <input type="text" name="facebookMessenger" placeholder="Link Messenger de Fanpage" class="form-control" style="width:80%; float:left;">
                                                            </div>
                                                            <div class="col-lg-6 form-group">
                                                                <a href="#" data-toggle="modal" data-target="#categoriaModal"><img src="../../../images/logo_admiracion-removebg-preview.png" style="width:15px;" /></a>
                                                                <select name="listCat" id="listCat" size="number_of_options" style="width:80%;" required>
                                                                    <?php 
                                                                        $querySubCat = "select * from categorias order by nombre ASC";
                                                                        $subcategorias = mysqli_query($conection,$querySubCat);
                                                                    ?> <option value=" ">Selecciona el giro principal</option> <?php
                                                                        while ($row = mysqli_fetch_assoc($subcategorias)) {
                                                                            $name = $row['nombre'];
                                                                            $catId = $row['id'];
                                                                            ?> <option value="<?php echo $catId; ?>"><?php echo $name; ?></option> <?php
                                                                        }
                                                                    ?>
                                                        
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin-left:5%;"> 
                                                            <div id="subcatList1" class="col-6 form-group">
                                                               <!-- AQUI SE LLEVA EL SELECT -->
                                                            </div>

                                                            <div class="col-6 form-group" style="margin-top:2%; margin-top:14%;">
                                                                <input type="button" onclick="mostrarMensaje()" name="addCat" value="¿Ofrece algún otro servicio?" />
                                                            </div>

                                                            <div id="subcatList2" class="col-6 form-group">
                                                                 <!-- AQUI SE LLEVA EL SELECT subcat list 2-->
                                                            </div>
                                                            

                                                            <div id="subcatList3" class="col-6 form-group">
                                                               <!-- AQUI SE LLEVA EL SELECT subcat list 2-->
                                                            </div>
                                                            
                                                            <div id="subcatList4" class="col-6 form-group">
                                                               <!-- AQUI SE LLEVA EL SELECT subcat list 2-->
                                                            </div>
                                                            
                                                            <div id="subcatList5" class="col-6 form-group">
                                                               <!-- AQUI SE LLEVA EL SELECT subcat list 2-->
                                                            </div>
                                                        </div>
                                                            <script>
                                                                var subCatValue = 2;
                                                                function mostrarMensaje()
                                                                {
                                                                    
                                                                    if(subCatValue == 2)
                                                                    {
                                                                        document.getElementById('subcat2').style.display = 'block';
                                                                    }
                                                                    
                                                                    if(subCatValue == 3)
                                                                    {
                                                                        document.getElementById('subcat3').style.display = 'block';
                                                                    }
                                                                    
                                                                    if(subCatValue == 4)
                                                                    {
                                                                        document.getElementById('subcat4').style.display = 'block';
                                                                    }
                                                                    
                                                                    if(subCatValue == 5)
                                                                    {
                                                                        document.getElementById('subcat5').style.display = 'block';
                                                                    }

                                                                
                                                                    subCatValue++;
                                                                    
                                                                }

                                                    
                                                            </script>

                                           
                                                <div class="row" style="width:100%; margin-left:5%;">
                                                    
                                                    <div class="col-1 form-group">
                                                        <input type="checkbox" name="terminos" class="form-control" style="margin-top: 22%; width:15px;" required> 
                                                    </div>
                                                    <div class="col-10 form-group">
                                                        <a href="http://mrkados.com/terminos.php?correo=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>"><label style="color: black; font-weight: bold; font-size: 11px;  margin-top: 3%;">ACEPTAS LOS <b>TÉRMINOS Y CONDICIONES</b></label></a>
                                                    </div>
                                                
                                                    <div class="col-12 form-group">
                                                        <input type="submit" name="submit" value="REGÍSTRATE AHORA" class="form-control" style="margin-top: 5%; font-size: 14px; background: black; color: white; font-weight: bold; border-radius: 10px; height: 70px;">
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

    <div class="modal fade" tabindex="-1" id="categoriaModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                    <div class="modal-body modal-body-md">
                        <div class="sp-package text-center">
                            <div class="sp-package-head">
                                <h4 class="title">Explicar Categoria</h4>
                                <img src="" />
                            </div>
                        </div>
                    </div>
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
    </div><!-- .modal -->

    <div class="modal fade" tabindex="-1" id="facebookModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                    <div class="modal-body modal-body-md">
                        <div class="sp-package text-center">
                            <div class="sp-package-head">
                                <h4 class="title">Explicar Facebook link</h4>
                                <img src="" />
                            </div>
                        </div>
                    </div>
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
    </div><!-- .modal -->
<?php }

static function registroTienda2($conection)
{ ?>
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
                                                                <span>INFORMACIÓN GENERAL</span>
                                                            </div>
                                                            <div class="col-12 form-group">
                                                                <label style="font-weight: bold; color: black; font-size: 11px;">DESCRIBE TU EMPRESA</label>
                                                                <textarea type="text" name="description" required placeholder="Describe brevemente lo que hacen en tu negocio." class="form-control"></textarea>
                                                            </div>
                                                            <div class="col-12 form-group">
                                                                <label style="color: black; font-weight: bold; font-size: 11px;">REPRESENTANTE COMERCIAL O DUEÑO DEL NEGOCIO</label>
                                                            </div>
                                                            <div class="col-6 form-group">
                                                                <input type="text" name="nombrePersona" placeholder="Escribe el nombre del representante del negocio" class="form-control" required>
                                                            </div>
                                                            <div class="col-6 form-group">
                                                                <input type="text" name="nombrePersona2" placeholder="Escribe el apellido del representante del negocio" class="form-control"  required>
                                                            </div>
                                                            <div class="col-12 form-group" >
                                                                <label style="font-weight: bold; color: black; font-size: 11px;">INFORMACIÓN ADICIONAL DE TU NEGOCIO</label>
                                                            </div>
                                                            <div class="col-12 form-group" >
                                                                <div class="row" style="width:100%;">
                                                                    <div class="col-5 form-group">
                                                                        <label style="font-weight: bold; color: black; font-size: 11px;" >LOGOTIPO DE TU NEGOCIO</label>
                                                                    </div>
                                                                    <div class="col-5 form-group">
                                                                        <input type="file" name="logoEmpresa" value="Seleccionar imagen" accept="image/png, image/jpeg">
                                                                    </div>
                                                                    <label style=" color: black; font-size: 12px; ">Recomendamos que sea una imagen JPG con un pero máximo de 1Mb.
                                                                        Si tu logo es superior a ese tamaño puedes comprimirlo <a href="https://www.iloveimg.com/es/comprimir-imagen" target="_blank"><b>AQUÍ</b></a></label>
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="col-lg-12 form-group" >
                                                                <div class="row">
                                                                    <div class="col-lg-5 form-group">
                                                                        <label style="font-weight: bold; color: black; font-size: 11px; ">CATÀLOGO/PORTAFOLIO DE TU NEGOCIO</label>
                                                                    </div>
                                                                    <div class="col-lg-5 form-group">
                                                                        <input type="file" name="catalogo" value="Seleccionar imagen" accept="file/pdf">
                                                                    </div>
                                                                    <label style=" color: black; font-size: 12px; ">Tu archivo debe tener un tamaño máximo de 3Mb. <b><a href="https://www.ilovepdf.com/es/comprimir_pdf" target="_blank">Reducir PDF</a> | <a href="https://www.iloveimg.com/es/comprimir-imagen" target="_blank">Reducir IMG</b></a></label>
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
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                                                        </select>
                                                                        <label style="color: black; font-size: 08px;"><b>+ Añadir otra red social</b> (Máximo 6 campos)</label>
                                                                    </div>
                                                                    <div class="col-lg-8 form-group">
                                                                        <input type="text" name="redSocialNombre1" placeholder="/" class="form-control" style="margin-top: 3.1%;">
                                                                    </div>

                                                                    <div class="col-lg-6 form-group" style="margin-bottom:5%;">
                                                                        <input type="button" onclick="mostrarMensajeRe()" name="addRed" value="¿Tienes otra Red Social?" />
                                                                    </div>
                                                                    <div class="col-lg-8 form-group">
                                                                        <!-- <input type="text" name="redSocialNombre" placeholder="/" class="form-control" style="margin-top: 3.1%;"> -->
                                                                    </div>

                                                                </div>


                                                                
                                                            
                                                            <div class="row" id="redSocial2" style="display:none;  width:100%;">
                                                                <div class="col-lg-4 form-group" style="float:left;">
                                                                    <select name="redsocial2" size="number_of_options" style="margin-top: 6.5%;">
                                                                    <option value="none">Red Social</option>
                                                                    <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
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
                                                                    <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
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
                                                                    <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
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
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="TikTok">TiTok</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="Youtube">Youtube</option>
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
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="TikTok">TiTok</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="Youtube">Youtube</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-8 form-group" style="float:left;">
                                                                    <input type="text" name="redSocialNombre6" placeholder="/" class="form-control" style="margin-top: 3.1%;">
                                                                </div>
                                                            </div>

                                                            <div class="col-12 form-group" >
                                                            <a href="#" data-toggle="modal" data-target="#linkedinDif"><img src="../../../images/logo_admiracion-removebg-preview.png" style="width:15px;" /><label>¿conoces la diferencia entre linkedin personal y corporativo?</label></a>
                                                                
                                                            </div>
                                                            <div class="col-12 form-group" >
                                                            <a href="#" data-toggle="modal" data-target="#youtube"><img src="../../../images/logo_admiracion-removebg-preview.png" style="width:15px;" /><label>¿Sabes como colocar tu URL de Youtube?</label></a>
                                                                
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

    <div class="modal fade" tabindex="-1" id="linkedinDif">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                    <div class="modal-body modal-body-md">
                        <div class="sp-package text-center">
                            <div class="sp-package-head">
                                <h4 class="title">Diferencia entre Likedin</h4>
                                <img src="" />
                            </div>
                        </div>
                    </div>
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
    </div><!-- .modal -->

    <div class="modal fade" tabindex="-1" id="youtube">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                    <div class="modal-body modal-body-md">
                        <div class="sp-package text-center">
                            <div class="sp-package-head">
                                <h4 class="title">Explicar Youtube</h4>
                                <img src="" />
                            </div>
                        </div>
                    </div>
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
    </div><!-- .modal -->
<?php }

static function registroTienda3($conection)
{ ?>
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
                                                                <label style="color: black; font-weight: bold; font-size: 14px; ">INFORMACIÓN GENERAL</label>
                                                            </div>
                                                            <div class="col-12 form-group">
                                                                <label style="color: black; font-weight: bold; font-size: 11px; ">NOMBRE DEL ENCARGADO DE SUCURSAL</label>
                                                            </div>
                                                            <div class="col-6 form-group">
                                                                <input type="text" required name="nombreEncargado" placeholder="Escribe su nombre" class="form-control">
                                                            </div>
                                                            <div class="col-6 form-group">
                                                                <input type="text" required name="apellidoEncargado" placeholder="Apellidos" class="form-control">
                                                            </div>
                                                            <div class="col-12 form-group">
                                                                <label style="color: black; font-weight: bold; font-size: 11px; margin-top: 3%;">DIRECCIÓN DEL NEGOCIO</label>
                                                            </div>
                                                            <div class="col-6 form-group">   
                                                                <input type="text" name="direccionNegocio" placeholder="Escribe la calle y número interior y/o exterior" class="form-control">
                                                            </div>
                                                            <div class="col-6 form-group">
                                                                <input type="text" name="codigopostal" placeholder="Escribe tu C.P." class="form-control" > 
                                                            </div>
                                                            <div class="col-lg-12 form-group">
                                                                <a href="#" data-toggle="modal" data-target="#googleModal"><img src="../../../images/logo_admiracion-removebg-preview.png" style="width:15px;" /></a>
                                                                <input type="text" name="googleMap" placeholder="Escribe el link de Google Maps" class="form-control" style="width:85%; float:left;"> 
                                                            </div>
                                                            <div class="col-lg-4 form-group">
                                                                <select name="estado" size="number_of_options" required>
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
                                                                        <select name="ciudad" size="number_of_options" required>
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
                                                                                <select name="colonia" size="number_of_options" required>
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
                                                                    <label style="color: black; font-size: 11px; margin-top: 6%;">Miércoles </label>
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
                                                        <label style="color: black; font-size: 11px; margin-top: 6%;">Sábado </label>
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
                                                    <div class="col-12" id="rappi" style="display:none;">
                                                        <input type="text" style="width:90%;" placeholder="Escribe el link de tu cuenta de RAPPI" name="linkRappi" />
                                                        <a href="#" data-toggle="modal" data-target="#rappiModal"><img src="../../../images/logo_admiracion-removebg-preview.png" style="width:15px;" /><label>¿Cómo agregar URL de Rappi?</label></a>
                                                    </div>   
                                                    <div class="col-12" id="uber" style="display:none;">
                                                        <input type="text" style="width:90%;" placeholder="Escribe el link de tu cuenta de Uber" name="linkUber" />
                                                        <a href="#" data-toggle="modal" data-target="#uberModal"><img src="../../../images/logo_admiracion-removebg-preview.png" style="width:15px;" /><label>¿Cómo agregar URL de UberEats?</label></a>
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
                                                        <div class="row" style=" width:100%;">
                                                            <div class="col-12 form-group">
                                                                <label style="color: black; font-weight: bold; font-size: 11px; ">¿COSTO DE ENVÍO?</label>
                                                            </div>
                                                            <div class="col-1 form-group">
                                                                <input type="radio" onclick="showFields()" id="siEnvio" style="font-size:20px;" name="tieneEnvioSI" value="SI" class="form-control" >
                                                            
                                                            </div>
                                                            <div class="col-1 form-group">
                                                                <h4 style="font-size: 12px; color: black; ">SI</h4>
                                                            </div>
                                                            <div class="col-1 form-group">
                                                                <input type="radio" onclick="hideFields()" id="noEnvio" style="font-size:20px;" name="tieneEnvioSI" value="NO" class="form-control" >
                                                            </div>
                                                            <div class="col-1 form-group">
                                                                <h4 style="font-size: 12px; color: black;">No</h4>
                                                            </div>
                                                            <div class="col-7 form-group" id="precio" style="display:none;">
                                                                <input type="number" name="precio" placeholder="Coloca el precio del envío" class="form-control">
                                                            </div>
                                                        </div>
                                                        <!-- fin envios -->
                                                    <!-- JAVASCRIPT -->
                                                    <script>
                                                        function showFields()
                                                        {
                                                            document.getElementById("precio").style.display = 'block';
                                                           
                                                        }

                                                        function hideFields()
                                                        {
                                                            document.getElementById("precio").style.display = 'none';
                                                           
                                                        }
                                                    </script>
                                                    <!-- END JAVASCRIPT -->
                                                    <div class="row" style=" width:100%;">
                                                        <div class="col-12 form-group">
                                                            <label style="color: black; font-weight: bold; font-size: 11px;">¿EMITES FACTURA?</label>
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
                                                        <label style="color: black; font-weight: bold; font-size: 11px;">FOTO DE PORTADA</label>
                                                    </div>
                                                    <div class="col-5 form-group">
                                                        <input style="margin-top: 5%;" type="file" name="fachada" value="Seleccionar imagen" required accept="image/png, image/jpeg">
                                                    </div>
                                                    <div class="col-4 form-group">
                                                    </div>

                                                    <div class="col-3 form-group">
                                                    </div>
                                                    <div class="col-12 form-group">
                                                        <label style=" color: black; font-size: 14px;">Te recomendamos subir fotos de tu negocio para que tus clientes te puedan identificar rápidamente.
                                                            Recomendamos que cada imagen mida 1920x1080 pixeles y con un peso máximo de 2 mb. Para adaptar tu imagen puedes hacerlo <a href="https://www.iloveimg.com/es/recortar-imagen" target="_blank"><b>AQUÍ.</b></a>
                                                            Para reducir el tamaño de tu imagen puedes hacerlo <a href="https://www.iloveimg.com/es/comprimir-imagen" target="_blank"><b>AQUÍ.</b></a></label>
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

    <div class="modal fade" tabindex="-1" id="googleModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                    <div class="modal-body modal-body-md">
                        <div class="sp-package text-center">
                            <div class="sp-package-head">
                                <h4 class="title">Explicar Google map link</h4>
                                <img src="" />
                            </div>
                        </div>
                    </div>
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
    </div><!-- .modal -->

    <div class="modal fade" tabindex="-1" id="rappiModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                    <div class="modal-body modal-body-md">
                        <div class="sp-package text-center">
                            <div class="sp-package-head">
                                <h4 class="title">Explicar Rappi link</h4>
                                <img src="" />
                            </div>
                        </div>
                    </div>
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
    </div><!-- .modal -->

    <div class="modal fade" tabindex="-1" id="uberModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                    <div class="modal-body modal-body-md">
                        <div class="sp-package text-center">
                            <div class="sp-package-head">
                                <h4 class="title">Explicar Uber link</h4>
                                <img src="" />
                            </div>
                        </div>
                    </div>
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
    </div><!-- .modal -->
<?php }

static function openBlock()
{ ?>
    <!-- content @s -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block">
<?php }

static function editarPrimerBloque($conection, $status, $nombreTienda, $logo, $id, $description, $catalogo)
{ ?>
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
                                                                                <?php if($catalogo != "")
                                                                                {
                                                                                    ?> <div><input type="button" data-target="#modal-1" data-toggle="modal" value="Conoce más..." style="background:#ff9f00; font-weight:bold; margin-top:5%; width:25%; border:1px solid; border-color:#ff9f00; border-radius:15px;"/></div> <?php
                                                                                } ?>
                                                                                
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

        </div> <!-- first card -->                    
    </div><!-- .card -->
<?php }

static function editarSegundoBloque($conection, $idEditBloque2, $encargadoNombre, $encargadoApellido, $codigoPostal, $direccion, $paginaWeb, $ciudad, $estado, $colonia, $horarios, $tiempoEnvio, $factura, $correo, $whatsaap, $facebook, $social, $metodoPago, $tiposEntrega, $costoEnvio, $descripcionEnvio, $emailEditar2)
{ ?>
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
                <input type="text" name="idTiendaEditSec2" value="<?php echo $idEditBloque2; ?>" style="display:none;" />
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
                        <option value="">Seleccione la ciudad de la Ciudad</option>
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
                                            <option value="<?php echo $row["nombre"]; ?>" selected><?php echo utf8_encode($row["nombre"]); ?></option> 
                                        <?php
                                    }
                                    else
                                    {
                                        ?> 
                                            <option value="<?php echo $row["nombre"]; ?>"><?php echo utf8_encode($row["nombre"]); ?></option> 
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
                        <input type="text" value="<?php echo $emailEditar2; ?>" name="correoEditar" style="width:250px;"/> 
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
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram" selected>Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[1]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } 

                            if($redes[0] == "Youtube")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube" selected>Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[1]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } 

                            if($redes[0] == "Facebook")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook" selected>Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[1]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[0] == "Twitter")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter" Selected>Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[1]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[0] == "LinkedIn corporativo")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo" selected>LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[1]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[0] == "LinkedIn personal")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal" selected>LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[1]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[0] == "TikTok")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok" selected>TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[1]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[0] == "none" || $redes[0] == "")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none" selected>Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" placeholder="Escriba el nombre de su cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[2] == "Instagram")
                            { ?> 
                                <select name="redSocial2" id="redSocial2" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram" selected>Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[3]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta2" />
                            <?php } 

                            if($redes[2] == "Youtube")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube" selected>Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[3]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } 

                            if($redes[2] == "Facebook")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook" selected>Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[3]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[2] == "Twitter")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter" Selected>Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[3]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[2] == "LinkedIn corporativo")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo" selected>LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[3]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[2] == "LinkedIn personal")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal" selected>LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[3]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[2] == "TikTok")
                            { ?> 
                                <select name="redSocial2" id="redSocial2" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[3]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta2" />
                            <?php } ?>

                            <?php
                            if($redes[2] == "none" || $redes[2] == "")
                            { ?> 
                                <select name="redSocial2" id="redSocial2" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" placeholder="Escriba el nombre de su cuenta" name="redSocialCuenta2" />
                            <?php } ?>
                            
                            <?php
                            if($redes[4] == "Instagram")
                            { ?> 
                                <select name="redSocial3" id="redSocial3" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram" Selected>Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[5]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta3" />
                            <?php } 

                            if($redes[4] == "Youtube")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube" selected>Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[5]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } 

                            if($redes[4] == "Facebook")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook" selected>Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[5]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[4] == "Twitter")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter" Selected>Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[5]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[4] == "LinkedIn corporativo")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo" selected>LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[5]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[4] == "LinkedIn personal")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal" selected>LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[5]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[4] == "TikTok")
                            { ?> 
                                <select name="redSocial3" id="redSocial3" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[5]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta3" />
                            <?php } ?>

                            <?php
                            if($redes[4] == "none" || $redes[4] == "")
                            { ?> 
                                <select name="redSocial3" id="redSocial3" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" placeholder="Escriba el nombre de su cuenta" name="redSocialCuenta3" />
                            <?php } ?>
                            
                            <?php
                            if($redes[6] == "Instagram")
                            { ?> 
                                <select name="redSocial4" id="redSocial4" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram" selected>Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[7]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta4" />
                            <?php } 
                            
                            if($redes[6] == "Youtube")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube" selected>Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[7]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } 

                            if($redes[6] == "Facebook")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook" selected>Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[7]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[6] == "Twitter")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter" Selected>Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[7]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[6] == "LinkedIn corporativo")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo" selected>LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[7]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[6] == "LinkedIn personal")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal" selected>LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[7]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[6] == "TikTok")
                            { ?> 
                                <select name="redSocial4" id="redSocial4" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[7]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta4" />
                            <?php } ?>

                            <?php
                            if($redes[6] == "none" || $redes[6] == "")
                            { ?> 
                                <select name="redSocial4" id="redSocial4" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" placeholder="Escriba nombre de cuenta" name="redSocialCuenta4" />
                            <?php } ?>

                            <?php
                            if($redes[8] == "Instagram")
                            { ?> 
                                <select name="redSocial5" id="redSocial5" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[9]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta5" />
                            <?php } 
                            
                            if($redes[8] == "Youtube")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube" selected>Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[9]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } 

                            if($redes[8] == "Facebook")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook" selected>Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[9]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[8] == "Twitter")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter" Selected>Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[9]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[8] == "LinkedIn corporativo")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo" selected>LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[9]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[8] == "LinkedIn personal")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal" selected>LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[9]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>
                            <?php
                            if($redes[8] == "TikTok")
                            { ?> 
                                <select name="redSocial5" id="redSocial5" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[9]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta5" />
                            <?php } ?>

                            <?php
                            if($redes[8] == "none" || $redes[8] == "")
                            { ?> 
                                <select name="redSocial5" id="redSocial5" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" placeholder="Escriba nombre de cuenta" name="redSocialCuenta5" />
                            <?php } ?>

                            <?php
                            if($redes[10] == "Instagram")
                            { ?> 
                                <select name="redSocial6" id="redSocial6" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[11]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta6" />
                            <?php } 
                            
                            if($redes[10] == "Youtube")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube" selected>Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[11]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } 

                            if($redes[10] == "Facebook")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook" selected>Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[11]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[10] == "Twitter")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter" Selected>Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[11]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[10] == "LinkedIn corporativo")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo" selected>LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[11]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[10] == "LinkedIn personal")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal" selected>LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[11]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[10] == "TikTok")
                            { ?> 
                                <select name="redSocial6" id="redSocial6" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
                                </select>
                                <input type="text" value="<?php echo $redes[11]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta6" />
                            <?php } ?>

                            <?php
                            if($redes[10] == "none" || $redes[10] == "")
                            { ?> 
                                <select name="redSocial6" id="redSocial6" style="width:150px;">
                                <option value="none">Red Social</option>
                                                                            <option value="Facebook">Facebook</option>
                                                                            <option value="Instagram">Instagram</option>
                                                                            <option value="LinkedIn corporativo">LinkedIn corporativo</option>
                                                                            <option value="LinkedIn personal">LinkedIn personal</option>
                                                                            <option value="TikTok">TikTok</option>
                                                                            <option value="Twitter">Twitter</option>
                                                                            <option value="Youtube">Youtube</option>
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
                <div class="col-lg-12">
                    <?php $piece = explode(",", $tiposEntrega); 
                    if($piece[0] == "") {  ?> <div style="width:3%;"><input type="checkbox" name="recogerloEditar" value="Recogerlo en el establecimiento"  style="margin-left:20%;"></div> <?php } 
                    else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" name="recogerloEditar" value="Recogerlo en el establecimiento" checked></div> <?php }?>

                    <div style="width:20%;">Recogerlo directamente</div>
                    
                <?php if($piece[1] == "") {  ?> <div style="width:3%;"><input type="checkbox" name="rappiEditar" value="Rappi"  style="margin-left:20%;"></div> <?php } 
                    else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" name="rappiEditar" value="Rappi"   checked></div> <?php }?>

                    <div style="width:10%;">RAPPI</div>

                    <?php if($piece[2] == "") {  ?> <div style="width:3%;"><input type="checkbox" name="UberEditar" value="ubber" onclick="showRappi()"  style="margin-left:20%;"></div> <?php } 
                    else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" name="UberEditar" onclick="showRappi()" value="ubber"  checked ></div> <?php }?>
                    
                    <div style="width:10%;">Uber eats</div>

                    <?php if($piece[3] == "") {  ?> <div style="width:3%;"><input type="checkbox" onclick="showUber()" name="envioDirectoEditar" value="Envio directo del establecimiento" style="margin-left:20%;"></div> <?php } 
                    else { ?>  <div style="width:3%;"><input type="checkbox" onclick="showUber()" style="margin-left:20%;" name="envioDirectoEditar" value="Envio directo del establecimiento" checked></div> <?php }?>

                    <div style="width:25%;">Envío directo del establecimiento</div>
                    
                    <?php if($piece[4] == "") {  ?> <div style="width:3%;"><input type="checkbox" name="mensajeriaEditar" value="Mensajeria" style="margin-left:20%;"></div> <?php } 
                    else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" name="mensajeriaEditar" value="Mensajeria" checked></div> <?php }?>
                    </div>

                <div class="col-lg-12">
                    <div class="col-6" style="display:none;" id="linkRappiEditarS">
                        <input type="text" name="linkRappiEditar" placeholder="Escribe el link de Rappi"/>
                    </div>   
                    <div class="col-6" style="display:none;" id="linkUberEditarS">
                        <input type="text" name="linkUberEditar" placeholder="Escribe el link de Uber Eats" />
                    </div>
                </div>
                
                
                <script>
                                                    function showRappi()
                                                    {
                                                        if (document.getElementById("linkRappiEditarS").style.display === "none")
                                                        {
                                                            document.getElementById("linkRappiEditarS").style.display = "block";
                                                        }
                                                        else{
                                                            document.getElementById("linkRappiEditarS").style.display = "none";
                                                        }
                                                    }

                                                    function showUber()
                                                    {
                                                        if (document.getElementById("linkUberEditarS").style.display === "none")
                                                        {
                                                            document.getElementById("linkUberEditarS").style.display = "block";
                                                        }
                                                        else{
                                                            document.getElementById("linkUberEditarS").style.display = "none";
                                                        }
                                                    }
                                                </script>

                <div style="width:20%;">Mensajería</div>

                <div class="col-lg-12">
                    <div style="font-weight:bold; text-align:left; margin-top:3%;">Costo de envío:</div>
                </div>

                $<input type="text" name="costoEnvio" style="width:50px;" placeholder="Costo del envio" value="<?php echo $costoEnvio; ?>">MXN
              
                <input type="text" value="<?php echo $descripcionEnvio; ?>" placeholder="Detalle del envio" name="detalleEnvioEditar"  style="margin-left:2%;"/>
               

            </div>
            <div class="col-lg-12"><input type="submit" value="Editar" style="background:#ffa300; margin-left:40%; color:white; border:1px solid; border-color:#ffa300;"/></div>
           
            </div>
        </form>
        </div>
    </section>
                                    </div>
<?php }

static function editarTercerBloque($conection, $categoria, $nombreTienda, $id)
{ ?>
<div class="card card-bordered" style="margin-top:15px;">
    <section>
        <div class="container">
        <form method="POST">
            <input type="text" value="<?php echo $id; ?>" name="idTiendaEditCatPart3" style="display:none;" />
            <div style="text-align:center;">
                <h2>En <?php echo $nombreTienda; ?> encontrarás...</h2>
           </div>
           <div class="row" style="margin-top:5%;">

            <div class="col-lg-4">
                <input type="text" value="<?php echo $categoria; ?>"></input>
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
                                        <option value="<?php echo $row["subcat"]; ?>" selected><?php echo utf8_encode($row["subcat"]); ?></option> 
                                    <?php
                                }
                                else
                                {
                                    ?> 
                                        <option value="<?php echo $row["subcat"]; ?>"><?php echo utf8_encode($row["subcat"]); ?></option> 
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
                                        <option value="<?php echo $row["subcat"]; ?>" selected><?php echo utf8_encode($row["subcat"]); ?></option> 
                                    <?php
                                }
                                else
                                {
                                    ?> 
                                        <option value="<?php echo $row["subcat"]; ?>"><?php echo utf8_encode($row["subcat"]); ?></option> 
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
                                        <option value="<?php echo $row["subcat"]; ?>" selected><?php echo utf8_encode($row["subcat"]); ?></option> 
                                    <?php
                                }
                                else
                                {
                                    ?> 
                                        <option value="<?php echo $row["subcat"]; ?>"><?php echo utf8_encode($row["subcat"]); ?></option> 
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
                                        <option value="<?php echo $row["subcat"]; ?>" selected><?php echo utf8_encode($row["subcat"]); ?></option> 
                                    <?php
                                }
                                else
                                {
                                    ?> 
                                        <option value="<?php echo $row["subcat"]; ?>"><?php echo utf8_encode($row["subcat"]); ?></option> 
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
                                        <option value="<?php echo $row["subcat"]; ?>" selected><?php echo utf8_encode($row["subcat"]); ?></option> 
                                    <?php
                                }
                                else
                                {
                                    ?> 
                                        <option value="<?php echo $row["subcat"]; ?>"><?php echo utf8_encode($row["subcat"]); ?></option> 
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
<?php }

static function editarCuartoBloque($conection, $fachada, $id, $image1, $image2, $image3, $image4, $image5)
{ ?>
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
                            <img src="../images/fachadas/<?php echo $fachada; ?>" style="width:300px;">
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
                                    <img src="../images/imagenMrkados/<?php echo $image1; ?>" style="width:200px;">
                                    <input type="file" name="galeriaEdit1"/>
                                    <!-- <input type="text" value="<?php echo $image1; ?>" name="galeriaEdit1" style="display:none;"/>  -->
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
                                    <img src="../images/imagenMrkados/<?php echo $image2; ?>" style="width:200px;">
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
                                    <img src="../images/imagenMrkados/<?php echo $image3; ?>" style="width:200px;">
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
                                    <img src="../images/imagenMrkados/<?php echo $image4; ?>" style="width:200px;">
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
                                    <img src="../images/imagenMrkados/<?php echo $image5; ?>" style="width:200px;">
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
<?php }

static function closeBlock()
{ ?>
    <!-- content @s -->
                    </div> <!-- close nk-block -->
                </div> <!-- close nk-content-body -->
            </div> <!-- close nl-content-inner -->
        </div> <!-- close container-fluid -->
    </div> <!-- close nk-content -->
<?php }

static function soporte($correo)
{ ?>
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
                                                            <h4 class="nk-block-title">Soporte Técnico</h4>
                                                            </br>
                                                            </br>
                                                    </div>
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <form method="POST">
                                                        <div class="nk-data data-list">
                                                            <div class="data-item" >
                                                                <div class="data-col">
                                                                    <span class="data-label">Nombre</span>
                                                                    <span class="data-value"> <input style="width:170%;" type="text" placeholder="Escribe tu nombre completo" name="soporteNombre" required/></span>
                                                                </div>
                                                            </div><!-- data-item -->
                                                            
                                                            <div class="data-item" >
                                                                <div class="data-col">
                                                                    <span class="data-label">Correo Electrónico</span>
                                                                    <span class="data-value text-soft"><input type="text" style="width:170%;" value="<?php echo $correo; ?>" name="soporteCorreo" required/></span>
                                                                </div>
                                                            </div><!-- data-item -->
                                                            <div class="data-item" >
                                                                <div class="data-col">
                                                                    <span class="data-label">Asunto de tu consulta</span>
                                                                    <span class="data-value"> <input type="text" style="width:170%;" placeholder="Asunto de tu consulta" name="soporteAsunto" required/></span>
                                                                </div>
                                                            </div><!-- data-item -->

                                                            <div class="data-item" >
                                                                <div class="data-col">
                                                                    <span class="data-label">Descripcion</span>
                                                                        <textarea name="soporteMensaje" rows="10" cols="38" required placeholder="Descripcion de tu consulta"></textarea>
                                                                </div>
                                                            </div><!-- data-item -->
                                                        </div><!-- data-list -->
                                                        <input type="submit" value="Enviar" style="background:#ffa300; margin-left:40%; margin-top:5%; color:white; border:1px solid; border-color:#ffa300;"/>
                                                    </form>
                                                </div><!-- .nk-block -->
                                            </div>
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->

    <!-- content @s -->

<?php }

static function soporteEnviado()
{ ?>
 <!-- content @s -->
 <div class="nk-content ">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
                           
                            <div class="nk-content-body">
                                <div class="nk-content-wrap">
                                    <div class="nk-block-head nk-block-head-lg">
                                        <div class="nk-block-between-md g-4">
                                            <div class="nk-block-head-content">
                                                <h2 class="nk-block-title fw-normal" style="text-align:center; marin-top:10%;">Tu mensaje fue enviado con éxito, atenderemos tu consulta por este medio</h2>
                                            </div>
                                        </div>
                                        <div class="col-12" style="margin:auto;">
                                            <img style="width:40%; margin-left:30%;" src="../../../images/mrkados-inicia.png"/>
                                        </div>
                                    </div><!-- .nk-block-head -->   
                                    <!-- ENDING PLANES ANUAlES -->   .                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->
<?php }

}?>