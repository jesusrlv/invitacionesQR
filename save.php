<?php
    include('conn.php');

    $tipoInvitacion = $_POST['tipoInvitacion'];
    $nombre = $_POST['nombre'];
    $municipios = $_POST['municipios'];
    $edad = $_POST['edad'];
    $fecha = $_POST['fecha'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $evento = 1;
    $checkin = 0;

    $sql = "INSERT INTO invitacion (
            tipoInvitacion,
            nombre,
            municipio,
            edad,
            fechaNacimiento,
            telefono,
            email,
            evento,
            checkin
        VALUES (
        '$tipoInvitacion',
        '$nombre',
        '$municipios',
        '$edad',
        '$fecha',
        '$email',
        '$telefono',
        '$evento',
        '$checkin'
        )";
    $resultado = $conn->query($sql);
    
    if($resultado){
        echo json_encode(array('success'=>1));
    }
    else{
        echo json_encode(array('success'=>0));
    }
?>