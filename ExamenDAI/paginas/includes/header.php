<?php
session_start();
if(!isset($_SESSION['tipo_sesion'])){    
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CertificaDev</title>
        <link rel="stylesheet" type="text/css" href="./css/estilo.css">
		<link rel="icon" type="image/png" href="./imgs/favicon.ico">
		<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>        
    </head> 
    <body id="cuerpo" class="home">
        <header id="banner" class="body">
            <h1><a href="#">CertificaDev<br><strong>Institución educacional</ins></strong></a></h1>
 
			<nav>
				<ul>					
					<li><a href="formulario_postulante">Postular</a></li>	
					<li><a href="">Consultar por postulación</a></li>
				<li>
                        <?php
                        if($_SESSION['tipo_sesion']==='ejecutivo'){
                            echo "<a href='buscador_solicitudes.php'>Buscar postulacion </a>";                                                                                                    
                        }
                        ?>
                                </li>    
                                <li><?php echo $_SESSION['nombre']; ?><a href='logout.php'> Cerrar sesión </a></li>                                                                
				</ul>
			</nav>
        </header>

        <article id="featured" class="body">