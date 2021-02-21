<?php  

require 'fpdf/fpdf.php';

class PDF extends FPDF
{
	function Header()
	{
	
		$this->SetFont('Arial','B',12);
		$this->Cell(30);
		$this->Cell(125,10,'FACTURA DE VENTA
			COIN S.A.S',0,1,'C');
		$this->SetFont('Arial','I',12);

		$this->Cell(182,10,'Fabrica y Oficinas: Carrera 34 N° 10-445 Acopi - Cali Colombia',0,1,'C');
		$this->Cell(182,10,'Conmutador: (57) (2) - 6959110 Fax: (57) (2) - 6959231 ',0,1,'C');
		$this->Cell(184,10,'Email: coin@coinsas.com.co',0,1,'C');
		$this->Ln(20);


	}
	function Footer()
	{
		$this->SetY(-15);
		$this->SetFont('Arial','I',8);
		
	}


}




?>