<?php

require('./fpdf.php');

$pdf = new FPDF('P', 'mm', 'A5');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 20);
// $pdf->Image('../assets/images/logo-icon.png', 10, 6, 30);
$data = $pdf->Cell(60, 10, 'J&K Exspress', 1, 'C');
$data = $pdf->Cell(30, 10, "<table>
    <th>Resi</th>");
$data = $pdf->Cell(40, 10, "</table>");

$pdf->Output();
