<?php
session_start();
include("conexion.php");
$con=conectar();

$email=$_POST['email'];
$pass=$_POST['pass'];
$nombre=$_POST['nombre'];

$_SESSION['email']=$email;
$_SESSION['pass']=$pass;
$_SESSION['nombre']=$nombre;

$validar_login= mysqli_query($con,"SELECT * FROM administracion WHERE email='$email' and pass='$pass'");

if(mysqli_num_rows($validar_login) > 0){
    $nombre=$_POST['nombre'];
    $_SESSION['nombre']=$nombre;
    Header("Location: index.php");
    exit;
    
}else {
    echo '
        <script>
            alert("Usuario no existe, por favor verifique los datos introducidos");
            window.location= "login.php";
        </script>
    ';
    exit;
}
?>