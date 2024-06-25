<?php
require('fpdf/fpdf.php');
$total=0;
class PDF extends FPDF
{
// Cabecera de página
function Header()
{

    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'',0,0,'C');
    // Salto de línea
    $this->Ln(20);

$this->Cell(80,10,utf8_decode('TICKET DE COMPRA'),0,1);
 /*$this->Cell(80,10,'Modelo',0,0,'C',0);
 $this->Cell(80,10,'Marca',0,0,'C',0);
 $this->Cell(80,10,'Tipo',0,0,'C',0);
 $this->Cell(80,10,'Cc',0,0,'C',0);
 $this->Cell(80,10,'Descripcion',0,1,'C',0);
 $this->Cell(80,10,'Precio',0,0,'C',0);
 $this->Cell(80,10,'Cantidad',0,0,'C',0);
 $this->Cell(80,10,'SubTotal',0,0,'C',0);*/
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'',0,0,'C');
}
}
 require('conexion.php');
                                        try {   //try captura cualquier error o excepción       
    
                                        $stmt = $conn->prepare("SELECT * FROM venta_detalle WHERE id_venta=(SELECT MAX(id_venta)FROM venta_detalle ) ");  //$guardo en la variable $stmt La consulta a través de la conexión
                                        $stmt->execute(); //se ejecuta la consulta y guarda la tabla de mysql en la variable $stmt

                                        // pone el resultado (la tabla) en un arreglo de tipo asociativo 

                                        
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);

 while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

  $pdf->Cell(80,10,'Modelo',0,0,'C',0); $pdf->Cell(80,10, $row['modelo'],0,1,'C',0);
  $pdf->Cell(80,10,'Marca',0,0,'C',0); $pdf->Cell(80,10, $row['marca'],0,1,'C',0);
  $pdf->Cell(80,10,'Tipo',0,0,'C',0); $pdf->Cell(80,10, $row['tipo'],0,1,'C',0);
  $pdf->Cell(80,10,'Cc',0,0,'C',0); $pdf->Cell(80,10, $row['cc'],0,1,'C',0);
  $pdf->Cell(80,10,'Descripcion',0,0,'C',0); $pdf->Cell(80,10, $row['descripcion'],0,1,'C',0);
  $pdf->Cell(80,10,'Precio',0,0,'C',0); $pdf->Cell(80,10,'$ '.$row['precio'],0,1,'C',0);
  $pdf->Cell(80,10,'Cantidad',0,0,'C',0); $pdf->Cell(80,10, $row['cantidad'],0,1,'C',0);
  $pdf->Cell(80,10,'SubTotal',0,0,'C',0); $pdf->Cell(80,10,'$ '. $row['subtotal'],0,1,'C',0);
  $pdf->Ln(50);
}
} catch(PDOException $e) {
                                                 echo "Error: " . $e->getMessage();
                                        }
                                        




                                        
                                        
$pdf->Output();
?>