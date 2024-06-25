<?php 
include_once("conexion.php");
$id_venta=$_POST['id_venta'];


$sente=$conn->prepare("DELETE FROM venta_detalle WHERE id_venta= :id_venta");
$sente->bindParam(':id_venta',$id_venta);

if ($sente->execute()) {
	return header("Location:ventas.php");
}else{
	echo  "<script>alert('Error:')</script>" . $e->getMessage();
}
?>