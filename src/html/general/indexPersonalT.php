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

if(isset($_POST["id"]))
{
    $id = $_POST["id"];
    $queryDelete = "delete from tiendas where id = '$id';";
    $deleteExecution = mysqli_query($conection,$queryDelete);
    header("Location: index.php?user=$correo");
}

if(isset($_POST["id_edit"]))
{
    $id = $_POST["id_edit"];
    header("Location: informacionTienda.php?user=$correo&id=$id");
}

Page::header($correo, $usuarioTipo, $name, $apellido, $idUser, $conection);
?> 

                <!-- Contenido tiendas -->

                <!-- content @s -->

                                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Mis Contactos</h3>
                                            
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered card-stretch">
                                        <div class="card-inner-group">
                                            <div class="card-inner p-0">
                                                <div class="nk-tb-list nk-tb-ulist">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Nombre de la Tienda</span></div>
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Fecha de contacto</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Reputacion</span></div>
                                                        
                                                    </div><!-- .nk-tb-item -->

                                                    <?php 
                                                            $query2 = "select * from usuarios where correo = '$correo';";
                                                            $user2 = mysqli_query($conection,$query2);
                                                            
                                                            while ($row2 = mysqli_fetch_assoc($user2)) 
                                                            {
                                                                $idUser = $row2["id"];
                                                                $query3 = "select * from contactos where id_usuario = '$idUser';";
                                                                $contactos = mysqli_query($conection,$query3);

                                                                while ($row3 = mysqli_fetch_assoc($contactos)) 
                                                                {
                                                                    $id_tienda = $row3["id_tienda"];
                                                                    $query4 = "select * from tiendas where id = '$id_tienda';";
                                                                    $tienda = mysqli_query($conection,$query4);

                                                                    while ($row4 = mysqli_fetch_assoc($tienda)) 
                                                                    {   

                                                                ?>
                                                                <div class="nk-tb-item">
                                                                 
                                                                    <input style="display:none;" type="text" value="<?php echo $row3['id']; ?>">
                                                                   
                                                                    <div class="nk-tb-col tb-col-mb">
                                                                        <span  class="tb-amount"><?php echo $row4['nombreTienda']; ?></span>
                                                                    </div>

                                                                    <div class="nk-tb-col tb-col-md">
                                                                        <span  class="tb-amount"><?php echo $row3['fecha']; ?></span>
                                                                    </div>

                                                                    <div class="nk-tb-col tb-col-md">
                                                                        <?php if($row3['id_testimonio'] == 0) { ?>
                                                                            <span style="background:green; color:white; text-align:center;"  class="tb-amount">Debe Calificar</span>
                                                                        <?php } else {?>
                                                                            <span style="background:red; color:white; text-align:center;"  class="tb-amount">La tienda fue calificada</span>
                                                                        <?php } ?>
                                                                    </div>
                                                        
                                                                    <div class="nk-tb-col nk-tb-col-tools" data-toggle="modal" data-target="#profile-edit">
                                                                   <!-- <a href="?action=edit&id='.$section->getSectionId().'">Edit</td>'; -->
                                                                    <!--   <form action="edit">  
                                                                           <input  type="text" name="idTestimonio" value="<?php echo $row3['id']; ?>"> 
                                                                           <input type="button"  value="Editar"> 
                                                                        </form> -->
                                                                    </div>
                                                                 
                                                                </div><!-- .nk-tb-item -->
                                                                    <?php } ?>
                                                                <?php } ?>
                                                           <?php } ?>

                                                   
                                                </div><!-- .nk-tb-list -->
                                            </div><!-- .card-inner -->
                                        </div><!-- .card-inner-group -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>


               
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=1.6.0"></script>
    <script src="./assets/js/scripts.js?ver=1.6.0"></script>
    <script src="./assets/js/charts/gd-general.js?ver=1.6.0"></script>
</body>

</html>