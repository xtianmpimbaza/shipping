<?php

require("fpdf/fpdf.php");
require_once('database.php');
require_once('library.php');

//Get invoice database
//$sql = "SELECT *
	//	FROM tbl_courier
	//	WHERE cid='".$_GET['cid']."'";
//$result = dbQuery($sql);

$qry = mysqli_query($dbConn,"SELECT *
	FROM tbl_courier WHERE cid='".$_GET['cid']."'");
$invoice = mysqli_fetch_array($qry);

//$ship_name="";
//$ship_name = $_GET['ship_name'];

$pdf = new FPDF();

$pdf->AddPage();
//$pdf->Image("images/lomami.png");
$pdf->SetFont("Arial", "B", "20");

//Cell(width, height, text, border, end line,[align]);
//$pdf->Cell(0,10,"Lomami world Invoice", 1,1,"C");

$pdf->SetFont("Arial", "B", "14");
//$pdf->Cell(0,10,"Invoice Number: ".$_GET['cid']."", 1,1,"C");

//$pdf->SetFont("", "", "15");
//$pdf->write(5,"Lomami world Invoice");

$pdf->Cell(130, 5, 'Lomami World', 0,0);
$pdf->Cell(59, 5, 'Invoice', 0,1);// end of line

//set font arial, regular, 12pt

$pdf->SetFont("Arial", "", "12");

$pdf->Cell(130, 5, 'Goma, Avenue Butembo, No 02, Du Volcano/',0,1);
//$pdf->Cell(59, 5,"",0,1);//end of line
//Goma, Avenue Butembo, No 02, Du Volcano/Commune de Goma Bukavu, avenue Emery Patrice L. No 20
$pdf->Cell(130,5,"Commune de Goma Bukavu, avenue Emery Patrice L. No 20",0,1);//end of line

$pdf->Cell(130, 5, 'Goma, RDC, +243',0,0);
$pdf->Cell(25, 5,"Date",0,0);
$pdf->Cell(34, 5,$invoice['book_date'],0,1);//end of line

$pdf->Cell(130, 5, 'Phone +243 816 201 555',0,0);
$pdf->Cell(25, 5,"Invoice #",0,0);
$pdf->Cell(34, 5,$invoice['invice_no'],0,1);//end of line

$pdf->Cell(130, 5, 'Email guillainkoboy@lomamiworld.com',0,0);
$pdf->Cell(25, 5,"Customer ID",0,0);
$pdf->Cell(34, 5,$invoice['cid'],0,1);//end of line

//make a dummy empty cell as a vertical spacer

$pdf->Cell(189, 10,"",0,1);//end of line

//billing address

$pdf->Cell(100, 5,"Bill to",0,1);//end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10, 5,"",0,0);
$pdf->Cell(90, 5,$invoice['ship_name'],0,1);//end of line

//$pdf->Cell(10, 5,"",1,0);
//$pdf->Cell(90, 5,"[Company Name]",1,1);//end of line

$pdf->Cell(10, 5,"",0,0);
$pdf->Cell(90, 5,$invoice['s_add'],0,1);//end of line

$pdf->Cell(10, 5,"",0,0);
$pdf->Cell(90, 5,$invoice['phone'],0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189, 10, "", 0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130, 5, 'Description',1,0);
$pdf->Cell(25, 5,"Taxable",1,0);
$pdf->Cell(34, 5,"Amount",1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

$pdf->Cell(130, 5, $invoice['comments'],1,0);
$pdf->Cell(25, 5,"-",1,0);
$pdf->Cell(34, 5,$invoice['price'],1,1, 'R');//end of line

//summary
$pdf->Cell(130,5,"",0,0);
$pdf->Cell(25, 5, 'Subtotal',0,0);
$pdf->Cell(4, 5,"$",1,0);
$pdf->Cell(30, 5,$invoice['price'],1,1, 'R');//end of line

$pdf->Cell(130,5,"",0,0);
$pdf->Cell(25, 5, 'Taxable',0,0);
$pdf->Cell(4, 5,"$",1,0);
$pdf->Cell(30, 5,"0",1,1, 'R');//end of line

$pdf->Cell(130,5,"",0,0);
$pdf->Cell(25, 5, 'Tax Rate',0,0);
$pdf->Cell(4, 5,"$",1,0);
$pdf->Cell(30, 5,"0%",1,1, 'R');//end of line

$pdf->Cell(130,5,"",0,0);
$pdf->Cell(25, 5, 'Total Due',0,0);
$pdf->Cell(4, 5,"$",1,0);
$pdf->Cell(30, 5,$invoice['price'],1,1, 'R');//end of line

$pdf->Output();



?>