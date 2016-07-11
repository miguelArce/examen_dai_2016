<?php

include '../dto/ejecutivo.php';
include '../sql/ConexionPDO.php';


class EjecutivoDaoImplementado implements EjecutivoDAO {
    public function buscarEjecutivo($id_ejecutivo) {        
        $conexion = new ConexionPDO();
             
        try {                  
            
            $n_id_ejecutivo = trim($id_ejecutivo);            
            $query = "SELECT * FROM ejecutivo WHERE rut = (?)";
            $statement = $conexion->prepare($query);
            $statement->bindValue(1, $n_id_ejecutivo);
            $statement->execute();
            $resultado = true;
                       
        } catch (Exception $exc) {            
            echo $exc->getMessage();
            $resultado = false;
        } finally {
            return $resultado;
        }                
        
    }

    public function eliminarEjecutivo($id_ejecutivo) {
        $conexion = new ConexionPDO();
             
        try {                  
            
            $n_id_ejecutivo = trim($id_ejecutivo);            
            $query = "DELETE FROM ejecutivo WHERE rut = (?)";
            $statement = $conexion->prepare($query);
            $statement->bindValue(1, $n_id_ejecutivo);
            $statement->execute();
            $resultado = true;
                       
        } catch (Exception $exc) {            
            echo $exc->getMessage();
            $resultado = false;
        } finally {
            return $resultado;
        }                
    }

    public function ingresarEjecutivo(Ejecutivo $ejecutivo) {
        $conexion = new ConexionPDO();             
        try {                  
            
            $apaterno_ejecutivo = trim($ejecutivo->getApellido_paterno());            
            $amaterno_ejecutivo = trim($ejecutivo->getApellido_materno());            
            $nombre_ejecutivo = trim($ejecutivo->getNombre());            
            $id_ejecutivo = $this->validarRut(trim($ejecutivo->getRut()));
            $pass_ejecutivo = trim($ejecutivo->getPass());
            
            $query = "INSERT INTO ejecutivo VALUES((?),(?),(?),(?),(?))";
            $statement = $conexion->prepare($query);
            $statement->bindValue(1, $id_ejecutivo);
            $statement->bindValue(2, $nombre_ejecutivo);
            $statement->bindValue(3, $apaterno_ejecutivo);
            $statement->bindValue(4, $amaterno_ejecutivo);
            $statement->bindValue(5, $pass_ejecutivo);
            $resultado = $statement->execute();             
                       
        } catch (Exception $exc) {            
            echo $exc->getMessage();
            $resultado = false;
        } finally {
            return $resultado;
        }  
    }

    public function modificarEjecutivo(Ejecutivo $ejecutivo) {
        $conexion = new ConexionPDO();             
        try {                  
            
            $apaterno_ejecutivo = trim($ejecutivo->getApellido_paterno());            
            $amaterno_ejecutivo = trim($ejecutivo->getApellido_materno());            
            $nombre_ejecutivo = trim($ejecutivo->getNombre());            
            $id_ejecutivo = $this->validarRut(trim($ejecutivo->getRut()));        
            $pass = trim($ejecutivo->getPass());
            
            $query = "UPDATE ejecutivo SET (?),(?),(?),(?)) where rut = (?)";
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
    public function ingresarPostulante($id_postulante, $pass) {
        $conexion = new ConexionPDO();
             
        try {                  
            
            $n_id_ejecutivo = trim($id_postulante);           
            $n_pass= trim($pass);
            $query = "SELECT * FROM ejecutivo WHERE rut = '$n_id_ejecutivo' and contraseña='$n_pass'";
            $statement = $conexion->query($query);                        
            if($statement != false){
                $row = $statement->fetchObject();            
                return array(true, $row);
            }else{
                return false;
            }
            $resultado = $statement->fetch();                       
        } catch (Exception $exc) {            
            echo $exc->getMessage();
            $resultado = false;
            return false;
            
        }
    }
    

    public function validarRut($rut_ingresado) {        
        $expression = '/^(\d{1,9})-((\d|k|K){1})$/';
        return preg_match($expression, $rut_ingresado);    
    }
}
