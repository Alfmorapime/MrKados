<?php
require_once('header.php');

    //SDK de Mercado Libre
    require 'vendor/autoload.php';
    require_once 'credenciales.php';

    //Agrega Credenciales
    MercadoPago\SDK::setAccessToken($access_token);

    // Crea un objeto de preferencia
    $preference = new MercadoPago\Preference();

    // Crea un ítem en la preferencia
    $item = new MercadoPago\Item();

//// ////////////
if(isset($_GET["user"]))
{
    $correo = $_GET["user"];
}
else
{
    $correo = "";
}

if(isset($_GET["type"]))
{
    $usuarioTipo = $_GET["type"];
}
else
{
    $usuarioTipo = "";
}

$conection = include '../../../conection.php';

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
        "success" => "http://mrkados.com/src/html/general/planes.php?user=$correo&type=$usuarioTipo&merk=true&plan=$plan&precio=$plan_precio&tien=$id_tienda&outcome=true",
        "failure" => "http://mrkados.com/src/html/general/planes.php?user=$correo&type=$usuarioTipo&merkF=flase&plan=$plan&precio=$plan_precio&tien=$id_tienda",
        "pending" => "http://mrkados.com/src/html/general/planes.php?user=$correo&type=$usuarioTipo&precio=$plan_precio&markP=Pending&plan=$plan&tien=$id_tienda"
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

    header("Location:  pagoSatisfactorio.php?user=$correo&type=$usuarioTipo");
}

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

    header("Location:  pagoPendiente.php?user=$correo&type=$usuarioTipo");
}

if(isset($_GET["merkF"]))
{
    header("Location:  pagoNoSatisfactorio.php?user=$correo&type=$usuarioTipo");
}

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

Page::header($correo, $usuarioTipo, $name, $apellido, $idUser, $conection);
?> 
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
                           
                            <div class="nk-content-body">
                                <div class="nk-content-wrap">
                                    <div class="nk-block-head nk-block-head-lg">
                                        <div class="nk-block-head-sub"><span>Planes de Mrkado</span></div>
                                        <div class="nk-block-between-md g-4">
                                            <div class="nk-block-head-content">
                                                <h2 class="nk-block-title fw-normal">Selecciona tu plan</h2>
                                                <div class="nk-block-des">
                                                    <!-- <p>You can change your plan any time by upgrade your plan</p> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block">
                                            <div class="sp-package text-center">
                                                <ul class="sp-package-plan nav nav-switch nav-tabs">
                                                    <li class="nav-item">
                                                        <div class="nav-link" id="Mensual" style="color:black; background:#ffb800">Mensual</div>
                                                    </li>
                                                  <!--  <li class="nav-item">
                                                        <div class="nav-link " id="anual" style="color:black;">Anual</div>
                                                    </li> -->
                                                </ul>
                                            </div>
                                    </div>

                                    <!-- Jquery que hace el efecto de esconde ry mostart los preicos por mensualidad y anual -->
                                    <script>
                                      $("#anual").click(function(){
                                        $("#bloque_mensual").hide();
                                        $("#Mensual").css("background-color","#f5f6fa");
                                        //$("#Mensual").removeClass("active");
                                        $("#bloque_anual").show();
                                        //$("#anual").addClass("active");
                                        $("#anual").css("background-color","#ffb800");
                                    });

                                    $("#Mensual").click(function(){
                                        $("#bloque_anual").hide();
                                        $("#anual").css("background-color","#f5f6fa");
                                        $("#bloque_mensual").show();
                                        $("#Mensual").css("background-color","#ffb800");
                                    });
                                    </script>  
                                    <!-- ENDING Jquery que hace el efecto de esconde ry mostart los preicos por mensualidad y anual -->

                                    <div class="nk-block" id="bloque_mensual">
                                        <div class="nk-block"> <!-- Bloque de precios de planes mensuales -->
                                            <div class="row g-gs">
                                                <?php
                                                    $query_Planes = "select * from tipos_subscription order by id ASC;";
                                                    $result_planes = mysqli_query($conection,$query_Planes);
                                                    
                                                    while ($row_planes = mysqli_fetch_assoc($result_planes)) 
                                                    {
                                                        if($row_planes['id'] != "5")
                                                        {?>
                                                    <div class="col-md-3"> <!-- Bloque que muestra la suscripcion  -->
                                                        <div class="price-plan card card-bordered text-center"> 
                                                            <div class="card-inner">
                                                                <div class="price-plan-media">
                                                                    <?php
                                                                        if($row_planes['id'] == "4")
                                                                        { ?>
                                                                            <img src="html/general/images/planes/logo2.png" alt="">
                                                                       <?php }
                                                                       else if($row_planes['id'] == "6")
                                                                       { ?>
                                                                            <img src="html/general/images/planes/logo3.png" alt="">
                                                                       <?php }
                                                                       else if($row_planes['id'] == "7")
                                                                       { ?>
                                                                            <img src="html/general/images/planes/logo.png" alt="">
                                                                       <?php }
                                                                        else if($row_planes['id'] == "8")
                                                                        {  ?>
                                                                        
                                                                             <img src="html/general/images/planes/hiper.png" alt="">
                                                                        <?php }
                                                                    ?>
                                                                </div>
                                                                <div class="price-plan-info">
                                                                    <h5 class="title" id="tittleMP"><?php echo $row_planes['name']; ?></h5>
                                                                    
                                                                </div>
                                                                <div class="price-plan-amount">
                                                                    <?php
                                                                        if($row_planes['id'] != "4")
                                                                        { ?>
                                                                            <div class="amount"><?php echo $row_planes['precio']; ?><span> MXN</span></div>
                                                                        <?php }
                                                                        else
                                                                        { ?>
                                                                            <div class="amount"><span>Gratis</span></div>
                                                                        <?php }
                                                                    ?>
                                                                    <!-- <span class="bill">1 User, Billed Yearly</span> -->
                                                                </div>
                                                                <div class="price-plan-action">
                                                                   
                                                                <a href="#" id="selecPlanM" data-id="<?php echo $row_planes['name'].",".$row_planes['precio']; ?>"  data-toggle="modal" data-target="#mensualidadWindow" style="background:#ffb800; border-color:#ffb800;" class="btn btn-primary">Selecciona este plan</a>
                                                                    
                                                                </div>
                                                                <script>
                                                                    $(document).on("click", "#selecPlanM", function () {
                                                                        var passedID = $(this).data('id');//get the id of the selected button
                                                                        var planName = passedID.split(",");
                                                                        $('#planNameAdd').val(planName[0]);;//set the id to the input on the modal
                                                                        $('#planNameAddd').val(planName[0]);;//set the id to the input on the modal
                                                                        $('#precioMP').val(planName[1]);;//set the id to the input on the modal
                                                                        $('#precioMPd').val(planName[1]);;//set the id to the input on the modal
                                                                    });
                                                                </script>
                                                            </div>
                                                        </div><!-- .price-item -->
                                                    </div><!-- .col --> <!-- ENDING Bloque que muestra la suscripcion -->
                                                <?php } } ?>
                                            </div><!-- .row --> <!-- ENDING Bloque de precios de planes mensuales -->
                                        </div><!-- .nk-block --> <!-- Bloque de precios de planes anuales -->

                                        <!-- middle block that shows IVA message. -->
                                        <div class="nk-block" style="text-align:center"> 
                                            <span class="bill">Los precios no incluyen IVA</span><br>
                                            <span class="bill" style="color:red;">Si deseas pagar con efectivo, debes colocar el correo registrado en mrkados</span>
                                        </div> 
                                        <!-- ENDING middle block that shows IVA message. -->
                                        
                                        <div class="nk-block">
                                            <div class="card card-bordered">
                                                <table class="table table-features">
                                                    <thead class="tb-ftr-head thead-light">
                                                        <tr class="tb-ftr-item">
                                                            <th class="tb-ftr-info">Incluye</th>
                                                            <?php 
                                                                $query_Planes = "select * from tipos_subscription order by id ASC;";
                                                                $result_planes = mysqli_query($conection,$query_Planes);
                                                                
                                                                while ($row_planes = mysqli_fetch_assoc($result_planes)) 
                                                                { 
                                                                    if($row_planes['id'] != "5")
                                                                    {?>
                                                                        <th class="tb-ftr-plan"><?php echo $row_planes['name']; ?></th>
                                                                    <?php } ?>
                                                        
                                                            <?php } ?>
                                                        </tr><!-- .tb-ftr-item -->
                                                    </thead>
                                                    <tbody class="tb-ftr-body">
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Espacio propio en el directorio de MrKados</td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            </tr><!-- .tb-ftr-item -->
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Ubicacion en carrusel "Lo mas nuevo" los primeros 7 dias en pagina principal de MrKados</td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                        </tr><!-- .tb-ftr-item -->
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Poster autoadherible para tienda fisica</td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                        </tr><!-- .tb-ftr-item -->
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Diseno de publicaciones para redes sociales (FB e IG)</td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                        </tr><!-- .tb-ftr-item -->
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Publicaciones mensuales en redes sociales</td>
                                                            <td class="tb-ftr-plan"><span>1</span></td>
                                                            <td class="tb-ftr-plan"><span>1</span></td>
                                                            <td class="tb-ftr-plan"><span>2</span></td>
                                                            <td class="tb-ftr-plan"><span>2</span></td>
                                                        </tr><!-- .tb-ftr-item -->
                                                        
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Espacio en cuponera digital <a data-toggle="modal" data-target="#showCuponera">?</a></td>
                                                            <td class="tb-ftr-plan"><span>-</span></td>
                                                            <td class="tb-ftr-plan"><span>Basico</span></td>
                                                            <td class="tb-ftr-plan"><span>Estandar</span></td>
                                                            <td class="tb-ftr-plan"><span>Premium</span></td>
                                                        </tr><!-- .tb-ftr-item -->
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Ubicacion en carrusel "Tal vez te interese" en pagina de mrkados</td>
                                                            <td class="tb-ftr-plan"><span>-</span></td>
                                                            <td class="tb-ftr-plan"><span>-</span></td>
                                                            <td class="tb-ftr-plan"><span>-</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                        </tr><!-- .tb-ftr-item -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- .nk-block --><!-- ENDING Bloque de precios de planes mensuales -->
                                    </div><!-- .nk-block --> <!--ENDING Bloque de total precios -->

                                    <!-- BLOQUE PLANES ANUALES --> 
                                  <!--  <div class="nk-block" style="display:none;" id="bloque_anual">
                                        <div class="nk-block">  Bloque de precios de planes mensuales -->
                                          <!--  <div class="row g-gs"> -->
                                                <?php
                                                   /* $query_Planes = "select * from tipos_subscription order by id ASC;";
                                                    $result_planes = mysqli_query($conection,$query_Planes);
                                                    
                                                    while ($row_planes = mysqli_fetch_assoc($result_planes)) 
                                                    {
                                                        $total_anual = $row_planes['precio_anual'] * 12;
                                                        $total_mensual = $row_planes['precio'] * 12;
                                                        $diferencia = $total_mensual - $total_anual;
                                                       
                                                        if($row_planes['id'] != "5")
                                                        {?>
                                                    <div class="col-md-3"> <!-- Bloque que muestra la suscripcion  -->
                                                        <div class="price-plan card card-bordered text-center"> 
                                                            <div class="card-inner">
                                                                <div class="price-plan-media">
                                                                <?php
                                                                       if($row_planes['id'] == "4")
                                                                       { ?>
                                                                           <img src="html/general/images/planes/logo2.png" alt="">
                                                                      <?php }
                                                                      else if($row_planes['id'] == "6")
                                                                      { ?>
                                                                           <img src="html/general/images/planes/logo3.png" alt="">
                                                                      <?php }
                                                                      else if($row_planes['id'] == "7")
                                                                      { ?>
                                                                           <img src="html/general/images/planes/logo.png" alt="">
                                                                      <?php }
                                                                       else if($row_planes['id'] == "8")
                                                                       {  ?>
                                                                       
                                                                            <img src="html/general/images/planes/hiper.png" alt="">
                                                                       <?php }
                                                                    ?>
                                                                </div>
                                                                <div class="price-plan-info">
                                                                    <h5 class="title"><?php echo $row_planes['name']; ?></h5>
                                                                    
                                                                </div>
                                                                <div class="price-plan-amount">
                                                                    <?php
                                                                        if($row_planes['id'] != "4")
                                                                        { 
                                                                            $porcenatge = ( $diferencia * 100 ) / $total_mensual;

                                                                            ?>
                                                                            <div class="amount"><?php echo $row_planes['precio_anual']; ?><span> MXN</span></div>
                                                                            <span class="bill">1 pago anual de <?php echo $total_anual ?>MXN</span> 
                                                                            <span class="bill">Te ahorraras <?php echo $porcenatge ?>%</span> 
                                                                        <?php }
                                                                        else
                                                                        { ?>
                                                                            <div class="amount"><span>Gratis</span></div>
                                                                            <span class="bill" style="color:#fcfcfc">1 pago anual de <?php echo $total_anual ?>MXN</span> 
                                                                            <span class="bill" style="color:#fcfcfc">Te ahorrara< un total de 475943 </span> 
                                                                        <?php }
                                                                    ?>
                                                                    
                                                                </div>
                                                                <div class="price-plan-action">
                                                                   
                                                                   <a href="#" id="selecPlanA" data-id="<?php echo $row_planes['name'].",".$total_anual; ?>" style="background:#ffb800; border-color:#ffb800;" data-toggle="modal" data-target="#anualWindow" class="btn btn-primary">Selecciona este plan</a>
                                                                       
                                                                   </div>
                                                                   <script>
                                                                       $(document).on("click", "#selecPlanA", function () {
                                                                           var passedID = $(this).data('id');//get the id of the selected button
                                                                           var planName = passedID.split(",");
                                                                           $('#planNameAddA').val(planName[0]);;//set the id to the input on the modal
                                                                           $('#planNameAddAd').val(planName[0]);;//set the id to the input on the modal
                                                                           $('#precioAP').val(planName[1]);;//set the id to the input on the modal
                                                                           $('#precioAPd').val(planName[1]);;//set the id to the input on the modal
                                                                       });
                                                                   </script>
                                                            </div>
                                                        </div><!-- .price-item -->
                                                    </div><!-- .col --> <!-- ENDING Bloque que muestra la suscripcion -->
                                                <?php } } */?>
                                          <!--  </div> .row --> <!-- ENDING Bloque de precios de planes mensuales -->
                                       <!--  </div> .nk-block --> <!-- Bloque de precios de planes anuales -->
                                        
                                         <!-- middle block that shows IVA message. -->
                                        <!-- <div class="nk-block" style="text-align:center"> 
                                            <span class="bill">Los precios no incluyen IVA</span><br>
                                            <span class="bill" style="color:red;">Si deseas pagar con efectivo, debes colocar el correo registrado en mrkados</span>
                                        </div> -->
                                        <!-- ENDING middle block that shows IVA message. -->

                                      <!--  <div class="nk-block">
                                            <div class="card card-bordered">
                                                <table class="table table-features">
                                                    <thead class="tb-ftr-head thead-light">
                                                        <tr class="tb-ftr-item">
                                                            <th class="tb-ftr-info">Incluye</th> -->
                                                            <?php 
                                                               /* $query_Planes = "select * from tipos_subscription order by id ASC;";
                                                                $result_planes = mysqli_query($conection,$query_Planes);
                                                                
                                                                while ($row_planes = mysqli_fetch_assoc($result_planes)) 
                                                                { 
                                                                    if($row_planes['id'] != "5")
                                                                    {?>
                                                                        <th class="tb-ftr-plan"><?php echo $row_planes['name']; ?></th>
                                                                    <?php } ?>
                                                        
                                                            <?php } */ ?>
                                                      <!--  </tr> 
                                                    </thead>
                                                    <tbody class="tb-ftr-body">
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Espacio propio en el directorio de MrKados</td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            </tr>
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Ubicacion en carrusel "Lo mas nuevo" los primeros 7 dias en pagina principal de MrKados</td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                        </tr>
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Poster autoadherible para tienda fisica</td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                        </tr>
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Diseno de publicaciones para redes sociales (FB e IG)</td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                        </tr>
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Publicaciones mensuales en redes sociales</td>
                                                            <td class="tb-ftr-plan"><span>1</span></td>
                                                            <td class="tb-ftr-plan"><span>12</span></td>
                                                            <td class="tb-ftr-plan"><span>24</span></td>
                                                            <td class="tb-ftr-plan"><span>24</span></td>
                                                        </tr>
                                                       
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Espacio en cuponera digital <a data-toggle="modal" data-target="#showCuponera">?</a></td>
                                                            <td class="tb-ftr-plan"><span>-</span></td>
                                                            <td class="tb-ftr-plan"><span>Basico</span></td>
                                                            <td class="tb-ftr-plan"><span>Estandar</span></td>
                                                            <td class="tb-ftr-plan"><span>Premium</span></td>
                                                        </tr>
                                                        <tr class="tb-ftr-item">
                                                            <td class="tb-ftr-info">Ubicacion en carrusel "Tal vez te interese" en pagina de mrkados</td>
                                                            <td class="tb-ftr-plan"><span>-</span></td>
                                                            <td class="tb-ftr-plan"><span>-</span></td>
                                                            <td class="tb-ftr-plan"><span>-</span></td>
                                                            <td class="tb-ftr-plan"><em class="icon ni ni-cross"></em> <span class="plan-name">Starter</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div> 
                                    </div>  .  -->              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->

            
  
<?php
Page::ventanasEmergentesPlanes($correo, $conection);
Page::complement();
?>