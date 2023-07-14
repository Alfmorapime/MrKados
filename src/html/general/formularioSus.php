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

if(isset($_GET["it"]))
{
    $id_tienda = $_GET["it"];
}
else
{
    $id_tienda = "";
}

if(isset($_GET["nt"]))
{
    $nombre_tienda = $_GET["nt"];
}
else
{
    $nombre_tienda = "";
}

if(isset($_GET["si"]))
{
    $si = $_GET["si"];
}
else
{
    $si = "";
}

if(isset($_GET["kt"]))
{
    $kt = $_GET["kt"];
    echo "<script>console.log('Debug Objects: " . $kt . "' );</script>";
}
else
{
    $kt = "";
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

// se toma la hora del sistema
$date = new DateTime();  
$date->setTimezone(new DateTimeZone('America/Mexico_City'));
$now = date_format($date,"d/m/y H:i:s");
$now2 = date_format($date,"dmyHis");
$nowF = date_format($date,"y/m/d H:i:s");

//Take values from form
if(isset($_POST['nombreTienda']))
{
    $nombreTienda = $_POST['nombreTienda'];
    $description = $_POST['descripcion'];
    $descripcion1 = $_POST['descripcionFace'];
    $vigencia1 = $_POST['vigenciaFace'];
    $descripcion2 = $_POST['descripcionMail'];
    $vigencia2  = $_POST['vigenciaMail'];
    $descripcion3 = $_POST['descripcion3Face'];

    if(isset($_POST['vigencia4Face']))
    {
        $vigencia4 = $_POST['vigencia4Face'];
    }
    else
    {
        $vigencia4 = "";
    }

    if(isset($_POST['descripcion4Face']))
    {
        $descripcion4 =  $_POST['descripcion4Face'];
    }
    else
    {
        $descripcion4 = "";
    }

    $vigencia3 = $_POST['vigencia3Face'];
    $alcance = $_POST['alcance'];
    $contacto1 = $_POST['contacto1'];
    $contactoValue1 = $_POST['contactoValue1'];
    $contacto2 = $_POST['contacto2'];
    $contactoValue2 = $_POST['contactoValue2'];
    $contacto3 = $_POST['contacto3'];
    $contactoValue3 = $_POST['contactoValue3'];
    $otros = $_POST['otros'];


        $image1 = $_FILES["image1"]['name'];
        $galeria = $now2."".$image1;
        $directorio ="../../../images/imagenFormularios";

        $guardado = $_FILES['image1']['tmp_name'];
    
        if(file_exists($directorio))
        {
            move_uploaded_file($guardado, $directorio."/".$galeria);
        }
 


        $image2 = $_FILES["image2"]['name'];
        $galeria2 = $now2."".$image2;
        $directorio ="../../../images/imagenFormularios";

        $guardado = $_FILES['image2']['tmp_name'];
    
        if(file_exists($directorio))
        {
            move_uploaded_file($guardado, $directorio."/".$galeria2);
        }


        $image3 = $_FILES["image3"]['name'];
        $galeria3 = $now2."".$image3;
        $directorio ="../../../images/imagenFormularios";

        $guardado = $_FILES['image3']['tmp_name'];
    
        if(file_exists($directorio))
        {
            move_uploaded_file($guardado, $directorio."/".$galeria3);
        }


    //Insert
    $queryInsert = "INSERT INTO formularios(id_sus, nombreTienda, descripcion, descripcion1, vigencia1, descripcion2, vigencia2, descripcion3, vigencia3, descripcion4, vigencia4, alcance, tipo1, value1, tipo2, value2, tipo3, value3, otros, image1, image2, image3, image4) VALUES ('$si','$nombre_tienda','$description','$descripcion1','$vigencia1','$descripcion2','$vigencia2','$descripcion3','$vigencia3','$descripcion4','$vigencia4','$alcance','$contacto1','$contactoValue1', '$contacto2','$contactoValue2','$contacto3','$contactoValue3','$otros','$galeria', '$galeria2', '$galeria3', '$galeria4')";
    mysqli_query($conection, $queryInsert);

    //update sus_rel table
    $query = "UPDATE suscripciones_rel SET formulario = '1' WHERE id = '$si'";
    $user = mysqli_query($conection,$query);

    //enviar email to mrkado


    //enviar email to cliente
   /* $to = $correo;
    $strSubject='Su Informacion fue recivida con exito';
    $message = file_get_contents('template_formularioToMrKliente.php'); 
    $message = str_replace('{{nombreTienda}}', $nombreTienda, $message);

    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    $headers .= "From: hola@mrkados.com";

    $mail_sent = mail($to, $strSubject, $message, $headers);
    */

    //Redireccionar a pagina de gracias
    header("Location:  formularioSatisfactorio.php?user=$correo&type=$usuarioTipo&galeria=$galeria&galeria2=$galeria2"); 

}
else
{
    //nothing
}

Page::header($correo, $usuarioTipo, $name, $apellido, $idUser, $conection); 
?> 
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
<?php
Page::complementSuscripcion();
Page::ventanasEmergentes();
Page::complementAllSuscription();
?>