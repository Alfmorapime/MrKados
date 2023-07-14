<?php

class Page 
{

    private static $_title = "MrKados";

    static function setTitle(string $title) {
        self::$_title = $title;
    }

    static function header()    { ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />    <meta name="author" content="Alfredo Morales" />    
	<meta name="description" content="Mrkados">
    <link rel="icon" type="image/png" href="../images/favicon/favicon.png">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Mr.Kados</title>
    <!-- Stylesheets & Fonts -->
    <link href="../css/plugins.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://fontawesome.com/icons/facebook-square?style=brands">
    <link href="https://fontawesome.com/icons/instagram?style=brands">
    <link href="https://fontawesome.com/icons/linkedin?style=brands">
 </head>

 <body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->
        <header id="header" data-fullwidth="true">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="menu.php">
                            <img src="../images/Mrkados Logo.png" class="logo-default" >
                        </a>
                    </div>
                    <!--End: Logo-->
                    
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->

        
    <?php }

static function header_menu($user)    { ?>

    <!DOCTYPE html>
    <html lang="en">
   
    <head>
       <meta name="viewport" content="width=device-width, initial-scale=1" />
       <meta http-equiv="content-type" content="text/html; charset=utf-8" />    <meta name="Alfredo Morales" content="Mrkados" />    
       <meta name="description" content="Mrkados">
       <link rel="icon" type="image/png" href="../images/favicon/favicon.png">    
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <!-- Document title -->
       <title>Mr.Kados</title>
       <!-- Stylesheets & Fonts -->
       <link href="../css/plugins.css" rel="stylesheet">
       <link href="../css/style.css" rel="stylesheet">
       <link href="https://fontawesome.com/icons/facebook-square?style=brands">
       <link href="https://fontawesome.com/icons/instagram?style=brands">
       <link href="https://fontawesome.com/icons/linkedin?style=brands">
    </head>
   
    <body>
       <!-- Body Inner -->
       <div class="body-inner">
           <!-- Header -->
           <header id="header" data-fullwidth="true">
               <div class="header-inner">
                   <div class="container">
                       <!--Logo-->
                       <div id="logo">
                           <a href="menu.php">
                               <img src="../images/Mrkados Logo.png" class="logo-default" >
                           </a>
                           <a href="index.php"> <input class="btn btn-b" style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;" type="button" value="Salir" /> </a>
                        </div>
                       <!--End: Logo-->
                       
                       <!--Navigation Resposnive Trigger-->
                       <div id="mainMenu-trigger">
                           <a class="lines-button x"><span class="lines"></span></a>
                       </div>
                       <!--end: Navigation Resposnive Trigger-->
                       <!--Navigation-->
                       <!--end: Navigation-->
                   </div>
               </div>
           </header>
           <!-- end: Header -->
   
           
       <?php }

static function header_menu_detail($user)    { ?>

    <!DOCTYPE html>
    <html lang="en">
   
    <head>
       <meta name="viewport" content="width=device-width, initial-scale=1" />
       <meta http-equiv="content-type" content="text/html; charset=utf-8" />    <meta name="Alfredo Morales" content="Mrkados" />    
       <meta name="description" content="Mrkados">
       <link rel="icon" type="image/png" href="../images/favicon/favicon.png">  
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <!-- Document title -->
       <title>Mr.Kados</title>
       <!-- Stylesheets & Fonts -->
       <link href="../css/plugins.css" rel="stylesheet">
       <link href="../css/style.css" rel="stylesheet">
       <link href="https://fontawesome.com/icons/facebook-square?style=brands">
       <link href="https://fontawesome.com/icons/instagram?style=brands">
       <link href="https://fontawesome.com/icons/linkedin?style=brands">
    </head>
   
    <body>
       <!-- Body Inner -->
       <div class="body-inner">
           <!-- Header -->
           <header id="header" data-fullwidth="true">
               <div class="header-inner">
                   <div class="container">
                       <!--Logo-->
                       <div id="logo">
                           <a href="menu.php">
                               <img src="../images/Mrkados Logo.png" class="logo-default" >
                           </a>
                           <a href="index.php"> <input class="btn btn-b" style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;" type="button" value="Salir" /> </a>
                           <a href="menu.php?correo=<?php echo $user; ?>"> <input class="btn btn-b" style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;" type="button" value="Volver" /> </a>
                        </div>
                       <!--End: Logo-->
                       
                       <!--Navigation Resposnive Trigger-->
                       <div id="mainMenu-trigger">
                           <a class="lines-button x"><span class="lines"></span></a>
                       </div>
                       <!--end: Navigation Resposnive Trigger-->
                       <!--Navigation-->
                       <!--end: Navigation-->
                   </div>
               </div>
           </header>
           <!-- end: Header -->
   
           
       <?php }


    static function footer($user)    { ?>

            <!-- Footer -->
    <footer id="footer" class="inverted">
        <div class="footer-content">
          <div class="container">
            <div class="row">
              <div class="col-xl-2 col-lg-2 col-md-3">
                <!-- Footer widget area 1 -->
                <div class="widget">
                  <h4>ENCONTRARÁS...</h4>
                  <ul class="list">
                    <li><a href="#">Latest Release</a></li>
                    <li><a href="#">Updates</a></li>
                    <li><a href="#">License</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Links</a></li>
                  </ul>
                </div>
                <!-- end: Footer widget area 1 -->
              </div>
              <div class="col-xl-2 col-lg-2 col-md-3">
                <!-- Footer widget area 2 -->
                <div class="widget" >
                  <div style="height: 43px; float: left;"></div>
                  <ul class="list">
                    <li><a href="#">Troubleshooting</a></li>
                    <li><a href="#">Common Questions</a></li>
                    <li><a href="#">Report a Bug</a></li>
                    <li><a href="#">Get Help</a></li>
                    <li><a href="#">FAQS</a></li>
                  </ul>
                </div>
                <!-- end: Footer widget area 2 -->
              </div>
  
              <div class="col-xl-2 col-lg-2 col-md-3">
                <!-- Footer widget area 3 -->
                <div class="widget" >
                    <div style="height: 43px; float: left;"></div>
                  <ul class="list">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Portfolio</a></li>
                  </ul>
                </div>
                <!-- end: Footer widget area 3 -->
              </div>
  
              <div class="col-xl-3 col-lg-3 col-md-3">
                <!-- Footer widget area 4 -->
                <div class="widget">
                  <h4>INFORMACIÓN ADICIONAL</h4>
                  
                
                  <ul class="list">
                      <?php if($user == "") { ?>
                     <li><a href="registroUsuariosMerkados.php?error=0">Registra tu negocio</a></li>
                      <?php } ?>
                    <li><a href="#">Fundaciones registradas</a></li>
                    <li><a href="#">Terminos y condiciones</a></li>
                    <li><a href="#">Politicas de privacidad</a></li>
                    <li><a href="#">Ayuda</a></li>
                    <li><a href="#">Servicios adicionales</a></li>
                    <li><a href="#">Colabora con nosotros</a></li>
                  </ul>
                </div>
                <!-- end: Footer widget area 4 -->
              </div>
  
              <div class="col-xl-3 col-lg-3 col-md-3">
                <!-- Footer widget area 5 -->
                <div class="widget clearfix widget-newsletter">
                  <h4 class="widget-title">SUSCRÍBETE</h4>
                  <p>¿Te gustaría recibir promociones
                    de tus MrKados favoritos?
  
                  </p>
                  <form class="widget-subscribe-form p-r-40" action="include/subscribe-form.php" role="form" method="post" novalidate="novalidate">
                    <div class="input-group">
                      <input class="formulario-campo" name="widget-subscribe-form-email" placeholder="Nombre*" type="text" required>
                      <input class="formulario-campo" name="widget-subscribe-form-email" placeholder="E-Mail*" type="email" required>
                      <input class="formulario-campo-boton" type="submit" value="SUSCRÍBETE AHORA"/>
                    </div>
                  </form>
                  <div class="redes-sociales">SÍGUENOS 
                      <a href="#"><i class="fab fa-facebook-square" style="margin-left:5%"></i></a>
                      <a href="#"><i class="fab fa-instagram" style="margin-left:5%"></i></a>
                      <a href="#"><i class="fab fa-linkedin" style="margin-left:5%"></i></a>
                  </div>
                </div>
                <!-- end: Footer widget area 5 -->
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-12">
            <div class="copyright-text">MrKados 2020®</div>
        </div>
        
        </div>
      </footer>
      <!-- end: Footer -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <!--Template functions-->
    <script src="js/functions.js"></script>
</body>

</html>

    <?php }

static function inicioSession($error)
{  ?>
          <!-- Section -->
          <section class="fullscreen" style="background:#f1f1f1;" >
            <div class="container">
            <?php if($error == 2) { ?> <div class="col-lg-9" style="background:red; margin-left:13%; margin-top:-10%; margin-bottom:15%; height:50px; color:white; font-weight:bold;"><h2 style="margin-left:13%; color:white;"> Su clave o contrasena es invalido</h2> </div> <?php }
                       
                     ?>
                    <div class="text-center m-b-30" style="margin-top:-10%;">
                        <a href="index.html" class="logo">
                            <img style="width:10%;" src="../images/registro_exitoso.png"/>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 center p-50 background-white b-r-6">
                            <h3 style="margin-left:25%;">INICIA SESIÓN</h3>
                            <form method="POST">
                                <div class="form-group">
                                    <label class="sr-only">Ingrese su email</label>
                                    <input type="email" required name="email" class="form-control" placeholder="Ingrese su Email">
                                </div>
                                <div class="form-group m-b-5">
                                    <label class="sr-only">Ingrese su contraseña</label>
                                    <input type="password" required name="contrasena" class="form-control" placeholder="Ingrese su Contrasena">
                                </div> 
                              <!--  <div class="form-group form-inline text-left">
                                    <div class="form-check">
                                        <label>
                                            <input type="checkbox"><small class="m-l-10"> Remember me</small>
                                        </label>
                                    </div>
                                </div> -->
                                <div class="text-left form-group">
                                    <button style="margin-left:35%; background:#ffb800; border-color:#ffb800; color:black; font-weight:bold;" type="submit" class="btn">Ingresar</button>
                                </div>
                            </form>
                            
                    </div>
            </div>
        </section>
        <!-- end: Section -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <!--Template functions-->
    <script src="js/functions.js"></script>
    <?php }
   
static function modulos($user)
{ ?>
    <!--Team members style 2-->
    <div class="heading-text  text-center">
                <h4 style="margin-top:5%;">MrKADOS ADMINISTRADOR</h4>
            </div>
            <div class="row team-members team-members-card m-b-40">
                <div class="col-lg-4">
                    <div class="team-member" style="background:orange;">
                       <a href="moduloDetalle.php?correo=<?php echo $user ?>&key=MenuCategorias"> <div class="team-image">
                            <h3>Categorias</h3>
                        </div> </a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="team-member" style="background:orange;">
                       <a href="moduloDetalle.php?correo=<?php echo $user ?>&key=usuarios"> <div class="team-image">
                            <h3>Usuarios</h3>
                        </div> </a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="team-member" style="background:orange;">
                       <a href="moduloDetalle.php?correo=<?php echo $user ?>&key=tiendas"> <div class="team-image">
                            <h3>MrKados</h3>
                        </div> </a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="team-member" style="background:orange;">
                       <a href="moduloDetalle.php?correo=<?php echo $user ?>&key=sliderIndex"> <div class="team-image">
                            <h3>Slider Pagina Principal</h3>
                        </div> </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member" style="background:orange;">
                       <a href="moduloDetalle.php?correo=<?php echo $user ?>&key=photoRegistroTienda"> <div class="team-image">
                            <h3>Foto Registro Mrkado</h3>
                        </div> </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member" style="background:orange;">
                       <a href="moduloDetalle.php?correo=<?php echo $user ?>&key=photoRegistroCliente"> <div class="team-image">
                            <h3>Foto Registro MrKliente</h3>
                        </div> </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member" style="background:orange;">
                       <a href="moduloDetalle.php?correo=<?php echo $user ?>&key=estados"> <div class="team-image">
                            <h3>Estados</h3>
                        </div> </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member" style="background:orange;">
                       <a href="moduloDetalle.php?correo=<?php echo $user ?>&key=ciudades"> <div class="team-image">
                            <h3>Ciudades</h3>
                        </div> </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member" style="background:orange;">
                       <a href="moduloDetalle.php?correo=<?php echo $user ?>&key=colonias"> <div class="team-image">
                            <h3>Colonias</h3>
                        </div> </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member" style="background:orange;">
                       <a href="moduloDetalle.php?correo=<?php echo $user ?>&key=Suscripciones&filter=&order="> <div class="team-image">
                            <h3>Suscripciones</h3>
                        </div> </a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="team-member" style="background:orange;">
                       <a href="moduloDetalle.php?correo=<?php echo $user ?>&key=Precios"> <div class="team-image">
                            <h3>Precios de Planes</h3>
                        </div> </a>
                    </div>
                </div>
            </div>
<?php }

static function moduloSliderIndex($conection, $user, $result, $idSliderIndex)
{ ?>
    <?php if($idSliderIndex == "") { ?>
        <div class="modal fade" id="modal-2" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
        <?php } else { 
            
            $query_slider = "SELECT * FROM slider WHERE id = '$idSliderIndex'";
            $result_slider = mysqli_query($conection,$query_slider);
            while ($row = mysqli_fetch_assoc($result_slider)) 
            {
                $id = $row['id'];
                $text1 =  $row['text1'];
                $text2 =  $row['text2'];
                $imageName =  $row['image'];
                $slideId = $row['id'];
            }
                ?>
        <div tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="false">
            <?php } ?>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">Editar Slider Pagina Inicial</h4>
                </div>
                <form method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row mb20">
                            <div class="col-md-4">
                                <input type="text" value="a" name="idSlideEdit" style="display:none;" >
                                <lable>Texto 1</label>
                                <input type="text" value="<?php echo $id; ?>" name="idSlideEdit" style="display:none;" />
                                <textarea required name="text1Edit" id="nombreCategoria"><?php echo $text1; ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <lable>Texto 2</label>
                                <textarea required  name="text2Edit" id="text2Edit"><?php echo $text2 ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <lable>Imagen</label>
                                <input type="file" required value="<?php echo $imageName ?>" name="imageSliderEdit" id="imageSliderEdit"></input>
                            </div>
                        </div>
                       
                        <div class="modal-footer">
                            <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=sliderIndex"> <button class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button></a>
                            <button class="btn btn-b" type="submit" style="background:#ffa300; border:1px solid; border-color:#ffa300;">Editar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end: Modal large editar sliderIndex -->
    <section>
        <div class="container">
            <div class="row">
                <?php 
                    if($result == "added")
                    {
                        ?> <div style="background: green; margin-left:25%; color:white; border-radius:5px; "><h3 style="color:white;">El Slider se agrego correctamente</h3></div> <?php 
                    }
                    else if($result == "deleted")
                    {
                        ?> <div style="background: green;  margin-left:25%; color:white; border-radius:5px;"><h3 style="color:white;">El Slider se elimino correctamente</h3></div> <?php
                    }
                    else if($result == "edited")
                    {
                        ?> <div style="background: green;  margin-left:25%; color:white; border-radius:5px;"><h3 style="color:white;">El Slider se actualizo correctamente</h3></div> <?php
                    } 
                ?>
                <div class="col-12"><h4>Categorias de MrKados</h4></div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Texto 1</th>
                                    <th scope="col">Texto 2</th>
                                    <th scope="col">Fecha Registro</th>
                                    <th scope="col">Activate</th>
                                    <th scope="col">
                                        <a class="btn" data-target="#modal-1" data-toggle="modal"  style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;">Agregar Slider</a>
                                   </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $query_slider = "SELECT * FROM slider order by id ASC";
                                $result_slider = mysqli_query($conection,$query_slider);
                                while ($row = mysqli_fetch_assoc($result_slider)) { ?>
                                <tr>
                                    <th scope="row"><?php echo $row["id"]; ?></th>
                                    <td><?php echo $row["image"]; ?></td>
                                    <td><?php echo $row["text1"]; ?></td>
                                    <td><?php echo $row["text2"]; ?></td>
                                    <td><?php echo $row["fechaRegistro"]; ?></td>
                                    <td><?php 
                                        if($row["activate"] == "1")
                                        {
                                            ?> <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=sliderIndex&action=desactivar&spi=<?php echo $row["id"] ?>"><input class="btn btn-b" type="button" value="Desactivar" style="background:black; border:1px solid; border-color:black;"/></a> <?php
                                        }
                                        else
                                        {
                                            ?> <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=sliderIndex&action=activar&spi=<?php echo $row["id"] ?>"><input class="btn btn-b" type="button" value="Activar" style="background:black; border:1px solid; border-color:black;"/></a> <?php
                                        }
                                         ?>
                                    </td>
                                    <td>
                                        <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=sliderIndex&action=delete&spi=<?php echo $row["id"] ?>"><input class="btn btn-b" value="Eliminar" style="background:#ffa300; border:1px solid; border-color:#ffa300;" type="button"></a>
                                        <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=sliderIndex&spie=<?php echo $row["id"] ?>" class="btn" style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;">Editar</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
            </div>
        </div>
    </section>
    <!--Modal large Agregar slide -->
    <div class="modal fade" id="modal-1" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">Agrega un nuevo Slide</h4>
                    </div>
                    <form method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                        <div class="row mb20">
                            <div class="col-md-5">
                                <lable>Escriba el Texto 1</label>
                                <textarea id="text1" name="text1" rows="5" cols="33"> </textarea>
                            </div>
                            <div class="col-md-5">
                                <lable>Escriba el Texto 2</label>
                                <textarea id="text2" name="text2" rows="5" cols="33"> </textarea>
                            </div>
                            <div class="col-md-5">
                                <lable>Seleccione su imagen</label>
                                <input type="file" id="imagenSlide" name="imagenSlide" rows="5" cols="33" />
                            </div>
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button>
                            <button class="btn btn-b" type="submit" style="background:#ffa300; border:1px solid; border-color:#ffa300;">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end: Modal large edoitar new slide -->

    <!--Plugins-->
    <script src="../js/jquery.js"></script>
    <script src="../js/plugins.js"></script>
    <!--Template functions-->
    <script src="../js/functions.js"></script>
<?php }

static function moduloPhotoRegistroTienda($conection, $user, $result, $idFotoRegistroMercado)
{ ?>
       <?php if($idFotoRegistroMercado == "") { ?>
        <div class="modal fade" id="modal-2" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
        <?php } else { 
            
            $query_slider = "SELECT * FROM sliderregistrotienda WHERE id = '$idFotoRegistroMercado'";
            $result_slider = mysqli_query($conection,$query_slider);
            while ($row = mysqli_fetch_assoc($result_slider)) 
            {
                $id = $row['id'];
                $text1 =  $row['text1'];
                $text2 =  $row['text2'];
                $imageName =  $row['image'];
                $slideId = $row['id'];
            }
                ?>
        <div tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="false">
            <?php } ?>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">Editar Foto Pagina Registrar Mrkado</h4>
                </div>
                <form method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row mb20">
                            <div class="col-md-4">
                                <lable>Texto 1</label>
                                <input type="text" value="<?php echo $id; ?>" name="idFotoRegistroMercado" style="display:none;" />
                                <textarea required name="text1EditFotoRegistroTienda" id="text1EditFotoRegistroTienda"><?php echo $text1; ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <lable>Texto 2</label>
                                <textarea required  name="text2EditFotoRegistroTienda" id="text2EditFotoRegistroTienda"><?php echo $text2 ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <lable>Imagen</label>
                                <input type="file" required value="<?php echo $imageName ?>" name="imageEditFotoRegistroTienda" id="imageEditFotoRegistroTienda"></input>
                            </div>
                        </div>
                       
                        <div class="modal-footer">
                            <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=photoRegistroTienda"> <button class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button></a>
                            <button class="btn btn-b" type="submit" style="background:#ffa300; border:1px solid; border-color:#ffa300;">Editar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end: Modal large editar foto Registro Mercado -->
    <section>
        <div class="container">
            <div class="row">
            <?php 
                    if($result == "added")
                    {
                        ?> <div style="background: green; margin-left:25%; color:white; border-radius:5px; "><h3 style="color:white;">La foto se agrego correctamente</h3></div> <?php 
                    }
                    else if($result == "deleted")
                    {
                        ?> <div style="background: green;  margin-left:25%; color:white; border-radius:5px;"><h3 style="color:white;">La Foto se elimino correctamente</h3></div> <?php
                    }
                    else if($result == "edited")
                    {
                        ?> <div style="background: green;  margin-left:25%; color:white; border-radius:5px;"><h3 style="color:white;">La Foto se actualizo correctamente</h3></div> <?php
                    } 
                ?>
                <div class="col-12"><h4>SLider Registro de MrKados</h4></div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Texto 1</th>
                                    <th scope="col">Texto 2</th>
                                    <th scope="col">Fecha Registro</th>
                                    <th scope="col">Activate</th>
                                    <th scope="col">
                                        <a class="btn" data-target="#modal-reg" data-toggle="modal"  style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;">Agregar Foto</a>
                                   </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $query_slider = "SELECT * FROM sliderregistrotienda order by id ASC";
                                $result_slider = mysqli_query($conection,$query_slider);
                                while ($row = mysqli_fetch_assoc($result_slider)) { ?>
                                <tr>
                                    <th scope="row"><?php echo $row["id"]; ?></th>
                                    <td><?php echo $row["image"]; ?></td>
                                    <td><?php echo $row["text1"]; ?></td>
                                    <td><?php echo $row["text2"]; ?></td>
                                    <td><?php echo $row["fechaRegistro"]; ?></td>
                                    <td><?php 
                                        if($row["activate"] == "1")
                                        {
                                            ?> <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=photoRegistroTienda&action=desactivar&frmdr=<?php echo $row["id"] ?>"><input class="btn btn-b" type="button" value="Desactivar" style="background:black; border:1px solid; border-color:black;"/></a> <?php
                                        }
                                        else
                                        {
                                            ?> <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=photoRegistroTienda&action=activar&frma=<?php echo $row["id"] ?>"><input class="btn btn-b" type="button" value="Activar" style="background:black; border:1px solid; border-color:black;"/></a> <?php
                                        }
                                         ?>
                                    </td>
                                    <td>
                                        <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=photoRegistroTienda&action=delete&frmd=<?php echo $row["id"] ?>"><input class="btn btn-b" value="Eliminar" style="background:#ffa300; border:1px solid; border-color:#ffa300;" type="button"></a>
                                        <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=photoRegistroTienda&frme=<?php echo $row["id"] ?>" class="btn" style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;">Editar</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
            </div>
        </div>
    </section>
    <!--Modal large Agregar slide -->
    <div class="modal fade" id="modal-reg" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">Agrega un nuevo Slide</h4>
                    </div>
                    <form method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                        <div class="row mb20">
                            <div class="col-md-5">
                                <lable>Escriba el Texto 1</label>
                                <textarea id="text1RegistroTienda" name="text1RegistroTienda" rows="5" cols="33"> </textarea>
                            </div>
                            <div class="col-md-5">
                                <lable>Escriba el Texto 2</label>
                                <textarea id="text2RegistroTienda" name="text2RegistroTienda" rows="5" cols="33"> </textarea>
                            </div>
                            <div class="col-md-5">
                                <lable>Seleccione su imagen</label>
                                <input type="file" id="imagenSlideRegistroTienda" name="imagenSlideRegistroTienda" rows="5" cols="33" />
                            </div>
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button>
                            <button class="btn btn-b" type="submit" style="background:#ffa300; border:1px solid; border-color:#ffa300;">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end: Modal large edoitar new slide -->

    <!--Plugins-->
    <script src="../js/jquery.js"></script>
    <script src="../js/plugins.js"></script>
    <!--Template functions-->
    <script src="../js/functions.js"></script>
<?php }

static function moduloPhotoRegistroCliente($conection, $user, $result, $idFotoRegistroCliente)
{ ?>
       <?php if($idFotoRegistroCliente == "") { ?>
        <div class="modal fade" id="modal-2" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
        <?php } else { 
            
            $query_slider = "SELECT * FROM sliderregistrocliente WHERE id = '$idFotoRegistroCliente'";
            $result_slider = mysqli_query($conection,$query_slider);
            while ($row = mysqli_fetch_assoc($result_slider)) 
            {
                $id = $row['id'];
                $text1 =  $row['text1'];
                $text2 =  $row['text2'];
                $imageName =  $row['image'];
                $slideId = $row['id'];
            }
                ?>
        <div tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="false">
            <?php } ?>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">Editar Foto Pagina Registrar Mrkado</h4>
                </div>
                <form method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row mb20">
                            <div class="col-md-4">
                                <lable>Texto 1</label>
                                <input type="text" value="<?php echo $id; ?>" name="idFotoRegistroCliente" style="display:none;" />
                                <textarea name="text1EditFotoRegistroCliente" id="text1EditFotoRegistroCliente"><?php echo $text1; ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <lable>Texto 2</label>
                                <textarea  name="text2EditFotoRegistroCliente" id="text2EditFotoRegistroCliente"><?php echo $text2 ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <lable>Imagen</label>
                                <input type="file" required value="<?php echo $imageName ?>" name="imageEditFotoRegistroCliente" id="imageEditFotoRegistroCliente"></input>
                            </div>
                        </div>
                       
                        <div class="modal-footer">
                            <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=photoRegistroCliente"> <button class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button></a>
                            <button class="btn btn-b" type="submit" style="background:#ffa300; border:1px solid; border-color:#ffa300;">Editar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end: Modal large editar foto Registro Mercado -->
    <section>
        <div class="container">
            <div class="row">
            <?php 
                    if($result == "added")
                    {
                        ?> <div style="background: green; margin-left:25%; color:white; border-radius:5px; "><h3 style="color:white;">La foto se agrego correctamente</h3></div> <?php 
                    }
                    else if($result == "deleted")
                    {
                        ?> <div style="background: green;  margin-left:25%; color:white; border-radius:5px;"><h3 style="color:white;">La Foto se elimino correctamente</h3></div> <?php
                    }
                    else if($result == "edited")
                    {
                        ?> <div style="background: green;  margin-left:25%; color:white; border-radius:5px;"><h3 style="color:white;">La Foto se actualizo correctamente</h3></div> <?php
                    } 
                ?>
                <div class="col-12"><h4>Foto de la pagina de Registrar MrKlientes</h4></div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Texto 1</th>
                                    <th scope="col">Texto 2</th>
                                    <th scope="col">Fecha Registro</th>
                                    <th scope="col">Activate</th>
                                    <th scope="col">
                                        <a class="btn" data-target="#modal-reg" data-toggle="modal"  style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;">Agregar Foto</a>
                                   </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $query_slider = "SELECT * FROM sliderregistrocliente order by id ASC";
                                $result_slider = mysqli_query($conection,$query_slider);
                                while ($row = mysqli_fetch_assoc($result_slider)) { ?>
                                <tr>
                                    <th scope="row"><?php echo $row["id"]; ?></th>
                                    <td><?php echo $row["image"]; ?></td>
                                    <td><?php echo $row["text1"]; ?></td>
                                    <td><?php echo $row["text2"]; ?></td>
                                    <td><?php echo $row["fechaRegistro"]; ?></td>
                                    <td><?php 
                                        if($row["activate"] == "1")
                                        {
                                            ?> <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=photoRegistroCliente&action=desactivar&frcdr=<?php echo $row["id"] ?>"><input class="btn btn-b" type="button" value="Desactivar" style="background:black; border:1px solid; border-color:black;"/></a> <?php
                                        }
                                        else
                                        {
                                            ?> <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=photoRegistroCliente&action=activar&frca=<?php echo $row["id"] ?>"><input class="btn btn-b" type="button" value="Activar" style="background:black; border:1px solid; border-color:black;"/></a> <?php
                                        }
                                         ?>
                                    </td>
                                    <td>
                                        <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=photoRegistroCliente&action=delete&frcd=<?php echo $row["id"] ?>"><input class="btn btn-b" value="Eliminar" style="background:#ffa300; border:1px solid; border-color:#ffa300;" type="button"></a>
                                        <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=photoRegistroCliente&frce=<?php echo $row["id"] ?>" class="btn" style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;">Editar</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
            </div>
        </div>
    </section>
    <!--Modal large Agregar foto registrar clientes -->
    <div class="modal fade" id="modal-reg" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">Agrega una nueva foto en Registrar Cliente </h4>
                    </div>
                    <form method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                        <div class="row mb20">
                            <div class="col-md-5">
                                <lable>Escriba el Texto 1</label>
                                <textarea id="text1RegistroCliente" name="text1RegistroCliente" rows="5" cols="33"> </textarea>
                            </div>
                            <div class="col-md-5">
                                <lable>Escriba el Texto 2</label>
                                <textarea id="text2RegistroCliente" name="text2RegistroCliente" rows="5" cols="33"> </textarea>
                            </div>
                            <div class="col-md-5">
                                <lable>Seleccione su imagen</label>
                                <input type="file" id="imagenSlideRegistroCliente" name="imagenSlideRegistroCliente" rows="5" cols="33" />
                            </div>
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button>
                            <button class="btn btn-b" type="submit" style="background:#ffa300; border:1px solid; border-color:#ffa300;">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end: Modal large edoitar new slide -->

    <!--Plugins-->
    <script src="../js/jquery.js"></script>
    <script src="../js/plugins.js"></script>
    <!--Template functions-->
    <script src="../js/functions.js"></script>
<?php }

static function menuCategoria($conection, $result, $idCategory, $user)
{ ?>
<section>
    <div class="row">
        <div class="col-lg-4" style="text-align:center;">
            <div class="team-member" style="background:orange;">
                <a href="moduloDetalle.php?correo=<?php echo $user ?>&key=categorias"> <div class="team-image">
                    <h3>Categorias</h3>
                </div> </a>
            </div>
        </div>  

        <div class="col-lg-4" style="text-align:center;">
            <div class="team-member" style="background:orange;">
                <a href="moduloDetalle.php?correo=<?php echo $user ?>&key=subcategorias"> <div class="team-image">
                    <h3>Subcategorias</h3>
                </div> </a>
            </div>
        </div>
    </div>  
</section>
<?php }

static function moduloSubCategoria($conection, $result, $idCategory, $user)
{ ?>

     <!--Modal large Editar categoria -->
     <?php if($idCategory == "") { ?>
        <div class="modal fade" id="modal-2" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
        <?php } else { 
            
            $query_categoria = "SELECT * FROM subcategoria WHERE id = '$idCategory'";
            $result_categoria = mysqli_query($conection,$query_categoria);
            while ($row = mysqli_fetch_assoc($result_categoria)) 
            {
                $catName =  $row['subcat'];
                $catImage =  $row['image'];
                $catId =  $row['id'];
                $tipo = $row['id_categoria'];
                $catP = $row['categoria'];
            }
                ?>
            
             <div tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="false">
            <?php } ?>
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">Editar una sub Categoria</h4>
                    </div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row mb20">
                                <div class="col-md-6">
                                    <input type="text" value="<?php echo $catId; ?>" name="updateSubIDCat" style="display:none;" >
                                    <lable>Nombre de la categoria</label>
                                    <input type="text" placeholder="Escriba el nombre de la categoria" value="<?php echo utf8_encode($catName); ?>" required name="nombreSubCategoriaUpdate" id="nombreCategoria"></input>
                                </div>
                                <div class="col-lg-4" style="margin-top:2%;">
                                    <span>Seleccione la subcategoria</span>
                                    <select name="tipoSubCatEdit" id="tipoCatEdit">
                                        <option value="">Seleccione el tipo de la categoria </option>
                                            <?php 
                                                $query_subcategoria = "SELECT * FROM tipo_categoria";
                                                $result_subcategoria = mysqli_query($conection,$query_subcategoria);
                                                while ($row = mysqli_fetch_assoc($result_subcategoria)) 
                                                { 
                                                
                                                    if($row["nombre"] == $tipo)
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
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span>Seleccione La categoria principal</span>
                                    <select name="tipoSubCatPEdit" id="tipoCatEdit">
                                        <option value="">Seleccione la categoria Principal</option>
                                            <?php 
                                            $query_subcategoriaP = "SELECT * FROM categorias";
                                            $result_subcategoriaP = mysqli_query($conection,$query_subcategoriaP);
                                                            while ($rowP = mysqli_fetch_assoc($result_subcategoriaP)) 
                                                            { 
                                                                if($rowP["id"] == $catP)
                                                                {
                                                                    ?> 
                                                                        <option value="<?php echo $rowP["id"]; ?>" selected><?php echo $rowP["nombre"]; ?></option> 
                                                                    <?php
                                                                }
                                                                else
                                                                {
                                                                    ?> 
                                                                        <option value="<?php echo $rowP["id"]; ?>"><?php echo $rowP["nombre"]; ?></option> 
                                                                    <?php
                                                                }
                                                                    
                                                            }?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <lable>Imagen de la categoria</label>
                                    <input type="file" value="<?php echo $catImage ?>" name="imgSubCategoriaUpdate" id="imgCategoria"></input>
                                </div>
                                <?php 
                                    if($catImage != "")
                                    { ?>
                                        <div class="col-12">
                                            <lable>Imagen Actual de la Subcategoria</label>
                                        </div>
                                        <div class="col-12">
                                            <img src="../images/categorias/<?php echo $catImage; ?>" width="80" />
                                        </div>
                                   <?php }
                                   else
                                   {
                                       //nada
                                   }
                                ?>
                            </div>
                            <div class="modal-footer">
                                <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=categorias"> <button class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button></a>
                                <button class="btn btn-b" type="submit" style="background:#ffa300; border:1px solid; border-color:#ffa300;">Editar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end: Modal large editar categoria -->

    <section>
        <div class="container">
            <div class="row">
                <?php 
                    if($result == "added")
                    {
                        ?> <div style="background: green; margin-left:25%; color:white; border-radius:5px; "><h3 style="color:white;">La categoria se agrego correctamente</h3></div> <?php 
                    }
                    else if($result == "deleted")
                    {
                        ?> <div style="background: green;  margin-left:25%; color:white; border-radius:5px;"><h3 style="color:white;">La categoria se elimino correctamente</h3></div> <?php
                    }
                    else if($result == "edited")
                    {
                        ?> <div style="background: green;  margin-left:25%; color:white; border-radius:5px;"><h3 style="color:white;">La categoria se actualizo correctamente</h3></div> <?php
                    }
                ?>
                <div class="col-12"><h4>Sub categorias de MrKados</h4></div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Tipo Categoria</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">
                                        <a class="btn" data-target="#modal-1" data-toggle="modal"  style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;">Agregar Categoria</a>
                                   </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $query_categorias = "SELECT * FROM subcategoria order by id ASC";
                                $result_categorias = mysqli_query($conection,$query_categorias);
                                while ($row = mysqli_fetch_assoc($result_categorias)) { 
                                    $catt = $row["categoria"];?>
                                <tr>
                                    <th scope="row"><?php echo $row["id"]; ?></th>
                                    <td><?php echo utf8_encode($row["subcat"]); ?></td>
                                    <td><?php echo $row["id_categoria"]; ?></td>
                                    <td><?php echo $row["image"]; ?></td> 
                                    <?php if($catt == 0)
                                    { ?>
                                        <td> -- </td>
                                   <?php } else{
                                    $query_cat = "SELECT * FROM categorias WHERE id = $catt";
                                    $result_cat = mysqli_query($conection,$query_cat);
                                    while ($rowCat = mysqli_fetch_assoc($result_cat)) { ?>
                                    <td><?php echo $rowCat["nombre"]; ?></td>
                                    <?php }
                                    } ?>
                                    <td>
                                        <?php 
                                            $nombreCat = $row["subcat"];
                                            $idCat= $row["id"];
                                            $imgCat = $row["image"];
                                        ?>
                                        <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=subcategorias&action=delete&id=<?php echo $row["id"] ?>&nm=<?php echo $nombreCat; ?>"><input class="btn btn-b" value="Eliminar" style="background:#ffa300; border:1px solid; border-color:#ffa300;" type="button"></a>
                                        <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=subcategorias&id=<?php echo $row["id"] ?>" class="btn" style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;">Editar</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
            </div>
        </div>
    </section>
        <!--Modal large Agregar categoria -->
        <div class="modal fade" id="modal-1" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">Agrega una nueva Categoria</h4>
                    </div>
                    <form method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                        <div class="row mb20">
                            <div class="col-md-6">
                                <lable>Escriba el nombre de la Sub categoria</label>
                                <input type="text" placeholder="Escriba el nombre de la categoria" required name="nombreSubCategoria" id="nombreCategoria"></input>
                            </div>
                            <div class="col-md-6">
                            <span>Seleccione el tipo de la subcategoria</span>
                                <select name="tipoSubCatAdd" id="tipoCatAdd">
                                    <option value="">Seleccione el tipo de la categoria </option>
                                        <?php 
                                            $query_subcategoria = "SELECT * FROM tipo_categoria";
                                            $result_subcategoria = mysqli_query($conection,$query_subcategoria);
                                            while ($row = mysqli_fetch_assoc($result_subcategoria)) 
                                            { 
                                            
                                                if($row["nombre"] == $tipo)
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
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                    <span>Seleccione La categoria principal</span>
                                    <select name="tipoSubCatPAdd" id="tipoCatAdd">
                                        <option value="">Seleccione la categoria Principal</option>
                                            <?php 
                                                $query_subcategoriaP = "SELECT * FROM categorias";
                                                $result_subcategoriaP = mysqli_query($conection,$query_subcategoriaP);
                                                while ($rowP = mysqli_fetch_assoc($result_subcategoriaP)) 
                                                { 
                                                    if($rowP["nombre"] == $catP)
                                                    {
                                                        ?> 
                                                            <option value="<?php echo $rowP["id"]; ?>" selected><?php echo $rowP["nombre"]; ?></option> 
                                                        <?php
                                                    }
                                                    else
                                                    {
                                                        ?> 
                                                            <option value="<?php echo $rowP["id"]; ?>"><?php echo $rowP["nombre"]; ?></option> 
                                                        <?php
                                                    }
                                                        
                                                }?>
                                    </select>
                            </div>
                        
                            <div class="col-md-5">
                                <lable>Seleccione la imagen de la categoria</label>
                                <input type="file" required name="imgSubCategoria" id="imgCategoria"></input>
                            </div>
                        </div>
                       
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button>
                            <button class="btn btn-b" type="submit" style="background:#ffa300; border:1px solid; border-color:#ffa300;">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end: Modal large edoitar Categoria -->

    <!--Plugins-->
    <script src="../js/jquery.js"></script>
    <script src="../js/plugins.js"></script>
    <!--Template functions-->
    <script src="../js/functions.js"></script>
<?php }

static function moduloCategoria($conection, $result, $idCategory, $user)
{  $catName = "";
    $catImage = "";
    $catId ="";
?>

     <!--Modal large Editar categoria -->
     <?php if($idCategory == "") { ?>
        <div class="modal fade" id="modal-2" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
        <?php } else { 
            
            $query_categoria = "SELECT * FROM categorias WHERE id = $idCategory";
            $result_categoria = mysqli_query($conection,$query_categoria);
            while ($row = mysqli_fetch_assoc($result_categoria)) 
            {
                $catName =  $row['nombre'];
                $catImage =  $row['image'];
                $catId =  $row['id'];
            }
                ?>
            
             <div tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="false">
            <?php } ?>
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">Editar una Categoria</h4>
                    </div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row mb20">
                                <div class="col-md-6">
                                    <input type="text" value="<?php echo $catId; ?>" name="updateIDCatt" style="display:none;" >
                                    <lable>Nombre de la categoria</label>
                                    <input type="text" placeholder="Escriba el nombre de la categoria" value="<?php echo $catName; ?>" required name="nombreCategoriaUpdatee" id="nombreCategoria"></input>
                                </div>  
                                <div class="col-md-6">
                                    <lable>Imagen de la categoria</label>
                                    <input type="file" value="<?php echo $catImage ?>" name="imgCategoriaUpdate" id="imgCategoriaa"></input>
                                </div>
                                <?php 
                                
                                    if($catImage != "")
                                    { ?>
                                        <div class="col-12">
                                            <lable>Imagen Actual de la Subcategoria</label>
                                        </div>
                                        <div class="col-12">
                                            <img src="../images/categorias/<?php echo $catImage; ?>" width="80" />
                                        </div>
                                   <?php }
                                   else
                                   {
                                       //nada
                                   }
                                ?>
                            </div>  
                        </div>
                        <div class="modal-footer">
                            <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=categorias"> <button class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button></a>
                            <button class="btn btn-b" type="submit" style="background:#ffa300; border:1px solid; border-color:#ffa300;">Editar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end: Modal large editar categoria -->

    <section>
        <div class="container">
            <div class="row">
                <?php 
                    if($result == "added")
                    {
                        ?> <div style="background: green; margin-left:25%; color:white; border-radius:5px; "><h3 style="color:white;">La categoria se agrego correctamente</h3></div> <?php 
                    }
                    else if($result == "deleted")
                    {
                        ?> <div style="background: green;  margin-left:25%; color:white; border-radius:5px;"><h3 style="color:white;">La categoria se elimino correctamente</h3></div> <?php
                    }
                    else if($result == "edited")
                    {
                        ?> <div style="background: green;  margin-left:25%; color:white; border-radius:5px;"><h3 style="color:white;">La categoria se actualizo correctamente</h3></div> <?php
                    }
                ?>
                <div class="col-12"><h4>Categorias de MrKados</h4></div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">
                                        <a class="btn" data-target="#modal-1" data-toggle="modal"  style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;">Agregar Categoria</a>
                                   </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $query_categorias = "SELECT * FROM categorias order by id ASC";
                                $result_categorias = mysqli_query($conection,$query_categorias);
                                while ($row = mysqli_fetch_assoc($result_categorias)) { ?>
                                <tr>
                                    <th scope="row"><?php echo $row["id"]; ?></th>
                                    <td><?php echo $row["nombre"]; ?></td>
                                    <td><?php echo $row["image"]; ?></td>
                                    <td>
                                        <?php 
                                            $nombreCat = $row["nombre"];
                                            $idCat= $row["id"];
                                            $imgCat = $row["image"];
                                        ?>
                                        <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=categorias&action=delete&id=<?php echo $row["id"] ?>"><input class="btn btn-b" value="Eliminar" style="background:#ffa300; border:1px solid; border-color:#ffa300;" type="button"></a>
                                        <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=categorias&id=<?php echo $row["id"] ?>" class="btn" style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;">Editar</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
            </div>
        </div>
    </section>
        <!--Modal large Agregar categoria -->
        <div class="modal fade" id="modal-1" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">Agrega una nueva Categoria</h4>
                    </div>
                    <form method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                        <div class="row mb20">
                            <div class="col-md-6">
                                <lable>Escriba el nombre de la categoria</label>
                                <input type="text" placeholder="Escriba el nombre de la categoria" required name="nombreCategoriaa" id="nombreCategoria"></input>
                            </div>
                           
                            <div class="col-md-6">
                                <lable>Seleccione la imagen de la categoria</label>
                                <input type="file" required name="imgCategoriaa" id="imgCategoria"></input>
                            </div>
                        </div>
                       
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button>
                            <button class="btn btn-b" type="submit" style="background:#ffa300; border:1px solid; border-color:#ffa300;">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end: Modal large edoitar Categoria -->

    <!--Plugins-->
    <script src="../js/jquery.js"></script>
    <script src="../js/plugins.js"></script>
    <!--Template functions-->
    <script src="../js/functions.js"></script>
<?php }

static function moduloUsuario($conection, $result, $user, $idUserEdit)
{ ?>

    <!--Modal large Editar categoria -->
    <?php if($idUserEdit == "") { ?>
        <div class="modal fade" id="modal-2" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
        <?php } else { 
            
            $query_usuarios = "SELECT * FROM usuarios WHERE id = '$idUserEdit'";
            $result_usuarios = mysqli_query($conection,$query_usuarios);
            while ($row = mysqli_fetch_assoc($result_usuarios)) 
            {
                $usuId = $row['id'];
                $usuName =  $row['nombre'];
                $usuApellidos =  $row['apellidos'];
                $usuCumpleanos =  $row['cumpleanos'];
                $usuTelefono =  $row['telefono'];
                $usuCorreo =  $row['correo'];
                $usuContrasena =  $row['contrasena'];
                $fechaRegistro = $row['fechaRegistro'];
                $tipo_usuario = $row['tipo_usuario'];
            }
                ?>
            
        <div tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="false">
            <?php } ?>
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">Editar una Categoria</h4>
                    </div>
                    <form method="post">
                      <div class="modal-body">
                        <div class="row mb20">
                            <div class="col-md-5">
                                <input type="text" value="<?php echo $usuId; ?>" name="updateIDUsu" style="display:none;" >
                                <lable>Nombre del Usuario</label>
                                <input type="text" placeholder="Escriba el nombre de la categoria" value="<?php echo $usuName; ?>" required name="nombreUsuarioUpdate" id="nombreUsuarioUpdate"></input>
                            </div>
                            <div class="col-md-5">
                                <lable>Apellido del Usuario</label>
                                <input type="text"  value="<?php echo $usuApellidos ?>" name="apellidoUpdate" id="apellidoUpdate"></input>
                            </div>
                            <div class="col-md-5">
                                <lable>Cumpleanos del Usuario</label>
                                <input type="date"  value="<?php echo $usuCumpleanos ?>" name="cumpleanosUpdate" id="cumpleanosUpdate"></input>
                            </div>
                            <div class="col-md-5">
                                <lable>Telefono del Usuario</label>
                                <input style="display:none;" type="text"  value="<?php echo $fechaRegistro; ?>" name="fechaRegistro" id="fechaRegistro"></input>
                                <input style="display:none;" type="text"  value="<?php echo $tipo_usuario; ?>" name="tipo_usuario" id="tipo_usuario"></input>
                                <input type="text"  value="<?php echo $usuTelefono ?>" name="telefonoUpdate" id="telefonoUpdate"></input>
                            </div>
                            <div class="col-md-5">
                                <lable>Correo del Usuario</label>
                                <input type="email"  value="<?php echo $usuCorreo ?>" name="emailUpdate" id="emailUpdate"></input>
                            </div>
                            <div class="col-md-5">
                                <lable>Contrasena del Usuario</label>
                                <input type="password"  value="<?php echo $usuContrasena ?>" name="contrasenaUpdate" id="contrasenaUpdate"></input>
                            </div>
                        </div>
                       
                        </div>
                        <div class="modal-footer">
                            <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=usuarios"> <button class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button></a>
                            <button class="btn btn-b" type="submit" style="background:#ffa300; border:1px solid; border-color:#ffa300;">Editar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end: Modal large editar categoria -->

    <section>
        <div class="container">
        <?php 
                    if($result == "added")
                    {
                        ?> <div style="background: green; margin-left:20%; color:white; border-radius:5px; "><h3 style="color:white;">El Usuario se agrego correctamente</h3></div> <?php 
                    }
                    else if($result == "deleted")
                    {
                        ?> <div style="background: green;  margin-left:25%; color:white; border-radius:5px;"><h3 style="color:white;">El Usuario se elimino correctamente</h3></div> <?php
                    }
                    else if($result == "edited")
                    {
                        ?> <div style="background: green;  margin-left:25%; color:white; border-radius:5px;"><h3 style="color:white;">El Usuario se actualizo correctamente</h3></div> <?php
                    }
            ?>

            <div class="row">
            <h4>Usuarios de MrKados</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Cumpleanos</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Fecha Registro</th>
                                    <th scope="col">Tipo de Usuario</th>
                                    <th scope="col">Nro. de Reportes</th>
                                    <th scope="col"><a class="btn" data-target="#modal-1" data-toggle="modal"  style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;">Agregar Usuario</a></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $query_categorias = "SELECT * FROM usuarios";
                                $result_categorias = mysqli_query($conection,$query_categorias);
                                while ($row = mysqli_fetch_assoc($result_categorias)) { $usuId = $row["id"]; ?>
                                <tr>
                                    <th scope="row"><?php echo $row["id"]; ?></th>
                                    <td><?php echo $row["nombre"]; ?></td>
                                    <td><?php echo $row["apellidos"]; ?></td>
                                    <td><?php echo $row["cumpleanos"]; ?></td>
                                    <td><?php echo $row["telefono"]; ?></td>
                                    <td><?php echo $row["correo"]; ?></td>
                                    <td><?php echo $row["fechaRegistro"]; ?></td>
                                    <td><?php if($row["tipo_usuario"] == 1)
                                        {
                                            ?> Mrkado <?php
                                        } else if($row["tipo_usuario"] == 2)
                                         {
                                             ?> MrKliente <?php 
                                         } else if($row["tipo_usuario"] == 3)
                                         {
                                            ?> Administrador <?php
                                         }?></td>
                                    <?php 
                                    $nroReport = 0;
                                    $query_reportados = "SELECT * FROM reportados WHERE id_usuario = '$usuId'";
                                    $result_reportados = mysqli_query($conection,$query_reportados);
                                    while ($rowReportado = mysqli_fetch_assoc($result_reportados)) { 
                                        $nroReport = $nroReport + 1;
                                    }?>
                                    <td><?php echo $nroReport; ?></td>
                                    <td>
                                        <a href="moduloDetalle.php?inud=<?php echo $usuId; ?>&correo=<?php echo $user; ?>&key=usuarios&action=delete"><input class="btn btn-b" value="Eliminar" style="background:#ffa300; border:1px solid; border-color:#ffa300;" type="button"></a>
                                        <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=usuarios&idue=<?php echo $row["id"] ?>" class="btn" style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;">Editar</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
            </div>
        </div>
    </section>

     <!--Modal large Agregar Usuario -->
     <div class="modal fade" id="modal-1" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">Agrega un nuevo Usuario</h4>
                    </div>
                    <form method="post">
                      <div class="modal-body">
                        <div class="row mb20">
                            <div class="col-md-6">
                                <lable>Escriba el nombre del Usuario</label>
                                <input type="text" placeholder="Escriba el nombre del Usuario" required name="usuarioNombre" id="usuarioNombre"></input>
                            </div>
                            <div class="col-md-6">
                                <lable>Escriba el apellido del Usuario</label>
                                <input type="text" placeholder="Escriba el apellido del Usuario" required name="usuarioApellido" id="usuarioApellido"></input>
                            </div>
                            <div class="col-md-6">
                                <lable>Seleccione la fecha de nacimiento</label>
                                <input type="date"  name="usuarioFecha" id="usuarioFecha"></input>
                            </div>
                            <div class="col-md-6">
                                <lable>Escriba el Numero de telefono</label>
                                <input type="text"  name="usuarioTelefono" id="usuarioTelefono"></input>
                            </div>
                            <div class="col-md-6">
                                <lable>Escriba el email del usuario</label>
                                <input type="email"  name="usuarioMail" id="usuarioMail"></input>
                            </div>
                            <div class="col-md-5">
                                <lable>Escriba la constrasena</label>
                                <input type="password"  name="usuarioPassword" id="usuarioPassword" />
                            </div>
                            <div class="col-md-6">
                                <select name="usuarioTipo" id="usuarioTipo">
                                    <option value="">Seleccione el tipo de Usuario</option>
                                    <option value="1">Mrkado</option>
                                    <option value="2">Mrs Cliente</option>
                                    <option value="3">Admin</option>
                                </select>
                            </div>
                        </div>
                       
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button>
                            <button class="btn btn-b" type="submit" style="background:#ffa300; border:1px solid; border-color:#ffa300;">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end: Modal large edoitar Categoria -->

    <!--Plugins-->
    <script src="../js/jquery.js"></script>
    <script src="../js/plugins.js"></script>
    <!--Template functions-->
    <script src="../js/functions.js"></script>
<?php }


static function moduloEstados($conection, $user, $result, $estadosID)
{  ?>
    
    <!--Modal large Editar categoria -->
    <?php if($estadosID == "") { ?>
        <div class="modal fade" id="modal-2" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
        <?php } else { 
            
            $query_estado = "SELECT * FROM estado WHERE id = '$estadosID'";
            $result_estado = mysqli_query($conection,$query_estado);
            while ($row = mysqli_fetch_assoc($result_estado)) 
            {
                $estadoId = $row['id'];
                $estadoNombre =  $row['nombre'];
            }
                ?>
            
             <div tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="false">
            <?php } ?>
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">Editar un Estado</h4>
                    </div>
                    <form method="post">
                      <div class="modal-body">
                        <div class="row mb20">
                            <div class="col-md-5">
                                <input type="text" value="<?php echo $estadoId; ?>" name="EstadoUpdateid" style="display:none;" >
                                <lable>Nombre del Estado</label>
                                <input type="text" placeholder="Escriba el nombre del estado" value="<?php echo $estadoNombre; ?>" required name="nombreEstadoUpdate" id="nombreEstadoUpdate"></input>
                            </div>
                        </div>
                       
                        </div>
                        <div class="modal-footer">
                            <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=estados"> <button class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button></a>
                            <button class="btn btn-b" type="submit" style="background:#ffa300; border:1px solid; border-color:#ffa300;">Editar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end: Modal large editar categoria -->

    <section>
        <div class="container">
        <?php 
                    if($result == "added")
                    {
                        ?> <div style="background: green; margin-left:20%; color:white; border-radius:5px; "><h3 style="color:white;">El Estado se agrego correctamente</h3></div> <?php 
                    }
                    else if($result == "deleted")
                    {
                        ?> <div style="background: green;  margin-left:25%; color:white; border-radius:5px;"><h3 style="color:white;">El Estado se elimino correctamente</h3></div> <?php
                    }
                    else if($result == "edited")
                    {
                        ?> <div style="background: green;  margin-left:25%; color:white; border-radius:5px;"><h3 style="color:white;">El Estado se actualizo correctamente</h3></div> <?php
                    }
            ?>

            <div class="row">
            <h4>Estados de MrKados</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col"><a class="btn" data-target="#modal-1" data-toggle="modal"  style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;">Agregar Estado</a></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $query_categorias = "SELECT * FROM estado";
                                $result_categorias = mysqli_query($conection,$query_categorias);
                                while ($row = mysqli_fetch_assoc($result_categorias)) { $estadoId = $row["id"]; ?>
                                <tr>
                                    <th scope="row"><?php echo $row["id"]; ?></th>
                                    <td><?php echo $row["nombre"]; ?></td>
                                    <td>
                                    <a href="moduloDetalle.php?emd=<?php echo $estadoId; ?>&correo=<?php echo $user; ?>&key=estados&action=delete"><input class="btn btn-b" value="Eliminar" style="background:#ffa300; border:1px solid; border-color:#ffa300;" type="button"></a>
                                    <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=estados&ise=<?php echo $row["id"] ?>" class="btn" style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;">Editar</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
            </div>
        </div>
    </section>

     <!--Modal large Agregar Estados -->
     <div class="modal fade" id="modal-1" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">Agrega un nuevo Estado</h4>
                    </div>
                    <form method="post">
                      <div class="modal-body">
                        <div class="row mb20">
                            <div class="col-md-6">
                                <lable>Escriba el nombre del Estado</label>
                                <input type="text" placeholder="Escriba el nombre del Usuario" required name="estadoNombre" id="estadoNombre"></input>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button>
                            <button class="btn btn-b" type="submit" style="background:#ffa300; border:1px solid; border-color:#ffa300;">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end: Modal large edoitar Categoria -->

    <!--Plugins-->
    <script src="../js/jquery.js"></script>
    <script src="../js/plugins.js"></script>
    <!--Template functions-->
    <script src="../js/functions.js"></script>
<?php }

static function moduloCiudades($conection, $user, $result, $ciudadID)
{  ?>
    
    <!--Modal large Editar categoria -->
    <?php if($ciudadID == "") { ?>
        <div class="modal fade" id="modal-2" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
        <?php } else { 
            
            $query_ciudad = "SELECT * FROM ciudad WHERE id = '$ciudadID'";
            $result_ciudad = mysqli_query($conection,$query_ciudad);
            while ($row = mysqli_fetch_assoc($result_ciudad)) 
            {
                $ciudadId = $row['id'];
                $ciudadNombre =  $row['nombre'];
            }
                ?>
            
             <div tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="false">
            <?php } ?>
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">Editar una Ciudad</h4>
                    </div>
                    <form method="post">
                      <div class="modal-body">
                        <div class="row mb20">
                            <div class="col-md-5">
                                <input type="text" value="<?php echo $ciudadId; ?>" name="CiudadUpdateid" style="display:none;" >
                                <lable>Nombre del Estado</label>
                                <input type="text" placeholder="Escriba el nombre de la ciudad" value="<?php echo $ciudadNombre; ?>" required name="nombreCiudadUpdate" id="nombreEstadoUpdate"></input>
                            </div>
                        </div>
                       
                        </div>
                        <div class="modal-footer">
                            <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=ciudades"> <button class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button></a>
                            <button class="btn btn-b" type="submit" style="background:#ffa300; border:1px solid; border-color:#ffa300;">Editar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end: Modal large editar categoria -->

    <section>
        <div class="container">
        <?php 
                    if($result == "added")
                    {
                        ?> <div style="background: green; margin-left:20%; color:white; border-radius:5px; "><h3 style="color:white;">La ciudad se agrego correctamente</h3></div> <?php 
                    }
                    else if($result == "deleted")
                    {
                        ?> <div style="background: green;  margin-left:25%; color:white; border-radius:5px;"><h3 style="color:white;">La ciudad se elimino correctamente</h3></div> <?php
                    }
                    else if($result == "edited")
                    {
                        ?> <div style="background: green;  margin-left:25%; color:white; border-radius:5px;"><h3 style="color:white;">La ciudad se actualizo correctamente</h3></div> <?php
                    }
            ?>

            <div class="row">
            <h4>Ciudades de MrKados</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Ciudad</th>
                                    <th scope="col"><a class="btn" data-target="#modal-1" data-toggle="modal"  style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;">Agregar Estado</a></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $query_ciudad = "SELECT * FROM ciudad";
                                $result_ciudad = mysqli_query($conection,$query_ciudad);
                                while ($row = mysqli_fetch_assoc($result_ciudad)) { $ciudadId = $row["id"]; ?>
                                <tr>
                                    <th scope="row"><?php echo $row["id"]; ?></th>
                                    <td><?php echo $row["nombre"]; ?></td>
                                    <td>
                                    <a href="moduloDetalle.php?cmdt=<?php echo $ciudadId; ?>&correo=<?php echo $user; ?>&key=ciudades&action=delete"><input class="btn btn-b" value="Eliminar" style="background:#ffa300; border:1px solid; border-color:#ffa300;" type="button"></a>
                                    <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=ciudades&cse=<?php echo $row["id"] ?>" class="btn" style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;">Editar</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
            </div>
        </div>
    </section>

     <!--Modal large Agregar Estados -->
     <div class="modal fade" id="modal-1" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">Agrega una nueva Ciudad</h4>
                    </div>
                    <form method="post">
                      <div class="modal-body">
                        <div class="row mb20">
                            <div class="col-md-6">
                                <lable>Escriba el nombre de la Ciudad</label>
                                <input type="text" placeholder="Escriba el nombre de la Ciudad" required name="ciudadNombre" id="ciudadNombre"></input>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button>
                            <button class="btn btn-b" type="submit" style="background:#ffa300; border:1px solid; border-color:#ffa300;">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end: Modal large edoitar Categoria -->

    <!--Plugins-->
    <script src="../js/jquery.js"></script>
    <script src="../js/plugins.js"></script>
    <!--Template functions-->
    <script src="../js/functions.js"></script>
<?php }

static function moduloColonias($conection, $user, $result, $coloniasID)
{  ?>
    
    <!--Modal large Editar categoria -->
    <?php if($coloniasID == "") { ?>
        <div class="modal fade" id="modal-2" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
        <?php } else { 
            
            $query_colonia = "SELECT * FROM colonia WHERE id = '$coloniasID'";
            $result_colonia = mysqli_query($conection,$query_colonia);
            while ($row = mysqli_fetch_assoc($result_colonia)) 
            {
                $coloniaId = $row['id'];
                $coloniaNombre =  $row['nombre'];
            }
                ?>
            
             <div tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="false">
            <?php } ?>
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">Editar una Colonia</h4>
                    </div>
                    <form method="post">
                      <div class="modal-body">
                        <div class="row mb20">
                            <div class="col-md-5">
                                <input type="text" value="<?php echo $coloniaId; ?>" name="ColoniaUpdateid" style="display:none;" >
                                <lable>Nombre de la Colonia</label>
                                <input type="text" placeholder="Escriba el nombre de la Colonia" value="<?php echo $coloniaNombre; ?>" required name="nombreColoniaUpdate" id="nombreColoniaUpdate"></input>
                            </div>
                            <div class="col-md-6">
                                <lable>Seleccione el Estado</label>
                                <select name="estadoColoniaUpdate" id="estadoColoniaUpdate">
                                    <option value="">Seleccione el estado de la colonia</option>
                                    <?php 
                                    $query_estado = "SELECT * FROM estado";
                                    $result_estado = mysqli_query($conection,$query_estado);
                                    while ($row = mysqli_fetch_assoc($result_estado)) 
                                    { 
                                        ?> <option value="<?php echo $row["id"]; ?>"><?php echo $row["nombre"]; ?></option> <?php
                                        
                                    }?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <lable>Seleccione la Ciudad</label>
                                <select name="ciudadColoniaUpdate" id="ciudadColoniaUpdate">
                                    <option value="">Seleccione la ciudad de la colonia</option>
                                    <?php 
                                    $query_ciudad = "SELECT * FROM ciudad";
                                    $result_ciudad = mysqli_query($conection,$query_ciudad);
                                    while ($row = mysqli_fetch_assoc($result_ciudad)) 
                                    { 
                                        ?> <option value="<?php echo $row["id"]; ?>"><?php echo $row["nombre"]; ?></option> <?php
                                        
                                    }?>
                                </select>
                            </div>
                        </div>
                       
                        </div>
                        <div class="modal-footer">
                            <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=colonias"> <button class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button></a>
                            <button class="btn btn-b" type="submit" style="background:#ffa300; border:1px solid; border-color:#ffa300;">Editar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end: Modal large editar categoria -->

    <section>
        <div class="container">
        <?php 
                    if($result == "added")
                    {
                        ?> <div style="background: green; margin-left:20%; color:white; border-radius:5px; "><h3 style="color:white;">La Colonia se agrego correctamente</h3></div> <?php 
                    }
                    else if($result == "deleted")
                    {
                        ?> <div style="background: green;  margin-left:25%; color:white; border-radius:5px;"><h3 style="color:white;">La Colonia se elimino correctamente</h3></div> <?php
                    }
                    else if($result == "edited")
                    {
                        ?> <div style="background: green;  margin-left:25%; color:white; border-radius:5px;"><h3 style="color:white;">La Colonia se actualizo correctamente</h3></div> <?php
                    }
            ?>

            <div class="row">
            <h4>Colonias de MrKados</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Colonia</th>
                                    <th scope="col"><a class="btn" data-target="#modal-1" data-toggle="modal"  style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;">Agregar Colonia</a></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $query_colonia = "SELECT * FROM colonia";
                                $result_colonia = mysqli_query($conection,$query_colonia);
                                while ($row = mysqli_fetch_assoc($result_colonia)) { $coloniaId = $row["id"]; ?>
                                <tr>
                                    <th scope="row"><?php echo $row["id"]; ?></th>
                                    <td><?php echo $row["nombre"]; ?></td>
                                    <td>
                                    <a href="moduloDetalle.php?cmdc=<?php echo $coloniaId; ?>&correo=<?php echo $user; ?>&key=colonias&action=delete"><input class="btn btn-b" value="Eliminar" style="background:#ffa300; border:1px solid; border-color:#ffa300;" type="button"></a>
                                    <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=colonias&cscc=<?php echo $row["id"] ?>" class="btn" style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;">Editar</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
            </div>
        </div>
    </section>

     <!--Modal large Agregar Estados -->
     <div class="modal fade" id="modal-1" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">Agrega una nueva Colonia</h4>
                    </div>
                    <form method="post">
                      <div class="modal-body">
                        <div class="row mb20">
                            <div class="col-md-6">
                                <lable>Escriba el nombre de la Colonia</label>
                                <input type="text" placeholder="Escriba el nombre de la COlonia" required name="coloniaNombre" id="coloniaNombre"></input>
                            </div>
                            <div class="col-md-6">
                                <lable>Seleccione el Estado</label>
                                <select name="estadoColonia" id="estadoColonia">
                                    <option value="">Seleccione el estado de la colonia</option>
                                    <?php 
                                    $query_estado = "SELECT * FROM estado";
                                    $result_estado = mysqli_query($conection,$query_estado);
                                    while ($row = mysqli_fetch_assoc($result_estado)) 
                                    { 
                                        ?> <option value="<?php echo $row["id"]; ?>"><?php echo $row["nombre"]; ?></option> <?php
                                        
                                    }?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <lable>Seleccione la Ciudad</label>
                                <select name="ciudadColonia" id="ciudadColonia">
                                    <option value="">Seleccione la ciudad de la colonia</option>
                                    <?php 
                                    $query_ciudad = "SELECT * FROM ciudad";
                                    $result_ciudad = mysqli_query($conection,$query_ciudad);
                                    while ($row = mysqli_fetch_assoc($result_ciudad)) 
                                    { 
                                        ?> <option value="<?php echo $row["id"]; ?>"><?php echo $row["nombre"]; ?></option> <?php
                                        
                                    }?>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button>
                            <button class="btn btn-b" type="submit" style="background:#ffa300; border:1px solid; border-color:#ffa300;">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end: Modal large edoitar Categoria -->

    <!--Plugins-->
    <script src="../js/jquery.js"></script>
    <script src="../js/plugins.js"></script>
    <!--Template functions-->
    <script src="../js/functions.js"></script>
<?php }

static function moduloTiendas($conection, $user)
{ ?>
    <section>
        <div class="container">
            <div class="row">
            <h4>Categorias de MrKados</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Nombre de Mrkado</th>
                                    <th scope="col">Giro</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $query_tiendas = "SELECT * FROM tiendas";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                                while ($rowT = mysqli_fetch_assoc($result_tiendas)) { ?>
                                <tr>
                                    <th scope="row"><?php echo $rowT["id"]; ?></th>
                                    <td><?php echo $rowT["nombreTienda"]; ?></td>
                                    <td><?php echo $rowT["giro"]; ?></td>
                                    <td>
                                        <a href="verMrkado.php?correo=<?php echo $user; ?>&key=tiendas&ite=<?php echo $rowT["id"] ?>"><input value="Ver" type="button" style="background:#ffa300; border:1px solid; border-color:#ffa300;" class="btn btn-b"></a>
                                        <a href="moduloDetalle.php?key=tiendas&action=delete&itdd=<?php echo $rowT["id"] ?>"><input value="Eliminar" style="background:#ffa300; border:1px solid; border-color:#ffa300;" type="button" class="btn btn-b"></a>
                                        <a href="editarMrkado.php?correo=<?php echo $user; ?>&key=tiendas&ite=<?php echo $rowT["id"] ?>"><input value="Editar" style="background:#ffa300; border:1px solid; border-color:#ffa300;" type="button" class="btn btn-b"></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
            </div>
        </div>
    </section>
<?php }

static function primaryInformation($logo, $description, $nombreTienda, $catalogo)
{  ?>
    <section style="background:#f3f3f3;">
        <div class="container">
            <h2 style="margin-left:22%; margin-bottom:5%;">Detalle del MrKado <?php echo $nombreTienda; ?></h2>
            <div class="row">
                <div class="col-lg-4">
                    <div style="width:70%; margin-top:13%; margin-left:13%">
                        <img src="../images/Logos/<?php echo $logo; ?>" style="width:100%">
                    </div>
                </div>

                <div class="col-lg-8">
                    <div style="width:100%; margin-top:1%; color:black;">
                        <?php echo $description; ?>
                    </div>
                    <div style="width:100%; color:green;">
                        <input type="button" data-target="#modal-1" data-toggle="modal" value="Conoce más..." style="background:#ff9f00; font-weight:bold; margin-top:5%; margin-left:35%; width:25%; border:1px solid; border-color:#ff9f00; border-radius:15px;"/>
                    </div>
                </div>
            </div>
        </div> 
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
<?php }

static function primaryInformationEdit($logo, $description, $nombreTienda, $id, $status, $catalogo)
{ ($logo); ?>
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
                                    <div><input type="button" data-target="#modal-1" data-toggle="modal" value="Conoce más..." style="background:#ff9f00; font-weight:bold; margin-top:5%; width:25%; border:1px solid; border-color:#ff9f00; border-radius:15px;"/></div>
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
<?php }

static function tiendaInformacionGeneral($encargadoNombre, $encargadoApellido, $direccion, $paginaWeb,  $horarios, $tiempoEnvio, $factura, $correo, $social, $metodoPago, $tiposEntrega, $costoEnvio, $descripcionEnvio, $whatsaap,$facebook, $citas, $nombreTienda, $id, $user, $estado, $colonia, $ciudad)
{ ?>
    <section style="background:#f3f3f3;">
        <div class="container">
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

                <div class="col-lg-4">
                    <?php echo $encargadoNombre." ".$encargadoApellido; ?>
                </div>
                <div class="col-lg-4" >
                    <?php echo $direccion; ?>
                </div>
                <div class="col-lg-4" >
                    <?php echo $paginaWeb; ?>
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
                    <?php echo $ciudad; ?>
                </div>
                <div class="col-lg-4" >
                    <?php echo $estado; ?>
                </div>
                <div class="col-lg-4" >
                    <?php echo $colonia; ?>
                </div>

                <div class="col-lg-4" style=" font-weight:bold; margin-top:2%;">
                    Horario del establecimiento:
                </div>
                <div class="col-lg-4" style=" font-weight:bold; margin-top:2%;">
                    Tiempo de envío aproximado:
                </div>
                <div class="col-lg-4" style=" font-weight:bold; margin-top:2%;">
                    Correo electrónico:
                </div>
                <div class="col-lg-4">
                <?php $horario = explode(",", $horarios); 
                 $arr_length = count($horario);
        
                    if($horario[0] != " ")
                    { ?>
                         Lunes de <?php echo $horario[0]." a ".$horario[1];  ?>
                   <?php }
                    else 
                    {
                      ?>
                        <div>Lunes CERRADO</div>
                    <?php } 

                    if($horario[2] != " ")
                    { ?>
                        <div> Martes de <?php echo $horario[2]." a ".$horario[3];  ?></div>
                   <?php }
                    else 
                    {
                      ?>
                       <div> Martes CERRADO; </div>
                    <?php } 

                    if($horario[4] != " ")
                    { ?>
                        </div> Miercoles de <?php echo $horario[4]." a ".$horario[5];  ?> </div>
                   <?php }
                    else 
                    {
                      ?>
                        <div>Miercoles CERRADO</div>
                    <?php } 

                    if($horario[6] != " ")
                    { ?>
                        <div> Jueves de <?php echo $horario[6]." a ".$horario[7];  ?> </div>
                   <?php }
                    else 
                    {
                      ?>
                       <div> Jueves CERRADO </div>
                    <?php } 

                    if($horario[8] != " ")
                    { ?>
                        <div> Viernes de <?php echo $horario[8]." a ".$horario[9];  ?> </div>
                   <?php }
                    else 
                    {
                      ?>
                       <div> Viernes CERRADO </div>
                    <?php } 

                    if($horario[10] != " ")
                    { ?>
                        <div> Sabado de <?php echo $horario[10]." a ".$horario[11];  ?> </div>
                   <?php }
                    else 
                    {
                      ?>
                       <div> Sabado CERRADO </div>
                    <?php } 

                    if($horario[12] != " ")
                    { ?>
                        <div> Domingo de <?php echo $horario[12]." a ".$horario[13];  ?> </div>
                   <?php }
                    else 
                    {
                      ?>
                       <div> Domingo CERRADO </div>
                    <?php } ?>
                    
                   
                </div>
                <div class="col-lg-4" >
                    <?php echo $tiempoEnvio." min."; ?>
                    <div style=" font-weight:bold; margin-top:3%;">
                        ¿Emite factura?
                    </div>
                    <div>
                        <?php echo $factura; ?>
                    </div>
                </div>
                <div class="col-lg-4" >
                    <?php echo $correo; ?>
                    <div style="font-weight:bold; margin-top:3%;">
                        Redes sociales:
                    </div>
                    <div>
                    <?php $redes = explode(",", $social); 
                          $arr_length = count($redes);
                          
                          for($i = 0; $i < $arr_length; $i++)
                          {
                            if($redes[$i] != "none" && $redes[$i] != "")
                            {
                                ?> <div> <?php echo $redes[$i].": ".$redes[$i+1]; $i++;?></div> <?php
                            }
                          }
                    ?>
                    </div>
                </div>
                

                <div class="col-lg-12">
                    <div style="font-weight:bold; text-align:left; margin-top:3%;">Métodos de pago:</div>
                </div>
                
                <?php $pieces = explode(",", $metodoPago); 
                if($pieces[0] == "") {  ?> <div style="width:3%;"><input type="checkbox" disabled style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" disabled checked></div> <?php }?>

                <div class="col-lg-1" >Efectivo</div>
                
               <?php if($pieces[1] == "") {  ?> <div style="width:3%;"><input type="checkbox" disabled style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" disabled checked></div> <?php }?>

                <div style="width:20%;">Tarjeta de crédito / Débito</div>

                <?php if($pieces[2] == "") {  ?> <div style="width:3%;"><input type="checkbox" disabled style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" checked disabled></div> <?php }?>
                
                <div style="width:15%;">Tienda Dptal</div>

                <?php if($pieces[3] == "") {  ?> <div style="width:3%;"><input type="checkbox" disabled style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" disabled checked></div> <?php }?>

                <div style="width:20%;">Transferencia electrónica</div>
                
                <?php if($pieces[4] == "") {  ?> <div style="width:3%;"><input type="checkbox" disabled style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" disabled checked></div> <?php }?>

                <div style="width:20%;">Depósito en banco</div>

                <div class="col-lg-12">
                    <div style="font-weight:bold; text-align:left; margin-top:3%;">Tipos de entrega:</div>
                </div>
                
                <?php $piece = explode(",", $tiposEntrega); 
                if($piece[0] == "") {  ?> <div style="width:3%;"><input type="checkbox" disabled style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" disabled checked></div> <?php }?>

                <div style="width:20%;">Recogerlo directamente</div>
                
               <?php if($piece[1] == "") {  ?> <div style="width:3%;"><input type="checkbox" disabled style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" disabled checked></div> <?php }?>

                <div style="width:10%;">RAPPI</div>

                <?php if($piece[2] == "") {  ?> <div style="width:3%;"><input type="checkbox" disabled style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" checked disabled></div> <?php }?>
                
                <div style="width:10%;">Uber eats</div>

                <?php if($piece[3] == "") {  ?> <div style="width:3%;"><input type="checkbox" disabled style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" disabled checked></div> <?php }?>

                <div style="width:25%;">Envío directo del establecimiento</div>
                
                <?php if($piece[4] == "") {  ?> <div style="width:3%;"><input type="checkbox" disabled style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" disabled checked></div> <?php }?>

                <div style="width:20%;">Mensajería</div>

                <div class="col-lg-12">
                    <div style="font-weight:bold; text-align:left; margin-top:3%;">Costo de envío:</div>
                </div>
                
                <?php

                if($costoEnvio == "") {  ?> <div style="width:3%;"><input type="checkbox" disabled style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" disabled checked></div> <?php }?>

                <div style="width:5%;">SI</div>
                <div style="width:3%;"><?php echo $costoEnvio; ?></div>
                <div style="width:1%;">MXN</div>
                <div class="col-lg-12">
                    <div>Nota: <?php echo $descripcionEnvio; ?></div>
                </div>

            </div>
            </div>
        </div>
    </section>

        <!-- ventana emergente -->
     <!--Modal large -->
     <div class="modal fade" id="modal-4" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">¿Deseas contactar esta tienda?</h4>
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    </div>
                    <form method="post">
                      <div class="modal-body">
                        <div class="row mb20">
                            <div class="col-md-12">
                                <h5>Nombre de la tienda: <?php echo $nombreTienda; ?></h5>
                                <input style="display:none;" type="text" name="idTiendaContacto" value="<?php echo $id; ?>">
                            </div>

                            <div class="col-md-12">
                                <h5>Direccion: <?php echo $direccion; ?></h5>
                            </div>

                            <div class="col-md-12">
                                <h5>Nombre del encargado: <?php echo $encargadoNombre." ".$encargadoApellido; ?></h5>
                            </div>
                            
                        </div>
                       
                        </div>
                        <div style="margin-left:38%;">
                            <button data-dismiss="modal" class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button>
                            <button type="submit" class="btn btn-b" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Contactar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end: Modal large -->

        <!--Modal large -->
     <div class="modal fade" id="modal-5" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">¿Deseas contactar esta tienda?</h4>
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    </div>
                    <form method="post">
                      <div class="modal-body">
                        <div class="row mb20">
                            <div class="col-md-12">
                                <h5>Nombre de la tienda: <?php echo $nombreTienda; ?></h5>
                                <input style="display:none;" type="text" name="idTiendaContactoF" value="<?php echo $id; ?>">
                            </div>

                            <div class="col-md-12">
                                <h5>Direccion: <?php echo $direccion; ?></h5>
                            </div>

                            <div class="col-md-12">
                                <h5>Nombre del encargado: <?php echo $encargadoNombre." ".$encargadoApellido; ?></h5>
                            </div>
                            
                        </div>
                       
                        </div>
                        <div style="margin-left:38%;">
                            <button data-dismiss="modal" class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button>
                            <button type="submit" class="btn btn-b" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Contactar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end: Modal large -->
<?php }

static function tiendaInformacionGeneralEdit($encargadoNombre, $encargadoApellido, $direccion, $paginaWeb,  $horarios, $tiempoEnvio, $factura, $correo, $social, $metodoPago, $tiposEntrega, $costoEnvio, $descripcionEnvio, $whatsaap,$facebook, $citas, $nombreTienda, $id, $user, $estado, $colonia, $ciudad, $conection, $codigoPostal)
{ ?>
    <section style="background:#f3f3f3;">
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
                <input type="text" name="idTiendaEditSec2" value="<?php echo $id; ?>" style="display:none;" />
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
                        <option value="">Seleccione la ciudad de la colonia</option>
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
                        <input type="text" value="<?php echo $correo; ?>" name="correoEditar" style="width:250px;"/> 
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
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram" selected>Instagram</option> 
                                    <option value="Twitter" >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[1]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[0] == "Twitter")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter" selected >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[1]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[0] == "Linkedin")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" selected>Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[1]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[0] == "Snapchat")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" selected>Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[1]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[0] == "TikTok")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" selected>TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[1]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[0] == "none" || $redes[0] == "")
                            { ?> 
                                <select name="redSocial1" id="redSocial1" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" placeholder="Escriba el nombre de su cuenta" name="redSocialCuenta1" />
                            <?php } ?>

                            <?php
                            if($redes[2] == "Instagram")
                            { ?> 
                                <select name="redSocial2" id="redSocial2" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram" selected>Instagram</option> 
                                    <option value="Twitter" >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[3]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta2" />
                            <?php } ?>

                            <?php
                            if($redes[2] == "Twitter")
                            { ?> 
                                <select name="redSocial2" id="redSocial2" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter" selected >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[3]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta2" />
                            <?php } ?>

                            <?php
                            if($redes[2] == "Linkedin")
                            { ?> 
                                <select name="redSocial2" id="redSocial2" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" selected>Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[3]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta2" />
                            <?php } ?>

                            <?php
                            if($redes[2] == "Snapchat")
                            { ?> 
                                <select name="redSocial2" id="redSocial2" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" selected>Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[3]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta2" />
                            <?php } ?>

                            <?php
                            if($redes[2] == "TikTok")
                            { ?> 
                                <select name="redSocial2" id="redSocial2" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" selected>TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[3]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta2" />
                            <?php } ?>

                            <?php
                            if($redes[2] == "none" || $redes[2] == "")
                            { ?> 
                                <select name="redSocial2" id="redSocial2" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" placeholder="Escriba el nombre de su cuenta" name="redSocialCuenta2" />
                            <?php } ?>
                            
                            <?php
                            if($redes[4] == "Instagram")
                            { ?> 
                                <select name="redSocial3" id="redSocial3" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram" selected>Instagram</option> 
                                    <option value="Twitter" >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[5]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta3" />
                            <?php } ?>

                            <?php
                            if($redes[4] == "Twitter")
                            { ?> 
                                <select name="redSocial3" id="redSocial3" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter" selected >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[5]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta3" />
                            <?php } ?>

                            <?php
                            if($redes[4] == "Linkedin")
                            { ?> 
                                <select name="redSocial3" id="redSocial3" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" selected>Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[5]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta3" />
                            <?php } ?>

                            <?php
                            if($redes[4] == "Snapchat")
                            { ?> 
                                <select name="redSocial3" id="redSocial3" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" selected>Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[5]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta3" />
                            <?php } ?>

                            <?php
                            if($redes[4] == "TikTok")
                            { ?> 
                                <select name="redSocial3" id="redSocial3" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" selected>TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[5]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta3" />
                            <?php } ?>

                            <?php
                            if($redes[4] == "none" || $redes[4] == "")
                            { ?> 
                                <select name="redSocial3" id="redSocial3" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" placeholder="Escriba el nombre de su cuenta" name="redSocialCuenta3" />
                            <?php } ?>
                            
                            <?php
                            if($redes[6] == "Instagram")
                            { ?> 
                                <select name="redSocial4" id="redSocial4" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram" selected>Instagram</option> 
                                    <option value="Twitter" >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[7]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta4" />
                            <?php } ?>

                            <?php
                            if($redes[6] == "Twitter")
                            { ?> 
                                <select name="redSocial4" id="redSocial4" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter" selected >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[7]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta4" />
                            <?php } ?>

                            <?php
                            if($redes[6] == "Linkedin")
                            { ?> 
                                <select name="redSocial4" id="redSocial4" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" selected>Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[7]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta4" />
                            <?php } ?>

                            <?php
                            if($redes[6] == "Snapchat")
                            { ?> 
                                <select name="redSocial4" id="redSocial4" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" selected>Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[7]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta4" />
                            <?php } ?>

                            <?php
                            if($redes[6] == "TikTok")
                            { ?> 
                                <select name="redSocial4" id="redSocial4" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" selected>TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[7]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta4" />
                            <?php } ?>

                            <?php
                            if($redes[6] == "none" || $redes[6] == "")
                            { ?> 
                                <select name="redSocial4" id="redSocial4" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" placeholder="Escriba nombre de cuenta" name="redSocialCuenta4" />
                            <?php } ?>

                            <?php
                            if($redes[8] == "Instagram")
                            { ?> 
                                <select name="redSocial5" id="redSocial5" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram" selected>Instagram</option> 
                                    <option value="Twitter" >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[9]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta5" />
                            <?php } ?>

                            <?php
                            if($redes[8] == "Twitter")
                            { ?> 
                                <select name="redSocial5" id="redSocial5" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter" selected >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[9]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta5" />
                            <?php } ?>

                            <?php
                            if($redes[8] == "Linkedin")
                            { ?> 
                                <select name="redSocial5" id="redSocial5" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" selected>Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[9]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta5" />
                            <?php } ?>

                            <?php
                            if($redes[8] == "Snapchat")
                            { ?> 
                                <select name="redSocial5" id="redSocial5" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" selected>Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[9]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta5" />
                            <?php } ?>

                            <?php
                            if($redes[8] == "TikTok")
                            { ?> 
                                <select name="redSocial5" id="redSocial5" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" selected>TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[9]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta5" />
                            <?php } ?>

                            <?php
                            if($redes[8] == "none" || $redes[8] == "")
                            { ?> 
                                <select name="redSocial5" id="redSocial5" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" placeholder="Escriba nombre de cuenta" name="redSocialCuenta5" />
                            <?php } ?>

                            <?php
                            if($redes[10] == "Instagram")
                            { ?> 
                                <select name="redSocial6" id="redSocial6" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram" selected>Instagram</option> 
                                    <option value="Twitter" >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[11]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta6" />
                            <?php } ?>

                            <?php
                            if($redes[10] == "Twitter")
                            { ?> 
                                <select name="redSocial6" id="redSocial6" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter" selected >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[11]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta6" />
                            <?php } ?>

                            <?php
                            if($redes[10] == "Linkedin")
                            { ?> 
                                <select name="redSocial6" id="redSocial6" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" selected>Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[11]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta6" />
                            <?php } ?>

                            <?php
                            if($redes[10] == "Snapchat")
                            { ?> 
                                <select name="redSocial6" id="redSocial6" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" selected>Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[11]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta6" />
                            <?php } ?>

                            <?php
                            if($redes[10] == "TikTok")
                            { ?> 
                                <select name="redSocial6" id="redSocial6" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" selected>TikTok</option> 
                                </select>
                                <input type="text" value="<?php echo $redes[11]; ?>" placeholder="Escriba el nombre de cuenta" name="redSocialCuenta6" />
                            <?php } ?>

                            <?php
                            if($redes[10] == "none" || $redes[10] == "")
                            { ?> 
                                <select name="redSocial6" id="redSocial6" style="width:150px;">
                                    <option value="">Seleccione Red Social</option>
                                    <option value="Instagram">Instagram</option> 
                                    <option value="Twitter"  >Twitter</option> 
                                    <option value="Linkedin" >Linkedin</option> 
                                    <option value="Snapchat" >Snapchat</option> 
                                    <option value="TikTok" >TikTok</option> 
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
                
                <?php $piece = explode(",", $tiposEntrega); 
                if($piece[0] == "") {  ?> <div style="width:3%;"><input type="checkbox" name="recogerloEditar" value="Recogerlo en el establecimiento"  style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" name="recogerloEditar" value="Recogerlo en el establecimiento" checked></div> <?php }?>

                <div style="width:20%;">Recogerlo directamente</div>
                
               <?php if($piece[1] == "") {  ?> <div style="width:3%;"><input type="checkbox" name="rappiEditar" value="Rappi"  style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" name="rappiEditar" value="Rappi"   checked></div> <?php }?>

                <div style="width:10%;">RAPPI</div>

                <?php if($piece[2] == "") {  ?> <div style="width:3%;"><input type="checkbox" name="UberEditar" value="ubber"   style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" name="UberEditar" value="ubber"  checked ></div> <?php }?>
                
                <div style="width:10%;">Uber eats</div>

                <?php if($piece[3] == "") {  ?> <div style="width:3%;"><input type="checkbox" name="envioDirectoEditar" value="Envio directo del establecimiento" style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" name="envioDirectoEditar" value="Envio directo del establecimiento" checked></div> <?php }?>

                <div style="width:25%;">Envío directo del establecimiento</div>
                
                <?php if($piece[4] == "") {  ?> <div style="width:3%;"><input type="checkbox" name="mensajeriaEditar" value="Mensajeria" style="margin-left:20%;"></div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" name="mensajeriaEditar" value="Mensajeria" checked></div> <?php }?>

                <div style="width:20%;">Mensajería</div>

                <div class="col-lg-12">
                    <div style="font-weight:bold; text-align:left; margin-top:3%;">Costo de envío:</div>
                </div>

                <input type="text" name="costoEnvio" placeholder="Costo del envio" value="<?php echo $costoEnvio; ?>">
              
                <input type="text" value="<?php echo $descripcionEnvio; ?>" placeholder="Detalle del envio" name="detalleEnvioEditar"  style="margin-left:2%;"/>
                

            </div>
            <div class="col-lg-12"><input type="submit" value="Editar" style="background:#ffa300; margin-left:40%; color:white; border:1px solid; border-color:#ffa300;"/></div>
           
            </div>
        </form>
        </div>
    </section>

<?php }

static function queTenemos($nombreTienda, $categoria, $etiquetas)
{ ?>
         <section>
            <div class="container">
                <div style="text-align:center;">
                    <h2>En <?php echo $nombreTienda; ?> encontrarás...</h2>
               </div>
               <div class="row" style="margin-top:5%;">

               <div class="col-lg-4">
                    <div class="icon-box effect medium border center">
                        <div class="icon">
                            <i class="fa fa-plug"></i>
                        </div>
                        <h3><?php echo $categoria; ?></h3>
                    </div>
                </div>
              <?php $pieces = explode(",", $etiquetas); 

              for($i = 0; $i < sizeof($pieces); $i++)
              { 
                  if($pieces[$i] != " ")
                  {
                    ?>
                    <div class="col-lg-4">
                        <div class="icon-box effect medium border center">
                            <div class="icon">
                                <i class="fa fa-plug"></i>
                            </div>
                            <h3><?php echo $pieces[$i]; ?></h3>
                        </div>
                    </div> <?php
                  }
               } ?>
              </div>
            </div>
        </section>
<?php }

static function queTenemosEdit($nombreTienda, $categoria, $etiquetas, $conection, $id)
{ ?>
         <section>
        
            <div class="container">
            <form method="POST">
                <input type="text" value="<?php echo $id; ?>" name="idTiendaEditCat" style="display:none;" />
                <div style="text-align:center;">
                    <h2>En <?php echo $nombreTienda; ?> encontrarás...</h2>
               </div>
               <div class="row" style="margin-top:5%;">

                <div class="col-lg-4">
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
                                            <option value="<?php echo $row["subcat"]; ?>" selected><?php echo $row["subcat"]; ?></option> 
                                        <?php
                                    }
                                    else
                                    {
                                        ?> 
                                            <option value="<?php echo $row["subcat"]; ?>"><?php echo $row["subcat"]; ?></option> 
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
                                            <option value="<?php echo $row["subcat"]; ?>" selected><?php echo $row["subcat"]; ?></option> 
                                        <?php
                                    }
                                    else
                                    {
                                        ?> 
                                            <option value="<?php echo $row["subcat"]; ?>"><?php echo $row["subcat"]; ?></option> 
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
                                            <option value="<?php echo $row["subcat"]; ?>" selected><?php echo $row["subcat"]; ?></option> 
                                        <?php
                                    }
                                    else
                                    {
                                        ?> 
                                            <option value="<?php echo $row["subcat"]; ?>"><?php echo $row["subcat"]; ?></option> 
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
                                            <option value="<?php echo $row["subcat"]; ?>" selected><?php echo $row["subcat"]; ?></option> 
                                        <?php
                                    }
                                    else
                                    {
                                        ?> 
                                            <option value="<?php echo $row["subcat"]; ?>"><?php echo $row["subcat"]; ?></option> 
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
                                            <option value="<?php echo $row["subcat"]; ?>" selected><?php echo $row["subcat"]; ?></option> 
                                        <?php
                                    }
                                    else
                                    {
                                        ?> 
                                            <option value="<?php echo $row["subcat"]; ?>"><?php echo $row["subcat"]; ?></option> 
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
<?php }

static function galeria($image1, $image2, $image3, $image4, $image5)
{ ?>
<section id="page-content" style="background:white;">
            <div class="container">
                <!-- Gallery -->
                <div style="text-align:center;" >
                    <h2> Te presentamos nuestra galería</h2>
                </div>

                    <div class="grid-3-columns" data-margin="10" data-item="grid-item" >
                        <?php if($image1 != "") { ?>
                        <div class="grid-item" style="margin-top:4%; margin-right:10%;">
                            <img src="../images/imagenMerkados/<?php echo $image1; ?>">
                        </div>
                        <?php   } ?>

                        <?php if($image2 != "") { ?>
                        <div class="grid-item" style="margin-top:4%; margin-right:10%;">
                            <img src="../images/imagenMerkados/<?php echo $image2; ?>">
                        </div>
                        <?php   } ?>
                        
                        <?php if($image3 != "") { ?>
                            <div class="grid-item" style="margin-top:4%; margin-right:10%;">
                            <img src="../images/imagenMerkados/<?php echo $image3; ?>">
                        </div>
                        <?php   } ?>

                        <?php if($image4 != "") { ?>
                            <div class="grid-item" style="margin-top:4%; margin-right:10%;">
                            <img src="../images/imagenMerkados/<?php echo $image4; ?>">
                        </div>
                        <?php   } ?>

                        <?php if($image5 != "") { ?>
                            <div class="grid-item" style="margin-top:4%; margin-right:10%;">
                            <img src="../images/imagenMerkados/<?php echo $image5; ?>">
                        </div>
                        <?php   } ?>

                    </div>

                
                
                <!-- end: Gallery -->
            </div>
        </section> <!-- end: Content -->
<?php }

static function galeriaEdit($image1, $image2, $image3, $image4, $image5, $id)
{ ?>
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
                                    <img src="../images/imagenMerkados/<?php echo $image1; ?>">
                                    <input type="file" name="galeriaEdit1"/>
                                    <input type="text" value="<?php echo $image1; ?>" name="galeriaEdit1" style="display:none;"/>  
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
                                    <img src="../images/imagenMerkados/<?php echo $image2; ?>">
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
                                    <img src="../images/imagenMerkados/<?php echo $image3; ?>">
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
                                    <img src="../images/imagenMerkados/<?php echo $image4; ?>">
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
                                    <img src="../images/imagenMerkados/<?php echo $image5; ?>">
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
<?php }

static function mostrarFachada($fachada)
{ ?>
<section id="page-content" style="background:#f3f3f3;">
            <div class="container">
                <!-- Gallery -->
                <div style="text-align:center;" >
                    <h2> Fachada del Negocio</h2>
                </div>

                    <div class="grid-9-columns" data-margin="10" data-item="grid-item" >
                        <?php if($fachada != "") { ?>
                        <div class="grid-item" style="margin-top:4%; margin-right:10%;">
                            <img src="../images/fachadas/<?php echo $fachada; ?>">
                        </div>
                        <?php   } ?>

                    </div>

                
                
                <!-- end: Gallery -->
            </div>
        </section> <!-- end: Content -->
<?php }

static function mostrarFachadaEdit($fachada, $id)
{ ?>
<section id="page-content" style="background:#f3f3f3;">
            <div class="container">
                <!-- Gallery -->
                <div style="text-align:center;" >
                    <h2> Fachada del Negocio</h2>
                </div>
                    <div class="grid-9-columns" data-margin="10" data-item="grid-item" >
                        <?php if($fachada != "") { ?>
                        <div class="grid-item" style="margin-top:4%; margin-right:10%;">
                            <img src="../images/fachadas/<?php echo $fachada; ?>">
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
<?php }


static function moduloPrecio($conection, $user, $result)
{ 
    ?>
    <section>
        <div class="container">
            <div class="row">
            <h4>Planes de MrKados</h4>
            <?php 
                    if($result == "added")
                    {
                        ?> <div style="background: green; width:100%; text-align:center; color:white; border-radius:5px; "><h3 style="color:white;">El Plan se agrego correctamente</h3></div> <?php 
                    }
                    else if($result == "edited")
                    {
                        ?> <div style="background: green; width:100%;  text-align:center; color:white; border-radius:5px;"><h3 style="color:white;">El Plan se actualizo correctamente</h3></div> <?php
                    }
                    else if($result == "deleted")
                    {
                        ?> <div style="background: green; width:100%;  text-align:center; color:white; border-radius:5px;"><h3 style="color:white;">El Plan se elimino correctamente</h3></div> <?php
                    }
            ?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Nombre del Plan</th>
                                    <th scope="col">Precio Mensual</th>
                                    <th scope="col">Precio Anual</th>
                                    <th scope="col"><a class="btn" data-target="#modal-1" data-toggle="modal"  style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;">Agregar Plan</a></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $query_sus = "SELECT * FROM tipos_subscription ORDER BY id ASC";
                                $result_sus = mysqli_query($conection,$query_sus);
                                while ($row = mysqli_fetch_assoc($result_sus)) 
                                { 
                                    $idT = $row['id']; ?>
                                <tr>
                                    <th scope="row"><?php echo $row["id"]; ?></th>
                                    <th scope="row"><?php echo $row["name"]; ?></th>
                                    <th scope="row">$<?php echo $row["precio"]; ?> MXN</th>
                                    <th scope="row">$<?php echo $row["precio_anual"]; ?> MXN</th>
                                    <th>
                                        <!-- data to parse <a href="moduloDetalle.php?planId=&correo=&key=Precios&action=delete"> -->
                                        <input id="deletePlanAdminAAA" data-id="<?php echo $row['id'].",".$row['name']; ?>" data-target="#modal-deletePlanAdmin" data-toggle="modal" class="btn btn-b" value="Eliminar" style="background:#ffa300; width:90%; border:1px solid; border-color:#ffa300;" type="button" />
                                        <input id="editarPlanAdminAAA" data-id="<?php echo $row['id'].",".$row['name'].",".$row['precio'].",".$row['precio_anual']; ?>" data-target="#modal-editarPlanAdmin" data-toggle="modal" class="btn btn-b" value="Editar" style="background:#ffa300; width:90%; border:1px solid; border-color:#ffa300;" type="button" />
                                    </th>    
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            $(document).on("click", "#deletePlanAdminAAA", function () {
                var passedIDDelete = $(this).data('id');//get the id of the selected button
                var planNameDelete = passedIDDelete.split(",");
                $('#eliminarPlanData').val(planNameDelete[0]);//set the id to the input on the modal
                $('#modal-label-3-DeletePlanAdmin').val(planNameDelete[1]);//set the id to the input on the modal
            });

            $(document).on("click", "#editarPlanAdminAAA", function () {
                var passedIDDelete = $(this).data('id');//get the id of the selected button
                var planNameDelete = passedIDDelete.split(",");
                $('#editarPlanData').val(planNameDelete[0]);//set the id to the input on the modal
                $('#modal-label-3-editarPlanAdminName').val(planNameDelete[1]);//set the id to the input on the modal
                $('#modal-label-3-editarPlanAdminPrecio').val(planNameDelete[2]);//set the id to the input on the modal
                $('#modal-label-3-editarPlanAdminPrecioAnual').val(planNameDelete[3]);//set the id to the input on the modal
            });
        </script>
    </section>

     <!--Modal large Agregar sus -->
        <div class="modal fade" id="modal-1" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">Agregar un nuevo Plan</h4>
                    </div>
                    <form method="post">
                      <div class="modal-body">
                            <div class="row mb20">
                                <div class="col-md-6">
                                    <lable>Nombre del Plan</label>
                                    <input name="nombrePlan" id="nombrePlanShow" type="text" placeholder="Escriba el nombre del plan" required />
                                </div>
                                <div class="col-md-6">
                                    <lable>Precio Mensual del Plan</label>
                                    <input name="precioMensualPlan" type="text" placeholder="Escriba el precio mensual del plan" required/>
                                </div>
                                <div class="col-md-6">
                                    <lable>Precio Anual del Plan</label>
                                    <input name="precioAnualPlan" type="text" placeholder="Escriba el precio anual del plan" required/>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button>
                                <button class="btn btn-b" type="submit" style="background:#ffa300; border:1px solid; border-color:#ffa300;">Agregar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end: Modal large edoitar Categoria -->

    
    <!--Modal eliminar plan -->
    <div class="modal fade" tabindex="-1" id="modal-deletePlanAdmin">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">Desea Eliminar el siguiente Plan</h4>
                    </div>
                    <form method="post">
                        <div class="modal-body">
                            <div class="row mb20">
                                <div class="col-md-6">
                                    <input name="idEliminarPlan" type="text" style="display:none;" id="eliminarPlanData" value="" required />
                                    <input name="deletePlan" type="text"  id="modal-label-3-DeletePlanAdmin" value="" disabled />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button>
                                <button class="btn btn-b" type="submit" style="background:#ffa300; border:1px solid; border-color:#ffa300;">Si, Eliminar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    <!-- end: Modal large edoitar Categoria -->

    <!--Modal eliminar plan -->
    <div class="modal fade" tabindex="-1" id="modal-editarPlanAdmin">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">Editar Plan</h4>
                    </div>
                    <form method="post">
                        <div class="modal-body">
                            <div class="row mb20">
                                <div class="col-md-6">
                                    <input name="idEditarPlan" type="text" style="display:none;" id="editarPlanData" value="" required />
                                    <label>Nombre del Plan</label>
                                    <input name="editarPlanName" type="text"  id="modal-label-3-editarPlanAdminName" value=""  />
                                </div>
                                <div class="col-md-6">
                                    <label>Precio Mensual del Plan</label>
                                    <input name="editarPlanPrecio" type="text"  id="modal-label-3-editarPlanAdminPrecio" value=""  />
                                </div>
                                <div class="col-md-6">
                                    <label>Precio Anual del Plan</label>
                                    <input name="editarPlanPrecioAnual" type="text"  id="modal-label-3-editarPlanAdminPrecioAnual" value=""  />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button>
                                <button class="btn btn-b" type="submit" style="background:#ffa300; border:1px solid; border-color:#ffa300;">Editar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    <!-- end: Modal large edoitar Categoria -->

    <!--Plugins-->
    <script src="../js/jquery.js"></script>
    <script src="../js/plugins.js"></script>
    <!--Template functions-->
    <script src="../js/functions.js"></script>
<?php }

static function moduloSuscripciones($conection, $user, $result, $sus, $filter, $order)
{  
    $usuId = "";
            $idTienda="";
            $plan="";
            $precio="";
            $desde="";
            $hasta="";
            $status="";
            $susId="";
    ?>
    
    <!--Modal large Editar categoria -->
    <?php if($sus == "") { ?>
        <div class="modal fade" id="modal-3" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
        <?php } else { 

            $query_sus = "SELECT * FROM suscripciones_rel WHERE id = '$sus'";
            $result_sus = mysqli_query($conection,$query_sus);
            while ($row = mysqli_fetch_assoc($result_sus)) 
            {
                $susId = $row['id'];
                $idTienda = $row['id_tienda'];
                $plan =  $row['plan'];
                $precio = $row['precio'];
                $desde = $row['desde'];
                $hasta = $row['hasta'];
                $status = $row['active'];
            }
                ?>
            
             <div tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="false">
            <?php } ?>
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <?php
                        $query_tienda = "SELECT * FROM tiendas where id = $idTienda";
                                    $result_tienda = mysqli_query($conection,$query_tienda);
                                    while ($row = mysqli_fetch_assoc($result_tienda)) 
                                    { ?>
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">Editar una Suscripcion de <?php echo $row['nombreTienda']; ?></h4>
                            <?php } ?>
                    </div>
                    <form method="post">
                      <div class="modal-body">
                        <div class="row mb20">
                            <div class="col-md-6">
                                <input type="text" value="<?php echo $susId; ?>" name="susIdEdit" style="display:none;" >
                                <input type="text" value="<?php echo $idTienda; ?>" name="susTiIdEdit" style="display:none;" >
                                <lable>Seleccione el Plan</label>
                                <select name="planSusEdit" id="planSusEdit">
                                    <option value="">Seleccione el plan</option>
                                    <?php 
                                    $query_plan = "SELECT * FROM tipos_subscription order by id ASC";
                                    $result_plan = mysqli_query($conection,$query_plan);
                                    while ($row = mysqli_fetch_assoc($result_plan)) 
                                    { 

                                        if($plan == $row['name'])
                                        {
                                            
                                            ?> <option selected="true" value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option> <?php
                                        }
                                        else
                                        {
                                            ?> <option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option> <?php
                                        }
                                    }?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <lable>Precio del plan</label>
                                <input type="text" name="precioSusEdit" value="<?php echo $precio; ?>" placeholder="Escriba el valor del plan" />
                            </div>

                            <div class="col-md-6">
                                <lable>Fecha Inicial del Plan</label>
                                <?php $desdeArray = explode("/", $desde);
                                $desdeValue = '20'.$desdeArray[0]."-".$desdeArray[1]."-".$desdeArray[2]; ?>
                                <input type="date" name="desdeSusEdit" value="<?php echo $desdeValue; ?>"  />
                            </div>

                            <div class="col-md-6">
                                <lable>Fecha Final del Plan</label>
                                <?php $hastaArray = explode("/", $hasta);
                                $hastaValue = '20'.$hastaArray[0]."-".$hastaArray[1]."-".$hastaArray[2]; ?>
                                <input type="date" name="hastaSusEdit" value="<?php echo $hastaValue; ?>"  />
                            </div>

                            <div class="col-md-6">
                                <lable>Status del plan</label>
                            </div>
                            <div class="col-md-6">
                                
                            </div>
                            <div class="col-md-6">
                                
                            
                                <?php 

                                if($status == 3)
                                {

                                }
                                else{
                                    if($status == 1)
                                    {
                                        ?> 
                                            <lable>Activo</label>
                                            <input type="radio" name="statusSusEdit" value="1" checked />
                                            <lable>Desactivado</label>
                                            <input type="radio" name="statusSusEdit" value="0" />
                                            <label>Pendiente</label>
                                            <input type="radio" name="statusSusEdit" value="2" />
                                         <?php
                                    }
                                    else if($status == 2)
                                    {
                                        ?> 
                                            <lable>Activo</label>
                                            <input type="radio" name="statusSusEdit" value="1" />
                                            <lable>Desactivado</label>
                                            <input type="radio" name="statusSusEdit" value="0" />
                                            <label>Pendiente</label>
                                            <input type="radio" name="statusSusEdit" value="2" checked />
                                         <?php
                                    }
                                    else
                                    {
                                        ?> 
                                        <lable>Activo</label>
                                        <input type="radio" name="statusSusEdit" value="1" />
                                        <lable>Desactivado</label>
                                        <input type="radio" name="statusSusEdit" value="0" checked/>
                                        <label>Pendiente</label>
                                        <input type="radio" name="statusSusEdit" value="2" />
                                     <?php
                                    }   
                                }
                                    
                                 ?>
                                
                                
                            </div>
                        </div>
                       
                        </div>
                        <div class="modal-footer">
                            <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=colonias"> <button class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button></a>
                            <button class="btn btn-b" type="submit" style="background:#ffa300; border:1px solid; border-color:#ffa300;">Editar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end: Modal large editar categoria -->

    <section>
        <div class="container">
            <div class="row">
            <h4>Suscripciones de MrKados</h4>
            <?php 
                    if($result == "added")
                    {
                        ?> <div style="background: green; width:100%; text-align:center; color:white; border-radius:5px; "><h3 style="color:white;">La Suscripcion se agrego correctamente</h3></div> <?php 
                    }
                    else if($result == "edited")
                    {
                        ?> <div style="background: green; width:100%;  text-align:center; color:white; border-radius:5px;"><h3 style="color:white;">La Suscripcion se actualizo correctamente</h3></div> <?php
                    }
                    else if($result == "deleted")
                    {
                        ?> <div style="background: green; width:100%;  text-align:center; color:white; border-radius:5px;"><h3 style="color:white;">La Suscripcion se elimino correctamente</h3></div> <?php
                    }
            ?>
                        <table class="table table-striped">
                            <thead>
                                <tr> <?php 
                                    if($order == "")
                                    { ?>
                                        <th scope="col"><a href="moduloDetalle.php?correo=<?php echo $user ?>&key=Suscripciones&filter=id&order=ASC" style="color:black;">id</a></th>
                                    <?php }
                                    else if($order == "ASC"){ ?>
                                        <th scope="col"><a href="moduloDetalle.php?correo=<?php echo $user ?>&key=Suscripciones&filter=id&order=DESC" style="color:black;">id</a></th>
                                    <?php } 
                                    else if($order == "DESC"){ ?>
                                        <th scope="col"><a href="moduloDetalle.php?correo=<?php echo $user ?>&key=Suscripciones&filter=id&order=ASC" style="color:black;">id</a></th>
                                    <?php } ?>
                                    <th scope="col">Tienda</th>
                                    <th scope="col">Usuario</th>
                                    <?php 
                                    if($order == "")
                                    { ?>
                                        <th scope="col"><a href="moduloDetalle.php?correo=<?php echo $user ?>&key=Suscripciones&filter=plan&order=ASC" style="color:black;">Plan</a></th>
                                    <?php }
                                    else if($order == "ASC"){ ?>
                                        <th scope="col"><a href="moduloDetalle.php?correo=<?php echo $user ?>&key=Suscripciones&filter=plan&order=DESC" style="color:black;">Plan</a></th>
                                    <?php } 
                                    else if($order == "DESC"){ ?>
                                        <th scope="col"><a href="moduloDetalle.php?correo=<?php echo $user ?>&key=Suscripciones&filter=plan&order=ASC" style="color:black;">Plan</a></th>
                                    <?php } ?>
                                    <?php 
                                    if($order == "")
                                    { ?>
                                        <th scope="col"><a href="moduloDetalle.php?correo=<?php echo $user ?>&key=Suscripciones&filter=Precio&order=ASC" style="color:black;">Precio</a></th>
                                    <?php }
                                    else if($order == "ASC"){ ?>
                                        <th scope="col"><a href="moduloDetalle.php?correo=<?php echo $user ?>&key=Suscripciones&filter=Precio&order=DESC" style="color:black;">Precio</a></th>
                                    <?php } 
                                    else if($order == "DESC"){ ?>
                                        <th scope="col"><a href="moduloDetalle.php?correo=<?php echo $user ?>&key=Suscripciones&filter=Precio&order=ASC" style="color:black;">Precio</a></th>
                                    <?php } ?>
                                    <?php 
                                    if($order == "")
                                    { ?>
                                        <th scope="col"><a href="moduloDetalle.php?correo=<?php echo $user ?>&key=Suscripciones&filter=desde&order=ASC" style="color:black;">Fecha Inicio</a></th>
                                    <?php }
                                    else if($order == "ASC"){ ?>
                                        <th scope="col"><a href="moduloDetalle.php?correo=<?php echo $user ?>&key=Suscripciones&filter=desde&order=DESC" style="color:black;">Fecha Inicio</a></th>
                                    <?php } 
                                    else if($order == "DESC"){ ?>
                                        <th scope="col"><a href="moduloDetalle.php?correo=<?php echo $user ?>&key=Suscripciones&filter=desde&order=ASC" style="color:black;">Fecha Inicio</a></th>
                                    <?php } ?>
                                    <?php 
                                    if($order == "")
                                    { ?>
                                        <th scope="col"><a href="moduloDetalle.php?correo=<?php echo $user ?>&key=Suscripciones&filter=hasta&order=ASC" style="color:black;">Fecha Expiracion</a></th>
                                    <?php }
                                    else if($order == "ASC"){ ?>
                                        <th scope="col"><a href="moduloDetalle.php?correo=<?php echo $user ?>&key=Suscripciones&filter=hasta&order=DESC" style="color:black;"> Fecha Expiracion</a></th>
                                    <?php } 
                                    else if($order == "DESC"){ ?>
                                        <th scope="col"><a href="moduloDetalle.php?correo=<?php echo $user ?>&key=Suscripciones&filter=hasta&order=ASC" style="color:black;">Fecha Expiracion</a></th>
                                    <?php } ?>
                                    <th scope="col">Status</th>
                                    <th scope="col"><a class="btn" data-target="#modal-1" data-toggle="modal"  style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;">Agregar Suscripcion</a></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                if($filter == 'id')
                                {
                                    if($order == "")
                                    {
                                        $query_sus = "SELECT * FROM suscripciones_rel ORDER BY id ASC";
                                        $result_sus = mysqli_query($conection,$query_sus);
                                        while ($row = mysqli_fetch_assoc($result_sus)) 
                                        {
                                            include 'content.php';
                                        } 
                                    }
                                    else if($order == "ASC")
                                    {
                                        $query_sus = "SELECT * FROM suscripciones_rel ORDER BY id ASC";
                                        $result_sus = mysqli_query($conection,$query_sus);
                                        while ($row = mysqli_fetch_assoc($result_sus)) 
                                        {
                                            include 'content.php';
                                        } 
                                    }
                                    else if($order == "DESC")
                                    {
                                        $query_sus = "SELECT * FROM suscripciones_rel ORDER BY id DESC";
                                        $result_sus = mysqli_query($conection,$query_sus);
                                        while ($row = mysqli_fetch_assoc($result_sus)) 
                                        {
                                            include 'content.php';
                                        } 
                                    }
                                }
                                else if($filter == 'plan')
                                {
                                    if($order == "")
                                    {
                                        $query_sus = "SELECT * FROM suscripciones_rel ORDER BY plan ASC";
                                        $result_sus = mysqli_query($conection,$query_sus);
                                        while ($row = mysqli_fetch_assoc($result_sus)) 
                                        {
                                            include 'content.php';
                                        } 
                                    }
                                    else if($order == "ASC")
                                    {
                                        $query_sus = "SELECT * FROM suscripciones_rel ORDER BY plan ASC";
                                        $result_sus = mysqli_query($conection,$query_sus);
                                        while ($row = mysqli_fetch_assoc($result_sus)) 
                                        {
                                            include 'content.php';
                                        } 
                                    }
                                    else if($order == "DESC")
                                    {
                                        $query_sus = "SELECT * FROM suscripciones_rel ORDER BY plan DESC";
                                        $result_sus = mysqli_query($conection,$query_sus);
                                        while ($row = mysqli_fetch_assoc($result_sus)) 
                                        {
                                            include 'content.php';
                                        } 
                                    }
                                }
                                else if($filter == 'Precio')
                                {
                                    if($order == "")
                                    {
                                        $query_sus = "SELECT * FROM suscripciones_rel ORDER BY Precio ASC";
                                        $result_sus = mysqli_query($conection,$query_sus);
                                        while ($row = mysqli_fetch_assoc($result_sus)) 
                                        {
                                            include 'content.php';
                                        } 
                                    }
                                    else if($order == "ASC")
                                    {
                                        $query_sus = "SELECT * FROM suscripciones_rel ORDER BY Precio ASC";
                                        $result_sus = mysqli_query($conection,$query_sus);
                                        while ($row = mysqli_fetch_assoc($result_sus)) 
                                        {
                                            include 'content.php';
                                        } 
                                    }
                                    else if($order == "DESC")
                                    {
                                        $query_sus = "SELECT * FROM suscripciones_rel ORDER BY Precio DESC";
                                        $result_sus = mysqli_query($conection,$query_sus);
                                        while ($row = mysqli_fetch_assoc($result_sus)) 
                                        {
                                            include 'content.php';
                                        } 
                                    }
                                }
                                else if($filter == 'desde')
                                {
                                    if($order == "")
                                    {
                                        $query_sus = "SELECT * FROM suscripciones_rel ORDER BY desde ASC";
                                        $result_sus = mysqli_query($conection,$query_sus);
                                        while ($row = mysqli_fetch_assoc($result_sus)) 
                                        {
                                            include 'content.php';
                                        } 
                                    }
                                    else if($order == "ASC")
                                    {
                                        $query_sus = "SELECT * FROM suscripciones_rel ORDER BY desde ASC";
                                        $result_sus = mysqli_query($conection,$query_sus);
                                        while ($row = mysqli_fetch_assoc($result_sus)) 
                                        {
                                            include 'content.php';
                                        } 
                                    }
                                    else if($order == "DESC")
                                    {
                                        $query_sus = "SELECT * FROM suscripciones_rel ORDER BY desde DESC";
                                        $result_sus = mysqli_query($conection,$query_sus);
                                        while ($row = mysqli_fetch_assoc($result_sus)) 
                                        {
                                            include 'content.php';
                                        } 
                                    }
                                }
                                else if($filter == 'hasta')
                                {
                                    if($order == "")
                                    {
                                        $query_sus = "SELECT * FROM suscripciones_rel ORDER BY hasta ASC";
                                        $result_sus = mysqli_query($conection,$query_sus);
                                        while ($row = mysqli_fetch_assoc($result_sus)) 
                                        {
                                            include 'content.php';
                                        } 
                                    }
                                    else if($order == "ASC")
                                    {
                                        $query_sus = "SELECT * FROM suscripciones_rel ORDER BY hasta ASC";
                                        $result_sus = mysqli_query($conection,$query_sus);
                                        while ($row = mysqli_fetch_assoc($result_sus)) 
                                        {
                                            include 'content.php';
                                        } 
                                    }
                                    else if($order == "DESC")
                                    {
                                        $query_sus = "SELECT * FROM suscripciones_rel ORDER BY hasta DESC";
                                        $result_sus = mysqli_query($conection,$query_sus);
                                        while ($row = mysqli_fetch_assoc($result_sus)) 
                                        {
                                            include 'content.php';
                                        } 
                                    }
                                }
                                else
                                {
                                    $query_sus = "SELECT * FROM suscripciones_rel ORDER BY desde DESC";
                                    $result_sus = mysqli_query($conection,$query_sus);
                                    while ($row = mysqli_fetch_assoc($result_sus)) 
                                    {
                                        include 'content.php';
                                    } 
                                }
                                 ?>
                            </tbody>
                        </table>
            </div>
        </div>
    </section>

     <!--Modal large Agregar sus -->
     <div class="modal fade" id="modal-1" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">Agregar una nueva Suscripcion</h4>
                    </div>
                    <form method="post">
                      <div class="modal-body">
                        <div class="row mb20">
                        <div class="col-md-6">
                                <lable>Seleccione la Tienda</label>
                                <select name="tiendaAddSus" id="tiendaAddSus" required>
                                    <option value="">Seleccione la tienda</option>
                                    <?php 
                                    $query_tienda = "SELECT * FROM tiendas where subscription = 'Mrkadito'";
                                    $result_tienda = mysqli_query($conection,$query_tienda);
                                    while ($row = mysqli_fetch_assoc($result_tienda)) 
                                    { 
                                        ?> <option value="<?php echo $row["id"]; ?>"><?php echo $row["nombreTienda"]; ?></option> <?php
                                        
                                    }?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <lable>Seleccione el plan</label>
                                <select name="planAddUsu" id="planAddUsu" required>
                                    <option value="">Seleccione el plan</option>
                                    <?php 
                                    $query_plan = "SELECT * FROM tipos_subscription";
                                    $result_plan = mysqli_query($conection,$query_plan);
                                    while ($row = mysqli_fetch_assoc($result_plan)) 
                                    { 
                                        ?> <option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option> <?php
                                        
                                    }?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <lable>Precio del plan</label>
                                <input name="precioAddUsu" placeholder="Escriba el precio del plan" required />
                            </div>
                            <div class="col-md-6">
                                <lable>Inicio del plan</label>
                                <input name="desdeAddUsu" type="date" required/>
                            </div>
                            <div class="col-md-6">
                                <lable>Fecha expiracion</label>
                                <input name="hastaAddUsu" type="date" required />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-b" type="button" style="background:#ffa300; color:white; border:1px solid; border-color:#ffa300;">Cerrar</button>
                            <button class="btn btn-b" type="submit" style="background:#ffa300; border:1px solid; border-color:#ffa300;">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end: Modal large edoitar Categoria -->

    

    <!--Plugins-->
    <script src="../js/jquery.js"></script>
    <script src="../js/plugins.js"></script>
    <!--Template functions-->
    <script src="../js/functions.js"></script>
<?php }

static function moduloFormulario($conection, $user, $sus)
{  
    $usuId = "";
            $idTienda="";
            $plan="";
            $precio="";
            $desde="";
            $hasta="";
            $status="";
            $susId="";
    ?>

    <section>
        <div class="container">
            <div class="row">
                <?php 
                    $query_sus = "SELECT * FROM formularios where id_sus = $sus";
                    $result_sus = mysqli_query($conection,$query_sus);
                    while ($row = mysqli_fetch_assoc($result_sus)) 
                    { 
                        $nombreTienda = $row['nombreTienda'];
                        $idF = $row['id_formulario']; 
                        $description = $row['descripcion'];
                        $descripcionFace = $row['descripcion1'];
                        $vigenciaFace = $row['vigencia1'];
                        $descripcionMail = $row['descripcion2'];
                        $vigenciaMail = $row['vigencia2'];
                        $descripcion3Face = $row['descripcion3'];
                        $vigencia3Face = $row['vigencia3'];
                        $descripcion4Face = $row['descripcion4'];
                        $vigencia4Face = $row['vigencia4'];
                        $alcance = $row['alcance'];
                        $tipo1 = $row['tipo1'];
                        $tipo2 = $row['tipo2'];
                        $tipo3 = $row['tipo3'];
                        $value1 = $row['value1'];
                        $value2 = $row['value2'];
                        $value3 = $row['value3'];
                        $otros = $row['otros'];
                        $image1 = $row['image1'];
                        $image2 = $row['image2'];
                        $image3 = $row['image3'];
                        $image4 = $row['image4'];
                    }
                ?>
            </div>
            <div class="card card-bordered sp-plan"> <!-- Bloque de suscripcion -->
                                            <div class="row no-gutters">
                                                <div class="col-md-12" style="text-align:center;">
                                                    <h2 class="nk-block-title">Formulario de la tienda <?php echo $nombreTienda; ?></h2>
                                                    <br><br>
                                                </div><!-- .col -->
                                                <div class="col-md-12">
                                                    <div class="col-md-11" style="margin-left:4%;">
                                                            <label>Cual es el nombre de tu Marca o M rKado?</label>
                                                            <input type="text" name="nombreTienda" value="<?php echo $nombreTienda ?>" disabled style="width:100%"/>
                                                            
                                                            <br><br>
                                                            <label>Descripcion:</label>
                                                            <textarea name="descripcion" disabled value="<?php echo $description; ?>" disbaled style="width:100%; height:50px;">
                                                            </textarea>

                                                            <br><br>
                                                            <label>Información, descuento o promoción</label><br><br>

                                                            <label>Publicación en semana 1 en Facebook:</label>
                                                            <textarea name="descripcionFace" disabled style="width:100%; height:50px;">
                                                                <?php echo $descripcionFace; ?>
                                                            </textarea>
                                                            
                                                            <?php if($image1 != "")
                                                            { ?>
                                                                <label>Imagen Semana 1:</label>
                                                                <a href="../images/imagenFormularios/<?php echo $image1; ?>" download>
                                                                    <img src="../images/imagenFormularios/<?php echo $image1; ?>" style="width:50%;" /><br>
                                                                </a>
                                                                <label>Para descargar la imagen, debe hacer click sobre la imagen.</label><br><br>
                                                              <?php }else{
                                                                ?> <label>El usuario no envio la imagen</label> <?php
                                                            } ?>

                                                            
                                                            <br><br>
                                                            <label>Vigencia de esta promoción o descuento:</label>
                                                            <input type="text" name="vigenciaFace" disbaled value="<?php echo $vigenciaFace; ?>" style="width:50%"/>

                                                            <br><br>
                                                            <label>Publicación en semana 2 en Mailing:</label>
                                                            <textarea name="descripcionMail" disabled style="width:100%; height:50px;">
                                                                <?php echo $descripcionMail; ?>
                                                            </textarea>

                                                            <?php if($image2 != "")
                                                            { ?>
                                                                <label>Imagen Semana 2:</label>
                                                                <a href="../images/imagenFormularios/<?php echo $image2; ?>" download>
                                                                    <img src="../images/imagenFormularios/<?php echo $image2; ?>" style="width:50%;" /><br>
                                                                </a>
                                                                <label>Para descargar la imagen, debe hacer click sobre la imagen.</label><br><br>
                                                            <?php }else{
                                                                ?> <label>El usuario no envio la imagen</label><br><br> <?php
                                                            } ?>

                                                            <label>Vigencia de esta promoción o descuento:</label>
                                                            <input type="text" name="vigenciaMail" disabled  value="<?php echo $vigenciaMail; ?>" style="width:50%"/>
                                                        
                                                            <br><br>
                                                            <label>Publicación en semana 3 en Facebook:</label>
                                                            <textarea name="descripcion3Face" disabled style="width:100%; height:50px;">
                                                                <?php echo $descripcion3Face; ?>
                                                            </textarea>

                                                            <?php if($image3 != "")
                                                            { ?>
                                                                <label>Imagen Semana 3:</label>
                                                                <a href="../images/imagenFormularios/<?php echo $image3; ?>" download>
                                                                    <img src="../images/imagenFormularios/<?php echo $image3; ?>" style="width:50%;" /><br>
                                                                </a>
                                                                <label>Para descargar la imagen, debe hacer click sobre la imagen.</label><br><br>
                                                            <?php }else{
                                                                ?> <label>El usuario no envio la imagen</label><br><br> <?php
                                                            } ?>

                                                            <label>Vigencia de esta promoción o descuento:</label>
                                                            <input type="text" name="vigencia3Face" disbaled value="<?php echo $vigencia3Face; ?>" style="width:50%"/>

                                                            <br><br>
                                                            <label>Publicación en semana 4 en Facebook:</label>
                                                            <textarea name="descripcion4Face" disabled style="width:100%; height:50px;">
                                                                <?php echo $descripcion4Face; ?>
                                                            </textarea>

                                                            <?php if($image4 != "")
                                                            { ?>
                                                                <label>Imagen Semana 4:</label>
                                                                <a href="../images/imagenFormularios/<?php echo $image4; ?>" download>
                                                                    <img src="../images/imagenFormularios/<?php echo $image4; ?>" style="width:50%;" /><br>
                                                                </a>
                                                                <label>Para descargar la imagen, debe hacer click sobre la imagen.</label><br><br>
                                                            <?php }else{
                                                                ?> <label>El usuario no envio la imagen</label><br><br> <?php
                                                            } ?>

                                                            <label>Vigencia de esta promoción o descuento:</label>
                                                            <input type="text" name="vigencia4Face" disabled value="<?php echo $vigencia4Face; ?>"  style="width:50%"/>

                                                            <br><br>
                                                            <label>Qué alcande de distribución tienes?</label>
                                                            <input type="text" name="alcance" disabled value="<?php echo $alcance; ?>"  style="width:50%"/>
                                                        
                                                            <br><br>
                                                            <label style="width:100%;">Qué datos de contacto tendrán tus publicaciones?</label>
                                                            <br><br>
                                                            <input type="text" name="contacto" disabled value="<?php echo $tipo1; ?>"  style="width:20%"/>

                                                            <input type="text" name="contactoValue1" disabled value="<?php echo $value1; ?>"  style="width:80%; "/><br><br>

                                                            <br><br>
                                                            <label style="width:100%;">Qué datos de contacto tendrán tus publicaciones?</label>
                                                            <input type="text" name="contacto" disabled value="<?php echo $tipo2; ?>"  style="width:20%"/>

                                                            <input type="text" name="contactoValue1" disabled value="<?php echo $value2; ?>"  style="width:80%; "/><br><br>

                                                            <br><br>
                                                            <label style="width:100%;">Qué datos de contacto tendrán tus publicaciones?</label>
                                                            <input type="text" name="contacto" disabled value="<?php echo $tipo3; ?>"  style="width:20%"/>

                                                            <input type="text" name="contactoValue1" disabled value="<?php echo $value3; ?>"  style="width:80%; "/><br><br>

                                                            <br><br>
                                                            <label>Restricciones 
                                                            <textarea name="otros" disabled style="width:100%; height:50px;">
                                                                <?php echo $otros; ?>
                                                            </textarea>
                                                    </div>
                                                </div>
                                            </div><!-- .row -->
                                        </div><!-- .sp-plan --> <!-- ENDING blopque suscripcion -->
        </div>
    </section>

    <!--Plugins-->
    <script src="../js/jquery.js"></script>
    <script src="../js/plugins.js"></script>
    <!--Template functions-->
    <script src="../js/functions.js"></script>
<?php }

}
?>


