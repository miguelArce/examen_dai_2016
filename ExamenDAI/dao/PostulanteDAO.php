<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author sebpa
 */
interface PostulanteDAO {
    function ingresarPostulante($postulante, $pass);
    function modificarPostulante(Postulante $postulante);
    function eliminarPostulante($id_postulante);
    function buscarPostulante($id_postulante);
    function validarRut($rut_ingresado);
    
    
}
