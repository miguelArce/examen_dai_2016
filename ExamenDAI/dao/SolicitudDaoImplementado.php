<?php

include '../dto/ejecutivo.php';
include '../sql/ConexionPDO.php';

class SolicitudDaoImplementado implements SolicitudDAO {

    public function buscarPostulacion($id_postulacion) {
        $conexion = new ConexionPDO();
        try{
            $query = "SELECT * FROM solicitud WHERE idSolicitud = :id";
            $statement = $conexion->prepare($query);
            $statement->bindValue(':id', $id_postulacion);
            $statement->execute();            
            $res = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        } catch (Exception $ex) {
            echo "error al buscar postulación: ".$ex->getMessage();
        }
        
    }

    public function eliminarPostulacion($id_postulacion) {
        $conexion = new ConexionPDO();
        try{
            $n_id = trim($id_postulacion);          
            $query = "DELETE FROM solicitud WHERE idSolicitud = :id";
            $statement = $conexion->prepare($query);
            $statement->bindValue(':id', $n_id, PDO::PARAM_STR);
            $statement->execute();
            $filasAfectadas = $statement->rowCount();
            if($filasAfectadas>0){
                return true;
            }else{
                return false;
            }
        } catch (Exception $ex) {
            echo "Error al eliminar: ".$ex->getMessage();            
        }
    }

    public function ingresarPostulacion(string $rut_postulante, Solicitud $postulacion) {
        $conexion = new ConexionPDO();
        try {
            $modalidad = $postulacion->getModalidad();
            $curso = $postulacion->getCurso();
            $estado = $postulacion->getEstado();
            $fono = $postulacion->getFono();
            $correo = $postulacion->getE_mail();
            $direccion = $postulacion->getDireccion();
            $comuna = $postulacion->getComuna();
            $niv_edu = $postulacion->getNivel_educacional();
            $exp_laboral = $postulacion->getExperiencia_laboral();
            $id = $postulacion->getId_solicitud();
            $query = "INSERT INTO solicitud("
                    . "rutPostulante, modalidad, curso, fechaIngreso, estado, "
                    . "telefono, email, direccion, comuna, educacion, experiencia"
                    . ") VALUES (:rut,"                    
                    . ":modalidad,"
                    . ":curso,"
                    . "CURDATE(),"                    
                    . ":estado,"
                    . ":telefono,"
                    . ":email,"
                    . ":direccion,"
                    . ":comuna,"
                    . ":educacion,"
                    . ":experiencia"
                    . ")";
            $statement = $conexion->prepare($query);
            $statement->bindValue(':rut', $rut_postulante);
            $statement->bindValue(':modalidad', $modalidad);
            $statement->bindValue(':curso', $curso);
            $statement->bindValue(':estado', $estado);
            $statement->bindValue(':telefono', $fono);
            $statement->bindValue(':email', $correo);
            $statement->bindValue(':direccion', $direccion);
            $statement->bindValue(':comuna', $comuna);
            $statement->bindValue(':educacion', $niv_edu);
            $statement->bindValue(':experiencia', $exp_laboral);
            $statement->execute();
            $filasAfectadas = $statement->rowCount();
            if ($filasAfectadas > 0) {
                $id_insercion = $conexion->lastInsertId();
                return $id_insercion;
            } else {
                return false;
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
       
    }

    //TO_DO!!!
    public function listarPostulacionesPorRangoFecha($fecha_desde, $fecha_hasta) {
        $conexion = new ConexionPDO();        
        try {

            $query = "SELECT rutPostulante, estado from solicitud "
                    . "WHERE (fechaIngreso BETWEEN :fechaDesde AND :fechaHasta";
            $statement = $conexion->prepare($query);
            $statement->bindParam(':fechaDesde', $fecha_desde);
            $statement->bindParam(':fechaHasta', $fecha_hasta);
            $statement->execute();
            $res = $statement->fetch(PDO::FETCH_ASSOC);
            return $res;
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    public function listarPostulacionesPorRutPostulante($rut_postulante) {
        $conexion = new ConexionPDO();
        try {
            $n_rut = trimI($rut_postulante);
            $query = "SELECT rutPostulante, estado from solicitud "
                    . "WHERE rutPostulante= :rut";
            $statement = $conexion->prepare($query);
            $statement->bindParam(':rut', $$n_rut);
            $statement->execute();
            $res = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        } catch (Exception $exc) {
            echo $exc->getMessage();
            return false;
        }
    }

    public function modificarPostulacion(Solicitud $postulacion) {
        $conexion = new ConexionPDO();
        try {
            $modalidad = $postulacion->getModalidad();
            $curso = $postulacion->getCurso();
            $estado = $postulacion->getEstado();
            $fono = $postulacion->getFono();
            $correo = $postulacion->getE_mail();
            $direccion = $postulacion->getDireccion();
            $comuna = $postulacion->getComuna();
            $niv_edu = $postulacion->getNivel_educacional();
            $exp_laboral = $postulacion->getExperiencia_laboral();
            $id = $postulacion->getId_solicitud();
            $query = "UPDATE solicitud SET "
                    . "modalidad = (?),"
                    . "curso = (?),"
                    . "estado = (?),"
                    . "telefono =(?),"
                    . "email = (?),"
                    . "direccion = (?),"
                    . "comuna = (?),"
                    . "educacion = (?),"
                    . "experiencia = (?),"
                    . "WHERE idSolicitud = (?)";
            $statement = $conexion->prepare($query);
            $statement->bindValue(1, $modalidad);
            $statement->bindValue(2, $curso);
            $statement->bindValue(3, $estado);
            $statement->bindValue(4, $fono);
            $statement->bindValue(5, $correo);
            $statement->bindValue(6, $direccion);
            $statement->bindValue(7, $comuna);
            $statement->bindValue(8, $niv_edu);
            $statement->bindValue(9, $exp_laboral);
            $statement->bindValue(10, $id);
            $statement->execute();
            $filasAfectadas = $statement->rowCount();
            if ($filasAfectadas > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }        
    }

    public function revisarEstado($id_solicitud) {
        $conexion = new ConexionPDO();
        try {

            $query = "SELECT estado from solicitud WHERE idSolicitud =:id";
            $statement = $conexion->prepare($query);
            $statement->bindParam(':id', $id_solicitud);
            $statement->execute();
            $res = $statement->fetch(PDO::FETCH_ASSOC);
            if ($statement->rowCount() > 0) {
                return $res['estado'];
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

}
