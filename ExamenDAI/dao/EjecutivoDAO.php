<?php

/**
 *
 * @author sebpa
 */
interface EjecutivoDAO {
    function ingresarEjecutivo(Ejecutivo $ejecutivo);
    function modificarEjecutivo(Ejecutivo $ejecutivo);
    function eliminarEjecutivo($id_ejecutivo);
    function buscarEjecutivo($id_ejecutivo);
    function validarRut($rut_ingresado);
}
