<?php 
include_once("conexion.php");
$id_moto=$_POST['id_moto'];
$modelo=$_POST['modelo'];
$marca=$_POST['marca'];
$tipo=$_POST['tipo'];
$precio=$_POST['precio'];
$descripcion=$_POST['des'];
$imagen=$_POST['imagen'];


$sente=$conn->prepare("INSERT INTO moto(id_moto,modelo,marca,tipo,precio,descripcion,imagen)VALUES(:id_moto,:modelo,:marca,:tipo,:precio,:descripcion,:imagen)");
$sente->bindParam(':id_moto',$id_moto);
$sente->bindParam(':modelo',$modelo);
$sente->bindParam(':marca',$marca);
$sente->bindParam(':tipo',$tipo);
$sente->bindParam(':precio',$precio);
$sente->bindParam(':descripcion',$descripcion);
$sente->bindParam(':imagen',$imagen);

if ($sente->execute()) {
	return header("Location:motos.php");
}else{
	echo  "<script>alert('Error:')</script>" . $e->getMessage();
}
?>