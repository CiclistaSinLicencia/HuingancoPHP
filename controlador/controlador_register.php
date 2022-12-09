 <?php
 include ("modelo/conexion.php");

 /* console.log */


 if (isset($_POST["register-submit"])) {

        $regname = $_POST ['register-nombre'];
        $regLastname = $_POST ['register-apellido'];
        $regUser = $_POST ['register-usuario'];
        $regMail = $_POST ['register-email'];
        $regPass = $_POST ['register-password'];
        $regSubmit = $_POST ['register-submit'];


        /* detectar duplicado */
       $duplicatesQuery = $conexion->query( "SELECT clave,usuario,mail FROM usuarios WHERE usuario = '$regUser' || clave = '$regPass' ||  mail = '$regMail' ");

if($duplicatesQuery->fetch_object()){
 
    echo "<p class='error-msj'> Datos repetidos </p>"; 
}
else{
    $query = "INSERT INTO usuarios (nombre,apellido,usuario,clave,mail)
     VALUES('$regname','$regLastname','$regUser','$regPass','$regMail')";
  
  $resultado = mysqli_query($conexion,$query);
        if(!$resultado){
            die("query fail");
        }
        echo "<p class='msj-registro' > Gracias por registrarte! ya podes logearte</p>"; 
}
    
}



/*  $regname,$regLastname,$regUser,$regPass,$regMail  */


/*para hacer un pasword hash
 $hashpass = password_hash($regPass, PASSWORD_DEFAULT); */