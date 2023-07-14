<?php

class sliderClass {
    // mysql> banner_principal;
    // +----------------+---------------+------+-----+---------+-------+
    // | Field          | Type          | Null | Key | Default | Extra |
    // +----------------+---------------+------+-----+---------+-------+
    // | id          | int          |
    // | image          | varchar          | YES  |     | NULL    |       |
    // | text1         | varchar         | YES  |     | NULL    |       |
    // |text2
    // +----------------+---------------+------+-----+---------+-------+
    // 4 rows in set (0.00 sec)

    private $id;
    private $image;
    private $text1;
    private $text2;

    //getters
    public function getID(){return $this->id;}

    public function getText1() : string {
        return $this->text1;
    }

    public function getText2() : string {
        return $this->text2;
    }

    public function getImage() : string {
        return $this->image;
    }

    //setter
    
    public function setID(string $_id){
        $this->id = $_id;
    }

    public function setText1(string $_text1){
        $this->text1 = $_text1;
    }

    public function setText2(string $_text2){
        $this->text2 = $_text2;
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
        $obj->image = $this->image;
        $obj->text1 = $this->text1;
        $obj->text2 = $this->text2;
        return $obj;
    }
}


?>