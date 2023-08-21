<?php
include('prcd/qc.php');
date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'es_MX.UTF-8');
$fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");

    //por fecha Activo
    if(isset($_POST['fecha'])){
        $fechaBusqueda = $_POST['fecha'];
        $annio = substr($fechaBusqueda, 0, 4);
        $mes = substr($fechaBusqueda, 5, 2); 
        $sqlBusqueda = "SELECT * FROM eventos WHERE YEAR(fecha) = $annio 
        AND MONTH(fecha)  = $mes AND activo = 1 ORDER BY fecha ASC";
        $resultadoEvento = $conn->query($sqlBusqueda);
    }
    else{ //mes y año actual Activo
        $queryEventos = "SELECT * FROM eventos WHERE YEAR(fecha) = YEAR(CURRENT_DATE()) 
        AND MONTH(fecha) = MONTH(CURRENT_DATE()) AND activo = 1 ORDER BY fecha ASC";
        $resultadoEvento = $conn->query($queryEventos);
    }

    // query eventos cámara qr
    if(isset($idEventos)){
        $sqlEventosQR = "SELECT * FROM eventos WHERE id = '$idEventos'";
        $resultadoEventoQR = $conn->query($sqlEventosQR);
    }       

?>