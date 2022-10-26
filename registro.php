<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM administracion";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DChokaCase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">

    <title>Confirmación de envío de registro</title>
    <script language="JavaScript">
    function pregunta(){
        if (confirm('¿Estas seguro de enviar este registro?')){
        document.tuformulario.submit()
        }
    }
    </script>
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

    <!--========================================================== -->
                        <!-- FORM -->
    <!--========================================================== -->

    <div class="container w-75 shadow rounded" id="lg">
        <div class="row">
            <div class="col bg">
                
            </div>
            <div class="col">
                <div class="text-end mt-3">
                    <img src="img/schka.png" width="100" height="40" alt="chokl">
                </div>
                <h2 class="fw-bold text-center py-5">Registro</h2>

                <form action="insertar.php" method="POST">
                    <div class="mb-4">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input placeholder="Ingrese su Usuario" required type="text" class="form-control" name="usuario">
                    </div>
                    <div class="mb-4">
                        <label for="nombre" class="form-label">Nombre y Apellido</label>
                        <input required type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre y apellido" >
                    </div>
                    <div class="mb-4">
                        <label for="rut" class="form-label">RUT</label>
                        <input required type="text" class="form-control" name="rut" placeholder="Ingrese su RUT" >
                    </div>
                    <div class="mb-4">
                        <label for="direccion" class="form-label">Direccion</label>
                        <input required type="text" class="form-control" name="direccion" placeholder="Ingrese su direccion" >
                    </div>
                    <div class="mb-4">
                        <label for="hm" class="form-label">Genero</label>
                        <p>
                            <input type="radio" name="hm" value="hombre"> Hombre
                            <input type="radio" name="hm" value="mujer"> Mujer
                            <input type="radio" name="hm" value="no especifica"> No especifica
                        </p>
                    </div>

                    <div class="mb-4">
                        <label for="nacimiento" class="form-label">Fecha de nacimiento</label>
                        <input required type="date" class="form-control" name="nacimiento" >
                    </div>

                    <div class="mb-4">
                        <label for="edad" class="form-label">Edad</label>
                        <input required type="number" min="0" max="100" class="form-control" name="edad" >
                    </div>
                    
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input required type="email" class="form-control" name="email"  placeholder="Ingrese su correo electrónico" >
                    </div>
                    <div class="mb-4">
                        <label for="pass" class="form-label">Password</label>
                        <input required type="password" class="form-control" name="pass" placeholder="Ingrese su contraseña" >
                    </div>
                    <div class="mb-4">
                        <input type="checkbox" name="connected" class="form-check-input">
                        <label for="connected" class="form-check-label">Estoy de acuerdo con los <a href="#">Terminos y Condiciones</a></label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" onclick="pregunta()" class="btn btn-ini">Registrarse</button>
                    </div>
                    <div class="my-3">
                        <span>¿Tienes cuenta? <a href="login.php">Inicia sesión aqui</a></span><br>
                    </div>
                </form>

                

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

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