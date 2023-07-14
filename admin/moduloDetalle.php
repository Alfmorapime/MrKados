<?php
//require_once('autoload.php');
$conection = include '../conection.php';

/**
 * 
 * Se recibe el nombre del usuario
 * 
 */
if(isset($_GET["correo"]))
{
    $user = $_GET["correo"];
}
else
{
    $user = "";
}

if(isset($_GET["filter"]))
{
    $filter = $_GET["filter"];
}
else
{
    $filter = "";
}

if(isset($_GET["order"]))
{
    $order = $_GET["order"];
}
else
{
    $order = "";
}

/**
 * 
 * Se recibe el valor de Key. Este valor especifica cual modulo es el rerquerido
 * 
 */
if(isset($_GET["key"]))
{
    $key = $_GET["key"];
}
else
{
    $key = "";
}

/**
 * 
 * Se recibe el valor del registro que se quiere editar
 * 
 */
if(isset($_GET["id"]))
{
    $idCat = $_GET["id"];
}
else
{
    $idCat = "";
}

/**
 * 
 * Se recibe el valor del registro que se quiere editar sliderIndex
 * 
 */
if(isset($_GET["spie"]))
{
    $idSliderIndex = $_GET["spie"];
}
else
{
    $idSliderIndex = "";
}

/**
 * 
 * Se recibe el valor del registro que se quiere editar Estado
 * 
 */
if(isset($_GET["ise"]))
{
    $estadosID = $_GET["ise"];
}
else
{
    $estadosID = "";
}

/**
 * 
 * Se recibe el valor del registro que se quiere editar ciudad
 * 
 */
if(isset($_GET["cse"]))
{
    $ciudadID = $_GET["cse"];
}
else
{
    $ciudadID = "";
}

/**
 * 
 * Se recibe el valor del registro que se quiere editar colonia
 * 
 */
if(isset($_GET["cscc"]))
{
    $coloniaID = $_GET["cscc"];
}
else
{
    $coloniaID = "";
}

/**
     * Elimina plan
     */
    if(isset($_POST["idEliminarPlan"]))
    {
        var_dump($_POST["idEliminarPlan"]);
        $idELiminar = $_POST["idEliminarPlan"];
        $queryDelete = "delete from tipos_subscription where id = '$idELiminar';";
        $deleteExecution = mysqli_query($conection,$queryDelete);

       header("Location: moduloDetalle.php?correo=$user&key=Precios&result=deleted");
    }

/**
 * 
 * Se recibe el valor del registro que se quiere editar foto registro tienda
 * 
 */
if(isset($_GET["frme"]))
{
    $idFotoRegistroMercado = $_GET["frme"];
}
else
{
    $idFotoRegistroMercado = "";
}

/**
 * 
 * Se recibe el valor del registro que se quiere editar foto registro cliente
 * 
 */
if(isset($_GET["frce"]))
{
    $idFotoRegistroCliente = $_GET["frce"];
}
else
{
    $idFotoRegistroCliente = "";
}

/**
 * 
 * Se recibe el valor del registro que se quiere editar
 * 
 */
if(isset($_GET["idue"]))
{
    $idUserEdit = $_GET["idue"];
}
else
{
    $idUserEdit = "";
}


/**
 * 
 * Se recibe el valor de Key. Este valor especifica cual modulo es el rerquerido
 * 
 */
if(isset($_GET["result"]))
{
    $result = $_GET["result"];
}
else
{
    $result = "";
}

/**
 * 
 * Se recibe el valor del id de la categoria que se va a actualizar
 * 
 */
if(isset($_POST["updateIDCatt"]))
{
    $date = new DateTime();  
    $date->setTimezone(new DateTimeZone('America/Mexico_City'));
    $now = date_format($date,"d/m/y H/i/s");
    $now2 = date_format($date,"dmyHis");

    $catIdUpdate = $_POST["updateIDCatt"];
    $nameCatUpdate = $_POST["nombreCategoriaUpdatee"];

    if($_FILES['imgCategoriaUpdate']['name'] != "")
    {
        $nombre = $_FILES['imgCategoriaUpdate']['name'];
        $nombreNew = $now2."".$nombre;

        $directorio ="../images/categorias";

        $guardado = $_FILES['imgCategoriaUpdate']['tmp_name'];
    
        if(file_exists($directorio))
        {
            move_uploaded_file($guardado, $directorio."/".$nombreNew);
        }

       
        $queryUpdate = "UPDATE categorias SET nombre = '$nameCatUpdate', image = '$nombreNew' WHERE id = '$catIdUpdate'";

        mysqli_query($conection, $queryUpdate);
        header("Location: moduloDetalle.php?correo=$user&key=$key&result=edited");
    }
    else
    {
        $queryUpdate = "UPDATE categorias SET nombre = '$nameCatUpdate' WHERE id = '$catIdUpdate'";

        mysqli_query($conection, $queryUpdate);
        header("Location: moduloDetalle.php?correo=$user&key=$key&result=edited");   
    }
}
else
{
    $catIdUpdate = "";
}

/**
 * 
 * Se recibe el valor del id de la subcategoria que se va a actualizar
 * 
 */
if(isset($_POST["updateSubIDCat"]))
{
    $date = new DateTime();  
    $date->setTimezone(new DateTimeZone('America/Mexico_City'));
    $now = date_format($date,"d/m/y H/i/s");
    $now2 = date_format($date,"dmyHis");

    $tipoCatEdit = $_POST["tipoSubCatEdit"];
    $catIdUpdate = $_POST["updateSubIDCat"];
    $nameCatUpdate = utf8_decode($_POST["nombreSubCategoriaUpdate"]);
    $catPUpdate = $_POST["tipoSubCatPEdit"];

    if($_FILES['imgSubCategoriaUpdate']['name'] != "")
    {
        $nombre = $_FILES['imgSubCategoriaUpdate']['name'];
        $nombreNew = $now2."".$nombre;
    
        $directorio ="../images/categorias";
    
        $guardado = $_FILES['imgSubCategoriaUpdate']['tmp_name'];
     
        if(file_exists($directorio))
        {
            move_uploaded_file($guardado, $directorio."/".$nombreNew);
        }
    
        $queryUpdate = "UPDATE subcategoria SET subcat = '$nameCatUpdate', id_categoria = '$tipoCatEdit', image = '$nombreNew',  categoria = '$catPUpdate' WHERE id = '$catIdUpdate'";
    
        mysqli_query($conection, $queryUpdate);
        header("Location: moduloDetalle.php?correo=$user&key=$key&result=edited");
    }
    else
    {
        $queryUpdate = "UPDATE subcategoria SET subcat = '$nameCatUpdate', id_categoria = '$tipoCatEdit', categoria = '$catPUpdate' WHERE id = '$catIdUpdate'";
    
        mysqli_query($conection, $queryUpdate);
        header("Location: moduloDetalle.php?correo=$user&key=$key&result=edited");
    }
   
}
else
{
    $catIdUpdate = "";
}

/**
 * 
 * Se recibe el valor del id del usuario que se va a actualizar
 * 
 */
if(isset($_POST["updateIDUsu"]))
{
    $updateIDUsu = $_POST["updateIDUsu"];
    $nombreUsuarioUpdate = $_POST["nombreUsuarioUpdate"];
    $apellidoUpdate = $_POST["apellidoUpdate"];
    $cumpleanosUpdate = $_POST["cumpleanosUpdate"];
    $telefonoUpdate = $_POST["telefonoUpdate"];
    $emailUpdate = $_POST["emailUpdate"];
    $contrasenaUpdate = $_POST["contrasenaUpdate"];
    $tipo_usuario = $_POST["tipo_usuario"];
    $fechaRegistro = $_POST["fechaRegistro"];

    $queryUpdate = "UPDATE usuarios SET nombre = '$nombreUsuarioUpdate', apellidos = '$apellidoUpdate', cumpleanos = '$cumpleanosUpdate', telefono = '$telefonoUpdate', correo = '$emailUpdate', contrasena = '$contrasenaUpdate', fechaRegistro = '$fechaRegistro', tipo_usuario = '$tipo_usuario' WHERE id = '$updateIDUsu'";

    mysqli_query($conection, $queryUpdate);
    header("Location: moduloDetalle.php?correo=$user&key=usuarios&result=edited");
}
else
{
    $catIdUpdate = "";
}


//Chequea el action
if(isset($_GET["key"]) && isset($_GET["action"]))
{
    /**
     * Elimina Categoria
     */
    if($_GET["key"] == "categorias" && $_GET["action"] == "delete")
    {
        $key = $$_GET["key"];
        $id = $_GET['id'];
        $queryDelete = "delete from categorias where id = '$id';";
        $deleteExecution = mysqli_query($conection,$queryDelete);

        header("Location: moduloDetalle.php?correo=$user&key=categorias&result=deleted");
    }

    /**
     * Elimina SubCategoria
     */
    if($_GET["key"] == "subcategorias" && $_GET["action"] == "delete")
    {
        $key = $$_GET["key"];
        $id = $_GET['id'];

        $nombre = $_GET['nm'];
        $newEtiquetaString = "";

        $query_cat_tienda = "SELECT * FROM tiendas;";
        $result_subcat_tienda = mysqli_query($conection,$query_cat_tienda);
        while ($row = mysqli_fetch_assoc($result_subcat_tienda)) 
        {
            $tiendaId = $row['id'];
            $subCategorias = $row['etiquetas'];
            $pieces = explode(",", $subCategorias); 

            for($i = 0; $i < sizeof($pieces); $i++)
            { 
                  if($pieces[$i] == $nombre)
                  {
                    //validar la posicion del string para eliminar la categoria
                    if($i == 0)
                    {
                        $newEtiquetaString = ",".$pieces[1].",".$pieces[2].",".$pieces[3];
                        //update tienda
                        $queryUpdate = "UPDATE tiendas SET etiquetas = '$newEtiquetaString' WHERE id = '$tiendaId'";
                        mysqli_query($conection, $queryUpdate);
                    }
                    else if($i == 1)
                    {
                        var_dump($i);
                        var_dump($pieces[$i]);
                        $newEtiquetaString = $pieces[0].",".$pieces[2].",".$pieces[3].",";
                        //update tienda
                        $queryUpdate = "UPDATE tiendas SET etiquetas = '$newEtiquetaString' WHERE id = '$tiendaId'";
                        mysqli_query($conection, $queryUpdate);
                    }
                    else if($i == 2)
                    {
                        $newEtiquetaString = $pieces[0].",".$pieces[1].",".$pieces[3].",";
                        //update tienda
                        $queryUpdate = "UPDATE tiendas SET etiquetas = '$newEtiquetaString' WHERE id = '$tiendaId'";
                        mysqli_query($conection, $queryUpdate);
                    }
                    else if($i == 3)
                    {
                        $newEtiquetaString = $pieces[0].",".$pieces[1].",".$pieces[2].",";
                        //update tienda
                        $queryUpdate = "UPDATE tiendas SET etiquetas = '$newEtiquetaString' WHERE id = '$tiendaId'";
                        mysqli_query($conection, $queryUpdate);
                    }
                }
            }
        }

        $queryDelete = "delete from subcategoria where id = '$id';";
        $deleteExecution = mysqli_query($conection,$queryDelete);

        header("Location: moduloDetalle.php?correo=$user&key=subcategorias&result=deleted");
    }

    /**
     * Elimina Usuario
     */
    if($_GET["key"] == "usuarios" && $_GET["action"] == "delete")
    {
        $key = $_GET["key"];
        $id = $_GET["inud"];

        $queryDelete = "delete from usuarios where id = '$id';";
        $deleteExecution = mysqli_query($conection,$queryDelete);

        header("Location: moduloDetalle.php?correo=$user&key=usuarios&result=deleted");
    }

    /**
     * Elimina Slider Pagina principal
     */
    if($_GET["key"] == "sliderIndex" && $_GET["action"] == "delete")
    {
        $key = $_GET["key"];
        $id = $_GET["spi"];
        $queryDelete = "delete from slider where id = '$id';";
        $deleteExecution = mysqli_query($conection,$queryDelete);

        header("Location: moduloDetalle.php?correo=$user&key=sliderIndex&result=deleted");
    }

        /**
     * Elimina Tienda
     */
    if($_GET["key"] == "tiendas" && $_GET["action"] == "delete")
    {
        $key = $_GET["key"];
        $id = $_GET["itdd"];
        $queryDelete = "delete from tiendas where id = '$id';";
        $deleteExecution = mysqli_query($conection,$queryDelete);

        header("Location: moduloDetalle.php?correo=$user&key=tiendas&result=deleted");
    }

     /**
     * Elimina foto Pagina Registro Tienda
     */
    if($_GET["key"] == "photoRegistroTienda" && $_GET["action"] == "delete")
    {
        $key = $_GET["key"];
        $id = $_GET["frmd"];
        $queryDelete = "delete from sliderregistrotienda where id = '$id';";
        $deleteExecution = mysqli_query($conection,$queryDelete);

       header("Location: moduloDetalle.php?correo=$user&key=photoRegistroTienda&result=deleted");
    }

    /**
     * Elimina foto Pagina Registro Cliente
     */
    if($_GET["key"] == "photoRegistroCliente" && $_GET["action"] == "delete")
    {
        $key = $_GET["key"];
        $id = $_GET["frcd"];
        $queryDelete = "delete from sliderregistrocliente where id = '$id';";
        $deleteExecution = mysqli_query($conection,$queryDelete);

       header("Location: moduloDetalle.php?correo=$user&key=photoRegistroCliente&result=deleted");
    }

    /**
     * Elimina Estado
     */
    if($_GET["key"] == "estados" && $_GET["action"] == "delete")
    {
        $key = $_GET["key"];
        $id = $_GET["emd"];

        $queryDelete = "delete from estado where id = '$id';";
        $deleteExecution = mysqli_query($conection,$queryDelete);


       header("Location: moduloDetalle.php?correo=$user&key=estados&result=deleted");
    }

    /**
     * Eliminar Suscripcion
     */
    if($_GET["key"] == "Suscripciones" && $_GET["action"] == "delete")
    {
        $key = $_GET["key"];
        $id = $_GET["semd"];
        $id_tienda = $_GET["semdid"];

        $queryDelete = "delete from suscripciones_rel where id = '$id';";
        $deleteExecution = mysqli_query($conection,$queryDelete);

         //update registro en la tabal tienda
         $queryUpdate = "UPDATE tiendas SET subscription = 'Mrkadito' WHERE id = '$id_tienda'";
         mysqli_query($conection, $queryUpdate);

        header("Location: moduloDetalle.php?correo=$user&key=Suscripciones&result=deleted");
    }

     /**
     * Elimina Colonia
     */
    if($_GET["key"] == "colonias" && $_GET["action"] == "delete")
    {
        $key = $_GET["key"];
        $id = $_GET["cmdc"];

        $queryDelete = "delete from relacion_ubicacion where id_colonia = '$id';";
        $deleteExecution = mysqli_query($conection,$queryDelete);

        $queryDelete2 = "delete from colonia where id = '$id';";
        $deleteExecution2 = mysqli_query($conection,$queryDelete2);

       header("Location: moduloDetalle.php?correo=$user&key=colonias&result=deleted");
    }

    /**
     * Elimina Ciudad
     */
    if($_GET["key"] == "ciudades" && $_GET["action"] == "delete")
    {
        $key = $_GET["key"];
        $id = $_GET["cmdt"];
        $queryDelete = "delete from ciudad where id = '$id';";
        $deleteExecution = mysqli_query($conection,$queryDelete);

       header("Location: moduloDetalle.php?correo=$user&key=ciudades&result=deleted");
    }

     /**
     * desactivar Slider Pagina Cliente
     */
    if($_GET["key"] == "photoRegistroCliente" && $_GET["action"] == "desactivar")
    {
        $key = $_GET["key"];
        $id = $_GET["frcdr"];
        $queryUpdate = "UPDATE sliderregistrocliente SET activate = '0' WHERE id = '$id'";

        mysqli_query($conection, $queryUpdate);
        header("Location: moduloDetalle.php?correo=$user&key=photoRegistroCliente&result=edited");
    }

          /**
     * activar Slider Pagina Cliente
     */
    if($_GET["key"] == "photoRegistroCliente" && $_GET["action"] == "activar")
    {
        $key = $_GET["key"];
        $id = $_GET["frca"];
        $queryUpdate = "UPDATE sliderregistrocliente SET activate = '1' WHERE id = '$id'";

        mysqli_query($conection, $queryUpdate);
        header("Location: moduloDetalle.php?correo=$user&key=photoRegistroCliente&result=edited");
    }

    /**
     * desactivar Slider Pagina principal
     */
    if($_GET["key"] == "sliderIndex" && $_GET["action"] == "desactivar")
    {
        $key = $_GET["key"];
        $id = $_GET["spi"];
        $queryUpdate = "UPDATE slider SET activate = '0' WHERE id = '$id'";

        mysqli_query($conection, $queryUpdate);
        header("Location: moduloDetalle.php?correo=$user&key=sliderIndex&result=edited");
    }

          /**
     * activar Slider Pagina principal
     */
    if($_GET["key"] == "sliderIndex" && $_GET["action"] == "activar")
    {
        $key = $_GET["key"];
        $id = $_GET["spi"];
        $queryUpdate = "UPDATE slider SET activate = '1' WHERE id = '$id'";

        mysqli_query($conection, $queryUpdate);
        header("Location: moduloDetalle.php?correo=$user&key=sliderIndex&result=edited");
    }

    /**
     * desactivar foto Pagina Registro mercado
     */
    if($_GET["key"] == "photoRegistroTienda" && $_GET["action"] == "desactivar")
    {
        $key = $_GET["key"];
        $id = $_GET["frmdr"];
        $queryUpdate = "UPDATE sliderregistrotienda SET activate = '0' WHERE id = '$id'";

        mysqli_query($conection, $queryUpdate);
        header("Location: moduloDetalle.php?correo=$user&key=photoRegistroTienda&result=edited");
    }

    /**
     * activar foto Pagina Registro mercado
     */
    if($_GET["key"] == "photoRegistroTienda" && $_GET["action"] == "activar")
    {
        $key = $_GET["key"];
        $id = $_GET["frma"];
        $queryUpdate = "UPDATE sliderregistrotienda SET activate = '1' WHERE id = '$id'";

        mysqli_query($conection, $queryUpdate);
        header("Location: moduloDetalle.php?correo=$user&key=photoRegistroTienda&result=edited");
    }
}

/**
 * 
 * Agregar nueva Categoria
 * 
 */
if(isset($_POST["nombreCategoriaa"]))
{
    $nombreCategoria = $_POST["nombreCategoriaa"];

    $date = new DateTime();  
    $date->setTimezone(new DateTimeZone('America/Mexico_City'));
    $now = date_format($date,"y/m/d H:i:s");
    $now2 = date_format($date,"dmyHis");

    $newImagenCat = $_FILES['imgCategoriaa']['name'];
    $newImagenCat = $now2."".$newImagenCat;
    $directorioCat ="../images/categorias";

    $guardado = $_FILES['imgCategoriaa']['tmp_name'];
    
    if(file_exists($directorioCat))
    {
        move_uploaded_file($guardado, $directorioCat."/".$newImagenCat);
    }

    $queryInsert = "INSERT into categorias(nombre, image) VALUES ('$nombreCategoria', '$newImagenCat')";
    mysqli_query($conection, $queryInsert);

    $nombreNoti = "Mrkados agrego una nueva categoria llamada ".$nombreCategoria;
    /**
     * 
     * Se buscan todos los usuarios para crear una notificacion personalizada
     * 
     */
    $queryUsuario = "SELECT * FROM usuarios;";
    $UsuarioNot = mysqli_query($conection, $queryUsuario);
    while ($rowUsuarioNot = mysqli_fetch_assoc($UsuarioNot)) 
    {
        $usuarioIdNot = $rowUsuarioNot['id'];
        $queryInsertNotUsu = "INSERT into notificaciones_tienda(id_usuario, id_tienda, id_user_tienda, nombre, chequeo, fecha) VALUES ('$usuarioIdNot', '0', '0', '$nombreNoti','0', '$now')";
        mysqli_query($conection, $queryInsertNotUsu);
    }    
    
    /**
     * 
     * Se buscan todos las tiendas para crear una notificacion personalizada
     * 
     */

    $queryTiendas = "SELECT * FROM tiendas;";
    $tiendasNot = mysqli_query($conection, $queryTiendas);
    while ($rowTiendasNot = mysqli_fetch_assoc($tiendasNot)) 
    {
        $idTie = $rowTiendasNot['id_usuario'];

        $usususu = "SELECT * FROM usuarios where correo = '$idTie';";
        $resultUsusus = mysqli_query($conection, $usususu);

        while ($rowUsusu = mysqli_fetch_assoc($resultUsusus)) 
        {
            $ususuId = $rowUsusu['id'];

            $rowTiendasNo = $rowTiendasNot['id'];
            $queryInsertNotTi = "INSERT into notificaciones_tienda(id_usuario, id_tienda, id_user_tienda, nombre, chequeo, fecha) VALUES ('0', '$rowTiendasNo', '$ususuId', '$nombreNoti','0', '$now')";
            mysqli_query($conection, $queryInsertNotTi);

        }   
    }    
  
    header("Location: moduloDetalle.php?correo=$user&key=$key&result=added");
}

/**
 * 
 * Agregar nueva SubCategoria
 * 
 */
if(isset($_POST["nombreSubCategoria"]))
{
    $nombreCategoria = $_POST["nombreSubCategoria"];
    $tipo_cat = $_POST["tipoSubCatAdd"];

    $date = new DateTime();  
    $date->setTimezone(new DateTimeZone('America/Mexico_City'));
    $now = date_format($date,"y/m/d H:i:s");
    $now2 = date_format($date,"dmyHis");

    $newImagenCat = $_FILES['imgSubCategoria']['name'];
    $newImagenCat = $now2."".$newImagenCat;
    $directorioCat ="../images/categorias";
    $catP = $_POST["tipoSubCatPAdd"];;

    $guardado = $_FILES['imgSubCategoria']['tmp_name'];
    
    if(file_exists($directorioCat))
    {
        move_uploaded_file($guardado, $directorioCat."/".$newImagenCat);
    }
    
    $queryInsert = "INSERT into subcategoria(subcat, id_categoria, image, categoria) VALUES ('$nombreCategoria', '$tipo_cat', '$newImagenCat', '$catP')";
    mysqli_query($conection, $queryInsert);

    $nombreNoti = "Mrkados agrego una nueva categoria llamada ".$nombreCategoria;
    /**
     * 
     * Se buscan todos los usuarios para crear una notificacion personalizada
     * 
     */
    $queryUsuario = "SELECT * FROM usuarios;";
    $UsuarioNot = mysqli_query($conection, $queryUsuario);
    while ($rowUsuarioNot = mysqli_fetch_assoc($UsuarioNot)) 
    {
        $usuarioIdNot = $rowUsuarioNot['id'];
        $queryInsertNotUsu = "INSERT into notificaciones_tienda(id_usuario, id_tienda, id_user_tienda, nombre, chequeo, fecha) VALUES ('$usuarioIdNot', '0', '0', '$nombreNoti','0', '$now')";
        mysqli_query($conection, $queryInsertNotUsu);
    }    
    
    /**
     * 
     * Se buscan todos las tiendas para crear una notificacion personalizada
     * 
     */

    $queryTiendas = "SELECT * FROM tiendas;";
    $tiendasNot = mysqli_query($conection, $queryTiendas);
    while ($rowTiendasNot = mysqli_fetch_assoc($tiendasNot)) 
    {
        $idTie = $rowTiendasNot['id_usuario'];

        $usususu = "SELECT * FROM usuarios where correo = '$idTie';";
        $resultUsusus = mysqli_query($conection, $usususu);

        while ($rowUsusu = mysqli_fetch_assoc($resultUsusus)) 
        {
            $ususuId = $rowUsusu['id'];

            $rowTiendasNo = $rowTiendasNot['id'];
            $queryInsertNotTi = "INSERT into notificaciones_tienda(id_usuario, id_tienda, id_user_tienda, nombre, chequeo, fecha) VALUES ('0', '$rowTiendasNo', '$ususuId', '$nombreNoti','0', '$now')";
            mysqli_query($conection, $queryInsertNotTi);

        }   
    }    
  
    header("Location: moduloDetalle.php?correo=$user&key=$key&result=added");
}

/**
 * 
 * Agregar nuevo Usuario
 * 
 */
if(isset($_POST["usuarioNombre"]))
{
        // se toma la hora del sistema
    $date = new DateTime();  
    $date->setTimezone(new DateTimeZone('America/Mexico_City'));
    $now = date_format($date,"d/m/y H:i:s");

    $nombreUsuario = $_POST["usuarioNombre"];
    $usuarioApellido = $_POST["usuarioApellido"];
    $usuarioFecha = $_POST["usuarioFecha"];
    $usuarioTelefono = $_POST["usuarioTelefono"];
    $usuarioMail = $_POST["usuarioMail"];
    $usuarioPassword = $_POST["usuarioPassword"];
    $usuarioTipo = $_POST["usuarioTipo"];
    $fechaRegistro = $now;

    $queryInsert = "INSERT into usuarios(nombre, apellidos, cumpleanos, telefono, correo, contrasena, fechaRegistro, tipo_usuario) VALUES ('$nombreUsuario', '$usuarioApellido', '$usuarioFecha', '$usuarioTelefono', '$usuarioMail', '$usuarioPassword','$fechaRegistro', '$usuarioTipo')";
    mysqli_query($conection, $queryInsert);

    header("Location: moduloDetalle.php?correo=$user&key=$key&result=added");
}

/**
 * 
 * Este metodo inserta en la bd un nuevo slider para la pagina principal
 * 
 */
if(isset($_POST["text1"]))
{
    // se toma la hora del sistema
    $date = new DateTime();  
    $date->setTimezone(new DateTimeZone('America/Mexico_City'));
    $now = date_format($date,"d/m/y H:i:s");
    $now2 = date_format($date,"dmyHis");

    $text1 = $_POST["text1"];
    $text2 = $_POST["text2"];
    $nombre = $_FILES['imagenSlide']['name'];
    $nombreNew = $now2."".$nombre;

    $directorio ="../images/slider";

    $guardado = $_FILES['imagenSlide']['tmp_name'];
 
    if(file_exists($directorio))
    {
        move_uploaded_file($guardado, $directorio."/".$nombreNew);
    }

    $queryInsert = "INSERT into slider(image, text1, text2, fechaRegistro, activate) VALUES ('$nombreNew', '$text1', '$text2', '$now', '0')";

    mysqli_query($conection, $queryInsert);
    header("Location: moduloDetalle.php?correo=$user&key=$key&result=added");

}

/**
 * 
 * Este metodo inserta en la bd un nuevo foto para la pagina registro tienda
 * 
 */
if(isset($_POST["text1RegistroTienda"]))
{
    // se toma la hora del sistema
    $date = new DateTime();  
    $date->setTimezone(new DateTimeZone('America/Mexico_City'));
    $now = date_format($date,"d/m/y H:i:s");
    $now2 = date_format($date,"dmyHis");

    $text1 = $_POST["text1RegistroTienda"];
    $text2 = $_POST["text2RegistroTienda"];
    $nombre = $_FILES['imagenSlideRegistroTienda']['name'];
    $nombreNew = $now2."".$nombre;
    $directorio ="../images/imagenRegistroTienda";

    $guardado = $_FILES['imagenSlideRegistroTienda']['tmp_name'];
 
    if(file_exists($directorio))
    {
        move_uploaded_file($guardado, $directorio."/".$nombreNew);
    }

    $queryInsert = "INSERT into sliderregistrotienda(image, text1, text2, fechaRegistro, activate) VALUES ('$nombreNew', '$text1', '$text2', '$now', '0')";
    mysqli_query($conection, $queryInsert);
    header("Location: moduloDetalle.php?correo=$user&key=photoRegistroTienda&result=added");

}

/**
 * 
 * Este metodo inserta en la bd un nuevo foto para la pagina registro cliente
 * 
 */
if(isset($_POST["text1RegistroCliente"]))
{
    // se toma la hora del sistema
    $date = new DateTime();  
    $date->setTimezone(new DateTimeZone('America/Mexico_City'));
    $now = date_format($date,"d/m/y H:i:s");
    $now2 = date_format($date,"dmyHis");

    $text1 = $_POST["text1RegistroCliente"];
    $text2 = $_POST["text2RegistroCliente"];
    $nombre = $_FILES['imagenSlideRegistroCliente']['name'];
    $nombreNew = $now2."".$nombre;
    $directorio ="../images/imagenRegistroCliente";

    $guardado = $_FILES['imagenSlideRegistroCliente']['tmp_name'];
 
    if(file_exists($directorio))
    {
        move_uploaded_file($guardado, $directorio."/".$nombreNew);
    }

    $queryInsert = "INSERT into sliderregistrocliente(image, text1, text2, fechaRegistro, activate) VALUES ('$nombreNew', '$text1', '$text2', '$now', '0')";
    mysqli_query($conection, $queryInsert);
    header("Location: moduloDetalle.php?correo=$user&key=photoRegistroCliente&result=added");

}

/**
 * 
 * Este metodo inserta en la bd el nuevo estado
 * 
 */
if(isset($_POST["estadoNombre"]))
{
    $nombreEstado = $_POST["estadoNombre"];

    $queryInsert = "INSERT into estado(nombre) VALUES ('$nombreEstado')";
    mysqli_query($conection, $queryInsert);
    header("Location: moduloDetalle.php?correo=$user&key=estados&result=added");
}

/**
 * 
 * Este metodo inserta en la bd la nuevo Ciudad
 * 
 */
if(isset($_POST["ciudadNombre"]))
{
    $nombreCiudad = $_POST["ciudadNombre"];

    $queryInsert = "INSERT into ciudad(nombre) VALUES ('$nombreCiudad')";
    mysqli_query($conection, $queryInsert);
    header("Location: moduloDetalle.php?correo=$user&key=ciudades&result=added");
}

/**
 * 
 * Este metodo inserta en la bd la nuevo colonia
 * 
 */
if(isset($_POST["coloniaNombre"]))
{
    $nombreColonia = $_POST["coloniaNombre"];
    $IDestadoColonia = $_POST["estadoColonia"];
    $IDciudadColonia = $_POST["ciudadColonia"];


    $queryInsert = "INSERT into colonia(nombre) VALUES ('$nombreColonia')";
    mysqli_query($conection, $queryInsert);

    $coloniaId = mysqli_insert_id($conection);

    $queryInsert = "INSERT into relacion_ubicacion(id_estado, id_ciudad, id_colonia) VALUES ('$IDestadoColonia', '$IDciudadColonia', '$coloniaId')";
    mysqli_query($conection, $queryInsert);

    header("Location: moduloDetalle.php?correo=$user&key=colonias&result=added");
}

/**
 * 
 * Se recibe el valor del id del slider que se va a actualizar
 * 
 */
if(isset($_POST["idSlideEdit"]))
{
    // se toma la hora del sistema
    $date = new DateTime();  
    $date->setTimezone(new DateTimeZone('America/Mexico_City'));
    $now = date_format($date,"d/m/y H/i/s");
    $now2 = date_format($date,"dmyHis");


    $idSlideEdit = $_POST["idSlideEdit"];
    $text1Update = $_POST["text1Edit"];
    $text2Update = $_POST["text2Edit"];
    $nombre = $_FILES['imageSliderEdit']['name'];
    $nombreNew = $now2."".$nombre;

    $directorio ="../images/slider";

    $guardado = $_FILES['imageSliderEdit']['tmp_name'];
 
    if(file_exists($directorio))
    {
        move_uploaded_file($guardado, $directorio."/".$nombreNew);
    }

    $queryUpdate = "UPDATE slider SET image = '$nombreNew', text1 = '$text1Update', text2 = '$text2Update', fechaRegistro = '$now', activate = '0' WHERE id = '$idSlideEdit'";

    mysqli_query($conection, $queryUpdate);
    header("Location: moduloDetalle.php?correo=$user&key=sliderIndex&result=edited");
}
else
{
    $catIdUpdate = "";
}

/**
 * 
 * Se recibe el valor del id de la foto de registro mercado que se va a actualizar
 * 
 */
if(isset($_POST["idFotoRegistroMercado"]))
{
    // se toma la hora del sistema
    $date = new DateTime();  
    $date->setTimezone(new DateTimeZone('America/Mexico_City'));
    $now = date_format($date,"d/m/y H/i/s");
    $now2 = date_format($date,"dmyHis");


    $idSlideEdit = $_POST["idFotoRegistroMercado"];
    $text1Update = $_POST["text1EditFotoRegistroTienda"];
    $text2Update = $_POST["text2EditFotoRegistroTienda"];
    $nombre = $_FILES['imageEditFotoRegistroTienda']['name'];
    $nombreNew = $now2."".$nombre;

    $directorio ="../images/imagenRegistroTienda";

    $guardado = $_FILES['imageEditFotoRegistroTienda']['tmp_name'];
 
    if(file_exists($directorio))
    {
        move_uploaded_file($guardado, $directorio."/".$nombreNew);
    }

    $queryUpdate = "UPDATE sliderregistrotienda SET image = '$nombreNew', text1 = '$text1Update', text2 = '$text2Update', fechaRegistro = '$now', activate = '0' WHERE id = '$idSlideEdit'";

    mysqli_query($conection, $queryUpdate);
    header("Location: moduloDetalle.php?correo=$user&key=photoRegistroTienda&result=edited");
}
else
{
    $catIdUpdate = "";
}

/**
 * 
 * Se recibe el valor del id de la foto de registro Cliente que se va a actualizar
 * 
 */
if(isset($_POST["idFotoRegistroCliente"]))
{
    // se toma la hora del sistema
    $date = new DateTime();  
    $date->setTimezone(new DateTimeZone('America/Mexico_City'));
    $now = date_format($date,"d/m/y H/i/s");
    $now2 = date_format($date,"dmyHis");


    $idSlideEdit = $_POST["idFotoRegistroCliente"];
    $text1Update = $_POST["text1EditFotoRegistroCliente"];
    $text2Update = $_POST["text2EditFotoRegistroCliente"];
    $nombre = $_FILES['imageEditFotoRegistroCliente']['name'];
    $nombreNew = $now2."".$nombre;

    $directorio ="../images/imagenRegistroCliente";

    $guardado = $_FILES['imageEditFotoRegistroCliente']['tmp_name'];
 
    if(file_exists($directorio))
    {
        move_uploaded_file($guardado, $directorio."/".$nombreNew);
    }

    $queryUpdate = "UPDATE sliderregistrocliente SET image = '$nombreNew', text1 = '$text1Update', text2 = '$text2Update', fechaRegistro = '$now', activate = '0' WHERE id = '$idSlideEdit'";

    mysqli_query($conection, $queryUpdate);
    header("Location: moduloDetalle.php?correo=$user&key=photoRegistroCliente&result=edited");
}
else
{
    $catIdUpdate = "";
}

/**
 * 
 * Se recibe el valor del id del estado que se va a actualizar
 * 
 */
if(isset($_POST["nombreEstadoUpdate"]))
{
    $idEstadoUpdate = $_POST["EstadoUpdateid"];
    $nombreEstadoUpdate = $_POST["nombreEstadoUpdate"];

    $queryUpdate = "UPDATE estado SET nombre = '$nombreEstadoUpdate' WHERE id = '$idEstadoUpdate'";

    mysqli_query($conection, $queryUpdate);
    header("Location: moduloDetalle.php?correo=$user&key=estados&result=edited");
}
else
{
    $catIdUpdate = "";
}

/**
 * 
 * Se recibe el valor del id de la suscripcion que se va a actualizar
 * 
 */
if(isset($_POST["statusSusEdit"]))
{
    $id_tienda = $_POST["susTiIdEdit"];
    $idSusUpdate = $_POST["susIdEdit"];
    $nombrePlan = $_POST["planSusEdit"];
    $precio = $_POST["precioSusEdit"];
    $desde = $_POST["desdeSusEdit"];
    $desdeArray = explode("-", $desde);
    $test = substr($desdeArray[0], 2);
    $desdeValue = $test[0].$test[1]."/".$desdeArray[1]."/".$desdeArray[2];
    $hasta = $_POST["hastaSusEdit"];
    $hastaArray = explode("-", $hasta);
    $test2 = substr($hastaArray[0], 2);
    $hastaValue = $test2[0].$test2[1]."/".$hastaArray[1]."/".$hastaArray[2];
    $status = $_POST["statusSusEdit"];

    $queryUpdate = "UPDATE suscripciones_rel SET id_tienda = '$id_tienda', plan = '$nombrePlan', precio = '$precio', desde = '$desdeValue', hasta = '$hastaValue', active = '$status' WHERE id = '$idSusUpdate'";
    mysqli_query($conection, $queryUpdate);

    if($status == 1)
    {
        $queryUpdate2 = "UPDATE tiendas SET subscription = '$nombrePlan' WHERE id = '$id_tienda'";
        mysqli_query($conection, $queryUpdate2);

        // ENVIAR CORREO AL USUARIO NOTIFICANDO LA ACTIVACION ?
    }
    else if($status == 2)
    {
        $queryUpdate2 = "UPDATE tiendas SET subscription = '$nombrePlan PAGO PENDIENTE' WHERE id = '$id_tienda'";
        mysqli_query($conection, $queryUpdate2);

        // ENVIAR CORREO AL USUARIO NOTIFICANDO LA PUESTA EN PENDIENTE ?
    }
    else{
        $queryUpdate2 = "UPDATE tiendas SET subscription = 'MrKadito' WHERE id = '$id_tienda'";
        mysqli_query($conection, $queryUpdate2);

        // ENVIAR CORREO AL USUARIO NOTIFICANDO LA desactivacion ?
    }

    header("Location: moduloDetalle.php?correo=$user&key=Suscripciones&result=edited");
}
else
{
    $catIdUpdate = "";
}

/**
 * 
 * Agregar nuevo Plan
 * 
 */
if(isset($_POST["nombrePlan"]))
{
    $name = $_POST["nombrePlan"];
    $precio = $_POST["precioMensualPlan"];
    $precioA = $_POST["precioAnualPlan"];

    $queryInsert = "INSERT into tipos_subscription(name, precio, precio_anual) VALUES ('$name','$precio', '$precioA')";
    mysqli_query($conection, $queryInsert);

    header("Location: moduloDetalle.php?correo=$user&key=Precios&result=added");
}

/**
 * 
 * Agregar nueva suscripcion
 * 
 */
if(isset($_POST["tiendaAddSus"]))
{
    $tienda = $_POST["tiendaAddSus"];
    $query_user = "SELECT * FROM tiendas where id = $tienda";
    $result_user = mysqli_query($conection,$query_user);

    $id_user = "";
    $correo = "";

    while ($rowU = mysqli_fetch_assoc($result_user)) 
    {
        $correo = $rowU['id_usuario'];
    } 

    $aaaa = "SELECT * FROM usuarios where correo = '$correo'";
    $result_aaa = mysqli_query($conection, $aaaa);

    while ($rowU2 = mysqli_fetch_assoc($result_aaa)) 
    {
        $id_user = $rowU2['id'];
    }

    $plan = $_POST["planAddUsu"];
    $precio = $_POST["precioAddUsu"];
    $desde = $_POST["desdeAddUsu"];
    $desdeArray = explode("-", $desde);
    $test = substr($desdeArray[0], 2);
    $desdeValue = $test[0].$test[1]."/".$desdeArray[1]."/".$desdeArray[2];
    $hasta = $_POST["hastaAddUsu"];
    $hastaArray = explode("-", $hasta);
    $test2 = substr($hastaArray[0], 2);
    $hastaValue = $test2[0].$test2[1]."/".$hastaArray[1]."/".$hastaArray[2];
    $active = "1";

    $queryInsert = "INSERT into suscripciones_rel(id_tienda, id_user, plan, precio, desde, hasta, active) VALUES ('$tienda','$id_user', '$plan', '$precio', '$desdeValue', '$hastaValue', '$active')";
    mysqli_query($conection, $queryInsert);

    $queryUpdate2 = "UPDATE tiendas SET subscription = '$plan' WHERE id = '$tienda'";
    mysqli_query($conection, $queryUpdate2);

    header("Location: moduloDetalle.php?correo=$user&key=Suscripciones&result=added");
}

/**
 * 
 * Se recibe el valor del id del plan que se va a actualizar
 * 
 */
if(isset($_POST["idEditarPlan"]))
{
    $idEstadoUpdate = $_POST["idEditarPlan"];
    $nombreEstadoUpdate = $_POST["editarPlanName"];
    $editarPlanPrecio = $_POST["editarPlanPrecio"];
    $editarPlanPrecioAnual = $_POST["editarPlanPrecioAnual"];

    $queryUpdate = "UPDATE tipos_subscription SET name = '$nombreEstadoUpdate', precio = '$editarPlanPrecio', precio_anual='$editarPlanPrecioAnual' WHERE id = '$idEstadoUpdate'";

    mysqli_query($conection, $queryUpdate);
    header("Location: moduloDetalle.php?correo=$user&key=Precios&result=edited");
}

/**
 * 
 * Se recibe el valor del id del ciudad que se va a actualizar
 * 
 */
if(isset($_POST["nombreCiudadUpdate"]))
{
    $idEstadoUpdate = $_POST["CiudadUpdateid"];
    $nombreEstadoUpdate = $_POST["nombreCiudadUpdate"];

    $queryUpdate = "UPDATE ciudad SET nombre = '$nombreEstadoUpdate' WHERE id = '$idEstadoUpdate'";

    mysqli_query($conection, $queryUpdate);
    header("Location: moduloDetalle.php?correo=$user&key=ciudades&result=edited");
}
else
{
    $catIdUpdate = "";
}

/**
 * 
 * Se recibe el valor del id del colonia que se va a actualizar
 * 
 */
if(isset($_POST["nombreColoniaUpdate"]))
{
    $idcoloniaUpdate = $_POST["ColoniaUpdateid"];
    $nombreColoniaUpdate = $_POST["nombreColoniaUpdate"];
    $idNewEstado = $_POST["estadoColoniaUpdate"];
    $idNewCiudad = $_POST["ciudadColoniaUpdate"];

    $queryUpdate = "UPDATE colonia SET nombre = '$nombreColoniaUpdate' WHERE id = '$idcoloniaUpdate'";
    mysqli_query($conection, $queryUpdate);

    $queryUpdate2 = "UPDATE relacion_ubicacion SET id_estado = '$idNewEstado', id_ciudad = '$idNewCiudad' WHERE id_colonia = '$idcoloniaUpdate'";
    mysqli_query($conection, $queryUpdate2);

    header("Location: moduloDetalle.php?correo=$user&key=colonias&result=edited");
}
else
{
    $catIdUpdate = "";
}

$id_sus = '';
if(isset($_GET["sus"]))
{
    $id_sus = $_GET["sus"];
}


require_once('Page.class.php');

Page::header_menu_detail($user); //Se llama al metodo que contiene el header de la pagina

if($key == "categorias")
{
    Page::moduloCategoria($conection, $result, $idCat, $user);
}

if($key == "subcategorias")
{
    Page::moduloSubCategoria($conection, $result, $idCat, $user);
}

if($key == "MenuCategorias")
{
    Page::menuCategoria($conection, $result, $idCat, $user);
}

if($key == "usuarios")
{
    Page::moduloUsuario($conection, $result, $user, $idUserEdit);
}

if($key == "tiendas")
{
    Page::moduloTiendas($conection, $user);
}

if($key == "sliderIndex")
{
    Page::moduloSliderIndex($conection, $user, $result, $idSliderIndex);
}

if($key == "photoRegistroTienda")
{
    Page::moduloPhotoRegistroTienda($conection, $user, $result, $idFotoRegistroMercado);
}

if($key == "photoRegistroCliente")
{
    Page::moduloPhotoRegistroCliente($conection, $user, $result, $idFotoRegistroCliente);
}

if($key == "estados")
{
    Page::moduloEstados($conection, $user, $result, $estadosID);
}

if($key == "ciudades")
{
    Page::moduloCiudades($conection, $user, $result, $ciudadID);
}

if($key == "colonias")
{
    Page::moduloColonias($conection, $user, $result, $coloniaID);
}

if($key == "Suscripciones")
{
    Page::moduloSuscripciones($conection, $user, $result, $id_sus, $filter, $order);
}

if($key == "formulario")
{
    Page::moduloFormulario($conection, $user, $id_sus);
}

if($key == "Precios")
{
    Page::moduloPrecio($conection, $user, $result);
}

?>