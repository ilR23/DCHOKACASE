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
                        <!-- CAROUSEL DE IMAGENES-->
    <!--========================================================== -->
   
    <div id="carousel" class="mt-5 carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3000">
            <img src="Img/Sobre Nosotros  2.png" height="380px" class="d-block w-100" alt="">
          </div>
 
        </div>
      
    </div>
    

    <!--========================================================== -->
                        <!-- Nosotros -->
    <!--========================================================== -->
    <div class="container w-75 shadow rounded" id="lg">
        <div class="row">
            <div class="col nosotros">
                <h2 class="fw-bold text-center  py-5"><img src="img/schka.png" width="200" height="80" alt="chokl"></h2>
                <h2 class="fw-bold m-lg-3 p-3" id="creador">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</h2>
                <h2 class="fw-bold m-lg-3 p-3" id="creador">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</h2>


            </div>
        </div>
    </div>
    <div class="container w-75 shadow rounded" id="lg">
        <div class="row">
            <div class="col nosotros">
                <div class=" mt-3">
                    <img src="img/schka.png" width="100" height="40" alt="chokl">
                </div>
                <h2 class="fw-bold text-center  py-1">Creador</h2>
                <h2 class="fw-bold m-lg-3 p-3" id="creador">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</h2>

            </div>
            <div class="col nosotros imc">
                
            </div>
        </div>
    </div>
    <div class="container w-75 shadow rounded" id="lg">
        <div class="row">
            <div class="col nosotros imd">
                
            </div>
            <div class="col nosotros align-items-center">
                <div class="text-end mt-3">
                    <img src="img/schka.png" width="100" height="40" alt="chokl">
                </div>
                <h2 class="fw-bold text-center  py-1">Desarrolador</h2>
                <h2 class="fw-bold m-lg-3 p-3" id="creador">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</h2>
                
    
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