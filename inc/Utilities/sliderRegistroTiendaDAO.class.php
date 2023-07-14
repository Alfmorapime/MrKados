<?php
class SliderRegistroTiendaDAO    {

    private static $db;

    static function initialize()    {


        self::$db = new PDOService('sliderRegistroTiendaClass');
    
    }

    static function addElement(sliderRegistroTiendaClass $newSlide): int   {

        $sql = "INSERT INTO sliderregistrotienda (id, image, text1, text2) VALUES (:id, :image, :text1, :text2);";
        self::$db->query($sql);

        self::$db->bind(":id",$newSlide->getID());
        self::$db->bind(":image",$newSlide->getImage());
        self::$db->bind(":text1",$newSlide->getText1());
        self::$db->bind(":text2",$newSlide->getText2());

        self::$db->execute();

        return self::$db->lastInsertedId();       
    }

    static function getSlides(){
        $sql = "SELECT * FROM sliderregistrotienda";
       
        self::$db->query($sql);
        self::$db->execute();
     
        return self::$db->resultSet();
    }
}
?>