<?php


    interface SolicitudDAO {
    function ingresarPostulacion(\dto\Solicitud $postulacion);
    function modificarPostulacion(\dto\Solicitud $postulacion);
    function eliminarPostulacion($id_postulacion);
    function buscarPostulacion($id_postulacion);
    function listarPostulacionesPorRangoFecha($fecha_desde, $fecha_hasta);
    function listarPostulacionesPorRutPostulante($rut_postulante);
}
