
<?php
include ('includes/header.php');
?>

<form class="contact_form">
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
                <label for="cantidad_anios">Años experiencia:</label>
                <input type="number" required name="cantidad_anios">
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


<?php
include ('includes/footer.php');

