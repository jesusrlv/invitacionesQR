<?php
    include('conn.php');

    $tipoInvitacion = $_POST['tipoInvitacion'];
    $nombre = $_POST['nombre'];
    $municipios = $_POST['municipios'];
    $edad = $_POST['edad'];
    $fecha = $_POST['fecha'];
    $email = $_POST['email'];
    $evento = 1;
    $checkin = 0;
    
    // Generar cadena alfanumérica única
    $codigoUnico = uniqid() . bin2hex(random_bytes(8));

    $sql = "INSERT INTO invitacion (
            tipoInvitacion,
            nombre,
            municipio,
            edad,
            fechaNacimiento,
            email,
            evento,
            checkin,
            codigo_unico
            )
        VALUES (
        '$tipoInvitacion',
        '$nombre',
        '$municipios',
        '$edad',
        '$fecha',
        '$email',
        '$evento',
        '$checkin',
        '$codigoUnico'
        )";
    $resultado = $conn->query($sql);
    
    if($resultado){
        echo json_encode(array(
            'success'=>1,
            'codigo'=> $codigoUnico
        ));
    }
    else{
        $error = $conn->error;
        echo json_encode(array(
            'success'=>0,
            'error'=> $error
        ));
    }
?>