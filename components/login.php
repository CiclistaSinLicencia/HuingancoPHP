
<!-- -------------------------
          MODAL LOGIN
-------------------------- -->
<div class="login-wrapper">


<!-- FORM LOGIN -->


    <label for="login-close" class="login-label-close">
        </label>

        
        <div class="login-ctn">

        <div class="ctn-close-modal"> 
    <p class="txt-registro">Login</p> 
    <button class="btn-close-login" id="login-close">X</button>

  </div>
           <form action="" class="login-form" method="POST">
           <input class="login-input" placeholder="Usuario" type="text" name="user" id="usuario" required pattern="[a-zA-Z]{2,}"> 
         
          <input class="login-input" type="password" name="pass" 
            placeholder="Contraseña" required pattern="[a-zA-Z,0-9]{2,}">
       
           <input name="btnlogin" class="login-submit" type="submit" value="Ingresar">
           
  
        </form>
          <a href="" class="recover-pass">¿Olvidaste tu contraseña?</a>


          <a href="controlador/controlador_queryDatabase.php" class="recover-pass">ver lista completa de usuarios </a>
       
    
    
          <hr>
          <button class="btn-create-account">Crear cuenta</button>
         <p class="disclaimer"> No nos hacemos responsables por el uso, maluso o abuso de tus datos, todo lo que ingreses podria ser usado en tu contra, y lo hara. <br>
            si no lees este mensaje nos entregas el permiso de venderlo en 4chan
         </p>
         
        </div>
     

  

<!-- FORM REGISTRO -->
<div class="modal-create-account">

<div class="create-ctn">
<div class="ctn-close-modal"> 
    <p class="txt-registro">Registro</p> 
    <button class="close-modal" id="register-close">X</button>
  </div>


<form action="" method="POST" class="login-create-account">
  <input name="register-nombre" class="login-input" type="text" placeholder="Nombre" required pattern="[a-zA-Z]{2,}" required> 
  <input name="register-apellido" class="login-input" type="text" placeholder="apellido" pattern="[a-zA-Z]{2,}" required>
  <input name="register-usuario" class="login-input" type="text" placeholder="Usuario" pattern="[a-zA-Z,0-9]{2,}" required>
  <input name="register-email" class="login-input" type="text" placeholder="eMail" required>
  <input name="register-password" class="login-input" type="password" placeholder="Contraseña"required pattern="[a-zA-Z,0-9]{2,}">
  
  <input name="register-submit" class="login-submit" type="submit" value="Registrarte" name="registro">
</form>
</div>
<label for="register-close" class="register-label-close">
        </label>
</div>  

    </div>
