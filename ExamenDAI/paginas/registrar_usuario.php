<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Ingreso</title>
    
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">  
    
  </head>
                   
  <body>

    <div class="container">
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
             <a href="login_ejecutivo.php" class="lnk">
              <span class="icon icon--min">ಠ╭╮ಠ</span> 
              Soy ejecutivo
            </a>|
            <a href="login.php" class="lnk">
              <span class="icon icon--min">(╯ರ ~ ರ）╯︵ ┻━┻</span> 
              Volver
            </a>
            <button type="submit" class="btn btn--right">Registrar cuenta </button>
    
          </div>
      </form>
  </div>
</div>
    
        <script src="js/index.js"></script>  
    
    
  </body>
</html>

