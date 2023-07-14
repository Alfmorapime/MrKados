<?php

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

    if(isset($_POST['vigencia3Face']))
    {
        $vigencia3 = $_POST['vigencia3Face'];
    }
    else
    {
        $vigencia3 = "";
    }

    if(isset($_POST['descripcion3Face']))
    {
        $descripcion3 =  $_POST['descripcion3Face'];
    }
    else
    {
        $descripcion3 = "";
    }

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
    header("Location:  index.php?user=$correo&type=$usuarioTipo&op=satisfactorio"); 

}
else
{
    //nothing
}

?>