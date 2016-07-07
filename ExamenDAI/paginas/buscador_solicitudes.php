<?php
include ('includes/header.php');

?>
            <h1>Buscador de solicitudes</h1>

                <form action="" method="POST" class="contact_form">              
                <fieldset>
                    <legend>Búsqueda por RUT</legend>
                    <label for="rut">RUT:</label>
                    <input name="rut" type="text">
                    <button type="submit">Buscar</button>
                </fieldset>                    
                </form>

                <form action="" method="POST" class="contact_form">
                
                <fieldset>
                    <legend>Buscador de Fecha</legend>
                    <label for="fecha_desde">Desde:</label>
                    <input name="fecha_desde" type="date">
                    <br>
                    <label for="fecha_hasta">Hasta:</label>
                    <input name="fecha_hasta" type="date">
                    <button type="submit">Buscar</button>
                </fieldset>
                    
                </form>
           

<?php include ('includes/footer.php');
