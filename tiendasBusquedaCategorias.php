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

if(isset($_GET["fap"]))
{
    $filtroPag = $_GET["fap"];
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

require_once('Page.class.php');
$conection = include 'conection.php';
include 'email_solicitudColonia.php';

$numberOfTIendas = 0;

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
        $numberOfTIendas = $numberOfTIendas + 1;
    }
}

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

$filtroActive = "NO";

if(isset($_POST["limpiar"]))
{
    $cat = $_POST['cat'];
    header("Location: tiendasBusquedaCategorias.php?correo=$user&type=$usuarioTipo&fen=&fcat=$filtroCat&fpan=");
}

//---- FIN llamada a la BD para traer SLider pricipal --------------------------

//Structuracion de la pagina.
//Page::setTitle($title); //Se llama al metodo que setea el titulo
Page::header($user,$usuarioTipo); //Se llama al metodo que contiene el header de la pagina

Page::contador_resultadoCategoria($numberOfTIendas, $filtroCat2); // Banner que contiene los 3 pasos a seguir
//Page::topMenu_Categorias($user, $usuarioTipo, $filtroCat);
Page::negocios_result_Categoria($conection, $user, $usuarioTipo, $orden, $filtroEnv, $filtroCat2, $filtroPag, $filtroCat);
Page::tiendas_nuevas_banner($user, $usuarioTipo); // Banner que contiene las ultimas tienditas
Page::busqueda_sector_index($conection);
if ($user == "")
{
    Page::registrate_banner(); // Banner con los tipos de registro
}

Page::footer($user, $usuarioTipo); // Banner que contiene el pie de la pagina.

?>