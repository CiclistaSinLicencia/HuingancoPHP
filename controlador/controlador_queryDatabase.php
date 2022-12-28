<?php
include ("../modelo/conexion.php");
include "../controlador/controlador_deleteUser.php";

$queryAll  = "SELECT * from usuarios";
$result = mysqli_query($conexion,$queryAll);
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<!-- ---- -->
<title></title>
<meta name='description'content='Descripcion'>
<meta name='author' content='oneDev'>
<meta name='Robots' content='no-index'> <!-- Evitar Indexasion -->
<link rel='stylesheet' href='../style/global.css'>
<link rel='stylesheet' href='../style/userList.css?b'>
<script defer src='script.js'> </script>
</head>
<body class="userlist-background">


<div class="admin-wrapper">
<a href="../index.php" class="bdd-btn-regreso">Regresar</a>
    <h1 class="bdd-title">Base de datos Usuarios</h1>



    <div class="delete-user-wrapper">

<form action="" method="POST">
<input name="deleteuser" class="delete-user-input" type="text" placeholder="Usuario" required>
<input name="deletepassword" class="delete-user-input" type="text" placeholder="Contraseña" required>
<input value="Eliminar usuario" type="submit" name="btndelete" class="delete-user-btn"></input>
</form>


</div>

    <div class='bdd-grid-wrapper'>

    <div class='bdd-grid-ctn'> 
        <span class="color-id">ID</span>
    <span class="color-id">Nombre</span>
    <span class="color-id">Apellido</span>
    <span class="color-id">Usuario</span>
    <span class="color-id">Email</span>
</div>
   
<?php

if (mysqli_num_rows($result) > 0) {
    while($fila = mysqli_fetch_assoc($result)){
     
        echo "<div class='bdd-grid-ctn'>";

        echo '<span class="color-id">'. $fila["ID"]. '</span>';
        echo '<span class="color-text">'. $fila["nombre"]. '</span>';
        echo '<span class="color-text">'. $fila["apellido"]. '</span>';
        echo '<span class="color-text">'. $fila["usuario"]. '</span>';
        echo '<span class="color-text">'. $fila["mail"]. '</span>';

        echo "</div>";
       
    }   
} else {
    die("Error: No hay datos en la tabla seleccionada");
}

mysqli_close($conexion);
?>


</div>


</div>
</body>
</html>