<?php 
if(isset($_POST["nacionalidad"]))
{
    $nombre = utf8_decode($_POST["nombre"]);
    $correo = utf8_decode($_POST["correo"]);
    $pais = utf8_decode($_POST["pais"]);
    $ciudad = utf8_decode($_POST["ciudad"]);
    $nac = utf8_decode($_POST["nacionalidad"]);
    $escolaridad = utf8_decode($_POST["escolaridad"]);
    $colabora = utf8_decode($_POST["colabora"]);
    $horario = utf8_decode($_POST["horario"]);
    $contrato = utf8_decode($_POST["contrato"]);
    //add archivo adjunto
    $archivo = $_FILES['adjunto']['name'];
    $file = $_FILES['adjunto']['tmp_name'];

    $comentario = utf8_decode($_POST["comentario"]);
    $texto = utf8_decode("ha enviado una ficha de colaboraciòn");
    //Set the email
    $to = 'alfmorapime@gmail.com';
    $strSubject='Ficha de Colaboraciòn para Mrkados';
    $message = file_get_contents('template_colaboracion.php'); 
    $message = str_replace('{{firstname}}', $nombre, $message);
    $message = str_replace('{{correo}}', $correo, $message);
    $message = str_replace('{{pais}}', $pais, $message);
    $message = str_replace('{{ciudad}}', $ciudad, $message);
    $message = str_replace('{{nac}}', $nac, $message);
    $message = str_replace('{{escolaridad}}', $escolaridad, $message);
    $message = str_replace('{{colabora}}', $colabora, $message);
    $message = str_replace('{{horario}}', $horario, $message);
    $message = str_replace('{{contrato}}', $contrato, $message);
    $message = str_replace('{{comentario}}', $comentario, $message);
    $message = str_replace('{{texto}}', $texto, $message);

        //Limite Email
    $semi_rand = md5(time()); 
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
    $headers .= "From: Mrkados <hola@mrkados.com>"."\r\n";
    $headers .= "Reply-To: Mrkados <hola@mrkados.com>\r\n";
    $headers .= "Return-Path: Mrkados <hola@mrkados.com>\r\n";

        //preparación de archivo
    if(!empty($file) > 0){
        if(is_file($file)){
            $message .= "--{$mime_boundary}\n";
            $fp =    @fopen($file,"rb");
            $data =  @fread($fp,filesize($file));

            @fclose($fp);
            $data = chunk_split(base64_encode($data));
            $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" . 
            "Content-Description: ".basename($files[$i])."\n" .
            "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" . 
            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
        }
    }
    $from = 'Mrkados <hola@mrkados.com>';
    $message .= "--{$mime_boundary}--";
    $returnpath = "-f" . $from;

    $mail_sent = mail($to, $strSubject, $message, $headers,$returnpath);

    header("Location: contactanosExitoso.php?correo=$user&type=$usuarioTipo");
}
?>