<?php
require_once('header.php');

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


Page::header($correo, $usuarioTipo, $name, $apellido, $idUser, $conection);
?> 
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
                           
                            <div class="nk-content-body">
                                <div class="nk-content-wrap">
                                    <div class="nk-block-head nk-block-head-lg">
                                        <div class="nk-block-between-md g-4">
                                            <div class="nk-block-head-content">
                                                <h2 class="nk-block-title fw-normal" style="text-align:center; marin-top:10%;">Su proceso de pago inicio satisfactoriamente. Luego que complete el segudno paso y que su pago sea verificado, su suscripcion sera activada.</h2>
                                            </div>
                                        </div>
                                        <div class="col-12" style="margin:auto;">
                                            <img style="width:40%; margin-left:30%;" src="../../../images/mrkados-inicia.png"/>
                                        </div>
                                    </div><!-- .nk-block-head -->   
                                    <!-- ENDING PLANES ANUAlES -->   .                
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