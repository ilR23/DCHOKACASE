<?php
// Datos admin SQL
function conectar(){
    $host="localhost";
    $user="root";
    $pass="Pele2310";
    $bd="dchokacase";

// Crear conexión
    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>