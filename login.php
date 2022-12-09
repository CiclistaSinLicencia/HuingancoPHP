<?php
session_start();
include "modelo/conexion.php";
include "controlador/controlador_login.php";
include "controlador/controlador_register.php";

?>
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<!-- ---- -->
<title>Huinganco login</title>
<meta name='description'content='Descripcion'>
<meta name='author' content='oneDev'>
<meta name='Robots' content='no-index'> <!-- Evitar Indexasion -->

<link rel="stylesheet" href="style/style.css?v2">
<link rel='stylesheet' href='style/loginStyle.css?v6'>
<script defer src="script/loginScript.js"></script>
<script defer src="script/script.js"></script>

</head>
<body>
<?php
include "components/header.php";
?>
<div class="login-wrapper">
<img class="login-background" src="img/Banner.webp" alt="">


<!-- FORM REGISTRO -->
<div class="modal-create-account">
<form action="" method="POST" class="form-create-account">
  <div class="ctn-close-modal"> 
    <p class="txt-registro">Registro</p> 
    <button class="close-modal">X</button>
  </div>

  <input name="register-nombre" class="form-input" type="text" placeholder="Nombre" required pattern="[a-zA-Z]{2,}" required> 
  <input name="register-apellido" class="form-input" type="text" placeholder="apellido" pattern="[a-zA-Z]{2,}" required>
  <input name="register-usuario" class="form-input" type="text" placeholder="Usuario" pattern="[a-zA-Z,0-9]{2,}" required>
  <input name="register-email" class="form-input" type="text" placeholder="eMail" required>
  <input name="register-password" class="form-input" type="password" placeholder="Contraseña"required pattern="[a-zA-Z,0-9]{2,}">
  
  <input name="register-submit" class="form-submit" type="submit" value="Registrarte" name="registro">
</form>
</div>  

<!-- FORM LOGIN -->
    <div class="form-wrapper">
  
        <div class="form-ctn" >
           <form action=""  class="form-login-ctn" method="POST">
        
           <input class="form-input" placeholder="Usuario" type="text" name="user" id="usuario" required pattern="[a-zA-Z]{2,}"> 
         
          <input class="form-input" type="password" name="pass" 
            placeholder="Contraseña" required pattern="[a-zA-Z,0-9]{2,}">
       
           <input name="btnlogin" class="form-submit" type="submit" value="Ingresar">
           
           <?php
/* llama al logout / login / conexion */

/* include "controlador/controlador_logOut.php";   */
?>
  
        </form>
          <a href="" class="recover-pass">¿Olvidaste tu contraseña?</a>


          <a href="controlador/controlador_queryDatabase.php" class="recover-pass">ver lista completa de usuarios </a>
       
    
    
          <hr>
          <button class="btn-create-account">  Crear cuenta nueva </button>
         <p class="disclaimer"> No nos hacemos responsables por el uso, maluso o abuso de tus datos, todo lo que ingreses podria ser usado en tu contra, y lo hara. <br>
            si no lees este mensaje nos entregas el permiso de venderlo en 4chan
         </p>
         
        </div>
    </div>
    </div>


</body>
</html>