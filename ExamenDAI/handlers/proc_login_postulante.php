<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){
    
    session_start();    
    include ('../dao/postulantedaoimplementado.php'); 
    $postulante = new \dao\PostulanteDAOImplementado();   
    
    list($check, $data) = $postulante->ingresarPostulante($_POST['rut'], $_POST['pass']);
    
    if($check){        
        $_SESSION['rut'] = $data->rut;
        $_SESSION['nombre'] = $data->nombre;
        $_SESSION['tipo_usuario'] = 'postulante';
        
        //TO_DO
        header ('Location: formulario');
        
    }else{        
        $errores = $data;
    }
}
