




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

        <h1 align="center">TICKET</h1>

        <section class="about-section text-center" id="info">
         <div class="container px-4 px-lg-5">
                

                    

                                        

                    
        
<?php 
date_default_timezone_set('America/Mexico_City');


$modelo=$_POST['modelo'];
$marca=$_POST['marca'];
$tipo=$_POST['tipo'];
$descripcion=$_POST['des'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$subtotal=0;
$id_moto=$_POST['id_moto'];



$fecha=date('Y-m-d');
$hora= date('h:m:s A');


$numero=count($id_moto);
$acomulado=0;
$j=0;
$i=0;
 

include("conexion.php");



try {

  $sql = "INSERT INTO venta (fecha, hora)
  VALUES ('$fecha', '$hora')";


  // use exec() because no results are returned
  $conn->exec($sql);
  


} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}



  echo "<table class='table' align='center'>";
  echo "<tr class='table-dark'>";
  echo "<td bgcolor='#
C8C8C8'>MODELO </td>  <td bgcolor='#
C8C8C8'>MARCA</td>  <td bgcolor='#
C8C8C8' >TIPO</td>  <td bgcolor='#
C8C8C8'>DESCRIPCION</td>  <td bgcolor='#
C8C8C8'>CANTIDAD</td>  <td bgcolor='#
C8C8C8'>PRECIO</td>  <td bgcolor='#
C8C8C8'>SUBTOTAL</td>   </tr>";
while ($i<$numero) {
	while ($cantidad[$j]==0) {
		$j++;
	}
      
      echo "<tr class='table-active'> <td>".$modelo[$j];
      echo " </td><td> ".$marca[$j];
      echo " </td><td> ".$tipo[$j];
      echo " </td><td> ".$descripcion[$j];
	  echo " </td><td> ".$cantidad[$j];
	  echo " </td><td> $".$precio[$j];
    echo " </td><td>".$precio[$j]*$cantidad[$j];

	$subtotal=$cantidad[$j]*$precio[$j];

	$acomulado=$acomulado+$subtotal;
	
	try {

$sql="INSERT INTO venta_detalle (id_venta, modelo, marca, tipo, descripcion, precio, cantidad, subtotal,id_moto)
  VALUES ((SELECT MAX(id_venta) FROM venta), '$modelo[$j]','$marca[$j]','$tipo[$j]','$descripcion[$j]','$precio[$j]','$cantidad[$j]', '$subtotal','$id_moto[$i]')";

  $conn->exec($sql);
  

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

	
	$i++;
	$j++;
}

echo "</td></tr> <tr class='table-danger'> <td></td><td></td><td></td><td></td><td></td>    <td>TOTAL: </td> <td>$".$acomulado ."</td></tr>";
echo "</table>";

echo "<br><a href='pdf.php'> <input type='submit' class='btn btn-success' value=' Generar PDF'></a><br><br><br><br>";

 ?>

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
