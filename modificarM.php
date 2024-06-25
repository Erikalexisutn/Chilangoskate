<?php 
include_once("conexion.php");
$id_moto=$_POST['id_moto'];
$modelo=$_POST['modelo'];
$marca=$_POST['marca'];
$tipo=$_POST['tipo'];
$precio=$_POST['precio'];
$descripcion=$_POST['des'];
$imagen=$_POST['imagen'];


$sente=$conn->prepare("UPDATE moto SET modelo=:modelo, marca=:marca, tipo=:tipo, precio= :precio, descripcion=:descripcion, imagen=:imagen WHERE id_moto= :id_moto");
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