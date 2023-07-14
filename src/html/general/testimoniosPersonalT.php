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
    header("Location: user-profile-regular.php?correo=$correo");
}

Page::header($correo, $usuarioTipo, $name, $apellido, $idUser, $conection);
?> 

                              <!-- content @s -->
                 <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Mis Testimonios</h3>
                                            
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
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Comentario</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Reputacion</span></div>
                                                        
                                                    </div><!-- .nk-tb-item -->

                                                    <?php 
                                                            $query2 = "select * from usuarios where correo = '$correo';";
                                                            $user2 = mysqli_query($conection,$query2);
                                                            
                                                            while ($row2 = mysqli_fetch_assoc($user2)) 
                                                            {
                                                                $idUser = $row2["id"];

                                                                $query3 = "select * from testimonios where id_usuario = '$idUser';";
                                                                $testi = mysqli_query($conection,$query3);

                                                                while ($row3 = mysqli_fetch_assoc($testi)) 
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
                                                                        <span  class="tb-amount"><?php echo $row3['comentario']; ?></span>
                                                                    </div>

                                                                    <div class="nk-tb-col tb-col-md">
                                                                        <span  class="tb-amount"><?php echo $row3['reputacion']; ?></span>
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
                <!-- content @e -->
                       <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                           
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- @@ Profile Edit Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Actualizar Testimonio</h5>
                    
                  
                    <div class="tab-content">
                        <form method="POST">
                            <div class="tab-pane active" id="personal">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name">AA</label>
                                            <input type="text" class="form-control form-control-lg" id="full-name" name="name" value="<?php echo $name; ?>" placeholder="Enter Full name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="display-name">Apellido</label>
                                            <input type="text" class="form-control form-control-lg" id="display-name" name="apellido" value="<?php echo $apellido; ?>" placeholder="Enter display name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="phone-no">Teléfono</label>
                                            <input type="text" class="form-control form-control-lg" id="phone-no" name="telefono" value="<?php echo $telefono; ?>" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="birth-day">Correo Electrónico</label>
                                            <input type="text" class="form-control form-control-lg" id="birth-day" disabled name="correoBlock"  value="<?php echo $correo; ?>">
                                            <input type="text" class="form-control form-control-lg" id="birth-day" style="display:none;" name="correo"  value="<?php echo $correo; ?>">
                                        </div>
                                    </div>
                                
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <a href="html/general/user-profile-regular.php?correo=<?php echo $correo; ?>" > <input style="background:#ffb800; border-radius:10px; border-color:#ffb800; color: black; font-weight:bold;" type="submit" value="Actualizar"></a>
                                            </li>
                                            <li>
                                                <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .tab-pane -->
                        </form>
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=1.6.0"></script>
    <script src="./assets/js/scripts.js?ver=1.6.0"></script>
</body>

</html>