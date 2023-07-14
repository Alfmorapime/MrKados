<?php
//Recibo el valor para actualizar el tipo de usuario
if(isset($_POST["newMrkado"]))
{
    mysqli_query($conection,"UPDATE usuarios SET tipo_usuario = '2' WHERE correo = '$correo'");
    header("Location:  registroTienda.php?user=$correo&type=2");
}
else
{
    //nada
}

// config cuenta functional section

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
    
    header("Location: index.php?user=$correo&type=$usuarioTipo&op=config");
}

if(isset($_POST["id-eliminar"]))
{
    $id_eliminar = $_POST['id-eliminar'];
    $queryDelete = "DELETE from usuarios WHERE id = '$id_eliminar'"; 
    mysqli_query($conection,$queryDelete);

    $queryDeleteTienda = "DELETE from tiendas WHERE id_usuario = '$correo'"; 
    mysqli_query($conection,$queryDeleteTienda);

    $to = $correo;
    $subject = 'Estás apunto de decirnos adiós :(';
    $message = file_get_contents('template_eliminarCuenta.php'); 

    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    $headers .= "From: info@mrkados.com";

    $mail_sent=mail($to, $subject, $message, $headers);

    header("Location: ../../../eliminacionCuentaExitosa.php");
}

// ENDING config cuenta functional section
?>