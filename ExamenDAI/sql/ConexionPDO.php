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
    private $host = "localhost";
    private $charset = "utf8";
    private $tns= "bd_examen" ;
    private $user = "root";
    private $pass = "";
    
    public function __construct(array $options = null) {
        try
        {
            parent::__construct("mysql:"
                    . "host=$this->host;"
                    . "dbname=$this->tns;"
                    . "charset=$this->charset", 
                    $this->user, 
                    $this->pass);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch (PDOException $exc){
            echo "conexion fallida: ".$exc->getMessage();
        }
    }
    

    //put your code here
}
