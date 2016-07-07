<?php ?>

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
      <strong>Bienvenido</strong>, ingrese sus datos.</h1>
      <form method="post" action="../handlers/proc_login_ejecutivo.php">
        <input type="text" name="rut" placeholder="Rut" required="required" class="input-txt" />
          <input type="password" name="password" placeholder="Password" required="required" class="input-txt" />
          <div class="login-footer">
             <a href="login.php" class="lnk">
              <span class="icon icon--min">¯\(ツ)/¯</span> 
              Soy postulante
            </a>            
            <button type="submit" class="btn btn--right">Ingresar </button>
    
          </div>
      </form>
  </div>
</div>
    
        <script src="js/index.js"></script>  
    
    
  </body>
</html>
