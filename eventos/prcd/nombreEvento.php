<?php

include('qc.php');

$evento = $_POST['evento'];

$sql = "SELECT nombre FROM eventos WHERE id = '$evento'";
$resultadoSql = $conn->query($sql);
$rowQuery = $resultadoSql->fetch_assoc();
echo json_encode([
    'nombre_evento' => $rowQuery['nombre']
    ]);