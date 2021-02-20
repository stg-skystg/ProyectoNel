<?php 
include 'plantilla.php';
require'conexion.php';

$query="select * from factura LIMIT 1";
$resultado = $mysqli->query($query);
	$pdf= new PDF();
	$pdf->AddPage();


	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','I',10);
	$pdf->Cell(20,6,'N. Factura',1,0,'C',1);
	$pdf->Cell(40,6,'Descripcion',1,0,'C',1);
	$pdf->Cell(20,6,'Cantidad',1,0,'C',1);
	$pdf->Cell(20,6,'NIT',1,0,'C',1);
	$pdf->Cell(30,6,'Fecha Radicado',1,0,'C',1);
	$pdf->Cell(30,6,'Fecha Pago',1,0,'C',1);
	$pdf->Cell(30,6,'Valor',1,1,'C',1);
	$pdf->Cell(30,6,utf8_decode('Código Producto'),1,1,'C',1);

	while ($row = $resultado->fetch_assoc()) {
	$pdf->Cell(20,6,$row['id_fact'],1,0,'C',1);
	$pdf->Cell(40,6,utf8_decode($row['descripcion_fact']),1,0,'C',1);
	$pdf->Cell(20,6,$row['cantidad_pr'],1,0,'C',1);
	$pdf->Cell(20,6,$row['nit'],1,0,'C',1);
	$pdf->Cell(30,6,$row['radica_fech'],1,0,'C',1);
	$pdf->Cell(30,6,$row['fecha_fact'],1,0,'C',1);
	$pdf->Cell(30,6,$row['valor_tot'],1,1,'C',1);
	$pdf->Cell(30,6,$row['id_producto'],1,1,'C',1);
	} 
		
	
	$pdf->OutPut();

 ?>