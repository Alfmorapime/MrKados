<?php
if(isset($_GET["correo"]))
{
    $user = $_GET["correo"];
}
else
{
    $user = "";
}

if(isset($_GET["type"]))
{
    $usuarioTipo = $_GET["type"];
}
else
{
    $usuarioTipo = "";
}

if(isset($_GET["fcat"]))
{
    $filtroCat = utf8_decode($_GET["fcat"]);
    $filtroCat2 = $_GET["fcat"];
}
else
{
    $filtroCat = "";
}

if(isset($_GET["fen"]))
{
    $filtroEnv = $_GET["fen"];
}
else
{
    $filtroEnv = "";
}

if(isset($_GET["fpan"]))
{
    $filtroPag = $_GET["fpan"];
}
else
{
    $filtroPag = "";
}

if(isset($_GET["orden"]))
{
    $orden = $_GET["orden"];
}
else
{
    $orden = "";
}

include 'email_solicitudColonia.php';

if(isset($_POST["enviado"]))
{
    if(isset($_POST["filtroEnv"]))
    { 
        if($filtroEnv=="")
        {
            $filtroE = $_POST["filtroEnv"];
            $filtroEnv = $filtroE;
        }
        else
        {
            $filtroEnv = $_POST["filtroEnv"];
        }
    }

    if(isset($_POST["filtroPago"]))
    {
        if($filtroPag=="")
        {
            $filtroP = $_POST["filtroPago"];
            $filtroPag = $filtroP;
        }
        else
        {
            $filtroPag = $_POST["filtroPago"];
        }
    }

    header("Location: tiendasBusquedaCategorias_filtro.php?correo=$user&type=$usuarioTipo&fen=$filtroEnv&fpan=$filtroPag&fcat=$filtroCat2");
}

if(isset($_POST["limpiar"]))
{
    header("Location: tiendasBusquedaCategorias.php?correo=$user&type=$usuarioTipo&fen=&fcat=$filtroCat2&fpan=");
}


require_once('Page.class.php');

$conection = include 'conection.php';

$numberOfTIendas = 0;

if($filtroEnv != "" && $filtroPag != "")
{
    $query_Cate = "SELECT * FROM subcategoria WHERE subcat = '$filtroCat'";
    $result_cate = mysqli_query($conection,$query_Cate);
    while ($row_cat = mysqli_fetch_assoc($result_cate)) 
    {
        $id_cat = $row_cat['id'];
        $query_rel = "SELECT * FROM rel_tienda_subcategoria WHERE id_subcategoria = '$id_cat'";
        $result_rel = mysqli_query($conection,$query_rel);
    
        while ($row_rel = mysqli_fetch_assoc($result_rel)) 
        {
            $id_tienda = $row_rel['id_tienda'];
            $query_tiendas = "SELECT * FROM tiendas WHERE id = '$id_tienda' AND metodoPago LIKE '%$filtroPag%' AND tiposEntrega LIKE '%$filtroEnv%'";
            $result_tiendas = mysqli_query($conection,$query_tiendas);

            while ($row = mysqli_fetch_assoc($result_tiendas)) 
            {
              //Contador aqui
              $numberOfTIendas = $numberOfTIendas + 1;
            } 
        }
    }
} // FIn if con 2 filtros
else  if($filtroPag != "")
{
    $query_Cate = "SELECT * FROM subcategoria WHERE subcat = '$filtroCat'";
    $result_cate = mysqli_query($conection,$query_Cate);
    while ($row_cat = mysqli_fetch_assoc($result_cate)) 
    {
        $id_cat = $row_cat['id'];
        $query_rel = "SELECT * FROM rel_tienda_subcategoria WHERE id_subcategoria = '$id_cat'";
        $result_rel = mysqli_query($conection,$query_rel);
    
        while ($row_rel = mysqli_fetch_assoc($result_rel)) 
        {
            $id_tienda = $row_rel['id_tienda'];
            $query_tiendas = "SELECT * FROM tiendas WHERE id = '$id_tienda' AND metodoPago LIKE '%$filtroPag%'";
            $result_tiendas = mysqli_query($conection,$query_tiendas);

            while ($row = mysqli_fetch_assoc($result_tiendas)) 
            {
              //Contador aqui
              $numberOfTIendas = $numberOfTIendas + 1;
            } 
        }
    }
} // FIn if con 1 filtros pago
else  if($filtroEnv != "")
{
    $query_Cate = "SELECT * FROM subcategoria WHERE subcat = '$filtroCat'";
    $result_cate = mysqli_query($conection,$query_Cate);
    while ($row_cat = mysqli_fetch_assoc($result_cate)) 
    {
        $id_cat = $row_cat['id'];
        $query_rel = "SELECT * FROM rel_tienda_subcategoria WHERE id_subcategoria = '$id_cat'";
        $result_rel = mysqli_query($conection,$query_rel);
    
        while ($row_rel = mysqli_fetch_assoc($result_rel)) 
        {
            $id_tienda = $row_rel['id_tienda'];
            $query_tiendas = "SELECT * FROM tiendas WHERE id = '$id_tienda' AND tiposEntrega LIKE '%$filtroEnv%'";
            $result_tiendas = mysqli_query($conection,$query_tiendas);

            while ($row = mysqli_fetch_assoc($result_tiendas)) 
            {
              //Contador aqui
              $numberOfTIendas = $numberOfTIendas + 1;
            } 
        }
    }
} // FIn if con 1 envio 


//---- FIN llamada a la BD para traer SLider pricipal --------------------------

//Structuracion de la pagina.
//Page::setTitle($title); //Se llama al metodo que setea el titulo
Page::header($user,$usuarioTipo); //Se llama al metodo que contiene el header de la pagina
Page::contador_resultadoCategoria($numberOfTIendas, $filtroCat2); // Banner que contiene los 3 pasos a seguir
Page::topMenu_fc_cat($user, $usuarioTipo, $filtroEnv, $filtroPag);
Page::negocios_result_fc_cat($conection, $user, $usuarioTipo, $filtroCat, $filtroEnv, $filtroPag, $orden, $numberOfTIendas);
//Page::tiendas_nuevas_banner(); // Banner que contiene las ultimas tienditas
if ($user == "")
{
    Page::registrate_banner(); // Banner con los tipos de registro
}

Page::footer($user, $usuarioTipo); // Banner que contiene el pie de la pagina.

?>