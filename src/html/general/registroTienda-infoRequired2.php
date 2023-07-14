<?php

if(isset($_GET["id"]))
{
    $id_tienda = $_GET["id"];
}
else
{
    $id_tienda = "";
}

//Se preparan todos los datos para ingresr a BD 
if (isset($_POST["description"]))
{
    $date = new DateTime();  
    $date->setTimezone(new DateTimeZone('America/Mexico_City'));
    $now = date_format($date,"d/m/y H:i:s");
    $now2 = date_format($date,"dmyHis");

    //Assemble tiendas
    $descripcion = $_POST["description"];
    $nombrePersona = $_POST["nombrePersona"];
    $apellidoPersona = $_POST["nombrePersona2"];

    $logo = $_FILES['logoEmpresa']['name'];
    $logoCompleto = $now2."".$logo;
    $directorioLogo ="../../../images/Logos";

    $guardadoLogo = $_FILES['logoEmpresa']['tmp_name'];
 
    if(file_exists($directorioLogo))
    {
        move_uploaded_file($guardadoLogo, $directorioLogo."/".$logoCompleto);
    }

    $paginaWeb = $_POST["paginaweb"];
    //$redSocial = $_POST["redSocialNombre"];

    if($_FILES['catalogo']['name'] != "")
    {
        $catalogoNombre = $_FILES['catalogo']['name'];
        $catalogoCompleto = $now2."".$catalogoNombre;
        $directorioCatalogo ="../../../images/catalogos";

        $guardadoCatalogo = $_FILES['catalogo']['tmp_name'];
 
        if(file_exists($directorioCatalogo))
        {
            move_uploaded_file($guardadoCatalogo, $directorioCatalogo."/".$catalogoCompleto);
        }
    }
    else
    {
        $catalogoCompleto = "";
    }

    $redSocial1="";
    $redSocial2="";
    $redSocial3="";
    $redSocial4="";
    $redSocial5="";
    $redSocial6="";

    if(!isset($_POST["redsocial1"]))
    {
        $redSocial1 = "";
    }
    else
    {
        $redSocial1 = $_POST['redsocial1'].",".$_POST['redSocialNombre1'];
    }

    if(!isset($_POST["redsocial2"]))
    {
        $redSocial2 = "";
    }
    else
    {
        $redSocial2 = $_POST['redsocial2'].",".$_POST['redSocialNombre2'];;
    }

    if(!isset($_POST["redsocial3"]))
    {
        $redSocial3 = "";
    }
    else
    {
        $redSocial3 = $_POST['redsocial3'].",".$_POST['redSocialNombre3'];;
    }

    if(!isset($_POST["redsocial4"]))
    {
        $redSocial4 = "";
    }
    else
    {
        $redSocial4 = $_POST['redsocial4'].",".$_POST['redSocialNombre4'];;
    }

    if(!isset($_POST["redsocial5"]))
    {
        $redSocial5 = "";
    }
    else
    {
        $redSocial5 = $_POST['redsocial5'].",".$_POST['redSocialNombre5'];;
    }

    if(!isset($_POST["redsocial6"]))
    {
        $redSocial6 = "";
    }
    else
    {
        $redSocial6 = $_POST['redsocial6'].",".$_POST['redSocialNombre6'];;
    }

    $allRedes = $redSocial1.",".$redSocial2.",".$redSocial3.",".$redSocial4.",".$redSocial5.",".$redSocial6;


    mysqli_query($conection,"UPDATE tiendas 
    SET descripcion = '$descripcion', nombrePersona = '$nombrePersona', apellidoPersona = '$apellidoPersona', 
    logo = '$logoCompleto', catalogo = '$catalogoCompleto', paginaWeb = '$paginaWeb', redSocial = '$allRedes'
    WHERE id = $id_tienda");

    header("Location:  index.php?user=$correo&type=$usuarioTipo&id=$id_tienda&op=registroTienda3");
}  

?>