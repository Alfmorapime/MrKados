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
    $filtroCat = $_GET["fcat"];
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

$estado = $_GET["estado"];
$ciudad = $_GET["ciudad"];
$colonia = $_GET["colonia"];

if(isset($_POST["enviado"]))
{

    if(isset($_POST["filtroCategoria"]))
    {
        $filtroC = $_POST["filtroCategoria"];
        $filtroCat = $filtroC;
       /* else
        {
            $filtroCat = $filtroCat.",".$filtroC;
        } */
    }

    if(isset($_POST["filtroEnv"]))
    { 
        if($filtroEnv=="")
        {
            $filtroE = $_POST["filtroEnv"];
            $filtroEnv = $filtroE;
        }
        else
        {
            /*$filtroEnvio = $filtroEnv;
       
            if(strpos($filtroEnvio, $_POST["filtroEnv"]) !== false)
            {
               //No hace nada
            }
            else
            { */
                $filtroEnv = $_POST["filtroEnv"];
               // $filtroEnv = $filtroE.','.$filtroEnv;
            //}
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
           /* $filtroPago = $filtroPag;
            //$pieces = explode(",", $filtroPago);
       
            if(strpos($filtroPago, $_POST["filtroPago"]) !== false)
            {
               //No hace nada
            }
            else
            { */
                $filtroPag = $_POST["filtroPago"];
               // $filtroPag = $filtroP.','.$filtroPag;
            //}
        }
    }

    header("Location: tiendasBusqueda-fc.php?correo=$user&type=$usuarioTipo&fen=$filtroEnv&fcat=$filtroCat&fpan=$filtroPag&estado=$estado&colonia=$colonia&ciudad=$ciudad");
}

if(isset($_POST["limpiar"]))
{
    header("Location: tiendasBusqueda.php?correo=$user&type=$usuarioTipo&fen=&fcat=&fpan=&estado=$estado&colonia=$colonia&ciudad=$ciudad");
}


require_once('Page.class.php');

$conection = include 'conection.php';

/*$query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND etiquetas LIKE '%$filtroCat%'; ";
$result_tiendas = mysqli_query($conection,$query_tiendas); */
$numberOfTIendas = 0;

if($filtroEnv != "" && $filtroCat != "" && $filtroPag != "")
{
    $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND etiquetas LIKE '%$filtroCat%' AND metodoPago LIKE '%$filtroPag%' AND tiposEntrega LIKE '%$filtroEnv%'";    
  
    if($orden == "")
    {
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "ascName")
    {
        $query_tiendas = $query_tiendas." ". "order by nombreTienda ASC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "descName")
    {
        $query_tiendas = $query_tiendas." ". "order by nombreTienda DESC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "ascCalificacion")
    {
        $query_tiendas = $query_tiendas." ". "order by correo ASC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "descCalificacion")
    {
        $query_tiendas = $query_tiendas." ". "order by correo DESC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else
    {
        //$query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND etiquetas LIKE '%$filtroCat%'; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    

    while ($row = mysqli_fetch_assoc($result_tiendas)) 
    {
      //Contador aqui
      $numberOfTIendas = $numberOfTIendas + 1;
    }  
} // FIn if con 3 filtros
else  if($filtroEnv != "" && $filtroCat != "")
{
    $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND etiquetas LIKE '%$filtroCat%' AND tiposEntrega LIKE '%$filtroEnv%'";    
  
    if($orden == "")
    {
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "ascName")
    {
        $query_tiendas = $query_tiendas." ". "order by nombreTienda ASC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "descName")
    {
        $query_tiendas = $query_tiendas." ". "order by nombreTienda DESC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "ascCalificacion")
    {
        $query_tiendas = $query_tiendas." ". "order by correo ASC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "descCalificacion")
    {
        $query_tiendas = $query_tiendas." ". "order by correo DESC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else
    {
        //$query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND etiquetas LIKE '%$filtroCat%'; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    

    while ($row = mysqli_fetch_assoc($result_tiendas)) 
    {
      //COntador Aqui
      $numberOfTIendas = $numberOfTIendas + 1;
    }  
} // FIn if con 2 filtros
else  if($filtroEnv != "" && $filtroPag != "")
{
    $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND metodoPago LIKE '%$filtroPag%' AND tiposEntrega LIKE '%$filtroEnv%'";    
  
    if($orden == "")
    {
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "ascName")
    {
        $query_tiendas = $query_tiendas." ". "order by nombreTienda ASC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "descName")
    {
        $query_tiendas = $query_tiendas." ". "order by nombreTienda DESC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "ascCalificacion")
    {
        $query_tiendas = $query_tiendas." ". "order by correo ASC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "descCalificacion")
    {
        $query_tiendas = $query_tiendas." ". "order by correo DESC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else
    {
        //$query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND etiquetas LIKE '%$filtroCat%'; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    

    while ($row = mysqli_fetch_assoc($result_tiendas)) 
    {
       //Contador Aqui
       $numberOfTIendas = $numberOfTIendas + 1;
    }  
} // FIn if con 2 filtros pago y envio
else  if($filtroCat != "" && $filtroPag != "")
{
    $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND metodoPago LIKE '%$filtroPag%' AND etiquetas LIKE '%$filtroCat%'";    
  
    if($orden == "")
    {
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "ascName")
    {
        $query_tiendas = $query_tiendas." ". "order by nombreTienda ASC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "descName")
    {
        $query_tiendas = $query_tiendas." ". "order by nombreTienda DESC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "ascCalificacion")
    {
        $query_tiendas = $query_tiendas." ". "order by correo ASC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "descCalificacion")
    {
        $query_tiendas = $query_tiendas." ". "order by correo DESC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else
    {
        //$query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND etiquetas LIKE '%$filtroCat%'; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    

    while ($row = mysqli_fetch_assoc($result_tiendas)) 
    {
       //Contador Aqui
       $numberOfTIendas = $numberOfTIendas + 1;
    }  
} // FIn if con 2 filtros pago y categoria
else  if($filtroCat != "")
{
    $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND etiquetas LIKE '%$filtroCat%'";                              
    if($orden == "")
    {
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "ascName")
    {
        $query_tiendas = $query_tiendas." ". "order by nombreTienda ASC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "descName")
    {
        $query_tiendas = $query_tiendas." ". "order by nombreTienda DESC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "ascCalificacion")
    {
        $query_tiendas = $query_tiendas." ". "order by correo ASC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "descCalificacion")
    {
        $query_tiendas = $query_tiendas." ". "order by correo DESC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else
    {
        //$query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND etiquetas LIKE '%$filtroCat%'; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    

    while ($row = mysqli_fetch_assoc($result_tiendas)) 
    {
       //COntador aqui
       $numberOfTIendas = $numberOfTIendas + 1;
    }  
} // FIn if con 1 filtros categoria
else  if($filtroPag != "")
{
    $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND metodoPago LIKE '%$filtroPag%'";    
  
    if($orden == "")
    {
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "ascName")
    {
        $query_tiendas = $query_tiendas." ". "order by nombreTienda ASC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "descName")
    {
        $query_tiendas = $query_tiendas." ". "order by nombreTienda DESC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "ascCalificacion")
    {
        $query_tiendas = $query_tiendas." ". "order by correo ASC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "descCalificacion")
    {
        $query_tiendas = $query_tiendas." ". "order by correo DESC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else
    {
        //$query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND etiquetas LIKE '%$filtroCat%'; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    

    while ($row = mysqli_fetch_assoc($result_tiendas)) 
    {
       //contador
       $numberOfTIendas = $numberOfTIendas + 1;
    }  
} // FIn if con 1 filtros pago
else  if($filtroEnv != "")
{
    $query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND tiposEntrega LIKE '%$filtroEnv%'";    
  
    if($orden == "")
    {
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "ascName")
    {
        $query_tiendas = $query_tiendas." ". "order by nombreTienda ASC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "descName")
    {
        $query_tiendas = $query_tiendas." ". "order by nombreTienda DESC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "ascCalificacion")
    {
        $query_tiendas = $query_tiendas." ". "order by correo ASC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else if($orden == "descCalificacion")
    {
        $query_tiendas = $query_tiendas." ". "order by correo DESC; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    else
    {
        //$query_tiendas = "SELECT * FROM tiendas WHERE estado = '$estado' AND colonia = '$colonia' AND ciudad = '$ciudad' AND etiquetas LIKE '%$filtroCat%'; ";
        $result_tiendas = mysqli_query($conection,$query_tiendas);
    }
    

    while ($row = mysqli_fetch_assoc($result_tiendas)) 
    {
       //contador aqui
       $numberOfTIendas = $numberOfTIendas + 1;
    }  
} // FIn if con 1 envio 


//---- FIN llamada a la BD para traer SLider pricipal --------------------------

//Structuracion de la pagina.
//Page::setTitle($title); //Se llama al metodo que setea el titulo
Page::header($user,$usuarioTipo); //Se llama al metodo que contiene el header de la pagina
Page::contador_resultado($numberOfTIendas); // Banner que contiene los 3 pasos a seguir
Page::topMenu_fc($user, $usuarioTipo, $estado, $ciudad, $colonia, $filtroCat, $filtroEnv, $filtroPag);
Page::negocios_result_fc($estado, $colonia, $ciudad, $conection, $user, $usuarioTipo, $filtroCat, $filtroEnv, $filtroPag, $orden);
//Page::tiendas_nuevas_banner(); // Banner que contiene las ultimas tienditas
if ($user == "")
{
    Page::registrate_banner(); // Banner con los tipos de registro
}

Page::footer($user, $usuarioTipo); // Banner que contiene el pie de la pagina.

?>