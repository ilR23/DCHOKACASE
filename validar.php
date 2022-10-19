<?php
include("conexion.php");
$con=conectar();

$email=$_POST['email'];
$pass=$_POST['pass'];

$validar_login= mysqli_query($con,"SELECT * FROM administracion WHERE email='$email' and pass='$pass'");

if(mysqli_num_rows($validar_login) > 0){
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