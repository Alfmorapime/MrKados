<?php
require_once('inc/config.inc.php');
require_once("inc/Entities/categorias.class.php");
require_once("inc/Entities/slider.class.php");
require_once("inc/Entities/sliderRegistroTienda.class.php");
require_once("inc/Entities/usuarios.class.php");
require_once("inc/Entities/tiendas.class.php");
require_once('inc/Utilities/PDOService.class.php');
require_once('inc/Utilities/CategoriasDAO.class.php');
require_once('inc/Utilities/sliderDAO.class.php');
require_once('inc/Utilities/sliderRegistroTiendaDAO.class.php');
require_once('inc/Utilities/UsuariosDAO.class.php');
require_once('inc/Utilities/TiendasDAO.class.php');

SliderDAO::initialize();
CategoriasDAO::initialize();
UsuariosDAO::initialize();


$requestData = json_decode(file_get_contents('php://input'));

switch ($_SERVER["REQUEST_METHOD"])   {

    case "POSTUSER":    
        $newUser = new usuariosClass();
        $newUser->setNombre($requestData->nombre);
        $newUser->setApellidos($requestData->apellidos);
        $newUser->setCumpleanos($requestData->cumpleanos);
        $newUser->setTelefono($requestData->telefono);
        $newUser->setCorreo($requestData->correo);
        $newUser->setContrasena($requestData->contrasena);
        $newUser->setFechaRegistro($requestData->fechaRegistro);

        $result = UsuariosDAO::addElement($newUser);

        echo json_encode($result);

    break;

    case "POSTTIENDA":    
        $newTienda = new tiendasClass();
        $newTienda->setNombreTienda($requestData->nombreTienda);
        $newTienda->setGiro($requestData->giro);
        $newTienda->setContrasena($requestData->contrasena);
        $newTienda->setDescription($requestData->description);
        $newTienda->setNombrePersona($requestData->nombrePersona);
        $newTienda->setApellidoPersona($requestData->apellidoPersona);
        $newTienda->setLogo($requestData->logo);
        $newTienda->setCatalogo($requestData->catalogo);
        $newTienda->setPaginaWeb($requestData->paginaWeb);
        $newTienda->setRedSocial($requestData->redSocial);
        $newTienda->setNombrePersonaSucursal($requestData->nombrePersonaSucursal);
        $newTienda->setApellidoPersonaSucursal($requestData->apellidoPersonaSucursal);
        $newTienda->setDireccion($requestData->direccion);
        $newTienda->setCodigoPostal($requestData->codigoPostal);
        $newTienda->setEstado($requestData->estado);
        $newTienda->setCiudad($requestData->ciudad);
        $newTienda->setColonia($requestData->colonia);
        $newTienda->setHorarios($requestData->horarios);
        $newTienda->setMetodoPAgo($requestData->metodoPago);
        $newTienda->setTiposEntrega($requestData->tiposEntrega);
        $newTienda->setCostoEnvio($requestData->costoEnvio);
        $newTienda->setDescripcionEnvio($requestData->descripcionEnvio);
        $newTienda->setTiempoEnvio($requestData->tiempoEnvio);
        $newTienda->setFactura($requestData->factura);
        $newTienda->setCitas($requestData->citas);
        $newTienda->setFotosNegocio($requestData->fotoNegocio);
        $newTienda->setImage1($requestData->image1);
        $newTienda->setImage2($requestData->image2);
        $newTienda->setImage3($requestData->image3);
        $newTienda->setImage4($requestData->image4);
        $newTienda->setImage5($requestData->image5);
        $newTienda->setTelefono($requestData->telefono);
        $newTienda->setCorreo($requestData->correo);
        $newTienda->setLinkFacebook($requestData->linkFacebook);
        $newTienda->setEtiquetas($requestData->etiquetas);

        $result = TiendasDAO::addElement($newTienda);

        echo json_encode($result);

    break;

    case "GETCATEGORIAS":

            $element = CategoriasDAO::getCategorias();
    
            $serializedElements = array();

            foreach ($element as $mv)    {
                $serializedElements[] = $mv->jsonSerialize();
            }

            header('Content-Type: application/json');

            echo json_encode($serializedElements);            
        
    break;

    case "GETSLIDES":

        $element = SliderDAO::getSlides();
        $serializedElements = array();

        foreach ($element as $mv)    {
            $serializedElements[] = $mv->jsonSerialize();
        }
        header('Content-Type: application/json');
        echo json_encode($serializedElements);            
    break;

    case "GETSLIDESREGISTROTIENDA":

        $element = SliderRegistroTiendaDAO::getSlides();
        $serializedElements = array();

        foreach ($element as $mv)    {
            $serializedElements[] = $mv->jsonSerialize();
        }
        header('Content-Type: application/json');
        echo json_encode($serializedElements);            
    break;
}


?>