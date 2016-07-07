<?php
require ('includes/header.html');

if(!isset($_SESSION['rut'])){
    header ('Location: login.php');
}else{    
    if($_SERVER['REQUEST_METHOD']=='POST'){
    $errores = array();
    
    if(empty($_POST['id_solicitud'])){
        $errores[]  = 'Olvidaste ingresar el id de tu solicitud';
    }else{
        $nom_proye = trim($_POST['id_solicitud']);
    }    
    
    if(empty($errores)){
        
        $nuevoAcceso = new \dao\SolicitudDaoImplementado();
        $resultado = $nuevoAcceso->revisarEstado();
        
        if($res){
            echo "<h1>FELICIDADES!</h1>"
            . "<p>Se ha agregado con éxito el proyecto a la base de datos</p>";
        }else{
            echo "<h1>Error </h1>"
            . "<p>No se ha logrado crear el proyecto debido a un error de sistema.</p>";
        }       
        include ('includes/footer.html');
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
?>
<form method="post" action="crearProyecto.php">
    <h1>Crear nuevo proyecto</h1>
    <table>
        <tr>
            <td>Nombre proyecto</td>
            <td><input type="text" name="nombre_proj" size="20" required /> </td>
        </tr>
    
        <tr>
            <td></td>
            <td><input type="submit" name="enviar" text="Crear" /></td>
        </tr>
    </table>
</form>
<?php include ('includes/footer.html');


}
