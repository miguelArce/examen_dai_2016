<?php

include '../dto/ejecutivo.php';
include '../sql/ConexionPDO.php';

class SolicitudDaoImplementado implements SolicitudDAO {
    public function buscarPostulacion($id_postulacion) {
        
    }

    public function eliminarPostulacion($id_postulacion) {
        
    }

    public function ingresarPostulacion($postulacion) {
        $conexion = new ConexionPDO();             
        try {                  
            $nuevoAutor = new \dto\Solicitud();
            $rut_postulante = $nuevoAutor->getRut();
            $nombre = $nuevoAutor->getNombre();
            $aPaterno = $nuevoAutor->getApellido_paterno();
            $aMaterno = $nuevoAutor->getApellido_materno();        
            $fNacimiento = $nuevoAutor->getF_nacimiento();
            $sexo = $nuevoAutor->getSexo();
            $fono = $nuevoAutor->getFono();
            $niv_edu = $nuevoAutor->getNivel_educacional();
            $correo = $nuevoAutor->getE_mail();
            $direccion = $nuevoAutor->getDireccion();
            $comuna = $nuevoAutor->getComuna();
            $exp_laboral =  $nuevoAutor->getExperiencia_laboral();
            
            $query = "INSERT INTO solicitud(rutPostulante, modalidad, curso, fechaIngreso,"
                    . "idEstado, fechaNacimiento, sexo, telefeno, email, direccion, comuna, "
                    . "educacion, experiencia) "
                    . "VALUES ('$rut_postulante', , "
                    . "'$aPaterno', '$aMaterno', '$fNacimiento', '$sexo', '$fono',"
                    . "'$niv_edu', '$correo', '$direccion', '$comuna', '$exp_laboral'"
                    . " )";
            $statement = $conexion->query($query);
            $resultado = $statement->execute();             
            
                       
        } catch (Exception $exc) {            
            echo $exc->getMessage();
            $resultado = false;
        } finally {
            return $resultado;
        }
    }

    
    //TO_DO!!!
    public function listarPostulacionesPorRangoFecha($fecha_desde, $fecha_hasta) {
        $conexion = new ConexionPDO();             
        $resultado = array();
         try {
            
            $query = "SELECT rutPostulante, estado from solicitud "
                    . "WHERE (fechaIngreso BETWEEN :fechaDesde AND :fechaHasta";
            $statement = $conexion->prepare($query);            
            $statement->bindParam(':fechaDesde', $);
            $statement->bindParam(':fechaHasta', $);
            $statement->execute();
            $res = $statement->fetch(PDO::FETCH_ASSOC);
            foreach ($res as $value) {
                
            }
        } catch (Exception $exc) {            
            echo $exc->getMessage();
            return "no encontrado";
        }
    }

    public function listarPostulacionesPorRutPostulante($rut_postulante) {
        $conexion = new ConexionPDO();             
        $resultado = array();
         try {
            $n_rut = trimI($rut_postulante);
            $query = "SELECT rutPostulante, estado from solicitud "
                    . "WHERE rutPostulante= :rut";
            $statement = $conexion->prepare($query);            
            $statement->bindParam(':rut', $$n_rut);            
            $statement->execute();
            $res = $statement->fetch(PDO::FETCH_ASSOC);
            foreach ($res as $value) {
                
            }
        } catch (Exception $exc) {            
            echo $exc->getMessage();
            return "no encontrado";
        }
    }

    public function modificarPostulacion(Solicitud $postulacion) {
        $conexion = new ConexionPDO();             
        try {                  
            $nuevoAutor = new Solicitud();
            $rut_postulante = $nuevoAutor->getRut();
            $nombre = $nuevoAutor->getNombre();
            $aPaterno = $nuevoAutor->getApellido_paterno();
            $aMaterno = $nuevoAutor->getApellido_materno();        
            $fNacimiento = $nuevoAutor->getF_nacimiento();
            $sexo = $nuevoAutor->getSexo();
            $fono = $nuevoAutor->getFono();
            $niv_edu = $nuevoAutor->getNivel_educacional();
            $correo = $nuevoAutor->getE_mail();
            $direccion = $nuevoAutor->getDireccion();
            $comuna = $nuevoAutor->getComuna();
            $exp_laboral =  $nuevoAutor->getExperiencia_laboral();
            
            $query = "UPDATE solicitud SET (?),(?),(?),(?)) where id_solicitud = (?)";
            $statement = $conexion->prepare($query);
            $statement->bindValue(1, $pass);
            $statement->bindValue(2, $nombre_ejecutivo);
            $statement->bindValue(3, $apaterno_ejecutivo);
            $statement->bindValue(4, $amaterno_ejecutivo);
            $statement->bindValue(5, $id_ejecutivo);
            $resultado = $statement->execute();             
                       
        } catch (Exception $exc) {            
            echo $exc->getMessage();
            $resultado = false;
        } finally {
            return $resultado;
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
            if($statement->rowCount()>0){
                return $res['estado'];
            }
        } catch (Exception $exc) {            
            echo $exc->getMessage();
            return "no encontrado";
        
    }

}
