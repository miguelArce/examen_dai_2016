<?php  
include('includes/header.php');    
    echo "<h2>Listado de postulaciones</h2><br>";
    //TO DO: esto debe ser separado en dos acciones distintas
    $instancia = new SolicitudDaoImplementado();
    
    $resultado = $instancia->listarPostulacionesPorRutPostulante($rut_postulante);
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
        echo "<p>no hay proyectos por asignar</p>";
    }
include('includes/footer.php');
