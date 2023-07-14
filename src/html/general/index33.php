<?php
    require 'vendor/autoload.php';
    require_once 'credenciales.php';

    $user = "alfmorapime@gmail.com";
    MercadoPago\SDK::setAccessToken($access_token);

    $producto = [
        'precio' => 1200,
        'cantidad' => 1,
        'titulo' => 'Prueba Test'
    ];

    $preference = new MercadoPago\Preference();
    $item = new MercadoPago\Item();

    $item->unit_price = $producto['precio'];
    $item->title = $producto['titulo'];
    $item->quantity = $producto['cantidad'];

    $preference->items = array($item);

    $preference->back_urls = array(
        "success" => "https://stellarwholesale.ca/integration-php?decision=OK&$user",
        "failure" => "https://stellarwholesale.ca/integration-php?decision=notOk",
        "pending" => "https://stellarwholesale.ca/integration-php?decision=pending"
    );

    //$preference->auto_return = "approved";

    $preference->save();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="display-2">Detalle Producto</h1>
        <hr>
        <div class="row">
            <div class="col-md 8 offset-2">
                <div class="card">
                    <div class="card-header">
                        Producto Test
                    </div>
                    <div class="card-body">
                        Este item es de prueba
                        <h3>Precio: $<?php echo $producto['precio']; ?></h3>
                        <h3>Cantidad: <?php echo $producto['cantidad']; ?></h3>
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo $preference->init_point; ?>">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>