<?php
class UsuariosDAO    {

    private static $db;

    static function initialize()    {


        self::$db = new PDOService('usuariosClass');
    
    }

    static function addElement(usuariosClass $newUsuario): int   {

        $sql = "INSERT INTO usuarios (id, nombre, apellidos, cumpleanos, telefono, correo, contrasena, fechaRegistro) VALUES (:id, :nombre, :apellidos, :cumpleanos, :telefono, :correo, :contrasena, :fechaRegistro);";
        self::$db->query($sql);

        self::$db->bind(":id",$newUsuario->getID());
        self::$db->bind(":nombre",$newUsuario->getNombre());
        self::$db->bind(":apellidos",$newUsuario->getApellidos());
        self::$db->bind(":cumpleanos",$newUsuario->getCumpleanos());
        self::$db->bind(":telefono",$newUsuario->getTelefono());
        self::$db->bind(":correo",$newUsuario->getCorreo());
        self::$db->bind(":contrasena",$newUsuario->getContrasena());
        self::$db->bind(":fechaRegistro",$newUsuario->getFechaRegistro());

        self::$db->execute();

        return self::$db->lastInsertedId();       

    }

    static function getUsuarios(){
        $sql = "SELECT * FROM usuarios";
       
        self::$db->query($sql);
       
        self::$db->execute();
     
        return self::$db->resultSet();
    }
}
?>