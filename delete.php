<?php

include("conexion.php");
$con=conectar();

$rut=$_GET['id'];

$sql="DELETE FROM administracion  WHERE rut='$rut'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: gestion_usuario.php");
    }
?>
