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

    public function listarPostulacionesPorRangoFecha($fecha_desde, $fecha_hasta) {
        
    }

    public function listarPostulacionesPorRutPostulante($rut_postulante) {
        
    }

    public function modificarPostulacion(\dto\Solicitud $postulacion) {
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
            
            $query = "SELECT n_estado from estado est, historial_solicitud hist "
                    . "where hist.idSolicitud ='$id_solicitud' AND"
                    . "est.idEstado = hist.idEstado LIMIT 1";
            $statement = $conexion->query($query);            
            $res = $statement->execute();                         
            $res->fetch_style(PDO::FETCH_ASSOC);
            $array = $res->fetch();
            return $array;
        } catch (Exception $exc) {            
            echo $exc->getMessage();
            $resultado = false;
        } finally {
            return $resultado;
        }
        
    }

//put your code here
}
