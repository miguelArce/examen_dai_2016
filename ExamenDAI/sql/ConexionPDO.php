<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConexionPDO
 *
 * @author sebpa
 */
class ConexionPDO extends PDO {
    //TODO: Setear parámetros de conexión a base de datos MySQL
    var $tns= "bd_examen" ;
    var $user = "root";
    var $pass = "";
    
    public function __construct(array $options = null) {
        try
        {
            parent::__construct("oci:dbname".$this->tns, $this->user, $this->pass, $options);
        } 
        catch (PDOException $exc){
            echo "conexion fallida: ".$exc->getMessage();
        }
    }
    

    //put your code here
}
