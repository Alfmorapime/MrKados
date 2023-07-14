<?php
class TiendasDAO    {

    private static $db;

    static function initialize()    {


        self::$db = new PDOService('tiendasClass');
    
    }

    static function addElement(tiendasClass $newTienda): int   {
        $sql = "INSERT INTO tiendas (id, nombreTienda, giro, contrasena, descripcion, nombrePersona, apellidoPersona, logo, catalogo, paginaWeb, redSocial, nombrePersonaSucursal, apellidoPersonaSucursal, direccion, codigoPostal, estado, ciudad, colonia, horarios, metodoPago, tiposEntrega, costoEnvio, descripcionEnvio, tiempoEnvio, factura, citas, fotoNegocio, imagen1, imagen2, imagen3, imagen4, imagen5, telefono, whatsaap, correo, linkFacebook, etiquetas) VALUES (:id, :nombreTienda, :giro, :contrasena, :descripcion, :nombrePersona, :apellidoPersona, :logo, :catalogo, :paginaWeb, :redSocial, :nombrePersonaSucursal, :apellidoPersonaSucursal, :direccion, :codigoPostal, :estado, :ciudad, :colonia, :horarios, :metodoPago, :tiposEntrega, :costoEnvio, :descripcionEnvio, :tiempoEnvio, :factura, :citas, :fotoNegocio, :imagen1, :imagen2, :imagen3, :imagen4, :imagen5, :telefono, :whatsaap, :correo, :linkFacebook, :etiquetas);";
       
       self::$db->query($sql);

        self::$db->bind(":id",$newTienda->getID());
        self::$db->bind(":nombreTienda",$newTienda->getNombreTienda());
        self::$db->bind(":giro",$newTienda->getGiro());
        self::$db->bind(":contrasena",$newTienda->getContrasena());
        self::$db->bind(":descripcion",$newTienda->getDescripcion());
        self::$db->bind(":nombrePersona",$newTienda->getNombrePersona());
        self::$db->bind(":apellidoPersona",$newTienda->getApellidoPersona());
        self::$db->bind(":logo",$newTienda->getLogo());
        self::$db->bind(":catalogo",$newTienda->getCatalogo());
        self::$db->bind(":paginaWeb",$newTienda->getPaginaWeb());
        self::$db->bind(":redSocial",$newTienda->getRedSocial());
        self::$db->bind(":nombrePersonaSucursal",$newTienda->getNombrePersonaSucursal());
        self::$db->bind(":apellidoPersonaSucursal",$newTienda->getApellidoPersonaSucursal());
        self::$db->bind(":direccion",$newTienda->getDireccion());
        self::$db->bind(":codigoPostal",$newTienda->getCodigoPostal());
        self::$db->bind(":estado",$newTienda->getEstado());
        self::$db->bind(":ciudad",$newTienda->getCiudad());
        self::$db->bind(":colonia",$newTienda->getColonia());
        self::$db->bind(":horarios",$newTienda->getHorarios());
        self::$db->bind(":metodoPago",$newTienda->getMetodoPago());
        self::$db->bind(":tiposEntrega",$newTienda->getTiposEntrega());
        self::$db->bind(":costoEnvio",$newTienda->getCostoEnvio());
        self::$db->bind(":descripcionEnvio",$newTienda->getDescripcionEnvio());
        self::$db->bind(":tiempoEnvio",$newTienda->getTiempoEnvio());
        self::$db->bind(":factura",$newTienda->getFactura());
        self::$db->bind(":citas",$newTienda->getCitas());
        self::$db->bind(":fotoNegocio",$newTienda->getFotoNegocio());
        self::$db->bind(":image1",$newTienda->getImage1());
        self::$db->bind(":image2",$newTienda->getImage2());
        self::$db->bind(":image3",$newTienda->getImage3());
        self::$db->bind(":image4",$newTienda->getImage4());
        self::$db->bind(":image5",$newTienda->getImage5());
        self::$db->bind(":telefono",$newTienda->getTelefono());
        self::$db->bind(":whatsaap",$newTienda->getWhatsaap());
        self::$db->bind(":correo",$newTienda->getCorreo());
        self::$db->bind(":linkFacebook",$newTienda->getLinkFacebook());
        self::$db->bind(":etiquetas",$newTienda->getEtiquetas());

        self::$db->execute();

        return self::$db->lastInsertedId();       
    }

    static function getTiendas(){
        $sql = "SELECT * FROM tiendas";
       
        self::$db->query($sql);
       
        self::$db->execute();
     
        return self::$db->resultSet();
    }
}
?>