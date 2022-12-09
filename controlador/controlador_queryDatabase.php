<?php
include ("../modelo/conexion.php");


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
<link rel='stylesheet' href='../style/style.css'>
<link rel='stylesheet' href='../style/loginStyle.css?v1'>
<script defer src='script.js'> </script>
</head>
<body>
<div class="admin-wrapper">
<a href="../login.php" class="bdd-btn-regreso">Volver</a>
    <h1 class="bdd-title">Base de datos Usuarios</h1>
    <div class='bdd-grid-wrapper'>
<?php

if (mysqli_num_rows($result) > 0) {
    while($fila = mysqli_fetch_assoc($result)){
        
        echo "<div class='bdd-grid-ctn'>";
        echo 'ID: '.'<span class="color-id">'. $fila["ID"]. '</span>' ."<br>";
        echo 'Nombre: '.'<span class="color-text">'. $fila["nombre"]. '</span>'."<br>";
        echo 'Apellido: ' .'<span class="color-text">'. $fila["apellido"]. '</span>'."<br>";
        echo 'eMail: ' .'<span class="color-text">'. $fila["mail"]. '</span>'."<br>";
        echo 'Usuario: ' .'<span class="color-text">'. $fila["usuario"]. '</span>'."<br>";
        echo 'Password: ' .'<span class="color-text">'. $fila["clave"]. '</span>'."<br>";
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