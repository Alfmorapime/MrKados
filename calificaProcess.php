<?php
    if(isset($_POST['puntaje']))
    {
        //Catch the information from the form and the user from the url
        $puntaje = $_POST['puntaje'];
        $comentario = $_POST['comentarioCalificacion'];
        $correo = $_GET["correo"];
        $type = $_GET["type"];

        //Take the date and time
        $date = new DateTime();  
        $date->setTimezone(new DateTimeZone('America/Mexico_City'));
        $fecha = date_format($date,"d-m-y H:i:s");
        
        //Insert data to the DB
        $queryInsert = "INSERT into calificacion(usuario, comentario, puntaje, fecha) VALUES ('$correo', '$comentario', '$puntaje', '$fecha')";
        mysqli_query($conection, $queryInsert);

        //Set the email
        $to=$correo; 
        $strSubject="Gracias por tu calificación";
        $message = file_get_contents('template_calificacionToUser.php'); 
        $message = str_replace('{{firstname}}', $nombre, $message);

        $headers = 'MIME-Version: 1.0'."\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
        $headers .= "From: hola@mrkados.com";

        $mail_sent=mail($to, $strSubject, $message, $headers);

        header("Location: calificacionExitosa.php?correo=$correo&type=$type");

    }
?>