<?php
class CategoriasDAO    {

    private static $db;

    static function initialize()    {


        self::$db = new PDOService('categoriasClass');
    
    }

    static function addElement(categoriasClass $newCategoria): int   {

        $sql = "INSERT INTO categorias (id, nombre, image) VALUES (:id, :nombre, :image);";
       //var_dump($newGrade);
        self::$db->query($sql);

        self::$db->bind(":id",$newCategoria->getID());
        self::$db->bind(":nombre",$newCategoria->getNombre());
        self::$db->bind(":image",$newCategoria->getImage());

        self::$db->execute();

        return self::$db->lastInsertedId();       

    }

    static function getCategorias(){
        $sql = "SELECT * FROM categorias";
       
        self::$db->query($sql);
       
        self::$db->execute();
     
        return self::$db->resultSet();
    }
}
?>