<?php

class Usuario {

    private $id;
    private $nombre;
    private $email;
    private $rol;

    private static function fromRowToUsuario($row) {
        return new Usuario($row);
    }

    public static function getUsuariosNormales() {
        $query = "SELECT * FROM usuario WHERE rol_id <> 1";
        $ps    = Config::$dbh->prepare($query);
        $res   = $ps->execute();
        $result = array();
        if($res) {
            $result = $ps->fetchAll();
            $result = array_map([Usuario::class, 'fromRowToUsuario'], $result);
        }

        return $result;
    }

    
    public function getCantidadTareas() {

        $usuario_id = $this->id;
        $query = "SELECT COUNT(*) FROM tarea WHERE usuario_id = ?";
        $ps    = Config::$dbh->prepare($query);
        $res   = $ps->execute(array($usuario_id));
        
        //print $res;

        return $res;


      
    }

    function __construct($result_row) {
        $this->id     = $result_row["usuario_id"];
        $this->nombre = $result_row["nombre"];
        $this->email  = $result_row["email"];
        $this->rol    = $result_row["rol_id"];        
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getRol() {
        return $this->nombre;
    }

    public static function findByUsername($username) {
        $query = "SELECT * FROM usuario WHERE nombre = ?";
        $ps    = Config::$dbh->prepare($query);
        $res   = $ps->execute(array($username));        
        
        $result = null;
        if($res) {
            $userRow = $ps->fetch();
            if($userRow) {
                $result = new Usuario($userRow);
            }
        } 

        return $result;
    }
}

?>