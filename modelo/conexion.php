<?php

$servername = "localhost";
$username = "root"; /* usuario de la db */
$password = ""; /* pass de la data */
$database = "usuarios"; /* nombre dabase */

$conexion = new mysqli($servername, $username, $password, $database);
$conexion ->set_charset("utf8"); 

if($conexion === false){
    die("ERROR: No se pudo conectar. "
        . mysqli_connect_error());
}
?>