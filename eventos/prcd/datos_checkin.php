<?php
    include('qc.php');

        date_default_timezone_set('America/Mexico_City');
        setlocale(LC_TIME, 'es_MX.UTF-8');
        $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");

        $evento = $_POST['evento'];
        $cadena = $_POST['c'];

        $sql = "SELECT * FROM invitacion WHERE email = '$cadena'";
        $resultadoSql = $conn->query($sql);
        $rowQuery = $resultadoSql->fetch_assoc();

        echo'
        <div style="margin-top:15px; padding:15px; background:#d4edda; border-radius:8px; border-left:4px solid #28a745;">
            <h4 style="color:#155724; margin-bottom:10px;">¡Check-in exitoso!</h4>
            <p class="pb-3 mb-0 small lh-sm border-bottom">
              <strong class="d-block text-gray-dark">Nombre completo:</strong>
              '.$rowQuery['nombre'].'
            </p>
            <p class="pb-3 mt-3 mb-0 small lh-sm border-bottom">
              <strong class="d-block text-gray-dark">Municipio:</strong>
              '.$rowQuery['municipio'].'
            </p>
            <p class="pb-3 mt-3 mb-0 small lh-sm border-bottom">
              <strong class="d-block text-gray-dark">Edad:</strong>
              '.$rowQuery['edad'].'
            </p>
            <p class="pb-3 mt-3 mb-0 small lh-sm border-bottom">
              <strong class="d-block text-gray-dark">Email:</strong>
              '.$rowQuery['email'].'
            </p>
            <p class="pb-3 mt-3 mb-0 small lh-sm border-bottom">
              <strong class="d-block text-gray-dark">Email:</strong>
              '.$rowQuery['email'].'
            </p>
        </div>
        ';

?>