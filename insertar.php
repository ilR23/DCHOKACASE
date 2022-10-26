<?php
include("conexion.php");
$con=conectar();

$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$rut=$_POST['rut'];
$direccion=$_POST['direccion'];
$hm=$_POST['hm'];
$nacimiento=$_POST['nacimiento'];
$edad=$_POST['edad'];
$email=$_POST['email'];
$pass=$_POST['pass'];



$sql="INSERT INTO administracion VALUES('$usuario','$nombre','$rut','$direccion','$hm','$nacimiento','$edad','$email','$pass')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: login.php");
    
}else {
}
?>