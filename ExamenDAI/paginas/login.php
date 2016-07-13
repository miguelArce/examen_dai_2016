<?php ?>

<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Ingreso</title>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>        
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <div class="container" id="login_usuario" >
            <div class="login">
                <h1 class="login-heading">
                    <strong>Bienvenido</strong>, ingrese sus datos.</h1>
                <form method="post" action="../handlers/proc_login_postulante.php">
                    <input type="text" name="rut" placeholder="Rut" required="required" class="input-txt" />
                    <input type="password" name="pass" placeholder="Password" required="required" class="input-txt" />
                    <div class="login-footer">
                        <a id="post_to_ejec" href="#" class="lnk">
                            <span class="icon icon--min">ಠ╭╮ಠ</span> 
                            Soy ejecutivo
                        </a>|
                        <a id="post_to_reg" href="#" class="lnk">
                            <span class="icon icon--min">(╯ರ ~ ರ）╯︵ ┻━┻</span> 
                            No tengo cuenta
                        </a>
                        <button type="submit" class="btn btn--right">Ingresar </button>

                    </div>
                </form>
            </div>
        </div>
        
        <div id="login_ejecutivo" hidden class="container">
            <div class="login">
                <h1 class="login-heading">
                    <strong>Bienvenido</strong>, ingrese sus datos.</h1>
                <form method="post" action="../handlers/proc_login_ejecutivo.php">
                    <input type="text" name="rut" placeholder="Rut" required="required" class="input-txt" />
                    <input type="password" name="pass" placeholder="Password" required="required" class="input-txt" />
                    <div class="login-footer">
                        <a id="ejec_to_post" href="#" class="lnk">
                            <span class="icon icon--min">¯\(ツ)/¯</span> 
                            Soy postulante
                        </a>            
                        <button type="submit" class="btn btn--right">Ingresar</button>

                    </div>
                </form>
            </div>
        </div>
        
        <div id="registro_postulante" hidden class="container">
            <div class="login">
                <h1 class="login-heading">
                    <strong>Formulario de registro</strong>, ingrese sus datos.</h1>
                <form method="post" action="../handlers/registro_postulante.php">        
                    <input type="text" name="rut" placeholder='rut' required="required" class="input-txt">
                    <input type="text" name="nombre" placeholder="nombre" required="required" class="input-txt">
                    <input type="text" name="a_paterno" placeholder="apellido paterno" required="required" class="input-txt">
                    <input type="text" name="a_materno"placeholder="apellido materno" required="required" class="input-txt">
                    <input type="password" name="pass" placeholder="contraseña" required="required" class="input-txt">
                    <input type="password" name="re_pass" placeholder="repetir contraseña" required="required" class="input-txt">
                    <div class="login-footer">                        
                        <a id="volver" href="#" class="lnk">
                            <span class="icon icon--min">(╯ರ ~ ರ）╯︵ ┻━┻</span> 
                            Volver
                        </a>
                        <button type="submit" class="btn btn--right">Registrar cuenta </button>

                    </div>
                </form>
            </div>
        </div>
        
        <script src="js/login.js"></script>  
    </body>
</html>
