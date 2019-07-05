<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'Conexion.php';
/**
 * Description of Cliente
 *
 * @author Renzo
 */
class ModCurso {
     private $db;
     private $id=1;
     private $key='173449ebbda62b67a0d9bc645e6dbba7';

    function __construct() {
        //$this->db = Conectar();
    }

    function retornarKey(){
        return $this->key;
    }
}
