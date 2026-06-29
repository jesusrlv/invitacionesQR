<?php
require('fpdf/fpdf.php');
require('conn.php');

class PDF extends FPDF{

    function Header(){
        $this->Image('../img/panini.jpg', 0, 0, 110, 140);
        $this->Image('../img/logo_gamers_2026.png', 75, 5, 30, 30, 'PNG');
    }

}

$pdf = new PDF('P', 'mm', array(110, 140));
$pdf->SetMargins(0, 0, 0);
$pdf->SetAutoPageBreak(false);

$sql = mysqli_query($conn, "
    SELECT *
    FROM invitacion
    WHERE tipoInvitacion = 'Gamers Cup 2026'
    ORDER BY id ASC
");

while($row = mysqli_fetch_assoc($sql)){
    $pdf->AddPage();
    
    // --- FOTO ---
    $foto = "../docs/" . $row['codigo_unico'] . ".jpg";
    if(file_exists($foto)){
        $pdf->Image($foto, 8, 18, 42, 55);
    }
    
    // --- GAMERTAG ---
    $pdf->SetFont('Arial', 'B', 18);
    $pdf->SetTextColor(255, 255, 255);
    $pdf->SetXY(8, 122);
    $pdf->Cell(94, 5, utf8_decode("@" . $row['email']), 0, 1, 'L');
    
    // --- NOMBRE (con altura automática) ---
    $pdf->SetFont('Arial', 'B', 13);
    $pdf->SetTextColor(255, 255, 255);
    $pdf->SetXY(8, 86);
    
    // Calcular altura del nombre
    // $nombre = utf8_decode(strtoupper($row['nombre']));
    // $pdf->MultiCell(94, 5, $nombre, 0, 'L');
    
    // Obtener la posición Y actual después del nombre
    $yActual = $pdf->GetY();
    
    // --- EVENTO (siempre al final) ---
    $pdf->SetFont('Arial', 'B', 5);
    $pdf->SetTextColor(255, 215, 0);
    $pdf->SetXY(8, 133); // Fijo al final
    $pdf->Cell(94, 5, utf8_decode(strtoupper($row['nombre']. " | " . $row['municipio'])), 0, 1, 'L');
}

$pdf->Output('I', 'gafetes_gamers_cup_2026.pdf');
?>