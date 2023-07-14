<?php $correo = $_GET["user"];

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
}

if(isset($_POST["id"]))
{
    $id = $_POST["id"];
    $queryDelete = "delete from tiendas where id = '$id';";
    $deleteExecution = mysqli_query($conection,$queryDelete);
    header("Location: index.php?user=$correo");
}

if(isset($_POST["id_edit"]))
{
    $id = $_POST["id_edit"];
    header("Location: informacionTienda.php?user=$correo&id=$id");
}

?> 

<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="Alfredo Morales" content="alfmorapime@gmail.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="MrKados">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="src/images/Mrkados Logo.png">
    <!-- Page Title  -->
    <title>MrKados | Admin </title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=1.6.0">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=1.6.0">
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
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

                <!-- Seccion de tiendas -->
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-item">
                                <a href="html/general/indexPersonal.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>" class="nk-menu-link">
                                      
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                        <span class="nk-menu-text">Mis Contactos</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                <a href="html/general/testimoniosPersonal.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-bitcoin-cash"></em></span>
                                        <span class="nk-menu-text">Mis Testimonios</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                
                            

                                <li class="nk-menu-item">
                                    <a href="html/general/user-profile-regular.php?correo=<?php echo $correo ?>&type=<?php echo $usuarioTipo; ?>" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                                        <span class="nk-menu-text">Config. de Cuenta</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a  class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                                        <span class="nk-menu-text">Soporte Técnico</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a  class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                                        <span class="nk-menu-text">FAQ’s</span>
                                    </a>
                                </li><!-- .nk-menu-item -->                   
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
                            <div class="nk-header-brand d-xl-none">
                                <a href="index2-2.php?correo=<?php echo $correo; ?>" class="logo-link">
                                    <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                    <span class="nio-version">General</span>
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-news d-none d-xl-block">
                                <div class="nk-news-list">
                                </div>
                            </div><!-- .nk-header-news -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em><img src="././images/Mrkados Logo.png"/></em>
                                                </div>
                                                <div class="user-info d-none d-md-block">
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

                <!-- Contenido tiendas -->

                <!-- content @s -->

                                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Mis Contactos</h3>
                                            
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
                                                        
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Nombre de la Tienda</span></div>
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Fecha de contacto</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Reputacion</span></div>
                                                        
                                                    </div><!-- .nk-tb-item -->

                                                    <?php 
                                                            $query2 = "select * from usuarios where correo = '$correo';";
                                                            $user2 = mysqli_query($conection,$query2);
                                                            
                                                            while ($row2 = mysqli_fetch_assoc($user2)) 
                                                            {
                                                                $idUser = $row2["id"];
                                                                $query3 = "select * from contactos where id_usuario = '$idUser';";
                                                                $contactos = mysqli_query($conection,$query3);

                                                                while ($row3 = mysqli_fetch_assoc($contactos)) 
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
                                                                        <span  class="tb-amount"><?php echo $row3['fecha']; ?></span>
                                                                    </div>

                                                                    <div class="nk-tb-col tb-col-md">
                                                                        <?php if($row3['id_testimonio'] == 0) { ?>
                                                                            <span style="background:green; color:white; text-align:center;"  class="tb-amount">Debe Calificar</span>
                                                                        <?php } else {?>
                                                                            <span style="background:red; color:white; text-align:center;"  class="tb-amount">La tienda fue calificada</span>
                                                                        <?php } ?>
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
               
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=1.6.0"></script>
    <script src="./assets/js/scripts.js?ver=1.6.0"></script>
    <script src="./assets/js/charts/gd-general.js?ver=1.6.0"></script>
</body>

</html>