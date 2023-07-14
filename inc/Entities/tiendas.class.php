<?php

class tiendasClass {

   /*
        Detalles de la tabla

        `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreTienda` varchar(255) NOT NULL,
  `giro` varchar(255) NOT NULL,
  `contrasena` varchar(155) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `nombrePersona` varchar(50) NOT NULL,
  `apellidoPersona` varchar(50) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `catalogo` varchar(255) NOT NULL,
  `paginaWeb` varchar(100) NOT NULL,
  `redSocial` varchar(255) NOT NULL,
  `nombrePersonaSucursal` varchar(50) NOT NULL,
  `apellidoPersonaSucursal` varchar(50) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `codigoPostal` varchar(50) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `colonia` varchar(20) NOT NULL,
  `horarios` varchar(255) NOT NULL,
  `metodoPago` varchar(255) NOT NULL,
  `tiposEntrega` varchar(255) NOT NULL,
  `costoEnvio` varchar(20) NOT NULL,
  `descripcionEnvio` varchar(255) NOT NULL,
  `tiempoEnvio` varchar(20) NOT NULL,
  `factura` varchar(10) NOT NULL,
  `citas` varchar(10) NOT NULL,
  `fotoNegocio` varchar(255) NOT NULL,
  `imagen1` varchar(255) NOT NULL,
  `imagen2` varchar(255) NOT NULL,
  `imagen3` varchar(255) NOT NULL,
  `imagen4` varchar(255) NOT NULL,
  `imagen5` varchar(255) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `whatsaap` varchar(20) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `linkFacebook` varchar(255) NOT NULL,
  `etiquetas` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
   */

    private $id;
    private $nombreTienda;
    private $giro;
    private $contrasena;
    private $descripcion;
    private $nombrePersona;
    private $apellidoPersona;
    private $logo;
    private $catalogo;
    private $paginaWeb;
    private $redSocial;
    private $nombrePersonaSucursal;
    private $apellidoPersonaSucursal;
    private $direccion;
    private $codigoPostal;
    private $estado;
    private $ciudad;
    private $colonia;
    private $horarios;
    private $metodoPago;
    private $tiposEntrega;
    private $costoEnvio;
    private $descripcionEnvio;
    private $tiempoEnvio;
    private $factura;
    private $citas;
    private $fotoNegocio;
    private $imagen1;
    private $imagen2;
    private $imagen3;
    private $imagen4;
    private $imagen5;
    private $telefono;
    private $whatsaap;
    private $correo;
    private $linkFacebook;
    private $etiquetas;

    //getters
    public function getID(){return $this->id;}

    public function getNombreTienda() : string {
        return $this->getNombreTienda;
    }

    public function getGiro() : string {
        return $this->giro;
    }

    public function getContrasena() : string {
        return $this->contrasena;
    }

    public function getDescription() : string {
        return $this->description;
    }

    public function getNombrePersona() : string {
        return $this->nombrePersona;
    }

    public function getApellidoPersona() : string {
        return $this->apellidoPersona;
    }

    public function getLogo() : string {
        return $this->logo;
    }

    public function getCatalogo() : string {
        return $this->catalogo;
    }

    public function getPaginaWeb() : string {
        return $this->paginaWeb;
    }

    public function getRedSocial() : string {
        return $this->redSocial;
    }

    public function getNombrePersonaSucursal() : string {
        return $this->nombrePersonaSucursal;
    }

    public function getApellidoSucursal() : string {
        return $this->apellidoSucursal;
    }

    public function getDireccion() : string {
        return $this->direccion;
    }

    public function getCodigoPostal() : string {
        return $this->codigoPostal;
    }

    public function getEstado() : string {
        return $this->estado;
    }

    public function getCiudad() : string {
        return $this->ciudad;
    }

    public function getColonia() : string {
        return $this->colonia;
    }

    public function getHorarios() : string {
        return $this->horarios;
    }

    public function getMetodoPago() : string {
        return $this->metodoPago;
    }

    public function getTiposEntrega() : string {
        return $this->tiposEntrega;
    }

    public function getCostoEnvio() : string {
        return $this->costoEnvio;
    }

    public function getDescripcionEnvio() : string {
        return $this->descripcionEnvio;
    }

    public function getTiempoEnvio() : string {
        return $this->tiempoEnvio;
    }

    public function getFactura() : string {
        return $this->factura;
    }

    public function getCitas() : string {
        return $this->citas;
    }

    public function getFotoNegocio() : string {
        return $this->fotoNegocio;
    }

    public function getImage1() : string {
        return $this->image1;
    }

    public function getImage2() : string {
        return $this->image2;
    }

    public function getImage3() : string {
        return $this->image3;
    }

    public function getImage4() : string {
        return $this->image4;
    }

    public function getImage5() : string {
        return $this->image5;
    }

    
    public function getTelefono() : string {
        return $this->telefono;
    }

    public function getWhatsaap() : string {
        return $this->whatsaap;
    }

    public function getCorreo() : string {
        return $this->correo;
    }

    public function getLinkFacebook() : string {
        return $this->linkFacebook;
    }

    public function getEtiquetas() : string {
        return $this->etiquetas;
    }
    

    //setter
    
    public function setID(string $_id){
        $this->id = $_id;
    }

    public function setNombreTienda(string $_nombreTienda){
        $this->nombreTienda = $_nombreTienda;
    }

    public function setGiro(string $_giro){
        $this->giro = $_giro;
    }

    public function setContrasena(string $_contrasena){
        $this->contrasena = $_contrasena;
    }

    public function setDescription(string $_description){
        $this->description = $_description;
    }

    public function setNombrePersona(string $_nombrePersona){
        $this->nombrePersona = $_nombrePersona;
    }

    public function setApellidoPersona(string $_apellidoPersona){
        $this->apellidoPersona = $_apellidoPersona;
    }

    public function setLogo(string $_logo){
        $this->logo = $_logo;
    }

    public function setCatalogo(string $_catalogo){
        $this->catalogo = $_catalogo;
    }

    public function setPaginaWeb(string $_paginaWeb){
        $this->paginaWeb = $_paginaWeb;
    }

    public function setRedSocial(string $_redSocial){
        $this->redSocial = $_redSocial;
    }

    public function setnombrePersonaSucursal(string $_nombrePersonaSucursal){
        $this->nombrePersonaSucursal = $_nombrePersonaSucursal;
    }

    public function setApellidoPersonaSucursal(string $_apellidoPersonaSucursal){
        $this->apellidoPersonaSucursal = $_apellidoPersonaSucursal;
    }

    public function setDireccion(string $_direccion){
        $this->direccion = $_direccion;
    }

    public function setCodigoPostal(string $_codigoPostal){
        $this->codigoPostal = $_codigoPostal;
    }

    public function setEstado(string $_estado){
        $this->estado = $_estado;
    }

    public function setCiudad(string $_ciudad){
        $this->ciudad = $_ciudad;
    }

    public function setColonia(string $_colonia){
        $this->colonia = $_colonia;
    }

    public function setHorarios(string $_horarios){
        $this->horarios = $_horarios;
    }

    public function setMetodoPago(string $_metodoPago){
        $this->metodoPago = $_metodoPago;
    }

    public function setTiposEntrega(string $_tiposEntrega){
        $this->tiposEntrega = $_tiposEntrega;
    }

    public function setCostoEnvio(string $_costoEnvio){
        $this->costoEnvio = $_costoEnvio;
    }

    public function setDescripcionEnvio(string $_descripcionEnvio){
        $this->descripcionEnvio = $_descripcionEnvio;
    }

    public function setTiempoEnvio(string $_tiempoEnvio){
        $this->tiempoEnvio = $_tiempoEnvio;
    }

    public function setFactura(string $_factura){
        $this->factura = $_factura;
    }

    public function setCitas(string $_citas){
        $this->citas = $_citas;
    }

    public function setFotosNegocio(string $_fotoNegocio){
        $this->fotoNegocio = $_fotoNegocio;
    }

    public function setImage1(string $_setImage1){
        $this->setImage1 = $_setImage1;
    }

    public function setImage2(string $_image2){
        $this->image2 = $_image2;
    }

    public function setImage3(string $_image3){
        $this->image3 = $_image3;
    }

    public function setImage4(string $_image4){
        $this->image4 = $_image4;
    }

    public function setImage5(string $_image5){
        $this->image5 = $_image5;
    }

    public function setTelefono(string $_telefono){
        $this->telefono = $_telefono;
    }

    public function setWhatsaap(string $_whatsaap){
        $this->whatsaap = $_whatsaap;
    }

    public function setCorreo(string $_correo){
        $this->correo = $_correo;
    }

    public function setLinkFacebook(string $_linkFacebook){
        $this->linkFacebook = $_linkFacebook;
    }

    public function setEtiquetas(string $_etiquetas){
        $this->etiquetas = $_etiquetas;
    }
  
    //Serialize the object to JSON.
    public function jsonSerialize()
    {
        $obj = new stdClass;
        //Add all the attributes you want.
        $obj->id = $this->id;
        $obj->nombreTienda = $this->nombreTienda;
        $obj->giro = $this->giro;
        $obj->contrasena = $this->contrasena;
        $obj->descripcion = $this->descripcion;
        $obj->nombrePersona = $this->nombrePersona;
        $obj->apellidoPersona = $this->apellidoPersona;
        $obj->logo = $this->logo;
        $obj->catalogo = $this->catalogo;
        $obj->paginaWeb = $this->paginaWeb;
        $obj->redSocial = $this->redSocial;
        $obj->nombrePersonaSucursal = $this->nombrePersonaSucursal;
        $obj->apellidoPersonaSucursal = $this->apellidoPersonaSucursal;
        $obj->direccion = $this->direccion;
        $obj->codigoPostal = $this->codigoPostal;
        $obj->estado = $this->estado;
        $obj->ciudad = $this->ciudad;
        $obj->colonia = $this->colonia;
        $obj->horarios = $this->horarios;
        $obj->metodoPago = $this->metodoPago;
        $obj->tiposEntrega = $this->tiposEntrega;
        $obj->costoEnvio = $this->costoEnvio;
        $obj->descripcionEnvio = $this->descripcionEnvio;
        $obj->tiempoEnvio = $this->tiempoEnvio;
        $obj->factura = $this->factura;
        $obj->citas = $this->citas;
        $obj->fotoNegocio = $this->fotoNegocio;
        $obj->imagen1 = $this->imagen1;
        $obj->imagen2 = $this->imagen2;
        $obj->imagen3 = $this->imagen3;
        $obj->imagen4 = $this->imagen4;
        $obj->imagen5 = $this->imagen5;
        $obj->telefono = $this->telefono;
        $obj->whatsaap = $this->whatsaap;
        $obj->correo = $this->correo;
        $obj->linkFacebook = $this->linkFacebook;
        $obj->etiquetas = $this->etiquetas;
        return $obj;
    }
}


?>