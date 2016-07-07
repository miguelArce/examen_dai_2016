<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace dao;

/**
 *
 * @author sebpa
 */
interface EjecutivoDAO {
    function ingresarEjecutivo(\dto\Ejecutivo $ejecutivo);
    function modificarEjecutivo(\dto\Ejecutivo $ejecutivo);
    function eliminarEjecutivo($id_ejecutivo);
    function buscarEjecutivo($id_ejecutivo);
    function validarRut($rut_ingresado);
}
