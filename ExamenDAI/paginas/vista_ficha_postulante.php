<?php
include ('includes/header.php');
?>
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
                            <input type="text"  name="a_paterno">                            
                        </ul>
                        <ul>
                            <label for="a_materno">Apellido Materno:</label>
                            <input type="text" name="a_materno">        
                        </ul>
                        <ul>
                            <label for="fecha_nacimiento">Fecha Nacimiento</label>
                            <input type="text" name="fecha_nacimiento">        
                        </ul>
                        <ul>
                            <label for="sexo">Sexo:</label>
                            <input type="text" name="sexo">
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
                            <label for="cantidad_anios">Experiencia laboral:</label>
                            <input type="number" name="cantidad_anios">
                        </ul>
                        <ul>
                            <label for="modalidad">Modalidad:</label>
                            <input type="text" name="modalidad">
                        </ul>
                        <ul>
                            <label for="curso">Curso:</label>
                            <input type="text" name="curso">
                        </ul>
                    </li>
                </fieldset>
            <button class="" type="submit">Volver</button>            
           

<?php include ('includes/footer.php');
