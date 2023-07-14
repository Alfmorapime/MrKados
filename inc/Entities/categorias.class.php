<?php

class categoriasClass {

    // mysql> categorias;
    // +----------------+---------------+------+-----+---------+-------+
    // | Field          | Type          | Null | Key | Default | Extra |
    // +----------------+---------------+------+-----+---------+-------+
    // | id          | int          |
    // | nombre          | varchar          | YES  |     | NULL    |       |
    // | image         | varchar         | YES  |     | NULL    |       |
    // |
    // +----------------+---------------+------+-----+---------+-------+
    // 4 rows in set (0.00 sec)

    private $id;
    private $nombre;
    private $image;

    //getters
    public function getID(){return $this->id;}

    public function getNombre() : string {
        return $this->nombre;
    }

    public function getImage() : string {
        return $this->image;
    }

    //setter
    
    public function setID(string $_id){
        $this->id = $_id;
    }

    public function setNombre(string $_nombre){
        $this->nombre = $_nombre;
    }

    public function setImage(string $_image){
        $this->image = $_image;
    }
  
    //Serialize the object to JSON.
    public function jsonSerialize()
    {
        $obj = new stdClass;
        //Add all the attributes you want.
        $obj->id = $this->id;
        $obj->nombre = $this->nombre;
        $obj->image = $this->image;
        return $obj;
    }
}


?>