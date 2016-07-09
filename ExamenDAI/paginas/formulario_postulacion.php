
<?php
include ('includes/header.php');
?>

            <form class="contact_form">
                <fieldset action ="../handlers/registrar_sol.php" method="post" name="registro_usuario">
                    <legend>Formulario de registro</legend>
                    <li>
                        <ul>
                            <label for="rut">RUT:</label>
                            <input type="text" name="rut">
                        </ul>
                        <ul>
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="nombre">
                        </ul>
                        <ul>
                            <label for="a_paterno">Apellido Paterno:</label>
                            <input type="text" name="a_paterno">                            
                        </ul>
                        <ul>
                            <label for="a_materno">Apellido Materno:</label>
                            <input type="text" name="a_materno">        
                        </ul>
                        <ul>
                            <label for="fecha_nacimiento">Fecha Nacimiento</label>
                            <input type="date" name="fecha_nacimiento">        
                        </ul>
                        <ul>
                            <label for="sexo">Sexo:</label>
                            <input id="radio" type="radio" name="sexo" value="M">M
                            <input id="radio" type="radio" name="sexo" value="F">F       
                        </ul>
                        <ul>
                            <label for="fono">Teléfono:</label>
                            <input type="text" name="fono">
                        </ul>
                        <ul>
                            <label for="correo">Correo:</label>
                            <input type="text" name="correo">
                        </ul>
                        <ul>
                            <label for="direccion">Dirección:</label>
                            <input type="text" name="direccion">
                        </ul>
                        <ul>
                            <label for="comuna">Comuna:</label>
                            <input type="text" name="comuna">
                        </ul>
                        <ul>
                            <label for="educacion">Educación:</label>
                            <input type="text" name="educacion">
                        </ul>
                        <ul>
                            <input id="cajita" type="checkbox" name="exp" value="si">¿Posee experiencia en el área de la programación?
                        </ul>
                        <ul>
                            <label for="cantidad_anios">Ingrese cantidad de años:</label>
                            <input type="number" name="cantidad_anios">
                        </ul>
                        <fieldset>
                            <legend>Modalidad y curso al que postula</legend>
                            <ul>
                                <label for="modalidad">Modalidad:</label>
                                <input type="text" name="modalidad">
                            </ul>
                            <ul>
                                <label for="curso">Curso:</label>
                                <input type="text" name="curso">
                            </ul>
                        </fieldset>
                        
                    </li>
                </fieldset>
                <button class="" type="submit">Registrar!</button>
            </form>
           

<?php include ('includes/footer.php');

