<?php
/* detecta si se presiona el btn login */


if(!empty($_POST["btnlogin"])) {

    /* validar si ingreso nombre usuario y contraseña */
    
    if(!empty($_POST["user"]) && !empty($_POST["pass"])){
        /* si el usuario es valido se almacena en una variable */
        $usuario = $_POST['user'];
        $password = $_POST['pass'];

        /* crea una query para ver si el usuario esta en la base de datos */ 
        
        $sql = $conexion->query("select * from usuarios where usuario='$usuario' && clave='$password' ");

/* si el usuario existe ir a home */
        if($datos=$sql->fetch_object())
        {header("Location: index.php");  
            $_SESSION["id"]=$datos->id;
            $_SESSION["nombre"]=$datos->nombre;
            $_SESSION["apellido"]=$datos->apellido;  
        }
        else{
            echo "<p class='error-msj' > Nombre o contraseña incorrecta</p>";
        }
    }
    else{
        echo "ingresa clave y usuario";
    }
}


