<?php

if($_SERVER['REQUEST_METHOD']=='POST'){    
    
    $errores = array();
    
    if(empty($_POST['rut'])){
        $errores[]  = 'Olvidaste ingresar tu rut';
    }else{
        $rut = trim($_POST['rut']);
    }
    
    if(empty($_POST['nombre'])){
        $errores[]  = 'Olvidaste ingresar tu nombre';
    }else{
        $nombre = trim($_POST['nombre']);
    }
    
    if(empty($_POST['a_paterno'])){
        $errores[]  = 'Olvidaste ingresar tu apellido paterno';
    }else{
        $apellido_paterno = trim($_POST['a_paterno']);        
    }
    
    if(empty($_POST['a_materno'])){
        $errores[]  = 'Olvidaste ingresar tu apellido materno';
    }else{
        $apellido_materno = trim($_POST['a_materno']);        
    }   
    
    if(!empty($_POST['pass'])){
        if($_POST['pass'] != $_POST['re_pass']){
            $errores[] = 'La contraseña no coincide';
        }
        else{
            $pass = trim($_POST['pass']);
        }
    }else{
        $errores[]  = 'Olvidaste ingresar tu contraseña';
    }    
    if(empty($errores)){
        include ('../dao/postulantedaoimplementado.php');
        
        $nuevoAutor = new Postulante();
        $nuevoAutor->setRut($rut);
        $nuevoAutor->setNombre($nombre);
        $nuevoAutor->setApellido_paterno($apellido_paterno);
        $nuevoAutor->setApellido_materno($apellido_materno);        
        $nuevoAutor->setPass($pass);
        
        $autor =new PostulanteDAOImplementado;
        $res = $autor->agregarPostulante($nuevoAutor);
        if($res){
            echo "<h1>GRACIAS!</h1>"
            . "<p>Te has registrado exitósamente!</p><br><a href=../paginas/login.php>Volver al login</a>";            
        }else{
            echo "<h1>Error </h1>". "<p>No te hemos podido registrar debido a un error de sistema.</p>";                       
        }               
        exit();
    }else{
        echo "<h1>Error </h1>"
            . "<p>Ocurrieron los siguientes errores: <br/>";
            foreach($errores as $msg){
                echo " - $msg<br/>\n";                
            }
            echo "</p><p>Por favor, intente nuevamente</p>";
            
    }    
}
