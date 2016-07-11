<?php
include ('includes/header.php');
?>

<form action="consulta_estado.php" class="contact_form">
    <h1>Consulta estado postulación</h1>
        <li>
            <ul>
                <label for="id_postulacion">Id. Postulación:</label>
                <input type="text" required name="id_postulacion">
            </ul>
            
        </li>
    <button class="" type="submit">Consultar</button>
</form>


<?php


include ('includes/footer.php');
    