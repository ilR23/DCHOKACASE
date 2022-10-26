<?php
include("conexion.php");


$buscar = $_POST['buscar'];

$SQL_READ = "SELECT * FROM administracion WHERE usuario LIKE '%".$buscar."%'";

$sql_query = mysqli_query($con,$SQL_READ);
?>