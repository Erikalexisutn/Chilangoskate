<?php
require("conexion.php");
$id_venta=$_POST['id_venta'];
$id_moto=$_POST['id_moto'];
$id_motoA=$_POST['id_motoA'];
$modelo=$_POST['modelo'];
$marca=$_POST['marca'];
$tipo=$_POST['tipo'];
$descripcion=$_POST['des'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];



$subtotal=$precio*$cantidad;
try {
$sql = "UPDATE venta_detalle SET modelo= '$modelo' ,marca= '$marca',tipo='$tipo',descripcion='$descripcion', precio='$precio',cantidad='$cantidad',subtotal='$subtotal',id_moto= '$id_moto' WHERE id_venta='$id_venta' AND id_moto='$id_motoA'";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  
  header("Location:ventas.php");
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
?>