<?php

use App\config\Conexion;

require('../../../assets/fpdf/fpdf.php');
require('../../config/Conexion.php');
function dato(){
    $conexion = new Conexion();
    $arreglo = ['1','2','3','4','5','6','7'];
    return $arreglo;
}
$dato = dato();
$pdf = new FPDF();
$pdf->AddPage();
$pdf->setFont('Arial','B', 15);

$pdf->Cell(100, 10, $dato[0], 1, 0, 'C');
$pdf->Output();

?>