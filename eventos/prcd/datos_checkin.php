<?php
    include('qc.php');

        date_default_timezone_set('America/Mexico_City');
        setlocale(LC_TIME, 'es_MX.UTF-8');
        $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");

        $evento = $_POST['evento'];
        $cadena = $_POST['c'];

        $sql = "SELECT * FROM asistentes WHERE idQr = '$cadena'";
        $resultadoSql = $conn->query($sql);
        $rowQuery = $resultadoSql->fetch_assoc();

        // semestre
        $semestre = $rowQuery['semestre'];
        $sqlSemestre = "SELECT * FROM semestre WHERE id = '$semestre'";
        $resultadoSemestre = $conn->query($sqlSemestre);
        $rowSemestre = $resultadoSemestre->fetch_assoc();

        // carrera
        $carrera = $rowQuery['carrera'];
        $sqlCarrera = "SELECT * FROM programa WHERE id = '$carrera'";
        $resultadoCarrera = $conn->query($sqlCarrera);
        $rowCarrera = $resultadoCarrera->fetch_assoc();

        echo'
        <p class="pb-3 mb-0 small lh-sm border-bottom">
              <strong class="d-block text-gray-dark">Nombre completo:</strong>
              '.$rowQuery['nombre'].' '.$rowQuery['apellidos'].'
            </p>
            <p class="pb-3 mt-3 mb-0 small lh-sm border-bottom">
              <strong class="d-block text-gray-dark">Semestre:</strong>
              '.$rowQuery['semestre'].'
            </p>
            <p class="pb-3 mt-3 mb-0 small lh-sm border-bottom">
              <strong class="d-block text-gray-dark">Grupo:</strong>
              '.$rowQuery['grupo'].'
            </p>
            <p class="pb-3 mt-3 mb-0 small lh-sm border-bottom">
              <strong class="d-block text-gray-dark">Carrera:</strong>
              '.$rowQuery['carrera'].'
            </p>
            <p class="pb-3 mt-3 mb-0 small lh-sm border-bottom">
              <strong class="d-block text-gray-dark">Número de control:</strong>
              '.$rowQuery['numero_control'].'
            </p>
        ';

?>