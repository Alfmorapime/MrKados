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

// se toma la hora del sistema
$date = new DateTime();  
$date->setTimezone(new DateTimeZone('America/Mexico_City'));
$now = date_format($date,"d/m/y H:i:s");
$now2 = date_format($date,"dmyHis");
$nowF = date_format($date,"y/m/d H:i:s");

//Se preparan todos los datos para ingresr a BD 
if (isset($_POST["nombre_negocio"]))
{
    //Assemble tiendas
    $nombreTienda = $_POST["nombre_negocio"];
    $usuario = $correo;
    $whatsaap = $_POST["whatsaap"];
    $telefono = $_POST["telefono"];
    $correoT = $_POST["correo"];
    $facebook = $_POST["facebookMessenger"];
    $reputacion = 5;
    $subscription = "MrKadito";

    if(!isset($_POST["listCat"]))
    {
        $giro = "";
    }
    else
    {
        $giro = $_POST['listCat'];
        $queryCats = "select * from categorias WHERE id = $giro";
        $cats = mysqli_query($conection,$queryCats);

        while ($row = mysqli_fetch_assoc($cats)) 
        {
            $giro = $row['nombre'];
        }
    }

    $insert_query = "insert into tiendas (nombreTienda, giro, id_usuario, descripcion, nombrePersona, apellidoPersona, logo, catalogo, paginaWeb, redSocial, nombrePersonaSucursal, apellidoPersonaSucursal, direccion, codigoPostal, estado, ciudad, colonia, horarios, metodoPago, tiposEntrega, costoEnvio, descripcionEnvio, tiempoEnvio, factura, citas, fotoNegocio, imagen1, imagen2, imagen3, imagen4, imagen5, telefono, whatsaap, correo, linkFacebook, etiquetas, fecha_registro, subscription, email, linkUber, linkRappi) 
    VALUES
    ('$nombreTienda', '$giro', '$usuario', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '$telefono', '$whatsaap', '$reputacion', '$facebook', '', '$nowF', '$subscription', '$correoT', '', '')";
    //mysqli_query($conection, $insert_query);

    if ($conection->query($insert_query) === TRUE)
    {
        $tienda = $conection->insert_id;
    }

    if(isset($_POST["subcat11"]))
    {
        $subcat = (int) $_POST["subcat11"];

        $query_Cate = "SELECT * FROM subcategoria WHERE id = '$subcat'";
        $result_cate = mysqli_query($conection,$query_Cate);
        while ($row_cat = mysqli_fetch_assoc($result_cate)) 
        {
            $tipo = $row_cat['id_categoria'];

            $insert_query1 = "insert into rel_tienda_subcategoria(id_tienda, id_subcategoria, tipo_cat) VALUES('$tienda','$subcat', '$tipo')";
            mysqli_query($conection, $insert_query1);
        }
    }
    else
    {
        $subcat = "";
    }

    if(isset($_POST["subcat2"]))
    {
        $subcat = (int) $_POST["subcat2"];
        $query_Cate = "SELECT * FROM subcategoria WHERE id = '$subcat'";
        $result_cate = mysqli_query($conection,$query_Cate);
        while ($row_cat = mysqli_fetch_assoc($result_cate)) 
        {
            $tipo = $row_cat['id_categoria'];

            $insert_query2 = "insert into rel_tienda_subcategoria(id_tienda, id_subcategoria, tipo_cat) VALUES('$tienda','$subcat', '$tipo')";
            mysqli_query($conection, $insert_query2);
        }
    }
    else
    {
        $subcat = "";
    }

    if(isset($_POST["subcat3"]))
    {
        $subcat = (int) $_POST["subcat3"];
        $query_Cate = "SELECT * FROM subcategoria WHERE id = '$subcat'";
        $result_cate = mysqli_query($conection,$query_Cate);
        while ($row_cat = mysqli_fetch_assoc($result_cate)) 
        {
            $tipo = $row_cat['id_categoria'];

            $insert_query3 = "insert into rel_tienda_subcategoria(id_tienda, id_subcategoria, tipo_cat) VALUES('$tienda','$subcat', '$tipo')";
            mysqli_query($conection, $insert_query3);
        }
    }
    else
    {
        $subcat = "";
    }

    if(isset($_POST["subcat4"]))
    {
        $subcat = (int) $_POST["subcat4"];
        $query_Cate = "SELECT * FROM subcategoria WHERE id = '$subcat'";
        $result_cate = mysqli_query($conection,$query_Cate);
        while ($row_cat = mysqli_fetch_assoc($result_cate)) 
        {
            $tipo = $row_cat['id_categoria'];

            $insert_query4 = "insert into rel_tienda_subcategoria(id_tienda, id_subcategoria, tipo_cat) VALUES('$tienda','$subcat', '$tipo')";
            mysqli_query($conection, $insert_query4);
        }
    }
    else
    {
        $subcat = "";
    }

    if(isset($_POST["subcat5"]))
    {
        $subcat = (int) $_POST["subcat5"];
        $query_Cate = "SELECT * FROM subcategoria WHERE id = '$subcat'";
        $result_cate = mysqli_query($conection,$query_Cate);
        while ($row_cat = mysqli_fetch_assoc($result_cate)) 
        {
            $tipo = $row_cat['id_categoria'];

            $insert_query5 = "insert into rel_tienda_subcategoria(id_tienda, id_subcategoria, tipo_cat) VALUES('$tienda','$subcat', '$tipo')";
            mysqli_query($conection, $insert_query5);
        }
    }
    else
    {
        $subcat = "";
    } 

   header("Location:  registroTienda2.php?user=$correo&type=$usuarioTipo&id=$tienda");
}  

if(isset($_POST["usuID"]))
{
    $usuarioID = $_POST['usuID'];
    $chequeo = 1;
    mysqli_query($conection,"UPDATE notificaciones_tienda SET chequeo = $chequeo WHERE id_user_tienda = $usuarioID");
    //header( 'Location: detalleTienda.php?correo=$user&id=$id_tienda' ) ;
    header("Location:  registroTienda.php?user=$correo&type=$usuarioTipo");
}

Page::header($correo, $usuarioTipo, $name, $apellido, $idUser, $conection);
?> 
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Registra tu Negocio Ahora</h3>
                                <div class="nk-block-des text-soft">
                                <!--  <p>Welcome to DashLite Dashboard Template.</p> -->
                                </div>
                            </div><!-- .nk-block-head-content -->
                                            
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                        
                                        
                            <!-- FORMULARIO NEGOCIO -->

                                <!-- SECTION -->
                                    <!-- Section -->
                                <section>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-8 center no-padding">
                                                    <form class="form-transparent-grey" method="POST" enctype="multipart/form-data">
                                                        <div class="row" style=" width: 100%; margin-left:5%;">
                                                            <div class="col-12 form-group">
                                                                <label style="font-weight: bold; color: black; font-size: 11px;">INFORMACIÓN GENERAL</label>
                                                            </div>
                                                            <div class="col-6 form-group">
                                                                <input type="text" name="nombre_negocio" placeholder="¿Cómo se llama tu negocio?" class="form-control" required>
                                                            </div>
                                                            <div class="col-6 form-group">
                                                                <input type="text" name="whatsaap" placeholder="WhatsApp (número a 10 dígitos)" class="form-control">
                                                            </div>
                                                            <div class="col-6 form-group">
                                                                <input type="text" name="telefono" placeholder="Telefono Celular" class="form-control">
                                                            </div>
                                                            <div class="col-6 form-group">
                                                                <input type="text" name="correo" placeholder="Correo Electronico" class="form-control">
                                                            </div>

                                                            <div class="col-lg-6 form-group">
                                                                <input type="text" name="facebookMessenger" placeholder="Link Messenger Facebook" class="form-control">
                                                            </div>
                                                            <div class="col-lg-6 form-group">
                                                                <select name="listCat" id="listCat"  size="number_of_options" style="width:100%;" required>
                                                                    <?php 
                                                                        $querySubCat = "select * from categorias order by nombre ASC";
                                                                        $subcategorias = mysqli_query($conection,$querySubCat);
                                                                    ?> <option value=" ">Selecciona el giro principal</option> <?php
                                                                        while ($row = mysqli_fetch_assoc($subcategorias)) {
                                                                            $name = $row['nombre'];
                                                                            $catId = $row['id'];
                                                                            ?> <option value="<?php echo $catId; ?>"><?php echo $name; ?></option> <?php
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin-left:5%;"> 
                                                            <div id="subcatList1" class="col-6 form-group">
                                                               <!-- AQUI SE LLEVA EL SELECT -->
                                                            </div>

                                                            <div class="col-6 form-group" style="margin-top:2%; margin-top:14%;">
                                                                <input type="button" onclick="mostrarMensaje()" name="addCat" value="¿Ofrece algún otro servicio?" />
                                                            </div>

                                                            <div id="subcatList2" class="col-6 form-group">
                                                                 <!-- AQUI SE LLEVA EL SELECT subcat list 2-->
                                                            </div>
                                                            

                                                            <div id="subcatList3" class="col-6 form-group">
                                                               <!-- AQUI SE LLEVA EL SELECT subcat list 2-->
                                                            </div>
                                                            
                                                            <div id="subcatList4" class="col-6 form-group">
                                                               <!-- AQUI SE LLEVA EL SELECT subcat list 2-->
                                                            </div>
                                                            
                                                            <div id="subcatList5" class="col-6 form-group">
                                                               <!-- AQUI SE LLEVA EL SELECT subcat list 2-->
                                                            </div>
                                                        </div>
                                                            <script>
                                                                var subCatValue = 2;
                                                                function mostrarMensaje()
                                                                {
                                                                    
                                                                    if(subCatValue == 2)
                                                                    {
                                                                        document.getElementById('subcat2').style.display = 'block';
                                                                    }
                                                                    
                                                                    if(subCatValue == 3)
                                                                    {
                                                                        document.getElementById('subcat3').style.display = 'block';
                                                                    }
                                                                    
                                                                    if(subCatValue == 4)
                                                                    {
                                                                        document.getElementById('subcat4').style.display = 'block';
                                                                    }
                                                                    
                                                                    if(subCatValue == 5)
                                                                    {
                                                                        document.getElementById('subcat5').style.display = 'block';
                                                                    }

                                                                
                                                                    subCatValue++;
                                                                    
                                                                }

                                                    
                                                            </script>

                                           
                                                <div class="row" style="width:100%; margin-left:5%;">
                                                    
                                                    <div class="col-1 form-group">
                                                        <input type="checkbox" name="terminos" class="form-control" style="margin-top: 22%;" required> 
                                                    </div>
                                                    <div class="col-10 form-group">
                                                        <label style="color: black; font-weight: bold; font-size: 11px;  margin-top: 3%;">Aceptas los <b>Términos y condiciones</b></label>
                                                    </div>
                                                
                                                    <div class="col-12 form-group">
                                                        <input type="submit" name="submit" value="REGÍSTRATE AHORA" class="form-control" style="margin-top: 5%; font-size: 14px; background: black; color: white; font-weight: bold; border-radius: 10px; height: 70px;">
                                                    </div>
                                                </div>
                                            </div>

                                                </div>                       
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                                            <!-- ENDING SECTION -->

                                                            <!-- FIN FORMULARIO NEGOCIO -->
                                        
                        </div><!-- .row -->
                    </div><!-- .nk-block -->
                </div><!-- nk-content-body -->
            </div><!-- nk-content-inner -->
        </div><!-- container-fluid -->
    </div> <!-- content @e -->

<?php
Page::complement();

?>