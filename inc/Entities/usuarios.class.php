<?php

class usuariosClass {

    // mysql> usuarios;
    // +----------------+---------------+------+-----+---------+-------+
    // | Field          | Type          | Null | Key | Default | Extra |
    // +----------------+---------------+------+-----+---------+-------+
    // | id          | int          |
    // | nombre          | varchar          | YES  |     | NULL    |       |
    // | apellido         | varchar         | YES  |     | NULL    |       |
    // |cumpleanos
    //  telefono
    //  correo
    //  contrasena
    //  fechaRegistro
    // +----------------+---------------+------+-----+---------+-------+
    // 4 rows in set (0.00 sec)

    private $id;
    private $nombre;
    private $apellidos;
    private $cumpleanos;
    private $telefono;
    private $correo;
    private $contrasena;
    private $fechaRegistro;

    //getters
    public function getID(){return $this->id;}

    public function getNombre() : string {
        return $this->nombre;
    }

    public function getApellidos() : string {
        return $this->apellidos;
    }

    public function getCumpleanos() : string {
        return $this->cumpleanos;
    }

    public function getTelefono() : string {
        return $this->telefono;
    }

    public function getCorreo() : string {
        return $this->apellidos;
    }

    public function getContrasena() : string {
        return $this->contrasena;
    }

    public function getFechaRegistro() : string {
        return $this->fechaRegistro;
    }
    

    //setter
    
    public function setID(string $_id){
        $this->id = $_id;
    }

    public function setNombre(string $_nombre){
        $this->nombre = $_nombre;
    }

    public function setApellidos(string $_apellido){
        $this->apellidos = $_apellido;
    }

    public function setCumpleanos(string $_cumpleanos){
        $this->cumpleanos = $_cumpleanos;
    }

    public function setTelefono(string $_telefono){
        $this->telefono = $_telefono;
    }

    public function setCorreo(string $_correo){
        $this->correo = $_correo;
    }

    public function setContrasena(string $_contrasena){
        $this->contrasena = $_contrasena;
    }

    public function setFechaRegistro(string $_fechaRegistro){
        $this->fechaRegistro = $_fechaRegistro;
    }
  
    //Serialize the object to JSON.
    public function jsonSerialize()
    {
        $obj = new stdClass;
        //Add all the attributes you want.
        $obj->id = $this->id;
        $obj->nombre = $this->nombre;
        $obj->apellidos = $this->apellidos;
        $obj->cumpleanos = $this->cumpleanos;
        $obj->telefono = $this->telefono;
        $obj->contrasena = $this->contrasena;
        $obj->fechaRegistro = $this->fechaRegistro;
        return $obj;
    }
}


?>