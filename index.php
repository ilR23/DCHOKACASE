<?php 
    session_start();
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM administracion";
    $query=mysqli_query($con,$sql);

    
    echo $_SESSION['nombre'];
    echo $_SESSION['email'];
    echo $_SESSION['pass'];
    echo $_SESSION['usuario'];

    
    
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
                <div class="text-warning">
                    <img class="m-3" src="img/usuario.png" alt="usuario" width="30" height="20">
                    <?php echo $_SESSION['email']; ?>
                </div>
            </div>

        </div>
    </nav>
    <!--========================================================== -->
                        <!-- CAROUSEL DE IMAGENES-->
    <!--========================================================== -->
    
    <div id="carousel" class="mt-5 carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3000">
            <img src="Img/Banner_Carcasas_2520x630.webp" height="380px" class="d-block w-100" alt="">
          </div>
          
          <div class="carousel-item" data-bs-interval="3000">
            <img src="Img/imgbanner2.jpg" class="d-block w-100" alt="...">
          </div>
 

          <div class="carousel-item" data-bs-interval="3000">
            <img src="Img/banner3.jpg" class="d-block w-100" height="380px" alt="...">
          </div>
 
 
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <!--========================================================== -->
                        <!-- INTRODUCCION-->
    <!--========================================================== -->


    <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro">
        <h1 class="p-3 fs-2 border-top border-3">Personaliza tus carcasas en <span class="colorletra">DChokaCase</span></h1>
         <p class="p-3  fs-4">
            <span class="colorletra">DChokaCase</span> es donde donde te ayudamos a que tengas tu carcasa favorita        
         </p>  
         <?php  echo $_SESSION['nombre'];
                echo $_SESSION['email'];
                echo $_SESSION['pass'];
                echo $_SESSION['usuario']; 
        ?> 
    </section>
    
    <!--========================================================== -->
                        <!-- TIPOS DE SERVICIOS-->
    <!--========================================================== -->
    
    
    <section class="shadow p-3 mb-5 rounded">

        <div class="container">
            <div class="row justify-content-around">
                <div class="col-4">
                    <div class="text-center">
                        <img src="Img/carcasa-de-telefono.png" alt="concepto" width="60" height="50">
        
                        <div>
                            <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">Carcasa</h3>
                            <p class="px-4">Carcasa 100% plastico duro y simulacion de vidrio templado.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="text-center">
                        <img src="Img/instagram.png" alt="concepto" width="60" height="50">
        
                        <div>
                            <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">Instagram</h3>
                            <p class="px-4">Siguenos en instagram en donde podras encontrar varios de nuestros dise??os.</p>
                        </div>
                    </div>                   
                </div>
                <div class="col-4">
                    <div class="text-center">
                        <img src="Img/whatsapp.png" alt="concepto" width="60" height="50">
                        <div>
                            <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">Whatsapp</h3>
                            <p class="px-4">Puedes hacernos tus consultas para responder de manera mas rapido en nuestro Whatsapp</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>   
    </section>

    <section class="shadow" style="background-color: #FFD8B5">
        <div class="card text-white" style="background-color: #F77809">
            <div class="card-body text-center">
              <h4>Despachos a todo chile</h4>
            </div>
        </div>
        
        <div class="container w-75  rounded">
            <div class="row">
                <div class="col">
                    <div class="ms-5 mb-5 my-5 card shadow" >
                        <img src="Img/carcasa 1.png" class="card-img-top" alt="..." height="500px">
                        <div class="card-body">
                          <h5 class="card-title">Carcasa Naruto</h5>
                          <p class="card-text">Encuentrala en nuestro instagram.</p>
                          <a href="#" class="d-grid btn btn-sample">Visitar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="ms-5 mb-5 my-5 card shadow">
                        <img src="Img/carcasa 2.png" class="card-img-top" alt="..." height="500px">
                        <div class="card-body">
                          <h5 class="card-title">Carcasa Goku</h5>
                          <p class="card-text">Encuentrala en nuestro instagram.</p>
                          <a href="#" class="d-grid btn btn-sample">Visitar</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="ms-5 mb-5 my-5 card shadow" >
                        <img src="Img/carcasa 3.png" class="card-img-top" height="500px" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Carcasa NFS</h5>
                          <p class="card-text">Encuentrala en nuestro instagram.</p>
                          <a href="#" class="d-grid btn btn-sample">Visitar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
   
    <!--========================================================== -->
                        <!-- MAPA-->
    <!--========================================================== -->


    
    <section>
        <div id="local" class="shadow">
            <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3543.60385800105!2d-70.35485435556517!3d-27.356850647405178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x969803ee988f304f%3A0x5d6a6c8301905dfb!2sUniversidad%20de%20Atacama!5e0!3m2!1ses!2scl!4v1665338561034!5m2!1ses!2scl" width="680px" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </div>
            <div>
                <div class="wrapper-local">
                    <h2>Ubicado en Copiap??, Chile</h2>
                    <h2 class="text-primary mb-4" id="typewriter"></h2>
                    <p class="fs-5 text-body ">Elijimos Copiapo para nuestro local con el objetivo de estar cerca a nuestros clientes. Estamos ubicados en Copayapu 485, a tan solo 10 min del corazon y el centro Copiapo. ??Visitennos y no se arrepentiran!</p>
                    <section class="d-flex justify-content-start" id="numeros-local">
                        <div>
                            <p class="colorletra fs-5">250</p>
                            <p>Dias de Sol</p>
                        </div>
                        <div>
                            <p class="colorletra fs-5">100%</p>
                            <p>Aprobado</p>
                        </div>
                        <div>
                            <p class="colorletra fs-5">28 ??C</p>
                            <p>Temperatura</p>
                        </div>
                  </section>
                </div>
            </div>
        </div>
    </section>

    <table class="table table-hover shadow my-5" style="background-color: #FFD8B5" >
        <thead>
          <tr>
            <th scope="col">Ultimos compradores</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Usuario</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
    </table>

    <section class="shadow p-3 mb-5 rounded">

        <div class="container">
            <div class="row justify-content-around">
                <div class="col-3">
                    <div class="text-center">
                        <img src="Img/garantia.png" alt="concepto" width="60" height="50">
        
                        <div>
                            <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">Garantia</h3>
                            <p class="px-4">1 meses de garant??a en todos nuestros productos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="text-center">
                        <img src="Img/tarjeta.png" alt="concepto" width="60" height="50">
        
                        <div>
                            <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">Pago Seguro</h3>
                            <p class="px-4">Webpay, transferencia, efectivo.</p>
                        </div>
                    </div>                   
                </div>
                <div class="col-3">
                    <div class="text-center">
                        <img src="Img/camion-de-carga.png" alt="concepto" width="60" height="50">
                        <div>
                            <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">Despachos</h3>
                            <p class="px-4">Env??os a todo Chile a trav??s de Chilexpress.</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-3">
                    <div class="text-center">
                        <img src="Img/grupo.png" alt="concepto" width="60" height="50">
                        <div>
                            <h3 class="fs-5 mt-4 px-4 pb-1">Servicio al cliente </h3>
                            <p class="px-4">Respondemos a todas tus consultas, siempre con la mejor disposici??n.</p>
                        </div>
                    </div>
              </div>
            </div>
        </div>   
    </section>

    

    <div class="section container  shadow rounded" id="lg">
        <div class="row">
            <div class="col">
                <h1 class="fw-bold text-center bold text-white py-2">SUSCR??BETE</h1>
                <p class="text-center bold text-white" >??Ent??rate de nuestras ofertas, beneficios y concursos que tenemos para ti!</p>

                <form action="">
                    <div class="mb-3 text-center">
                        <label for="email" class="form-label"><h2 class="text-white"> Correo electr??nico </h2></label>
                        <input type="email" class="form-control" name="email" required placeholder="Ingrese su correo electr??nico">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="mb-5 btn btn-ini">Enviar</button>
                    </div>
                </form>

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