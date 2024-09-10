<?php
    include('qc.php');

    if (isset($_POST['c'])) {

        date_default_timezone_set('America/Mexico_City');
        setlocale(LC_TIME, 'es_MX.UTF-8');
        $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");

        $evento = $_POST['evento'];
        $cadena = $_POST['c'];

        $sqlValidacion = "SELECT * FROM invitacion WHERE email = '$cadena'";
        $resultadoSqlValidacion = $conn->query($sqlValidacion);
        $numRowsV = $resultadoSqlValidacion->num_rows;

        if($numRowsV == 0){
            echo json_encode(array('success' => 3));
        }
        else{

        $sql = "SELECT * FROM invitacion WHERE email = '$cadena' AND checkin = 1";
        $resultadoSql = $conn->query($sql);
        $numRows = $resultadoSql->num_rows;

        if($numRows == 1){
            echo json_encode(array('success' => 0));
        }
        else{
            $sqlQuery ="SELECT * FROM invitacion WHERE email = '$cadena'";
            $resultadoSqlQuery = $conn->query($sqlQuery);
            $rowsqlQuery = $resultadoSqlQuery->fetch_assoc();

            $qr = $rowsqlQuery['email'];
            $id = $rowsqlQuery['id'];
            $flag = 1;

            // $sqlInsert = "INSERT INTO invitacion (asistente,evento,asistencia,fecha_registro,idQr) VALUES ('$id','$evento','$flag','$fecha_sistema','$qr')";
            $sqlUpdate = "UPDATE invitacion SET checkin = '$flag' WHERE email = '$cadena'";
            $resultadoSqlInsert = $conn->query($sqlUpdate);

            if($resultadoSqlInsert){
                echo json_encode(array('success' => 1));
            }
        }
    } // fin else valicacion
    }
    else{
        echo json_encode(array('success' => 3));
    }

?>