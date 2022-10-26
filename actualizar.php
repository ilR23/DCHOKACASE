<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM administracion WHERE rut='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">

                                <input type="hidden" name="rut" value="<?php echo $row['rut']  ?>">

                                <input placeholder="Ingrese su Usuario" required type="text" class="form-control mb-3" name="usuario" value="<?php echo $row['usuario']  ?>">
                                <input required type="text" class="form-control mb-3" name="nombre" placeholder="Ingrese su nombre y apellido" value="<?php echo $row['nombre']  ?>">
                                <input required type="text" class="form-control mb-3" name="direccion" placeholder="Ingrese su direccion" value="<?php echo $row['direccion']  ?>">
                                <input required type="email" class="form-control mb-3" name="email"  placeholder="Ingrese su correo electrónico" value="<?php echo $row['email']  ?>">
                                <input required type="password" class="form-control mb-3" name="pass" placeholder="Ingrese su contraseña" value="<?php echo $row['pass']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>