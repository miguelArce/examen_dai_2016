<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace dto;

/**
 * Description of Ejecutivo
 *
 * @author sebpa
 */
class Ejecutivo {
    private $rut;
    private $nombre;
    private $apellido_paterno;
    private $apellido_materno;
    private $pass;
    
    function __construct($rut="0 ", $nombre="no_name", $apellido_paterno="no_name", $apellido_materno="no_name", $pass="@@@@") {
        $this->rut = $rut;
        $this->nombre = $nombre;
        $this->apellido_paterno = $apellido_paterno;
        $this->apellido_materno = $apellido_materno;
        $this->pass = $pass;
    }

    
    function getRut() {
        return $this->rut;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido_paterno() {
        return $this->apellido_paterno;
    }

    function getApellido_materno() {
        return $this->apellido_materno;
    }

    function setRut($rut) {
        $this->rut = $rut;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido_paterno($apellido_paterno) {
        $this->apellido_paterno = $apellido_paterno;
    }

    function setApellido_materno($apellido_materno) {
        $this->apellido_materno = $apellido_materno;
    }    
    function getPass() {
        return $this->pass;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }
}
