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

$sql="UPDATE administracion SET  usuario='$usuario',nombre='$nombre',email='$email',direccion='$direccion',pass='$pass' WHERE rut='$rut'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: gestion_usuario.php");
    }
?>