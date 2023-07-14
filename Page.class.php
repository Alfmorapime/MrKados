<?php

class Page {

    private static $_title = "MrKados";

    static function setTitle(string $title) {
        self::$_title = $title;
    }


    static function header2($user,$usuarioTipo)    { 
    

        ?>

        <!DOCTYPE html>
        <html lang="en">
       
        <head>
           <meta name="viewport" content="width=device-width, initial-scale=1" />
           <meta http-equiv="content-type" content="text/html; charset=utf-8" />    <meta name="Alfredo Morales" content="INSPIRO" />    
           <meta name="description" content="Themeforest Template Polo, html template">
           <link rel="icon" type="image/png" href="images/favicon/favicon.png">   
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <!-- Document title -->
           <title>Mr.Kados</title>
           <!-- Stylesheets & Fonts -->
           <link href="css/plugins.css" rel="stylesheet">
           <link href="css/style.css" rel="stylesheet">
           <link href="https://fontawesome.com/icons/facebook-square?style=brands">
           <link href="https://fontawesome.com/icons/instagram?style=brands">
           <link href="https://fontawesome.com/icons/linkedin?style=brands">
       
           <style>
 
               .clear{
        clear:both;
        margin-top: 20px;
       }
       
       .result_box
       {
           margin-top:20px;
       }
       
       #searchResult{
        list-style: none;
        padding: 0px;
        width: 250px;
        position: absolute;
        margin: 0;
       }
       
       #searchResult li{
        background: lavender;
        padding: 4px;
        margin-bottom: 1px;
       }
       
       #searchResult li:nth-child(even){
        background: cadetblue;
        color: white;
       }
       
       #searchResult li:hover{
        cursor: pointer;
       }
       
       input[type=text]{
        padding: 5px;
        width: 250px;
        letter-spacing: 1px;
       }

       li:hover {
            color: orange;
        }
           </style>
        </head>
       
        <body>
           <!-- Body Inner -->
           <div class="body-inner">
               <!-- Topbar -->
               <div id="topbar" class="d-none d-xl-block d-lg-block topbar-fullwidth">
                   <div class="container">
                       <div class="row">
                           <div class="col-md-5">
                               <ul class="top-menu">
                                   <?php if($user == "" || $user == "na") { ?>
                                   <!-- <li><a href="registroUsuariosMerkados.php?error=0">Registra tu negocio</a></li> -->
                                   <li><a href="registroUsuarios.php?error=0">Regístrate ahora</a></li>
                                   <li><a href="preguntasFrecuentes.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>">Preguntas Frecuentes</a></li>
                                   <?php }else{ ?>
                                    <li><a href="preguntasFrecuentes.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>">Preguntas Frecuentes</a></li>
                                    <li data-target="#modal-enviarCalificacion" data-toggle="modal"><a href="#">Califica nuestra plataforma</a></li>
                            <?php } ?>
                               </ul>
                           </div>
                           <div class="col-md-3 d-none d-sm-block" style="text-align:center;">
                                <a target="_blank" href="https://www.facebook.com/SomosMrKados"><i class="fab fa-facebook-square" style="margin-left:5%; margin-top:10px; font-size:20px; color:white;"></i></a>
                                <a target="_blank" href="https://www.instagram.com/somosmrkados/"><i class="fab fa-instagram" style="margin-left:5%;font-size:20px; color:white;"></i></a>
                                <a target="_blank" href="https://www.linkedin.com/in/somosmrkados/"><i class="fab fa-linkedin" style="margin-left:5%; font-size:20px; color:white;"></i></a>
                                <a target="_blank" href="https://www.youtube.com/channel/UCEJSBcNAXRa-Izm1ILE8p4w"><i class="fab fa-youtube" style="margin-left:5%; font-size:20px; color:white;"></i></a> 
                           </div>
                           <div class="col-md-4 d-none d-sm-block">
                            <?php if($user == "" || $user == "na") {  ?>
                                <a href="inicioSession.php?error=0"> <input type="button" value="INICIAR SESIÓN" class="topbar-button-inicio-sesion"/></a>
                            <?php } else { 
                                $conection = include 'conection.php';
                                $query = "select * from usuarios where correo = '$user';";
                                $result_user = mysqli_query($conection,$query);
                                $row = mysqli_fetch_assoc($result_user);
                                if($row != 0)
                                {
                                    $nombreUsuario = $row['nombre'];
                                    $apellidoUsuario = $row['apellidos'];
                                    ?>
                                        <a href="index2-2.php"> <input type="button" value="CERRAR SESIÓN" class="topbar-button-inicio-sesion"/></a>
                                        <a href="src/html/general/index.php?user=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&op=welcome"> <input type="button" value="Ir al panel de admin" class="topbar-button-inicio-sesion"/></a> 
                                    <?php
                                }
                            } ?>
                    </div>
                       </div>
                   </div>
               </div>
               <!-- end: Topbar -->
               <!-- Header -->
               <header id="header" data-fullwidth="true">
                   <div class="header-inner" style="background-image: url('images/amarillo-back.png');">
                       <div class="container">
                           <!--Logo-->
                           <div id="logo">
                               <a href="index.html">
                                   <img src="images/Logo-shadow.png" class="logo-default" >
                               </a>
                               
                           </div>
       
                           <!--End: Logo-->
                           
                           <!--Navigation Resposnive Trigger-->
                           <div id="mainMenu-trigger">
                               <a class="lines-button x"><span class="lines"></span></a>
                           </div>
                           <!--end: Navigation Resposnive Trigger-->
                           <!--Navigation-->
                           <div id="mainMenu">
                               
                               <div class="container">
                                   <form method="post">
                                       <nav>
                                           <ul>
                                               <li class="dropdown"><a href="#">AYUDAMOS A</a>
                                                   <ul class="dropdown-menu">
                                                       <li><a href="tiendasBycat.php?correo=<?php echo $user ?>&type=<?php echo $usuarioTipo ?>&id=Servicios"><i class="fas fa-lightbulb"></i>Servi-MrKados</a></li>
                                                       <li><a href="tiendasBycat.php?correo=<?php echo $user ?>&type=<?php echo $usuarioTipo ?>&id=Productos"><i class="fas fa-shopping-basket"></i>Produ-MrKados</a></li> 
                                                       <li><a href="tiendasBycat.php?correo=<?php echo $user ?>&type=<?php echo $usuarioTipo ?>&id=Fundaciones"><i class="fas fa-building"></i>Fundaciones</a></li>   
                                                   </ul>
                                               </li>    
                                               <li><a href="comoFunciona.php?correo=<?php echo $user ?>&type=<?php echo $usuarioTipo ?>">CÓMO FUNCIONA</a></li>
                                               <li><a href="quienessomos.php?correo=<?php echo $user ?>&type=<?php echo $usuarioTipo ?>">SOMOS</a></li>
                                               <li><a href="contactanos.php?correo=<?php echo $user ?>&type=<?php echo $usuarioTipo ?>">CONTACTO</a></li>
                                           </ul>
                                       </nav>
                                   </form>
                               </div>
                           </div>
                           <!--end: Navigation-->
                       </div>
                   </div>
               </header>
               <!-- end: Header -->
                <!-- Open model desplegable enviar colonia -->
        <div class="modal fade" id="modal-enviarColonia2" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <span id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold; font-size:20px; color: black">Antes de hacer tu mención...</span>
                        <span id="modal-label-3" class="modal-title" style="text-align:center; color:black; font-size:12px;">Para validar tu mención es necesaria<br>

la siguiente información.</span>
                        <form method="POST">
                            <div class="col-12" style="float:left; margin-top:2%;">
                                <div class="col-6" style="float:left; ">
                                    <input style="width:100%;  border-radius:5px; color:black;" type="text" name="nameSendColonia" placeholder="Escribe tu nombre" />
                                </div>
                                <div class="col-6" style="float:left;">
                                    <input style="width:100%; border-radius:5px; " type="text" name="emailSendColonia" placeholder="Escribe tu E-Mail" />    
                                </div>
                                <div class="col-12" style="float:left; margin-top:2%;">
                                    <input style="width:100%; border-radius:5px; color:black;" type="text" name="coloniaSendColonia" placeholder="Escribe tu colonia" />
                                </div>
                                <div class="col-4" style="float:left; margin-top:2%; margin-left:30%;">
                                    <input style="width:100%; border-radius:5px; color:black; background:#ffbd00; border-color:#ffbd00; font-weight:bold;" type="submit" value="Solicitar Ahora" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Modal desplegable enviar colonia -->
        <!-- Open model desplegable enviar colonia -->
        <div class="modal fade" id="modal-enviarCalificacion" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <span id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold; font-size:20px; color: black">¡Califica nuestra plataforma!</span>
                        <form method="POST">
                            <div class="col-12" style="float:left; margin-top:2%;">
                                <div class="col-6" style="float:left; text-align:center;">
                                    
                                    <span style="float:left; margin-left:5%;">¿Qué te pareció nuestra plataforma?</span><br>
                                    
                                    <div class="col-3" style="float:left;">
                                        <img src="images/PersonajeTriste.png" style="width:140%;" />
                                    </div>
                                   
                                    <div class="col-3" style="float:left;">
                                            <img src="images/PersonajePensando.png" style="width:140%;"/>
                                    </div>
                                    <div class="col-3" style="float:left;">
                                            <img src="images/PersonajeFeliz.png" style="width:140%;" />
                                    </div>
                                    <div class="col-3" style="float:left;">
                                            <img src="images/PersonajeSuperFeliz.png" style="width:140%;" />
                                    </div>
                                    <!-- -->
                                    <div class="col-3" style="float:left;">
                                        <input type="radio" name="puntaje" value="1" style="width:100%;" required/>
                                    </div>
                                   
                                    <div class="col-3" style="float:left;">
                                        <input type="radio" name="puntaje" value="2" style="width:100%;"/>
                                    </div>
                                    <div class="col-3" style="float:left;">
                                        <input type="radio" name="puntaje" value="3" style="width:100%;"/>
                                    </div>
                                    <div class="col-3" style="float:left;">
                                        <input type="radio" name="puntaje" value="4" style="width:100%;"/> 
                                    </div>
                                </div>
                                <div class="col-6" style="float:left;">
                                    <span style="float:left; margin-left:5%;">Compártenos tu opinión.</span><br>
                                    <textarea id="w3review" required name="comentarioCalificacion" row="40" heigh="250"> </textarea>
                                </div>
                                <div class="col-4" style="float:left; margin-top:2%; margin-left:30%;">
                                    <input style="width:100%; border-radius:5px; color:black; background:#ffbd00; border-color:#ffbd00; font-weight:bold;" type="submit" value="Solicitar Ahora"  />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Modal desplegable enviar colonia -->
       
               
           <?php }
    
    static function header($user,$usuarioTipo){ 
        ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />    <meta name="Alfredo Morales" content="INSPIRO" />    
	<meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="images/favicon/favicon.png">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Mr.Kados</title>
    <!-- Stylesheets & Fonts -->
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fontawesome.com/icons/facebook-square?style=brands">
    <link href="https://fontawesome.com/icons/instagram?style=brands">
    <link href="https://fontawesome.com/icons/linkedin?style=brands">

    <style>
        .clear{
 clear:both;
 margin-top: 20px;
}

li:hover {
            color: orange;
        }

.result_box
{
    margin-top:20px;
}

#searchResult{
 list-style: none;
 padding: 0px;
 width: 250px;
 position: absolute;
 margin: 0;
}

#searchResult li{
 background: lavender;
 padding: 4px;
 margin-bottom: 1px;
}

#searchResult li:nth-child(even){
 background: cadetblue;
 color: white;
}

#searchResult li:hover{
 cursor: pointer;
}

input[type=text]{
 padding: 5px;
 width: 250px;
 letter-spacing: 1px;
}
    </style>

 </head>

 <body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Topbar -->
        <div id="topbar" class="d-none d-xl-block d-lg-block topbar-fullwidth">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="top-menu">
                            <?php if($user == "" || $user == "na") { ?>
                           <!-- <li><a href="registroUsuariosMerkados.php?error=0">Registra tu negocio</a></li> -->
                            <li><a href="registroUsuarios.php?error=0">Regístrate ahora</a></li>
                            <li><a href="preguntasFrecuentes.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>">Preguntas Frecuentes</a></li>
                            <?php }else{ ?>
                                <li><a href="preguntasFrecuentes.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>">Preguntas Frecuentes</a></li>
                            <li data-target="#modal-enviarCalificacion" data-toggle="modal"><a href="#">Califica nuestra plataforma</a></li>
                            <?php } ?>
                            
                        </ul>
                    </div>
                    <div class="col-md-6 d-none d-sm-block">
                            <?php if($user == "" || $user == "na") {  ?>
                                <a href="inicioSession.php?error=0"> <input type="button" value="INICIAR SESIÓN" class="topbar-button-inicio-sesion"/></a>
                            <?php } else { 
                                $conection = include 'conection.php';
                                $query = "select * from usuarios where correo = '$user';";
                                $result_user = mysqli_query($conection,$query);
                                $row = mysqli_fetch_assoc($result_user);
                                if($row != 0)
                                {
                                    $nombreUsuario = $row['nombre'];
                                    $apellidoUsuario = $row['apellidos'];
                                    ?>
                                        <a href="index2-2.php"> <input type="button" value="CERRAR SESIÓN" class="topbar-button-inicio-sesion"/></a>
                                        <a href="src/html/general/index.php?user=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&op=welcome"> <input type="button" value="Ir al panel de admin" class="topbar-button-inicio-sesion"/></a> 
                                    <?php
                                }
                               
                             } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Topbar -->
        <!-- Header -->
        <header id="header" data-fullwidth="true">
            <div class="header-inner" style="background-image: url('images/amarillo-back.png');">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="index.html">
                            <img src="images/Logo-shadow.png" class="logo-default" >
                        </a>
                    </div>

                    <!--End: Logo-->
                    
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu">
                        
                        <div class="container">
                            <form method="post">
                                <input id="testing" style="width:200px; border-radius:10px; border-color:orange;" name="BuscarSubCat" type="text" placeholder="¿Qué estás buscando?" />
                                <!-- <input type="button" value="?" data-target="#category-list" style="background:#ffb800; border:0px;" /> -->
                                <i class="fas fa-search"></i>
                                <input style="border-radius:10px; background:black; color: white;" type="submit" value="Buscar" />
                            
                                <nav>
                                    <ul>
                                        <li><a href="#page-content">Iniciar Ahora </a></li>
                                        <li class="dropdown"><a href="#">AYUDAMOS A</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="tiendasBycat.php?correo=<?php echo $user ?>&type=<?php echo $usuarioTipo ?>&id=Servicios"><i class="fas fa-lightbulb"></i>Servi-MrKados</a></li>
                                                <li><a href="tiendasBycat.php?correo=<?php echo $user ?>&type=<?php echo $usuarioTipo ?>&id=Productos"><i class="fas fa-shopping-basket"></i>Produ-MrKados</a></li> 
                                                <li><a href="tiendasBycat.php?correo=<?php echo $user ?>&type=<?php echo $usuarioTipo ?>&id=Fundaciones"><i class="fas fa-building"></i>Fundaciones</a></li>   
                                            </ul>
                                        </li>    
                                        <li><a href="comoFunciona.php?correo=<?php echo $user ?>&type=<?php echo $usuarioTipo ?>">CÓMO FUNCIONA</a></li>
                                        <li><a href="quienessomos.php?correo=<?php echo $user ?>&type=<?php echo $usuarioTipo ?>">SOMOS</a></li>
                                        <li><a href="contactanos.php?correo=<?php echo $user ?>&type=<?php echo $usuarioTipo ?>">CONTACTO</a></li>
                                    </ul>
                                </nav>
                            </form>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->

        <!-- Open model desplegable enviar colonia -->
        <div class="modal fade" id="modal-enviarColonia" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <span id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold; font-size:20px; color: black">Antes de hacer tu mención...</span>
                        <span id="modal-label-3" class="modal-title" style="text-align:center; color:black; font-size:12px;">Para validar tu mención es necesaria<br>

la siguiente información.</span>
                        <form method="POST">
                            <div class="col-12" style="margin-top:2%;">
                                <div class="row" style="width:100%;">
                                    <div class="col-6">
                                        <input style="width:106%; margin-left:-15px;  border-radius:5px; color:black;" type="text" name="nameSendColonia" required placeholder="Escribe tu nombre" />
                                    </div>
                                    <div class="col-6" >
                                        <input style="width:106%; margin-left:-15px;  border-radius:5px; " type="text" name="emailSendColonia" required placeholder="Escribe tu E-Mail" />    
                                    </div>
                                </div>
                                <div class="row" style="width:100%;">
                                    <div class="col-12" style=" margin-top:2%;">
                                        <input style="width:104%; margin-left:-15px; border-radius:5px; color:black;" type="text" name="coloniaSendColonia" required placeholder="Escribe tu colonia" />
                                    </div>
                                </div>
                                <div class="row" style="width:100%;">
                                        <input style="margin:auto; margin-top:3%; border-radius:5px; color:black; background:#ffbd00; border-color:#ffbd00; font-weight:bold;" type="submit" value="Solicitar Ahora" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Modal desplegable enviar colonia -->

        <!-- Open model desplegable enviar colonia -->
        <div class="modal fade" id="modal-enviarCalificacion" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <span id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold; font-size:20px; color: black">¡Califica nuestra plataforma!</span>
                        <form method="POST">
                            <div class="col-12" style="float:left; margin-top:2%;">
                                <div class="col-6" style="float:left; text-align:center;">
                                    
                                    <span style="float:left; margin-left:5%;">¿Qué te pareció nuestra plataforma?</span><br>
                                    
                                    <div class="col-3" style="float:left;">
                                        <img src="images/PersonajeTriste.png" style="width:140%;" />
                                    </div>
                                   
                                    <div class="col-3" style="float:left;">
                                            <img src="images/PersonajePensando.png" style="width:140%;"/>
                                    </div>
                                    <div class="col-3" style="float:left;">
                                            <img src="images/PersonajeFeliz.png" style="width:140%;" />
                                    </div>
                                    <div class="col-3" style="float:left;">
                                            <img src="images/PersonajeSuperFeliz.png" style="width:140%;" />
                                    </div>
                                    <!-- -->
                                    <div class="col-3" style="float:left;">
                                        <input type="radio" name="puntaje" value="1" style="width:100%;" required/>
                                    </div>
                                   
                                    <div class="col-3" style="float:left;">
                                        <input type="radio" name="puntaje" value="2" style="width:100%;"/>
                                    </div>
                                    <div class="col-3" style="float:left;">
                                        <input type="radio" name="puntaje" value="3" style="width:100%;"/>
                                    </div>
                                    <div class="col-3" style="float:left;">
                                        <input type="radio" name="puntaje" value="4" style="width:100%;"/> 
                                    </div>
                                </div>
                                <div class="col-6" style="float:left;">
                                    <span style="float:left; margin-left:5%;">Compártenos tu opinión.</span><br>
                                    <textarea id="w3review" name="comentarioCalificacion" row="40" heigh="250" required> </textarea>
                                </div>
                                <div class="col-4" style="float:left; margin-top:2%; margin-left:30%;">
                                    <input style="width:100%; border-radius:5px; color:black; background:#ffbd00; border-color:#ffbd00; font-weight:bold;" type="submit" value="Solicitar Ahora"  />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Modal desplegable enviar colonia -->

    <?php }

    static function footer($user, $usuarioTipo)    { ?>

            <!-- Footer -->
    <footer id="footer" class="inverted">
        <div class="footer-content">
          <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="widget">
                        <h4>INFORMACIÓN ADICIONAL</h4>
                        <ul class="list">
                            <?php if($user == "") { ?>
                            <li><a href="inicioSession.php?error=0">Iniciar sesión</a></li>
                            <li><a href="registroUsuarios.php?error=0">Regístrate ahora</a></li>
                            <?php } ?>
                            <li><a href="colabora.php?correo=<?php echo $user ?>&type=<?php echo $usuarioTipo ?>">Colabora con nosotros</a></li>
                            <li><a href="tiendasBycat.php?correo=<?php echo $user ?>&type=<?php echo $usuarioTipo ?>&id=Fundaciones">Fundaciones registradas</a></li>
                        </ul>
                    </div>
                    <!-- end: Footer widget area 4 -->
                </div>
              
  
  
              <div class="col-xl-3 col-lg-3 col-md-3">
                <!-- Footer widget area 4 -->
                <div class="widget">
                  <ul class="list" style="margin-top:17%;">
                    <li><a href="terminos.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>">Términos y condiciones</a></li>
                    <li><a href="politicas.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>">Políticas de privacidad</a></li>
                    <li><a href="preguntasFrecuentes.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>">Preguntas frecuentes</a></li>
                    <li><a href="extraMrkados.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>">Servicios ExtraMrKados</a></li>
                  </ul>
                </div>
                <!-- end: Footer widget area 4 -->
              </div>
  
              <div class="col-xl-6 col-lg-6 col-md-6">
                <!-- Footer widget area 5 -->
                <div class="widget clearfix widget-newsletter">
                  <h4 class="widget-title">SUSCRÍBETE</h4>
                  <p>¿Te gustaría recibir promociones
                    de tus MrKados favoritos?
  
                  </p>
                  <form action="registerEmail.php" method="post">
                    <div class="input-group">
                      <input class="formulario-campo" name="nombreSend" placeholder="Nombre y Apellido" type="text" style="width:100%;" required> 
                      <input class="formulario-campo" name="emailSend" placeholder="E-Mail*" type="email" required>
                      <input class="formulario-campo-boton" type="submit" value="SUSCRÍBETE AHORA"/>
                    </div>
                  </form>
                  <div class="redes-sociales">SÍGUENOS 
                  <a target="_blank" href="https://www.facebook.com/SomosMrKados"><i class="fab fa-facebook-square" style="margin-left:5%; margin-top:10px; font-size:20px; color:white;"></i></a>
                                <a target="_blank" href="https://www.instagram.com/somosmrkados/"><i class="fab fa-instagram" style="margin-left:5%;font-size:20px; color:white;"></i></a>
                                <a target="_blank" href="https://www.linkedin.com/in/somosmrkados/"><i class="fab fa-linkedin" style="margin-left:5%; font-size:20px; color:white;"></i></a>
                                <a target="_blank" href="https://www.youtube.com/channel/UCEJSBcNAXRa-Izm1ILE8p4w"><i class="fab fa-youtube" style="margin-left:5%; font-size:20px; color:white;"></i></a> 
                  </div>
                </div>
                <!-- end: Footer widget area 5 -->
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-12">
            <div class="copyright-text">MrKados 2021®</div>
        </div>
        
        </div>
      </footer>
      <!-- end: Footer -->
    </div>
    <!-- end: Body Inner -->
 <!--Plugins-->
 <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
 <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <!--Template functions-->
    <script src="js/functions.js"></script>
</body>

</html>

    <?php }

static function terminos()
{?>
<section style="background-image: url('images/blanco-fondo.png');">
    <div class="container">
        <div class="row">
            <div class="col-lg-4" >
            </div>
            <div class="col-lg-4" >
                <img src="images/Logo-shadow.png" style="width:70%; margin-left:13%;"/>
            </div>
            <div class="col-lg-4">
            </div>

            <div class="col-lg-12" style="text-align:center; width:100%; margin-top:3%;">
                <h1><b>Términos y condiciones</b></h1>
            </div>
            
            <div class="col-lg-12" style="text-align:center; width:100%; margin-top:3%;">
                <p style="color:black;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper

suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulpu-
tate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto

odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.<br><br>
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper

suscipit lobortis nisl ut aliquip ex ea commodo consequat.<br><br>

Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper

suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulpu-
tate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto

odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.<p>
            </div>

        </div>
    </div>
</section>
<?php }

static function politicas()
{?>
<section style="background-image: url('images/blanco-fondo.png');">
    <div class="container">
        <div class="row">
            <div class="col-lg-4" >
            </div>
            <div class="col-lg-4" >
                <img src="images/Logo-shadow.png" style="width:70%; margin-left:13%;"/>
            </div>
            <div class="col-lg-4">
            </div>

            <div class="col-lg-12" style="text-align:center; width:100%; margin-top:3%;">
                <h1><b>Políticas de privacidad</b></h1>
            </div>
            
            <div class="col-lg-12" style="text-align:center; width:100%; margin-top:3%;">
                <p style="color:black;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper

suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulpu-
tate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto

odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.<br><br>
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper

suscipit lobortis nisl ut aliquip ex ea commodo consequat.<br><br>

Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper

suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulpu-
tate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto

odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.<p>
            </div>

        </div>
    </div>
</section>
<?php }

static function emailRegistroNosatisfactorio()
{  ?>
          <!-- Section -->
          <section class="fullscreen" style="background-image: url('images/blanco-fondo.png');" >
            <div class="container">
                    <div class="text-center m-b-30" style="margin-top:-10%;">
                        <a href="index.html" class="logo">
                            <img style="width:20%;" src="images/mrkado-feliz.png"/>
                        </a>
                    </div>
                    <div class="col-lg-12" style="text-align:center;">
                        <h2><b>Este correo electronico ya existe.</b></h2>
                    </div>
                    <div class="col-lg-12" style="text-align:center; margin-top:3%;">
                        <p style="color:black;">Ya eres parte de nuestra cadena Mrkados.</p>
                    </div>
            </div>
        </section>
        <!-- end: Section -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<?php }


static function emailRegistroSatisfactorio($error, $user, $tipo)
{  ?>
          <!-- Section -->
          <section class="fullscreen" style="background-image: url('images/blanco-fondo.png');" >
            <div class="container">
                    <div class="text-center m-b-30" style="margin-top:-10%;">
                        <a href="index.html" class="logo">
                            <img style="width:20%;" src="images/mrkado-feliz.png"/>
                        </a>
                    </div>
                    <div class="col-lg-12" style="text-align:center;">
                        <h2><b>¡FELICIDADES! Ya eres un MrKliente</b></h2>
                    </div>
                    <div class="col-lg-12" style="text-align:center; margin-top:3%;">
                        <p style="color:black;">Te damos la bienvenida, ahora ya eres parte de la <b>comunidad de MrKados</b>.
Recuerda que si usas con responsabilidad tu cuenta podrás obtener beneficios

por ser un MrKliente Estrella.</p>
                    </div>
            </div>
        </section>
        <!-- end: Section -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<?php }

static function inicioSession2($error, $user, $tipo)
{  ?>
          <!-- Section -->
          <section class="fullscreen" style="background-image: url('images/blanco-fondo.png');" >
            <div class="container">
            <?php if($error == 2) { ?> <div class="col-lg-9" style="background:red; margin-left:13%; margin-top:-10%; margin-bottom:15%; height:50px; color:white; font-weight:bold;"><h2 style="margin-left:13%; color:white;"> Su clave o contrasena es invalido</h2> </div> <?php }
                        else if($error == 1)
                        {
                            ?> <div class="col-lg-9" style="background:red; margin-left:13%; margin-top:-10%; margin-bottom:15%; height:50px; color:white; font-weight:bold;"> <h2 style="margin-left:13%; color:white;">Este correo electronico no existe</h2> </div> <?php
                        }
                     ?>
                    <div class="text-center m-b-30" style="margin-top:-10%;">
                        <a href="index.html" class="logo">
                            <img style="width:20%;" src="images/mrkado-feliz.png"/>
                        </a>
                    </div>
                    <div class="col-lg-12" style="text-align:center;">
                        <h2><b>¡FELICIDADES! Ya eres un MrKliente</b></h2>
                    </div>
                    <div class="col-lg-12" style="text-align:center; margin-top:3%;">
                        <p style="color:black;">Te damos la bienvenida, ahora ya eres parte de la <b>comunidad de MrKados</b>.
Recuerda que si usas con responsabilidad tu cuenta podrás obtener beneficios

por ser un MrKliente Estrella.</p>
                    </div>
                    <div class="row" style="margin-top:5%;">
                        <div class="col-lg-5 center" style="background:none;">
                            <h3 style="margin-left:25%;"><b>INICIA SESIÓN</b></h3>
                            <form method="POST">
                                <div class="form-group">
                                    <input type="email" required name="email" class="form-control" placeholder="Ingresa tu nombre de usuario">
                                </div>
                                <div class="form-group m-b-5">
                                    <input type="password" required name="contrasena" class="form-control" placeholder="Ingresa tu contraseña">
                                </div> 
                                <a href="recuperar.php"><p class="small" style="text-align:left;">¿Olvidaste tu contraseña?</p></a>
                              <!--  <div class="form-group form-inline text-left">
                                    <div class="form-check">
                                        <label>
                                            <input type="checkbox"><small class="m-l-10"> Remember me</small>
                                        </label>
                                    </div>
                                </div> -->
                                <div class="text-left form-group">
                                    <button style="margin-left:35%; background:black; border-color:black; color:white; font-weight:bold;" type="submit" class="btn">INICIAR SESIÓN</button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </section>
        <!-- end: Section -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<?php }

static function recuperarExitoso($correo, $type)
{  ?>
          <!-- Section -->
          <section class="fullscreen" style="background-image: url('images/blanco-fondo.png');" >
            <div class="container">
                    <div class="text-center m-b-30" style="margin-top:-10%;">
                        <a href="index.html" class="logo">
                            <img style="width:20%;" src="images/mrkados-inicia.png"/>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 center" style="background:none;">
                            <h3 style="margin-left:10%; text-align:center;"><b>Tu contraseña ha sido actualizada correctamente</b></h3>
                        
                            <a href="src/html/general/index.php?user=<?php echo $correo; ?>&type=<?php echo $type; ?>&op=welcome"><button style="margin-left:38%; background:black; border-color:black; color:white; font-weight:bold;" type="submit" class="btn">Explora MrKados</button></a>
                            
                        </div>
                    </div>
            </div>
        </section>
        <!-- end: Section -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<?php }

static function calificacionExitosa($correo, $type)
{  ?>
          <!-- Section -->
          <section class="fullscreen" style="background-image: url('images/blanco-fondo.png');" >
            <div class="container">
                    <div class="text-center m-b-30" style="margin-top:-10%;">
                        <a href="index.html" class="logo">
                            <img style="width:20%;" src="images/mrkados-inicia.png"/>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 center" style="background:none;">
                            <h3 style="margin-left:17%;"><b>Su comentario fue enviado con exito</b></h3>
                            <a href="index2-2.php?correo=<?php echo $correo; ?>&type=<?php echo $type; ?>"><button style="margin-left:38%; background:black; border-color:black; color:white; font-weight:bold;" type="submit" class="btn">Explora MrKados</button></a>
                        </div>
                    </div>
            </div>
        </section>
        <!-- end: Section -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<?php }

static function eliminacionExitosa($correo, $type)
{  ?>
          <!-- Section -->
          <section class="fullscreen" style="background-image: url('images/blanco-fondo.png');" >
            <div class="container">
                    <div class="text-center m-b-30" style="margin-top:-10%;">
                        <a href="index.html" class="logo">
                            <img style="width:20%;" src="images/PersonajeTriste.png"/>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 center" style="background:none; text-align:center;">
                            <h3 style="margin-left:5%;"><b>Nos da mucha tristeza que ya no quieras formar parte de nuestro mundo digital.</b></h3>
                            <h3 style="margin-left:5%;"><b>Recuerda que si deseas unirte nuevamente… te esperamos con los brazos abiertos. </b></h3>
                            <h3 style="margin-left:5%;"><b>¡Mucho Éxito!</h3></b>
                        </div>
                    </div>
            </div>
        </section>
        <!-- end: Section -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<?php }

static function contactoExitoso($correo, $type)
{  ?>
          <!-- Section -->
          <section class="fullscreen" style="background-image: url('images/blanco-fondo.png');" >
            <div class="container">
                    <div class="text-center m-b-30" style="margin-top:-10%;">
                        <a href="index.html" class="logo">
                            <img style="width:20%;" src="images/mrkados-inicia.png"/>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 center" style="background:none; text-align:center;">
                            <h3 style="margin-left:5%;"><b>Muchas gracias por contactarnos por este medio. Analizaremos tu solicitud y a la brevedad nos pondremos en contacto contigo. </b></h3>
                            <a href="index2-2.php?correo=<?php echo $correo; ?>&type=<?php echo $type; ?>"><button style="background:black; border-color:black; color:white; font-weight:bold;" type="submit" class="btn">Explora MrKados</button></a>
                        </div>
                    </div>
            </div>
        </section>
        <!-- end: Section -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<?php }

static function recuperarExitosoColonia($correo, $type)
{  ?>
          <!-- Section -->
          <section class="fullscreen" style="background-image: url('images/blanco-fondo.png');" >
            <div class="container">
                    <div class="text-center m-b-30" style="margin-top:-10%;">
                        <a href="index.html" class="logo">
                            <img style="width:20%;" src="images/mrkados-inicia.png"/>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 center" style="background:none; text-align:center;">
                            <h2><b>Hemos registrado tu solicitud.</b></h2>
                            <h4>Esto nos será de mucha ayuda para motivar a negocios

que estén cerca de ti y juntos podamos

crecer nuestra comunidad.</h4>
                            <h4>Te estaremos enviado un e-mail cuando haya MrKados

cerca de ti.</h4>
                            <a href="index2-2.php?correo=<?php echo $correo; ?>&type=<?php echo $type; ?>"><button style="background:black; border-color:black; color:white; font-weight:bold;" type="submit" class="btn">Explora MrKados</button></a>
                        </div>
                    </div>
            </div>
        </section>
        <!-- end: Section -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<?php }

static function validacionCuenta($correo, $type)
{  ?>
          <!-- Section -->
          <section class="fullscreen" style="background-image: url('images/blanco-fondo.png');" >
            <div class="container">
                    <div class="text-center m-b-30" style="margin-top:-10%;">
                        <a href="index.html" class="logo">
                            <img style="width:20%;" src="images/mrkados-inicia.png"/>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 center" style="background:none;" style="text-align:center;">
                            <h3 style="text-align:center;"><b>Tu cuenta de correo ha sido validada con éxito.</b></h3>
                            <h4 style="text-align:center;">Ya puedes hacer uso de nuestra plataforma digital.<h4>
                            <a href="src/html/general/index.php?user=<?php echo $correo; ?>&type=<?php echo $type; ?>&op=welcome"><button style="margin-left:38%; background:black; border-color:black; color:white; font-weight:bold;" type="submit" class="btn">Explora MrKados</button></a>
                        </div>
                    </div>
            </div>
        </section>
        <!-- end: Section -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<?php }

static function recuperarMensajeEnviado($correo)
{  ?>
          <!-- Section -->
          <section class="fullscreen" style="background-image: url('images/blanco-fondo.png');" >
            <div class="container">
                    <div class="text-center m-b-30" style="margin-top:-10%;">
                        <a href="index.html" class="logo">
                            <img style="width:20%;" src="images/mrkados-inicia.png"/>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 center" style="background:none;">
                            <h3 style="margin-left:5%;"><b>Hemos enviado un E-Mail al siguiente correo: </b></h3>
                            <p style="text-align:center; color:black; font-size:18px;"><?php echo $correo; ?></p>
                        </div>
                    </div>
            </div>
        </section>
        <!-- end: Section -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<?php }

static function clavesForm($correo, $error)
{  ?>
          <!-- Section -->
          <section class="fullscreen" style="background-image: url('images/blanco-fondo.png');" >
            <div class="container">
            <?php if($error == 2) { ?> <div class="col-lg-9" style="background:red; margin-left:13%; margin-top:-10%; margin-bottom:15%; height:50px; color:white; font-weight:bold;"><h2 style="margin-left:13%; color:white;"> Su clave o contrasena es invalido</h2> </div> <?php }
                        else if($error == 1)
                        {
                            ?> <div class="col-lg-9" style="background:red; margin-left:13%; margin-top:-10%; margin-bottom:15%; height:95px; color:white; font-weight:bold;"> <h2 style="margin-left:13%; color:white;">Confirma que las contraseñas sean iguales</h2> </div> <?php
                        }
                     ?>
                    <div class="text-center m-b-30" style="margin-top:-10%;">
                        <a href="index.html" class="logo">
                            <img style="width:20%;" src="images/mrkados-inicia.png"/>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 center" style="background:none;">
                            <h3 style="margin-left:17%;"><b>Escribe tu nueva contraseña</b></h3>
                            <form method="POST">
                                <div class="input-group show-hide-password">
                                    <input type="text" style="width:100%;"  required name="correo" class="form-control" value="<?php echo $correo; ?>" disabled>
                                </div>
                                <br>
                               <!-- <div class="form-group">
                                    <input type="password" required name="contrasena1" class="form-control" placeholder="Ingresa tu nueva contrasena">
                                </div> -->
                                <div class="input-group show-hide-password">
                                    <input class="form-control" name="contrasena1" pattern=".{5,16}" placeholder="Ingresa tu nueva contrasena" type="password" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="icon-eye-off" aria-hidden="true" style="cursor: pointer;"></i></span>
                                    </div>
                                </div>
                                <br>
                                <div class="input-group show-hide-password">
                                    <input class="form-control" name="contrasena2" pattern=".{5,16}" placeholder="Repite tu contraseña" type="password" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="icon-eye-off" aria-hidden="true" style="cursor: pointer;"></i></span>
                                    </div>
                                </div>
                                <br>
                               <!-- <div class="form-group">
                                    <input type="password" required name="contrasena2" class="form-control" placeholder="Repite tu contraseña">
                                </div> -->
                                <div class="text-left form-group">
                                    <button style="margin-left:35%; background:black; border-color:black; color:white; font-weight:bold;" type="submit" class="btn">Recuperar</button>
                                </div> 
                            </form>
                        </div>
                    </div>
            </div>
        </section>
        <!-- end: Section -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<?php }

static function recuperarForm($error, $user, $tipo)
{  ?>
          <!-- Section -->
          <section class="fullscreen" style="background-image: url('images/blanco-fondo.png');" >
            <div class="container">
            <?php if($error == 2) { ?> <div class="col-lg-9" style="background:red; margin-left:13%; margin-top:-10%; margin-bottom:15%; height:50px; color:white; font-weight:bold;"><h2 style="margin-left:13%; color:white;"> Su clave o contrasena es invalido</h2> </div> <?php }
                        else if($error == 1)
                        {
                            ?> <div class="col-lg-9" style="background:red; margin-left:13%; margin-top:-10%; margin-bottom:15%; height:50px; color:white; font-weight:bold;"> <h2 style="margin-left:13%; color:white;">Este correo electronico no existe</h2> </div> <?php
                        }
                     ?>
                    <div class="text-center m-b-30" style="margin-top:-10%;">
                        <a href="index.html" class="logo">
                            <img style="width:20%;" src="images/mrkados-inicia.png"/>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 center" style="background:none;">
                            <h3 style="margin-left:17%;"><b>¿Olvidaste tu contraseña?</b></h3>
                            <form method="POST">
                                <p class="small" style="text-align:left;">Dinos cual es tu email y te enviaremos un correo con el que podras recuperar tu contrasena</p>
                                <div class="form-group">
                                    <input type="email" required name="email" class="form-control" placeholder="Escribe tu E-Mail para recuperar tu contraseña">
                                </div>
                                <div class="text-left form-group">
                                    <button style="margin-left:35%; background:black; border-color:black; color:white; font-weight:bold;" type="submit" class="btn">Recuperar</button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </section>
        <!-- end: Section -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<?php }

static function inicioSession($error, $user, $tipo)
{  ?>
          <!-- Section -->
          <section class="fullscreen" style="background-image: url('images/blanco-fondo.png');" >
            <div class="container">
            <?php if($error == 2) { ?> <div class="col-lg-9" style="background:red; margin-left:13%; margin-top:-10%; margin-bottom:15%; height:50px; color:white; font-weight:bold;"><h2 style="text-align:center; color:white;">Tu contraseña es inválida, vuelve a intentarlo.</h2> </div> <?php }
                        else if($error == 1)
                        {
                            ?> <div class="col-lg-9" style="background:red; margin-left:13%; margin-top:-10%; margin-bottom:15%; height:50px; color:white; font-weight:bold;"> <h2 style="text-align:center; color:white;">Este correo electronico no existe</h2> </div> <?php
                        }
                        else if($error == 3)
                        {
                            ?> <div class="col-lg-9" style="background:red; margin-left:13%; margin-top:-10%; margin-bottom:15%; height:50px; color:white; font-weight:bold;"> <h2 style="color:white; text-align:center;">Debes activar tu cuenta</h2> </div> <?php
                        }
                     ?>
                    <div class="text-center m-b-30" style="margin-top:-10%;">
                        <a href="index.html" class="logo">
                            <img style="width:20%;" src="images/mrkados-inicia.png"/>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 center" style="background:none;">
                            <h3 style="margin-left:25%;"><b>INICIA SESIÓN</b></h3>
                            <form method="POST">
                                <div class="form-group">
                                    <input type="email" required name="email" class="form-control" placeholder="Ingresa tu correo electrónico">
                                </div>
                                <div class="form-group m-b-5">
                                    <input type="password" required name="contrasena" class="form-control" placeholder="Ingresa tu contraseña">
                                </div> 
                                <a href="recuperar.php"><p class="small" style="text-align:left;">¿Olvidaste tu contraseña?</p></a>

                                <div class="text-left form-group">
                                    <button style="margin-left:35%; background:black; border-color:black; color:white; font-weight:bold;" type="submit" class="btn">INICIAR SESIÓN</button>
                                </div>
                            </form>
                            <p class="small" style="text-align:center;">¿No tienes cuenta? <a href="registroUsuarios.php?error=0">Regístrate ahora</a> </p>
                           
                        </div>
                    </div>
            </div>
        </section>
        <!-- end: Section -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<?php }

static function slide_banner_productos_() { ?>
<section style="background-image: url('images/slider-produmrkado.jpg'); background-size: 100%; height:525px; background-repeat: no-repeat;">
    <div class="slide kenburns">
                <div class="bg-overlay" ></div>
                <div class="container">
                    <!-- Captions -->
                    <div class="producto-slider-dere-h1">PRODU-MRKADOS<br>A SU SERVICIO</div>
                    <div class="producto-slider-dere-h5">Encuentra los mejores MrKaditos que ofrezcan<br>
productos de excelente calidad y al mejor precio.</div>
                       <!-- end: Captions -->
                </div>
    </div>
            <!-- end: Slide 1 -->
</section>
<?php }

static function slide_banner_fundaciones_servicios() { ?>
<section style="background-image: url('images/slide-servimrkados.jpg'); background-size: 100%; height:525px; background-repeat: no-repeat;">
    <div class="slide kenburns">
                <div class="bg-overlay" ></div>
                <div class="container">
                    <!-- Captions -->
                    <div class="servicio-slider-dere-h1">SERVI-MRKADOS<br>Servicios registrados<br>de alta calidad</div>
                    <div class="servicio-slider-dere-h5">Soluciones de alto nivel...<br>a minutos de tu hogar</div>
                       <!-- end: Captions -->
                </div>
    </div>
            <!-- end: Slide 1 -->
</section>
<?php }

static function slide_banner_fundaciones() { ?>
   <!-- Inspiro Slider -->
   <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">
       <!-- Slide 2 -->
           <div class="slide kenburns" data-bg-parallax="images/fundaciones01.jpg" >
               <div class="container">
                       <!-- Captions -->
                       <div class="fundaciones-slider1-izq-h1">Regalemos solidaridad</div>
                       <div class="fundaciones-slider1-izq-h5">Existen varias formas de apoyar en cada fundación, pues cada
una tiene sus necesidades y proyectos, siempre es bueno tener
una mano extra y nuestro objetivo es difundir y transmitir una
filosofía de apoyo a los demás.</div>
                       <!-- end: Captions -->
               </div>
           </div>
       <!-- end: Slide -->

       <!-- Slide 2 -->
           <div class="slide kenburns" data-bg-parallax="images/slider-fundaciones.jpg" >
               <div class="container">
                       <!-- Captions -->
                       <div class="fundaciones-slider2-derecha-h1">Por un mundo<br>más justo<br><br></div>
                       <div class="fundaciones-slider2-derecha-h5">Cualquier acción contribuye a mejorar las<br>
condiciones de vida de toda una comunidad.</div>
                       <!-- end: Captions -->
               </div>
           </div>
       <!-- end: Slide -->
   </div>
   <!--end: Inspiro Slider -->
<?php }


static function slide_banner_index($conection) { ?>
   
    <!-- SLIDER NUEVO -->

            <!-- Inspiro Slider -->
        <div id="slider" class="inspiro-slider dots-creative" data-height-xs="360">
            <!-- Slide 1 -->
            <?php
             $query_slider = "SELECT * FROM slider WHERE activate = '1' order by id ASC";
            $result_slider = mysqli_query($conection,$query_slider);
            while ($row = mysqli_fetch_assoc($result_slider)) 
            {
                $imagePath = "images/slider/".$row['image'];
                $text1 = $row['text1'];
                $text2 = $row['text2']; 
           ?>
            <div class="slide" style="background-image:url('<?php echo $imagePath; ?>');">
                
                <div class="container">
               <!-- <div class="slide-captions text-center text-light">
                         //Captions 
                        <h2>Create! Be proud!</h2>
                        <button type="button" class="btn btn-purple"><span class="btn-label"><i class="fa fa-check"></i></span>Explore more</button>
                         //end: Captions 
                    </div> -->
                </div>
            </div>
            <?php } ?>
            <!-- end: Slide 1 -->
        </div>
        <!--end: Inspiro Slider -->

    <!-- END ELIDER NUEVO -->
  
<?php }

    static function slide_banner_tienda_page($image) {  ?>
   
         <!-- Inspiro Slider -->
         <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">
            <!-- Slide 1 -->
                <div class="slide kenburns" data-bg-parallax="images/<?php echo $image; ?>">
                    <div class="bg-overlay"></div>
                    <div class="container">
                        <div class="slide-captions text-light">
                            <!-- Captions -->
                            
                            <!-- end: Captions -->
                        </div>
                    </div>
                </div>
            <!-- end: Slide -->
        </div>
        <!--end: Inspiro Slider -->
       
    <?php }

    static function logo_section($logo, $description)
    { ?>
            <div class="row">
                    <div class="col-lg-4 center no-padding">
                        <img src="images/<?php echo $logo; ?>">
                    </div>
                    <div class="col-lg-8 center no-padding">
                        <?php echo $description; ?>
                    </div>
            </div>
   <?php }

static function pasos_banner_index() { ?>
     <!-- WHAT WE DO -->
     <section class="background-black" >
            <div class="container" >
                <div class="row" >
                    <div class="col-lg-4" >
                        <div>
                            <h2 style="color:white; font-weight: bold;">1. Localiza</h2>
                            <h4 style="color:white; font-weight: bold;">tu colonia.</h4>
                            <p>Selecciona tu estado, ciudad y colonia a
                                donde requieres hacer tu compra</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <h2 style="color:white; font-weight: bold;">2. Elige</h2>
                            <h4 style="color:white; font-weight: bold;">el negocio.</h4>
                            <p>Escoge el negocio del servicio o producto
                                que buscas y que esté más cerca de ti.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div >
                            <h2 style="color:white; font-weight: bold;">3. Contacta</h2>
                            <h4 style="color:white; font-weight: bold;">para comprar.</h4>
                            <p>Establece directamente con el negocio tu
                                pedido, forma de entrega y forma de pago.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END WHAT WE DO -->
<?php }

static function contador_resultado_cat($numCOlonias) { ?>
    <!-- WHAT WE DO -->
    <section class="background-black" >
           <div class="container" >
               <div class="row" >
                   <div class="col-lg-12" >
                       <div data-animate="fadeInUp" data-animate-delay="0">
                            <?php if($numCOlonias == 1) {?>
                                <h2 style="color:white; font-weight: bold;">Encontramos <?php echo $numCOlonias; ?> negocio registrado en MrKados.</h2>
                            <?php } else {?> 
                                <h2 style="color:white; font-weight: bold;">Encontramos <?php echo $numCOlonias; ?> negocio registrado en MrKados.</h2>
                            <?php } ?> 
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!-- END WHAT WE DO -->
<?php }



static function contador_resultado($numCOlonias) { ?>
    <!-- WHAT WE DO -->
    <section class="background-black" >
           <div class="container" >
               <div class="row" >
                   <div class="col-lg-12" >
                            <?php if($numCOlonias == 1) {?>
                                <h2 style="color:white; font-weight: bold;">Encontramos en tu colonia <?php echo $numCOlonias; ?> negocio registrado en MrKados.</h2>
                            <?php } else {?> 
                                <h2 style="color:white; font-weight: bold;">Encontramos en tu colonia <?php echo $numCOlonias; ?> negocio registrado en MrKados.</h2>
                            <?php } ?> 
                   </div>
               </div>
           </div>
       </section>
       <!-- END WHAT WE DO -->
<?php }

static function contador_resultadoCategoria($numCOlonias, $categoria) { ?>
    <!-- WHAT WE DO -->
    <section class="background-black" >
           <div class="container" >
               <div class="row" >
                   <div class="col-lg-12" style="text-align:center;">
                        <h1 style="color:white; font-weight: bold;"><?php echo $categoria; ?></h1>
                            <?php if($numCOlonias == 1) {?>
                                <h2 style="color:white; font-weight: bold;">Encontramos <?php echo $numCOlonias; ?> negocio registrado en MrKados.</h2>
                            <?php } else {?> 
                                <h2 style="color:white; font-weight: bold;">Encontramos <?php echo $numCOlonias; ?> negocios registrados en MrKados.</h2>
                            <?php } ?> 
                   </div>
               </div>
           </div>
       </section>
       <!-- END WHAT WE DO -->
<?php }


static function negocios_result_Categoria($conection, $user, $usuarioTipo, $orden, $filtroEnv, $filtroCat, $filtroPag, $cat) { ?>
    <!-- WHAT WE DO -->
    <section class="background-white" >
           <div class="container" >
               <div class="row" >
               <div class="sidebar col-lg-3" >
                    <form method="POST">
                        <input type="text" name="enviado" value="enviado" style="display:none;" >
                        <div style="margin-bottom:2%; width:100%; float:left;  margin-top:5%; background:#ffb800;"> <span><b>Buscar por Tipo de Pago</b></span> </div>
                            <div class="col-12" style=" float:left; margin:0px;">
                                <div style="width:100%;">
                                    <div style="float:left; width:80%; margin:0px;">Efectivo</div>
                                    <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroPago"  value="Efectivo" onchange="this.form.submit()"/></div>
                                </div>
                                <div style="width:100%;">
                                    <div style="float:left; width:80%; margin:0px;">Tarjeta de Credito / Debito</div>
                                    <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroPago"  value="Tarjeta" onchange="this.form.submit()"/></div>
                                </div>
                                <div style="width:100%;">
                                    <div style="float:left; width:80%; margin:0px;">Tienda Depal</div>
                                    <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroPago"  value="Tienda Departamental" onchange="this.form.submit()"/></div>
                                </div>
                                <div style="width:100%;">
                                    <div style="float:left; width:80%; margin:0px;">Transferencia Electronica</div>
                                    <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroPago"  value="Transferencia" onchange="this.form.submit()"/></div>
                                </div>
                                <div style="width:100%;">
                                    <div style="float:left; width:80%; margin:0px;">Deposito en Banco</div>
                                    <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroPago"  value="Deposito" onchange="this.form.submit()"/></div>
                                </div>
                            </div>
                        <div style="margin-bottom:2%; width:100%; float:left; margin-top:5%; background:#ffb800" > <span><b>Buscar por Tipo de Envio</b></span> </div>
                        
                        <div class="col-12" style=" float:left; margin:0px;">
                            <div style="width:100%;">
                                <div style="float:left; width:80%; margin:0px;">Recogerlo en Establecimiento</div>
                                <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv"  value="Recogerlo en el establecimiento" onchange="this.form.submit()"/></div>
                            </div>
                            <div style="width:100%;">
                                <div style="float:left; width:80%; margin:0px;">Rappi</div>
                                <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv"  value="Rappi" onchange="this.form.submit()"/></div>
                            </div>
                            <div style="width:100%;">
                                <div style="float:left; width:80%; margin:0px;">Uber Eats</div>
                                <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv"  value="ubber" onchange="this.form.submit()"/></div>
                            </div>
                            <div style="width:100%;">
                                <div style="float:left; width:80%; margin:0px;">Envio Directo</div>
                                <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv"  value="Envio directo del establecimiento" onchange="this.form.submit()"/></div>
                            </div>
                            <div style="width:100%;">
                                <div style="float:left; width:80%; margin:0px;">Mensajeria</div>
                                <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv"  value="Mensajeria" onchange="this.form.submit()"/></div>
                            </div>
                        </div>
                  </form>
               </div>
                                
               <script>
                    function muestra_ocultaPago()
                    {
                        if (document.getElementById)
                        { //se obtiene el id
                            var el = document.getElementById('pagoToggle'); //se define la variable "el" igual a nuestro div
                             el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
                        }
                    }

                    function muestra_ocultaEnvio()
                    {
                        if (document.getElementById)
                        { //se obtiene el id
                            var el = document.getElementById('envioToggle'); //se define la variable "el" igual a nuestro div
                             el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
                        }
                    }

                    function muestra_ocultaCategoria()
                    {
                        if (document.getElementById)
                        { //se obtiene el id
                            var el = document.getElementById('categoriaToggle'); //se define la variable "el" igual a nuestro div
                             el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
                        }
                    }
        
               </script>
                <!-- AQUI PONER LAS TIENDAS -->
                <div class="col-lg-9">
                    <?php 
                        $numberOfTIendas = 0;
                        $query_Cate = "SELECT * FROM subcategoria WHERE subcat = '$cat'";
                        $result_cate = mysqli_query($conection,$query_Cate);
                        while ($row_cat = mysqli_fetch_assoc($result_cate)) 
                        {
                            $id_cat = $row_cat['id'];
                            $query_rel = "SELECT * FROM rel_tienda_subcategoria WHERE id_subcategoria = '$id_cat'";
                            $result_rel = mysqli_query($conection,$query_rel);

                            while ($row_rel = mysqli_fetch_assoc($result_rel)) 
                            {
                                $numberOfTIendas = $numberOfTIendas + 1;
                                $id_tienda = $row_rel['id_tienda'];

                                if($numberOfTIendas == 0)
                                {
                                    include(__DIR__ . '/noHayTienda.php');
                                }
                                else
                                {
                                    $query_tiendas = "SELECT * FROM tiendas WHERE id = '$id_tienda'";
                                    include(__DIR__ . '/tiendasBuscadorCat.php');
                                }
                            }
                        }
                    ?> 
                </div>
                <!-- FIN PONER TIENDAS -->
              </div>
           </div>
       </section>
       <!-- END WHAT WE DO -->
<?php }

static function mejorar()
{ ?>
<section style="background-image: url('images/blanco-fondo.png');">
                   <!--Team members style 2-->
        <div class="heading-text  text-center">
                    <h4 style="margin-top:1%; color:black;"><b>¿Te gustaría mejorar la<br>imagen de tu negocio?</b></h4>
                    <h5>En Mr.Kado contamos servicios extra-profesionales para que puedas proyectar<br>una imagen de excelencia y calidad a tu marca.</h5>
                </div>
                <div class="row">
                    <div class="col-lg-4" style="background:none;">
                            <div class="team-image">
                                <img src="images/extra/Extra-mrkados-04.png" style="width:50%; margin-left:25%;">
                            </div>
                            <div class="team-desc">
                                <p style="text-align:center; color:black; margin-left:10%; width:80%;"><b>Mejoramos la imagen<br>de tu marca o la hacemos<br>desde cero</b></p>
                            </div>
                    </div>

                    <div class="col-lg-4" style="background:none;">
                            <div class="team-image">
                                <img src="images/extra/Extra-mrkados-03.png" style="width:50%; margin-left:25%;">
                            </div>
                            <div class="team-desc">
                                <p style="text-align:center; color:black; margin-left:10%; width:80%;"><b>Diseñamos cualquier<br>
elemento gráfico o digital</b></p>
                            </div>
                    </div>
                    <div class="col-lg-4" style="background:none;">
                            <div class="team-image">
                                <img src="images/extra/Extra-mrkados-05.png" style="width:50%; margin-left:25%;">
                            </div>
                            <div class="team-desc">
                                <p style="text-align:center; color:black; margin-left:10%; width:80%;"><b>Hacemos tu sitio web<br>
o catálogo digital</b></p>
                            </div>
                    </div>
                    <div class="col-lg-4" style="background:none;">
                            <div class="team-image">
                                <img src="images/extra/Extra-mrkados-06.png" style="width:50%; margin-left:25%;">
                            </div>
                            <div class="team-desc">
                                <p style="text-align:center; color:black; margin-left:10%; width:80%;"><b>Generamos contenido<br>
para redes sociales</b></p>
                            </div>
                    </div>

                    <div class="col-lg-4" style="background:none;">
                            <div class="team-image">
                                <img src="images/extra/Extra-mrkados-08.png" style="width:50%; margin-left:25%;">
                            </div>
                            <div class="team-desc">
                                <p style="text-align:center; color:black; margin-left:10%; width:80%;"><b>Modelado 3d, diseño<br>
arquitectónico, render’s</b></p>
                            </div>
                    </div>

                    <div class="col-lg-4" style="background:none;">
                            <div class="team-image">
                                <img src="images/extra/Extra-mrkados-07.png" style="width:50%; margin-left:25%;">
                            </div>
                            <div class="team-desc">
                                <p style="text-align:center; color:black; margin-left:10%; width:80%;"><b>Videos y animaciones<br>
para proyectar tu marca</b></p>
                            </div>
                    </div>

                    <div class="col-lg-4" style="background:none;">
                            <div class="team-image">
                                <img src="images/extra/Extra-mrkados-09.png" style="width:50%; margin-left:25%;">
                            </div>
                            <div class="team-desc">
                                <p style="text-align:center; color:black; margin-left:10%; width:80%;"><b>Estrategías y difusión<br>
con E-Mail Marketing</b></p>
                            </div>
                    </div>

                    <div class="col-lg-12" style="background:none;">
                        <div class="col-lg-4" style="background:none; margin-left:32%; ">
                            <input data-target="#modal-cotizar" data-toggle="modal" type="button" value="Cotizar ahora" style="width:100%; background:#ffbd00; font-weight:bold; border-color:#ffbd00;" />
                        </div>
                    </div>
                </div>
</section>
                <!-- Open model desplegable enviar colonia -->
        <div class="modal fade" id="modal-cotizar" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <span id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold; font-size:20px; color: black">Cuéntanos más sobre tu idea<br>o proyecto</span>
                        <form method="POST">
                            <div class="col-12" style="float:left; margin-top:2%;">
                                <div class="col-6" style="float:left; ">
                                    <input style="width:100%;  border-radius:5px; color:black;" type="text" name="nameCotizacion" placeholder="Escribe tu nombre completo" required/>
                                </div>
                                <div class="col-6" style="float:left;">
                                    <input style="width:100%; border-radius:5px; " type="text" name="companyCotizacion" placeholder="¿Cómo te llama tu negocio?" />    
                                </div>
                                <div class="col-6" style="float:left; margin-top:2%;">
                                    <input style="width:100%; border-radius:5px; " type="text" name="giroCotizacion" placeholder="¿Cuál es el giro de tu negocio?" required />    
                                </div>
                                <div class="col-6" style="float:left; margin-top:2%;">
                                    <input style="width:100%; border-radius:5px; " type="text" name="serviciosCotizacion" placeholder="¿En cuál de nuestros servicios estás interesado?" />    
                                </div>
                                <div class="col-12" style="float:left; margin-top:2%;">
                                    <textarea style="width:100%; border-radius:5px; color:black;" name="masCotizacion" placeholder="Cuéntanos más sobre lo que estás buscando" required></textarea>
                                </div>
                                <div class="col-4" style="float:left; margin-top:2%; margin-left:30%;">
                                    <input style="width:100%; border-radius:5px; color:white; background:black; border-color:black; font-weight:bold;" type="submit" value="Solicitar presupuesto" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Modal desplegable enviar colonia -->
<?php }

static function valores()
{ ?>
<section style="background-image: url('images/amarillo-back.png');">
                   <!--Team members style 2-->
        <div class="heading-text  text-center">
                    <h4 style="margin-top:1%; color:black;">Cualidades que nos distinguen</h4>
                    <h5>MrKados es la plataforma digital que hace la vida</h5>
                </div>
                <div class="row">
                    <div class="col-lg-4" style="background:none;">
                            <div class="team-image">
                                <img src="images/valores/valor-hermandad.png" style="width:70%; margin-left:13%;">
                            </div>
                            <div class="team-desc">
                                <h3 style="text-align:center; color:black;"><b>Hermandad</b></h3>
                                
                                <p style="text-align:center; color:black; margin-left:10%; width:80%;">sabemos los retos que cualquier
emprendedor puede vivir;
somos la plataforma que te ayudará a
crecer y en el cual puedas confiar</p>
                            </div>
                    </div>

                    <div class="col-lg-4" style="background:none;">
                            <div class="team-image">
                                <img src="images/valores/valor-responsabilidad.png" style="width:70%; margin-left:13%;">
                            </div>
                            <div class="team-desc">
                                <h3 style="text-align:center; color:black;"><b>Responsabilidad</b></h3>
                                
                                <p style="text-align:center; color:black; margin-left:10%; width:80%;">Hacemos nuestro trabajo de manera
profesional y tomamos con seriedad la
información que nos proporcionas
para no difundirla a ningún medio.</p>
                            </div>
                    </div>
                    <div class="col-lg-4" style="background:none;">
                            <div class="team-image">
                                <img src="images/valores/valor-Compromiso.png" style="width:70%; margin-left:13%;">
                            </div>
                            <div class="team-desc">
                                <h3 style="text-align:center; color:black;"><b>Compromiso</b></h3>
                                
                                <p style="text-align:center; color:black; margin-left:10%; width:80%;">Trabajamos de manera ardua
con el fin de brindarte un servicio de
calidad, que sea benéfico

para el crecimiento de nuestra ciudad.</p>
                            </div>
                    </div>
                    <div class="col-lg-4" style="background:none;">
                            <div class="team-image">
                                <img src="images/valores/valor-Fidelidad.png" style="width:70%; margin-left:15%;">
                            </div>
                            <div class="team-desc">
                                <h3 style="text-align:center; color:black;"><b>Fidelidad</b></h3>
                                
                                <p style="text-align:center; color:black; margin-left:10%; width:80%;">Buscamos no discriminar a ningún tipo

de negocio, al contrario,

en caso de ver algún área de oportunidad
les brindamos algunos tips para que
tengan una mejora continua.</p>
                            </div>
                    </div>

                    <div class="col-lg-4" style="background:none;">
                            <div class="team-image">
                                <img src="images/valores/valor-Honestidad.png" style="width:70%; margin-left:15%;">
                            </div>
                            <div class="team-desc">
                                <h3 style="text-align:center; color:black;"><b>Honestidad</b></h3>
                                
                                <p style="text-align:center; color:black; margin-left:10%; width:80%;">Somos transparentes con cada
uno de nuestros clientes y
les brindamos la información lo
más clara posible para evitar
malos entendidos.</p>
                            </div>
                    </div>

                    <div class="col-lg-4" style="background:none;">
                            <div class="team-image">
                                <img src="images/valores/valor-colaboracion.png" style="width:70%; margin-left:15%;">
                            </div>
                            <div class="team-desc">
                                <h3 style="text-align:center; color:black;"><b>Colaboración</b></h3>
                                
                                <p style="text-align:center; color:black; margin-left:10%; width:80%;">Si hay algún tema que
desconocemos, brindamos
el vínculo adecuado para que
tu necesidad sea resuelta de la

mejor manera.</p>
                            </div>
                    </div>
                </div>
</section>
<?php }

static function ayudanos()
{ ?>

<section style="background:#ffb800;">
    <div class="heading-text  text-center">
        <h3 style="color:black;">¡Ayúdanos a difundir nuestra</h3>
        <h3 style="color:black;">plataforma con tus amigos!</h3>

        <div class="redes-sociales" style="color:black; font-size:30px; margin-top:2%;">
                      <a href="https://www.facebook.com/SomosMrKados"><i class="fab fa-facebook-square" style="margin-left:5%; color:black;"></i></a>
                      <a href="https://www.instagram.com/somosmrkados/"><i class="fab fa-instagram" style="margin-left:5%; color:black;"></i></a>
                      <a href="https://www.linkedin.com/in/somosmrkados/"><i class="fab fa-linkedin" style="margin-left:5%; color:black;"></i></a>
                      <a href="https://www.youtube.com/channel/UCEJSBcNAXRa-Izm1ILE8p4w"><i class="fab fa-youtube" style="margin-left:5%; color:black;"></i></a>
        </div>
    </div>
</section>

<?php }

static function resena()
{ ?>

<section style="background-image: url('images/somos/somos05.jpg'); background-size: 100% 100%; height:1500px; background-repeat: no-repeat;">
    <div class="heading-text  text-center">
        <h3 style="color:black;"><b>Un negocio que apoya a negocios reales</b></h3>
    </div>
    <div class="heading-text text-justify" style="width:70%; margin-left:14%;">
        <p style="color:black;">Todo comenzó el marzo del 2020 cuando la pandemia por la Covid 19 llegó a nuestras vidas; viendo como la
            mayoría de los negocios PyMEs que están en nuestra ciudad empezaron a entrar en crisis por no saber que iba
            a pasar con la económica del país, una joven emprendedora decide iniciar este proyecto a través del evento
            “Hackathon 2020”, pues tenía todo el entusiasmo y energía por querer apoyar a pequeños negocios, desde
            tienditas hasta fundaciones y artesanos. Con el paso de los días y debido al impacto positivo y proactivo que
            estaba teniendo (ya que estaba colaborando con personas de todo LatinoAmérica) descubrió que este modelo
            de negocios podía ser escalable, pues eran muchos los empresarios que estaban buscando nuevas formas de
            difusión para no cerrar sus negocios, ya que no contaban con el conocimiento ni la inversión para poder
            implementar las técnicas digitales. Es ahí donde decide asociarse con 2 amigos diseñadores para poder crear
            lo que hoy en día llamamos: MrKados a tu servicio.</p>
        
        <p style="color:black;">
        Tenemos dos objetivos muy simples: ser una plataforma responsable, que promueva el consumo local de
        negocios que tienen productos y servicios de calidad. También buscamos introducir a los pequeños negocios
        al mundo digital, brindando información y asesorías gratuitas para que puedan implementarlas de la manera
        correcta y a un costo sumamente accesible.
        </P>

        <p style="color:black;">
        En MrKados posicionas tu marca, incrementas tu cartera de clientes y mejoramos las áreas de oportunidad
        que tenga tu modelo de negocios, con el fin de que más personas puedan consumir lo que ofreces y estén
        satisfechos por haberte contactado.
        </P>
    </div>
    <div class="heading-text  text-center">
        <h5>¡Ayúdanos a correr la voz! por que unidos podemos salir adelante.</h5>
    </div>
</section>

<?php }

static function negocios_result_cat_fc($estado, $colonia, $ciudad,$conection,$user, $usuarioTipo, $subcat) { ?>
    <!-- WHAT WE DO -->
    <section class="background-white" >
           <div class="container" >
               <div class="row" >
                    <?php 
                        $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND etiquetas LIKE '%$subcat%'; ";
                        $result_tiendas = mysqli_query($conection,$query_tiendas);
                        $numberOfTIendas = 0;
                        
                        if(mysqli_fetch_assoc($result_tiendas) == 0)
                        {
                            $numberOfTIendas = 0;
                        }
                        else
                        {
                            $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND etiquetas LIKE '%$subcat%'; ";
                            $result_tiendas = mysqli_query($conection,$query_tiendas);
                            while ($row = mysqli_fetch_assoc($result_tiendas)) 
                            {
                                $numberOfTIendas = $numberOfTIendas + 1;
                                ?>
                                    <div class="col-lg-4" style="border:1px solid; margin-left:2%;">
                                    <a href="detalleTienda.php?id=<?php echo $row['id']; ?>&correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>"> <div>
                                            <img alt="Shop product image!" src="images/<?php echo $row['logo']; ?>" width="70%">
                                        </div> </a>
                                        <div style="text-align:center;">
                                            <?php echo $row['nombreTienda']; ?>
                                        </div>
                                        <div style="text-align:center;">
                                            <?php echo $row['giro']; ?>
                                        </div>
                                    </div> 
                                <?php
                            }
                        }
                    ?> 
               </div>
           </div>
       </section>
       <!-- END WHAT WE DO -->
<?php }

static function negocios_result_fc_cat($conection,$user, $usuarioTipo, $filtroCat, $filtroEnv, $filtroPag, $orden, $numberOfTIendas) { ?>
    <!-- WHAT WE DO -->
    <section class="background-white" >
           <div class="container" >
               <div class="row" >
               <div class="sidebar col-lg-3" >
               <form method="POST">
                        <input type="text" name="enviado" value="enviado" style="display:none;" >
                        <div style="margin-bottom:2%; width:100%; float:left;  margin-top:5%; background:#ffb800;"> <span><b>Buscar por Tipo de Pago</b></span> </div>
                            <div class="col-12" style=" float:left; margin:0px;">
                                <div style="width:100%;">
                                    <div style="float:left; width:80%; margin:0px;">Efectivo</div>
                                    <?php if($filtroPag == "Efectivo")
                                    { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroPago" checked  value="Efectivo" onchange="this.form.submit()"/></div>
                                    <?php } 
                                    else
                                    { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroPago"  value="Efectivo" onchange="this.form.submit()"/></div>
                                    <?php }
                                    ?>
                                    
                                </div>
                                <div style="width:100%;">
                                    <div style="float:left; width:80%; margin:0px;">Tarjeta de Credito / Debito</div>
                                    <?php if($filtroPag == "Tarjeta")
                                    { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" checked name="filtroPago"  value="Tarjeta" onchange="this.form.submit()"/></div>
                                    <?php } else { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroPago"  value="Tarjeta" onchange="this.form.submit()"/></div>
                                    <?php } ?>
                                </div>
                                <div style="width:100%;">
                                    <div style="float:left; width:80%; margin:0px;">Tienda Depal</div>
                                    <?php if($filtroPag == "Tienda Departamental") { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroPago" checked  value="Tienda Departamental" onchange="this.form.submit()"/></div>
                                    <?php } else { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroPago"  value="Tienda Departamental" onchange="this.form.submit()"/></div>
                                    <?php } ?>
                                </div>
                                <div style="width:100%;">
                                    <div style="float:left; width:80%; margin:0px;">Transferencia Electronica</div>
                                    <?php if($filtroPag == "Transferencia") { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" checked name="filtroPago"  value="Transferencia" onchange="this.form.submit()"/></div>
                                    <?php } else { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio"  name="filtroPago"  value="Transferencia" onchange="this.form.submit()"/></div>
                                    <?php } ?>
                                </div>
                                <div style="width:100%;">
                                    <div style="float:left; width:80%; margin:0px;">Deposito en Banco</div>
                                    <?php if($filtroPag == "Deposito") { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input checked type="radio" name="filtroPago"  value="Deposito" onchange="this.form.submit()"/></div>
                                    <?php } else { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroPago"  value="Deposito" onchange="this.form.submit()"/></div>
                                    <?php } ?>
                                </div>
                            </div>

                        <div style="margin-bottom:2%; width:100%; float:left; margin-top:5%; background:#ffb800" > <span><b>Buscar por Tipo de Envio</b></span> </div>
                        
                        <div class="col-12" style=" float:left; margin:0px;">
                            <div style="width:100%;">
                                <div style="float:left; width:80%; margin:0px;">Recogerlo en Establecimiento</div>
                                <?php if($filtroEnv == "Recogerlo en el establecimiento") { ?>
                                    <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv" checked  value="Recogerlo en el establecimiento" onchange="this.form.submit()"/></div>
                                    <?php } else { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv"  value="Recogerlo en el establecimiento" onchange="this.form.submit()"/></div>
                                <?php } ?>
                            </div>
                            <div style="width:100%;">
                                <div style="float:left; width:80%; margin:0px;">Rappi</div>
                                <?php if($filtroEnv == "Rappi") { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" checked name="filtroEnv"  value="Rappi" onchange="this.form.submit()"/></div>
                                    <?php } else { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv"  value="Rappi" onchange="this.form.submit()"/></div>
                                <?php } ?>
                            </div>
                            <div style="width:100%;">
                                <div style="float:left; width:80%; margin:0px;">Uber Eats</div>
                                <?php if($filtroEnv == "ubber") { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" checked name="filtroEnv"  value="ubber" onchange="this.form.submit()"/></div>
                                    <?php } else { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv"  value="ubber" onchange="this.form.submit()"/></div>
                                <?php } ?>
                                
                            </div>
                            <div style="width:100%;">
                                <div style="float:left; width:80%; margin:0px;">Envio Directo</div>
                                <?php if($filtroEnv == "Envio directo del establecimiento") { ?>
                                    <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv" checked value="Envio directo del establecimiento" onchange="this.form.submit()"/></div>
                                    <?php } else { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv"  value="Envio directo del establecimiento" onchange="this.form.submit()"/></div>
                                <?php } ?>
                            </div>
                            <div style="width:100%;">
                                <div style="float:left; width:80%; margin:0px;">Mensajeria</div>
                                <?php if($filtroEnv == "Mensajeria") { ?>
                                    <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv"  value="Mensajeria" checked onchange="this.form.submit()"/></div>
                                    <?php } else { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv"  value="Mensajeria" onchange="this.form.submit()"/></div>
                                <?php } ?>
                            </div>
                        </div>
                  </form>
               </div>
                                
               <script>
                  
                    function muestra_ocultaPago()
                    {
                        if (document.getElementById)
                        { //se obtiene el id
                            var el = document.getElementById('pagoToggle'); //se define la variable "el" igual a nuestro div
                             el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
                        }
                    }

                    function muestra_ocultaEnvio()
                    {
                        if (document.getElementById)
                        { //se obtiene el id
                            var el = document.getElementById('envioToggle'); //se define la variable "el" igual a nuestro div
                             el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
                        }
                    }

                    function muestra_ocultaCategoria()
                    {
                        if (document.getElementById)
                        { //se obtiene el id
                            var el = document.getElementById('categoriaToggle'); //se define la variable "el" igual a nuestro div
                             el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
                        }
                    }
        
               </script>
               <div class="col-lg-9">
                    <?php 
                    if($numberOfTIendas != 0)
                    {
                        if($filtroEnv != "" && $filtroPag != "")
                        {
                            $query_Cate = "SELECT * FROM subcategoria WHERE subcat = '$filtroCat'";
                            $result_cate = mysqli_query($conection,$query_Cate);
                            while ($row_cat = mysqli_fetch_assoc($result_cate)) 
                            {
                                $id_cat = $row_cat['id'];
                                $query_rel = "SELECT * FROM rel_tienda_subcategoria WHERE id_subcategoria = '$id_cat'";
                                $result_rel = mysqli_query($conection,$query_rel);
                            
                                while ($row_rel = mysqli_fetch_assoc($result_rel)) 
                                {
                                    $id_tienda = $row_rel['id_tienda'];
                                    $query_tiendas = "SELECT * FROM tiendas WHERE id = '$id_tienda' AND metodoPago LIKE '%$filtroPag%' AND tiposEntrega LIKE '%$filtroEnv%'";

                                    include(__DIR__ . '/tiendasBuscadorCat.php');
                                }
                            }
                        } // FIn if con 2 filtros pago y envio
                        else  if($filtroPag != "")
                        {
                            $query_Cate = "SELECT * FROM subcategoria WHERE subcat = '$filtroCat'";
                            $result_cate = mysqli_query($conection,$query_Cate);
                            while ($row_cat = mysqli_fetch_assoc($result_cate)) 
                            {
                                $id_cat = $row_cat['id'];
                                $query_rel = "SELECT * FROM rel_tienda_subcategoria WHERE id_subcategoria = '$id_cat'";
                                $result_rel = mysqli_query($conection,$query_rel);
                            
                                while ($row_rel = mysqli_fetch_assoc($result_rel)) 
                                {
                                    $id_tienda = $row_rel['id_tienda'];
                                    $query_tiendas = "SELECT * FROM tiendas WHERE id = '$id_tienda' AND metodoPago LIKE '%$filtroPag%'";
                                    $result_tiendas = mysqli_query($conection,$query_tiendas);

                                    include(__DIR__ . '/tiendasBuscadorCat.php');
                                }
                            }  
                        } // FIn if con 1 filtros pago
                        else  if($filtroEnv != "")
                        {
                            $query_Cate = "SELECT * FROM subcategoria WHERE subcat = '$filtroCat'";
                            $result_cate = mysqli_query($conection,$query_Cate);
                            while ($row_cat = mysqli_fetch_assoc($result_cate)) 
                            {
                                $id_cat = $row_cat['id'];
                                $query_rel = "SELECT * FROM rel_tienda_subcategoria WHERE id_subcategoria = '$id_cat'";
                                $result_rel = mysqli_query($conection,$query_rel);
                            
                                while ($row_rel = mysqli_fetch_assoc($result_rel)) 
                                {
                                    $id_tienda = $row_rel['id_tienda'];
                                    $query_tiendas = "SELECT * FROM tiendas WHERE id = '$id_tienda' AND tiposEntrega LIKE '%$filtroEnv%'";
                                    $result_tiendas = mysqli_query($conection,$query_tiendas);

                                    include(__DIR__ . '/tiendasBuscadorCat.php');
                                }
                            }  
                        } // FIn if con 1 envio 
                    }
                    else
                    {
                        include(__DIR__ . '/noHayTienda.php');
                    }
                    ?> 
                </div>
              </div>
           </div>
       </section>
       <!-- END WHAT WE DO -->
<?php }

static function negocios_result_fc($estado, $colonia, $ciudad,$conection,$user, $usuarioTipo, $filtroCat, $filtroEnv, $filtroPag, $orden) { ?>
    <!-- WHAT WE DO -->
    <section class="background-white" >
           <div class="container" >
               <div class="row" >
               <div class="sidebar col-lg-3" >
               <form method="POST">
                        <input type="text" name="enviado" value="enviado" style="display:none;" >
                        <div style="margin-bottom:2%; width:100%; float:left;  margin-top:5%; background:#ffb800;"> <span><b>Buscar por Tipo de Pago</b></span> </div>
                            <div class="col-12" style=" float:left; margin:0px;">
                                <div style="width:100%;">
                                    <div style="float:left; width:80%; margin:0px;">Efectivo</div>
                                    <?php if($filtroPag == "Efectivo")
                                    { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroPago" checked  value="Efectivo" onchange="this.form.submit()"/></div>
                                    <?php } 
                                    else
                                    { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroPago"  value="Efectivo" onchange="this.form.submit()"/></div>
                                    <?php }
                                    ?>
                                    
                                </div>
                                <div style="width:100%;">
                                    <div style="float:left; width:80%; margin:0px;">Tarjeta de Credito / Debito</div>
                                    <?php if($filtroPag == "Tarjeta")
                                    { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" checked name="filtroPago"  value="Tarjeta" onchange="this.form.submit()"/></div>
                                    <?php } else { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroPago"  value="Tarjeta" onchange="this.form.submit()"/></div>
                                    <?php } ?>
                                </div>
                                <div style="width:100%;">
                                    <div style="float:left; width:80%; margin:0px;">Tienda Depal</div>
                                    <?php if($filtroPag == "Tienda Departamental") { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroPago" checked  value="Tienda Departamental" onchange="this.form.submit()"/></div>
                                    <?php } else { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroPago"  value="Tienda Departamental" onchange="this.form.submit()"/></div>
                                    <?php } ?>
                                </div>
                                <div style="width:100%;">
                                    <div style="float:left; width:80%; margin:0px;">Transferencia Electronica</div>
                                    <?php if($filtroPag == "Transferencia") { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" checked name="filtroPago"  value="Transferencia" onchange="this.form.submit()"/></div>
                                    <?php } else { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio"  name="filtroPago"  value="Transferencia" onchange="this.form.submit()"/></div>
                                    <?php } ?>
                                </div>
                                <div style="width:100%;">
                                    <div style="float:left; width:80%; margin:0px;">Deposito en Banco</div>
                                    <?php if($filtroPag == "Deposito") { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input checked type="radio" name="filtroPago"  value="Deposito" onchange="this.form.submit()"/></div>
                                    <?php } else { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroPago"  value="Deposito" onchange="this.form.submit()"/></div>
                                    <?php } ?>
                                </div>
                            </div>

                        <div style="margin-bottom:2%; width:100%; float:left; margin-top:5%; background:#ffb800" > <span><b>Buscar por Tipo de Envio</b></span> </div>
                        
                        <div class="col-12" style=" float:left; margin:0px;">
                            <div style="width:100%;">
                                <div style="float:left; width:80%; margin:0px;">Recogerlo en Establecimiento</div>
                                <?php if($filtroEnv == "Recogerlo en el establecimiento") { ?>
                                    <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv" checked  value="Recogerlo en el establecimiento" onchange="this.form.submit()"/></div>
                                    <?php } else { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv"  value="Recogerlo en el establecimiento" onchange="this.form.submit()"/></div>
                                <?php } ?>
                            </div>
                            <div style="width:100%;">
                                <div style="float:left; width:80%; margin:0px;">Rappi</div>
                                <?php if($filtroEnv == "Rappi") { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" checked name="filtroEnv"  value="Rappi" onchange="this.form.submit()"/></div>
                                    <?php } else { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv"  value="Rappi" onchange="this.form.submit()"/></div>
                                <?php } ?>
                            </div>
                            <div style="width:100%;">
                                <div style="float:left; width:80%; margin:0px;">Uber Eats</div>
                                <?php if($filtroEnv == "ubber") { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" checked name="filtroEnv"  value="ubber" onchange="this.form.submit()"/></div>
                                    <?php } else { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv"  value="ubber" onchange="this.form.submit()"/></div>
                                <?php } ?>
                                
                            </div>
                            <div style="width:100%;">
                                <div style="float:left; width:80%; margin:0px;">Envio Directo</div>
                                <?php if($filtroEnv == "Envio directo del establecimiento") { ?>
                                    <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv" checked value="Envio directo del establecimiento" onchange="this.form.submit()"/></div>
                                    <?php } else { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv"  value="Envio directo del establecimiento" onchange="this.form.submit()"/></div>
                                <?php } ?>
                            </div>
                            <div style="width:100%;">
                                <div style="float:left; width:80%; margin:0px;">Mensajeria</div>
                                <?php if($filtroEnv == "Mensajeria") { ?>
                                    <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv"  value="Mensajeria" checked onchange="this.form.submit()"/></div>
                                    <?php } else { ?>
                                        <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv"  value="Mensajeria" onchange="this.form.submit()"/></div>
                                <?php } ?>
                            </div>
                        </div>

                        
                       
                  </form>
               </div>
                                
               <script>
                  
                    function muestra_ocultaPago()
                    {
                        if (document.getElementById)
                        { //se obtiene el id
                            var el = document.getElementById('pagoToggle'); //se define la variable "el" igual a nuestro div
                             el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
                        }
                    }

                    function muestra_ocultaEnvio()
                    {
                        if (document.getElementById)
                        { //se obtiene el id
                            var el = document.getElementById('envioToggle'); //se define la variable "el" igual a nuestro div
                             el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
                        }
                    }

                    function muestra_ocultaCategoria()
                    {
                        if (document.getElementById)
                        { //se obtiene el id
                            var el = document.getElementById('categoriaToggle'); //se define la variable "el" igual a nuestro div
                             el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
                        }
                    }
        
               </script>
               <div class="col-lg-9">
                    <?php 
                        if($filtroEnv != "" && $filtroCat != "" && $filtroPag != "")
                        {
                            $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND etiquetas LIKE '%$filtroCat%' AND metodoPago LIKE '%$filtroPag%' AND tiposEntrega LIKE '%$filtroEnv%'";    
                          
                            if($orden == "")
                            {
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "ascName")
                            {
                                $query_tiendas = $query_tiendas." ". "order by nombreTienda ASC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "descName")
                            {
                                $query_tiendas = $query_tiendas." ". "order by nombreTienda DESC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "ascCalificacion")
                            {
                                $query_tiendas = $query_tiendas." ". "order by correo ASC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "descCalificacion")
                            {
                                $query_tiendas = $query_tiendas." ". "order by correo DESC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else
                            {
                                //$query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND etiquetas LIKE '%$filtroCat%'; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            
                            //agregar aqui validacion si hay o no tiendas
                            if(mysqli_fetch_assoc($result_tiendas) == 0)
                            {
                                include(__DIR__ . '/noHayTienda.php');
                            }
                            else
                            //FIN agregar aqui validacion si hay o no tiendas
                            {
                                include(__DIR__ . '/tiendasBuscadorCat.php');
                            }

                        } // FIn if con 3 filtros
                        else  if($filtroEnv != "" && $filtroCat != "")
                        {
                            $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND etiquetas LIKE '%$filtroCat%' AND tiposEntrega LIKE '%$filtroEnv%'";    
                          
                            if($orden == "")
                            {
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "ascName")
                            {
                                $query_tiendas = $query_tiendas." ". "order by nombreTienda ASC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "descName")
                            {
                                $query_tiendas = $query_tiendas." ". "order by nombreTienda DESC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "ascCalificacion")
                            {
                                $query_tiendas = $query_tiendas." ". "order by correo ASC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "descCalificacion")
                            {
                                $query_tiendas = $query_tiendas." ". "order by correo DESC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else
                            {
                                //$query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND etiquetas LIKE '%$filtroCat%'; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            
                             //agregar aqui validacion si hay o no tiendas
                             if(mysqli_fetch_assoc($result_tiendas) == 0)
                             {
                                 include(__DIR__ . '/noHayTienda.php');
                             }
                             else
                             //FIN agregar aqui validacion si hay o no tiendas
                             {
                                 include(__DIR__ . '/tiendasBuscadorCat.php');
                             }

                        } // FIn if con 2 filtros
                        else  if($filtroEnv != "" && $filtroPag != "")
                        {
                            $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND metodoPago LIKE '%$filtroPag%' AND tiposEntrega LIKE '%$filtroEnv%'";    
                          
                            if($orden == "")
                            {
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "ascName")
                            {
                                $query_tiendas = $query_tiendas." ". "order by nombreTienda ASC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "descName")
                            {
                                $query_tiendas = $query_tiendas." ". "order by nombreTienda DESC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "ascCalificacion")
                            {
                                $query_tiendas = $query_tiendas." ". "order by correo ASC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "descCalificacion")
                            {
                                $query_tiendas = $query_tiendas." ". "order by correo DESC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else
                            {
                                //$query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND etiquetas LIKE '%$filtroCat%'; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            
                             //agregar aqui validacion si hay o no tiendas
                             if(mysqli_fetch_assoc($result_tiendas) == 0)
                             {
                                 include(__DIR__ . '/noHayTienda.php');
                             }
                             else
                             //FIN agregar aqui validacion si hay o no tiendas
                             {
                                 include(__DIR__ . '/tiendasBuscadorCat.php');
                             }
                        } // FIn if con 2 filtros pago y envio
                        else  if($filtroCat != "" && $filtroPag != "")
                        {
                            $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND metodoPago LIKE '%$filtroPag%' AND etiquetas LIKE '%$filtroCat%'";    
                          
                            if($orden == "")
                            {
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "ascName")
                            {
                                $query_tiendas = $query_tiendas." ". "order by nombreTienda ASC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "descName")
                            {
                                $query_tiendas = $query_tiendas." ". "order by nombreTienda DESC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "ascCalificacion")
                            {
                                $query_tiendas = $query_tiendas." ". "order by correo ASC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "descCalificacion")
                            {
                                $query_tiendas = $query_tiendas." ". "order by correo DESC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else
                            {
                                //$query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND etiquetas LIKE '%$filtroCat%'; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }

                             //agregar aqui validacion si hay o no tiendas
                             if(mysqli_fetch_assoc($result_tiendas) == 0)
                             {
                                 include(__DIR__ . '/noHayTienda.php');
                             }
                             else
                             //FIN agregar aqui validacion si hay o no tiendas
                             {
                                 include(__DIR__ . '/tiendasBuscadorCat.php');
                             }

                        } // FIn if con 2 filtros pago y categoria
                        else  if($filtroCat != "")
                        {
                            $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND etiquetas LIKE '%$filtroCat%'";                              
                            if($orden == "")
                            {
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "ascName")
                            {
                                $query_tiendas = $query_tiendas." ". "order by nombreTienda ASC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "descName")
                            {
                                $query_tiendas = $query_tiendas." ". "order by nombreTienda DESC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "ascCalificacion")
                            {
                                $query_tiendas = $query_tiendas." ". "order by correo ASC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "descCalificacion")
                            {
                                $query_tiendas = $query_tiendas." ". "order by correo DESC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else
                            {
                                //$query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND etiquetas LIKE '%$filtroCat%'; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            
                             //agregar aqui validacion si hay o no tiendas
                             if(mysqli_fetch_assoc($result_tiendas) == 0)
                             {
                                 include(__DIR__ . '/noHayTienda.php');
                             }
                             else
                             //FIN agregar aqui validacion si hay o no tiendas
                             {
                                 include(__DIR__ . '/tiendasBuscadorCat.php');
                             }

                        } // FIn if con 1 filtros categoria
                        else  if($filtroPag != "")
                        {
                            $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND metodoPago LIKE '%$filtroPag%'";    
                          
                            if($orden == "")
                            {
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "ascName")
                            {
                                $query_tiendas = $query_tiendas." ". "order by nombreTienda ASC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "descName")
                            {
                                $query_tiendas = $query_tiendas." ". "order by nombreTienda DESC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "ascCalificacion")
                            {
                                $query_tiendas = $query_tiendas." ". "order by correo ASC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "descCalificacion")
                            {
                                $query_tiendas = $query_tiendas." ". "order by correo DESC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else
                            {
                                //$query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND etiquetas LIKE '%$filtroCat%'; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            
                             //agregar aqui validacion si hay o no tiendas
                             if(mysqli_fetch_assoc($result_tiendas) == 0)
                             {
                                 include(__DIR__ . '/noHayTienda.php');
                             }
                             else
                             //FIN agregar aqui validacion si hay o no tiendas
                             {
                                 include(__DIR__ . '/tiendasBuscadorCat.php');
                             }

                        } // FIn if con 1 filtros pago
                        else  if($filtroEnv != "")
                        {
                            $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND tiposEntrega LIKE '%$filtroEnv%'";    
                          
                            if($orden == "")
                            {
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "ascName")
                            {
                                $query_tiendas = $query_tiendas." ". "order by nombreTienda ASC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "descName")
                            {
                                $query_tiendas = $query_tiendas." ". "order by nombreTienda DESC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "ascCalificacion")
                            {
                                $query_tiendas = $query_tiendas." ". "order by correo ASC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "descCalificacion")
                            {
                                $query_tiendas = $query_tiendas." ". "order by correo DESC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else
                            {
                                //$query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND etiquetas LIKE '%$filtroCat%'; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            
                             //agregar aqui validacion si hay o no tiendas
                             if(mysqli_fetch_assoc($result_tiendas) == 0)
                             {
                                 include(__DIR__ . '/noHayTienda.php');
                             }
                             else
                             //FIN agregar aqui validacion si hay o no tiendas
                             {
                                 include(__DIR__ . '/tiendasBuscadorCat.php');
                             }
                        } // FIn if con 1 envio 

                    ?> 
                </div>
              </div>
           </div>
       </section>
       <!-- END WHAT WE DO -->
<?php }

static function negocios_result_fpago($estado, $colonia, $ciudad,$conection,$user, $usuarioTipo, $filtroCat, $orden) { ?>
    <!-- WHAT WE DO -->
    <section class="background-white" >
           <div class="container" >
               <div class="row" >
               <div class="sidebar col-lg-3" >
                   <div style="margin-bottom:2%; background:#ffb800;" onclick="muestra_ocultaCategoria()"> <span><b>Buscar por categoria</b></span> </div>
                   <div style="display:none;" id="categoriaToggle"> 
                    <form method="POST">
                            <table style="margin-top:2%;">  
                            <?php 
                                    $query_cat = "SELECT * FROM subcategoria";
                                    $result_cat = mysqli_query($conection,$query_cat);
                                    while ($rowCat = mysqli_fetch_assoc($result_cat)) { ?>
                                    
                                        <tr>
                                            <td><?php echo $rowCat['subcat']; ?></td>
                                            <td><input type="radio" name="filtroCategoria" value="<?php echo $rowCat['subcat']; ?>" onchange="this.form.submit()"/></td>
                                        </tr>
                                <?php } ?>
                            </table>
                        </form>
                    </div>
                    <div style="margin-bottom:2%; margin-top:5%; background:#ffb800" onclick="muestra_ocultaEnvio()"> <span><b>Buscar por Tipo de Envio</b></span> </div>
                    <div style="display:none;" id="envioToggle">
                        <form method="POST">
                        <table style="margin-top:2%;">
                                <tr>
                                    <td>Recogerlo en Establecimiento</td>
                                    <td><input type="radio" name="filtroEnv"  value="Recogerlo en el establecimiento" onchange="this.form.submit()"/></td>
                                </tr>
                                <tr>
                                    <td>Rappi</td>
                                    <td><input type="radio" name="filtroEnv"  value="Rappi" onchange="this.form.submit()"/></td>
                                </tr>
                                <tr>
                                    <td>Uber Eats</td>
                                    <td><input type="radio" name="filtroEnv"  value="ubber" onchange="this.form.submit()"/></td>
                                </tr>
                                <tr>
                                    <td>Envio Directo</td>
                                    <td><input type="radio" name="filtroEnv"  value="Envio directo del establecimiento" onchange="this.form.submit()"/></td>
                                </tr>
                                <tr>
                                    <td>Mensajeria</td>
                                    <td><input type="radio" name="filtroEnv"  value="Mensajeria" onchange="this.form.submit()"/></td>
                                </tr>
                            </table>
                        </form>
                    </div>

                    <div style="margin-bottom:2%;  margin-top:5%; background:#ffb800;" onclick="muestra_ocultaPago()"> <span><b>Buscar por Tipo de Pago</b></span> </div>
                    <div style="display:none;" id="pagoToggle">
                        <form method="POST">
                            <table style="margin-top:2%;">
                                <tr>
                                    <td>Efectivo</td>
                                    <td><input type="radio" name="filtroPago"  value="Efectivo" onchange="this.form.submit()"/></td>
                                </tr>
                                <tr>
                                    <td>Tarjeta de Credito / Debito</td>
                                    <td><input type="radio" name="filtroPago"  value="Tarjeta" onchange="this.form.submit()"/></td>
                                </tr>
                                <tr>
                                    <td>Tienda Depal</td>
                                    <td><input type="radio" name="filtroPago"  value="Tienda Departamental" onchange="this.form.submit()"/></td>
                                </tr>
                                <tr>
                                    <td>Transferencia Electronica</td>
                                    <td><input type="radio" name="filtroPago"  value="Transferencia" onchange="this.form.submit()"/></td>
                                </tr>
                                <tr>
                                    <td>Deposito en Banco</td>
                                    <td><input type="radio" name="filtroPago"  value="Deposito" onchange="this.form.submit()"/></td>
                                </tr>
                            </table>
                        </form>
                    </div>
               </div>
                                
               <script>
                  
                    function muestra_ocultaPago()
                    {
                        if (document.getElementById)
                        { //se obtiene el id
                            var el = document.getElementById('pagoToggle'); //se define la variable "el" igual a nuestro div
                             el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
                        }
                    }

                    function muestra_ocultaEnvio()
                    {
                        if (document.getElementById)
                        { //se obtiene el id
                            var el = document.getElementById('envioToggle'); //se define la variable "el" igual a nuestro div
                             el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
                        }
                    }

                    function muestra_ocultaCategoria()
                    {
                        if (document.getElementById)
                        { //se obtiene el id
                            var el = document.getElementById('categoriaToggle'); //se define la variable "el" igual a nuestro div
                             el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
                        }
                    }
        
               </script>

               <div class="col-lg-9">
                    <?php 
                        $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND metodoPago LIKE '%$filtroCat%'; ";
                        $result_tiendas = mysqli_query($conection,$query_tiendas);
                        $numberOfTIendas = 0;
                        if(mysqli_fetch_assoc($result_tiendas) == 0)
                        {
                            $numberOfTIendas = 0;
                        }
                        else
                        {
                            if($orden == "ascName")
                            {
                                $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND metodoPago LIKE '%$filtroCat%' order by nombreTienda ASC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "descName")
                            {
                                $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND metodoPago LIKE '%$filtroCat%' order by nombreTienda DESC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "ascCalificacion")
                            {
                                $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND metodoPago LIKE '%$filtroCat%' order by correo ASC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "descCalificacion")
                            {
                                $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND metodoPago LIKE '%$filtroCat%' order by nombreTienda DESC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else
                            {
                                $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND metodoPago LIKE '%$filtroCat%'; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }

                            
                            while ($row = mysqli_fetch_assoc($result_tiendas)) 
                            {
                                $numberOfTIendas = $numberOfTIendas + 1;
                                ?>
                                  <a href="detalleTienda.php?id=<?php echo $row['id']; ?>&correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo ?>">  <div class="col-lg-4" style="border:1px solid; margin-right:2%; float:left;">
                                        <div>
                                            <img alt="Shop product image!" src="images/<?php echo $row['logo']; ?>" width="70%">
                                        </div>
                                        <div style="text-align:center;">
                                            <?php echo $row['nombreTienda']; ?>
                                        </div>
                                        <div style="text-align:center;">
                                            <?php echo $row['giro']; ?>
                                        </div>
                                    </div> </a>
                                <?php
                            }
                        }
                    ?> 
                </div>
              </div>
           </div>
       </section>
       <!-- END WHAT WE DO -->
<?php }

static function topMenuKind($user, $usuarioTipo, $kinfOfCat)
{ ?>
        <div class="row" style="background:#ffb800"> 
            <div class="col-lg-2" >
            </div>

            <div class="col-lg-2" >
                <span>Buscar por:</span>
            </div>

            <div class="col-lg-3" >
                <select onchange="location = this.value;">
                    <option value="tiendasBusqueda.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>">Ordenar por nombre</option>
                    <option value="tiendasBusqueda.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>&orden=ascName">Ordenar por nombre ASC</option>
                    <option value="tiendasBusqueda.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>&orden=descName">Ordenar por nombre DESC</option>
                </select>
            </div>

            <div class="col-lg-3" >
                <select onchange="location = this.value;">
                    <option value="tiendasBusqueda.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>">Ordenar por calificacion</option>
                    <option value="tiendasBusqueda.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>&orden=ascCalificacion">Ordenar por calificacion ASC</option>
                    <option value="tiendasBusqueda.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>&orden=descCalificacion">Ordenar por calificacion DESC</option>
                </select>
            </div>
        </div>
<?php }

static function topMenu($user, $usuarioTipo, $estado, $ciudad, $colonia)
{ ?>
        <div class="row" style="background:#ffb800"> 
            <div class="col-lg-2" >
            </div>

            <div class="col-lg-2" >
                <span>Buscar por:</span>
            </div>

            <div class="col-lg-3" >
                <select onchange="location = this.value;">
                    <option value="tiendasBusqueda.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>">Ordenar por nombre</option>
                    <option value="tiendasBusqueda.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>&orden=ascName">Ordenar por nombre ASC</option>
                    <option value="tiendasBusqueda.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>&orden=descName">Ordenar por nombre DESC</option>
                </select>
            </div>

            <div class="col-lg-3" >
                <select onchange="location = this.value;">
                    <option value="tiendasBusqueda.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>">Ordenar por calificacion</option>
                    <option value="tiendasBusqueda.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>&orden=ascCalificacion">Ordenar por calificacion ASC</option>
                    <option value="tiendasBusqueda.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>&orden=descCalificacion">Ordenar por calificacion DESC</option>
                </select>
            </div>
        </div>
<?php }


static function topMenu_fc($user, $usuarioTipo, $estado, $ciudad, $colonia, $filtroCat, $filtroEnv, $filtroPag)
{ ?>
        <div class="row" style="background:#ffb800"> 
            <div class="col-lg-2" >
            </div>

            <div class="col-lg-2" >
                <form method="POST">
                    <input style="display:none;" type="text" value="1" name="limpiar">
                    <input type="submit" value="Limpiar Filtro"> 
                </form>
            </div>

            <div class="col-lg-3" >
                <select onchange="location = this.value;">
                    <option value="tiendasBusqueda-fc.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&fcat=<?php echo $filtroCat ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>">Ordenar por nombre</option>
                    <option value="tiendasBusqueda-fc.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&fcat=<?php echo $filtroCat ?>&fen=<?php echo $filtroEnv ?>&fpan=<?php echo $filtroPag ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>&orden=ascName">Ordenar por nombre ASC</option>
                    <option value="tiendasBusqueda-fc.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&fcat=<?php echo $filtroCat ?>&fen=<?php echo $filtroEnv ?>&fpan=<?php echo $filtroPag ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>&orden=descName">Ordenar por nombre DESC</option>
                </select>
            </div>

            <div class="col-lg-3" >
                <select onchange="location = this.value;">
                    <option value="tiendasBusqueda-fc.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&fcat=<?php echo $filtroCat ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>">Ordenar por calificacion</option>
                    <option value="tiendasBusqueda-fc.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&fcat=<?php echo $filtroCat ?>&fen=<?php echo $filtroEnv ?>&fpan=<?php echo $filtroPag ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>&orden=ascCalificacion">Ordenar por calificacion ASC</option>
                    <option value="tiendasBusqueda-fc.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&fcat=<?php echo $filtroCat ?>&fen=<?php echo $filtroEnv ?>&fpan=<?php echo $filtroPag ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>&orden=descCalificacion">Ordenar por calificacion DESC</option>
                </select>
            </div>
        </div>
<?php }

static function topMenu_fc_cat($user, $usuarioTipo, $filtroEnv, $filtroPag)
{ ?>
        <div class="row" style="background:#ffb800"> 
            <div class="col-lg-2" >
            </div>

            <div class="col-lg-2" >
                <form method="POST">
                    <input style="display:none;" type="text" value="1" name="limpiar">
                    <input type="submit" value="Limpiar Filtro"> 
                </form>
            </div>
        </div>
<?php }


static function topMenu_Categorias($user, $usuarioTipo, $categoria)
{ ?>
        <div class="row" style="background:#ffb800"> 
            <div class="col-lg-2" >
            </div>

            <div class="col-lg-2" >
                <span>Buscar por:</span>
            </div>

            <div class="col-lg-2" >
                <form method="POST">
                    <input style="display:none;" type="text" value="1" name="limpiar">
                    <input type="text" name="cat" value="<?php echo $categoria; ?>" style="display:none;"/>
                    <input type="submit" value="Limpiar Filtro"> 
                </form>
            </div>

            <div class="col-lg-3" >
                <select onchange="location = this.value;">
                    <option value="tiendasBusquedaCategorias.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&categoria=<?php echo $categoria ?>">Ordenar por nombre</option>
                    <option value="tiendasBusquedaCategorias.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&categoria=<?php echo $categoria ?>&orden=ascName">Ordenar por nombre ASC</option>
                    <option value="tiendasBusquedaCategorias.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&categoria=<?php echo $categoria ?>&orden=descName">Ordenar por nombre DESC</option>
                </select>
            </div>

            <div class="col-lg-3" >
                <select onchange="location = this.value;">
                    <option value="tiendasBusquedaCategorias.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&categoria=<?php echo $categoria ?>">Ordenar por calificacion</option>
                    <option value="tiendasBusquedaCategorias.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&categoria=<?php echo $categoria ?>&orden=ascCalificacion">Ordenar por calificacion ASC</option>
                    <option value="tiendasBusquedaCategorias.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&categoria=<?php echo $categoria ?>&orden=descCalificacion">Ordenar por calificacion DESC</option>
                </select>
            </div>
        </div>
<?php }

static function topMenu_fpago($user, $usuarioTipo, $estado, $ciudad, $colonia, $filtropago)
{ ?>
        <div class="row" style="background:#ffb800"> 
            <div class="col-lg-2" >
            </div>

            <div class="col-lg-2" >
                <span>Buscar por:</span>
            </div>

            <div class="col-lg-3" >
                <select onchange="location = this.value;">
                    <option value="tiendasBusqueda-fpago.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&fap=<?php echo $filtropago ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>">Ordenar por nombre</option>
                    <option value="tiendasBusqueda-fpago.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&fap=<?php echo $filtropago ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>&orden=ascName">Ordenar por nombre ASC</option>
                    <option value="tiendasBusqueda-fpago.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&fap=<?php echo $filtropago ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>&orden=descName">Ordenar por nombre DESC</option>
                </select>
            </div>

            <div class="col-lg-3" >
                <select onchange="location = this.value;">
                    <option value="tiendasBusqueda-fpago.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&fap=<?php echo $filtropago ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>">Ordenar por calificacion</option>
                    <option value="tiendasBusqueda-fpago.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&fap=<?php echo $filtropago ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>&orden=ascCalificacion">Ordenar por calificacion ASC</option>
                    <option value="tiendasBusqueda-fpago.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&fap=<?php echo $filtropago ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>&orden=descCalificacion">Ordenar por calificacion DESC</option>
                </select>
            </div>
        </div>
<?php }

static function topMenu_fen($user, $usuarioTipo, $estado, $ciudad, $colonia, $filtropago)
{ ?>
        <div class="row" style="background:#ffb800"> 
            <div class="col-lg-2" >
            </div>

            <div class="col-lg-2" >
                <span>Buscar por:</span>
            </div>

            <div class="col-lg-3" >
                <select onchange="location = this.value;">
                    <option value="tiendasBusqueda-fen.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&fen=<?php echo $filtropago ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>">Ordenar por nombre</option>
                    <option value="tiendasBusqueda-fen.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&fen=<?php echo $filtropago ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>&orden=ascName">Ordenar por nombre ASC</option>
                    <option value="tiendasBusqueda-fen.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&fen=<?php echo $filtropago ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>&orden=descName">Ordenar por nombre DESC</option>
                </select>
            </div>

            <div class="col-lg-3" >
                <select onchange="location = this.value;">
                    <option value="tiendasBusqueda-fen.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&fen=<?php echo $filtropago ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>">Ordenar por calificacion</option>
                    <option value="tiendasBusqueda-fen.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&fen=<?php echo $filtropago ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>&orden=ascCalificacion">Ordenar por calificacion ASC</option>
                    <option value="tiendasBusqueda-fen.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>&fen=<?php echo $filtropago ?>&estado=<?php echo $estado; ?>&ciudad=<?php echo $ciudad; ?>&colonia=<?php echo $colonia; ?>&orden=descCalificacion">Ordenar por calificacion DESC</option>
                </select>
            </div>
        </div>
<?php }

static function negocios_result_fen($estado, $colonia, $ciudad,$conection,$user, $usuarioTipo, $filtroCat, $orden) { ?>
    <!-- WHAT WE DO -->
    <section class="background-white" >
           <div class="container" >
               <div class="row" >
               <div class="sidebar col-lg-3" >
                   <div style="margin-bottom:2%; background:#ffb800;" onclick="muestra_ocultaCategoria()"> <span><b>Buscar por categoria</b></span> </div>
                   <div style="display:none;" id="categoriaToggle"> 
                    <form method="POST">
                            <input type="text" name="enviado" value="enviado" style="display:none;" >
                            
                            <div style="margin-bottom:2%; margin-top:5%; background:#ffb800" onclick="muestra_ocultaEnvio()"> <span><b>Buscar por Tipo de Envio</b></span> </div>
                            <div style="display:none;" id="envioToggle">
                            <!-- <form method="POST"> -->
                                <table style="margin-top:2%;">
                                        <tr>
                                            <td>Recogerlo en Establecimiento</td>
                                            <td><input type="radio" name="filtroEnv"  value="Recogerlo en el establecimiento" onchange="this.form.submit()"/></td>
                                        </tr>
                                        <tr>
                                            <td>Rappi</td>
                                            <td><input type="radio" name="filtroEnv"  value="Rappi" onchange="this.form.submit()"/></td>
                                        </tr>
                                        <tr>
                                            <td>Uber Eats</td>
                                            <td><input type="radio" name="filtroEnv"  value="ubber" onchange="this.form.submit()"/></td>
                                        </tr>
                                        <tr>
                                            <td>Envio Directo</td>
                                            <td><input type="radio" name="filtroEnv"  value="Envio directo del establecimiento" onchange="this.form.submit()"/></td>
                                        </tr>
                                        <tr>
                                            <td>Mensajeria</td>
                                            <td><input type="radio" name="filtroEnv"  value="Mensajeria" onchange="this.form.submit()"/></td>
                                        </tr>
                                    </table>
                            <!-- </form> -->
                            </div>

                            <div style="margin-bottom:2%;  margin-top:5%; background:#ffb800;" onclick="muestra_ocultaPago()"> <span><b>Buscar por Tipo de Pago</b></span> </div>
                            <div style="display:none;" id="pagoToggle">
                            <!-- <form method="POST"> -->
                                    <table style="margin-top:2%;">
                                        <tr>
                                            <td>Efectivo</td>
                                            <td><input type="radio" name="filtroPago"  value="Efectivo" onchange="this.form.submit()"/></td>
                                        </tr>
                                        <tr>
                                            <td>Tarjeta de Credito / Debito</td>
                                            <td><input type="radio" name="filtroPago"  value="Tarjeta" onchange="this.form.submit()"/></td>
                                        </tr>
                                        <tr>
                                            <td>Tienda Depal</td>
                                            <td><input type="radio" name="filtroPago"  value="Tienda Departamental" onchange="this.form.submit()"/></td>
                                        </tr>
                                        <tr>
                                            <td>Transferencia Electronica</td>
                                            <td><input type="radio" name="filtroPago"  value="Transferencia" onchange="this.form.submit()"/></td>
                                        </tr>
                                        <tr>
                                            <td>Deposito en Banco</td>
                                            <td><input type="radio" name="filtroPago"  value="Deposito" onchange="this.form.submit()"/></td>
                                        </tr>
                                    </table>
                            <!-- </form> -->
                            </div>
                            
                            <table style="margin-top:2%;">  
                            <?php 
                                    $query_cat = "SELECT * FROM subcategoria";
                                    $result_cat = mysqli_query($conection,$query_cat);
                                    while ($rowCat = mysqli_fetch_assoc($result_cat)) { ?>
                                    
                                        <tr>
                                            <td><?php echo $rowCat['subcat']; ?></td>
                                            <td><input type="radio" name="filtroCategoria" value="<?php echo $rowCat['subcat']; ?>" onchange="this.form.submit()"/></td>
                                        </tr>
                                <?php } ?>
                            </table>
                       
                            </div>
                            
                    </form>
               </div>
                                
               <script>
                  
                    function muestra_ocultaPago()
                    {
                        if (document.getElementById)
                        { //se obtiene el id
                            var el = document.getElementById('pagoToggle'); //se define la variable "el" igual a nuestro div
                             el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
                        }
                    }

                    function muestra_ocultaEnvio()
                    {
                        if (document.getElementById)
                        { //se obtiene el id
                            var el = document.getElementById('envioToggle'); //se define la variable "el" igual a nuestro div
                             el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
                        }
                    }

                    function muestra_ocultaCategoria()
                    {
                        if (document.getElementById)
                        { //se obtiene el id
                            var el = document.getElementById('categoriaToggle'); //se define la variable "el" igual a nuestro div
                             el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
                        }
                    }
        
               </script>
               <div class="col-lg-9">
                    <?php 
                        $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND tiposEntrega LIKE '%$filtroCat%'; ";
                        $result_tiendas = mysqli_query($conection,$query_tiendas);
                        $numberOfTIendas = 0;
                        if(mysqli_fetch_assoc($result_tiendas) == 0)
                        {
                            $numberOfTIendas = 0;
                        }
                        else
                        {
                            if($orden == "ascName")
                            {
                                $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND tiposEntrega LIKE '%$filtroCat%' order by nombreTienda ASC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "descName")
                            {
                                $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND tiposEntrega LIKE '%$filtroCat%' order by nombreTienda DESC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "ascCalificacion")
                            {
                                $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND tiposEntrega LIKE '%$filtroCat%' order by correo ASC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "descCalificacion")
                            {
                                $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND tiposEntrega LIKE '%$filtroCat%' order by correo DESC; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else
                            {
                                $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND tiposEntrega LIKE '%$filtroCat%'; ";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }

                           
                            while ($row = mysqli_fetch_assoc($result_tiendas)) 
                            {
                                $numberOfTIendas = $numberOfTIendas + 1;
                                ?>
                                  <a href="detalleTienda.php?id=<?php echo $row['id']; ?>&correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo ?>">  <div class="col-lg-4" style="border:1px solid; margin-right:2%; float:left;">
                                        <div>
                                            <img alt="Shop product image!" src="images/<?php echo $row['logo']; ?>" width="70%">
                                        </div>
                                        <div style="text-align:center;">
                                            <?php echo $row['nombreTienda']; ?>
                                        </div>
                                        <div style="text-align:center;">
                                            <?php echo $row['giro']; ?>
                                        </div>
                                    </div> </a>
                                <?php
                            }
                        }
                    ?> 
                </div>
              </div>
           </div>
       </section>
       <!-- END WHAT WE DO -->
<?php }

static function negocios_result_Fundaciones_leftMenu($conection,$user, $usuarioTipo, $orden, $kindOfCat, $filtroNameReceived) { ?>
    <!-- WHAT WE DO -->
    <section class="background-white" style="background-image: url('images/blanco-fondo.png');">
           <div class="container" >
               <div class="row" >
               <div class="sidebar col-lg-3" >
                    <form method="POST">
                        <input type="text" name="enviado" value="enviado" style="display:none;" >
                        <div style="margin-bottom:2%;  margin-top:5%; font-weight:bold; font-size:16px; color:black;"> <span><b>Ordena los negocios por:</b></span> </div>
                        <table style="margin-top:2%;">
                            <tr>
                                <input type="text" name="id" value="<?php echo $kindOfCat; ?>" style="display:none;"/>
                                <td><input type="radio" name="nameOrder"  value="name"  onchange="this.form.submit()"/></td>
                                <td><b>Name<b></td>
                            </tr>
                           
                           
                            <tr>
                                <td><input type="radio" name="colOrder"  value="ASC"  onchange="this.form.submit()"/></td>
                                <td><b>Colonia</b></td>
                            </tr>
                        </table>
                    </form>
               </div>
                                
          
               <div class="col-lg-9">
                    <?php 
                        if($filtroNameReceived == 'name')
                        {
                            //BY NAmE = DOES NOT WORK YET
                            $query_cat = "SELECT * FROM subcategoria WHERE id_categoria = '$kindOfCat';";
                            $result_subcat = mysqli_query($conection,$query_cat);
                            while ($row = mysqli_fetch_assoc($result_subcat)) 
                            {
                                $nombreSubCat = $row['subcat'];
                                
                                $query_cat_tienda = "SELECT * FROM tiendas WHERE etiquetas like '%".$nombreSubCat."%'";
                                $result_subcat_tienda = mysqli_query($conection,$query_cat_tienda);
                                while ($row = mysqli_fetch_assoc($result_subcat_tienda)) 
                                { ?>
                                        <div class="col-lg-3" style="float:left;">
                                        <div class="product" style="box-shadow:2px 2px 2px 2px #888888; background:white;">
                                                <div class="product-image">
                                                    <div style="width:100%; height:60px;">
                                                        <!-- Lugar Estrellas  -->
                                                        <?php if($row['correo'] > "0" && $row['correo'] < "1.5") { ?>
                                                                <div style="width:100%; height:25px; margin-left:90%;">
                                                                    <div class="product-rate">
                                                                        <i class="fa fa-star"></i> 
                                                                    </div>
                                                                </div>    
                                                            
                                                            <?php }
                                                            
                                                            
                                                            else if($row['correo'] >= "1.5" && $row['correo'] < "2.5") {
                                                            ?> 
                                                                <div style="width:100%; height:25px; margin-left:80%;">
                                                                    <div class="product-rate">
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                    </div>
                                                                </div>    
                                                            <?php } 
    
                                                            else if($row['correo'] >= "2.5" && $row['correo'] < "3.5") {
                                                            ?> 
                                                            <div style="width:100%; height:25px; margin-left:70%;">
                                                                    <div class="product-rate">
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                    </div>
                                                                </div>    
                                                            <?php } 
                                                            
                                                            else if($row['correo'] >= "3.5" && $row['correo'] < "4.5") {
                                                            ?> 
                                                                <div style="width:100%; height:25px; margin-left:60%;">
                                                                    <div class="product-rate">
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                    </div>
                                                                </div>    
                                                            <?php } 
                                                            
                                                            else if($row['correo'] >= "4.5") {
                                                            ?> 
                                                                <div style="width:100%; height:25px; margin-left:55%;">
                                                                    <div class="product-rate">
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                    </div>
                                                                </div>    
                                                            <?php } ?>
                                                            <!-- FIn Estrellas -->
                                                    </div>
                                                    <?php if($user == "") {?>
                                                    <img src="images/Logos/<?php echo $row["logo"]; ?>">
                                                    <?php } else { ?>
                                                    <img src="images/Logos/<?php echo $row["logo"]; ?>"> 
                                                    <?php } ?>
                                                    <div style="width:100%; height:25px; ">
                                                        <h6 style="text-align:center;"><?php echo $row['giro']; ?></h6>
                                                    </div>
                                                    <div style="width:100%; height:40px;">
                                                        <div style="background:#ffa000; float:left; width:100%;">
                                                            <h5 style="text-align:center; font-weight:bold; color:white;"><?php echo $row['nombreTienda']; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div style="width:100%;">
                                                        <div style="float:left; width:100%;">
                                                            <div style="font-size: 12px; text-align:center; color:black; font-weight:bold;"><span>Pagina Web: </span></div>
                                                            <div style="font-size: 10px; text-align:center;"><span style="text-align:center; color:black; margin-left:2px;"><?php echo $row['paginaWeb'] ?></span></div>
                                                        </div>
                                                    </div>
                                                    <div style="width:100%;">
                                                        <div style="float:left; width:100%;">
                                                            <div style="font-size: 12px; text-align:center; color:black; font-weight:bold;"><span>Direccion: </span></div>
                                                            <div style="font-size: 10px; text-align:center; "><span style="text-align:center; color:black; margin-left:2px;"><?php echo $row['direccion']; ?></span></div>
                                                        </div>
                                                    </div>
                                                    <div style="width:100%;">
                                                        <div style="float:left; width:100%;">
                                                        <a href="detalleTienda.php?id=<?php echo $row["id"]; ?>&correo=na&type=<?php echo $usuarioTipo ?>"><div><input type="submit" value="CONOCE MÁS" style="background:#ffa300; margin-top:5%; font-weight:bold; color:white; border:1px solid; border-color:#ffa300; width:100%;"/></div></a>
                                                        </div>
                                                    </div>
    
                                                    <div style="width:100%;">
                                                        <div style="width:50%; float:left;">
                                                                <form method="POST">
                                                                    <input type="text" value="<?php echo $row["id"]; ?>" style="display:none;" name="idTiendaContactoFacebook" />
                                                                    
                                                                        <?php  if($user == "" || $user == "na") { ?>
                                                                        <div style="float:left; width:100%;">
                                                                            <a href="inicioSession.php?error=0"><input type="button" value="Facebook" style="margin-top:5%; width:100%; background:#007366; color:white; font-size:11px; font-weight:bold; border:1px solid; border-color:#007366;"></a>
                                                                        </div>
                                                                        <?php } else  if($facebook != "") {?>
                                                                            <div style="float:left; width:100%;">
                                                                                <input type="submit" value="Facebook" style="margin-top:5%; width:100%; background:#007366;  color:white; font-weight:bold;  font-size:11px; border:1px solid; border-color:#007366;">
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div style="float:left; width:100%;">
                                                                                <input type="button" disabled value="facebook" style="margin-top:5%;  font-size:11px; background:grey; width:100%; color:white;  font-size:11px; font-weight:bold; border:1px solid; border-color:grey;">
                                                                            </div>
                                                                        <?php } ?>
                                                                    
                                                                </form>
                                                            </div>
                                                        <form method="POST">
                                                            <input type="text" value="<?php echo $row["id"]; ?>" style="display:none;" name="idTiendaContacto" />
                                                            <div style="width:50%; float:left;">
                                                                <?php  if($user == "" || $user == "na") { ?>
                                                                <div style="float:left; width:100%;">
                                                                    <a href="inicioSession.php?error=0"><input type="button" value="Whatsaap" style="margin-top:5%;  font-size:11px; width:100%; background:#ffa000; color:white; font-weight:bold; border:1px solid; border-color:#ffa000;"></a>
                                                                </div>
                                                                <?php } else  if($whatsaap != "") {?>
                                                                    <div style="float:left; width:100%;">
                                                                        <input type="submit" value="Whatsaap" style="margin-top:5%; background:#ffa000; width:100%;  font-size:11px; color:white; font-weight:bold; border:1px solid; border-color:#ffa000;">
                                                                    </div>
                                                                <?php } else { ?>
                                                                    <div style="float:left; width:100%;">
                                                                        <input type="button" disabled value="Whatsaap" style="margin-top:5%; background:grey;  font-size:11px; color:white; width:100%; font-weight:bold; border:1px solid; border-color:#ffa000;">
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- CLOSING COL 3 -->
                                    <?php } 
                            
                            } 

                        }else if($filtroNameReceived == 'cat')
                        {
                            //BY NAmE = DOES NOT WORK YET
                            $query_cat = "SELECT * FROM subcategoria WHERE id_categoria = '$kindOfCat' order by subcat ASC;";
                            $result_subcat = mysqli_query($conection,$query_cat);
                            while ($row = mysqli_fetch_assoc($result_subcat)) 
                            {
                                $nombreSubCat = $row['subcat'];
                                
                                $query_cat_tienda = "SELECT * FROM tiendas WHERE etiquetas like '%".$nombreSubCat."%'";
                                $result_subcat_tienda = mysqli_query($conection,$query_cat_tienda);
                                while ($row = mysqli_fetch_assoc($result_subcat_tienda)) 
                                { ?>
                                        <div class="col-lg-3" style="float:left; background:white;">
                                        <div class="product" style="box-shadow:2px 2px 2px 2px #888888;">
                                                <div class="product-image">
                                                    <div style="width:100%; height:60px;">
                                                        <!-- Lugar Estrellas  -->
                                                        <?php if($row['correo'] > "0" && $row['correo'] < "1.5") { ?>
                                                                <div style="width:100%; height:25px; margin-left:90%;">
                                                                    <div class="product-rate">
                                                                        <i class="fa fa-star"></i> 
                                                                    </div>
                                                                </div>    
                                                            
                                                            <?php }
                                                            
                                                            
                                                            else if($row['correo'] >= "1.5" && $row['correo'] < "2.5") {
                                                            ?> 
                                                                <div style="width:100%; height:25px; margin-left:80%;">
                                                                    <div class="product-rate">
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                    </div>
                                                                </div>    
                                                            <?php } 
    
                                                            else if($row['correo'] >= "2.5" && $row['correo'] < "3.5") {
                                                            ?> 
                                                            <div style="width:100%; height:25px; margin-left:70%;">
                                                                    <div class="product-rate">
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                    </div>
                                                                </div>    
                                                            <?php } 
                                                            
                                                            else if($row['correo'] >= "3.5" && $row['correo'] < "4.5") {
                                                            ?> 
                                                                <div style="width:100%; height:25px; margin-left:60%;">
                                                                    <div class="product-rate">
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                    </div>
                                                                </div>    
                                                            <?php } 
                                                            
                                                            else if($row['correo'] >= "4.5") {
                                                            ?> 
                                                                <div style="width:100%; height:25px; margin-left:55%;">
                                                                    <div class="product-rate">
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                    </div>
                                                                </div>    
                                                            <?php } ?>
                                                            <!-- FIn Estrellas -->
                                                    </div>
                                                    <?php if($user == "") {?>
                                                    <img src="images/Logos/<?php echo $row["logo"]; ?>">
                                                    <?php } else { ?>
                                                    <img src="images/Logos/<?php echo $row["logo"]; ?>"> 
                                                    <?php } ?>
                                                    <div style="width:100%; height:25px; ">
                                                        <h6 style="text-align:center;"><?php echo $row['giro']; ?></h6>
                                                    </div>
                                                    <div style="width:100%; height:40px;">
                                                        <div style="background:#ffa000; float:left; width:100%;">
                                                            <h5 style="text-align:center; font-weight:bold; color:white;"><?php echo $row['nombreTienda']; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div style="width:100%;">
                                                        <div style="float:left; width:100%;">
                                                            <div style="font-size: 12px; text-align:center; color:black; font-weight:bold;"><span>Pagina Web: </span></div>
                                                            <div style="font-size: 10px; text-align:center;"><span style="text-align:center; color:black; margin-left:2px;"><?php echo $row['paginaWeb'] ?></span></div>
                                                        </div>
                                                    </div>
                                                    <div style="width:100%;">
                                                        <div style="float:left; width:100%;">
                                                            <div style="font-size: 12px; text-align:center; color:black; font-weight:bold;"><span>Direccion: </span></div>
                                                            <div style="font-size: 10px; text-align:center; "><span style="text-align:center; color:black; margin-left:2px;"><?php echo $row['direccion']; ?></span></div>
                                                        </div>
                                                    </div>
                                                    <div style="width:100%;">
                                                        <div style="float:left; width:100%;">
                                                        <a href="detalleTienda.php?id=<?php echo $row["id"]; ?>&correo=na&type=<?php echo $usuarioTipo ?>"><div><input type="submit" value="CONOCE MÁS" style="background:#ffa300; margin-top:5%; font-weight:bold; color:white; border:1px solid; border-color:#ffa300; width:100%;"/></div></a>
                                                        </div>
                                                    </div>
    
                                                    <div style="width:100%;">
                                                        <div style="width:50%; float:left;">
                                                                <form method="POST">
                                                                    <input type="text" value="<?php echo $row["id"]; ?>" style="display:none;" name="idTiendaContactoFacebook" />
                                                                    
                                                                        <?php  if($user == "" || $user == "na") { ?>
                                                                        <div style="float:left; width:100%;">
                                                                            <a href="inicioSession.php?error=0"><input type="button" value="Facebook" style="margin-top:5%; width:100%; background:#007366; color:white; font-size:11px; font-weight:bold; border:1px solid; border-color:#007366;"></a>
                                                                        </div>
                                                                        <?php } else  if($facebook != "") {?>
                                                                            <div style="float:left; width:100%;">
                                                                                <input type="submit" value="Facebook" style="margin-top:5%; width:100%; background:#007366;  color:white; font-weight:bold;  font-size:11px; border:1px solid; border-color:#007366;">
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div style="float:left; width:100%;">
                                                                                <input type="button" disabled value="facebook" style="margin-top:5%;  font-size:11px; background:grey; width:100%; color:white;  font-size:11px; font-weight:bold; border:1px solid; border-color:grey;">
                                                                            </div>
                                                                        <?php } ?>
                                                                    
                                                                </form>
                                                            </div>
                                                        <form method="POST">
                                                            <input type="text" value="<?php echo $row["id"]; ?>" style="display:none;" name="idTiendaContacto" />
                                                            <div style="width:50%; float:left;">
                                                                <?php  if($user == "" || $user == "na") { ?>
                                                                <div style="float:left; width:100%;">
                                                                    <a href="inicioSession.php?error=0"><input type="button" value="Whatsaap" style="margin-top:5%;  font-size:11px; width:100%; background:#ffa000; color:white; font-weight:bold; border:1px solid; border-color:#ffa000;"></a>
                                                                </div>
                                                                <?php } else  if($whatsaap != "") {?>
                                                                    <div style="float:left; width:100%;">
                                                                        <input type="submit" value="Whatsaap" style="margin-top:5%; background:#ffa000; width:100%;  font-size:11px; color:white; font-weight:bold; border:1px solid; border-color:#ffa000;">
                                                                    </div>
                                                                <?php } else { ?>
                                                                    <div style="float:left; width:100%;">
                                                                        <input type="button" disabled value="Whatsaap" style="margin-top:5%; background:grey;  font-size:11px; color:white; width:100%; font-weight:bold; border:1px solid; border-color:#ffa000;">
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- CLOSING COL 3 -->
                                    <?php } 
                            
                            }
                        }
                        else{
                            $query_cat = "SELECT * FROM subcategoria WHERE id_categoria = '$kindOfCat';";
                            $result_subcat = mysqli_query($conection,$query_cat);
                            while ($row = mysqli_fetch_assoc($result_subcat)) 
                            {
                                $nombreSubCat = $row['subcat'];
                            
                                $query_cat_tienda = "SELECT * FROM tiendas WHERE etiquetas like '%".$nombreSubCat."%';";
                                $result_subcat_tienda = mysqli_query($conection,$query_cat_tienda);
                                while ($row = mysqli_fetch_assoc($result_subcat_tienda)) 
                                {
                                    ?>
                                     <div class="col-lg-3" style="float:left; background:white;">
                                        <div class="product" style="box-shadow:2px 2px 2px 2px #888888;">
                                                <div class="product-image">
                                                    <div style="width:100%; height:60px;">
                                                        <!-- Lugar Estrellas  -->
                                                        <?php if($row['correo'] > "0" && $row['correo'] < "1.5") { ?>
                                                                <div style="width:100%; height:25px; margin-left:90%;">
                                                                    <div class="product-rate">
                                                                        <i class="fa fa-star"></i> 
                                                                    </div>
                                                                </div>    
                                                            
                                                            <?php }
                                                            
                                                            
                                                            else if($row['correo'] >= "1.5" && $row['correo'] < "2.5") {
                                                            ?> 
                                                                <div style="width:100%; height:25px; margin-left:80%;">
                                                                    <div class="product-rate">
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                    </div>
                                                                </div>    
                                                            <?php } 
    
                                                            else if($row['correo'] >= "2.5" && $row['correo'] < "3.5") {
                                                            ?> 
                                                            <div style="width:100%; height:25px; margin-left:70%;">
                                                                    <div class="product-rate">
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                    </div>
                                                                </div>    
                                                            <?php } 
                                                            
                                                            else if($row['correo'] >= "3.5" && $row['correo'] < "4.5") {
                                                            ?> 
                                                                <div style="width:100%; height:25px; margin-left:60%;">
                                                                    <div class="product-rate">
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                    </div>
                                                                </div>    
                                                            <?php } 
                                                            
                                                            else if($row['correo'] >= "4.5") {
                                                            ?> 
                                                                <div style="width:100%; height:25px; margin-left:55%;">
                                                                    <div class="product-rate">
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                        <i class="fa fa-star"></i> 
                                                                    </div>
                                                                </div>    
                                                            <?php } ?>
                                                            <!-- FIn Estrellas -->
                                                    </div>
                                                    <?php if($user == "") {?>
                                                    <img src="images/Logos/<?php echo $row["logo"]; ?>">
                                                    <?php } else { ?>
                                                    <img src="images/Logos/<?php echo $row["logo"]; ?>"> 
                                                    <?php } ?>
                                                    <div style="width:100%; height:25px; ">
                                                        <h6 style="text-align:center;"><?php echo $row['giro']; ?></h6>
                                                    </div>
                                                    <div style="width:100%; height:40px;">
                                                        <div style="background:#ffa000; float:left; width:100%;">
                                                            <h5 style="text-align:center; font-weight:bold; color:white;"><?php echo $row['nombreTienda']; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div style="width:100%;">
                                                        <div style="float:left; width:100%;">
                                                            <div style="font-size: 12px; text-align:center; color:black; font-weight:bold;"><span>Pagina Web: </span></div>
                                                            <div style="font-size: 10px; text-align:center;"><span style="text-align:center; color:black; margin-left:2px;"><?php echo $row['paginaWeb'] ?></span></div>
                                                        </div>
                                                    </div>
                                                    <div style="width:100%;">
                                                        <div style="float:left; width:100%;">
                                                            <div style="font-size: 12px; text-align:center; color:black; font-weight:bold;"><span>Direccion: </span></div>
                                                            <div style="font-size: 10px; text-align:center; "><span style="text-align:center; color:black; margin-left:2px;"><?php echo $row['direccion']; ?></span></div>
                                                        </div>
                                                    </div>
                                                    <div style="width:100%;">
                                                        <div style="float:left; width:100%;">
                                                        <a href="detalleTienda.php?id=<?php echo $row["id"]; ?>&correo=na&type=<?php echo $usuarioTipo ?>"><div><input type="submit" value="CONOCE MÁS" style="background:#ffa300; margin-top:5%; font-weight:bold; color:white; border:1px solid; border-color:#ffa300; width:100%;"/></div></a>
                                                        </div>
                                                    </div>
    
                                                    <div style="width:100%;">
                                                        <div style="width:50%; float:left;">
                                                                <form method="POST">
                                                                    <input type="text" value="<?php echo $row["id"]; ?>" style="display:none;" name="idTiendaContactoFacebook" />
                                                                    
                                                                        <?php  if($user == "" || $user == "na") { ?>
                                                                        <div style="float:left; width:100%;">
                                                                            <a href="inicioSession.php?error=0"><input type="button" value="Facebook" style="margin-top:5%; width:100%; background:#007366; color:white; font-size:11px; font-weight:bold; border:1px solid; border-color:#007366;"></a>
                                                                        </div>
                                                                        <?php } else  if($facebook != "") {?>
                                                                            <div style="float:left; width:100%;">
                                                                                <input type="submit" value="Facebook" style="margin-top:5%; width:100%; background:#007366;  color:white; font-weight:bold;  font-size:11px; border:1px solid; border-color:#007366;">
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div style="float:left; width:100%;">
                                                                                <input type="button" disabled value="facebook" style="margin-top:5%;  font-size:11px; background:grey; width:100%; color:white;  font-size:11px; font-weight:bold; border:1px solid; border-color:grey;">
                                                                            </div>
                                                                        <?php } ?>
                                                                    
                                                                </form>
                                                            </div>
                                                        <form method="POST">
                                                            <input type="text" value="<?php echo $row["id"]; ?>" style="display:none;" name="idTiendaContacto" />
                                                            <div style="width:50%; float:left;">
                                                                <?php  if($user == "" || $user == "na") { ?>
                                                                <div style="float:left; width:100%;">
                                                                    <a href="inicioSession.php?error=0"><input type="button" value="Whatsaap" style="margin-top:5%;  font-size:11px; width:100%; background:#ffa000; color:white; font-weight:bold; border:1px solid; border-color:#ffa000;"></a>
                                                                </div>
                                                                <?php } else  if($whatsaap != "") {?>
                                                                    <div style="float:left; width:100%;">
                                                                        <input type="submit" value="Whatsaap" style="margin-top:5%; background:#ffa000; width:100%;  font-size:11px; color:white; font-weight:bold; border:1px solid; border-color:#ffa000;">
                                                                    </div>
                                                                <?php } else { ?>
                                                                    <div style="float:left; width:100%;">
                                                                        <input type="button" disabled value="Whatsaap" style="margin-top:5%; background:grey;  font-size:11px; color:white; width:100%; font-weight:bold; border:1px solid; border-color:#ffa000;">
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- CLOSING COL 3 -->
                               <?php  } ?>
                            
                           <?php } 
                        } ?>
                </div>
              </div>
           </div>
       </section>
       <!-- END WHAT WE DO -->
<?php }


static function negocios_result_kind_productos($conection,$user, $usuarioTipo, $orden, $kindOfCat) { ?>
    <!-- WHAT WE DO -->
    <section class="background-white" style="background-image: url('images/blanco-fondo.png');">
           <div class="container" >
               <div class="row" >
                <div class="col-lg-9">
                    <?php 
                        $query_cat = "SELECT * FROM subcategoria WHERE id_categoria = '$kindOfCat';";
                        $result_subcat = mysqli_query($conection,$query_cat);
                        while ($row = mysqli_fetch_assoc($result_subcat)) 
                        {
                            $nombreSubCat = $row['subcat'];
                        
                            $query_cat_tienda = "SELECT * FROM tiendas WHERE etiquetas like '%".$nombreSubCat."%' AND subscription = 'Hiper Mrkado';";
                            $result_subcat_tienda = mysqli_query($conection,$query_cat_tienda);
                            while ($row = mysqli_fetch_assoc($result_subcat_tienda)) 
                            {
                                ?>
                                 <div class="col-lg-3" style="float:left;">
                                    <div class="product" style="box-shadow:2px 2px 2px 2px #888888; background:white;">
                                            <div class="product-image">
                                                <div style="width:100%; height:60px;">
                                                    <!-- Lugar Estrellas  -->
                                                    <?php if($row['correo'] > "0" && $row['correo'] < "1.5") { ?>
                                                            <div style="width:100%; height:25px; margin-left:90%;">
                                                                <div class="product-rate">
                                                                    <i class="fa fa-star"></i> 
                                                                </div>
                                                            </div>    
                                                        
                                                        <?php }
                                                        
                                                        
                                                        else if($row['correo'] >= "1.5" && $row['correo'] < "2.5") {
                                                        ?> 
                                                            <div style="width:100%; height:25px; margin-left:80%;">
                                                                <div class="product-rate">
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                </div>
                                                            </div>    
                                                        <?php } 

                                                        else if($row['correo'] >= "2.5" && $row['correo'] < "3.5") {
                                                        ?> 
                                                        <div style="width:100%; height:25px; margin-left:70%;">
                                                                <div class="product-rate">
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                </div>
                                                            </div>    
                                                        <?php } 
                                                        
                                                        else if($row['correo'] >= "3.5" && $row['correo'] < "4.5") {
                                                        ?> 
                                                            <div style="width:100%; height:25px; margin-left:60%;">
                                                                <div class="product-rate">
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                </div>
                                                            </div>    
                                                        <?php } 
                                                        
                                                        else if($row['correo'] >= "4.5") {
                                                        ?> 
                                                            <div style="width:100%; height:25px; margin-left:55%;">
                                                                <div class="product-rate">
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                </div>
                                                            </div>    
                                                        <?php } ?>
                                                        <!-- FIn Estrellas -->
                                                </div>
                                                <?php if($user == "") {?>
                                                <img src="images/Logos/<?php echo $row["logo"]; ?>">
                                                <?php } else { ?>
                                                <img src="images/Logos/<?php echo $row["logo"]; ?>"> 
                                                <?php } ?>
                                                <div style="width:100%; height:25px; ">
                                                    <h6 style="text-align:center;"><?php echo $row['giro']; ?></h6>
                                                </div>
                                                <div style="width:100%; height:40px;">
                                                    <div style="background:#ffa000; float:left; width:100%;">
                                                        <h5 style="text-align:center; font-weight:bold; color:white;"><?php echo $row['nombreTienda']; ?></h5>
                                                    </div>
                                                </div>
                                                <div style="width:100%;">
                                                    <div style="float:left; width:100%;">
                                                        <div style="font-size: 12px; text-align:center; color:black; font-weight:bold;"><span>Pagina Web: </span></div>
                                                        <div style="font-size: 10px; text-align:center;"><span style="text-align:center; color:black; margin-left:2px;"><?php echo $row['paginaWeb'] ?></span></div>
                                                    </div>
                                                </div>
                                                <div style="width:100%;">
                                                    <div style="float:left; width:100%;">
                                                        <div style="font-size: 12px; text-align:center; color:black; font-weight:bold;"><span>Direccion: </span></div>
                                                        <div style="font-size: 10px; text-align:center; "><span style="text-align:center; color:black; margin-left:2px;"><?php echo $row['direccion']; ?></span></div>
                                                    </div>
                                                </div>
                                                <div style="width:100%;">
                                                    <div style="float:left; width:100%;">
                                                    <a href="detalleTienda.php?id=<?php echo $row["id"]; ?>&correo=na&type=<?php echo $usuarioTipo ?>"><div><input type="submit" value="CONOCE MÁS" style="background:#ffa300; margin-top:5%; font-weight:bold; color:white; border:1px solid; border-color:#ffa300; width:100%;"/></div></a>
                                                    </div>
                                                </div>

                                                <div style="width:100%;">
                                                    <div style="width:50%; float:left;">
                                                            <form method="POST">
                                                                <input type="text" value="<?php echo $row["id"]; ?>" style="display:none;" name="idTiendaContactoFacebook" />
                                                                
                                                                    <?php  if($user == "" || $user == "na") { ?>
                                                                    <div style="float:left; width:100%;">
                                                                        <a href="inicioSession.php?error=0"><input type="button" value="Facebook" style="margin-top:5%; width:100%; background:#007366; color:white; font-size:11px; font-weight:bold; border:1px solid; border-color:#007366;"></a>
                                                                    </div>
                                                                    <?php } else  if($facebook != "") {?>
                                                                        <div style="float:left; width:100%;">
                                                                            <input type="submit" value="Facebook" style="margin-top:5%; width:100%; background:#007366;  color:white; font-weight:bold;  font-size:11px; border:1px solid; border-color:#007366;">
                                                                        </div>
                                                                    <?php } else { ?>
                                                                        <div style="float:left; width:100%;">
                                                                            <input type="button" disabled value="facebook" style="margin-top:5%;  font-size:11px; background:grey; width:100%; color:white;  font-size:11px; font-weight:bold; border:1px solid; border-color:grey;">
                                                                        </div>
                                                                    <?php } ?>
                                                                
                                                            </form>
                                                        </div>
                                                    <form method="POST">
                                                        <input type="text" value="<?php echo $row["id"]; ?>" style="display:none;" name="idTiendaContacto" />
                                                        <div style="width:50%; float:left;">
                                                            <?php  if($user == "" || $user == "na") { ?>
                                                            <div style="float:left; width:100%;">
                                                                <a href="inicioSession.php?error=0"><input type="button" value="Whatsaap" style="margin-top:5%;  font-size:11px; width:100%; background:#ffa000; color:white; font-weight:bold; border:1px solid; border-color:#ffa000;"></a>
                                                            </div>
                                                            <?php } else  if($whatsaap != "") {?>
                                                                <div style="float:left; width:100%;">
                                                                    <input type="submit" value="Whatsaap" style="margin-top:5%; background:#ffa000; width:100%;  font-size:11px; color:white; font-weight:bold; border:1px solid; border-color:#ffa000;">
                                                                </div>
                                                            <?php } else { ?>
                                                                <div style="float:left; width:100%;">
                                                                    <input type="button" disabled value="Whatsaap" style="margin-top:5%; background:grey;  font-size:11px; color:white; width:100%; font-weight:bold; border:1px solid; border-color:#ffa000;">
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- CLOSING COL 3 -->
                           <?php  } ?>
                        
                       <?php } ?>
                </div>
              </div>
           </div>
       </section>
       <!-- END WHAT WE DO -->
<?php }

static function servicios_categories_list($conection, $correo, $usuarioTipo)
{ ?>
<section style="background:black;"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="text-align:center; color:#ffb800; font-weight:bold; font-size:24px; margin-bottom:3%;">Nuestros Servi-MrKados<br>Disponibles</div>
        </div>
        <div class="row">
            <?php
                $query_cat = "SELECT * FROM subcategoria WHERE id_categoria = 'Servicios' ORDER BY subcat ASC";
                $result_subcat = mysqli_query($conection,$query_cat);
                while ($row = mysqli_fetch_assoc($result_subcat)) 
                { ?>
                    <div class="col-lg-2">
                        <a href="tiendasBusquedaCategorias.php?correo=<?php echo $correo; ?>&type=<?php echo $usuarioTipo ?>&fcat=<?php echo utf8_encode($row["subcat"]); ?>"><img src="images/categorias/<?php echo $row["image"]; ?>" style="width:90%;"/></a>
                    </div>
               <?php }
            ?>
        </div>
    </div>
</section>
<?php }

static function productos_categories_list($conection, $correo, $usuarioTipo)
{ ?>
<section style="background:black;"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="text-align:center; color:#ffb800; font-weight:bold; font-size:24px; margin-bottom:3%;">Nuestros ProMrKados<br>Disponibles</div>
        </div>
        <div class="row">
            <?php
                $query_cat = "SELECT * FROM subcategoria WHERE id_categoria = 'Productos' ORDER BY subcat ASC;";
                $result_subcat = mysqli_query($conection,$query_cat);
                while ($row = mysqli_fetch_assoc($result_subcat)) 
                { ?>
                    <div class="col-lg-2" style="margin-top:1%;">
                        <a href="tiendasBusquedaCategorias.php?correo=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>&categoria=<?php echo $row["subcat"]; ?>"><img src="images/categorias/<?php echo $row["image"]; ?>" style="width:90%;"/></a>
                    </div>
               <?php }
            ?>
        </div>
    </div>
</section>
<?php }



static function negocios_result_kind_servicios($conection,$user, $usuarioTipo, $orden, $kindOfCat) { 
    ?>
     <!-- Seccion tiendas paquetes basicos -->
     <section id="page-content" class="background-grey" style="background-image: url('images/blanco-fondo.png');">
            <div class="container">
                <div class="grid-system-demo-live">
                    <div class="heading-text heading-section">
                        <?php
                        if($kindOfCat == "Servicios")
                        { ?>
                            <div class="col-lg-12" style="text-align:center; color:black; font-weight:bold; font-size:24px; margin-bottom:3%;">Nuestros Servi-MrKados Favoritos</div>
                    <?php } else if($kindOfCat == "Productos")
                    { ?>
                            <div class="col-lg-12" style="text-align:center; color:black; font-weight:bold; font-size:24px; margin-bottom:3%;">Nuestros Produ-MrKados Favoritos</div>
                    <?php }
                    else{ ?>
                        <div class="col-lg-12" style="text-align:center; color:black; font-weight:bold; font-size:24px; margin-bottom:3%;">Nuestras Fundaciones Favoritos</div>
                    <?php }?>
                    </div>
                    <?php 
                        $numberTiendas = 0;
                        $query_cat = "SELECT DISTINCT id_tienda FROM rel_tienda_subcategoria WHERE tipo_cat = '$kindOfCat'";
                        $result_subcat = mysqli_query($conection,$query_cat);
                        while ($rowSubcat = mysqli_fetch_assoc($result_subcat)) 
                        {
                            $id_tienda = $rowSubcat['id_tienda'];
                            $query_tiendas = "SELECT * FROM tiendas WHERE id = '$id_tienda' AND subscription = 'Hiper MrKado';";
                                    
                            $result_tiendas = mysqli_query($conection,$query_tiendas);
                            while ($row = mysqli_fetch_assoc($result_tiendas)) 
                            { 
                                $numberTiendas = $numberTiendas + 1;
                            }
                        } 

                        //agregar aqui validacion si hay o no tiendas
                        if($numberTiendas == 0)
                        {
                            include(__DIR__ . '/noHayTienda_tipos.php');
                        }
                        else
                        //FIN agregar aqui validacion si hay o no tiendas
                        {
                            ?> <div class="carousel" data-items="5" data-lightbox="gallery"> <?php 
                           $query_cat = "SELECT DISTINCT id_tienda FROM rel_tienda_subcategoria WHERE tipo_cat = '$kindOfCat'";
                           $result_subcat = mysqli_query($conection,$query_cat);
                           while ($rowSubcat = mysqli_fetch_assoc($result_subcat)) 
                           {
                               $id_tienda = $rowSubcat['id_tienda'];
                               $query_tiendas = "SELECT * FROM tiendas WHERE id = '$id_tienda' AND subscription = 'Hiper MrKado' ORDER BY correo DESC;";
                               
                               include(__DIR__ . '/tiendasBuscador.php');
                               
                           } 
                           ?> </div> <?php 
                        }
                    ?>
                           
                </div>    
            </div>
        </section> <!-- end: Seccion tiendas paquetes basicos -->
    <!-- END WHAT WE DO -->
<?php }

static function negocios_result_kind($conection,$user, $usuarioTipo, $orden, $kindOfCat) { ?>
    <!-- WHAT WE DO -->
    <section class="background-white" >
           <div class="container" >
               <div class="row" >
               <div class="sidebar col-lg-3" >
                    <form method="POST">
                        <input type="text" name="enviado" value="enviado" style="display:none;" >
                        <div style="margin-bottom:2%;  margin-top:5%; font-weight:bold; font-size:16px; color:black;"> <span><b>Ordena los negocios por:</b></span> </div>
                        <table style="margin-top:2%;">
                            <tr>
                                <td><input type="radio" name="nameOrder"  value="ASC"  onchange="this.form.submit()"/></td>
                                <td>Name</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="caliOrder"  value="ASC"  onchange="this.form.submit()"/></td>
                                <td>Calificación</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="catOrder"  value="ASC"  onchange="this.form.submit()"/></td>
                                <td>Categoría</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="colOrder"  value="ASC"  onchange="this.form.submit()"/></td>
                                <td>Colonia</td>
                            </tr>
                        </table>
                        
                        <div style="margin-bottom:2%;  margin-top:5%; font-weight:bold; font-size:16px; color:black;"> <span><b>Buscar por Tipo de Pago</b></span> </div>
                            <div>
                                    <table style="margin-top:2%;">
                                        <tr>
                                            <td>Efectivo</td>
                                            <td><input type="radio" name="filtroPago"  value="Efectivo" onchange="this.form.submit()"/></td>
                                        </tr>
                                        <tr>
                                            <td>Tarjeta de Credito / Debito</td>
                                            <td><input type="radio" name="filtroPago"  value="Tarjeta" onchange="this.form.submit()"/></td>
                                        </tr>
                                        <tr>
                                            <td>Tienda Depal</td>
                                            <td><input type="radio" name="filtroPago"  value="Tienda Departamental" onchange="this.form.submit()"/></td>
                                        </tr>
                                        <tr>
                                            <td>Transferencia Electronica</td>
                                            <td><input type="radio" name="filtroPago"  value="Transferencia" onchange="this.form.submit()"/></td>
                                        </tr>
                                        <tr>
                                            <td>Deposito en Banco</td>
                                            <td><input type="radio" name="filtroPago"  value="Deposito" onchange="this.form.submit()"/></td>
                                        </tr>
                                    </table>
                            </div>

                        <div style="margin-bottom:2%;  margin-top:5%; font-weight:bold; font-size:16px; color:black;" > <span><b>Buscar por Tipo de Envio</b></span> </div>
                        <div>
                            
                            <table style="margin-top:2%;">
                                    <tr>
                                        <td>Recogerlo en Establecimiento</td>
                                        <td><input type="radio" name="filtroEnv"  value="Recogerlo en el establecimiento" onchange="this.form.submit()"/></td>
                                    </tr>
                                    <tr>
                                        <td>Rappi</td>
                                        <td><input type="radio" name="filtroEnv"  value="Rappi" onchange="this.form.submit()"/></td>
                                    </tr>
                                    <tr>
                                        <td>Uber Eats</td>
                                        <td><input type="radio" name="filtroEnv"  value="ubber" onchange="this.form.submit()"/></td>
                                    </tr>
                                    <tr>
                                        <td>Envio Directo</td>
                                        <td><input type="radio" name="filtroEnv"  value="Envio directo del establecimiento" onchange="this.form.submit()"/></td>
                                    </tr>
                                    <tr>
                                        <td>Mensajeria</td>
                                        <td><input type="radio" name="filtroEnv"  value="Mensajeria" onchange="this.form.submit()"/></td>
                                    </tr>
                                </table>
                            
                        </div>
                        <div style="margin-bottom:2%;  margin-top:5%; font-weight:bold; font-size:16px; color:black;"> <span><b>Buscar por categoria</b></span> </div>
                        <div> 
                                <table style="margin-top:2%;">  
                                <?php 
                                        $query_cat = "SELECT * FROM subcategoria";
                                        $result_cat = mysqli_query($conection,$query_cat);
                                        while ($rowCat = mysqli_fetch_assoc($result_cat)) { ?>
                                        
                                            <tr>
                                                <td><?php echo $rowCat['subcat']; ?></td>
                                                <td><input type="radio" name="filtroCategoria" value="<?php echo $rowCat['subcat']; ?>" onchange="this.form.submit()"/></td>
                                            </tr>
                                    <?php } ?>
                                </table>
                            
                        </div>

                       
                  </form>
               </div>
                                
               <script>
                  
                    function muestra_ocultaPago()
                    {
                        if (document.getElementById)
                        { //se obtiene el id
                            var el = document.getElementById('pagoToggle'); //se define la variable "el" igual a nuestro div
                             el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
                        }
                    }

                    function muestra_ocultaEnvio()
                    {
                        if (document.getElementById)
                        { //se obtiene el id
                            var el = document.getElementById('envioToggle'); //se define la variable "el" igual a nuestro div
                             el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
                        }
                    }

                    function muestra_ocultaCategoria()
                    {
                        if (document.getElementById)
                        { //se obtiene el id
                            var el = document.getElementById('categoriaToggle'); //se define la variable "el" igual a nuestro div
                             el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
                        }
                    }
        
               </script>
               <div class="col-lg-9">
                    <?php 
                        $query_cat = "SELECT * FROM subcategoria WHERE id_categoria = '$kindOfCat';";
                        $result_subcat = mysqli_query($conection,$query_cat);
                        while ($row = mysqli_fetch_assoc($result_subcat)) 
                        {
                            $nombreSubCat = $row['subcat'];
                        
                            $query_cat_tienda = "SELECT * FROM tiendas WHERE etiquetas like '%".$nombreSubCat."%';";
                            $result_subcat_tienda = mysqli_query($conection,$query_cat_tienda);
                            while ($row = mysqli_fetch_assoc($result_subcat_tienda)) 
                            {
                                ?>
                                 <div class="col-lg-3" style="float:left;">
                                    <div class="product" style="box-shadow:2px 2px 2px 2px #888888;">
                                            <div class="product-image">
                                                <div style="width:100%; height:60px;">
                                                    <!-- Lugar Estrellas  -->
                                                    <?php if($row['correo'] > "0" && $row['correo'] < "1.5") { ?>
                                                            <div style="width:100%; height:25px; margin-left:90%;">
                                                                <div class="product-rate">
                                                                    <i class="fa fa-star"></i> 
                                                                </div>
                                                            </div>    
                                                        
                                                        <?php }
                                                        
                                                        
                                                        else if($row['correo'] >= "1.5" && $row['correo'] < "2.5") {
                                                        ?> 
                                                            <div style="width:100%; height:25px; margin-left:80%;">
                                                                <div class="product-rate">
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                </div>
                                                            </div>    
                                                        <?php } 

                                                        else if($row['correo'] >= "2.5" && $row['correo'] < "3.5") {
                                                        ?> 
                                                        <div style="width:100%; height:25px; margin-left:70%;">
                                                                <div class="product-rate">
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                </div>
                                                            </div>    
                                                        <?php } 
                                                        
                                                        else if($row['correo'] >= "3.5" && $row['correo'] < "4.5") {
                                                        ?> 
                                                            <div style="width:100%; height:25px; margin-left:60%;">
                                                                <div class="product-rate">
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                </div>
                                                            </div>    
                                                        <?php } 
                                                        
                                                        else if($row['correo'] >= "4.5") {
                                                        ?> 
                                                            <div style="width:100%; height:25px; margin-left:55%;">
                                                                <div class="product-rate">
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                </div>
                                                            </div>    
                                                        <?php } ?>
                                                        <!-- FIn Estrellas -->
                                                </div>
                                                <?php if($user == "") {?>
                                                <img src="images/Logos/<?php echo $row["logo"]; ?>">
                                                <?php } else { ?>
                                                <img src="images/Logos/<?php echo $row["logo"]; ?>"> 
                                                <?php } ?>
                                                <div style="width:100%; height:25px; ">
                                                    <h6 style="text-align:center;"><?php echo $row['giro']; ?></h6>
                                                </div>
                                                <div style="width:100%; height:40px;">
                                                    <div style="background:#ffa000; float:left; width:100%;">
                                                        <h5 style="text-align:center; font-weight:bold; color:white;"><?php echo $row['nombreTienda']; ?></h5>
                                                    </div>
                                                </div>
                                                <div style="width:100%;">
                                                    <div style="float:left; width:100%;">
                                                        <div style="font-size: 12px; text-align:center; color:black; font-weight:bold;"><span>Pagina Web: </span></div>
                                                        <div style="font-size: 10px; text-align:center;"><span style="text-align:center; color:black; margin-left:2px;"><?php echo $row['paginaWeb'] ?></span></div>
                                                    </div>
                                                </div>
                                                <div style="width:100%;">
                                                    <div style="float:left; width:100%;">
                                                        <div style="font-size: 12px; text-align:center; color:black; font-weight:bold;"><span>Direccion: </span></div>
                                                        <div style="font-size: 10px; text-align:center; "><span style="text-align:center; color:black; margin-left:2px;"><?php echo $row['direccion']; ?></span></div>
                                                    </div>
                                                </div>
                                                <div style="width:100%;">
                                                    <div style="float:left; width:100%;">
                                                    <a href="detalleTienda.php?id=<?php echo $row["id"]; ?>&correo=na&type=<?php echo $usuarioTipo ?>"><div><input type="submit" value="CONOCE MÁS" style="background:#ffa300; margin-top:5%; font-weight:bold; color:white; border:1px solid; border-color:#ffa300; width:100%;"/></div></a>
                                                    </div>
                                                </div>

                                                <div style="width:100%;">
                                                    <div style="width:50%; float:left;">
                                                            <form method="POST">
                                                                <input type="text" value="<?php echo $row["id"]; ?>" style="display:none;" name="idTiendaContactoFacebook" />
                                                                
                                                                    <?php  if($user == "" || $user == "na") { ?>
                                                                    <div style="float:left; width:100%;">
                                                                        <a href="inicioSession.php?error=0"><input type="button" value="Facebook" style="margin-top:5%; width:100%; background:#007366; color:white; font-size:11px; font-weight:bold; border:1px solid; border-color:#007366;"></a>
                                                                    </div>
                                                                    <?php } else  if($facebook != "") {?>
                                                                        <div style="float:left; width:100%;">
                                                                            <input type="submit" value="Facebook" style="margin-top:5%; width:100%; background:#007366;  color:white; font-weight:bold;  font-size:11px; border:1px solid; border-color:#007366;">
                                                                        </div>
                                                                    <?php } else { ?>
                                                                        <div style="float:left; width:100%;">
                                                                            <input type="button" disabled value="facebook" style="margin-top:5%;  font-size:11px; background:grey; width:100%; color:white;  font-size:11px; font-weight:bold; border:1px solid; border-color:grey;">
                                                                        </div>
                                                                    <?php } ?>
                                                                
                                                            </form>
                                                        </div>
                                                    <form method="POST">
                                                        <input type="text" value="<?php echo $row["id"]; ?>" style="display:none;" name="idTiendaContacto" />
                                                        <div style="width:50%; float:left;">
                                                            <?php  if($user == "" || $user == "na") { ?>
                                                            <div style="float:left; width:100%;">
                                                                <a href="inicioSession.php?error=0"><input type="button" value="Whatsaap" style="margin-top:5%;  font-size:11px; width:100%; background:#ffa000; color:white; font-weight:bold; border:1px solid; border-color:#ffa000;"></a>
                                                            </div>
                                                            <?php } else  if($whatsaap != "") {?>
                                                                <div style="float:left; width:100%;">
                                                                    <input type="submit" value="Whatsaap" style="margin-top:5%; background:#ffa000; width:100%;  font-size:11px; color:white; font-weight:bold; border:1px solid; border-color:#ffa000;">
                                                                </div>
                                                            <?php } else { ?>
                                                                <div style="float:left; width:100%;">
                                                                    <input type="button" disabled value="Whatsaap" style="margin-top:5%; background:grey;  font-size:11px; color:white; width:100%; font-weight:bold; border:1px solid; border-color:#ffa000;">
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- CLOSING COL 3 -->
                           <?php  } ?>
                        
                       <?php } ?>
                </div>
              </div>
           </div>
       </section>
       <!-- END WHAT WE DO -->
<?php }

static function negocios_result($estado, $colonia, $ciudad,$conection,$user, $usuarioTipo, $orden) { ?>
    <!-- WHAT WE DO -->
    <section class="background-white" >
           <div class="container" >
               <div class="row" >
               <div class="sidebar col-lg-3" >
                    <form method="POST">
                        <input type="text" name="enviado" value="enviado" style="display:none;" >
                        <div style="margin-bottom:2%; width:100%; float:left;  margin-top:5%; background:#ffb800;"> <span><b>Buscar por Tipo de Pago</b></span> </div>
                            <div class="col-12" style=" float:left; margin:0px;">
                                <div style="width:100%;">
                                    <div style="float:left; width:80%; margin:0px;">Efectivo</div>
                                    <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroPago"  value="Efectivo" onchange="this.form.submit()"/></div>
                                </div>
                                <div style="width:100%;">
                                    <div style="float:left; width:80%; margin:0px;">Tarjeta de Credito / Debito</div>
                                    <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroPago"  value="Tarjeta" onchange="this.form.submit()"/></div>
                                </div>
                                <div style="width:100%;">
                                    <div style="float:left; width:80%; margin:0px;">Tienda Depal</div>
                                    <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroPago"  value="Tienda Departamental" onchange="this.form.submit()"/></div>
                                </div>
                                <div style="width:100%;">
                                    <div style="float:left; width:80%; margin:0px;">Transferencia Electronica</div>
                                    <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroPago"  value="Transferencia" onchange="this.form.submit()"/></div>
                                </div>
                                <div style="width:100%;">
                                    <div style="float:left; width:80%; margin:0px;">Deposito en Banco</div>
                                    <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroPago"  value="Deposito" onchange="this.form.submit()"/></div>
                                </div>
                            </div>
                        <div style="margin-bottom:2%; width:100%; float:left; margin-top:5%; background:#ffb800" > <span><b>Buscar por Tipo de Envio</b></span> </div>
                        
                        <div class="col-12" style=" float:left; margin:0px;">
                            <div style="width:100%;">
                                <div style="float:left; width:80%; margin:0px;">Recogerlo en Establecimiento</div>
                                <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv"  value="Recogerlo en el establecimiento" onchange="this.form.submit()"/></div>
                            </div>
                            <div style="width:100%;">
                                <div style="float:left; width:80%; margin:0px;">Rappi</div>
                                <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv"  value="Rappi" onchange="this.form.submit()"/></div>
                            </div>
                            <div style="width:100%;">
                                <div style="float:left; width:80%; margin:0px;">Uber Eats</div>
                                <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv"  value="ubber" onchange="this.form.submit()"/></div>
                            </div>
                            <div style="width:100%;">
                                <div style="float:left; width:80%; margin:0px;">Envio Directo</div>
                                <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv"  value="Envio directo del establecimiento" onchange="this.form.submit()"/></div>
                            </div>
                            <div style="width:100%;">
                                <div style="float:left; width:80%; margin:0px;">Mensajeria</div>
                                <div style="width:20%; float:left; margin:0px;"><input type="radio" name="filtroEnv"  value="Mensajeria" onchange="this.form.submit()"/></div>
                            </div>
                        </div>

                        
                  </form>
               </div>
                                
               <script>
                  
                    function muestra_ocultaPago()
                    {
                        if (document.getElementById)
                        { //se obtiene el id
                            var el = document.getElementById('pagoToggle'); //se define la variable "el" igual a nuestro div
                             el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
                        }
                    }

                    function muestra_ocultaEnvio()
                    {
                        if (document.getElementById)
                        { //se obtiene el id
                            var el = document.getElementById('envioToggle'); //se define la variable "el" igual a nuestro div
                             el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
                        }
                    }

                    function muestra_ocultaCategoria()
                    {
                        if (document.getElementById)
                        { //se obtiene el id
                            var el = document.getElementById('categoriaToggle'); //se define la variable "el" igual a nuestro div
                             el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
                        }
                    }
        
               </script>
               <div class="col-lg-9">
                    <?php 
                        $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad';";
                        $result_tiendas = mysqli_query($conection,$query_tiendas);
                        $numberOfTIendas = 0;
                        
                        if(mysqli_fetch_assoc($result_tiendas) == 0)
                        {
                            $numberOfTIendas = 0; ?>
                            <div class="col-lg-9" style="text-align:center;">
                                <img src="images/PersonajeSuperFeliz.png" style="width:40%;"/>
                                <h3><b>Por ahora no hemos encontrado nada relacionado a lo que buscas.</b></h3>
                            </div>
                        <?php }
                        else
                        {
                            if($orden == "ascName")
                            {
                                $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' order by nombreTienda ASC;";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "descName")
                            {
                                $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' order by nombreTienda DESC;";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "ascCalificacion")
                            {
                                $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' order by correo ASC;";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else if($orden == "descCalificacion")
                            {
                                $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' order by correo DESC;";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                            else
                            {
                                $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad';";
                                $result_tiendas = mysqli_query($conection,$query_tiendas);
                            }
                           
                             //agregar aqui validacion si hay o no tiendas
                             if(mysqli_fetch_assoc($result_tiendas) == 0)
                             {
                                 include(__DIR__ . '/noHayTienda.php');
                             }
                             else
                             //FIN agregar aqui validacion si hay o no tiendas
                             {
                                 include(__DIR__ . '/tiendasBuscadorCat.php');
                             }

                        }
                    ?> 
                </div>
              </div>
           </div>
       </section>
       <!-- END WHAT WE DO -->
<?php }

static function busqueda_sector_index_como_funciona($conection) { ?>
    <!-- Seccion Buscador tienda -->
    <section id="page-content" style="background:#f5f5f5;">
           <div class="container">
               <div class="grid-system-demo-live">
                   <div class="row">
                       <div class="col-lg-12 p-t-80 p-b-20">
                           <div class="heading-text heading-section">
                               <h4 style="text-align: center; font-weight: bold; color: black;">No esperes más, ¡Comienza ahora!</h4>
                               <h5 style="text-align: center;">Selecciona tu estado, ciudad y colonia donde deseas adquirir tu servicio </br>
                                   o producto y visualiza los negocios que están más cerca de ti.</h5>
                           </div>
                       </div>
                       <div class="col-lg-12">
                           <form method="POST" >
                               <div class="row" >
                                  
                                   <div class="col-md-4" >
                                       <div class="form-group">
                                           <select name="estado" id="estado" size="number_of_options">
                                               <?php 
                                                   $query_estado = "SELECT * FROM estado order by nombre ASC";
                                                   $result_estados = mysqli_query($conection,$query_estado);
                                                  
                                                  
                                               ?>
                                               <option value="">SELECCIONA TU ESTADO</option>
                                               <?php  while ($row = mysqli_fetch_assoc($result_estados)) { ?>
                                               <option value="<?php echo utf8_encode($row['nombre']); ?>"><?php echo utf8_encode($row['nombre']); ?></option>
                                               <?php } ?>
                                           </select>
                                       </div>
                                   </div>
                                   <div class="col-md-4" >
                                       <div class="form-group">
                                       <?php 
                                                   $query_ciudad = "SELECT * FROM ciudad order by nombre ASC";
                                                   $result_ciudades = mysqli_query($conection,$query_ciudad);
                                                  
                                                  
                                               ?>
                                           <select name="ciudad" id="ciudad" size="number_of_options">
                                               <option value="">SELECCIONA TU CIUDAD</option>
                                               <?php  while ($row = mysqli_fetch_assoc($result_ciudades)) { ?>
                                               <option value="<?php echo utf8_encode($row['nombre']); ?>"><?php echo utf8_encode($row['nombre']); ?></option>
                                               <?php } ?>
                                           </select>
                                       </div>
                                   </div>
                                   
                                   <div class="col-md-4" >
                                        <div class="form-group">
                                        <?php 
                                                    $query_ciudad = "SELECT * FROM colonia order by nombre ASC";
                                                    $result_ciudades = mysqli_query($conection,$query_ciudad);
                                                   
                                                   
                                                ?>
                                            <select name="colonia" id="colonia" size="number_of_options" style="background:white;">
                                                <option value="">SELECCIONA TU COLONIA</option>
                                                <?php  while ($row = mysqli_fetch_assoc($result_ciudades)) { ?>
                                                <option value="<?php echo utf8_encode($row['nombre']); ?>"><?php echo utf8_encode($row['nombre']); ?></option>
                                                <?php } ?>
                                            </select>
                                           <!-- <input type="file" accept="image/.png" width="1024" height="1024"/> -->
                                        </div>
                                    </div>
                                   
                               </div>

                               <div class="row">
                                   <div class="col-md-2" ></div>
                                   <div class="col-md-3" >
                                       <div class="form-group">
                                       </div>
                                   </div>
                                   <div class="col-md-3" >
                                       <div class="form-group">
                                           <button type="submit" value="Buscar ahora" class="btn btn-sm" style="background: #ffa300; border-radius: 20px; color: black; border-color: white;">Buscar ahora</button>
                                       </div>
                                   </div>
                                   <div class="col-md-3" >
                                       <div class="form-group">
                                           <div class="input-group">
                                               
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-1" ></div>
                                   <div class="col-md-4"></div>
                                   <div class="col-md-4">
                                       <img src="images/comoFunciona/ComoFunciona07.png" style="width:90%;"/>
                                   </div>
                                   <div class="col-md-4"></div>
                               </div>
                           </form>
                       </div>
               </div>
           </div>
       </section> <!-- end: Seccion Buscador Tienda -->
<?php }

static function busqueda_sector_index($conection) { ?>
     <!-- Seccion Buscador tienda -->
     <section id="page-content" style="background-image: url('images/amarillo-back.png');">
            <div class="container">
                <div class="grid-system-demo-live">
                    <div class="row">
                        <div class="col-lg-12 p-t-80 p-b-20">
                            <div class="heading-text heading-section">
                                <h4 style="text-align: center; font-weight: bold; color: black;">No esperes más, ¡Comienza ahora!</h4>
                                <h5 style="text-align: center;">Selecciona tu estado, ciudad y colonia donde deseas adquirir tu servicio </br>
                                    o producto y visualiza los negocios que están más cerca de ti.</h5>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <form method="POST" >
                                <div class="row" >
                                   
                                    <div class="col-md-4" >
                                        <div class="form-group">
                                            <select name="estado" id="estado" size="number_of_options" style="background:white;">
                                                <?php 
                                                    $query_estado = "SELECT * FROM estado order by nombre ASC";
                                                    $result_estados = mysqli_query($conection,$query_estado);
                                                   
                                                   
                                                ?>
                                                <option value="">SELECCIONA TU ESTADO</option>
                                                <?php  while ($row = mysqli_fetch_assoc($result_estados)) { ?>
                                                <option value="<?php echo utf8_encode($row['nombre']); ?>"><?php echo utf8_encode($row['nombre']); ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4" >
                                        <div class="form-group">
                                        <?php 
                                                    $query_ciudad = "SELECT * FROM ciudad order by nombre ASC";
                                                    $result_ciudades = mysqli_query($conection,$query_ciudad);
                                                   
                                                   
                                                ?>
                                            <select name="ciudad" id="ciudad" size="number_of_options" style="background:white;">
                                                <option value="">SELECCIONA TU CIUDAD</option>
                                                <?php  while ($row = mysqli_fetch_assoc($result_ciudades)) { ?>
                                                <option value="<?php echo utf8_encode($row['nombre']); ?>"><?php echo utf8_encode($row['nombre']); ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4" >
                                        <div class="form-group">
                                        <?php 
                                                    $query_ciudad = "SELECT * FROM colonia order by nombre ASC";
                                                    $result_ciudades = mysqli_query($conection,$query_ciudad);
                                                   
                                                   
                                                ?>
                                            <select name="colonia" id="colonia" size="number_of_options" style="background:white;">
                                                <option value="">SELECCIONA TU COLONIA</option>
                                                <?php  while ($row = mysqli_fetch_assoc($result_ciudades)) { ?>
                                                <option value="<?php echo utf8_encode($row['nombre']); ?>"><?php echo utf8_encode($row['nombre']); ?></option>
                                                <?php } ?>
                                            </select>
                                           <!-- <input type="file" accept="image/.png" width="1024" height="1024"/> -->
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <button type="submit" value="Buscar ahora" class="btn btn-sm" style="background: black; margin:auto; border-radius: 20px; color: white; border-color: white;">Buscar ahora</button>
                                </div>
                                <div class="row">
                                        <div class="col-md-12" style="text-align:center;">
                                            <b style="color:black;">¿Tu colonia no está registrada? Menciónala</b>
                                            <a href="" style="background:black; color:white; padding-left:1%; padding-right:1%; border-radius:10%;" data-target="#modal-enviarColonia" data-toggle="modal">AQUÍ</a>
                                            <b style="color:black;">para que más MrKados se unan.</b>
                                        </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </section> <!-- end: Seccion Buscador Tienda -->
<?php }

static function tiendas_paquetes_basicos_carrusel(){ ?>
 <!--Portfolio Carousel -->
 <h4 class="mb-4">Portfolio items</h4>
                        <div class="carousel" data-items="3" data-lightbox="gallery">
                            <!-- portfolio item -->
                            <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                                <div class="portfolio-item-wrap">
                                    <div class="portfolio-image">
                                        <a href="#"><img src="images/portfolio/73.jpg" alt=""></a>
                                    </div>
                                    <div class="portfolio-description">
                                        <a href="portfolio-page-grid-gallery.html">
                                            <h3>Luxury Wine</h3>
                                            <span>Graphics / Branding</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- end: portfolio item -->
                            <!-- portfolio item -->
                            <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                                <div class="portfolio-item-wrap">
                                    <div class="portfolio-image">
                                        <a href="#"><img src="images/portfolio/60.jpg" alt=""></a>
                                    </div>
                                    <div class="portfolio-description">
                                        <a title="Paper Pouch!" data-lightbox="gallery-image" href="images/portfolio/83l.jpg"><i class="icon-maximize"></i></a>
                                        <a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end: portfolio item -->
                            <!-- portfolio item -->
                            <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                                <div class="portfolio-item-wrap">
                                    <div class="portfolio-image">
                                        <a href="#"><img src="images/portfolio/61.jpg" alt=""></a>
                                    </div>
                                    <div class="portfolio-description">
                                        <a href="portfolio-page-grid-gallery.html">
                                            <h3>Let's Go Outside</h3>
                                            <span>Illustrations / Graphics</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- end: portfolio item -->
                            <!-- portfolio item -->
                            <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
                                <div class="portfolio-item-wrap">
                                    <div class="portfolio-image">
                                        <a href="#"><img src="images/portfolio/65.jpg" alt=""></a>
                                    </div>
                                    <div class="portfolio-description" data-lightbox="gallery">
                                        <a title="Photoshop Mock-up!" data-lightbox="gallery-image" href="images/portfolio/80l.jpg"><i class="icon-copy"></i></a>
                                        <a title="Paper Pouch!" data-lightbox="gallery-image" href="images/portfolio/81l.jpg" class="hidden"></a>
                                        <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/82l.jpg" class="hidden"></a>
                                        <a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end: portfolio item -->
                            <!-- portfolio item -->
                            <div class="portfolio-item img-zoom ct-marketing ct-media ct-branding ct-marketing ct-webdesign">
                                <div class="portfolio-item-wrap">
                                    <div class="portfolio-image">
                                        <a href="#"><img src="images/portfolio/66.jpg" alt=""></a>
                                    </div>
                                    <div class="portfolio-description">
                                        <a href="portfolio-page-grid-gallery.html">
                                            <h3>Last Iceland Sunshine</h3>
                                            <span>Graphics</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- end: portfolio item -->
                            <!-- portfolio item -->
                            <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
                                <div class="portfolio-item-wrap">
                                    <div class="portfolio-image">
                                        <a href="#"><img src="images/portfolio/67.jpg" alt=""></a>
                                    </div>
                                    <div class="portfolio-description">
                                        <a title="Paper Pouch!" data-lightbox="iframe" href="https://www.youtube.com/watch?v=k6Kly58LYzY"><i class="icon-play"></i></a>
                                        <a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end: portfolio item -->
                        </div>
                        <!--Portfolio Carousel -->
<?php }

static function tiendas_paquetes_basicos($user,$usuarioTipo) {
    $conection = include 'conection.php';
    $subscription = "Hiper Mrkado";
    $queryTienda = "SELECT * FROM tiendas WHERE subscription = '$subscription' order by correo DESC";
    $resultTienda = mysqli_query($conection,$queryTienda);
    ?>
     <!-- Seccion tiendas paquetes basicos -->
     <section id="page-content" class="background-grey">
            <div class="container">
                <div class="grid-system-demo-live">
                    <div class="heading-text heading-section">
                        <h4 style="text-align: center; font-weight: bold; color: black;">Quizás te interese…</h4>
                    </div>
                    <div class="carousel" data-items="5" data-lightbox="gallery">
                            <!-- portfolio item -->
                            <?php while ($row = mysqli_fetch_assoc($resultTienda)) { 
                                 $categoria = $row['giro'];
                                 $logo = $row['logo'];
                                 $id = $row['id'];
                                 $web = $row['paginaWeb'];
                                 $direccion = $row['direccion'];
                                 $whatsaap = $row['whatsaap'];
                                 $facebook = $row['linkFacebook'];
                                 $telefono = $row['telefono'];
                                ?>
                                
                                    <div class="product" style="box-shadow:2px 2px 2px 2px #888888;">
                                        <div class="product-image">
                                            <div style="width:100%; height:60px;">
                                                <!-- Lugar Estrellas  -->
                                                <?php if($row['correo'] > "0" && $row['correo'] < "1.5") { ?>
                                                        <div style="width:100%; height:25px; margin-left:90%;">
                                                            <div class="product-rate">
                                                                <i class="fa fa-star"></i> 
                                                            </div>
                                                        </div>    
                                                    
                                                    <?php }
                                                    
                                                    
                                                     else if($row['correo'] >= "1.5" && $row['correo'] < "2.5") {
                                                     ?> 
                                                        <div style="width:100%; height:25px; margin-left:80%;">
                                                            <div class="product-rate">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                            </div>
                                                        </div>    
                                                      <?php } 

                                                     else if($row['correo'] >= "2.5" && $row['correo'] < "3.5") {
                                                     ?> 
                                                       <div style="width:100%; height:25px; margin-left:70%;">
                                                            <div class="product-rate">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                            </div>
                                                        </div>    
                                                      <?php } 
                                                    
                                                     else if($row['correo'] >= "3.5" && $row['correo'] < "4.5") {
                                                     ?> 
                                                        <div style="width:100%; height:25px; margin-left:60%;">
                                                            <div class="product-rate">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                            </div>
                                                        </div>    
                                                      <?php } 
                                                      
                                                      else if($row['correo'] >= "4.5") {
                                                     ?> 
                                                         <div style="width:100%; height:25px; margin-left:55%;">
                                                            <div class="product-rate">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                            </div>
                                                        </div>    
                                                      <?php } ?>
                                                      <!-- FIn Estrellas -->
                                            </div>
                                            <div style="width:100%; height:175px;">
                                                <?php if($logo == "") {?>
                                                <img src="images/img-negocio-sin-imagen.png">
                                                <?php } else { ?>
                                                <img src="images/Logos/<?php echo $logo; ?>"> 
                                                <?php } ?>
                                            </div>
                                            <div style="width:100%; height:50px; ">
                                                    <h6 style="text-align:center;">Categoría</h6>
                                            <?php if(strlen($categoria) <= 25) 
                                                        { ?>
                                                            <h6 style="text-align:center;"><?php echo $categoria; ?></h6>
                                                      <?php  }
                                                        else
                                                        { $valcat = substr($categoria,0,20);
                                                          $valCatToShow = $valcat." ..."?>
                                                            <h6 style="text-align:center;"><?php echo $valCatToShow; ?></h6>
                                                       <?php }
                                                    ?>
                                            </div>
                                            <div style="width:100%; height:40px;">
                                                <div style="background:#ffa000; float:left; width:100%;">
                                                <?php if(strlen($row['nombreTienda']) <= 25) 
                                                        { ?>
                                                            <h5 style="text-align:center; font-weight:bold; color:white;"><?php echo $row['nombreTienda']; ?></h5>
                                                      <?php  }
                                                        else
                                                        { $valNombre = substr($row['nombreTienda'],0,20);
                                                          $valNomToShow = $valNombre." ..."?>
                                                            <h5 style="text-align:center; font-weight:bold; color:white;"><?php echo $valNomToShow; ?></h5>
                                                       <?php }
                                                    ?>
                                                </div>
                                            </div>
                                            <div style="width:100%; height: 20px;">
                                                <div style="float:left; width:100%;">
                                                    <div style="float:left; font-size: 12px"><span>Direccion: </span></div>
                                                    <?php if(strlen($direccion) <= 35) 
                                                        { ?>
                                                            <div style="float:left; font-size: 10px;"><span style="text-align:center; font-weight:bold; color:black; margin-left:2px;"><?php echo $direccion; ?></span></div>
                                                      <?php  }
                                                        else
                                                        { $valDir = substr($direccion,0,20);
                                                          $valDirToShow = $valDir." ..."?>
                                                            <div style="float:left; font-size: 10px;"><span style="text-align:center; font-weight:bold; color:black; margin-left:2px;"><?php echo $valDirToShow; ?></span></div>
                                                       <?php }
                                                    ?>
                                                </div>
                                            </div>
                                            <div style="width:100%; height:20px;">
                                                <div style="float:left; width:100%;">
                                                    <div style="float:left; font-size: 12px"><span>Telefono: </span></div>
                                                    <?php if(strlen($telefono) <= 35) 
                                                        { ?>
                                                            <div style="float:left; font-size: 10px;"><span style="text-align:center; font-weight:bold; color:black; margin-left:2px;"><?php echo $telefono; ?></span></div>
                                                      <?php  }
                                                        else
                                                        { $valTel = substr($telefono,0,20);
                                                          $valTelToShow = $valTel." ..."?>
                                                            <div style="float:left; font-size: 10px;"><span style="text-align:center; font-weight:bold; color:black; margin-left:2px;"><?php echo $valTelToShow; ?></span></div>
                                                       <?php }
                                                    ?>
                                                </div>
                                            </div>
                                            <div style="width:100%;">
                                                <div style="float:left; width:100%;">
                                                <a href="detalleTienda.php?id=<?php echo $id; ?>&correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo ?>"><div><input type="submit" value="Ver mas" style="background:#ffa300; margin-top:5%; color:white; border:1px solid; border-color:#ffa300; width:100%;"/></div></a>
                                                </div>
                                            </div>
                                            
                                            <div style="width:50%; float:left;">
                                                    <form method="POST">
                                                        <input type="text" value="<?php echo $id; ?>" style="display:none;" name="idTiendaContactoFacebook" />
                                                        
                                                            <?php  if($user == "" || $user == "na") { ?>
                                                            <div style="float:left; width:100%;">
                                                                <a href="inicioSession.php?error=0"><input type="button" value="Facebook" style="margin-top:5%; width:100%; background:#395693; color:white; font-weight:bold; border:1px solid; border-color:#007366;"></a>
                                                            </div>
                                                            <?php } else  if($facebook != "") {?>
                                                                <div style="float:left; width:100%;">
                                                                    <input type="submit" value="Facebook" style="margin-top:5%; width:100%; background:#007366;  color:white; font-weight:bold; border:1px solid; border-color:#007366;">
                                                                </div>
                                                            <?php } else { ?>
                                                                <div style="float:left; width:100%;">
                                                                    <input type="button" disabled value="facebook" style="margin-top:5%; background:grey; width:100%; color:white; font-weight:bold; border:1px solid; border-color:grey;">
                                                                </div>
                                                            <?php } ?>
                                                        
                                                    </form>
                                            </div>

                                            <div style="width:100%;">
                                                <form method="POST">
                                                    <input type="text" value="<?php echo $id; ?>" style="display:none;" name="idTiendaContacto" />
                                                    <div style="width:50%; float:left;">
                                                        <?php  if($user == "" || $user == "na") { ?>
                                                        <div style="float:left; width:100%;">
                                                            <a href="inicioSession.php?error=0"><input type="button" value="Whatsaap" style="margin-top:5%; width:100%; background:#26cc64; color:white; font-weight:bold; border:1px solid; border-color:#26cc64;"></a>
                                                        </div>
                                                        <?php } else  if($whatsaap != "") {?>
                                                            <div style="float:left; width:100%;">
                                                                <input type="submit" value="Whatsaap" style="margin-top:5%; background:#ffa000; width:100%; color:white; font-weight:bold; border:1px solid; border-color:#ffa000;">
                                                            </div>
                                                        <?php } else { ?>
                                                            <div style="float:left; width:100%;">
                                                                <input type="button" disabled value="Whatsaap" style="margin-top:5%; background:grey; color:white; width:100%; font-weight:bold; border:1px solid; border-color:#ffa000;">
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                           
                            <?php } ?>
                            <!-- end: portfolio item -->
                    </div>
                        <!--Portfolio Carousel -->        
                </div>    
            </div>
        </section> <!-- end: Seccion tiendas paquetes basicos -->
<?php }

static function tiendas_nuevas_banner($user, $usuarioTipo) { 
    $conection = include 'conection.php';
    $subscription = "Hiper Mrkado";
    $queryTienda = "SELECT * FROM tiendas WHERE DATE(fecha_registro) >= CURDATE() - INTERVAL 7 DAY order by correo DESC;";
    $resultTienda = mysqli_query($conection,$queryTienda);
    ?>
     <!-- Seccion tiendas paquetes basicos -->
     <section id="page-content" class="background-grey">
            <div class="container">
                <div class="grid-system-demo-live">
                    <div class="heading-text heading-section">
                        <h4 style="text-align: center; font-weight: bold; color: black;">¡Explora lo nuevo!</h4>
                    </div>
                    <div class="carousel" data-items="5" data-lightbox="gallery">
                            <!-- portfolio item -->
                            <?php while ($row = mysqli_fetch_assoc($resultTienda)) { 
                                 $categoria = $row['giro'];
                                 $logo = $row['logo'];
                                 $id = $row['id'];
                                 $web = $row['paginaWeb'];
                                 $direccion = $row['direccion'];
                                 $whatsaap = $row['whatsaap'];
                                 $facebook = $row['linkFacebook'];
                                 $telefono = $row['telefono'];
                                ?>
                                
                                    <div class="product" style="box-shadow:2px 2px 2px 2px #888888;">
                                        <div class="product-image">
                                            <div style="width:100%; height:60px;">
                                                                               <!-- Lugar Estrellas  -->
                                                                               <?php if($row['correo'] > "0" && $row['correo'] < "1.5") { ?>
                                                        <div style="width:100%; height:25px; margin-left:90%;">
                                                            <div class="product-rate">
                                                                <i class="fa fa-star"></i> 
                                                            </div>
                                                        </div>    
                                                    
                                                    <?php }
                                                    
                                                    
                                                     else if($row['correo'] >= "1.5" && $row['correo'] < "2.5") {
                                                     ?> 
                                                        <div style="width:100%; height:25px; margin-left:80%;">
                                                            <div class="product-rate">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                            </div>
                                                        </div>    
                                                      <?php } 

                                                     else if($row['correo'] >= "2.5" && $row['correo'] < "3.5") {
                                                     ?> 
                                                       <div style="width:100%; height:25px; margin-left:70%;">
                                                            <div class="product-rate">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                            </div>
                                                        </div>    
                                                      <?php } 
                                                    
                                                     else if($row['correo'] >= "3.5" && $row['correo'] < "4.5") {
                                                     ?> 
                                                        <div style="width:100%; height:25px; margin-left:60%;">
                                                            <div class="product-rate">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                            </div>
                                                        </div>    
                                                      <?php } 
                                                      
                                                      else if($row['correo'] >= "4.5") {
                                                     ?> 
                                                         <div style="width:100%; height:25px; margin-left:55%;">
                                                            <div class="product-rate">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                            </div>
                                                        </div>    
                                                      <?php } ?>
                                                      <!-- FIn Estrellas -->
                                            </div>
                                            <div style="width:100%; height:150px;">
                                                <?php if($logo == "") {?>
                                                <img src="images/img-negocio-sin-imagen.png">
                                                <?php } else { ?>
                                                <img src="images/Logos/<?php echo $logo; ?>"> 
                                                <?php } ?>
                                            </div>
                                            <div style="width:100%; height:25px; ">
                                            <?php if(strlen($categoria) <= 25) 
                                                        { ?>
                                                            <h6 style="text-align:center;"><?php echo $categoria; ?></h6>
                                                      <?php  }
                                                        else
                                                        { $valcat = substr($categoria,0,20);
                                                          $valCatToShow = $valcat." ..."?>
                                                            <h6 style="text-align:center;"><?php echo $valCatToShow; ?></h6>
                                                       <?php }
                                                    ?>
                                            </div>
                                            <div style="width:100%; height:40px;">
                                                <div style="background:#ffa000; float:left; width:100%;">
                                                <?php if(strlen($row['nombreTienda']) <= 25) 
                                                        { ?>
                                                            <h5 style="text-align:center; font-weight:bold; color:white;"><?php echo $row['nombreTienda']; ?></h5>
                                                      <?php  }
                                                        else
                                                        { $valNombre = substr($row['nombreTienda'],0,20);
                                                          $valNomToShow = $valNombre." ..."?>
                                                            <h5 style="text-align:center; font-weight:bold; color:white;"><?php echo $valNomToShow; ?></h5>
                                                       <?php }
                                                    ?>
                                                </div>
                                            </div>
                                            <div style="width:100%; height: 20px;">
                                                <div style="float:left; width:100%;">
                                                    <div style="float:left; font-size: 12px"><span>Direccion: </span></div>
                                                    <?php if(strlen($direccion) <= 35) 
                                                        { ?>
                                                            <div style="float:left; font-size: 10px;"><span style="text-align:center; font-weight:bold; color:black; margin-left:2px;"><?php echo $direccion; ?></span></div>
                                                      <?php  }
                                                        else
                                                        { $valDir = substr($direccion,0,20);
                                                          $valDirToShow = $valDir." ..."?>
                                                            <div style="float:left; font-size: 10px;"><span style="text-align:center; font-weight:bold; color:black; margin-left:2px;"><?php echo $valDirToShow; ?></span></div>
                                                       <?php }
                                                    ?>
                                                </div>
                                            </div>
                                            <div style="width:100%; height:20px;">
                                                <div style="float:left; width:100%;">
                                                    <div style="float:left; font-size: 12px"><span>Telefono: </span></div>
                                                    <?php if(strlen($telefono) <= 35) 
                                                        { ?>
                                                            <div style="float:left; font-size: 10px;"><span style="text-align:center; font-weight:bold; color:black; margin-left:2px;"><?php echo $telefono; ?></span></div>
                                                      <?php  }
                                                        else
                                                        { $valTel = substr($telefono,0,20);
                                                          $valTelToShow = $valTel." ..."?>
                                                            <div style="float:left; font-size: 10px;"><span style="text-align:center; font-weight:bold; color:black; margin-left:2px;"><?php echo $valTelToShow; ?></span></div>
                                                       <?php }
                                                    ?>
                                                </div>
                                            </div>
                                            <div style="width:100%;">
                                                <div style="float:left; width:100%;">
                                                <a href="detalleTienda.php?id=<?php echo $id; ?>&correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo ?>"><div><input type="submit" value="Ver mas" style="background:#ffa300; margin-top:5%; color:white; border:1px solid; border-color:#ffa300; width:100%;"/></div></a>
                                                </div>
                                            </div>

                                            <div style="width:100%;">
                                                
                                            <div style="width:50%; float:left;">
                                                    <form method="POST">
                                                        <input type="text" value="<?php echo $id; ?>" style="display:none;" name="idTiendaContactoFacebook" />
                                                        
                                                            <?php  if($user == "" || $user == "na") { ?>
                                                            <div style="float:left; width:100%;">
                                                                <a href="inicioSession.php?error=0"><input type="button" value="Facebook" style="margin-top:5%; width:100%; background:#395693; color:white; font-weight:bold; border:1px solid; border-color:#007366;"></a>
                                                            </div>
                                                            <?php } else  if($facebook != "") {?>
                                                                <div style="float:left; width:100%;">
                                                                    <input type="submit" value="Facebook" style="margin-top:5%; width:100%; background:#007366;  color:white; font-weight:bold; border:1px solid; border-color:#007366;">
                                                                </div>
                                                            <?php } else { ?>
                                                                <div style="float:left; width:100%;">
                                                                    <input type="button" disabled value="facebook" style="margin-top:5%; background:grey; width:100%; color:white; font-weight:bold; border:1px solid; border-color:grey;">
                                                                </div>
                                                            <?php } ?>
                                                        
                                                    </form>
                                            </div>

                                            <div style="width:100%;">
                                                <form method="POST">
                                                    <input type="text" value="<?php echo $id; ?>" style="display:none;" name="idTiendaContacto" />
                                                    <div style="width:50%; float:left;">
                                                        <?php  if($user == "" || $user == "na") { ?>
                                                        <div style="float:left; width:100%;">
                                                            <a href="inicioSession.php?error=0"><input type="button" value="Whatsaap" style="margin-top:5%; width:100%; background:#26cc64; color:white; font-weight:bold; border:1px solid; border-color:#26cc64;"></a>
                                                        </div>
                                                        <?php } else  if($whatsaap != "") {?>
                                                            <div style="float:left; width:100%;">
                                                                <input type="submit" value="Whatsaap" style="margin-top:5%; background:#ffa000; width:100%; color:white; font-weight:bold; border:1px solid; border-color:#ffa000;">
                                                            </div>
                                                        <?php } else { ?>
                                                            <div style="float:left; width:100%;">
                                                                <input type="button" disabled value="Whatsaap" style="margin-top:5%; background:grey; color:white; width:100%; font-weight:bold; border:1px solid; border-color:#ffa000;">
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </form>
                                            </div>
                                                
                                            </div>


                                                   
                                             
                                        </div>
                                    </div>
                           
                            <?php } ?>
                            <!-- end: portfolio item -->
                    </div>
                        <!--Portfolio Carousel -->        
                </div>    
            </div>
        </section> <!-- end: Seccion tiendas paquetes basicos -->
<?php }

static function categorias_banner_index($user, $type, $conection) { ?>
<!-- Seccion categorias -->
<section id="page-content" class="background-black">
   <div class="container">
       <div class="grid-system-demo-live">
           <div class="heading-text heading-section">
               <h4 style="text-align: center; font-weight: bold; color: #ffbe00;">En MrKados encontrarás...</h4>
               <h5 style="text-align: center; font-weight: bold; color:#ffbe00">El negocio que llegues a necesitar.</h5>
           </div>
           <div class="row">
                <div class="content col-lg-12">
                    <div class="carousel" data-items="6" data-dots="false"> 
                        <?php
                            $query_cat = "SELECT * FROM subcategoria order by RAND()";
                            $result_cat = mysqli_query($conection,$query_cat);
                            while ($row = mysqli_fetch_assoc($result_cat)) 
                            { ?>
                                
                                <a href="tiendasBusquedaCategorias.php?correo=<?php echo $user; ?>&type=<?php echo $type; ?>&fcat=<?php echo utf8_encode($row['subcat']); ?>"><img src="images/categorias/<?php echo $row['image']; ?>"  /></a>
                            <?php }
                        ?>
                            
                           
                    </div>
                </div>
           </div>    
       </div>    
   </div>
</section> <!-- end: Seccion categorias -->
<?php }

static function registrate_banner() { ?>
<!-- Seccion Registrate -->
<section id="registrate-content" style="background-image: url('images/green-patron.png');">
   <div class="row" style="margin-top: -40px; margin-bottom: -40px;">
       <div class="col-12" style=" text-align:center; border-right: 3px solid; border-color: white;">
           <h2 style="color:black; font-weight: bold; margin-top: 40px;">¡No esperes más!</h2> 
           <h5 style="color:black; ">Únete a nuestro mundo digital y forma parte de nuestra comunidad MrKados.</h5>
           <a href="registroUsuarios.php?error=0"><input style="background: black; color:white; font-size: 100%; border-radius: 15px; font-weight: bold; margin:auto; height: 70px; border-color: white; width: 90%;" type="button" value="REGÍSTRATE AHORA"></a>
           <br>
   <br>
   <br>
   <br>
        </div>
   </div>
</section>
<!-- <section id="registrate-content" style="background: black;">
   <div class="row" style="background: red; margin-top: -40px; margin-bottom: -40px;">
       <div class="col-6" style=" text-align:center; background-image: url('images/amarillo-back.png'); border-right: 3px solid; border-color: white;">
           <h2 style="color:black; font-weight: bold; margin-top: 40px;">Sé un MrKliente</h2> 
           <h5 style="color:black; ">Y recibe promociones de</br>nuestros Mrkados registrados.</h5>
           <a href="registroUsuarios.php?error=0"><input style="background: black; color:white; font-size: 100%; border-radius: 15px; font-weight: bold; margin:auto; height: 70px; border-color: white; width: 90%;" type="button" value="REGÍSTRATE AHORA"></a>
       </div>
       <div class="col-6" style="background: #26e990; text-align:center; background-image: url('images/green-patron.png');">
           <h2 style="color:black; font-weight: bold; margin-top: 40px;">Sé un MrKado</h2>
           <h5 style="color:black;">Anúnciate y promueve tus</br>productos o servicios GRATIS.</h5>
           <a href="registroUsuariosMerkados.php?error=0"><input style="background: black; color:white; font-size: 100%; border-radius: 15px; font-weight: bold; margin:auto; margin-bottom:10%; height: 70px; border-color: white; width: 90%;" type="button" value="REGÍSTRA TU NEGOCIO"></a>
        </div>
   </div>
</section> --> <!-- end: Seccion Registrate -->
<?php }

static function comoFuncionaBanner1() { ?>
    <!-- Seccion Registrate -->
    <section id="registrate-content" style="background:#f9f7f8;">
           
       <div class="row" style="background: red; margin-top: -40px; margin-bottom: -40px;">
           <div class="col-lg-6" style="background:#f9f7f8;">
               <div style=" width:100%">
                    <h2 style="color:black; font-weight: bold; text-align: center; margin-top: 100px;">¿CÓMO FUNCIONA?</h2> 
                    <h4 style="color:black; text-align: center;"><b>En 5 simples pasos</b> podrás encontrar</br>
        negocios de calidad en tu colonia y ciudad.</h4>
                </div>
           </div>
           <div class="col-lg-6" style="background: #f9f7f8;">
                <div style=" width:100%">
                    <img src="images/comoFunciona/ComoFunciona01.jpg" style="width:50%; margin-left:10%;"/>
                </div>
            </div>
       </div>
</section> <!-- end: Seccion Registrate -->
<?php }

static function comoFuncionaBanner2() { ?>
    <!-- Seccion Registrate -->
    <section id="registrate-content" style="background-image: url('images/amarillo-back.png');">
           
       <div class="row" style=" margin-top: -40px; margin-bottom: -40px;">
           <div class="col-lg-6" style="">
               <div style=" width:100%">
                    <img src="images/comoFunciona/ComoFunciona02.png" style="width:50%; margin-left:25%;"/>
                </div>
           </div>
           <div class="col-lg-6" style="">
                <div style=" width:100%">
                    <h2 style="color:black; font-weight: bold; padding-left:30%; margin-top: 100px;">1. Regístrate</h2> 
                    <h4 style="color:black;">Da click <a href="registroUsuarios.php"><b style="color:black;">AQUÍ</b></a> y registrate como MrKliente</h4>
                </div>
            </div>
       </div>
</section> <!-- end: Seccion Registrate -->
<?php }

static function comoFuncionaBanner3() { ?>
    <!-- Seccion Registrate -->
    <section id="registrate-content" style="background:#f9f7f8;">
           
       <div class="row" style="background: red; margin-top: -40px; margin-bottom: -40px;">
           <div class="col-lg-6" style="background:#f9f7f8;">
               <div style=" width:100%">
                    <h2 style="color:black; font-weight: bold; text-align: center; margin-top: 100px;">2. Busca tu colonia</h2> 
                    <h4 style="color:black; text-align: center;"><b>Selecciona tu estado, ciudad y colonia</b> para que <br>
puedas visualizar los negocios cerca de tu hogar.</h4>
                </div>
           </div>
           <div class="col-lg-6" style="background: #f9f7f8;">
                <div style=" width:100%">
                    <img src="images/comoFunciona/ComoFunciona03.png" style="width:50%; margin-left:10%;"/>
                </div>
            </div>
       </div>
</section> <!-- end: Seccion Registrate -->
<?php }

static function comoFuncionaBanner4() { ?>
    <!-- Seccion Registrate -->
    <section id="registrate-content" style="background-image: url('images/amarillo-back.png');">
           
       <div class="row" style=" margin-top: -40px; margin-bottom: -40px;">
           <div class="col-lg-4" style="">
               <div style=" width:100%">
                    <img src="images/comoFunciona/ComoFunciona04.png" style="width:80%; margin-left:25%;"/>
                </div>
           </div>
           <div class="col-lg-8" style="">
                <div style=" width:70%">
                    <h2 style="color:black; font-weight: bold; padding-left:49%; margin-top: 70px;">3. Elige el negocio</h2> 
                    <h4 style="color:black; text-align: right; "><b>Selecciona el negocio del servicio o <br>
productos que buscas</b> y leé todo <br>
lo que ofrecen, horarios, galería, opiniones realizadas<br>
y muchas cosas más.</h4>
                    <h5 style="color:black; text-align: right; ">Si no está el negocio que buscas puedes hacernos<br> una mención para
motivarlo a que se una a MrKados <b>AQUÍ.</b></h5>
                </div>
            </div>
       </div>
</section> <!-- end: Seccion Registrate -->
<?php }

static function comoFuncionaBanner5() { ?>
    <!-- Seccion Registrate -->
    <section id="registrate-content" style="background:#f9f7f8;">
           
       <div class="row" style="background: red; margin-top: -40px; margin-bottom: -40px;">
           <div class="col-lg-8" style="background:#f9f7f8;">
               <div style=" width:100%">
                    <h2 style="color:black; font-weight: bold; margin-left:19%; margin-top: 100px;">4. Contacta al vendedor</h2> 
                    <h4 style="color:black; padding-left:18%; text-align: left;"><b>Podrás tener contacto directo</b> con el equipo de ventas<br>
del negocio y <b>así realizar tu pedido PERSONALIZADO</b> por<br>
whatsapp o por facebook.</h4>
                </div>
           </div>
           <div class="col-lg-4" style="background: #f9f7f8;">
                <div style=" width:100%">
                    <img src="images/comoFunciona/ComoFunciona05.png" style="width:80%;"/>
                </div>
            </div>
       </div>
</section> <!-- end: Seccion Registrate -->
<?php }

static function comoFuncionaBanner6() { ?>
    <!-- Seccion Registrate -->
    <section id="registrate-content" style="background-image: url('images/amarillo-back.png');">
           
       <div class="row" style=" margin-top: -40px; margin-bottom: -40px;">
           <div class="col-lg-6" style="">
               <div style=" width:100%">
                    <img src="images/comoFunciona/ComoFunciona06.png" style="width:50%; margin-left:25%;"/>
                </div>
           </div>
           <div class="col-lg-6" style="">
                <div style=" width:70%">
                    <h2 style="color:black; font-weight: bold; padding-left:32%; text-align: right; margin-top: 70px;">5. Tu opinión nos es valiosa</h2> 
                   
                    <h4 style="color:black; text-align: right; ">Una vez contactado al negocio <b>podrás<br>
brindar una opinión</b> para que nos<br>
platiques tu experiencia y así más<br>
MrKlientes y MrKados<br>
quieran unirse a nuestra plataforma</b></h4>
                </div>
            </div>
       </div>
</section> <!-- end: Seccion Registrate -->
<?php }

static function sliderRegistroUsuario($conection) { ?>
    <!-- Inspiro Slider -->
    <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">
        <!-- Slide 1 -->
       <?php
            ob_start();
            $query_slider = "SELECT * FROM sliderregistrotienda WHERE activate = '1' order by id ASC";
            $result_slider = mysqli_query($conection, $query_slider);
            //var_dump($result_slider);
            while ($row = mysqli_fetch_assoc($result_slider)) 
            {
                $imagePath = "images/imagenRegistroTienda/".$row['image'];
                $text1 = $row['text1'];
                $text2 = $row['text2']; 
           ?>
           <div class="slide kenburns" data-bg-parallax="<?php echo $imagePath; ?>">
               <div class="container">
                   <div class="slide-captions text-light">
                       <!-- Captions -->
                       <h1 data-animate="fadeInUp" style="width:70%; padding-top:3%; padding-bottom:3%; margin-left:14%; text-align:center;" data-animate-delay="600"><?php echo utf8_encode($text1); ?></h1><br>
                       <h4 style="width:100%;  text-align:center; padding-top:3%; padding-bottom:3%; background:black; font-weight:none;"><?php echo utf8_encode($text2); ?></h4>
                       <!-- end: Captions -->
                   </div>
               </div>
           </div>
       <?php } 
       ob_end_flush();?>
       <!-- end: Slide -->
    </div>
    <!--end: Inspiro Slider -->
<?php }

static function sliderRegistroUsuario2($conection) { ?>
    <!-- Inspiro Slider -->
    <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="290">
        <!-- Slide 1 -->
       <?php
             $query_slider = "SELECT * FROM sliderregistrocliente WHERE activate = '1' order by id ASC";
            $result_slider = mysqli_query($conection,$query_slider);
            while ($row = mysqli_fetch_assoc($result_slider)) 
            {
                $imagePath = $row['image'];
                $text1 = $row['text1'];
                $text2 = $row['text2']; 
           ?>
                <div class="slide" style="background-image: url('images/imagenRegistroCliente/<?php echo $imagePath; ?>');">
           <!-- <div class="slide" data-bg-parallax="images/\imagenRegistroCliente/<?php //echo $imagePath; ?>"> -->
               <div class="container">
                   <div class="slide-captions text-light">
                       <!-- Captions -->
                       <h1 data-animate="fadeInUp" data-animate-delay="600"><?php echo $text1; ?></h1><br>
                       <h2><?php echo $text2; ?></h2>
                       <!-- end: Captions -->
                   </div>
               </div>
           </div>
       <?php } ?>
       <!-- end: Slide -->
    </div>
    <!--end: Inspiro Slider -->
<?php }

static function contactanos_banner_colabora($user, $usuarioTipo)
{ ?>
    <section style="background-image: url('images/blanco-fondo.png');">

    <frameset framespacing="0" border="0" rows="1,*" frameborder="0">
        <frame name="header" scrolling="auto" noresize target="main" src="politicas.php">
        <frame name="main" src="http://secure.officio.ca/?no_logo" scrolling="auto">
        <noframes>
        <body>

        <p>This page uses frames, but your browser doesn't support them.</p>

        </body>
        </noframes>
    </frameset>

        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-7" style="text-align:center; margin-left:4%;">
                <h1 style="font-weight:bold;">¡Queremos que formes parte<br>
de nuestra plantilla laboral!</h2>
                <h5>Envíanos tu CV y llena el siguiente formulario para poder registrarte en nuestra<br>

base de datos y así poder contemplarte para colabirar en equipo.</h5>
            </div>
            <div class="col-lg-3">
            </div>
        </div>
            <!-- END FIRST SECTION -->

            <!-- START FORM -->
            <form method="POST">
                <div class="row" style="margin-top:5%; margin-left:6%; width:85%; ">
                    <div class="col-lg-6">
                        NOMBRE COMPLETO
                    </div>
                    <div class="col-lg-6">
                        CORREO ELECTRÓNICO
                    </div>

                    <div class="col-lg-6">
                        <input type="text" name="nombre" style="width:100%" required/>
                    </div>
                    <div class="col-lg-6">
                        <input type="email" name="correo" style="width:100%" required/>
                    </div>
                </div>

                <div class="row" style="margin-top:1%; margin-left:6%; width:85%; ">
                    <div class="col-lg-4">
                        ESCRIBE TU PAÍS
                    </div>
                    <div class="col-lg-4">
                        ESCRIBE TU CIUDAD
                    </div>
                    <div class="col-lg-4">
                        NACIONALIDAD
                    </div>

                    <div class="col-lg-4">
                        <input type="text" name="pais" style="width:100%" required/>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" name="ciudad" style="width:100%" required/>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" name="nacionalidad" style="width:100%" required/>
                    </div>
                </div>

                <div class="row" style="margin-top:1%; margin-left:6%; width:85%;">
                    <div class="col-lg-6">
                        ESCOLARIDAD
                    </div>
                    <div class="col-lg-6">
                        ¿EN QUÉ ÁREA TE GUSTARÍA COLABORAR?
                    </div>

                    <div class="col-lg-6">
                        <input type="text" name="escolaridad" style="width:100%" required/>
                    </div>
                    <div class="col-lg-6">
                        <select name="colabora" required>
                            <option value="">-----</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Administración">Administración</option>
                            <option value="Ventas">Ventas</option>
                            <option value="Contable">Contable</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                    
                </div>

                <div class="row" style="margin-top:1%; margin-left:6%; width:85%;">
                    <div class="col-lg-6">
                        DISPONIBILIDAD DE HORARIO LABORAL
                    </div>
                    <div class="col-lg-6">
                        TIPO DE CONTRATO QUE BUSCAS
                    </div>

                    <div class="col-lg-6">
                        <select name="horario" required>
                            <option value="">-----</option>
                            <option value="Si">SI</option>
                            <option value="No">NO</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <select name="contrato" required>
                            <option value="">-----</option>
                            <option value="Tiempo completo">Tiempo completo</option>
                            <option value="Medio tiempo">Medio tiempo</option>
                            <option value="Ventas">Practicas</option>
                            <option value="Contable">Becario</option>
                            <option value="Otro">outsourcing</option>
                        </select>
                    </div>
                    
                </div>

                <div class="row" style="margin-top:1%; margin-left:6%; width:85%;">
                    <div class="col-lg-6">
                        ADJUNTO TU CURRICULUM O PORTAFOLIO
                    </div>
                    <div class="col-lg-6">
                    </div>

                    <div class="col-lg-6">
                        <input type="file" name="adjunto" accept=".pdf,.doc" multiple />
                    </div>
                    <div class="col-lg-6">
                    </div>
                </div>

                <div class="row" style="margin-top:1%; margin-left:6%; width:85%;">
                    <div class="col-lg-12">
                        ¿POR QUÉ TE GUSTARÍA FORMAR PARTE DE NUESTRO EQUIPO LABORAL?
                    </div>
                </div>

                <div class="row" style=" margin-left:6%; width:85%;">
                    <div class="col-lg-12">
                        <textarea required name="comentario" rows="4" cols="50" style="width:100%;"></textarea>
                    </div>
                </div>

                <div class="row" style="margin-left:6%; width:85%;">
                    <div class="col-lg-12">
                        <input type="submit" Value="ENVIAR" style="width:100%; background:#ffa300; color:white; border:none;">
                    </div>
                </div>
            </form>
            <!-- END FORM -->
        </div>
    </section>
<?php }

static function contactanos_banner($user, $usuarioTipo)
{ ?>
    <section style="background-image: url('images/blanco-fondo.png');">
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6" style="text-align:center;">
                <h1 style="font-weight:bold;">Envíanos un E-Mail</h2>
                <h5>Escríbenos y en un lapso no mayor a 24hrs. estaremos en contacto<br>

contigo para resolver tus inquietudes.</h5>
                <h5>Puedes conocer <b><a href="preguntasFrecuentes.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>" style="color:black;">AQUÍ</a></b> nuestras preguntas frecuentes.</h5>
            </div>
            <div class="col-lg-3">
            </div>
        </div>
            <!-- END FIRST SECTION -->

            <!-- START FORM -->
            <form method="POST">
                <div class="row" style="margin-top:5%; margin-left:6%; width:85%; ">
                    <div class="col-lg-6">
                        ¿CUÁL ES TU NOMBRE?
                    </div>
                    <div class="col-lg-6">
                        SELECCIONA EL TIPO DE USUARIO
                    </div>

                    <div class="col-lg-6">
                        <input type="text" name="nombre" style="width:100%" required/>
                    </div>
                    <div class="col-lg-6">
                        <select type="text" name="tipo_de_usuario" style="width:100%" required>
                            <option value="">---</option>
                            <option value="Soy un MrKliente">Soy un MrKliente</option>
                            <option value="Soy un MrKado">Soy un MrKado</option>
                            <option value="Soy ambos">Soy ambos</option>
                            <option value="Aún no estoy registrado">Aún no estoy registrado</option>
                        </select>
                    </div>
                </div>

                <div class="row" style="margin-top:1%; margin-left:6%; width:85%; ">
                    <div class="col-lg-3">
                        ESCRIBE TU PAÍS
                    </div>
                    <div class="col-lg-3">
                        ESCRIBE TU CIUDAD
                    </div>
                    <div class="col-lg-3">
                        ESCRIBE TU ESTADO
                    </div>
                    <div class="col-lg-3">
                        ESCRIBE TU CÓDIGO POSTAL
                    </div>

                    <div class="col-lg-3">
                        <input type="text" name="pais" style="width:100%" required/>
                    </div>
                    <div class="col-lg-3">
                        <input type="text" name="ciudad" style="width:100%" required/>
                    </div>
                    <div class="col-lg-3">
                        <input type="text" name="estado" style="width:100%" required/>
                    </div>
                    <div class="col-lg-3">
                        <input type="text" name="codigoPostal" style="width:100%"/>
                    </div>
                </div>

                <div class="row" style="margin-top:1%; margin-left:6%; width:85%;">
                    <div class="col-lg-6">
                        ¿CUÁL ES EL ASUNTO DE ESTE CORREO?
                    </div>
                    <div class="col-lg-6">
                        ESCRIBE TU CORREO ELECTRÓNICO
                    </div>

                    <div class="col-lg-6">
                        <input type="text" name="asunto" style="width:100%" required/>
                    </div>
                    <div class="col-lg-6">
                        <input type="email" name="correo" style="width:100%" required/>
                    </div>
                </div>

                <div class="row" style="margin-top:1%; margin-left:6%; width:85%;">
                    <div class="col-lg-12">
                        ¿EN QUÉ PODEMOS APOYARTE?
                    </div>
                </div>

                <div class="row" style=" margin-left:6%; width:85%;">
                    <div class="col-lg-12">
                        <textarea name="comentario" rows="4" cols="50" style="width:100%;" required></textarea>
                    </div>
                </div>

                <div class="row" style="margin-left:6%; width:85%;">
                    <div class="col-lg-12">
                        <input type="submit" Value="ENVIAR" style="width:100%; background:#ffa300; color:white; border:none;">
                    </div>
                </div>
            </form>
            <!-- END FORM -->
        </div>
    </section>
<?php }

static function banner3_como_funciona($numberOfTIendasProductos, $numberOfTIendasServicios, $numberOfTIendasFundaciones)
{ ?>
<section style="background:black;">
    <div class="row">
        <div class="col-lg-12">
            <h1 style="color:#ffa300; text-align:center; font-weight:bold;">Actualmente somos...</h1>
        </div>
    </div>

    <div class="row" style="margin-top:2%;">
        <div class="col-lg-4">
            <h1 style="color:white; text-align:center; font-weight:bold;"><?php echo $numberOfTIendasProductos; ?></h1>
            <h4 style="color:white; text-align:center; font-weight:bold;">Produ-MrKados</h4>
        </div>

        <div class="col-lg-4">
            <h1 style="color:white; text-align:center; font-weight:bold;"><?php echo $numberOfTIendasServicios; ?></h1>
            <h4 style="color:white; text-align:center; font-weight:bold;">Servi-MrKados</h4>
        </div>

        <div class="col-lg-4">
            <h1 style="color:white; text-align:center; font-weight:bold;"><?php echo $numberOfTIendasFundaciones; ?></h1>
            <h4 style="color:white; text-align:center; font-weight:bold;">Fundaciones</h4>
        </div>
    </div>
</section>
<?php }

static function ultimoBanner_contacto()
{ ?>
<section style="background-image: url('images/amarillo-back.png');">
    <div class="row">
        <div class="col-lg-12" style="text-align:center; color:black;">
            <h2 style="color:black;"><b>¡Ayúdanos a difundir nuestra <br> plataforma con tus amigos!</b></h2>
        </div>
    </div>

    <div class="row" style="margin-top:3%;">
        <div class="col-lg-5">
        </div>
        <div class="col-lg-2">
            <a href="https://www.facebook.com/SomosMrKados"><i class="fab fa-facebook-square" style="margin-left:20%; color:black; font-size:25px;"></i></a>
            <a href="https://www.instagram.com/somosmrkados/"><i class="fab fa-instagram" style="margin-left:5%; color:black; font-size:25px;"></i></a>
            <a href="https://www.linkedin.com/in/somosmrkados/"><i class="fab fa-linkedin" style="margin-left:5%; color:black; font-size:25px;"></i></a>
            <a href="https://www.youtube.com/channel/UCEJSBcNAXRa-Izm1ILE8p4w"><i class="fab fa-youtube" style="margin-left:5%; color:black; font-size:25px;"></i></a>           
        </div>
        <div class="col-lg-5">
        </div>
        </div>
    </div>
</section>
<?php }

static function noResuelve($user,$usuarioTipo)
{ ?>
<section style="background:black;">
    <div class="container">
        <div class="row">
            <h2 style="color:white; font-weight:bold; padding-left:15%;">¿Aun no se resuelve tu duda o inquietud?</h2>
            <span style="color:white; font-size:14px; padding-left:38%;">Envíanos un mensaje <a href="contactanos.php?correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo; ?>" style="color:white;"><b>AQUÍ</b></a></span>
        </div>
    </div>
</section>
<?php }

static function preguntasClientes()
{?>
        <!-- Page Content -->
        <section id="page-content" style="background-image: url('images/amarillo-back.png');">
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

static function preguntasMercados()
{?>
        <!-- Page Content -->
        <section id="page-content" style="background-image: url('images/green-patron.png');">
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
   

<?php }

static function sliderDetalleTienda_PreguntasFrecuentes() { ?>
    <!-- Inspiro Slider -->
    <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">
        <!-- Slide 1 -->
        <div class="slide kenburns" data-bg-parallax="images/slider-contacto.jpg">
            <div class="container">
                <div class="slide-captions" style=" margin-top:-10%;">
                    <div style="background:rgba(255, 255, 255, 0.8); color:black; border-bottom:2px solid; border-color:#ffa300">
                        <div class="preguntasFrecuentes-h1">Preguntas Frecuentes</div>
                        <div class="preguntasFrecuentes-h5">Te presentamos las dudas más solicitadas para nuestros<br>
MrKlientes y MrKados</div>
                
                        <!--  <h1>que seas un Mr.Kliente</h1> -->
                    </div>
                <div>
                        </div>
                     </div>
                </div> 
            </div>
        </div>
        <!-- end: Slide 1 -->
    </div>

<?php }

static function sliderColabora() { ?>
    <!-- Inspiro Slider -->
    <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">
        <!-- Slide 1 -->
        <div class="slide kenburns" data-bg-parallax="images/slider-colabora.jpg">
            <div class="container">
                <div class="slide-captions" style=" margin-top:-10%;">
                    <div style="background:rgba(255, 255, 255, 0.8); color:black; border-bottom:2px solid; border-color:#ffa300">
                        <div class="contacto-h1">Colabora con nosotros</div>
                        <div class="contacto-h5">Juntos podemos hacer de nuestra ciudad un mundo empresarial<br>

más integral, justo y colaborativo</div>
                
                        <!--  <h1>que seas un Mr.Kliente</h1> -->
                    </div>
                <div>
                        </div>
                     </div>
                </div> 
            </div>
        </div>
        <!-- end: Slide 1 -->
    </div>

    <!-- ventana emergente -->
     <!--Modal large -->
     <div class="modal fade" id="modal-3" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">¡EVALUA ESTE NEGOCIO!</h4>
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
                                    <img src="images/PersonajeTriste.png" style="width:15%;">
                                    <input type="radio" id="2" name="reputacion" value="2">
                                    <img src="images/PersonajePensando.png" style="width:15%;">
                                    <input type="radio" id="3" name="reputacion" value="3">
                                    <img src="images/PersonajeFeliz.png" style="width:15%;">
                                    <input type="radio" id="4" name="reputacion" value="4">
                                    <img src="images/PersonajeSuperFeliz.png" style="width:15%;">
                                </div>
            
                                <div class="col-md-12">
                                    <textarea name="comentarios" rows="10" cols="100" style="color:black;" placeholder="Escribe aquí tus comentarios"></textarea>
                                    
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
    </script>
    
<?php }

static function sliderDetalleTienda_como_funciona() { ?>
    <!-- Inspiro Slider -->
    <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">
        <!-- Slide 1 -->
        <div class="slide kenburns" data-bg-parallax="images/bg-contacto.jpg">
            <div class="container">
                <div class="slide-captions" style=" margin-top:-10%;">
                    <div style="background:rgba(255, 255, 255, 0.8); color:black; border-bottom:2px solid; border-color:#ffa300">
                        <div class="contacto-h1">Contáctanos</div>
                        <div class="contacto-h5">Queremos resolver cualquier inquietud que tengas.</div>
                
                        <!--  <h1>que seas un Mr.Kliente</h1> -->
                    </div>
                <div>
                        </div>
                     </div>
                </div> 
            </div>
        </div>
        <!-- end: Slide 1 -->
    </div>

    <!-- ventana emergente -->
     <!--Modal large -->
     <div class="modal fade" id="modal-3" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">¡EVALUA ESTE NEGOCIO!</h4>
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    </div>
                    <form method="post">
                      <div class="modal-body">
                        <div class="row mb20">
                            <div class="col-md-6">
                                <h5>¿Qué te pareció el servicio de este negocio?</h5>
                            </div>
                            
                                <div class="col-md-6">
                                    <input type="radio" id="1" name="reputacion" value="1">
                                    <img src="images/PersonajeTriste.png" style="width:15%;">
                                    <input type="radio" id="2" name="reputacion" value="2">
                                    <img src="images/PersonajePensando.png" style="width:15%;" required>
                                    <input type="radio" id="3" name="reputacion" value="3">
                                    <img src="images/PersonajeFeliz.png" style="width:15%;">
                                    <input type="radio" id="4" name="reputacion" value="4">
                                    <img src="images/PersonajeSuperFeliz.png" style="width:15%;">
                                </div>
            
                                <div class="col-md-12">
                                    <textarea name="comentarios" rows="10" cols="100" style="color:black;" placeholder="Escribe aquí tus comentarios"></textarea>
                                    
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
    </script>
    
<?php }


static function sliderDetalleTienda($fachada, $nombreTienda, $categoria, $reputacion, $user, $usuarioTipo, $idContacto) { ?>
    <!-- Inspiro Slider -->
    <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">
        <!-- Slide 1 -->
        <div class="slide kenburns" data-bg-parallax="images/fachadas/<?php echo $fachada; ?>">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="slide-captions text-light" style=" margin-top:-10%;">
                    <div style="background:rgba(0, 0, 0, 0.8); height:auto; width:100%; float:left;">
                        <div style=" width:100%; float:left;">
                            <h1 data-animate="fadeInUp" style="background:none; margin-left:17%; text-align:center;" data-animate-delay="600"><?php echo $nombreTienda; ?></h1>
                        </div>
                        <div style=" width:100%; float:left;">
                            <h5 data-animate="fadeInUp" style="background:none;  text-align:center;" data-animate-delay="600"><?php echo $categoria; ?></h5>
                        </div>
                        <div style="width:100%; float:left;">
                            <?php if($reputacion == "1") { ?>
                                                            <div style="width:100%; margin-left:49%; ">
                                                                <div class="product-rate">
                                                                    <i class="fa fa-star"></i> 
                                                                </div>
                                                            </div>    
                                                        
                                                        <?php }
                                                        
                                                        else if($reputacion > "1" && $reputacion < "1.5") {
                                                            ?> 
                                                            <div style="width:100%;  margin-left:49%; ">
                                                                <div class="product-rate">
                                                                    <i class="fa fa-star"></i> 
                                                                </div>
                                                            </div>    
                                                            <?php } 
                                                        
                                                        else if($reputacion >= "1.5" && $reputacion < "2.5") {
                                                        ?> 
                                                            <div style="width:100%;  margin-left:48.5%;">
                                                                <div class="product-rate">
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                </div>
                                                            </div>    
                                                        <?php } 

                                                        else if($reputacion >= "2.5" && $reputacion < "3.5") {
                                                            ?> 
                                                            <div style="width:100%; margin-left:48.5%;">
                                                                <div class="product-rate">
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                </div>
                                                            </div>    
                                                            <?php } 

                                                        else if($reputacion >= "3.5" && $reputacion < "4.5") {
                                                        ?> 
                                                        <div style="width:100%; margin-left:47%;">
                                                            <div class="product-rate">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                            </div>
                                                        </div>    
                                                        <?php } 
                                                        
                                                        else if($reputacion >= "4.5") {
                                                            ?> 
                                                            <div style="width:100%;  margin-left:46%;">
                                                                <div class="product-rate">
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                    <i class="fa fa-star"></i> 
                                                                </div>
                                                            </div>    
                                                            <?php } 

                                                        
                                                        
                                                        ?>
                        </div>
                        <!--  <h1>que seas un Mr.Kliente</h1> -->
                    </div>

                        <div style="width:100%; float:left;">
                    
                                         
                            <?php if($usuarioTipo != 1) {?>

                                <?php if($user == "" || $user == "na") { ?>
                                            <div class="content col-lg-9" style="margin-left:60%;">
                                                <a class="btn"  href="inicioSession.php?error=0" style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;">Para evaluar este negocio, primero inicia sesion</a>
                                            </div>  
                                            <?php } else if($idContacto == 0){ ?>
                                    <div class="content col-lg-9" style="margin-left:80%;">
                                    </div>
                                <?php } else if($idContacto != 0){ ?>
                                    <div class="content col-lg-9" style="margin-left:80%;">
                                        <a class="btn" id="btn_eva" data-target="#modal-3" data-toggle="modal" href="#" style="background:#ffa300; border:1px solid; border-color:#ffa300; color:white;">Evalua este negocio</a>
                                    </div>
                                <?php } ?>
                                <script>
                                    var btn_eva = document.getElementById("btn_eva");

                                    btn_eva.onClick
                                </script>

                            <?php }?>      
                        </div>
                     </div>
                </div> 
            </div>
        </div>
        <!-- end: Slide 1 -->
    </div>

    <!-- ventana emergente -->
     <!--Modal large -->
     <div class="modal fade" id="modal-3" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title" style="text-align:center; font-weight:bold;">¡EVALUA ESTE NEGOCIO!</h4>
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
                                    <img src="images/PersonajeTriste.png" style="width:15%;">
                                    <input type="radio" id="2" name="reputacion" value="2">
                                    <img src="images/PersonajePensando.png" style="width:15%;">
                                    <input type="radio" id="3" name="reputacion" value="3">
                                    <img src="images/PersonajeFeliz.png" style="width:15%;">
                                    <input type="radio" id="4" name="reputacion" value="4">
                                    <img src="images/PersonajeSuperFeliz.png" style="width:15%;">
                                </div>
            
                                <div class="col-md-12">
                                    <textarea name="comentarios" rows="10" cols="100" style="color:black;" placeholder="Escribe aquí tus comentarios"></textarea>
                                    
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
    </script>
    
<?php }

static function tiendaInformacionGeneral($encargadoNombre, $encargadoApellido, $direccion, $paginaWeb,  $horarios, $tiempoEnvio, $factura, $correo, $social, $metodoPago, $tiposEntrega, $costoEnvio, $descripcionEnvio, $whatsaap,$facebook, $citas, $nombreTienda, $id, $user, $telefono, $email, $linkUber, $linkRappi)
{ ?>
    <section style="background-image: url('images/blanco-fondo.png');">
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
                    <?php 
                    if($encargadoNombre == "")
                    {
                        echo "N/A"; 
                    }
                    else
                    {
                        echo $encargadoNombre." ".$encargadoApellido; 
                    }
                    ?>
                </div>
                <div class="col-lg-4" >
                    <?php 
                        if($direccion == "")
                        {
                            echo "N/A"; 
                        }
                        else
                        {
                            echo $direccion; 
                        }
                    ?>
                </div>
                <div class="col-lg-4" >
                    <?php 
                        if($paginaWeb == "")
                        {
                            echo "N/A"; 
                        }
                        else
                        { ?>
                            <a href="https://<?php echo $paginaWeb; ?>" target="_blank" ><?php echo $paginaWeb; ?></a>
                        <?php }
                    ?>
                </div>

                <div class="col-lg-4" style=" font-weight:bold;">
                    Telefono:
                </div>
                <div class="col-lg-4" style=" font-weight:bold;">
                    Link Uber:
                </div>
                <div class="col-lg-4" style=" font-weight:bold;">
                    Link Rappi:
                </div>

                <div class="col-lg-4">
                <?php 
                        if($telefono == "")
                        {
                            echo "N/A"; 
                        }
                        else
                        {
                            echo $telefono; 
                        }
                    ?>
                </div>
                <div class="col-lg-4" >
                <?php 
                        if($linkUber == "")
                        {
                            echo "N/A"; 
                        }
                        else
                        { ?>
                            <a href="https://<?php echo $linkUber; ?>" target="_blank"><?php echo $linkUber; ?></a>
                        <?php }
                    ?>
                
                </div>
                <div class="col-lg-4" >
                <?php 
                        if($linkRappi == "")
                        {
                            echo "N/A"; 
                        }
                        else
                        { ?>
                             <a href="https://<?php echo $linkRappi; ?>" target="_blank"><?php echo $linkRappi; ?></a>
                        <?php }
                    ?>
                   
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
                       <div> Martes CERRADO </div>
                    <?php } 

                    if($horario[4] != " ")
                    { ?>
                        <div> Miercoles de <?php echo $horario[4]." a ".$horario[5];  ?> </div>
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
                    <?php
                        if($tiempoEnvio == "")
                        {
                            echo "N/A";
                        } 
                        else
                        {
                            echo $tiempoEnvio." min."; 
                        }
                    ?>
                    <div style=" font-weight:bold; margin-top:3%;">
                        ¿Emite factura?
                    </div>
                    <div>
                        <?php
                            if($factura == "")
                            {
                                echo "N/A";
                            } 
                            else
                            {
                                echo $factura;
                            } 
                        ?>
                    </div>
                </div>
                <div class="col-lg-4" >
                    <?php echo $email; ?>
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
                                if($redes[$i] == "Instagram")
                                {
                                    ?> <div><img src="images/redesSociales/instagram-removebg-preview.png" width="20px" /><a href="https://instagram.com/<?php echo $redes[$i+1]; ?>" target="_blank"><?php echo $redes[$i+1]; $i++;?></a></div> <?php
                                }
                                else if($redes[$i] == "Twitter")
                                {
                                    ?> <div><img src="images/redesSociales/twitter-removebg-preview.png"  width="25px" /><a href="https://twitter.com/<?php echo $redes[$i+1]; ?>" target="_blank"><?php echo $redes[$i+1]; $i++;?></a></div> <?php
                                }
                                else if($redes[$i] == "TikTok")
                                {
                                    ?> <div><img src="images/redesSociales/tiktok-removebg-preview.png"  width="20px" /><a href="https://tiktok.com/<?php echo $redes[$i+1]; ?>" target="_blank"><?php echo $redes[$i+1]; $i++;?></a></div> <?php
                                }
                                else if($redes[$i] == "Facebook")
                                {
                                    ?> <div><img src="images/redesSociales/facebook-removebg-preview.png"  width="20px" /><a href="https://facebook.com/<?php echo $redes[$i+1]; ?>" target="_blank"><?php echo $redes[$i+1]; $i++;?></a></div> <?php
                                }
                                else if($redes[$i] == "LinkedIn corporativo")
                                {
                                    ?> <div><img src="images/redesSociales/linkedin-removebg-preview.png"  width="20px" /><a href="https://linkedin.com/in/<?php echo $redes[$i+1]; ?>" target="_blank"><?php echo $redes[$i+1]; $i++;?></a></div> <?php
                                }
                                else if($redes[$i] == "LinkedIn personal")
                                {
                                    ?> <div><img src="images/redesSociales/linkedin-removebg-preview.png"  width="20px" /><a href="https://linkedin.com/in/<?php echo $redes[$i+1]; ?>" target="_blank"><?php echo $redes[$i+1]; $i++;?></a></div> <?php
                                }
                                else if($redes[$i] == "Youtube")
                                {
                                    ?> <div><img src="images/redesSociales/youtube-removebg-preview.png"  width="20px" /><a href="https://youtube.com/<?php echo $redes[$i+1]; ?>" target="_blank"><?php echo $redes[$i+1]; $i++;?></a></div> <?php
                                }
                            }
                          }
                    ?>
                    </div>
                </div>
                

                <div class="col-lg-12">
                    <div style="font-weight:bold; text-align:left; margin-top:3%;">Métodos de pago:</div>
                </div>
                
                <?php $pieces = explode(",", $metodoPago); 
                if($pieces[0] == "") {  ?>  <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" disabled checked></div>  

                <div class="col-lg-1" >Efectivo</div> <?php } ?>
                
               <?php if($pieces[1] == "") {  ?>  <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" disabled checked></div> 

                <div style="width:20%;">Tarjeta de crédito / Débito</div> <?php } ?>

                <?php if($pieces[2] == "") {  ?>  <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" checked disabled></div> 
                
                <div style="width:15%;">Tienda Dptal</div> <?php }?>

                <?php if($pieces[3] == "") {  ?> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" disabled checked></div> 

                <div style="width:20%;">Transferencia electrónica</div><?php }?>
                
                <?php if($pieces[4] == "") {  ?>  <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" disabled checked></div> 

                <div style="width:20%;">Depósito en banco</div><?php }?>

                <div class="col-lg-12">
                    <div style="font-weight:bold; text-align:left; margin-top:3%;">Tipos de entrega:</div>
                </div>
                
                <?php $piece = explode(",", $tiposEntrega); 
                if($piece[0] == "") {  ?>  <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" disabled checked></div> 

                <div style="width:20%;">Recogerlo directamente</div> <?php }?>
                
               <?php if($piece[1] == "") {  ?>  <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" disabled checked></div> 

                <div style="width:10%;">RAPPI</div> <?php }?>

                <?php if($piece[2] == "") {  ?>  <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" checked disabled></div> 
                
                <div style="width:10%;">Uber eats</div> <?php }?>

                <?php if($piece[3] == "") {  ?>  <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" disabled checked></div> 

                <div style="width:25%;">Envío directo del establecimiento</div> <?php }?>
                
                <?php if($piece[4] == "") {  ?>  <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" disabled checked></div> 

                <div style="width:20%;">Mensajería</div><?php }?>

                <div class="col-lg-12">
                    <div style="font-weight:bold; text-align:left; margin-top:3%;">Costo de envío:</div>
                </div>
                
                <?php

                if($costoEnvio == "") {  ?> <div style="width:3%;">N/A</div> <?php } 
                else { ?>  <div style="width:3%;"><input type="checkbox" style="margin-left:20%;" disabled checked></div>

                <div style="width:5%;">SI</div>
                <div style="width:3%;"><?php echo $costoEnvio; ?></div>
                <div style="width:1%;">MXN</div>  <?php }?>

                <div class="col-lg-12">
                    <div>Nota: <?php echo $descripcionEnvio; ?></div>
                </div>

                
                    <?php if($facebook != "") {?>
                        <div data-target="#modal-5" data-toggle="modal" class="col-lg-4"><input type="button" value="Chatea por Facebook" style="margin-top:5%; width:90%; background:#395692; color:white; font-weight:bold; border:1px solid; border-color:#395692;"></div>
                    <?php } else { ?>
                    <div class="col-lg-4"><input type="button" disabled value="Chatea por Facebook" disb style="margin-top:5%; width:90%; background:grey; color:white; font-weight:bold; border:1px solid; border-color:grey;"></div>
                    <?php } ?>

                    <?php  if($user == "" || $user == "na") { ?>
                            <div class="col-lg-4">
                                <a href="inicioSession.php?error=0" ><input type="button" value="Envía un Whats" style="margin-top:5%; width:90%; background:#26cd64; color:white; font-weight:bold; border:1px solid; border-color:#26cd64;"></a>
                            </div>
                    <?php } else  if($whatsaap != "") {?>
                        <div data-target="#modal-4" data-toggle="modal" class="col-lg-4"><input type="button" value="Envía un Whats" style="margin-top:5%; width:90%; background:#26cd64; color:white; font-weight:bold; border:1px solid; border-color:#26cd64;"></div>
                    <?php } else { ?>
                        <div class="col-lg-4"><input type="button" disabled value="Envía un Whats" style="margin-top:5%; width:90%; background:grey; color:white; font-weight:bold; border:1px solid; border-color:grey;"></div>
                    <?php } ?>

                    <?php if($citas != "") {?>
                        <div class="col-lg-4"><a href="<?php echo $citas; ?>" target="_blank"><input type="button" value="Encuentranos en Google Maps" style="margin-top:5%; width:90%; background:#e44235; color:white; font-weight:bold; border:1px solid; border-color:#e44235;"></a></div>
                    <?php } else { ?>
                         <div class="col-lg-4"><input type="button" value="Encuentranos en Google Maps" disabled style="margin-top:5%; width:90%; background:grey; color:white; font-weight:bold; border:1px solid; border-color:grey;"></div>
                    <?php } ?>
                
        
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

static function queTenemos($nombreTienda, $categoria, $categoriaImg, $id, $conection)
{  ?>
         <section>
            <div class="container">
                <div style="text-align:center;">
                    <h2>En <?php echo $nombreTienda; ?> encontrarás...</h2>
               </div>
               <div class="row" style="margin-top:5%;">

               <div class="col-lg-4">
                    <div class="icon-box effect medium border center">
                        <div class="icon">
                            <img src="images/categorias/<?php echo  $categoriaImg; ?>" style="width:100%;"/>
                        </div>
                        <h3><?php echo $categoria; ?></h3>
                    </div>
                </div>
              <?php 

                $queryEsta2 = "select * from rel_tienda_subcategoria where id_tienda = '$id';";
                $estadis2 = mysqli_query($conection,$queryEsta2);
                while($rowEsta2 = mysqli_fetch_assoc($estadis2))
                {
                    $id_sub =  $rowEsta2['id_subcategoria'];
                    $query = "select * from subcategoria where id = '$id_sub';";
                    $result = mysqli_query($conection,$query);
                    while($row = mysqli_fetch_assoc($result))
                    {   
                    ?>
                    <div class="col-lg-4">
                        <div class="icon-box effect medium border center">
                            <div class="icon">
                                <img src="images/categorias/<?php echo  $row['image']; ?>" style="width:100%;"/>
                            </div>
                            <h3><?php echo utf8_encode($row['subcat']); ?></h3>
                        </div>
                    </div> <?php
                    } 
                } ?>
              </div>
            </div>
        </section>
<?php }

static function galeria($image1, $image2, $image3, $image4, $image5)
{ ?>
<section id="page-content" style="background:white;">
            <div class="container">
                <!-- Gallery -->
                <div style="width: 122%; margin-left:-11%; text-align:center; background-image: url('images/amarillo-back.png');" >
                    <h2>Así lucimos</h2>
                </div>

                    <div class="grid-3-columns" data-margin="10" data-item="grid-item" >
                        <?php if($image1 != "") { ?>
                        <div class="grid-item" style="margin-top:4%; margin-right:10%;">
                            <img src="images/imagenMrkados/<?php echo $image1; ?>" style="width:50%;">
                        </div>
                        <?php   } ?>

                        <?php if($image2 != "") { ?>
                        <div class="grid-item" style="margin-top:4%; margin-right:10%;">
                            <img src="images/imagenMrkados/<?php echo $image2; ?>" style="width:50%;">
                        </div>
                        <?php   } ?>
                        
                        <?php if($image3 != "") { ?>
                            <div class="grid-item" style="margin-top:4%; margin-right:10%;">
                            <img src="images/imagenMrkados/<?php echo $image3; ?>" style="width:50%;">
                        </div>
                        <?php   } ?>

                        <?php if($image4 != "") { ?>
                            <div class="grid-item" style="margin-top:4%; margin-right:10%;">
                            <img src="images/imagenMrkados/<?php echo $image4; ?>" style="width:50%;">
                        </div>
                        <?php   } ?>

                        <?php if($image5 != "") { ?>
                            <div class="grid-item" style="margin-top:4%; margin-right:10%;">
                            <img src="images/imagenMrkados/<?php echo $image5; ?>" style="width:50%;">
                        </div>
                        <?php   } ?>

                    </div>
                <!-- end: Gallery -->
            </div>
        </section> <!-- end: Content -->
<?php }

static function ubicacion()
{ ?>
    <section>
    <div style="text-align:center;" >
        <h2>Ubícanos</h2>
    </div>
   <!-- <iframe style="margin-top:5%;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d20854.5685261532!2d-122.84067840000002!3d49.203953899999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sca!4v1594606198144!5m2!1ses!2sca" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2606.6353876919607!2d-122.84092658478454!3d49.20747598401816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485d7913e5600c9%3A0x848583c82a9bc3e1!2s13842%20113%20Ave%2C%20Surrey%2C%20BC%20V3R%202J5!5e0!3m2!1sen!2sca!4v1596506030747!5m2!1sen!2sca" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>
<?php }

static function primaryInformation($logo, $description, $catalogo)
{ ?>
    <section style="background-image: url('images/blanco-fondo.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" style="border:none;">
                    <div style="width:70%; margin-top:13%; margin-left:13%">
                    <?php if($logo == "")
                    { ?>
                        <img src="images/img-negocio-sin-imagen.png" style="width:100%; height:150px;">
                   <?php }
                    else
                    { ?>
                        <img src="images/Logos/<?php echo $logo; ?>" style="width:100%; height:150px;">
                   <?php } 
                    ?>
                    </div>
                </div>

                <div class="col-lg-6" style="border:none;">
                    <div style="width:100%;  font-weight:bold; color:black;">
                        Somos...
                    </div>
                    <div style="width:100%; margin-top:1%; color:black;">
                        <?php if($description == "")
                        {
                            echo "N/A";
                        }
                        else
                        {
                           echo $description;
                        }
                         ?>
                    </div>
                   <!-- <div style="width:100%; color:green;">
                        //<?php //if($catalogo == "")
                        //{ ?>
                            <input type="button" disabled data-target="#modal-1" data-toggle="modal" value="Conoce más..." style="background:grey; font-weight:bold; margin-top:5%; margin-left:35%; width:25%; border:1px solid; color:#ff9f00; border-color:grey; border-radius:15px;"/>
                        <?php //}
                        //else
                        //{ ?>
                            <input type="button" data-target="#modal-1" data-toggle="modal" value="Conoce más..." style="background:#ff9f00; font-weight:bold; margin-top:5%; margin-left:35%; width:25%; border:1px solid; border-color:#ff9f00; border-radius:15px;"/>
                        <?php //}
                        ?>
                    </div> -->
                   <div style="width:100%; color:green;">
                    <?php if($catalogo == "")
                       { ?>
                            <a href="images/catalogos/<?php echo $catalogo; ?>" download><input type="button" disabled value="Descargar" style="background:grey; font-weight:bold; margin-top:5%; margin-left:35%; width:25%; color:#ff9f00; border:1px solid; border-color:grey; border-radius:15px;"/></a>
                        <?php }
                        else
                        { ?>
                            <a href="images/catalogos/<?php echo $catalogo; ?>" download><input type="button"  value="Descargar" style="background:#ff9f00; font-weight:bold; margin-top:5%; margin-left:35%; width:25%; border:1px solid; border-color:#ff9f00; border-radius:15px;"/></a>
                        <?php }
                        ?>
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
                    <iframe src="images/catalogos/<?php echo $catalogo; ?>" frameborder="0" height="900px" ></iframe>
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

static function testimonios($id_tienda)
{ 
    $conection = include 'conection.php';
    $query_testimonio = "SELECT * FROM testimonios WHERE id_tienda = '$id_tienda';";
    $result_testimonio = mysqli_query($conection,$query_testimonio);
    ?>
    <!-- Testimonials -->
    <section>
        <h2 style="text-align:center; font-size:24px; font-weight:bold;" class="mb-4">TESTIMONIOS</h2>
            <div class="carousel testimonial testimonial-border" data-items="4" data-equalize-item=".testimonial-item">
                <!-- Testimonials item -->
                <?php
                     $contador = 0;
                     while ($row = mysqli_fetch_assoc($result_testimonio)) 
                    {
                        $contador = 
                        $comentario = $row['comentario'];
                        $reputacionTestimonio = $row['reputacion'];
                        $idUsuario = $row['id_usuario'];
                        $reputacion = $row['reputacion'];

                        $query_usuario = "SELECT * FROM usuarios WHERE id = '$idUsuario';";
                        $result_usuario = mysqli_query($conection,$query_usuario);
                        while ($row2 = mysqli_fetch_assoc($result_usuario)) 
                        {
                            $name = $row2['nombre'];
                            $apellido = $row2['apellidos'];
                        }
                        
                        ?>
                            <div class="testimonial-item">
                            <?php if($reputacion == "1") 
                                                        { ?>
                                                        <div style="width:100%; height:25px; color:#ffb800;">
                                                            <div class="product-rate">
                                                                <i class="fa fa-star"></i> 
                                                            </div>
                                                        </div>    
                                                    
                                                    <?php }
                                                    
                                                    
                                                     else if($reputacion == "2") {
                                                     ?> 
                                                        <div style="width:100%; height:25px; color:#ffb800;">
                                                            <div class="product-rate">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                            </div>
                                                        </div>    
                                                      <?php } 

                                                     else if($reputacion == "3") {
                                                     ?> 
                                                       <div style="width:100%; height:25px; color:#ffb800;">
                                                            <div class="product-rate">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                            </div>
                                                        </div>    
                                                      <?php } 
                                                    
                                                     else if($reputacion == "4") {
                                                     ?> 
                                                        <div style="width:100%; height:25px; color:#ffb800;">
                                                            <div class="product-rate">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                            </div>
                                                        </div>    
                                                      <?php } 
                                                      
                                                      else if($reputacion == "5") {
                                                     ?> 
                                                         <div style="width:100%; height:25px; color:#ffb800;">
                                                            <div class="product-rate">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                            </div>
                                                        </div>    
                                                      <?php } ?>
                            <p><?php echo $comentario; ?></p>
                            <span><?php echo $name." ".$apellido; ?> </span>
                            </div>
                        <?php
                    } ?>
            </div>
    </section>
<?php }

static function formularioRegistroUsuario($error){ ?> 
    <!-- Section -->
    <section style="background-image: url('images/blanco-fondo.png');">
            <div class="container">
            <?php if($error == 2) { ?> <div class="col-lg-9" style="background:red; margin-left:13%; margin-top:4%; margin-bottom:15%; height:50px; color:white; font-weight:bold;"><h2 style="margin-left:13%; color:white;"> Su clave o contraseña es invalido</h2> </div> <?php }
                        else if($error == 1)
                        {
                            ?> <div class="col-lg-9" style="background:red; margin-left:13%; margin-top:3%; margin-bottom:15%; height:90px; color:white; text-align:center; font-weight:bold;"> <h2 style="margin-left:5%; color:white;">Este correo ya está registrado, por favor intenta con otro</h2> </div> <?php
                        }
                     ?>
                <div class="row">
                    <div class="col-lg-8 center no-padding">
                        <form class="form-transparent-grey" method="POST">
                            <div class="row" style=" width: 115%; margin-left: -10%;">
                                <div class="col-lg-12" style="width: 110%; margin-bottom: 5%;">
                                    <h3 style="text-align: center;">Bienvenido</h3>
                                    <h5 style="text-align: center;">Estamos muy contentos de que quieras ser parte de nuestra comunidad.</h5>
                                    <h5 style="text-align: center;">Crea tu perfil con los siguientes datos y disfruta de los beneficios de los MrKados que están más cerca de ti.</h5>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label style="font-weight: bold; color: black; font-size: 11px;">¿CÓMO TE LLAMAS? *</label>
                                    <input type="text" name="nombre" placeholder="Escribe tu nombre *" class="form-control" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" name="apellido" placeholder="Escribe tu apellido *" class="form-control" style="margin-top: 6.5%;" required> 
                                </div>
                                <div class="col-lg-6 form-group" >
                                    <label style="font-weight: bold; color: black; font-size: 11px;">¿CUÁNDO ES TU CUMPLEAÑOS? *</label>
                                    <div class="row">
                                        <div class="col-lg-4 form-group">
                                            <select name="dia" size="number_of_options" required>
                                                <option value="">DD</option>
                                                <?php for($i = 1; $i <= 31; $i++)
                                                { ?>
                                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 form-group">
                                            <select name="mes" size="number_of_options" required>
                                                <option value="">MM</option>
                                                <?php for($i = 1; $i <= 12; $i++)
                                                { ?>
                                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 form-group">
                                            <select name="ano" size="number_of_options" required>
                                                <option value="">AAAA</option>
                                                <?php
                                                $year = date("Y");
                                                $yearTotal = $year - 16;
                                                for($i = $yearTotal; $i >= 1930; $i--)
                                                { ?>
                                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <label style="font-size: 08px; margin-top: -3.5%;">*Mrkados está planeado para su uso a personas de 16 años en adelante.</label>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label style=" color: black; font-size: 11px;"><b>¿CUÁL ES TU TELÉFONO? *</b> (De preferencia WhatsApp)</label>
                                    <input type="tel" pattern="[0-9]{10}" required name="telefono" placeholder="Ingresa tu número de teléfono" class="form-control">
                                    <label style="font-size: 08px;">*Escribe solo números. Ej. 4771230011.</label>
                                    <label style="font-size: 08px;">*Para que puedas contactarte rápidamente con el negocio de tu preferencia.</label>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label style="font-weight: bold; color: black; font-size: 11px;">DATOS PARA INICIAR SESIÓN</label>
                                    <input type="text" name="correo" required placeholder="Ingresa tu correo electrónico*" class="form-control">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <div class="input-group show-hide-password">
                                        <input class="form-control"  pattern=".{5,16}" title="Letras y números. Tamaño mínimo: 5. Tamaño máximo: 16" name="contrasena" placeholder="Escribe una contraseña *" type="password" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="icon-eye-off" aria-hidden="true" style="cursor: pointer;"></i></span>
                                        </div>
                                    </div>
                                   <!-- <input type="password" name="contrasena" required placeholder="Escribe una contraseña *" class="form-control"> -->
                                    <label>* Tu contraseña debe tener mínimo 5 caracteres</label>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <div class="input-group show-hide-password">
                                        <input class="form-control" pattern=".{5,16}" title="Letras y números. Tamaño mínimo: 5. Tamaño máximo: 16" name="contrasena2" placeholder="Confirma tu contraseña *" type="password" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="icon-eye-off" aria-hidden="true" style="cursor: pointer;"></i></span>
                                        </div>
                                    </div>
                                    <!-- <input type="password" name="contrasena2" required placeholder="Confirma tu contraseña *" class="form-control"> -->
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="checkbox" required name="terminos" class="form-control">
                                    <a href="terminos.php?"><label style="color: black; font-size: 11px; margin-top: 0.5%;">Acepto <b>Términos y condiciones</b></label></a>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label>* = campo obligatorio</label>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <button class="btn" type="submit" style="width: 40%; height: 120%; margin-left: 30%; border-color: black; color: white; background: black;">REGISTRARME AHORA</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Section -->
<?php }

static function bannerSatisfactorio()
{ ?>
<section style="background-image: url('images/blanco-fondo.png');">
    <div class="row">
        <div class="col-lg-4" style="background:red;">
        </div>
        <div class="col-lg-4" style="background:green;">
            <img src="images/mrkado-feliz.png" style="width:100%;"/>
        </div>
        <div class="col-lg-4" style="background:purple;">
        </div>
    </div>
</section>
<?php }

static function formularioRegistroUsuarioMerkados($error){ ?> 
    <!-- Section -->
    <section style="background-image: url('images/blanco-fondo.png');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 center no-padding">
                        <form class="form-transparent-grey" method="POST">
                            <div class="row" style=" width: 115%; margin-left: -10%;">
                            <?php if($error == 2)
                                { ?>
                                    <div class="col-lg-12" style="width: 110%; margin-bottom: 5%; background:red;">
                                        <h3 style="color:white; margin-left:25%;">Las contraseña debe ser iguales</h3>
                                    </div>
                              <?php  } else if($error == 1)
                              { ?>
                                        <div class="col-lg-12" style="width: 110%; margin-bottom: 5%; background:red;">
                                        <h3 style="color:white; margin-left:25%;">El correo electronico ya esta registrado.</h3>
                                    </div>
                                <?php } ?>
                                <div class="col-lg-12" style="width: 110%; margin-bottom: 5%;">
                                    <h3 style="text-align: center;">Bienvenido</h3>
                                    <h5 style="text-align: center;">Estamos muy contentos de que quieras ser parte de nuestra comunidad.</h5>
                                 <!--   <h5 style="text-align: center;">Crea tu perfil con los siguientes datos y disfruta de los beneficios de los MrKados que están más cerca de ti.</h5> -->
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label style="font-weight: bold; color: black; font-size: 11px;">¿CÓMO TE LLAMAS?</label>
                                    <input type="text" name="nombre" placeholder="Escribe tu nombre" class="form-control" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" name="apellido" placeholder="Escribe tu apellido" class="form-control" style="margin-top: 6.5%;" required> 
                                </div>
                               
                                <div class="col-lg-6 form-group">
                                    <label style=" color: black; font-size: 11px;"><b>¿CUÁL ES TU TELÉFONO?</b> (De preferencia WhatsApp)</label>
                                    <input type="text" name="telefono" placeholder="Ingresa tu número de teléfono" class="form-control" required>
                                    <label style="font-size: 08px;">*Para que puedas contactarte rápidamente con el negocio de tu preferencia.</label>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label style="font-weight: bold; color: black; font-size: 11px;">DATOS PARA INICIAR SESIÓN</label>
                                    <input type="text" name="correo" placeholder="Ingresa tu correo electrónico" class="form-control" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="password" name="contrasena" placeholder="Escribe una contraseña" class="form-control" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Town / City</label>
                                    <input type="password" name="contrasena2" placeholder="Confirma tu contraseña" class="form-control" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="checkbox" name="terminos" class="form-control" required>
                                    <label style="color: black; font-size: 11px; margin-top: 0.5%;">Acepto <b>Términos y condiciones</b></label>
                                </div>
                               
                                <div class="col-lg-12 form-group">
                                    <button class="btn" type="submit" style="width: 40%; height: 120%; margin-left: 30%; border-color: black; color: white; background: black;">REGISTRARME AHORA</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Section -->
<?php }

static function formularioNegocio()
{ ?>
       <!-- Section -->
       <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 center no-padding">
                        <form class="form-transparent-grey" method="POST">
                            <div class="row" style=" width: 115%; margin-left: -10%;">
                                <div class="col-lg-6 form-group">
                                    <label style="font-weight: bold; color: black; font-size: 11px;">INFORMACIÓN GENERAL</label>
                                    <input type="text" name="nombre_negocio" placeholder="¿Cómo se llama tu negocio?" class="form-control" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <select name="giro" size="number_of_options" style="margin-top: 6.5%;" required>
                                        <option value="option1">Selecciona el giro principal que desempeñas</option>
                                        <option value="option2">Option2</option>
                                        <option value="Option3">Option3</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="password" name="contrasena_negocio" placeholder="Escribe una contraseña" class="form-control" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Town / City</label>
                                    <input type="password" name="contrasena_negocio2" placeholder="Confirma tu contraseña" class="form-control" required>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label style="font-weight: bold; color: black; font-size: 11px;">DESCRIBE TU EMPRESA</label>
                                    <input type="text" name="description" placeholder="Describe brevemente lo que hacen en tu negocio." class="form-control">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label style="color: black; font-weight: bold; font-size: 11px;">REPRESENTANTE COMERCIAL O DUEÑO DEL NEGOCIO</label>
                                    <input type="text" name="nombrePersona" placeholder="Escríbe tu nombre" class="form-control" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Town / City</label>
                                    <input type="text" name="nombrePersona2" placeholder="Escríbe tu apellido" class="form-control" style="margin-top: 6.5%;" required>
                                </div>
                                <div class="col-lg-12 form-group" >
                                    <label style="font-weight: bold; color: black; font-size: 11px;">INFORMACIÓN ADICIONAL DE TU NEGOCIO</label>
                                </div>
                                <div class="col-lg-6 form-group" >
                                    <div class="row">
                                        <div class="col-lg-5 form-group">
                                            <label style="font-weight: bold; color: black; font-size: 11px; margin-top: 6.5%;">LOGOTIPO DE TU NEGOCIO</label>
                                        </div>
                                        <div class="col-lg-5 form-group">
                                            <input type="file" name="logoEmpresa" value="Seleccionar imagen" accept="image/png, image/jpeg">
                                        </div>
                                        <label style="font-weight: bold; color: black; font-size: 08px; margin-top: 6.5%;">Recomendamos que sea una imagen JPG con un pero máximo de 1Mb.
                                            Si tu logo es superior a ese tamaño puedes comprimirlo <b>AQUÍ</b></label>
                                    </div>
                               </div>
                               <div class="col-lg-6 form-group" >
                                    <div class="row">
                                        <div class="col-lg-5 form-group">
                                            <label style="font-weight: bold; color: black; font-size: 11px; margin-top: 6.5%;">Catálogo/PORTAFOLIO DE TU NEGOCIO</label>
                                        </div>
                                        <div class="col-lg-5 form-group">
                                            <input type="file" name="catalogo" value="Seleccionar imagen" accept="image/png, image/jpeg">
                                        </div>
                                        <label style="font-weight: bold; color: black; font-size: 08px; margin-top: 3%">Recomendamos que sea un documento PDF con un pero máximo de 3Mb.
                                            Si tu archivo es superior a ese tamaño puedes comprimirlo <b>AQUÍ</b></label>
                                    </div>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <input type="text" name="paginaweb" placeholder="Sitio web" class="form-control">
                                </div>
                                <div class="col-lg-4 form-group">
                                    <select name="redsocial" size="number_of_options" style="margin-top: 6.5%;">
                                        <option value="option1">Red Social</option>
                                        <option value="option2">Option2</option>
                                        <option value="Option3">Option3</option>
                                    </select>
                                    <label style="color: black; font-size: 08px;"><b>+ Añadir otra red social</b> (Máximo 6 campos)</label>
                                </div>
                                <div class="col-lg-8 form-group">
                                    <input type="text" name="redSocialNombre" placeholder="/" class="form-control" style="margin-top: 3.1%;">
                                </div>
                                <div class="col-lg-12 form-group" style="border-bottom: 1px solid; border-color: black;">
                               </div>
                                <div class="col-lg-6 form-group">
                                    <label style="color: black; font-weight: bold; font-size: 14px; margin-top: 4%;">INFORMACIÓN DE TU NEGOCIO</label>
                                    <label style="color: black; font-weight: bold; font-size: 11px; margin-top: 3%;">NOMBRE DEL ENCARGADO DE SUCURSAL</label>
                                    <input type="text" name="nombreEncargado" placeholder="Escribe su nombre" class="form-control">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" name="apellidoEncargado" placeholder="Apellidos" class="form-control" style="margin-top: 19.3%;">
                                </div>
                                <div class="col-lg-6 form-group">
                                   <label style="color: black; font-weight: bold; font-size: 11px; margin-top: 3%;">DIRECCIÓN DEL NEGOCIO</label>
                                    <input type="text" name="direccionNegocio" placeholder="Escribe la calle y número interior y/o exterior" class="form-control" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" name="codigopostal" placeholder="Escribe tu C.P." class="form-control" style="margin-top: 9.7%;" required> 
                                </div>
                                <div class="col-lg-4 form-group">
                                    <select name="estado" size="number_of_options" style="margin-top: 6.5%;" required>
                                        <option value="option1">Selecciona tu estado</option>
                                        <option value="option2">Option2</option>
                                        <option value="Option3">Option3</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 form-group">
                                    <select name="ciudad" size="number_of_options" style="margin-top: 6.5%;" required>
                                        <option value="option1">Selecciona tu ciudad</option>
                                        <option value="option2">Option2</option>
                                        <option value="Option3">Option3</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 form-group">
                                    <select name="colonia" size="number_of_options" style="margin-top: 6.5%;" required>
                                        <option value="option1">Selecciona tu colonia</option>
                                        <option value="option2">Option2</option>
                                        <option value="Option3">Option3</option>
                                    </select>
                                </div>
                                <!-- Bloque que muestra el horario del negocio-->
                                <div class="col-lg-12 form-group">
                                    <label style="font-weight:bold; color: black; font-size: 11px; margin-top: 3%;">HORARIO DE ATENCIÒN</label>
                               </div>
                               <!-- lunes -->
                                <div class="col-lg-2 form-group">
                                    <label style="color: black; font-size: 11px; margin-top: 6%;">Lunes </label>
                                </div>
                                <div class="col-lg-1 form-group">
                                    <h4 style=" font-size: 11px; margin-top: 17%;">De </h4>
                                </div>
                                <div class="col-lg-2 form-group">
                                    <input type="text" name="lunesH" class="form-control">
                                </div>
                                <div class="col-lg-1 form-group">
                                    <h4 style=" font-size: 11px; margin-top: 17%;">a </h4>
                                </div>
                                <div class="col-lg-2 form-group">
                                    <input type="text" name="lunesC" class="form-control">
                                </div>
                                <div class="col-lg-1 form-group">
                                    <input type="checkbox" name="cerradoLunes" class="form-control" style="margin-top: 17%;">
                                </div>
                                <div class="col-lg-1 form-group">
                                    <h4 style=" font-size: 11px; margin-top: 17%;">Cerrado </h4>
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
                                    <input type="text" name="martesH" class="form-control">
                                </div>
                                <div class="col-lg-1 form-group">
                                    <h4 style=" font-size: 11px; margin-top: 17%;">a </h4>
                                </div>
                                <div class="col-lg-2 form-group">
                                    <input type="text" name="martesC" class="form-control">
                                </div>
                                <div class="col-lg-1 form-group">
                                    <input type="checkbox" name="cerradoMartes" class="form-control" style="margin-top: 17%;">
                                </div>
                                <div class="col-lg-1 form-group">
                                    <h4 style=" font-size: 11px; margin-top: 17%;">Cerrado </h4>
                                </div>
                                <div class="col-lg-2 form-group"></div>
                                <!-- Fin Martes-->

                                      <!-- Miercoles -->
                                      <div class="col-lg-2 form-group">
                                        <label style="color: black; font-size: 11px; margin-top: 6%;">Miercoles </label>
                                    </div>
                                    <div class="col-lg-1 form-group">
                                        <h4 style=" font-size: 11px; margin-top: 17%;">De </h4>
                                    </div>
                                    <div class="col-lg-2 form-group">
                                        <input type="text" name="miercolesH" class="form-control">
                                    </div>
                                    <div class="col-lg-1 form-group">
                                        <h4 style=" font-size: 11px; margin-top: 17%;">a </h4>
                                    </div>
                                    <div class="col-lg-2 form-group">
                                        <input type="text" name="miercolesC" class="form-control">
                                    </div>
                                    <div class="col-lg-1 form-group">
                                        <input type="checkbox" name="cerradoMiercoles" class="form-control" style="margin-top: 17%;">
                                    </div>
                                    <div class="col-lg-1 form-group">
                                        <h4 style=" font-size: 11px; margin-top: 17%;">Cerrado </h4>
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
                                <input type="text" name="juevesH" class="form-control">
                            </div>
                            <div class="col-lg-1 form-group">
                                <h4 style=" font-size: 11px; margin-top: 17%;">a </h4>
                            </div>
                            <div class="col-lg-2 form-group">
                                <input type="text" name="juevesC" class="form-control">
                            </div>
                            <div class="col-lg-1 form-group">
                                <input type="checkbox" name="cerradoJueves" class="form-control" style="margin-top: 17%;">
                            </div>
                            <div class="col-lg-1 form-group">
                                <h4 style=" font-size: 11px; margin-top: 17%;">Cerrado </h4>
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
                            <input type="text" name="viernesH" class="form-control">
                        </div>
                        <div class="col-lg-1 form-group">
                            <h4 style=" font-size: 11px; margin-top: 17%;">a </h4>
                        </div>
                        <div class="col-lg-2 form-group">
                            <input type="text" name="viernesC" class="form-control">
                        </div>
                        <div class="col-lg-1 form-group">
                            <input type="checkbox" name="cerradoViernes" class="form-control" style="margin-top: 17%;">
                        </div>
                        <div class="col-lg-1 form-group">
                            <h4 style=" font-size: 11px; margin-top: 17%;">Cerrado </h4>
                        </div>
                        <div class="col-lg-2 form-group"></div>
                        <!-- Fin Viernes-->

                    
                    <!-- Sabado -->
                          <div class="col-lg-2 form-group">
                            <label style="color: black; font-size: 11px; margin-top: 6%;">Sabado </label>
                        </div>
                        <div class="col-lg-1 form-group">
                            <h4 style=" font-size: 11px; margin-top: 17%;">De </h4>
                        </div>
                        <div class="col-lg-2 form-group">
                            <input type="text" name="sabadoH" class="form-control">
                        </div>
                        <div class="col-lg-1 form-group">
                            <h4 style=" font-size: 11px; margin-top: 17%;">a </h4>
                        </div>
                        <div class="col-lg-2 form-group">
                            <input type="text" name="sabadoC" class="form-control">
                        </div>
                        <div class="col-lg-1 form-group">
                            <input type="checkbox" name="cerradoSabado" class="form-control" style="margin-top: 17%;">
                        </div>
                        <div class="col-lg-1 form-group">
                            <h4 style=" font-size: 11px; margin-top: 17%;">Cerrado </h4>
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
                            <input type="text" name="domingoH" class="form-control">
                        </div>
                        <div class="col-lg-1 form-group">
                            <h4 style=" font-size: 11px; margin-top: 17%;">a </h4>
                        </div>
                        <div class="col-lg-2 form-group">
                            <input type="text" name="domingoC" class="form-control">
                        </div>
                        <div class="col-lg-1 form-group">
                            <input type="checkbox" name="cerradoDomingo" class="form-control" style="margin-top: 17%;">
                        </div>
                        <div class="col-lg-1 form-group">
                            <h4 style=" font-size: 11px; margin-top: 17%;">Cerrado </h4>
                        </div>
                        <div class="col-lg-2 form-group"></div>
                        <!-- Fin Domingo-->
                         <!-- Final del bloque horario del negocio-->

                        <!-- Metodos de pago -->
                        <div class="col-lg-12 form-group">
                            <label style="color: black; font-weight:bold; font-size: 11px; margin-top: 4%;">MÉTODOS DE PAGO</label>
                        </div>
                         <div class="col-lg-2 form-group">
                            <input type="checkbox" name="efectivo" value="Efectivo" class="form-control" style="margin-top: 15%;">
                            <h4 style="color: black; font-size: 9px; margin-top: 19%;">Efectivo</h4>
                        </div>
                        <div class="col-lg-2 form-group">
                            <input type="checkbox" name="tarjeta" value="Tarjeta" class="form-control" style="margin-top: 14%;">
                            <h4 style="color: black; font-size: 9px; margin-top: 13%;">Tarjeta de crédito/débito</h4>
                        </div>
                        <div class="col-lg-2 form-group">
                            <input type="checkbox" name="tiendadpal" value="TiendaPal" class="form-control" style="margin-top: 14%;">
                            <h4 style="color: black; font-size: 9px; margin-top: 18%;">Tienda Dptal</h4>
                        </div>
                        <div class="col-lg-2 form-group">
                            <input type="checkbox" name="transfer" value="Transfer" class="form-control" style="margin-top: 14%;">
                            <h4 style="color: black; font-size: 9px; margin-top: 12%;">Transferencia electrónica</h4>
                        </div>
                        <div class="col-lg-2 form-group">
                            <input type="checkbox" name="deposito" value= "Deposito" class="form-control" style="margin-top: 14%;">
                            <h4 style="color: black; font-size: 9px; margin-top: 12%;">Depósito en banco</h4>
                        </div>
                        <!-- FIn Metodos de pago -->

                        <!-- Tipos de Entregas -->
                        <div class="col-lg-12 form-group">
                            <label style="color: black; font-weight:bold; font-size: 11px; margin-top: 4%;">TIPOS DE ENTREGA</label>
                        </div>
                         <div class="col-lg-2 form-group">
                                <input type="checkbox" name="pickup" value="PickUp" class="form-control" style="margin-top: 15%;">
                                <h4 style="color: black; font-size: 9px; margin-top: 14%;">Recogerlo en el establecimiento</h4>
                        </div>
                        <div class="col-lg-2 form-group">
                            <input type="checkbox" name="rappi" class="form-control" style="margin-top: 14%;">
                            <h4 style="color: black; font-size: 9px; margin-top: 18%;">RAPPI</h4>
                        </div>
                        <div class="col-lg-2 form-group">
                            <input type="checkbox" name="ubber" class="form-control" style="margin-top: 14%;">
                            <h4 style="color: black; font-size: 9px; margin-top: 18%;">Uber Eats</h4>
                        </div>
                        <div class="col-lg-2 form-group">
                            <input type="checkbox" name="envio" class="form-control" style="margin-top: 14%;">
                            <h4 style="color: black; font-size: 9px; margin-top: 12%;">Envío directo del establecimiento</h4>
                        </div>
                        <div class="col-lg-2 form-group">
                            <input type="checkbox" name="mensajeria" class="form-control" style="margin-top: 14%;">
                            <h4 style="color: black; font-size: 9px; margin-top: 18%;">Mensajería</h4>
                        </div>
                        <!-- FIn Tipos de entregas -->

                        <!-- envios -->
                        <div class="col-lg-3 form-group">
                            <label style="color: black; font-weight: bold; font-size: 11px; margin-top: 14%;">COSTO DE ENVÍO</label>
                        </div>
                        <div class="col-lg-2 form-group">
                            <input type="checkbox" name="tieneEnvioSI" value="SI" class="form-control" style="margin-top: 22%;">
                            <h4 style="font-size: 12px; color: black; margin-top: 23%;">Si</h4>
                        </div>
                        <div class="col-lg-2 form-group">
                            <input type="checkbox" name="tieneEnvioNO" value="NO" class="form-control" style="margin-top: 22%;">
                            <h4 style="font-size: 12px; color: black; margin-top: 23%;">No</h4>
                        </div>
                        <div class="col-lg-4 form-group">
                            <input type="text" name="precio" placeholder="Coloca el precio del envío" class="form-control" style="margin-top: 7%;">
                        </div>
                        <!-- fin envios -->
                        
                        <div class="col-lg-12 form-group">
                            <input type="text" name="descriptionENvio" placeholder="Describe detalladamente las condiciones del costo de envío para evitar confusiones a la hora de cobrar a tus clientes." class="form-control">
                        </div>

                        <div class="col-lg-3 form-group">
                            <label style="color: black; font-weight: bold; font-size: 11px; margin-top: 5%;">TIEMPO DE ENVÍO</label>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="text" name="tiempoEnvio" placeholder="Tiempo promedio de las entregas a domicilio." class="form-control">
                        </div>
                        <div class="col-lg-3 form-group">
                            <label style="color: black; font-weight: bold; font-size: 11px; margin-top: 5%;">MIN</label>
                        </div>
                        
                        <div class="col-lg-3 form-group">
                            <label style="color: black; font-weight: bold; font-size: 11px; margin-top: 15%;">EMITES FACTURA</label>
                        </div>
                        <div class="col-lg-2 form-group">
                            <input type="checkbox" name="factura" value="SI" class="form-control" style="margin-top: 22%;">
                            <h4 style="font-size: 12px; color: black; margin-top: 23%;">SI</h4>
                        </div>
                        <div class="col-lg-2 form-group">
                            <input type="checkbox" name="factura" value="NO" class="form-control" style="margin-top: 22%;">
                            <h4 style="font-size: 12px; color: black; margin-top: 23%;">No</h4>
                        </div>
                        <div class="col-lg-5 form-group">
                          
                        </div>

                        <div class="col-lg-3 form-group">
                            <label style="color: black; font-weight: bold; font-size: 11px; margin-top: 15%;">¿AGENDAS CITAS?</label>
                        </div>
                        <div class="col-lg-2 form-group">
                            <input type="checkbox" name="cita" value="SI" class="form-control" style="margin-top: 22%;">
                            <h4 style="font-size: 12px; color: black; margin-top: 23%;">SI</h4>
                        </div>
                        <div class="col-lg-2 form-group">
                        <input type="checkbox" name="Cita" VALUE="NO"  class="form-control" style="margin-top: 22%;">
                            <h4 style="font-size: 12px; color: black; margin-top: 23%;">No</h4>
                        </div>
                        <div class="col-lg-5 form-group">
                          
                        </div>

                        <div class="col-lg-3 form-group">
                            <label style="color: black; font-weight: bold; font-size: 11px; margin-top: 15%;">FACHADA DE TU
                                NEGOCIO</label>
                        </div>
                        <div class="col-lg-5 form-group">
                            <input style="margin-top: 5%;" type="file" name="fachada" value="Seleccionar imagen" accept="image/png, image/jpeg">
                        </div>
                        <div class="col-lg-4 form-group">
                        </div>

                        <div class="col-lg-3 form-group">
                        </div>
                        <div class="col-lg-9 form-group">
                            <label style=" color: black; font-size: 08px;">Te recomendamos subir fotos de tu negocio para que tus clientes te puedan identificar rápidamente.
                                Recomendamos que cada imagen mida 1920x1080 pixeles y con un peso máximo de 2 mb. Para adaptar tu imagen puedes hacerlo <b>AQUÍ.</b>
                                Para reducir el tamaño de tu imagen puedes hacerlo <b>AQUÍ.</b></label>
                        </div>

                        <div class="col-lg-4 form-group">
                            <label style="color: black; font-weight: bold; font-size: 11px; margin-top: 15%;">GALERÍA DE IMÁGENES
                                DE TU NEGOCIO</label>
                        </div>
                        <div class="col-lg-4 form-group">
                            <input style="margin-top: 10%;" type="file" name="galeria1" value="Seleccionar imagen" accept="image/png, image/jpeg">
                        </div>
                        <div class="col-lg-4 form-group">
                            <input style="margin-top: 10%;" type="file" name="galeria2" value="Seleccionar imagen" accept="image/png, image/jpeg">
                        </div>
                        <div class="col-lg-4 form-group">
                          
                        </div>
                        <div class="col-lg-4 form-group">
                            <input type="file" name="galeria3" value="Seleccionar imagen" accept="image/png, image/jpeg">
                        </div>
                        <div class="col-lg-4 form-group">
                            <input  type="file" name="galeria4" value="Seleccionar imagen" accept="image/png, image/jpeg">
                        </div>
                        <div class="col-lg-4 form-group">
                          
                        </div>
                        <div class="col-lg-4 form-group">
                            <input  type="file" name="galeria5" value="Seleccionar imagen" accept="image/png, image/jpeg">
                        </div>
                        <div class="col-lg-4 form-group">
                        </div>

                        <div class="col-lg-12 form-group">
                            <label style=" color: black; font-size: 08px;">Te recomendamos subir fotos de tu negocio para que tus clientes te puedan identificar rápidamente.
                                Recomendamos que cada imagen mida 1920x1080 pixeles y con un peso máximo de 2 mb. Para adaptar tu imagen puedes hacerlo <b>AQUÍ.</b>
                                Para reducir el tamaño de tu imagen puedes hacerlo <b>AQUÍ.</b></label>
                        </div>

                        <div class="col-lg-12 form-group">
                            <label style="color: black; font-weight: bold; font-size: 11px; margin-top: 5%;">DATOS DE CONTACTO DE TU NEGOCIO</label>
                        </div>
                        <div class="col-lg-12 form-group">
                            <label style=" color: black; font-size: 08px;">Te recomendamos que asignes un WhatsApp y correo electrónico a tu negocio para que tus clientes te identifiquen y te contacten rápidamente, los personalices con
                                tu logo y para que no interfieran con tu Whatsapp y correo electrónico personal.</b></label>
                        </div>

                        <div class="col-lg-6 form-group">
                            <input type="text" name="telefonoContacto" placeholder="Teléfono celular" class="form-control">
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="text" name="whatsaap" placeholder="WhatsApp (número a 10 dígitos)" class="form-control">
                        </div>

                        <div class="col-lg-6 form-group">
                            <label style=" color: black; font-size: 08px;">Este teléfono servirá para que te anuncies y que
                                tus clientes te contacten.</label>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label style=" color: black; font-size: 08px;">Este teléfono será un botón de enlace de tu perfil
                                al whatsapp de tus clientes.</label>
                        </div>

                        <div class="col-lg-6 form-group">
                            <input type="email" name="correoElectronico" placeholder="Correo electrónico" class="form-control">
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="text" name="facebookMessenger" placeholder="Link Messenger Facebook" class="form-control">
                        </div>

                        <div class="col-lg-6 form-group">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label style=" color: black; font-size: 08px;">Este link será un botón de enlace para que puedan contactarte desde
                                tu FanPage.</label>
                        </div>

                        <div class="col-lg-12 form-group">
                            <label style="color: black; font-weight: bold; font-size: 11px; margin-top: 5%;" style=" color: black; font-size: 08px;"> <b>¿QUÉ PODEMOS ENCONTRAR EN TU NEGOCIO?</b></label>
                        </div>
                        <div class="col-lg-12 form-group">
                            <input type="text" name="keyWord1" placeholder="Escribe la(s) palabra(s) clave que podremos encontrar en tu negocio. Ej. Sodas, Medicinas, Accesorios para mascota." class="form-control">
                        </div>
                        
                        <div class="col-lg-2 form-group">
                            <input type="checkbox" name="terminos" class="form-control" style="margin-top: 22%;" required> 
                        </div>
                        <div class="col-lg-10 form-group">
                            <label style="color: black; font-weight: bold; font-size: 11px; margin-left: -15%; margin-top: 4%;">Aceptas los <b>Términos y condiciones</b></label>
                        </div>
                       
                        <div class="col-lg-12 form-group">
                            <input type="submit" name="submit" value="REGÍSTRATE AHORA" class="form-control" style="margin-top: 5%; font-size: 14px; background: black; color: white; font-weight: bold; border-radius: 10px; height: 70px;">
                        </div>

                    </div>

                    </div>                       
                        </form>
                    </div>
                </div>
            </div>
        </section>

<?php }

static function sliderRegistroTienda($slides = array())
{ ?>
<!-- Inspiro Slider -->
<div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">
        <!-- Slide 1 -->
        <?php foreach($slides as $slide) { 
                 $imagePath = $slide->getImage(); ?>
        <div class="slide kenburns" data-bg-parallax="<?php echo $imagePath ?>">
            <div class="bg-overlay"></div>
            <div class="container">
               <!---- <div class="slide-captions text-light">
                   
                    <h1 data-animate="fadeInUp" data-animate-delay="600">Falta muy poco para</h1><br>
                    <h1>que seas un Mr.Kliente</h1>
                    <h4>Encuentra los negocios que están en tu </h4>
                    <h4>colonia en un solo lugar... <b>¡Sin salir de casa!</b></h4>
                   
                </div> -->
            </div>
        </div> <?php } ?>
        <!-- end: Slide 1 -->
    </div>
    <!--end: Inspiro Slider -->
<?php }

static function Banner1Somos()
{ ?>
<section style="background-image: url('images/somos/somos01.jpg'); background-size: 100%; height:500px; background-repeat: no-repeat;">
    <div class="slide kenburns">
                <div class="bg-overlay" ></div>
                <div class="container">
                    <div class="col-lg-6" style="background:rgba(255, 255, 255, 0.5); border-radius:10px; box-shadow: 10px; margin-top:22%;">
                        <p style="padding-top:8%; color:black;" data-animate="fadeInUp" data-animate-delay="600"><b>Queremos facilitarte la búsqueda de negocios</b> que
ofrezcan servicios y productos de calidad y así,
más MrKlientes como tú utilicen nuestra plataforma.</p><br>
                    </div>
                </div>
    </div>
            <!-- end: Slide 1 -->
</section>
<?php }

static function extraMrkadosBanner1()
{ ?>
<section style="background-image: url('images/extramrkados.jpg'); background-size: 100%; height:600px; background-repeat: no-repeat;">
    <div class="slide kenburns">
                <div class="bg-overlay" ></div>
                <div class="container">
                    <div class="col-lg-4" style="background:rgba(255, 255, 255, 0.5); border-radius:10px; box-shadow: 10px; margin-top:15%;">
                        <p style="padding-top:3%;  font-size:28px; color:black;" data-animate="fadeInUp" data-animate-delay="600"><b>Servicios<br>ExtraMrKados</b></p>
                        <p style="font-size:16px;   padding-bottom:3%; color:black;" data-animate="fadeInUp" data-animate-delay="600">Porque queremos que tu negocio<br>tenga un resultado integral</p>
                    </div>
                </div>
    </div>
            <!-- end: Slide 1 -->
</section>
<?php }

static function Banner2Somos()
{ ?>
        <!-- Inspiro Slider -->
<section style="background-image: url('images/somos/somos02.jpg'); background-size: 100%; height:700px; background-repeat: no-repeat;">
    <div class="slide kenburns">
                <div class="bg-overlay" ></div>
                <div class="container">
                    <div class="col-lg-6" style="background:rgba(255, 255, 255, 0.5); margin-top:35%; border-radius:10px; box-shadow: 10px;">
                        <h3 style="text-align:center; color:black; padding-top:4%;"><b>Somos la plataforma digital...</b></h3>
                        <p style="padding-top:1%; color:black;" data-animate="fadeInUp" data-animate-delay="600">para conocer y contactar los negocios que están en tu
    colonia. Así podrás comprar lo que necesites,
    sin salir de casa. Juntos podemos mejorar la economía
    de nuestra ciudad, apoyando el #ConsumoLocal.</p><br>
                    </div>
                </div>
    </div>
            <!-- end: Slide 1 -->
</section>
<?php }

static function Banner3Somos()
{ ?>
 <section style="background-image: url('images/somos/somos03.jpg'); background-size: 100%; height:700px; background-repeat: no-repeat;">
    <div class="slide kenburns">
                <div class="bg-overlay" ></div>
                <div class="container">
                    <div class="col-lg-6" style="background:rgba(255, 255, 255, 0.5); margin-top:30%; border-radius:10px; box-shadow: 10px; margin-left:58%;">
                        <h3 style="text-align:right; color:black; padding-top:4%;"><b>Te hacemos visibles<br>
ante el mundo</b></h3>
                        <p style="padding-top:1%; color:black; text-align:right;" data-animate="fadeInUp" data-animate-delay="600">MrKados es la plataforma digital que hace la vida
más sencilla a los consumidores, pues con 3 clicks
podremos contribuir en la activación económica de
las pymes locales, ofreciendo tus servicios para que
sean visibles en el mercado digital.</p><br>
                    </div>
                </div>
    </div>
            <!-- end: Slide 1 -->
</section>
<?php }

static function Banner4Somos()
{ ?>
<section style="background-image: url('images/somos/somos04.jpg'); background-size: 100%; height:700px; background-repeat: no-repeat;">
    <div class="slide kenburns">
                <div class="bg-overlay" ></div>
                <div class="container">
                    <div class="col-lg-6" style="background:rgba(255, 255, 255, 0.5); margin-top:20%; border-radius:10px; box-shadow: 10px;">
                        <h3 style="text-align:center; color:black; padding-top:4%;"><b>Trabajamos pensando en<br>
el futuro</b></h3>
                        <p style="padding-top:1%; color:black;" data-animate="fadeInUp" data-animate-delay="600">Queremos ser el directorio digital de negocios
más grande de tu ciudad para que cualquier
persona mayor de edad pueda contactar a los
negocios que estén en su misma colonia o ciudad.
<br><br>
Proyecto ejecutado en León, Guanajuato, México.</p><br>
                    </div>
                </div>
    </div>
            <!-- end: Slide 1 -->
</section>
<?php }

static function loginRegistradoTienda($correo)
{ ?>
        <section style="background: #f1f1f1;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 offset-4">
                        <div class="panel " style="width: 240%; margin-left: -70%;">
                            <img src="images/registro_exitoso.png" style="width: 60%; margin-left: 40%; width: 20%;">
                            <h2 style="text-align: center;">¡HAZ REGISTRADO TU NEGOCIO</h2> 
                            <h2 style="text-align: center;">EXITOSAMENTE!</h2>
                            <p style="text-align: center;">Te damos la bienvenida, ahora ya eres parte de la <b>comunidad de MrKados.</b></p>
                               <p style="text-align: center;"> No olvides que con tu cuenta <b>te anuncias GRATIS</b> y aparecerás cuando los clientes compren en tu colonia.</p>
                               <p style="text-align: center;">Acabamos de enviarte un correo de confirmación para validar tu cuenta.</p>
                            <div class="panel-body">
                                <h4 style="text-align: center; font-weight: bold;">INICIAR SESIÓN</h4>
                                <form method="POST">
                                    <div class="form-group">
                                        <input style="width: 50%; margin-left: 25%;" type="text" placeholder="Ingresa tu correo electronico" value="<?php echo $correo; ?>" class="form-control">
                                    </div>
                                    <div class="form-group m-b-5">
                                        <input style="width: 50%; margin-left: 25%;" type="password" placeholder="Ingresa tu contraseña" class="form-control">
                                        <label style="margin-left: 25%;">
                                            <a href="#">¿Olvidaste tu contraseña?</a>
                                        </label>
                                    </div>
                                      
                                    <div class="form-group">
                                        <button style="border-radius: 20px; border-color:black; background: black; color:white; margin-left: 40%;" class="btn" type="button">INICIAR SESIÓN</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <p class="small" style="font-weight: bold; margin-top: 10%; color:black;">¿Te gustaría tener un mayor impulso publicitario? </br>
                        <p class="small">Conoce nuestros planes <a href="#" style="font-weight: bold; color:black;">Aquí</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Section -->
<?php }

    static function adminTemplate($correo)
    { ?>
            <!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@@page-discription">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="/src/images/Mrkados Logo.png">
    <!-- Page Title  -->
    <title>MrKados | Admin </title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="/src/assets/css/dashlite.css?ver=1.6.0">
    <link id="skin-default" rel="stylesheet" href="/src/assets/css/theme.css?ver=1.6.0">
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="html/general/index.html" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="/src/images/logo.png"  srcset="/src/images/logo2x.png 2x" alt="logo">
                            <img class="logo-dark logo-img" src="/src/images/logo-dark.png" srcset="/src/images/logo-dark2x.png 2x" alt="logo-dark">
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
                                    <a href="html/general/index.html" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                        <span class="nk-menu-text">Default Dashboard</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="html/general/index-crypto.html" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-bitcoin-cash"></em></span>
                                        <span class="nk-menu-text">Crypto Dashboard</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="html/general/index-analytics.html" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-growth"></em></span>
                                        <span class="nk-menu-text">Analytics Dashboard</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="html/general/index-invest.html" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                                        <span class="nk-menu-text">Invest Dashboard</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Exclusive Panel</h6>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="html/covid/index.html" class="nk-menu-link" target="_blank">
                                        <span class="nk-menu-icon"><em class="icon ni ni-help-alt"></em></span>
                                        <span class="nk-menu-text">Coronavirus (COVID-19)</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="html/subscription/index.html" class="nk-menu-link" target="_blank">
                                        <span class="nk-menu-icon"><em class="icon ni ni-calendar-booking"></em></span>
                                        <span class="nk-menu-text">Subscription - SaaS</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="html/crypto/index.html" class="nk-menu-link" target="_blank">
                                        <span class="nk-menu-icon"><em class="icon ni ni-wallet-saving"></em></span>
                                        <span class="nk-menu-text">Crypto - Buy Sell</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="html/invest/index.html" class="nk-menu-link" target="_blank">
                                        <span class="nk-menu-icon"><em class="icon ni ni-invest"></em></span>
                                        <span class="nk-menu-text">Crypto - Investment</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="html/apps/messages/index.html" class="nk-menu-link" target="_blank">
                                        <span class="nk-menu-icon"><em class="icon ni ni-chat"></em></span>
                                        <span class="nk-menu-text">Messages</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="html/apps/inbox/index.html" class="nk-menu-link" target="_blank">
                                        <span class="nk-menu-icon"><em class="icon ni ni-inbox"></em></span>
                                        <span class="nk-menu-text">Inbox / Mail</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="html/apps/file-manager/index.html" class="nk-menu-link" target="_blank">
                                        <span class="nk-menu-icon"><em class="icon ni ni-folder"></em></span>
                                        <span class="nk-menu-text">File Manager</span>
                                        <span class="nk-menu-badge badge-warning">New</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="html/apps/chats/index.html" class="nk-menu-link" target="_blank">
                                        <span class="nk-menu-icon"><em class="icon ni ni-chat-circle"></em></span>
                                        <span class="nk-menu-text">Chats</span>
                                        <span class="nk-menu-badge">New</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Applications</h6>
                                </li><!-- .nk-menu-heading -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text">User Manage</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="html/general/user-list-regular.html" class="nk-menu-link"><span class="nk-menu-text">User List - Regular</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/user-list-compact.html" class="nk-menu-link"><span class="nk-menu-text">User List - Compact</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/user-details-regular.html" class="nk-menu-link"><span class="nk-menu-text">User Details - Regular</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/user-profile-regular.html" class="nk-menu-link"><span class="nk-menu-text">User Profile - Regular</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                                        <span class="nk-menu-text">AML / KYCs</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="html/general/kyc-list-regular.html" class="nk-menu-link"><span class="nk-menu-text">KYC List - Regular</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/kyc-details-regular.html" class="nk-menu-link"><span class="nk-menu-text">KYC Details - Regular</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span>
                                        <span class="nk-menu-text">Transactions</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="html/general/transaction-basic.html" class="nk-menu-link"><span class="nk-menu-text">Tranx List - Basic</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/transaction-crypto.html" class="nk-menu-link"><span class="nk-menu-text">Tranx List - Crypto</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span>
                                        <span class="nk-menu-text">Applications</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="html/general/apps-messages.html" class="nk-menu-link"><span class="nk-menu-text">Messages</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/apps-inbox.html" class="nk-menu-link"><span class="nk-menu-text">Inbox / Mail</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/apps-file-manager.html" class="nk-menu-link"><span class="nk-menu-text">File Manager</span><span class="nk-menu-badge badge-warning">New</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/apps-chats.html" class="nk-menu-link"><span class="nk-menu-text">Chats / Messenger</span><span class="nk-menu-badge badge-warning">New</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Misc Pages</h6>
                                </li><!-- .nk-menu-heading -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-signin"></em></span>
                                        <span class="nk-menu-text">Auth Pages</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="html/general/pages/auths/auth-login.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Login / Signin</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/pages/auths/auth-register.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Register / Signup</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/pages/auths/auth-reset.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Forgot Password</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/pages/auths/auth-success.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Success / Confirm</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Classic Version - v2</span></a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="html/general/pages/auths/auth-login-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Login / Signin</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/general/pages/auths/auth-register-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Register / Signup</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/general/pages/auths/auth-reset-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Forgot Password</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/general/pages/auths/auth-success-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Success / Confirm</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">No Slider Version - v3</span></a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="html/general/pages/auths/auth-login-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Login / Signin</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/general/pages/auths/auth-register-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Register / Signup</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/general/pages/auths/auth-reset-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Forgot Password</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="html/general/pages/auths/auth-success-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Success / Confirm</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                                        <span class="nk-menu-text">Error Pages</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="html/general/pages/errors/404-classic.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">404 Classic</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/pages/errors/504-classic.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">504 Classic</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/pages/errors/404-s1.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">404 Modern</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/pages/errors/504-s1.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">504 Modern</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                                        <span class="nk-menu-text">Other Pages</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="html/general/_blank.html" class="nk-menu-link"><span class="nk-menu-text">Blank / Startup</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/pages/faqs.html" class="nk-menu-link"><span class="nk-menu-text">Faqs / Help</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/pages/terms-policy.html" class="nk-menu-link"><span class="nk-menu-text">Terms / Policy</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/pages/regular-v1.html" class="nk-menu-link"><span class="nk-menu-text">Regular Page - v1</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/pages/regular-v2.html" class="nk-menu-link"><span class="nk-menu-text">Regular Page - v2</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Components</h6>
                                </li><!-- .nk-menu-heading -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-layers"></em></span>
                                        <span class="nk-menu-text">Ui Elements</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/elements/alerts.html" class="nk-menu-link"><span class="nk-menu-text">Alerts</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/elements/accordions.html" class="nk-menu-link"><span class="nk-menu-text">Accordions</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/elements/badges.html" class="nk-menu-link"><span class="nk-menu-text">Badges</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/elements/buttons.html" class="nk-menu-link"><span class="nk-menu-text">Buttons</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/elements/buttons-group.html" class="nk-menu-link"><span class="nk-menu-text">Button Group</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/elements/breadcrumb.html" class="nk-menu-link"><span class="nk-menu-text">Breadcrumb</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/elements/cards.html" class="nk-menu-link"><span class="nk-menu-text">Cards</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/elements/carousel.html" class="nk-menu-link"><span class="nk-menu-text">Carousel</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/elements/modals.html" class="nk-menu-link"><span class="nk-menu-text">Modals</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/elements/pagination.html" class="nk-menu-link"><span class="nk-menu-text">Pagination</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/elements/popover.html" class="nk-menu-link"><span class="nk-menu-text">Popovers</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/elements/progress.html" class="nk-menu-link"><span class="nk-menu-text">Progress</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/elements/spinner.html" class="nk-menu-link"><span class="nk-menu-text">Spinner</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/elements/tabs.html" class="nk-menu-link"><span class="nk-menu-text">Tabs</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/elements/toast.html" class="nk-menu-link"><span class="nk-menu-text">Toasts</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/elements/tooltip.html" class="nk-menu-link"><span class="nk-menu-text">Tooltip</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/elements/typography.html" class="nk-menu-link"><span class="nk-menu-text">Typography</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Utilities</span></a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item"><a href="html/general/components/elements/util-border.html" class="nk-menu-link"><span class="nk-menu-text">Border</span></a></li>
                                                <li class="nk-menu-item"><a href="html/general/components/elements/util-colors.html" class="nk-menu-link"><span class="nk-menu-text">Colors</span></a></li>
                                                <li class="nk-menu-item"><a href="html/general/components/elements/util-display.html" class="nk-menu-link"><span class="nk-menu-text">Display</span></a></li>
                                                <li class="nk-menu-item"><a href="html/general/components/elements/util-embeded.html" class="nk-menu-link"><span class="nk-menu-text">Embeded</span></a></li>
                                                <li class="nk-menu-item"><a href="html/general/components/elements/util-flex.html" class="nk-menu-link"><span class="nk-menu-text">Flex</span></a></li>
                                                <li class="nk-menu-item"><a href="html/general/components/elements/util-text.html" class="nk-menu-link"><span class="nk-menu-text">Text</span></a></li>
                                                <li class="nk-menu-item"><a href="html/general/components/elements/util-sizing.html" class="nk-menu-link"><span class="nk-menu-text">Sizing</span></a></li>
                                                <li class="nk-menu-item"><a href="html/general/components/elements/util-spacing.html" class="nk-menu-link"><span class="nk-menu-text">Spacing</span></a></li>
                                                <li class="nk-menu-item"><a href="html/general/components/elements/util-others.html" class="nk-menu-link"><span class="nk-menu-text">Others</span></a></li>
                                            </ul><!-- .nk-menu-sub -->
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dot-box"></em></span>
                                        <span class="nk-menu-text">Crafted Icons</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/misc/svg-icons.html" class="nk-menu-link">
                                                <span class="nk-menu-text">SVG Icon - Exclusive</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/misc/nioicon.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Nioicon - HandCrafted</span>
                                            </a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-table-view"></em></span>
                                        <span class="nk-menu-text">Tables</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/tables/table-basic.html" class="nk-menu-link"><span class="nk-menu-text">Basic Tables</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/tables/table-special.html" class="nk-menu-link"><span class="nk-menu-text">Special Tables</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/tables/table-datatable.html" class="nk-menu-link"><span class="nk-menu-text">DataTables</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-card-view"></em></span>
                                        <span class="nk-menu-text">Forms</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/forms/form-elements.html" class="nk-menu-link"><span class="nk-menu-text">Form Elements</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/forms/form-layouts.html" class="nk-menu-link"><span class="nk-menu-text">Form Layouts</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/forms/form-validation.html" class="nk-menu-link"><span class="nk-menu-text">Form Validation</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/forms/form-wizard.html" class="nk-menu-link"><span class="nk-menu-text">Wizard Basic</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-pie"></em></span>
                                        <span class="nk-menu-text">Charts</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/charts/chartjs.html" class="nk-menu-link"><span class="nk-menu-text">Chart JS</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/general/components/charts/knob.html" class="nk-menu-link"><span class="nk-menu-text">Knob JS</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="html/general/components/misc/toastr.html" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-alert-circle"></em></span>
                                        <span class="nk-menu-text">Toastr</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="html/general/components/misc/sweet-alert.html" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-caution"></em></span>
                                        <span class="nk-menu-text">Sweet Alert</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="html/general/email-templates.html" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-text-rich"></em></span>
                                        <span class="nk-menu-text">Email Template</span>
                                    </a>
                                </li>
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
                                                    <div class="user-status">Administrator</div>
                                                    <div class="user-name dropdown-indicator">Abu Bin Ishityak</div>
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
                                                        <span class="lead-text">Abu Bin Ishtiyak</span>
                                                        <span class="sub-text">info@softnio.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="html/general/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="html/general/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a href="html/general/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
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
                                            <h3 class="nk-block-title page-title">Overview</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Welcome to DashLite Dashboard Template.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span class="d-none d-md-inline">Last</span> 30 Days</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Last 30 Days</span></a></li>
                                                                        <li><a href="#"><span>Last 6 Months</span></a></li>
                                                                        <li><a href="#"><span>Last 1 Years</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em class="icon ni ni-reports"></em><span>Reports</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-xxl-6">
                                            <div class="row g-gs">
                                                <div class="col-lg-6 col-xxl-12">
                                                    <div class="card card-bordered">
                                                        <div class="card-inner">
                                                            <div class="card-title-group align-start mb-2">
                                                                <div class="card-title">
                                                                    <h6 class="title">Sales Revenue</h6>
                                                                    <p>In last 30 days revenue from subscription.</p>
                                                                </div>
                                                                <div class="card-tools">
                                                                    <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Revenue from subscription"></em>
                                                                </div>
                                                            </div>
                                                            <div class="align-end gy-3 gx-5 flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                                                <div class="nk-sale-data-group flex-md-nowrap g-4">
                                                                    <div class="nk-sale-data">
                                                                        <span class="amount">14,299.59 <span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>16.93%</span></span>
                                                                        <span class="sub-title">This Month</span>
                                                                    </div>
                                                                    <div class="nk-sale-data">
                                                                        <span class="amount">7,299.59 <span class="change up text-success"><em class="icon ni ni-arrow-long-up"></em>4.26%</span></span>
                                                                        <span class="sub-title">This Week</span>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-sales-ck sales-revenue">
                                                                    <canvas class="sales-bar-chart" id="salesRevenue"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-lg-6 col-xxl-12">
                                                    <div class="row g-gs">
                                                        <div class="col-sm-6 col-lg-12 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">Active Subscriptions</h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Total active subscription"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span class="amount">9.69K</span>
                                                                            <span class="sub-title"><span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>1.93%</span>since last month</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart" id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->
                                                        <div class="col-sm-6 col-lg-12 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">Avg Subscriptions</h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Daily Avg. subscription"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span class="amount">346.2</span>
                                                                            <span class="sub-title"><span class="change up text-success"><em class="icon ni ni-arrow-long-up"></em>2.45%</span>since last week</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart" id="totalSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->
                                                    </div><!-- .row -->
                                                </div><!-- .col -->
                                            </div><!-- .row -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-6">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start gx-3 mb-3">
                                                        <div class="card-title">
                                                            <h6 class="title">Sales Overview</h6>
                                                            <p>In 30 days sales of product subscription. <a href="#">See Details</a></p>
                                                        </div>
                                                        <div class="card-tools">
                                                            <div class="dropdown">
                                                                <a href="#" class="btn btn-primary btn-dim d-none d-sm-inline-flex" data-toggle="dropdown"><em class="icon ni ni-download-cloud"></em><span><span class="d-none d-md-inline">Download</span> Report</span></a>
                                                                <a href="#" class="btn btn-icon btn-primary btn-dim d-sm-none" data-toggle="dropdown"><em class="icon ni ni-download-cloud"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Download Mini Version</span></a></li>
                                                                        <li><a href="#"><span>Download Full Version</span></a></li>
                                                                        <li class="divider"></li>
                                                                        <li><a href="#"><em class="icon ni ni-opt-alt"></em><span>More Options</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-sale-data-group align-center justify-between gy-3 gx-5">
                                                        <div class="nk-sale-data">
                                                            <span class="amount">$82,944.60</span>
                                                        </div>
                                                        <div class="nk-sale-data">
                                                            <span class="amount sm">1,937 <small>Subscribers</small></span>
                                                        </div>
                                                    </div>
                                                    <div class="nk-sales-ck large pt-4">
                                                        <canvas class="sales-overview-chart" id="salesOverview"></canvas>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-8">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title"><span class="mr-2">Transaction</span> <a href="#" class="link d-none d-sm-inline">See History</a></h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <ul class="card-tools-nav">
                                                                <li><a href="#"><span>Paid</span></a></li>
                                                                <li><a href="#"><span>Pending</span></a></li>
                                                                <li class="active"><a href="#"><span>All</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-inner p-0 border-top">
                                                    <div class="nk-tb-list nk-tb-orders">
                                                        <div class="nk-tb-item nk-tb-head">
                                                            <div class="nk-tb-col"><span>Order No.</span></div>
                                                            <div class="nk-tb-col tb-col-sm"><span>Customer</span></div>
                                                            <div class="nk-tb-col tb-col-md"><span>Date</span></div>
                                                            <div class="nk-tb-col tb-col-lg"><span>Ref</span></div>
                                                            <div class="nk-tb-col"><span>Amount</span></div>
                                                            <div class="nk-tb-col"><span class="d-none d-sm-inline">Status</span></div>
                                                            <div class="nk-tb-col"><span>&nbsp;</span></div>
                                                        </div>
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <span class="tb-lead"><a href="#">#95954</a></span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="user-card">
                                                                    <div class="user-avatar user-avatar-sm bg-purple">
                                                                        <span>AB</span>
                                                                    </div>
                                                                    <div class="user-name">
                                                                        <span class="tb-lead">Abu Bin Ishtiyak</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span class="tb-sub">02/11/2020</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <span class="tb-sub text-primary">SUB-2309232</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount">4,596.75 <span>USD</span></span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs badge-success">Paid</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-action">
                                                                <div class="dropdown">
                                                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                        <ul class="link-list-plain">
                                                                            <li><a href="#">View</a></li>
                                                                            <li><a href="#">Invoice</a></li>
                                                                            <li><a href="#">Print</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <span class="tb-lead"><a href="#">#95850</a></span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="user-card">
                                                                    <div class="user-avatar user-avatar-sm bg-azure">
                                                                        <span>DE</span>
                                                                    </div>
                                                                    <div class="user-name">
                                                                        <span class="tb-lead">Desiree Edwards</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span class="tb-sub">02/02/2020</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <span class="tb-sub text-primary">SUB-2309154</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount">596.75 <span>USD</span></span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs badge-danger">Canceled</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-action">
                                                                <div class="dropdown">
                                                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                        <ul class="link-list-plain">
                                                                            <li><a href="#">View</a></li>
                                                                            <li><a href="#">Remove</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <span class="tb-lead"><a href="#">#95812</a></span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="user-card">
                                                                    <div class="user-avatar user-avatar-sm bg-warning">
                                                                        <img src="./images/avatar/b-sm.jpg" alt="">
                                                                    </div>
                                                                    <div class="user-name">
                                                                        <span class="tb-lead">Blanca Schultz</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span class="tb-sub">02/01/2020</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <span class="tb-sub text-primary">SUB-2309143</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount">199.99 <span>USD</span></span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs badge-success">Paid</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-action">
                                                                <div class="dropdown">
                                                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                        <ul class="link-list-plain">
                                                                            <li><a href="#">View</a></li>
                                                                            <li><a href="#">Invoice</a></li>
                                                                            <li><a href="#">Print</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <span class="tb-lead"><a href="#">#95256</a></span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="user-card">
                                                                    <div class="user-avatar user-avatar-sm bg-purple">
                                                                        <span>NL</span>
                                                                    </div>
                                                                    <div class="user-name">
                                                                        <span class="tb-lead">Naomi Lawrence</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span class="tb-sub">01/29/2020</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <span class="tb-sub text-primary">SUB-2305684</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount">1099.99 <span>USD</span></span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs badge-success">Paid</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-action">
                                                                <div class="dropdown">
                                                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                        <ul class="link-list-plain">
                                                                            <li><a href="#">View</a></li>
                                                                            <li><a href="#">Invoice</a></li>
                                                                            <li><a href="#">Print</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <span class="tb-lead"><a href="#">#95135</a></span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="user-card">
                                                                    <div class="user-avatar user-avatar-sm bg-success">
                                                                        <span>CH</span>
                                                                    </div>
                                                                    <div class="user-name">
                                                                        <span class="tb-lead">Cassandra Hogan</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span class="tb-sub">01/29/2020</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <span class="tb-sub text-primary">SUB-2305564</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount">1099.99 <span>USD</span></span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs badge-warning">Due</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-action">
                                                                <div class="dropdown">
                                                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                        <ul class="link-list-plain">
                                                                            <li><a href="#">View</a></li>
                                                                            <li><a href="#">Invoice</a></li>
                                                                            <li><a href="#">Notify</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-inner-sm border-top text-center d-sm-none">
                                                    <a href="#" class="btn btn-link btn-block">See History</a>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner border-bottom">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title">Recent Activities</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <ul class="card-tools-nav">
                                                                <li><a href="#"><span>Cancel</span></a></li>
                                                                <li class="active"><a href="#"><span>All</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nk-activity">
                                                    <li class="nk-activity-item">
                                                        <div class="nk-activity-media user-avatar bg-success"><img src="./images/avatar/c-sm.jpg" alt=""></div>
                                                        <div class="nk-activity-data">
                                                            <div class="label">Keith Jensen requested to Widthdrawl.</div>
                                                            <span class="time">2 hours ago</span>
                                                        </div>
                                                    </li>
                                                    <li class="nk-activity-item">
                                                        <div class="nk-activity-media user-avatar bg-warning">HS</div>
                                                        <div class="nk-activity-data">
                                                            <div class="label">Harry Simpson placed a Order.</div>
                                                            <span class="time">2 hours ago</span>
                                                        </div>
                                                    </li>
                                                    <li class="nk-activity-item">
                                                        <div class="nk-activity-media user-avatar bg-azure">SM</div>
                                                        <div class="nk-activity-data">
                                                            <div class="label">Stephanie Marshall got a huge bonus.</div>
                                                            <span class="time">2 hours ago</span>
                                                        </div>
                                                    </li>
                                                    <li class="nk-activity-item">
                                                        <div class="nk-activity-media user-avatar bg-purple"><img src="./images/avatar/d-sm.jpg" alt=""></div>
                                                        <div class="nk-activity-data">
                                                            <div class="label">Nicholas Carr deposited funds.</div>
                                                            <span class="time">2 hours ago</span>
                                                        </div>
                                                    </li>
                                                    <li class="nk-activity-item">
                                                        <div class="nk-activity-media user-avatar bg-pink">TM</div>
                                                        <div class="nk-activity-data">
                                                            <div class="label">Timothy Moreno placed a Order.</div>
                                                            <span class="time">2 hours ago</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner-group">
                                                    <div class="card-inner">
                                                        <div class="card-title-group">
                                                            <div class="card-title">
                                                                <h6 class="title">New Users</h6>
                                                            </div>
                                                            <div class="card-tools">
                                                                <a href="html/general/user-list-regular.html" class="link">View All</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-inner card-inner-md">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-primary-dim">
                                                                <span>AB</span>
                                                            </div>
                                                            <div class="user-info">
                                                                <span class="lead-text">Abu Bin Ishtiyak</span>
                                                                <span class="sub-text">info@softnio.com</span>
                                                            </div>
                                                            <div class="user-action">
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="#"><em class="icon ni ni-setting"></em><span>Action Settings</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-notify"></em><span>Push Notification</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-inner card-inner-md">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-pink-dim">
                                                                <span>SW</span>
                                                            </div>
                                                            <div class="user-info">
                                                                <span class="lead-text">Sharon Walker</span>
                                                                <span class="sub-text">sharon-90@example.com</span>
                                                            </div>
                                                            <div class="user-action">
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="#"><em class="icon ni ni-setting"></em><span>Action Settings</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-notify"></em><span>Push Notification</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-inner card-inner-md">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-warning-dim">
                                                                <span>GO</span>
                                                            </div>
                                                            <div class="user-info">
                                                                <span class="lead-text">Gloria Oliver</span>
                                                                <span class="sub-text">gloria_72@example.com</span>
                                                            </div>
                                                            <div class="user-action">
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="#"><em class="icon ni ni-setting"></em><span>Action Settings</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-notify"></em><span>Push Notification</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-inner card-inner-md">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-success-dim">
                                                                <span>PS</span>
                                                            </div>
                                                            <div class="user-info">
                                                                <span class="lead-text">Phillip Sullivan</span>
                                                                <span class="sub-text">phillip-85@example.com</span>
                                                            </div>
                                                            <div class="user-action">
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="#"><em class="icon ni ni-setting"></em><span>Action Settings</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-notify"></em><span>Push Notification</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-lg-6 col-xxl-4">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner border-bottom">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title">Support Requests</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <a href="html/subscription/tickets.html" class="link">All Tickets</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nk-support">
                                                    <li class="nk-support-item">
                                                        <div class="user-avatar">
                                                            <img src="./images/avatar/a-sm.jpg" alt="">
                                                        </div>
                                                        <div class="nk-support-content">
                                                            <div class="title">
                                                                <span>Vincent Lopez</span><span class="badge badge-dot badge-dot-xs badge-warning ml-1">Pending</span>
                                                            </div>
                                                            <p>Thanks for contact us with your issues...</p>
                                                            <span class="time">6 min ago</span>
                                                        </div>
                                                    </li>
                                                    <li class="nk-support-item">
                                                        <div class="user-avatar bg-purple-dim">
                                                            <span>DM</span>
                                                        </div>
                                                        <div class="nk-support-content">
                                                            <div class="title">
                                                                <span>Daniel Moore</span><span class="badge badge-dot badge-dot-xs badge-info ml-1">Open</span>
                                                            </div>
                                                            <p>Thanks for contact us with your issues...</p>
                                                            <span class="time">2 Hours ago</span>
                                                        </div>
                                                    </li>
                                                    <li class="nk-support-item">
                                                        <div class="user-avatar">
                                                            <img src="./images/avatar/b-sm.jpg" alt="">
                                                        </div>
                                                        <div class="nk-support-content">
                                                            <div class="title">
                                                                <span>Larry Henry</span><span class="badge badge-dot badge-dot-xs badge-success ml-1">Solved</span>
                                                            </div>
                                                            <p>Thanks for contact us with your issues...</p>
                                                            <span class="time">3 Hours ago</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-lg-6 col-xxl-4">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner border-bottom">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title">Notifications</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <a href="html/subscription/tickets.html" class="link">View All</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-inner">
                                                    <div class="timeline">
                                                        <h6 class="timeline-head">November, 2019</h6>
                                                        <ul class="timeline-list">
                                                            <li class="timeline-item">
                                                                <div class="timeline-status bg-primary is-outline"></div>
                                                                <div class="timeline-date">13 Nov <em class="icon ni ni-alarm-alt"></em></div>
                                                                <div class="timeline-data">
                                                                    <h6 class="timeline-title">Submited KYC Application</h6>
                                                                    <div class="timeline-des">
                                                                        <p>Re-submitted KYC Application form.</p>
                                                                        <span class="time">09:30am</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="timeline-item">
                                                                <div class="timeline-status bg-primary"></div>
                                                                <div class="timeline-date">13 Nov <em class="icon ni ni-alarm-alt"></em></div>
                                                                <div class="timeline-data">
                                                                    <h6 class="timeline-title">Submited KYC Application</h6>
                                                                    <div class="timeline-des">
                                                                        <p>Re-submitted KYC Application form.</p>
                                                                        <span class="time">09:30am</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="timeline-item">
                                                                <div class="timeline-status bg-pink"></div>
                                                                <div class="timeline-date">13 Nov <em class="icon ni ni-alarm-alt"></em></div>
                                                                <div class="timeline-data">
                                                                    <h6 class="timeline-title">Submited KYC Application</h6>
                                                                    <div class="timeline-des">
                                                                        <p>Re-submitted KYC Application form.</p>
                                                                        <span class="time">09:30am</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                    </div><!-- .row -->
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
                            <div class="nk-footer-copyright"> &copy; 2020 DashLite. Template by <a href="https://softnio.com" target="_blank">Softnio</a>
                            </div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                                </ul>
                            </div>
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
    <!-- JavaScript -->
    <script src="src/assets/js/bundle.js?ver=1.6.0"></script>
    <script src="src/assets/js/scripts.js?ver=1.6.0"></script>
    <script src="src/assets/js/charts/gd-general.js?ver=1.6.0"></script>
</body>

</html>
   <?php }
   

}
?>


