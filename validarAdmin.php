<!DOCTYPE html>
<html lang="en">
     <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Chilango Skater</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <style type="text/css">
            
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
                        
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="compra.php">Compras</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="registro.html">Registrate</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/ini.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h2>Inicio de Sesion Incorrecto</h2>
                            <span class="subheading">Chilango Skate</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
                      <td align="center">  
      
        <?php
session_start();
require("conexion.php");
$correo=$_POST['correo'];
$contra=$_POST['contra'];
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = $conn -> prepare("SELECT * FROM admin where correo_u= :correo and contra_u= :contra");
$query-> bindParam(':correo',$correo);
$query-> bindParam(':contra',$contra);
$query-> execute();
$usuario = $query->fetch(PDO::FETCH_ASSOC);
if ($usuario) {
    $_SESSION['usuario'] = $usuario["correo_u"];
    header("Location:admi.html");

}else{
	echo "<td align='center'>";

    echo  "<h1 align='center'>DATOS INCORRECTOS O USUARIO NO ENCONTRADO <br><br><br>";

    echo "<a href='iniciar.html'>    <a href='iniciarAdmin.html'><button class='btn btn-primary text-uppercase' type='button'> REINTENTAR </button></a> </a>";

    
 
 	echo "</td>";   
}
?>




</td>




        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>



