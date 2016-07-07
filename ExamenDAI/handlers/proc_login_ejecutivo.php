<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){
    
    session_start();    
    include ('../dao/ejecutivodaoimplementado.php'); 
    $ejecutivo = new \dao\EjecutivoDaoImplementado();   
    
    list($check, $data) = $ejecutivo->ingresarPostulante($_POST['rut'], $_POST['pass']);
    
    if($check){        
        $_SESSION['rut'] = $data->rut;
        $_SESSION['nombre'] = $data->nombre;
        $_SESSION['tipo_usuario'] = 'ejecutivo';
        
        header ('Location: formulario');
        
    }else{
        
        $errores = $data;
    }
}
