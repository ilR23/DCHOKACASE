<?php

include("conexion.php");
$con=conectar();

$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$rut=$_POST['rut'];
$email=$_POST['email'];
$pass=$_POST['pass'];

$sql="UPDATE administracion SET  usuario='$usuario',nombre='$nombre',email='$email',pass='$pass' WHERE rut='$rut'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: gestion_usuario.php");
    }
?>