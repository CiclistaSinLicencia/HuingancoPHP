<?php
 include ("../modelo/conexion.php");

 
 
    if(!empty($_POST["deleteuser"]) && !empty($_POST["deletepassword"])){
   
        $deleteUsuario = $_POST['deleteuser'];
        $deletePassword = $_POST['deletepassword'];

        $sqlDelete = $conexion->query("SELECT * from usuarios where usuario='$deleteUsuario' && clave='$deletePassword' ");

        if($sqlDelete->fetch_object())
        { 
            $sqlDelete = $conexion->query("DELETE FROM usuarios where usuario = '$deleteUsuario' && clave='$deletePassword'");
            echo 'usuario eliminado';

        }
        else{
            echo "<p class='error-msj' > Nombre o contraseña incorrecta</p>";
        }
    }
?>