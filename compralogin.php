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
                        
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.html">Cerrar Sesion</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('img/pro.jpg')">
            <div class="container position-relative px-4 px-lg-5">
              
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

        <h1 align="center">PRODUCTOS</h1>

        <section class="about-section text-center" id="info">
         <div class="container px-4 px-lg-5">
                

                    <?php

                                        echo "<table class='table table-bordered'>";

                                        echo "<form action='venta.php' method='post'>";
                                        echo "<tr><th>Imagen</th><th>Seleccionar</th><th>Modelo</th><th>Marca</th><th>Tipo</th><th>Precio</th><th>Description</th><th>Cantidad</th></tr>";  //creo la cabecera de mi tabla

                                        require("conexion.php"); //mando a llamar mi conexión

                                        try {   //try captura cualquier error o excepción       
  
                                        $stmt = $conn->prepare("SELECT * FROM moto");  //$guardo en la variable $stmt La consulta a través de la conexión
                                        $stmt->execute(); //se ejecuta la consulta y guarda la tabla de mysql en la variable $stmt

                                        // pone el resultado (la tabla) en un arreglo de tipo asociativo 

                                         while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
               
                                        echo "<tr><td>";
                                        echo "<img src='productos/".$row["imagen"]."'alt='imagen' width='100' height='100'><br>";   //coloco la imagen del producto
                                        echo "</td><td>";
                                        echo "<input name='id_moto[]' type='checkbox' value='".$row["id_moto"]."'>";
                                        echo "</td><td>";  
                                        echo $row["modelo"]."</td><td>";
                                        echo $row["marca"]."</td><td>";
                                        echo $row["tipo"]."</td><td>";
                                        echo $row["precio"]."</td><td>";
                                        
                                        echo $row["descripcion"]."</td><td>"; 
                                        
                                        echo "<input name='modelo[]' type='hidden' value='".$row["modelo"]."'>";
                                        echo "<input name='marca[]' type='hidden' value='".$row["marca"]."'>";
                                        echo "<input name='tipo[]' type='hidden' value='".$row["tipo"]."'>";
                                        
                                        echo "<input name='des[]' type='hidden' value='".$row["descripcion"]."'>";
                                        echo "<input name='precio[]' type='hidden' value='".$row["precio"]."'>";
                                        echo "<input type='number' name='cantidad[]'>";
                                        echo "</td></tr>";               
                                        }
                                        } catch(PDOException $e) {
                                                 echo "Error: " . $e->getMessage();
                                        }
                                        $conn = null;
                                        echo "</table>";
                                        ?>
                                         <br>
                                        <br>
                                        <button class="btn btn-primary text-uppercase " id="submitButton" type="submit">COMPRAR</button>

                                <a href="compra.php"><button class="btn btn-danger" id="submitButton" type="button"> REGRESAR </button></a>
                                        <br><br>
                                        </form>

                                        

                    
                </div>
            </div>
        </div>
         </section>
      
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
