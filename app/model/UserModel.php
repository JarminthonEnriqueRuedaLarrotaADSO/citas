<?php

namespace Adso\model;

use Adso\libs\Database;

class UserModel
{


    private $nombre;
    private $clave;
    protected $db;
    protected $connection;

    public function setNombre($nombre){
        $this->nombre= $nombre;
    }
    public function setClave($clave){
        $this-> clave =$clave;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getClave(){
        return $this->clave;
    }
    function __construct()
    {
        $this->db           = new Database();
        $this->connection   = $this->db->getConnection();
    }

    function getUsers()
    {
        $sql = "SELECT * FROM users";
        $stm = $this->connection->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    function validarInicio(){
        $sql = "SELECT nombre,clave FROM admon WHERE nombre=:nombre  clave=:clave ";
        $stm = $this->connection->prepare($sql);
        $stm->bindValue(':nombre',$this->nombre);
        $stm->bindValue(':clave',$this->clave);

    }
 }
