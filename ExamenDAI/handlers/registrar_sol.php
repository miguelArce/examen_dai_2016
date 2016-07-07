<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errores = array();

    if (empty($_POST['rut'])) {
        $errores[] = 'Olvidaste ingresar tu rut';
    } else {
        $nom = trim($_POST['rut']);
    }

    if (empty($_POST['nombre'])) {
        $errores[] = 'Olvidaste ingresar tu nombre';
    } else {
        $nom = trim($_POST['nombre']);
    }

    if (empty($_POST['a_paterno'])) {
        $errores[] = 'Olvidaste ingresar tu apellido paterno';
    } else {
        $ape = trim($_POST['a_paterno']);
    }

    if (empty($_POST['a_materno'])) {
        $errores[] = 'Olvidaste ingresar tu apellido materno';
    } else {
        $ape = trim($_POST['a_materno']);
    }

    if (empty($_POST['f_nacimiento'])) {
        $errores[] = 'Olvidaste ingresar tu apellido materno';
    } else {
        $f_nacimiento = trim($_POST['f_nacimiento']);
    }

    if (empty($_POST['sexo'])) {
        $errores[] = 'Olvidaste ingresar tu apellido materno';
    } else {
        $sexo = trim($_POST['sexo']);
    }

    if (empty($_POST['fono'])) {
        $errores[] = 'Olvidaste ingresar tu apellido materno';
    } else {
        $fono = trim($_POST['fono']);
    }

    if (empty($_POST['fono'])) {
        $errores[] = 'Olvidaste ingresar tu apellido materno';
    } else {
        $fono = trim($_POST['fono']);
    }

    if (empty($_POST['correo'])) {
        $errores[] = 'Olvidaste ingresar tu apellido materno';
    } else {
        $email = trim($_POST['correo']);
    }

    if (empty($_POST['nivel_educacional'])) {
        $errores[] = 'Olvidaste ingresar tu apellido materno';
    } else {
        $n_educacional = trim($_POST['nivel_educacional']);
    }

    if (!empty($_POST['pass'])) {
        if ($_POST['pass'] != $_POST['re_pass']) {
            $errores[] = 'La contraseña no coincide';
        } else {
            $p = trim($_POST['pass']);
        }
    } else {
        $errores[] = 'Olvidaste ingresar tu contraseña';
    }
    if (empty($errores)) {
        include ('../dao/postulantedaoimplementado.php');

        $nuevoAutor = new \dto\Solicitud();
        $nuevoAutor->setRut($rut);
        $nuevoAutor->setNombre($nombre);
        $nuevoAutor->setApellido_paterno($apellido_paterno);
        $nuevoAutor->setApellido_materno($apellido_materno);
        $nuevoAutor->setF_nacimiento($f_nacimiento);
        $nuevoAutor->setSexo($sexo);
        $nuevoAutor->setFono($fono);
        $nuevoAutor->setNivel_educacional($nivel_educacional);
        $nuevoAutor->setE_mail($e_mail);
        $nuevoAutor->setDireccion($direccion);
        $nuevoAutor->setComuna($comuna);
        $nuevoAutor->setExperiencia_laboral($experiencia_laboral);
        $nuevoAutor->setPass($pass);

        $autor = new \dao\SolicitudDaoImplementado();
        $res = $autor->ingresarPostulacion($postulacion);
        if ($res) {
            echo "<h1>GRACIAS!</h1>"
            . "<p>Te has registrado exitósamente!</p><br><a href=login.php>Volver al login</a>";
        } else {
            echo "<h1>Error </h1>" . "<p>No te hemos podido registrar debido a un error de sistema.</p>";
        }
        include ('includes/footer.html');
        exit();
    } else {
        echo "<h1>Error </h1>"
        . "<p>Ocurrieron los siguientes errores: <br/>";
        foreach ($errores as $msg) {
            echo " - $msg<br/>\n";
        }
        echo "</p><p>Por favor, intente nuevamente</p>";
    }
}