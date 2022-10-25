<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM administracion";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA CRUD</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="styles.css">
        
    </head>
    <body>

        <!--========================================================== -->
                        <!-- NAV -->
        <!--========================================================== -->

        <nav  class="navbar fixed-top navbar-expand-lg  p-3" style="background-color: #FFFFFF;" id="menu">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="Img/schka.png" alt="" width="100" height="40">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-sample" type="submit">Buscar</button>
                    </form>
                </div>

            </div>
        </nav>

        <div class="container" id="lg">
                <div class="row"> 
                    <div class="col">
                        <h1>Ingrese datos</h1>
                            <form action="insertarCRUD.php" method="POST">

                                <input placeholder="Ingrese su Usuario" required type="text" class="form-control mb-3" name="usuario">
                                <input required type="text" class="form-control mb-3" name="nombre" placeholder="Ingrese su nombre y apellido" >
                                <input required type="text" class="form-control mb-3" name="rut" placeholder="Ingrese su RUT" >
                                <input required type="text" class="form-control mb-3" name="direccion" placeholder="Ingrese su direccion" >
                                <p>Sexo: <br>
                                    <input type="radio" name="hm" value="hombre"> Hombre
                                    <input type="radio" name="hm" value="mujer"> Mujer
                                    <input type="radio" name="hm" value="no especifica"> No especifica
                                </p>
                                <p>Fecha nacimiento: <br>
                                    <input required type="date" class="form-control" name="nacimiento" >
                                </p>
                                <input required type="number" min="0" max="100" class="form-control mb-3" name="edad" >
                                <input required type="email" class="form-control mb-3" name="email"  placeholder="Ingrese su correo electrónico" >
                                <input required type="password" class="form-control mb-3" name="pass" placeholder="Ingrese su contraseña" >
                                
                                <input type="submit" class="mb-4 btn btn-ini">
                            </form>
                    </div>

                    <div class="col">
                        <table class="table" >
                            <thead class="table-warning table-striped">
                                <tr>
                                    <th>Usuario</th>
                                    <th>Nombre</th>
                                    <th>RUT</th>
                                    <th>Direccion</th>
                                    <th>Genero</th>
                                    <th>Nacimiento</th>
                                    <th>Edad</th>
                                    <th>Correo</th>
                                    <th>Password</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                    <?php
                                        while($row=mysqli_fetch_array($query)){
                                    ?>
                                        <tr>
                                            <th><?php  echo $row['usuario']?></th>
                                            <th><?php  echo $row['nombre']?></th>
                                            <th><?php  echo $row['rut']?></th>
                                            <th><?php  echo $row['direccion']?></th>
                                            <th><?php  echo $row['hm']?></th>
                                            <th><?php  echo $row['nacimiento']?></th>
                                            <th><?php  echo $row['edad']?></th>
                                            <th><?php  echo $row['email']?></th>
                                            <th><?php  echo $row['pass']?></th>    
                                            <th><a href="actualizar.php?id=<?php echo $row['rut'] ?>" class="btn btn-info">Editar</a></th>
                                            <th><a href="delete.php?id=<?php echo $row['rut'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                        </tr>
                                    <?php 
                                        }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>
    <!--========================================================== -->
                            <!--FOOTER-->
    <!--========================================================== -->


    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="bi bi-facebook"></i></a>
        
            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="bi bi-twitter"></i
            ></a>
        
            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="bi bi-google"></i
            ></a>
        
            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="bi bi-instagram"></i
            ></a>
        
            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="bi bi-linkedin"></i></a>
        
            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="bi bi-github"></i
            ></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
        
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <p class=" px-3 pt-3">DChokaCase &copy; Todos Los Derechos Reservados 2022</p>
        </div>
        <!-- Copyright -->
    </footer>
    </body>
</html>