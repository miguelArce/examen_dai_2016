<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){
    
    session_start();    
    include ('../dao/SolicitudDaoImplementado.php'); 
    $rut = $_POST['rut'];
    $solicitud = new SolicitudDaoImplementado();
    
    $resultado = $instancia->listarPostulacionesPorRangoFecha($fecha_desde, $fecha_hasta);
    
    if(!empty($resultado)){
        echo "<table border='1'>\n";
        echo  "<tr><td>Rut</td>"
                . "<td>Nombre postulante</td>"
                . "<td>Estado</td>"
                . "<td>Acciones</td>"
                . "</tr>";
        foreach ($resultado as $item) {
            echo "<tr>\n";
            echo "    <td>" . ($item !== null ? htmlentities($item[0], ENT_QUOTES) : "&nbsp;") . "</td>\n";                
            echo "    <td>" . ($item !== null ? htmlentities($item[1], ENT_QUOTES) : "&nbsp;") . "</td>\n";                
            echo "    <td>" . ($item !== null ? htmlentities($item[2], ENT_QUOTES) : "&nbsp;") . "</td>\n";  
            //TO_DO: links con métodos GET para realizar solicitudes de acuerdo al parámetro, se debe poner un elemento anchor más la id de solicitud.
            echo "    <td><a href'#'>ver</a> / <a href='#'>editar</a> / <a href='#'>eliminar</a> </td>\n"; 
            echo "</tr>\n";            
        }
        echo "</table>\n";
    }else{
        echo "<p>no se han encontrado solicitudes</p>";
    }
}