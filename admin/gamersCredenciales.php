<?php
require('fpdf/fpdf.php');
require('conn.php');

$query = $conn->query("SELECT * FROM invitacion WHERE tipoInvitacion = 'Gamers Cup 2026' ORDER BY id ASC");

// --- TAMAÑO GAFETE 2.5" x 4" ---
$pdf = new FPDF('P', 'mm', array(63.5, 101.6));
$pdf->SetMargins(0, 0, 0);
$pdf->SetAutoPageBreak(false);

// =====================================================
// PALETA DE COLORES — estética "esports dark premium"
// =====================================================
$negro      = [10,  10,  18];   // fondo total
$azulOsc    = [14,  14,  40];   // panel central
$cian       = [0,   200, 255];  // acento primario neón
$violeta    = [120, 40,  220];  // acento secundario
$blanco     = [255, 255, 255];
$grisClaro  = [180, 180, 200];
$grisMedio  = [100, 100, 130];
$cianOsc    = [0,   80,  120];

// =====================================================
// FUNCIÓN AUXILIAR: línea con color
// =====================================================
function lineaColor($pdf, $x1, $y1, $x2, $y2, $color, $grosor = 0.3) {
    $pdf->SetDrawColor($color[0], $color[1], $color[2]);
    $pdf->SetLineWidth($grosor);
    $pdf->Line($x1, $y1, $x2, $y2);
}

while ($row = $query->fetch_assoc()) {
    $pdf->AddPage();

    // ====================================================
    // 1. FONDO NEGRO TOTAL
    // ====================================================
    $pdf->SetFillColor($negro[0], $negro[1], $negro[2]);
    $pdf->Rect(0, 0, 63.5, 101.6, 'F');

    // ====================================================
    // 2. PANEL CENTRAL AZUL OSCURO (zona de contenido)
    // ====================================================
    $pdf->SetFillColor($azulOsc[0], $azulOsc[1], $azulOsc[2]);
    $pdf->Rect(3, 3, 57.5, 95.6, 'F');

    // ====================================================
    // 3. BORDES NEÓN CIAN (borde exterior)
    // ====================================================
    lineaColor($pdf, 3, 3, 60.5, 3, $cian, 0.6);       // top
    lineaColor($pdf, 3, 98.6, 60.5, 98.6, $cian, 0.6); // bottom
    lineaColor($pdf, 3, 3, 3, 98.6, $cian, 0.6);        // left
    lineaColor($pdf, 60.5, 3, 60.5, 98.6, $cian, 0.6);  // right

    // Esquinas decorativas (L-shape corners en cian brillante)
    $c = $cian;
    lineaColor($pdf, 3, 3, 12, 3, $c, 1.2);
    lineaColor($pdf, 3, 3, 3, 10, $c, 1.2);
    lineaColor($pdf, 51.5, 3, 60.5, 3, $c, 1.2);
    lineaColor($pdf, 60.5, 3, 60.5, 10, $c, 1.2);
    lineaColor($pdf, 3, 98.6, 12, 98.6, $c, 1.2);
    lineaColor($pdf, 3, 91.6, 3, 98.6, $c, 1.2);
    lineaColor($pdf, 51.5, 98.6, 60.5, 98.6, $c, 1.2);
    lineaColor($pdf, 60.5, 91.6, 60.5, 98.6, $c, 1.2);

    // ====================================================
    // 4. HEADER — banda superior con acento violeta→cian
    // ====================================================
    // Banda principal oscura
    $pdf->SetFillColor(20, 10, 50);
    $pdf->Rect(3, 3, 57.5, 14, 'F');

    // Línea inferior del header en cian
    lineaColor($pdf, 3, 17, 60.5, 17, $cian, 0.5);

    // Línea decorativa violeta más delgada
    lineaColor($pdf, 3, 18, 60.5, 18, $violeta, 0.2);

    // Texto "GAMERS CUP" en el header
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->SetTextColor($cian[0], $cian[1], $cian[2]);
    $pdf->SetXY(3, 5);
    $pdf->Cell(57.5, 5, 'GAMERS CUP', 0, 1, 'C');

    $pdf->SetFont('Arial', 'B', 7);
    $pdf->SetTextColor($violeta[0], $violeta[1], $violeta[2]);
    $pdf->SetXY(3, 11);
    $pdf->Cell(57.5, 4, '2 0 2 6', 0, 1, 'C');

    // ====================================================
    // 5. LOGO (si existe)
    // ====================================================
    // Mostramos el logo pequeño arriba a la derecha del header
    // $pdf->Image('../img/logo_gamers_2026.png', 48, 4, 10);

    // ====================================================
    // 6. FOTO CON MARCO HEX SIMULADO
    // ====================================================
    $rutaFoto = '../docs/' . $row['codigo_unico'] . '.jpg';

    // Marco exterior cian
    $pdf->SetFillColor($cian[0], $cian[1], $cian[2]);
    $pdf->Rect(14.25, 20, 35, 35, 'F');

    // Marco interior violeta
    $pdf->SetFillColor($violeta[0], $violeta[1], $violeta[2]);
    $pdf->Rect(15.25, 21, 33, 33, 'F');

    // Fondo foto
    $pdf->SetFillColor(30, 30, 60);
    $pdf->Rect(16.25, 22, 31, 31, 'F');

    if (file_exists($rutaFoto)) {
        $pdf->Image($rutaFoto, 16.25, 22, 31, 31);
    } else {
        $pdf->SetFont('Arial', 'B', 6);
        $pdf->SetTextColor($grisMedio[0], $grisMedio[1], $grisMedio[2]);
        $pdf->SetXY(16.25, 35);
        $pdf->Cell(31, 4, 'SIN FOTO', 0, 1, 'C');
    }

    // ====================================================
    // 7. BADGE DE TIPO (debajo de la foto)
    // ====================================================
    $pdf->SetFillColor($cian[0], $cian[1], $cian[2]);
    $pdf->Rect(12, 57, 39.5, 5.5, 'F');

    $pdf->SetFont('Arial', 'B', 6.5);
    $pdf->SetTextColor($negro[0], $negro[1], $negro[2]);
    $pdf->SetXY(12, 58.2);
    $pdf->Cell(39.5, 3.5, utf8_decode(strtoupper($row['tipoInvitacion'])), 0, 1, 'C');

    // ====================================================
    // 8. SEPARADOR DECORATIVO
    // ====================================================
    lineaColor($pdf, 8, 65.5, 55.5, 65.5, $grisMedio, 0.15);

    // Rombo central en la línea
    $pdf->SetFillColor($cian[0], $cian[1], $cian[2]);
    // Simulamos un rombo con un rect rotado — usamos dos triángulos simples
    // En FPDF básico, hacemos un cuadrado pequeño rotado visualmente centrado
    $pdf->Rect(30.25, 64.8, 3, 1.5, 'F');

    // ====================================================
    // 9. GAMERTAG / EMAIL (nombre de jugador)
    // ====================================================
    // Etiqueta "PLAYER"
    $pdf->SetFont('Arial', 'B', 5);
    $pdf->SetTextColor($cian[0], $cian[1], $cian[2]);
    $pdf->SetXY(3, 67);
    $pdf->Cell(57.5, 3, 'GAMER TAG', 0, 1, 'C');

    // Email/Gamertag — destacado
    $gamertag = utf8_decode($row['email']);
    // Ajuste de fuente según longitud
    $fontSizeGT = (strlen($gamertag) > 22) ? 7.5 : 9;
    $pdf->SetFont('Arial', 'B', $fontSizeGT);
    $pdf->SetTextColor($blanco[0], $blanco[1], $blanco[2]);
    $pdf->SetXY(4, 71);
    $pdf->Cell(55.5, 5, $gamertag, 0, 1, 'C');

    // ====================================================
    // 10. NOMBRE COMPLETO
    // ====================================================
    lineaColor($pdf, 8, 78, 55.5, 78, $azulOsc, 0.2);

    $pdf->SetFont('Arial', 'B', 5);
    $pdf->SetTextColor($grisMedio[0], $grisMedio[1], $grisMedio[2]);
    $pdf->SetXY(3, 79);
    $pdf->Cell(57.5, 3, 'NOMBRE', 0, 1, 'C');

    $nombre = utf8_decode($row['nombre']);
    $fontSizeNombre = (strlen($nombre) > 24) ? 7 : 8.5;
    $pdf->SetFont('Arial', 'B', $fontSizeNombre);
    $pdf->SetTextColor($grisClaro[0], $grisClaro[1], $grisClaro[2]);
    $pdf->SetXY(4, 83);
    $pdf->Cell(55.5, 4, $nombre, 0, 1, 'C');

    // ====================================================
    // 11. MUNICIPIO
    // ====================================================
    lineaColor($pdf, 8, 89, 55.5, 89, $azulOsc, 0.2);

    $pdf->SetFont('Arial', 'B', 5);
    $pdf->SetTextColor($grisMedio[0], $grisMedio[1], $grisMedio[2]);
    $pdf->SetXY(3, 90);
    $pdf->Cell(57.5, 3, 'Municipio', 0, 1, 'C');

    $pdf->SetFont('Arial', 'I', 7);
    $pdf->SetTextColor($grisClaro[0], $grisClaro[1], $grisClaro[2]);
    $pdf->SetXY(4, 93.5);
    $pdf->Cell(55.5, 3, utf8_decode($row['municipio']), 0, 1, 'C');

    // ====================================================
    // 12. FOOTER — ID único
    // ====================================================
    $pdf->SetFillColor($negro[0], $negro[1], $negro[2]);
    $pdf->Rect(3, 97, 57.5, 4.6, 'F');

    lineaColor($pdf, 3, 97, 60.5, 97, $cian, 0.4);

    // Puntos decorativos laterales
    $pdf->SetFillColor($cian[0], $cian[1], $cian[2]);
    $pdf->Rect(5, 98.5, 1.5, 1.5, 'F');
    $pdf->Rect(57, 98.5, 1.5, 1.5, 'F');

    $pdf->SetFont('Arial', 'B', 5.5);
    $pdf->SetTextColor($cian[0], $cian[1], $cian[2]);
    $pdf->SetXY(3, 98.5);
    $pdf->Cell(57.5, 3, 'ID: ' . strtoupper($row['codigo_unico']), 0, 1, 'C');
}

$pdf->Output('I', 'gafetes_gamers_cup_2026.pdf');
?>