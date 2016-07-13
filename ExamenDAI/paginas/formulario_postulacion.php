
<?php
include ('includes/header.php');
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

?>

<form action="formulario_postulacion.php" class="contact_form">
    <h1>Formulario de registro</h1>
        <li>
            <ul>
                <label for="rut">RUT:</label>
                <input type="text" required name="rut">
            </ul>
            <ul>
                <label for="nombre">Nombre:</label>
                <input type="text"  required name="nombre">
            </ul>
            <ul>
                <label for="a_paterno">Apellido Paterno:</label>
                <input type="text" required name="a_paterno">                            
            </ul>
            <ul>
                <label for="a_materno">Apellido Materno:</label>
                <input type="text" required name="a_materno">        
            </ul>
            <ul>
                <label for="fecha_nacimiento">Fecha Nacimiento</label>
                <input type="date" required name="fecha_nacimiento">        
            </ul>
            <ul>
                <label for="sexo">Sexo:</label>
                <input id="radio" type="radio" name="sexo" value="M">M
                <input id="radio" type="radio" name="sexo" value="F">F       
            </ul>
            <ul>
                <label for="fono">Teléfono:</label>
                <input type="text" required name="fono">
            </ul>
            <ul>
                <label for="correo">Correo:</label>
                <input type="text" required name="correo">
            </ul>
            <ul>
                <label for="direccion">Dirección:</label>
                <input type="text" required name="direccion">
            </ul>
            <ul>
                <label for="comuna">Comuna:</label>
                <input type="text" required name="comuna">
            </ul>
            <ul>
                <label for="educacion">Educación:</label>
                <input type="text" required name="educacion">
            </ul>
            <ul>
                <input id="cajita" type="checkbox" name="exp" value="si">¿Posee experiencia en el área de la programación?
            </ul>
            <ul>
                <div id="exp" hidden>
                    <label for="cantidad_anios">Años experiencia:</label>
                    <input id="tiempo" type="number" name="cantidad_anios">
                </div>                
            </ul>

            <ul>                
                <label for="modalidad">Modalidad:</label>
                <select required name="modalidad">
                    <option value="Diurno">Diurno</option>
                    <option value="Vespertino">Vespertino</option>
                </select>
            </ul>
            <ul>
                <label for="curso">Curso:</label>
                <select required name="curso">
                    <option value="c-sharp">C#</option>
                    <option value="java">Java</option>
                    <option value="php">PHP</option>
                </select>
            </ul>

        </li>
    <button class="" type="submit">Registrar!</button>
</form>

<<script>
    $('#cajita').click(function() {
    if( $(this).is(':checked')) {
        $("#exp").show("fast");
    } else {
        $("#exp").hide("fast");
        $("#tiempo").val("0");
    }
}); 
</script>

<?php
include ('includes/footer.php');

