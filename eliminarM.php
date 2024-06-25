<?php 
include_once("conexion.php");
$id_moto=$_POST['id_moto'];


$sente=$conn->prepare("DELETE FROM moto WHERE id_moto= :id_moto");
$sente->bindParam(':id_moto',$id_moto);

if ($sente->execute()) {
	return header("Location:motos.php");
}else{
	echo  "<script>alert('Error:')</script>" . $e->getMessage();
}
?>