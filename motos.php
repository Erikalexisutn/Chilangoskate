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
                <a class="navbar-brand" href="index.html">Administrador|Chilango Skate</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="admi.html"><FONT color="orange"> INICIO ADMIN </FONT></a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="agregarM.html">Agregar</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="modificarM.html">Modificar</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="eliminarM.html">Eliminar</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.html"><FONT color="#F34F68">salir</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/1.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1> Administrador PRODUCTOS </h1>
                            <span class="subheading"> Chilango Skate</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->

        <section class="about-section text-center" id="info">
         <div class="container px-4 px-lg-5">
                
               
                    <?php
                                    
                                        echo "<table class='table table-bordered' >";
echo "<div align='center'>";
                                       
                                        echo "<tr>
                                        <th>Id Producto</th>
                                       
                                        <th>Modelo</th>
                                        <th>Marca</th>
                                        <th>Tipo</th>
                                        
                                        <th>Description</th>
                                        <th>Precio</th>
                                        <th>Imagen</th>
                                        </tr>";  //creo la cabecera de mi tabla

                                        require("conexion.php"); //mando a llamar mi conexión

                                        try {   //try captura cualquier error o excepción       
  
                                        $stmt = $conn->prepare("SELECT * FROM moto");  //$guardo en la variable $stmt La consulta a través de la conexión
                                        $stmt->execute(); //se ejecuta la consulta y guarda la tabla de mysql en la variable $stmt

                                        // pone el resultado (la tabla) en un arreglo de tipo asociativo 

                                         while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
               
                                        echo "<tr><td>";  
                                        echo $row["id_moto"]."</td>";
                                        
                                        echo $row["nombre"]."</td><td>";
                                        echo $row["modelo"]."</td><td>";
                                        echo $row["marca"]."</td><td>";
                                        echo $row["tipo"]."</td><td>";
                                        
                                        echo $row["descripcion"]."</td><td>"; 
                                        echo $row["precio"]."</td><td>";
                                        echo $row["imagen"]."</td>";
                                
                                        
                                        echo "</tr>";               
                                        }
                                        } catch(PDOException $e) {
                                                 echo "Error: " . $e->getMessage();
                                        }
                                        $conn = null;
                                        echo "</div>";
                                        echo "</table>";

                                        ?>
                                         <br>
                                        <br>
                                        <a href="agregarM.html"> <input type='submit' class="btn btn-success" value='AGREGAR'></a>
                                        <a href="eliminarM.html"> <input type='reset' class="btn btn-danger" value='ELIMINAR'></a>
                                        

                                <br><br><br><br>
                </div>
           
         </section>
        
        










        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
