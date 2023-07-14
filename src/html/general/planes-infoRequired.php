<?php

//SDK de Mercado Libre
require 'vendor/autoload.php';
require_once 'credenciales.php';

//Agrega Credenciales
MercadoPago\SDK::setAccessToken($access_token);

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();

if(isset($_POST['usuarioCorreo']))
{
    $plan = $_POST['planNameAdd'];
    $plan_precio = $_POST['precioMP'];
    $id_tienda = $_POST['tiendaMP'];

    // working with mercadopago

    $item->title = $plan;
    $item->quantity = 1;
    $item->unit_price = $plan_precio;
    $preference->items = array($item);

    $preference->payment_methods = array(
        "excluded_payment_types" => array(
          array("id" => "atm")
        ),
        "installments" => 1
    );

    $preference->back_urls = array(
        "success" => "http://mrkados.com/src/html/general/index.php?user=$correo&type=$usuarioTipo&merk=true&plan=$plan&precio=$plan_precio&tien=$id_tienda&outcome=true&op=planes",
        "failure" => "http://mrkados.com/src/html/general/index.php?user=$correo&type=$usuarioTipo&merkF=flase&plan=$plan&precio=$plan_precio&tien=$id_tienda&op=planes",
        "pending" => "http://mrkados.com/src/html/general/index.php?user=$correo&type=$usuarioTipo&precio=$plan_precio&markP=Pending&plan=$plan&tien=$id_tienda&op=planes"
    ); 

    $preference->save(); 

    header("Location:  $preference->init_point"); 

}

if(isset($_GET["merk"]))
{
    $id_tienda = $_GET['tien'];
    $plan = $_GET['plan'];
    $plan_precio = $_GET['precio'];
    $payment_type = $_GET['payment_type'];
    $payment_id = $_GET['payment_id'];

    mysqli_query($conection,"UPDATE suscripciones_rel SET active = '3' WHERE id_tienda = '$id_tienda'");

    mysqli_query($conection,"UPDATE tiendas SET subscription = '$plan' WHERE id = '$id_tienda'");

    $date = new DateTime();  
    $date->setTimezone(new DateTimeZone('America/Mexico_City'));
    $now = date_format($date,"y/m/d");
    $dueDate = Date('y/m/d', strtotime('+30 days'));
    $active = "1";

    $query_usuarios = "select * from usuarios where correo = '$correo';";
    $Result_id_usuario = mysqli_query($conection,$query_usuarios);

    while ($row_usuario = mysqli_fetch_assoc($Result_id_usuario)) 
    {
        $id_usuario = $row_usuario['id'];
    }
    $formulario = 0;

    $queryInsert = "INSERT into suscripciones_rel(id_tienda, id_user, plan, precio, desde, hasta, active, payment_id, payment_type, formulario) VALUES ('$id_tienda', '$id_usuario', '$plan', '$plan_precio', '$now', '$dueDate', '$active', '$payment_id','$payment_type','$formulario')";
    mysqli_query($conection, $queryInsert);

    header("Location:  index.php?user=$correo&type=$usuarioTipo&op=pagoSatisfactorio");
}

// ANUAL DESABLED
if(isset($_GET["merkA"]))
{
    $id_tienda = $_GET['tien'];
    $plan = $_GET['plan'];
    $plan_precio = $_GET['precio'];
    $payment_type = $_GET['payment_type'];
    $payment_id = $_GET['payment_id'];

    mysqli_query($conection,"UPDATE suscripciones_rel SET active = '3' WHERE id_tienda = '$id_tienda'");

    mysqli_query($conection,"UPDATE tiendas SET subscription = '$plan' WHERE id = '$id_tienda'");

    $date = new DateTime();  
    $date->setTimezone(new DateTimeZone('America/Mexico_City'));
    $now = date_format($date,"y/m/d");
    $dueDate = Date('y/m/d', strtotime('+1 years'));
    $active = "1";

    $query_usuarios = "select * from usuarios where correo = '$correo';";
    $Result_id_usuario = mysqli_query($conection,$query_usuarios);

    while ($row_usuario = mysqli_fetch_assoc($Result_id_usuario)) 
    {
        $id_usuario = $row_usuario['id'];
    }

    $formulario = 0;

    $queryInsert = "INSERT into suscripciones_rel(id_tienda, id_user, plan, precio, desde, hasta, active, payment_id, payment_type, formulario) VALUES ('$id_tienda', '$id_usuario', '$plan', '$plan_precio', '$now', '$dueDate', '$active', '$payment_id','$payment_type', $formulario)";
    mysqli_query($conection, $queryInsert);

    header("Location:  pagoSatisfactorio.php?user=$correo&type=$usuarioTipo");
}

if(isset($_GET["markP"]))
{
    $id_tienda = $_GET['tien'];
    $plan = $_GET['plan'];
    $plan_precio = $_GET['precio'];
    $payment_type = $_GET['payment_type'];
    $payment_id = $_GET['payment_id'];

    mysqli_query($conection,"UPDATE suscripciones_rel SET active = '3' WHERE id_tienda = '$id_tienda'");
    
    mysqli_query($conection,"UPDATE tiendas SET subscription = '$plan PAGO PENDIENTE' WHERE id = '$id_tienda'");

    $date = new DateTime();  
    $date->setTimezone(new DateTimeZone('America/Mexico_City'));
    $now = date_format($date,"y/m/d");
    $dueDate = Date('y/m/d', strtotime('+30 days'));
    $active = "2";

    $query_usuarios = "select * from usuarios where correo = '$correo';";
    $Result_id_usuario = mysqli_query($conection,$query_usuarios);

    while ($row_usuario = mysqli_fetch_assoc($Result_id_usuario)) 
    {
        $id_usuario = $row_usuario['id'];
    }

    $formulario= 0; 

    $queryInsert = "INSERT into suscripciones_rel(id_tienda, id_user, plan, precio, desde, hasta, active, payment_id, payment_type, formulario) VALUES ('$id_tienda', '$id_usuario', '$plan', '$plan_precio', '$now', '$dueDate', '$active', '$payment_id','$payment_type', '$formulario')";
    mysqli_query($conection, $queryInsert);

    header("Location:  index.php?user=$correo&type=$usuarioTipo&op=pagoPendiente");
}

if(isset($_GET["merkF"]))
{
    header("Location:  index.php?user=$correo&type=$usuarioTipo&op=pagoNoSatisfactorio");
}

//ANUAL DISABLED

if(isset($_POST['usuarioCorreoA']))
{
    $plan = $_POST['planNameAddA'];
    $plan_precio = $_POST['precioAPA'];
    $id_tienda = $_POST['tiendaAPa'];

    // working with mercadopago

    $item->title = $plan;
    $item->quantity = 1;
    $item->unit_price = $plan_precio;
    $preference->items = array($item);

    $preference->payment_methods = array(
        "excluded_payment_types" => array(
          array("id" => "atm")
        ),
        "installments" => 1
    );

    $preference->back_urls = array(
        "success" => "http://mrkados.com/src/html/general/planes.php?user=$correo&type=$usuarioTipo&merkA=true&plan=$plan&precio=$plan_precio&tien=$id_tienda&outcome=true",
        "failure" => "http://mrkados.com/src/html/general/planes.php?user=$correo&type=$usuarioTipo&merkF=flase&plan=$plan&precio=$precio&tien=$id_tienda",
        "pending" => "http://mrkados.com/src/html/general/planes.php?user=$correo&type=$usuarioTipo&precio=$plan_precio&markP=Pending&plan=$plan&tien=$id_tienda"
    ); 

    $preference->save(); 

    header("Location:  $preference->init_point"); 

}

?>