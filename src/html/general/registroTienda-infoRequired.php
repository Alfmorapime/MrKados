<?php

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
    $telefono = $_POST["telefonoT"];
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

   header("Location:  index.php?user=$correo&type=$usuarioTipo&id=$tienda&op=registroTienda2");
}  

?>