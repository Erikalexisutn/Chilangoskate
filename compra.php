<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Chilango Skate</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style type="text/css">
            
.section {
    width: 100%
    height: 100vh;
    background-color: orange;
    display: flex;
    justify-content: center;
    align-items: center;
}

.box{
    width: 33%;
    height: 50vh;
    text-align: center;
    overflow: hidden;
    position: relative;
    margin:1.5%;
}

.box img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.box .hover{
    width: 0%;
    height: 50vh;
    background-color: rgba(56,53,53,0.568);
    position: absolute;
    top: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    transition: .4s all;
}

.hover h1{
    color: aliceblue;
    text-shadow: 1px 1px 1px black;
    font-size: 2.5em;
    text-transform: uppercase;
}

.box:hover .hover{
    width: 100%;
}

        </style>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html">Chilango Skate</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.html">Inicio</a></li>

                          <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="iniciar.html">Iniciar Sesion</a></li>

                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="registro.html">Registrarse</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('img/pro.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1><font >Productos Chilangos</font></h1>
                            <span class="subheading"><font size="7">La mejor calidad al mejor precio</font></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->

        
        
        <section class="about-section text-center" id="info">
         
                
             <div class="item" id="item2">
                <h2><font  color="#a64d79" face="Montserrat" > ¡Haciendo magia! </font></h2>


                <p> <video src="img/skate.mp4" width="940" height="530" autoplay muted loop ></video> </p>
            </div>

                    
                    <form action="iniciar.html">  
<br><br><br>

<button class="btn btn-warning"><h1 align="center"> PRODUCTOS</h1></button>


                    <div class="section">
                        <div class="box">
                            <img src="img/pati.jpg" height="600" width="900"></a>
                            <div class="hover">
                                <h1> PATINETAS </h1></a>
                            </div>
                            
                        </div>
                        <div class="box">
                            <img src="img/ropa.jpg" height="600" width="900"></a>
                            <div class="hover">
                                <h1> ROPA</h1></a>
                            </div>
                            
                        </div>
                        <div class="box">
                            <img src="img/acce.jpg" height="600" width="900"></a>
                            <div class="hover">
                                <h1> ACCESORIOS </h1></a>
                            </div>
                            
                        </div>
                        
                    </div>

                        <button class="btn btn-warning" type="submit">COMPRAR PRODUCTOS</button>
                    </form>
                
            
        
         
      <br><br><br><br>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
