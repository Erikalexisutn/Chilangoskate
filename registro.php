<?php 
include_once("conexion.php");
$id_u=$_POST['id_u'];
$nombre_u=$_POST['nombre'];
$correo_u=$_POST['correo'];
$contra_u=$_POST['contra'];

$sente=$conn->prepare("INSERT INTO usuario(id_u,nombre_u,correo_u,contra_u)VALUES(:id_u,:nombre_u,:correo_u,:contra_u)");
$sente->bindParam(':id_u',$id_u);
$sente->bindParam(':nombre_u',$nombre_u);
$sente->bindParam(':correo_u',$correo_u);
$sente->bindParam(':contra_u',$contra_u);

if ($sente->execute()) {
	return header("Location:iniciar.html");
}else{
	return "error";
}
?>