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
    $fecha = $row['fechaRegistro'];
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
    header("Location: user-profile-regular.php?correo=$correo");
}


?> 

<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@@page-discription">
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
                            <img class="logo-light logo-img" src="././images/Mrkados Logo.png"  />
                            <img class="logo-dark logo-img" src="././images/Mrkados Logo.png" />
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
                                <a href="html/crypto/index.html" class="logo-link">
                                    <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                    <span class="nio-version">General</span>
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-news d-none d-xl-block">
                                <div class="nk-news-list">
                                  <!--  <a class="nk-news-item" href="#">
                                        <div class="nk-news-icon">
                                            <em class="icon ni ni-card-view"></em>
                                        </div> -->
                                       <!-- <div class="nk-news-text">
                                            <p>Do you know the latest update of 2019? <span> A overview of our is now available on YouTube</span></p>
                                            <em class="icon ni ni-external"></em>
                                        </div> -->
                                    </a>
                                </div>
                            </div><!-- .nk-header-news -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-md-block">
                                                  <!--  <div class="user-status">Administrator</div> -->
                                                    <div class="user-name dropdown-indicator"><?php echo $name." ".$apellido ?></div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text"><?php echo $name." ".$apellido; ?></span>
                                                        <span class="sub-text"><?php echo $correo; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                <li><a href="html/general/user-profile-regular.php?correo=<?php echo $correo ?>&type=<?php echo $usuarioTipo; ?>"><em class="icon ni ni-user-alt"></em><span>Ver Perfil</span></a></li>
                                               </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                    <li class="dropdown notification-dropdown mr-n1">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                                <a href="#">Mark All as Read</a>
                                            </div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-notification -->
                                            </div><!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center">
                                                <a href="#">View All</a>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                </ul><!-- .nk-quick-nav -->
                            </div><!-- .nk-header-tools -->
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                              <!-- content @s -->
                 <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Mis Testimonios</h3>
                                            
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
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Comentario</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Reputacion</span></div>
                                                        
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
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=1.6.0"></script>
    <script src="./assets/js/scripts.js?ver=1.6.0"></script>
</body>

</html>