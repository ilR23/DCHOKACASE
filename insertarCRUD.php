<?php
include("conexion.php");
$con=conectar();

$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$rut=$_POST['rut'];
$email=$_POST['email'];
$pass=$_POST['pass'];



$sql="INSERT INTO administracion VALUES('$usuario','$nombre','$rut','$email','$pass')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: gestion_usuario.php");
    
}else {
}
?>